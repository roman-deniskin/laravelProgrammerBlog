<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    const ARTICLE_NAME = 'Дефолтное название статьи';
    
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            //Создание таблицы статей блога
            $table->increments('id');//ID статьи
            $table->string('article_name', 512)->default(CreateArticleTable::ARTICLE_NAME);//Название статьи (ARTICLE_NAME - значение статьи по умолчанию)
            $table->text('article_content')->nullable();//Содержание статьи
            $table->integer('author_id')->nullable();//ID автора статьи
            $table->dateTime('created_at');//Время создания статьи (не изменяется)
            $table->dateTime('updated_at');//Время обновления статьи
            $table->softDeletes();//Псевдоудаление статьи
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
