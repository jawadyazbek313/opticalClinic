<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;


    protected $table = 'patients';
    protected $primaryKey = 'id';
    public $timestamps = true;



    protected $fillable = [
        'id',
        'firstname',
        'midname',
        'lastname',
        'dob',
        'insurance',
        'gender',
        'bloodtype',
        'diag',
        'job',
        'address',
        'number',
        'maincomplaint',
        'pathological_story',
        'OD_VA',
        'OD_AUTO',
        'OD_BCVA_FAR',
        'OD_NEAR',
        'OD_AUTO_AFTER_CYCLO',
        'OD_BUT',
        'OD_IOP',
        'OD_LIDS',
        'OD_CORNEA',
        'OD_CONJUNCTIVA',
        'OD_IRIS',
        'OD_AC',
        'OD_LENS',
        'OD_VITREOUS',
        'OD_CD',
        'OD_FUNDUS',
        'OS_VA',
        'OS_AUTO',
        'OS_BCVA_FAR',
        'OS_NEAR',
        'OS_AUTO_AFTER_CYCLO',
        'OS_BUT',
        'OS_IOP',
        'OS_LIDS',
        'OS_CORNEA',
        'OS_CONJUNCTIVA',
        'OS_IRIS',
        'OS_AC',
        'OS_LENS',
        'OS_VITREOUS',
        'OS_CD',
        'OS_FUNDUS'
    ];


    function relations() {
        return $this->hasMany(Relation::class);
     }

     function appointment() {
        return $this->belongsTo(Appointment::class);
     }
}
