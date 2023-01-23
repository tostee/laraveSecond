<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesControllers extends Controller
{
   private $breadcrumb = 'bTypes';
    private $types = [
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
    public function index(){
        $types =  $this->types;
       
        return view('dashboard.types.index',['types'=>$types, 'breadcrumb'=>$this->breadcrumb]);
    }
    public function create(){

        $id = $this->_getNumberOfTypes();
        return view('dashboard.types.form',[
            'id'=>$id,
            'type' => null,
            'breadcrumb'=>$this->breadcrumb
    ]);
    }
    public function edit($id){
        $types = $this->_getType($id);
        return view('dashboard.types.form',['id'=>$id,'type'=>$types, 'breadcrumb'=>$this->breadcrumb]);
    }
    public function save(Request $request, $id = null){
        $input = $request->all();
        print_r($input);
        print_r($id);
    }
    public function delete($id){
        print_r($id);
    }

    private function _getType($id){
        $types =  $this->types;

        foreach ($types as $type) {
            if ($type['id'] == $id) {
                return $type;
            }
        }
    
    }

    private function _getNumberOfTypes()
    {
        $types =  $this->types;
        return count($types) + 1;
    }
}
