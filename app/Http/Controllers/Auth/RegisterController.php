<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registratRion of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'street_address' => 'nullable|string|max:50',
            'apt_floor' => 'nullable|string|max:50',
            'zip_code' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:50',
            'province' => 'nullable|string|max:50',
            //'photopath' => 'nullable|string|max:300',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        //dd(request());

        $request = request();
        
        if ($request->hasFile('image')) {
        $file = $request->image->store('fotos', 'public');
        $fileName = $request->image->hashName();
        $filePath = 'storage/app/public/fotos/' . $fileName;
        } else {$filePath = null;}
        
        $provincias = [
            14 => 'Córdoba',
            22 => 'Chaco',
            26 => 'Chubut',
            06 => 'Buenos Aires',
            10 => 'Catamarca',
            30 => 'Entre Rios',
            34 => 'Formosa',
            42 => 'La Pampa',
            62 => 'Rio Negro',
            70 => 'San Juan',
            78 => 'Santa Cruz',
            82 => 'Santa Fe',
            94 => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
            38 => 'Jujuy',
            54 => 'Misiones',
            02 => 'Ciudad Autónoma de Buenos Aires',
            18 => 'Corrientes',
            46 => 'La Rioja',
            66 => 'Salta',
            86 => 'Santiago del Estero',
            50 => 'Mendoza',
            58 => 'Neuquén',
            74 => 'San Luis',
            90 => 'Tucumán'
        ];

        /* $provincia = $data['first_name'];
        dd($provincia); */

        //dd($data);

        return User::create(
            [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),'street_address',
            'street_address' => $data['street_address'],
            'apt_floor' => $data['apt_floor'],
            'zip_code' => $data['zip_code'],
            'city' => $data['city'],
            'province' => $data['province'],
            'user_role' => '1',
            'photopath' => $filePath

        ]);

        
    }
}
