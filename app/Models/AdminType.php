<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminType extends Model
{
    use HasFactory;

    protected $primaryKey = 'admintype_id';

    protected $fillable = [
        'admintype_name',
        'admintype_desc',
    ];


}
