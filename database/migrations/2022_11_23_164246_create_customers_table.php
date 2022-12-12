<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("firstname");
            $table->string("lastname");
        
            $table->string("email");
            $table->string("password");
            $table->string("DOB");
            $table->string("upload_photo");
            $table->string("gender");
            $table->bigInteger("phone");
            $table->text("address");
            $table->integer("cid")->unsigned();
            $table->foreign("cid")->references("id")->on("countries");
            $table->integer("sid")->unsigned();
            $table->foreign("sid")->references("id")->on("states");
            $table->integer("ctid")->unsigned();
            $table->foreign("ctid")->references("id")->on("cities");
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
        Schema::dropIfExists('customers');
    }
};
