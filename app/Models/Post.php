<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nette\Utils\Arrays;

class Post extends Model
{
    use HasFactory;



    // protected $fillable = ['title','excerpt','Body'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {

        $query->when(
            $filters['search'] ?? false,
            function ($query, $search) {
                return  $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
                    ->orWhere('excerpt', 'like', '%' . $search . '%');
            }

        );
$query->when($filters['category']??false , function($query,$category){
return $query->whereHas('category',function($query)use ($category){
    $query->where('slug',$category);

}) ;
   
}
);

    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
