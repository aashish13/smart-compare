<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
        protected $table = 'app_configs';
        
        protected $fillable = ['key', 'value'];
        
        //uncomment it when needed
        //protected $hidden = ['password'];
}
