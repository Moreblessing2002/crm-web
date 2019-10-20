<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionItem extends Model
{
    public function data($key)
    {
        return json_decode($this->data)->$key;
    }

    public function related()
    {
        return $this->belongsToMany(
            'App\CollectionItem',
            'collectionitem_relationships',
            'item_id',
            'related_item_id'
        );
    }
}
