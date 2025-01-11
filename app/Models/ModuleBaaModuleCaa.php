<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ModuleBaaModuleCaa extends Model
{
    public function moduleBaa()
    {
        return $this->belongsTo(ModuleBaa::class);
    }

    public function moduleCaa()
    {
        return $this->belongsTo(ModuleCaa::class);
    }

    use log;
}
