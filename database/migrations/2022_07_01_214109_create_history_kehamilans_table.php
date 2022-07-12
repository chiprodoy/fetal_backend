<?php

use App\Models\Kehamilan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryKehamilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_kehamilans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Kehamilan::class);
            $table->integer('jumlah_gerakan_janin');
            $table->dateTime('waktu_pengukuran');
            $table->integer('lama_waktu_pengukuran');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_kehamilans');
    }
}
