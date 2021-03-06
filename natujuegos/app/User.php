<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // constantes del estado de amistad
    const FRIENDSHIP_NONE = 0; // no es amigo favorito
    const FRIENDSHIP_REQUESTED = 1; // se pidio favorito
    //const FRIENDSHIP_PENDING = 2; // tengo que contestar pedido de amistad
    //const FRIENDSHIP_ACCEPTED = 3; // amigo aceptado

    protected $fillable = [
    'name', 'email', 'password', 'avatar', 'admin', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // devuelve el nombre
    public function fullName() {
      return $this->name;
    }
    // devuelve las estadisticas del usuario
    public function stats() {
      return $this->hasOne(Stat::class);
    }
    // devuelve las partidas del usuario
    public function games() {
      return $this->belongsToMany(Game::class, 'games_users')->with('players')->where('practique', 0)->withPivot('state', 'points');
    }
    // devuelve las notificaciones del usuario
    public function usernotifications() {
      return $this->hasMany(Notification::class)->orderBy('id', 'desc');
    }

        public function notifications()
    {
        //return $this->belongsToMany(Actor::class, 'tabla_relacion');
        return $this->belongsToMany(Notification::class);
    }
    // devuelve las partidas pendientes de jugar
    public function gamesToPlay() {
      return $this->belongsToMany(Game::class, 'games_users')->where('practique', 0)->withPivot('state','points')
        ->where('games_users.state', Game::PLAYER_READY)
        ->orderBy('games.id', 'desc');
    }
    // devuelve las partidas pendientes de jugar
    public function gamesPlaying() {
      return $this->belongsToMany(Game::class, 'games_users')->where('practique',0)->withPivot('state', 'points')
        ->where('games_users.state', Game::PLAYER_PLAYING);
    }
    // devuelve las partidas ya jugadas por el usuario
    public function gamesPlayed() {
      return $this->belongsToMany(Game::class, 'games_users')->where('practique',0)->withPivot('state','points')
        ->where('games_users.state', Game::PLAYER_DONE)->where('games.state', '<', Game::STATE_FINISHED)
        ->orderBy('games.id', 'desc');
    }
    // devuelve las partidas del usuario que han finalizado
    public function gamesFinished() {
      return $this->belongsToMany(Game::class, 'games_users')->where('practique',0)->withPivot('state', 'points')
        ->where('games.state', Game::STATE_FINISHED)
        ->orderBy('games.id', 'desc');
    }

    /* devuelve los amigos aceptados
    public function friendsAccepted() {
      return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')->withPivot('accepted')->where('friends.accepted', 1)->orderBy('username', 'asc')  ;
    }

    // devuelve los amigos aceptados y los que estan pendientes de aceptacion
    public function friends() {
      return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')->withPivot('accepted');
    }*/

    /* devuelve el estado de amistad con otro usuario
    public function friendship($user_id) {
      $user = User::find($user_id);
      $myfriend = $this->friends->where('pivot.friend_id', $user_id)->first();
      $hisfriend = $user->friends->where('pivot.friend_id', $this->id)->first();
      $status = User::FRIENDSHIP_NONE;
      if ($myfriend) {
        $status = $myfriend->pivot->accepted ? User::FRIENDSHIP_ACCEPTED : User::FRIENDSHIP_REQUESTED;
      } else if ($hisfriend) {
        $status = User::FRIENDSHIP_PENDING;
      }
      return $status;
    }*/
}
