<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model {

	public function patient(){
        return $this->belongsTo('App\Patient');
    }
    public function ordonnances(){
        return $this->hasMany('App\Ordonnance');
    }
    public function demandes(){
        return $this->hasMany('App\Demande');
    }

}
