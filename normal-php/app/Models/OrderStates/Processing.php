<?php 

namespace App\Models\OrderStates;

use Spatie\ModelStates\State;

class Processing extends State
{
    public static $name = 'pending';

}