<?php


namespace App\Http\Services;

use App\Models\Code;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class CodeServices
{
    public function isValid($code)
    {
        $maModel =  Code::where('code', $code)
            ->where('expiration_time', '>', now())
            ->first(); // Lấy ra một bản ghi có mã tương ứng và trạng thái hợp lệ

        return $maModel !== null; // Trả về true nếu mã hợp lệ, ngược lại trả về false
    }

    //Tạo code random
    // public function create()
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $randomCode = substr(str_shuffle($characters), 0, 6); // Tạo mã ngẫu nhiên gồm 6 ký tự
    //     $expirationTime = Carbon::now()->addSeconds(60);

    //     // Lưu mã ngẫu nhiên vào cache với key là 'random_code' và thời gian sống (ttl) là 90 giây
    //     Cache::put('random_code', $randomCode, $expirationTime);

    //     // Lấy mã ngẫu nhiên từ cache
    //     $cachedCode = Cache::get('random_code');

    //     // Lưu mã ngẫu nhiên vào cơ sở dữ liệu
    //     $code = new Code();
    //     $code->code = $cachedCode;
    //     $code->expiration_time = $expirationTime;
    //     $code->save();

    //     return $code;
    // }
}
