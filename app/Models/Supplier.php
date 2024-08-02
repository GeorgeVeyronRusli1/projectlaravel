<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use CrudTrait, HasFactory;

    protected $table = 'suppliers'; // Specify table name if not default

    protected $fillable = [
        'name',
        'contact_person',
        'phone',
        'email',
        'address',
    ];
}

