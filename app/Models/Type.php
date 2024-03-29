<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    // relazione 1 a molti con progetti
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
