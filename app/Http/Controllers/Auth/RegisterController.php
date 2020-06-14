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
    | This controller handles the registration of new users as well as their
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
            'family_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'kana_family_name' => ['required', 'string', 'max:255'],
            'kana_first_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'min:10', 'max:11'],
            'birth_year' => ['required'],
            'birth_month' => ['required'],
            'birth_day' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'family_name' => $data['family_name'],
            'first_name' => $data['first_name'],
            'kana_family_name' => $data['kana_family_name'],
            'kana_first_name' => $data['kana_first_name'],
            'phone_number' => $data['phone_number'],
            'birth_year' => $data['birth_year'],
            'birth_month' => $data['birth_month'],
            'birth_day' => $data['birth_day'],
            'gender' => $data['gender'],
            'mail_magazine' => $data['mail_magazine'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
