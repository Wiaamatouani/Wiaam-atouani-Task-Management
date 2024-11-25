<?php

namespace App\Models;

use App\Mail\Invitation;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }


    public function users(){
        return $this->belongsToMany(User::class , 'team_users');
    }
    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
    // public function tasks()
    // {
    //     return $this->hasMany(Task::class);
    // }
    public function tasks()
{
    return $this->hasMany(Task::class);
}

}
