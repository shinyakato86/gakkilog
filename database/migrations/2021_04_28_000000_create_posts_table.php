<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id')->constrained();
            $table->integer('category_id')->unsigned();
           /* $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');*/
            $table->text('detail_name');
            $table->text('detail_maker');
            $table->longtext('detail_detail');
            $table->longtext('detail_comment');
            $table->string('detail_img');
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
        Schema::dropIfExists('posts');
    }
}