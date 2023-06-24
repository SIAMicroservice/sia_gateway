<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User1Service;
use Laravel\Lumen\Exceptions\Handler;


class UserJob1Controller extends Controller
{
    use ApiResponser;

    private $User1Service;

    public function __construct(User1Service $User1Service)
    {
        $this->User1Service = $User1Service;
    }

    public function index()
    {
        return $this->successResponse($this->User1Service->obtainjob1());
    }

    public function show($id)
    {
        return $this->successResponse($this->User1Service->showJob1($id));
    }
    
}
