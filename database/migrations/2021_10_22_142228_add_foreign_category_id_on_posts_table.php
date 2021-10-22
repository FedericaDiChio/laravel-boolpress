<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignCategoryIdOnPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Colonna
            $table->unsignedBigInteger('category_id')->after('id')->nullable();

            // Foreign Key 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        
            // Alternativa
            // $table->foreignId('category_id')->after('id')->on('categories')->onDelete('set null')->constrained(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // eliminare foreign key 
            $table->dropForeign('posts_category_id_foreign');
        
            // eliminare colonna
            $table->dropColumn('category_id'); 
        });
    }
}
