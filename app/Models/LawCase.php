<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawCase extends Model
{
    /** @use HasFactory<\Database\Factories\LawCaseFactory> */
    use HasFactory;

    protected $fillable = [
        'case_number',
        'client_name',
        'slug',
        'case_title',
        'case_category',
        'court_name',
        'lawyer_name',
        'case_date',
        'case_status',
        'case_description',
        'user_id',
    ];
     protected function user(){
        return $this->belongsTo(User::class , "user_id");
}
}
