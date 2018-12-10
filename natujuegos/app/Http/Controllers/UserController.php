<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\User;
use Illuminate\Support\Facades\Validator;

//use App\CustomClasses\NotificationManager;

class UserController extends Controller
{
    //private $notifyman; // Notification Manager, inyectado en el constructor
    /*
    public function __construct(NotificationManager $notifyman) {
      $this->notifyman = $notifyman; // asigna al atributo $notifyman el NotificationManager inyectado
    }*/

    // pantalla de perfil
    public function profile() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function dashboard(){
              $user = Auth::user();

      return view('home_user', compact('user'));
    }

	public function index(){
		$users = User::all();
		return $users;
	}

      public function index_memotest()
    {
        return view('index_memotest');
    }

  protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'avatar' => ['image', 'mimes:jpg,png'],
        ]);
    }

    // guardado de los datos enviados por el formulario de perfil
    public function update(Request $request) {
      /*
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

        /* OPCION 2*/

        $this->validator(request()->all());
        //dd(auth()->user());
        //dd(request()->all());
        auth()->user()->fill(request()->all());
        if(request()->hasFile('avatar')){
          $file = request()->file('avatar');
          $filename = $file->hashName().'.'.$file->extension();
          $folder = "images";
          $filename = $file->storeAs($folder,$filename);
          auth()->user()->avatar = $filename;
                  $path = $request->file('avatar')->store('avatars');

        }

        auth()->user()->save();

        //return redirect('/');

        return redirect()->route('profile');

    }

        //busqueda de usuarios (por nick, nombre o apellido al mismo tiempo)
    public function searchUsers($query) {
      $users= User::where(function ($usr) use ($query) {
        $usr->where('username', 'like', $query.'%')
          ->orWhere('first_name', 'like', $query.'%')
          ->orWhere('last_name', 'like', $query.'%');
      })->where('id', '<>', Auth::user()->id)->get();
      return view('includes/user_items', compact('users')); // devuelve un html con la lista de usuarios encontrados
    }

}
