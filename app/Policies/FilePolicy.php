<?php

namespace App\Policies;

use App\Models\User;
use App\Models\File;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    // Tout le monde peut voir la liste des fichiers
    public function viewAny(User $user)
    {
        return in_array($user->role, ['Invité', 'Lecteur', 'Editeur', 'Administrateur']);
    }

    // Lecteurs, éditeurs, administrateurs peuvent télécharger les fichiers
    public function download(User $user)
    {
        return in_array($user->role, ['Lecteur', 'Editeur', 'Administrateur']);
    }

    // Éditeurs et administrateurs peuvent uploader et supprimer des fichiers
    public function create(User $user)
    {
        return in_array($user->role, ['Editeur', 'Administrateur']);
    }

    public function delete(User $user, File $file)
    {
        return in_array($user->role, ['Editeur', 'Administrateur']);
    }
}

