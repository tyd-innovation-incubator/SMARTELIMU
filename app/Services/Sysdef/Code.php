<?php

namespace App\Services\Sysdef;

use App\Repositories\System\CodeRepository;

class Code
{
    public $repo;

    public function __construct()
    {
        $this->repo = new CodeRepository();
    }

}