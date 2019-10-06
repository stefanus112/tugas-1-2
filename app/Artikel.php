<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table ='Artikel';

    	protected $fillable = [
    		'judul', 'users_id','isi','kategori_artikel_id'
    ]; 

    	protected $casts=[
    	];
}
