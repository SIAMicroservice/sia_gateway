<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User2Service;
use Laravel\Lumen\Exceptions\Handler;


class UserJob2Controller extends Controller
{
    use ApiResponser;

    private $User2Service;

    public function __construct(User2Service $User2Service)
    {
        $this->User2Service = $User2Service;
    }

    public function index()
    {
        return $this->successResponse($this->User2Service->obtainJob2());
    }

    public function show($id)
    {
        return $this->successResponse($this->User2Service->showJob2($id));
    }
    
}
