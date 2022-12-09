<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function allChildren()
    {
        return $this->hasMany(MenuItem::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->allChildren()->with('children');
    }
}
