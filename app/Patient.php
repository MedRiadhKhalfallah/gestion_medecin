<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {
    protected $fillable = ['n_cnam','payment','nom',
        'prenom','genre','date_n','adresse','profession',
        'tel_mob','tel_fix','etat_civil','ville','email',
        'atd_gyneco_obstetricaux','ant_medicaux','ant_chirurgicaux'];

    public function visites(){
        return $this->hasMany('App\Visite');
    }

}
