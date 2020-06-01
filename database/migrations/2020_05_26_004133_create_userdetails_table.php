<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index(); 
            $table->unsignedInteger('country_id')->index(); 
            $table->unsignedInteger('city_id')->index(); 
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->enum('gender', ['Male','Female','Other']);
            //$table->enum('identification', ['Fan','Played','DT','Freestyle']);
            $table->string('identification', 255)->nullable();
            $table->string('postal_code', 100);
            $table->string('parent_phone_email', 250);
            $table->date('birth_date');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('country_id')
                ->references('id')->on('countrys')
            ;            

            $table->foreign('city_id')
                ->references('id')->on('citys')
            ;            

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
        Schema::dropIfExists('userdetails');
    }
}
