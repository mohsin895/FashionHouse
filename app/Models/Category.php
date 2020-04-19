<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class Category extends Model
{
  public function parent()
  {
  return $this->belongsTo('App\Models\Category','parent_id');
  }

  public function products()
  {
  return $this->hasMany('App\Models\Product');
  }

  public static function ParentOrNotCategory($parent_id,$child_id)
  {
  $categories = Category::where('id',$child_id)->where('parent_id',$parent_id)->get();
if (!is_null($categories)) {
return true;
}else {
  return false;
}

  }
}
