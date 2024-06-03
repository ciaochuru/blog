<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function posts() {
        //リレーションの設定(カテゴリーモデルは複数のポストモデルを所持)
        return $this->hasMany(Post::class);
    }
    
    public function getByCategory(int $limit_count = 5) {
        return $this->posts()->with('category')->orderBy('update_at', 'DESC')->peginate($limit_count);
    }
}
