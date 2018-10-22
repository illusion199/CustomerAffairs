<?php

namespace App\Model\company;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class company extends Authenticatable
{
    use Notifiable;

}
