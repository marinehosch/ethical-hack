<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',       // Nom du fichier
        'path',       // Chemin de stockage du fichier
        'user_id',    // ID de l'utilisateur qui a uploadé le fichier
        // Ajoutez d'autres attributs si nécessaire
    ];

    /**
     * Obtient l'utilisateur qui a uploadé le fichier.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Ajoutez d'autres méthodes et relations si nécessaire
}
