<?php

namespace App\Models; // 👈 これが正しいか確認

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model // 👈 これが正しいか確認
{
    use HasFactory;
    
    // ... (クラスの中身)
}