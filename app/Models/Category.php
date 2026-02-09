<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "image",
        "parent_id",
        "is_active",
        "is_delete",
    ];

    public function isDescendantOf($parentId)
    {
        $parent = Category::find($parentId);

        while ($parent) {
            if ($parent->id == $this->id) {
                return true;
            }
            $parent = $parent->parent;
        }

        return false;
    }

}
