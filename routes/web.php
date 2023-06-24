<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['middleware' => 'client.credentials'],function() use ($router) {
// SITE 1 COMMANDS
$router->get('/users1',['uses' => 'User1Controller@index']);                    //get all users
$router->post('/users1',['uses' => 'User1Controller@add']);                     //add  users
$router->get('/users1/{id}',['uses' => 'User1Controller@show']);                //get users by id
$router->put('/update/users1/{id}',['uses' => 'User1Controller@updateUser']);   //UPDATE users by id
$router->delete('/users1/{id}',['uses' => 'User1Controller@deleteUser']);       //delete user record

// SITE 2 COMMANDS

$router->get('/users2',['uses' => 'User2Controller@index']);                    //get all users
$router->post('/users2',['uses' => 'User2Controller@add']);                     //add  users
$router->get('/users2/{id}',['uses' => 'User2Controller@show']);                //get users by id
$router->put('/update/users2/{id}',['uses' => 'User2Controller@updateUser']);   //UPDATE users by id
$router->delete('/users2/{id}',['uses' => 'User2Controller@deleteUser']);       //delete user record

});


// USERJOB ROUTES

$router->get('/userjob1',['uses' => 'UserJob1Controller@index']);             //get all jobs
$router->get('/userjob1/{id}',['uses' => 'UserJob1Controller@show']);            //get jobs by id

$router->get('/userjob2',['uses' => 'UserJob2Controller@index']);             //get all jobs
$router->get('/userjob2/{id}',['uses' => 'UserJob2Controller@show']);            //get jobs by id


