<?php

namespace App\Models;

enum UserPosition: string
{
    case Admin = 'admin';
    case Manager = 'manager';
    case Seller = 'seller';
}
