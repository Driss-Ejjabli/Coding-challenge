<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_commands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantite');
            $table->float('total');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('command_id')->references('id')->on('commands')->onDelete('cascade');
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
        Schema::dropIfExists('line_commands');
    }
}
