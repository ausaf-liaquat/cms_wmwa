<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareWorkbook extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'workbook_id',
        'topic_id',
        'user_id',
        'status',
        'sent_date',
        'complete_date'
    ];
    protected $dates = [
        'sent_date',
        'complete_date',
        'updated_at',
        'created_at',
    ];

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
