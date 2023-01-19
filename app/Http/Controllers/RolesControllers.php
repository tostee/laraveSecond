<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesControllers extends Controller
{
    public function index(){
        $roles =  [
            [
                'id' => 1,
                'type' => 'admin',
                'created_at' =>'2019-01-01 00:00:00',
                'updated_at' => '2020-01-01 00:00:00',
            ],
            [
                'id' => 2,
                'type' => 'user',
                'created_at' =>'2021-01-01 00:00:00',
                'updated_at' => '2022-01-01 00:00:00',
            ],
            [
                'id' => 3,
                'type' => 'superadmin',
                'created_at' =>'2021-01-01 00:00:00',
                'updated_at' => '2022-01-01 00:00:00',
            ],
        ];
        return view('dashboard.roles.index',['roles'=>$roles]);
    }

    public function get(Request $request)
    {
        $roles = [];
        $body = json_decode($request->getContent(), true);
        if (isset($body['type']) && $body['type'] == 'admin') {
            $roles = [
                [
                    'id' => 1,
                    'type' => 'Admin',
                    'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2020-01-01 00:00:00',
                ],
            ];
        }
        dd(response()->json($roles));
        return response()->json($roles);
    }
    public function create(){

        $id = $this->_getNumberOfRoles();
        return view('dashboard.roles.form',[
            'id'=>$id,
            'role' => null,
    ]);
    }
    public function edit($id){
        $role = $this->_getRole($id);
        return view('dashboard.roles.form',['id'=>$id,'role'=>$role]);
    }
    public function save(Request $request, $id = null){
        $input = $request->all();
        print_r($input);
        print_r($id);
    }
    public function delete($id){
        print_r($id);
    }

    private function _getRole($id){
        $roles =  [
            [
                'id' => 1,
                'type' => 'admin',
                'created_at' =>'2019-01-01 00:00:00',
                'updated_at' => '2020-01-01 00:00:00',
            ],
            [
                'id' => 2,
                'type' => 'user',
                'created_at' =>'2021-01-01 00:00:00',
                'updated_at' => '2022-01-01 00:00:00',
            ],
            [
                'id' => 3,
                'type' => 'superadmin',
                'created_at' =>'2021-01-01 00:00:00',
                'updated_at' => '2022-01-01 00:00:00',
            ],
        ];

        foreach ($roles as $role) {
            if ($role['id'] == $id) {
                return $role;
            }
        }
    
    }

    private function _getNumberOfRoles()
    {
        $roles =  [
            [
                'id' => 1,
                'type' => 'admin',
                'created_at' =>'2019-01-01 00:00:00',
                'updated_at' => '2020-01-01 00:00:00',
            ],
            [
                'id' => 2,
                'type' => 'user',
                'created_at' =>'2021-01-01 00:00:00',
                'updated_at' => '2022-01-01 00:00:00',
            ],
            [
                'id' => 3,
                'type' => 'superadmin',
                'created_at' =>'2021-01-01 00:00:00',
                'updated_at' => '2022-01-01 00:00:00',
            ],
        ];
        return count($roles) + 1;
    }
}
