<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'name',
        'url',
        'price',
        'description',
    ];

    public function details()
    {
        return $this->hasMany(DetailPlan::class);
    }

    public function search($filter = null)
    {
        $result = $this->where('name', 'LIKE', "%{$filter}%")
                        ->orWhere('description', 'LIKE', "%{$filter}%")
                        ->paginate();
        return $result;
    }
}
