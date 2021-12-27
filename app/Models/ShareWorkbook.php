<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareWorkbook extends Model
{
    use HasFactory;

    public function workbook()
    {
        return $this->belongsTo(Workbook::class, 'workbook_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
}
