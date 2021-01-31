<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    

    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable(); 
            $table->softDeletes();
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
}
