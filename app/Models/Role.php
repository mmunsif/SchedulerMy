<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    use HasFactory;

//    protected $primaryKey = 'role_id';

    protected $fillable = [
        'name',
    ];

    public function users()
    {
//        return $this->belongsToMany('App\Models\User');
        return $this->belongsToMany(User::class)->using(RoleUser::class);
    }
}
