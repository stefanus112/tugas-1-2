<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table ='Berita';

    	protected $fillable = ['judul', 'users_id','isi','kategori_berita_id']; 

    	protected $casts=[
    	];

}

