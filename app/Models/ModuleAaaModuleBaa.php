<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ModuleAaaModuleBaa extends Model
{
    public function moduleAaa()
    {
        return $this->belongsTo(ModuleAaa::class);
    }

    public function moduleBaa()
    {
        return $this->belongsTo(ModuleBaa::class);
    }

    use log;
}
