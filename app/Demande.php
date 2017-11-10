<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model {

    public function visite(){
        return $this->belongsTo('App\Visite');
    }
    public function examen(){
        return $this->belongsTo('App\Examen');
    }

}
