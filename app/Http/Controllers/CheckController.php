<?php

namespace App\Http\Controllers;

use App\Http\Services\CodeServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckController extends Controller
{
    protected $codeServices;
    public function __construct(CodeServices $codeServices)
    {
        $this->codeServices = $codeServices;
    }

    public function index()
    {
        return view('button.checkcode');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'code' => 'required', // Kiểm tra mã nhập vào có tồn tại hay không sẽ được thực hiện bên trong Service
        // ]);
        // dd($validatedData);

        $code = $request->input('code');

        if ($this->codeServices->isValid($code)) {
            return redirect('/home')->with('success', 'Mã hợp lệ!');
        } else {
            return redirect()->back()->with('error', 'Mã không đúng!');
        }
    }
}
