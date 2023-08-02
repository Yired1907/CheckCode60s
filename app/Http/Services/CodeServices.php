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
}
