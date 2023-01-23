<?php

namespace App\Http\Controllers;

use App\Models\ModelTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DatabaseController extends Controller
{
    public function index(){

       /* $eloquent = User::find(1);
        $eloquent->name = 'Renier';
        $eloquent->save();
        print_r($eloquent);*/

     ModelTable::create([
        'name' => 'Examplement',
     ]);
    }
        ////eloquent
        /// First i use a Model class
    
}
