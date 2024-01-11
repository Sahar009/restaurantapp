<?php

namespace App;
use App\Food;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable=['name'];
    public function food(){
    	return $this->hasOne(Food::class,'category_id','id');
    }
    
}
