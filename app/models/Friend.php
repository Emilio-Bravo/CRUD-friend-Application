<?php

namespace App\Models;

use Bravo\ORM\BravoORM;

class Friend
{

    public static string $table = 'friends';

    use BravoORM;
}