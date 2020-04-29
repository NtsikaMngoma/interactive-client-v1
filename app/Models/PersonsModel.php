<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonsModel extends Model
{

    protected $fillable = ['name', 'surname', 'id_number'];

}
