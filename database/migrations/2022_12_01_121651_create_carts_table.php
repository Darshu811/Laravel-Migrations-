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
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("cid")->unsigned();
            $table->foreign("cid")->references("id")->on("customers");
            $table->integer("pid")->unsigned();
            $table->foreign("pid")->references("id")->on("products");
            $table->string("pname");
            $table->integer("quantity");
            $table->float("price");
            $table->float("subtotal");
            $table->string("status");
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
        Schema::dropIfExists('carts');
    }
};
