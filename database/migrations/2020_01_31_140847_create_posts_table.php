<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
           
            $table->string('name',128);             //Laravel 5.5  (mismos caracteres)
            $table->string('slug',128)->unique();   //Laravel-5-5    

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
                                    //estados asignados
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');

            $table->string('file',128)->nullable();
            $table->timestamps();

            //Relations
             
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
