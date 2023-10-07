<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    use HasFactory;
    protected $fillable=[
        'pro_Name',
        'pro_Desc',
        'pro_price',
        'pro_cate_id',
            ];

}
