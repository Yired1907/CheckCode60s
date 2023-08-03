<?php

namespace App\Http\Controllers;

use App\Http\Services\CodeServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckController extends Controller
{
    protected $codeSv;
    public function __construct(CodeServices $codeSv)
    {
        $this->codeSv = $codeSv;
    }

    public function index()
    {
        return view('button.checkcode');
    }

    public function store(Request $request)
    {
        $code = $request->input('code');
        if (session()->has($code)) {
            return redirect()->back()->with('error', 'Mã đã được sử dụng!');
        }

        if ($this->codeSv->isValid($code)) {
            session()->put($code, true);
            return redirect('/home')->with('success', 'Mã hợp lệ!');
        } else {
            return redirect()->back()->with('error', 'Mã không đúng!');
        }
    }
}
