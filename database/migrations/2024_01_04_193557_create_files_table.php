<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Exécutez les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Nom du fichier
            $table->string('path');           // Chemin du fichier
            $table->foreignId('user_id')      // Clé étrangère vers la table users
                  ->constrained()            // Assure la liaison avec la table users
                  ->onDelete('cascade');     // Supprime les fichiers si l'utilisateur est supprimé
            $table->timestamps();            // Crée les colonnes created_at et updated_at
        });
    }

    /**
     * Inversez les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}

