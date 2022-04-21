<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_activities', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('uraian_pekerjaan');
            $table->string('kode_pek');
            $table->integer('jumlah');
            $table->string('paraf_svp');
            $table->mediumText('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_activities');
    }
}
