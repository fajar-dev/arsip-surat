<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('letter_id');
            $table->bigInteger('agency_id');
            $table->string('tgl_surat');
            $table->string('no_agenda');
            $table->date('tgl_diterima');
            $table->date('tgl_penyelesaian');
            $table->text('hal');
            $table->string('diteruskan_kpd');
            $table->text('instruksi');
            $table->string('letter_file');
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
        Schema::dropIfExists('disposisis');
    }
}
