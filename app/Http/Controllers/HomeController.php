<?php

namespace App\Http\Controllers;

use App\Repositories\Implementations\HomeRepository;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $_repository;
    public function __construct(HomeRepository $repository)
    {
        $this->_repository = $repository;
    }
    public function index()
    {
        $breadcrumb = 'bHome';
        return view('dashboard.index',[
            'breadcrumb' => $breadcrumb
        ]);
    }
}
