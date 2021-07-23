<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("pro_title");
            $table->float("price")->nullable();
            $table->string("seller_name");
            $table->string("seller_contact");
            $table->string("image");
            $table->text("description");
            $table->foreignId("category_id")->constrant();
            $table->string("address");
            $table->string("city");
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
        Schema::dropIfExists('items');
    }
}
