<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',60);
            $table->string('email',60);
            $table->enum("gender",["M","F","O"]);
            $table->text("address");
            $table->date("dob")->nullable();
            $table->string("password");
            $table->string("city");
            $table->string("mobile",12);
            $table->boolean("status")->default(1);
            $table->macAddress("macaddress");
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
        Schema::dropIfExists('customer');
    }
}
