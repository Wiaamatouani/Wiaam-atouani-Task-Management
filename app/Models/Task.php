<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Task extends Model
{

   
protected $fillable = [
    'name',
    'description',
    'start',
    'end',
    // 'priority',
    'status',
    'creator_id',
  
    'team_id'
];

public function creator()
{
    return $this->belongsTo(User::class, 'creator_id');
}

public function assignee()
{
    return $this->belongsTo(User::class, 'assigned_to');
}

public function team()
{
    return $this->belongsTo(Team::class , 'team_id');
}

//     public function team()
//     {
//         return $this->belongsTo(Team::class);
//     }

//     public function assignedTo()
//     {
//         return $this->belongsTo(User::class, 'assigned_to');
//     }

//     public function createdBy()
//     {
//         return $this->belongsTo(User::class, 'created_by');
  
// }
}
