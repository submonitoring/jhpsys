<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ModuleCaa extends Model
{
    public function moduleBaaModuleCaas()
    {
        return $this->hasMany(ModuleBaaModuleCaa::class);
    }

    public function moduleCaaModuleActivityTypes()
    {
        return $this->hasMany(ModuleCaaModuleActivityType::class);
    }

    public function applicationPaths()
    {
        return $this->hasMany(ApplicationPath::class);
    }

    use log;
}
