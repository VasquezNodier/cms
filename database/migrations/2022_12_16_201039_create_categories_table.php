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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('module');
            $table->string('slug');
            $table->boolean('available');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->softDeletes(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('restrict')->onUpdate(('cascade'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
