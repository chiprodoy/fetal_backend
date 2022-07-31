<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryKehamilanRequest;
use App\Http\Requests\KehamilanRequest;
use App\Models\HistoryKehamilan;
use App\Models\Kehamilan;
use App\Models\RoleName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MF\Controllers\ControllerResources;
use MF\Controllers\ApiResponse;
use MF\Controllers\ResponseCode;

class HistoryKehamilanController extends Controller
{

    use ApiResponse;

     /**
     * Show all kehamilan
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
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
     * Tambah kehamilan
     * @authenticated
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
     * Hapus kehamilan
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
}
