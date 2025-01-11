<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ApplicationNameModuleAaa extends Model
{

    public function applicationName()
    {
        return $this->belongsTo(ApplicationName::class);
    }

    public function moduleAaa()
    {
        return $this->belongsTo(ModuleAaa::class);
    }

    use log;
}
