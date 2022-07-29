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
            $table->id();
<<<<<<< HEAD
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("product_id");
=======
            $table->string('size')->nullable();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("product_id");
            $table->integer("qty")->index();
>>>>>>> ac13dccbc8ac98e096a75bd6a6b8dc1de3f817a0
            $table->timestamps();
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->index(['user_id','product_id','size']);
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
