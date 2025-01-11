<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ApplicationName extends Model
{
    public function applicationNameModuleAaas()
    {
        return $this->hasMany(ApplicationNameModuleAaa::class);
    }

    public function applicationPaths()
    {
        return $this->hasMany(ApplicationPath::class);
    }

    use log;
}
