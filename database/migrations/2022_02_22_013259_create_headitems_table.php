<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaditemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headitems', function (Blueprint $table) {
            $table->id();
            $table->text('judul')->nullable();
            $table->text('lokasi')->nullable();
            $table->text('pembuatan')->nullable();
            $table->text('img_headline')->nullable();
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
        Schema::dropIfExists('headitems');
    }
}
