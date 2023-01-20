<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersControllers extends Controller
{private $users = [
    [
        'id' => 1,
        'name' => 'Renier',
        'email' => 'renier@example.com',
        'created_at' =>'2019-01-01 00:00:00',
        'updated_at' => '2020-01-01 00:00:00',
    ],
    [
        'id' => 2,
        'name' => 'Aida',
        'email' => 'aida@example.com',
        'created_at' =>'2019-01-01 00:00:00',
        'updated_at' => '2020-01-01 00:00:00',
    ],
    [
        'id' => 3,
        'name' => 'Alejandra',
        'email' => 'ale@example.com',
        'created_at' =>'2019-01-01 00:00:00',
        'updated_at' => '2020-01-01 00:00:00',
    ],
];
public function index(){
    $users =  $this->users;
    return view('dashboard.users.index',['users'=>$users]);
}
public function create(){

    $id = $this->_getNumberOfUsers();
    return view('dashboard.users.form',[
        'id'=>$id,
        'user' => null,
]);
}
public function edit($id){
    $users = $this->_getUser($id);
    return view('dashboard.users.form',['id'=>$id,'user'=>$users]);
}
public function save(Request $request, $id = null){
    $input = $request->all();
    print_r($input);
    print_r($id);
}
public function delete($id){
    print_r($id);
}

private function _getUser($id){
    $users =  $this->users;

    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }

}

private function _getNumberOfUsers()
{
    $users =  $this->users;
    return count($users) + 1;
}

}

