<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;

class Order extends Model
{
    use HasFactory;
    use HasStates;
    protected $guarded = [];

    public function getStatesAttribute(): array
    {
        return [
            'pending' => \App\Models\OrderStates\Pending::class,
            'processing' => \App\Models\OrderStates\Processing::class,
            'completed' => \App\Models\OrderStates\Completed::class,
        ];
    }

}
