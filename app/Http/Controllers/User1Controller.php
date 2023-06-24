<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User1Service;
use App\Services\User2Service;


class User1Controller extends Controller
{
    use ApiResponser;

    public $User1Service;
    public $User2Service;

    public function __construct(User1Service $User1Service, User2Service $User2Service)
    {
        $this->User1Service = $User1Service;
        $this->User2Service = $User2Service;
    }

    public function index()
    {
        return $this->successResponse($this->User1Service->obtainUser1());
    }

    public function add(Request $request)
    {
        if ($request->jobid <= 5)
        {
            $this->User1Service->obtainUser1($request->jobid);
             return $this->successResponse($this->User1Service->createUser1($request->all(), Response::HTTP_CREATED));
        }
        elseif($request->jobid <= 10)
        {
            $this->User2Service->obtainUser2($request->jobid);
            return $this->successResponse($this->User1Service->createUser1($request->all(), Response::HTTP_CREATED));
        }
        else{
            return response()->json(['error' => "Does not exist any instance of jobid with the given id", 'site' => 1, "code" => Response::HTTP_NOT_FOUND]);
        }

    }

    public function show($id)
    {
        return $this->successResponse($this->User1Service->showUser1($id));
    }
    public function updateUser(Request $request, $id)
    {
        if ($request->jobid <= 5)
        {
            $this->User1Service->obtainUser1($request->jobid);
        }
        else 
        {
             $this->User2Service->obtainUser2($request->jobid);
        }
        return $this->successResponse($this->User1Service->updateUser1($request->all(),$id));
    }
    public function deleteUser($id)
    {
        return $this->successResponse($this->User1Service->deleteUser1($id));
    }


}
