<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\User;
use App\CustomClasses\NotificationManager;

class UserController extends Controller
{
    private $notifyman; // Notification Manager, inyectado en el constructor

    public function __construct(NotificationManager $notifyman) {
      $this->notifyman = $notifyman; // asigna al atributo $notifyman el NotificationManager inyectado
    }

    // pantalla de perfil
    public function profile() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

	public function index(){
		$users = User::all();
		return $users;
	}

    // guardado de los datos enviados por el formulario de perfil
    public function update(Request $request) {
        $user = Auth::user(); // usuario actual
        $user->fill($request->all()); // llena los datos recibidos
        $user->save(); // guarda
        $file = $request->file('avatar'); // archivo de imagen
        if ($file) { // si hay archivo de imagen
          $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION); // obtengo la extension del archivo
          $path = '/public/avatars/'.$user->id.'.'.$extension; // genero el path al archivo
          Storage::put($path,
                      file_get_contents($file->getRealPath())
                  ); // guardo el archivo de imagen
          $user->avatar = $path; // seteo el avatar con el path a la imagen guardada
          $user->save(); // guardo el usuario
        }
        return redirect()->route('profile'); // vuelvo a mi perfil

        /* OPCION 2

        $this->validator(request()->all());
        //dd(auth()->user());
        auth()->user()->fill(request()->all());
        if(request()->hasFile('avatar')){
          $file = request()->file('avatar');
          $filename = $file->hashName().'.'.$file->extension();
          $folder = "subidos/usuarios";
          $filename = $file->storeAs($folder,$filename);
          auth()->user()->avatar = $filename;
        }

        auth()->user()->save();

        return redirect('/');*/

    }

}
