<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkbookResponse extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'workbook_id', 'user_id', 'question_id', 'answer_id', 'status', 'complete_date','detailquest_id'];
    protected $dates = [

        'complete_date',
        'updated_at',
        'created_at',
    ];
    public function questions()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
