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
        Schema::table('tickets', function (Blueprint $table) {
            //Registrar la descripcion
            $table->longText('descripcion_problema')->nullable();
            $table->longText('descripcion_resolucion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            //Eliminar la columna
            $table->dropColumn('descripcion_problema')->nullable();
            $table->dropColumn('descripcion_resolucion')->nullable();
        });
    }
};
