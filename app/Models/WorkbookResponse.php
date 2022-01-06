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
    protected $fillable = ['title', 'workbook_id', 'user_id', 'question_id', 'answer_id', 'status', 'complete_date','detailquest_id','answer','rand_val'];
    protected $dates = [

        'complete_date',
        'updated_at',
        'created_at',
    ];
    public function questions()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
    public function answers()
    {
        return $this->belongsTo(Answer::class,'answer_id');
    }
    public function detailquestions()
    {
        return $this->belongsTo(Detailquest::class,'detailquest_id');
    }
}
