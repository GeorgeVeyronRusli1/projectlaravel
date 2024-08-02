<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Furniture extends Model
{
    use CrudTrait; // Add this line to use the CrudTrait

    // Define the fillable properties
    protected $fillable = [
        'name',
        'description',
        'price',
        'material',
        'color',
    ];

    // Optionally, you can define additional methods or properties here
}
