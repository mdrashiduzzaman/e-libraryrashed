<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('title');
             $table->string('author');
              $table->string('subject');
               $table->string('callno')->nullable();
                $table->string('class_no')->nullable();
                 $table->string('accession');
                  $table->string('publisher');
                   $table->string('publish_date')->nullable();
                    $table->string('edition')->nullable();
                     $table->string('isbn')->nullable();
                      $table->string('status');
                      $table->longText('description')->nullable();
                      $table->string('content_image')->default('defaultImage.jpg');
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
        Schema::dropIfExists('new_contents');
    }
}
