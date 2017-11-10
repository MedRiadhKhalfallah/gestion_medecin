<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model {

    public function visite(){
        return $this->belongsTo('App\Visite');
    }
    public function medicament(){
        return $this->belongsTo('App\Medicament');
    }

}
