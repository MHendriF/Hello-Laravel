<?php

namespace App\Enums;

enum StoreStatus: string 
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending';
}