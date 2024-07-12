<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = ['num_doc','tip_doc','cal_doc','uni_rem','res_asu','fec_doc','fec_rec','rut_arc','est_doc','carpeta_id'];
    public function carpeta(){
        return $this->belongsTo(Carpeta::class);
    }
}
