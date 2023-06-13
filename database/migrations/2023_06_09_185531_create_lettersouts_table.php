<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lettersouts', function (Blueprint $table) {
            $table->id();
            $table->string('letter_no');
            $table->date('letterout_date');
            $table->string('regarding');
            $table->string('purpose');
            $table->string('letter_file');
            $table->string('letter_type')->nullable();
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
        Schema::dropIfExists('lettersouts');
    }
}
