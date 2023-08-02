<?php

namespace App\Http\Controllers;

use App\Http\Services\CodeServices;
use App\Models\Code;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountDownController extends Controller
{

    // protected $codeServices;
    // public function __construct(CodeServices $codeServices)
    // {
    //     $this->codeServices = $codeServices;
    // }

    public function index()
    {
        return view('button.countdown');
    }

    public function create(Request $request)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomCode = substr(str_shuffle($characters), 0, 6); // Tạo mã ngẫu nhiên gồm 6 ký tự
        $expirationTime = Carbon::now()->addSeconds(60);

        // Lưu mã ngẫu nhiên vào cache với key là 'random_code' và thời gian sống (ttl) là 90 giây
        Cache::put('random_code', $randomCode, $expirationTime);

        // Lấy mã ngẫu nhiên từ cache
        $cachedCode = Cache::get('random_code');

        // Lưu mã ngẫu nhiên vào cơ sở dữ liệu
        $code = new Code();
        $code->code = $cachedCode;
        $code->expiration_time = $expirationTime;
        $code->save();

        return $code;
    }
}
