<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model {

    public function ordonnances(){
        return $this->hasMany('App\Ordonnance');
    }

}
