<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','question_id','workbook_id','answer'];
    
    public function workbook() {
        return $this->belongsTo(Workbook::class, 'workbook_id');
      }
  
      public function question() {
        return $this->belongsTo(Question::class,'question_id');
      }
}
