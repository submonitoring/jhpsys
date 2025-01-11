<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ModuleCaaModuleActivityType extends Model
{
    public function moduleCaa()
    {
        return $this->belongsTo(ModuleCaa::class);
    }

    public function moduleActivityType()
    {
        return $this->belongsTo(ModuleActivityType::class);
    }

    use log;
}
