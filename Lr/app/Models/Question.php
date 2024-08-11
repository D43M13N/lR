<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model {
    use hasFactory;

    protected $table = 'questions';

    protected $guarded = [];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function bags()
    {
        return $this->belongsToMany(Bag::class, foreignPivotKey: "questions");
    }


}
