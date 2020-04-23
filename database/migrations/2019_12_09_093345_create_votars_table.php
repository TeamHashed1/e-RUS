<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('v_name');
            $table->text('v_phone');
            $table->text('f_name');
            $table->text('m_name');
            $table->text('nob');
            $table->text('nos');
            $table->text('merri');
            $table->text('age');
            $table->text('hof');
            $table->text('freedom');
            $table->text('address');
            $table->text('blood');
            $table->text('p_price');
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
        Schema::dropIfExists('votars');
    }
}
