<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
  // constantes tipo de notificacion
  const NOTIFY_GENERIC = 0; // notificacion generica
  const NOTIFY_GAME = 1; // notificacion acerca de partidas
  const NOTIFY_FRIENDSHIP = 2; // notificacion acerca de favoritos
  const NOTIFY_ADMIN_MESSAGE = 100; // notificacion del administrador


      public function user()
    {
        //genre_id
        //return $this->belongsTo(Genre::class, 'id_genre', 'key');
        return $this->belongsTo(User::class);
    }
}
