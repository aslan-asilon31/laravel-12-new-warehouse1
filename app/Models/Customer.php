<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    use \Illuminate\Database\Eloquent\Concerns\HasUuids;


    protected $guarded = [];
}
