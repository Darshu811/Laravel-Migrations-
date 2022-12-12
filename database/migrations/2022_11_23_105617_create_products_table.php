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
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("cid")->unsigned();
            $table->foreign("cid")->references("id")->on("categories");
            $table->integer("subid")->unsigned();
            $table->foreign("subid")->references("id")->on("subcategories");
    
            $table->string("pname");
            $table->string("pimage");
            $table->integer("qty");
            $table->string("price");
            $table->text("pdescriptions");
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
        Schema::dropIfExists('products');
    }
};
