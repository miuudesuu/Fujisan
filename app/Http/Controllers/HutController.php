<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hut;
use Illuminate\Support\Facades\Auth;

class HutController extends Controller
{
    public function index(Hut $hut)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('huts.index')->with(['huts' => $hut->get()]);
    }
}
