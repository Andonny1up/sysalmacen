<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonacionIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion_ingresos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('centro_id')->constrained('centros');

            $table->integer('tipodonante');
            $table->integer('onuempresa_id')->nullable();
            $table->integer('persona_id')->nullable();

            $table->foreignId('registeruser_id')->constrained('users');

            $table->string('nrosolicitud');
            $table->date('fechadonacion');
            $table->date('fechaingreso');

            $table->text('observacion')->nullable();
            $table->string('gestion', 10);
            $table->smallInteger('condicion')->default(1);  
            $table->timestamps();

            $table->foreignId('deleteuser_id')->nullable()->constrained('users');

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
        Schema::dropIfExists('donacion_ingresos');
    }
}
