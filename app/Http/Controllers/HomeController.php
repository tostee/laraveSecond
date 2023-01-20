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
        $this->_repository->HelloWorld();
        return view('dashboard.index');
    }
}
