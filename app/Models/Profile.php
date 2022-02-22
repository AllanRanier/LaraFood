<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Get Permission
    */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

}
