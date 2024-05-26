<?php

namespace App\Policies;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EventoPolicy
{
    public function before(User $user, string $ability)
    {
        if( $user->role==2){
            return true;
        }
    }
    public function store(User $user):bool{
        return false;
    }
    public function actualizar(User $user, Evento $evento):bool{

        return false;
    }
    public function eliminar(User $user, Evento $evento):bool{

        return false;
    }



    /**
     * Determine whether the user can view any models.
     */

}
