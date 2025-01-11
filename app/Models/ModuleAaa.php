<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ModuleAaa extends Model
{
    public function applicationNameModuleAaas()
    {
        return $this->hasMany(ApplicationNameModuleAaa::class);
    }

    public function moduleAaaModuleBaas()
    {
        return $this->hasMany(ModuleAaaModuleBaa::class);
    }

    public function applicationPaths()
    {
        return $this->hasMany(ApplicationPath::class);
    }

    use log;
}
