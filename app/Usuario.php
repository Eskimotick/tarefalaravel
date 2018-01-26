<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $fillable = ['name', 'surname', 'age', 'nacio'];
}
