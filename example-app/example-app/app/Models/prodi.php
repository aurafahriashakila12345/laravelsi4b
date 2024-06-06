<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;

    public function fakultas() {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
        // return $this->belongsTo(Name_Model::class, 'foreign_key');
        // 1 prodi 1 fakultas belongsTo()
        // 1 fakultas > 1 prodi hasMany() 
}
