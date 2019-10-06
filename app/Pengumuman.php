<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table ='Pengumuman';

    	protected $fillable = ['judul', 'users_id','isi','kategori_pengumuman_id']; 

    		protected $casts=[ ];
}
