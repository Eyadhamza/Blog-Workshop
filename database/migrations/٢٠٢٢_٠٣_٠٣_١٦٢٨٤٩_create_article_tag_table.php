<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTagTable extends Migration
{
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->foreignId('article_id')->constrained();
            $table->foreignId('tag_id')->constrained();
            $table->primary(['article_id', 'tag_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('article_tag');
    }
}
