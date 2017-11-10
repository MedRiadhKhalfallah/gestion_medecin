<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
            'prenom' => 'required|max:255',
            'n_tel_cabinet' => 'required|max:255',
            'n_tel_mobile' => 'required|max:255',
            'adresse' => 'required|max:255',
            'specialite' => 'required|max:255',
            'siteweb' => 'required|max:255',
            'about' => 'required|max:255',


		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
            'prenom' => $data['prenom'],
            'n_tel_cabinet' => $data['n_tel_cabinet'],
            'n_tel_mobile' => $data['n_tel_mobile'],
            'adresse' => $data['adresse'],
            'specialite' => $data['specialite'],
            'siteweb' => $data['siteweb'],
            'about' => $data['about'],
            'role' => $data['role'],
            'img' => "profile-pic.jpg",
		]);
	}

}
