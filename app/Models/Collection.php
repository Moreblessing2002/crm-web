<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function items()
    {
        return $this->hasMany('App\Models\CollectionItem');
    }

    public static function called($name)
    {
        return self::where('slug', $name)->first();
    }

    public function fields()
    {
        return collect(json_decode($this->fields));
    }

    public function fieldsVisible($key)
    {
        return $this->fields()->filter(function($field) use ($key){
            return $field->visible->$key == true;
        });
    }
}
