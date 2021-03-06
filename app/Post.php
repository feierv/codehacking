<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [

        'title', 'body', 'category_id', 'photo_id'

    ];

    public function user(){


        return $this->belongsTo('App\User');

    }

    public function role(){


        return $this->belongsTo('App\Role');

    }
    public function photo(){


        return $this->belongsTo('App\Photo');

    }
  
    public function category(){


        return $this->belongsTo('App\Category');

    }
    
}
