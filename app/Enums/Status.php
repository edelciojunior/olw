<?php

namespace App\Enums;

enum status: String
{
    case PENDING = 'P';
    case APPROVED = 'A';
    case CANCELED = 'C';
}
