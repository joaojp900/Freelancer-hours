<?php

namespace App\Models;
use App\projectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


public function casts(){


    return [

        'tech_stack' => 'array',

        'status' =>  projectStatus::class,

        'ends_at' => 'datetime'
     ];

    }

    public function author(){

        return $this->belongsTo(User::class, 'created_by');
    }

    public function proposals(){
        return $this->hasMany(Proposal::class);
    }
}
