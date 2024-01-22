<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auto;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['fullName'];
    public function auto(){
        return $this->hasMany(Auto::class);
    }
}
