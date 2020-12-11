<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
	'name',
	'race',
	'class',
	'level',
	'hp',
	'ac',
	'str',
	'dex',
	'con',
	'int',
	'wis',
	'cha',
	'skills',
	'weapons',
	'equipment',
	'spells'];
}
