<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files = FileUpload::all();
        $extensions = ['docx','xlsx','pdf','csv','jpeg','png','svg'];
//        $extensions = "hello";
        return view('home',compact(['files','extensions']));
    }
}
