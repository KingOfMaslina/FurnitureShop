<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
      'name','description','category_id','image','price','sale','collection','manufacturer','guarantee','expire','size','sheathing','color','status'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
