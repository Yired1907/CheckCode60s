<?php

namespace App\Http\Controllers;

use App\Http\Services\CodeServices;
use App\Models\Code;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountDownController extends Controller
{

    protected $codeSv;
    public function __construct(CodeServices $codeSv)
    {
        $this->codeSv = $codeSv;
    }

    public function index()
    {
        return view('button.countdown');
    }

    public function create(Request $request)
    {
        $code = $this->codeSv->create($request);
        return $code;
    }
}
