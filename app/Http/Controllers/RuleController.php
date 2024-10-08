<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\RuleCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RuleController extends Controller
{
    public function index(Rule $rule,RuleCategory $rule_category, User $user)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('rules.index')->with(['rules' => $rule->get(),'rule_categories' => $rule_category->get(),'users' => $user->get()]);    }
}
