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
        Schema::create('apprenant_briefs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apprenant_id')
                ->references('id')
                ->on('apprenant')
                ->onDelete('cascade');
            $table->foreignId('brief_id')
                ->references('id')
                ->on('brief')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_briefs');
    }
};
