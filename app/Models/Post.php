<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model


{

    protected $fillable = ['title', 'content', 'updated_at', 'created_at', 'slug'];

    public function getFormattedDate($column, $format = 'd-m-Y H:i:s'){
        return Carbon::create($this->$column)->format($format);
    }

    public function category() 
    {
        return $this->belongsTo('App\Models\Category');
    }

}

