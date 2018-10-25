<?php

namespace App\Model\business;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Business extends Authenticatable
{
    use Notifiable;

}
