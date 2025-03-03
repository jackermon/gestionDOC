<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->string('num_doc',100);
            $table->string('tip_doc',20);
            $table->string('cal_doc',20);
            $table->string('uni_rem',20);
            $table->string('res_asu',250);
            $table->date('fec_doc');
            $table->date('fec_rec');
            $table->string('rut_arc',250)->nullable();
            $table->string('est_doc',20);
            $table->unsignedBigInteger('carpeta_id');
            $table->timestamps();
            $table->foreign('carpeta_id')
                ->references('id')
                ->on('carpetas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos');
    }
};
