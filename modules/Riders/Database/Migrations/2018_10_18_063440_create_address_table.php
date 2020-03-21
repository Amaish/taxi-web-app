<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('rider_id')->nullable();
            $table->string('work')->nullable();
            $table->decimal('work_lat',10, 8)->nullable();
            $table->decimal('work_long',11, 8)->nullable();
            $table->string('home')->nullable();
            $table->decimal('home_lat',10, 8)->nullable();
            $table->decimal('home_long',11, 8)->nullable();
            $table->integer('type')->comment('1=>home,2=>work')->nullable();
            $table->integer('status')->default('1')->comment('1=>Active,2=>Inactive');
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
        Schema::dropIfExists('address');
    }
}
