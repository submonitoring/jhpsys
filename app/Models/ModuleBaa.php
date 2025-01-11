<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ModuleBaa extends Model
{
    public function moduleAaaModuleBaas()
    {
        return $this->hasMany(ModuleAaaModuleBaa::class);
    }

    public function moduleBaaModuleCaas()
    {
        return $this->hasMany(ModuleBaaModuleCaa::class);
    }

    public function applicationPaths()
    {
        return $this->hasMany(ApplicationPath::class);
    }

    use log;
}
