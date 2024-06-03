<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function category() {
        //リレーション設定(postモデルはひとつのカテゴリークラスを保持)
        return $this->belongsTo(Category::class);
    }
    
    protected $fillable = [
        //変更可能なカラム
        'title',
        'body',
        'category_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        //Eagerローディングでcategoryのデータを取得し、updated_atで降順に並べた後、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}