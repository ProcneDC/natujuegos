<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Game extends Model
{
	const MODE_PRACTIQUE = 1; // modo practica
	const MODE_CLASSIC = 2; // modo basico
	const MODE_ECO = 3; // modo ecoregiones
	const STATE_INVITATION = 0; // estado invitacion de partida
	const STATE_WAITING_OPPONENT = 1; // estado esperando oponente
	const STATE_WAITING_PLAYS = 2; // estado esperando jugadas
	const STATE_FINISHED = 3; // estado partida finalizada
	const STATE_CANCELLED = 4; // estado partida cancelada
	const STATE_REJECTED = 5; // estado partida rechazada
	const PLAYER_READY = 0; // estado de jugador listo
	const PLAYER_PLAYING = 1; // estado de jugador jugando
	const PLAYER_DONE = 2; // estado de jugador termino de jugar

	// obtener los jugadores de la partida
	public function players() {
		return $this->belongsToMany(User::class, 'games_users')->withPivot('points');
	}

	// obtener el usuario jugador actual de la partida
	public function currentPlayer() {
		return $this->players()->find(Auth::user()->id);
	}

	// obtener el usuario oponente, <> not equal
	public function opponentPlayer() {
		return $this->players()->where('users.id', '<>', Auth::user()->id)->first();
	}

	// setear estado del jugador actual -> VER
	public function setPlayerState($state) {
		$this->players()->updateExistingPivot(Auth::user()->id, ['state' => $state]);
	}

	// setear estado del oponente
	public function setOpponentState($state) {
		$this->players()->updateExistingPivot($this->opponentPlayer()->id, ['state' => $state]);
	}

	/* setear el tiempo que hizo el jugador actual
	public function setPlayerTime($time) {
		$this->players()->updateExistingPivot(Auth::user()->id, ['time' => $time]);
	}*/

	// setear los puntos que hizo el jugador actual
	public function setPlayerPoints($points) {
		$this->players()->updateExistingPivot(Auth::user()->id, ['points' => $points]);
	}

	// obtener el estado del jugador actual
	public function getPlayerState() {
		return $this->currentPlayer()->pivot->state;
	}

	/*
	// obtener el tiempo que hizo el jugador actual
	public function getPlayerTime() {
		return $this->currentPlayer()->pivot->time;
	}
	*/

	// obtener los puntos que hizo el jugador actual
	public function getPlayerPoints() {
		return $this->currentPlayer()->pivot->points;
	}

	// obtener el estado del oponente
	public function getOpponentState() {
		return $this->opponentPlayer()->pivot->state;
	}

	/*
	// obtener el tiempo que hizo el oponente
	public function getOpponentTime() {
		return $this->opponentPlayer()->pivot->time;
	}
	*/

	// obtener los puntos que hizo el oponente
	public function getOpponentPoints() {
		return $this->opponentPlayer()->pivot->points;
	}

	// obtener si la partida la gano el jugador a actual
	public function win() {
		return $this->state == Game::STATE_FINISHED && $this->winner_id == $this->currentPlayer()->id;
	}

	// obtener si la partida la perdio el jugador actual
	public function lose() {
		$this->state == Game::STATE_FINISHED && $this->winner_id && $this->winner_id != $this->currentPlayer()->id;
	}

	// obtener el string del modo de la partida
	public function modeString() {
		if ($this->mode == Game::MODE_PRACTIQUE) {
	  return "PRACTICA";
	} 
		else if ($this->mode == Game::MODE_CLASSIC) {
	  	return "CLASICO";
	} 
		else {
		  return "ECOREGIONES";
	}
	}


	/* funcion para formatear el tiempo para mostrar en pantalla
	static function formatTime($time) {
	  $zero_decimals = "";
	  $zero_seconds = "";
	  $total_seconds = $time/10;
	  $floor_seconds = floor($total_seconds);
	  $decimals = floor(60 * ($total_seconds - $floor_seconds));
	  $seconds = $floor_seconds % 60;
	  $minutes = floor($floor_seconds/60);
	  if ($decimals<10) $zero_decimals = "0";
	  if ($seconds<10) $zero_seconds = "0";
	  return $minutes.":".$zero_seconds.$seconds.".".$zero_decimals.$decimals;
	}*/

}
