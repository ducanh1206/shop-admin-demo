<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQs extends Model
{
    protected $table = 'faqs';
    protected $fillable = [
        "question",
        "answer"
    ];
}
