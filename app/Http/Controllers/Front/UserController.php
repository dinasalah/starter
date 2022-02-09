<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function showAdminName()
    {

        return "from showAdminName in Front controller";
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
