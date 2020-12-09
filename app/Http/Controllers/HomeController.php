<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        $data = profile::where('user_id', Auth::id())->first();
        return view('backend.admin.index',['data' => $data]);
    }

    public function quiz()
    {
        return view('backend.admin.quiz.quiz');
}

}
