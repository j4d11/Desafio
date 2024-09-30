<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('nome', 'name'); // Renomeia a coluna
        });
    }
    
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('name', 'nome'); // Reverte a alteração se necessário
        });
    }
    
};
