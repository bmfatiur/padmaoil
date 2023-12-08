<?php

// namespace App\Models;
namespace App\Http\Requests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon2 extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
}
