<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyGraphRequest;
use App\Http\Requests\HistoryKehamilanRequest;
use App\Http\Requests\KehamilanRequest;
use App\Http\Requests\WeeklyGraphRequest;
use App\Models\HistoryKehamilan;
use App\Models\Kehamilan;
use App\Models\RoleName;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MF\Controllers\ControllerResources;
use MF\Controllers\ApiResponse;
use MF\Controllers\ResponseCode;
use stdClass;

class HistoryKehamilanController extends Controller
{

    use ApiResponse;

     /**
     * Show  history kehamilan
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     * @urlParam uuidKehamilan string required uuid pada record kehamilan
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function index(String $uuidKehamilan,Request $request){
       // $data=Kehamilan::whereRelation('user','uid',$userUid);


       if(Auth::user()->isRole(RoleName::SUPERADMIN)){
        $kehamilan=Kehamilan::where('uuid',$uuidKehamilan)->first();

        if(!$kehamilan)  return $this->error('Kehamilan tidak ditemukan',ResponseCode::NOCONTENT);

        $data=HistoryKehamilan::where('kehamilan_id',$kehamilan->id)->orderBy('created_at', 'desc');

       }else{
        $kehamilan=Kehamilan::where('uuid',$uuidKehamilan)->where('user_id',$request->user()->id)->first();

        if(!$kehamilan)  return $this->error('Kehamilan tidak ditemukan',ResponseCode::NOCONTENT);
        $data=HistoryKehamilan::where('kehamilan_id',$kehamilan->id)->orderBy('created_at', 'desc');


       }

        if($data->count())  return $this->success($data->get(),'Berhasil');
        else return response()->noContent();
    }

     /**
     * Tambah history kehamilan
     * @authenticated
     * @urlParam uuidKehamilan string required uuid pada record kehamilan
     * @bodyParam jumlah_gerakan_janin int required
     * @bodyParam waktu_pengukuran date required
     * @bodyParam lama_waktu_pengukuran int required lama waktu pengukuran dalam satuan detik
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function store(String $uuidKehamilan,HistoryKehamilanRequest $request){
        $request->validated();
        $kehamilan=Kehamilan::where('uuid',$uuidKehamilan)->where('user_id',$request->user()->id)->first();

        if(!$kehamilan)  return $this->error('Kehamilan tidak ditemukan',ResponseCode::NOCONTENT);
         // Retrieve a portion of the validated input data...
        $data=HistoryKehamilan::create([
            'kehamilan_id'=>$kehamilan->id,
            'jumlah_gerakan_janin'=>$request->jumlah_gerakan_janin,
            'waktu_pengukuran'=>$request->waktu_pengukuran,
            'lama_waktu_pengukuran'=>$request->lama_waktu_pengukuran,
            'uuid'=>''
        ]);
        if($data)  return $this->success($data,'Berhasil');
        else return response()->noContent();
    }

    /**
     * Hapus history kehamilan
     * @authenticated
     * @urlParam uuidHistoryKehamilan string required berupa unique id record (uuid) dari history kehamilan
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function destroy(String $uuidHistoryKehamilan){
         // Retrieve a portion of the validated input data...
        try{
            $data=HistoryKehamilan::where('uuid',$uuidHistoryKehamilan)->delete();

        }catch (\Exception $exception) {
            logger()->error($exception);
            $defaultRoute = $this->controllerName.'.edit';
           $respon= ['response'=>[
                'metadata'=>['message'=>'Data gagal dihapus'.substr($exception,0,100).'...','code'=>$this->errorStatus],
            ]];

        }
        return $this->success($data,'Berhasil');
    }
    /**
     * Data Chart harian history kehamilan
     * @authenticated
     * @urlParam uuidKehamilan string required berupa unique id record (uuid) dari kehamilan
     * @bodyParam start_date date required berupa tanggal awal perhitungan data
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function dailyGraph(String $uuidKehamilan,DailyGraphRequest $request){
        $kehamilan=Kehamilan::where('uuid',$uuidKehamilan)->first();
        $history=HistoryKehamilan::where('kehamilan_id',$kehamilan->id)
                    ->whereBetween(DB::raw("DATE(waktu_pengukuran)"),
                    [
                        $request->start_date,
                        $request->start_date
                    ])->get();
        $labels=null;
        $data=null;
        foreach($history as $k => $v){
            $labels[]=$v->waktu_pengukuran;
            $data[]=$v->jumlah_gerakan_janin;
        }
        $output= [
                    'labels'=>$labels,
                    'datasets'=>[
                        (object)['data'=>$data]
                    ],
                    'legend'=>['History Kehamilan Harian '.$request->start_date]
                ];
        return $output;
    }
     /**
     * Data Chart mingguan history kehamilan
     * @authenticated
     * @urlParam uuidKehamilan string required berupa unique id record (uuid) dari kehamilan
     * @bodyParam start_date date required berupa tanggal awal perhitungan data
     * @bodyParam end_date date required berupa tanggal akhir perhitungan data
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function weeklyGraph(String $uuidKehamilan,WeeklyGraphRequest $request){
        $kehamilan=Kehamilan::where('uuid',$uuidKehamilan)->first();
        $history=HistoryKehamilan::where('kehamilan_id',$kehamilan->id)
                    ->whereBetween(DB::raw("DATE(waktu_pengukuran)"),
                    [
                        $request->start_date,
                        $request->end_date
                    ])->get();
        $labels=null;
        $data=null;
        foreach($history as $k => $v){
            $labels[]=$v->waktu_pengukuran;
            $data[]=$v->jumlah_gerakan_janin;
        }
        $output= [
                    'labels'=>$labels,
                    'datasets'=>[
                        (object)['data'=>$data]
                    ],
                    'legend'=>['History Kehamilan Harian '.$request->start_date]
                ];
        return $output;
    }

}
