<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $regla = [
            'tipo_documento_id' => 'required',
            'numero_documento' => 'required|unique:personas,numero_documento',
            'nombres' => 'required|string|max:191',
            'apellidos' => 'required|string|max:191',
            'sexo' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ];
        $mensaje = [ 'required' => '* Dato Obligatorio',
                    'max' => 'Ingrese máximo 191 caracteres'];

        $validator = Validator::make($request->all(),$regla,$mensaje);

        if($validator->fails())
        {
            return response()->json(['error' => $validator->errors()],401);
        }

        //Registramos Datos de la Persona
        $persona = Persona::create([
            'tipo_documento_id' => $request->tipo_documento_id,
            'numero_documento' => $request->numero_documento,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion
        ]);

        //Registramos el Usuarios de la persona
        $user = User::create([
            'persona_id' => $persona->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'foto' => ($request->sexo =='M') ? 'images/user_male.png': 'images/user_female.png'
        ]);

        $success['token'] = $user->createToken('tokenapi',[''])->accessToken;

        return response()->json($success);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens->each(function ($token,$key){
            $token->delete();
        });

        return response()->json('Sessión Cerrada Satisfactoriamente',200);
    }

    public function login(Request $request)
    {
        $regla = [
            'email' => 'required',
            'password' => 'required'
        ];
        $mensaje = [ 'required' => '* Dato Obligatorio'];

        $this->validate($request,$regla,$mensaje);

        $credenciales = ['email' => $request->email,'password' => $request->password];

        if(auth()->attempt($credenciales)) {
            $user = auth()->user();
            $success['token'] = $user->createToken('tokenapi',[''])->accessToken;
            $success['user'] = $user;
            return response()->json($success, 200);
        } else {
            return response()->json(['errorno' => 'Acceso No Autorizado'],401);
        }
    }

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
