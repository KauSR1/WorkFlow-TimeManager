<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_records', function (Blueprint $table) {
            $table->id();

            // Chave estrangeira para a tabela 'users'
            $table->foreignId('user_id')
                  ->constrained() // Garante que a chave existe em 'users'
                  ->onDelete('cascade'); // Se o usuário for deletado, os registros de ponto também são

            // O tipo de evento: 'entrada', 'pausa', 'retorno', 'saida'
            $table->string('event_type', 20); 

            // O momento exato (data e hora) do registro
            $table->timestamp('timestamp'); 

            // A data do evento (Útil para consultas de histórico diário)
            $table->date('activity_date');

            // Descrição da atividade (opcional, pode ser NULL)
            $table->text('description')->nullable();

            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_records');
    }
}
