<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tweet;

class RankngController extends Controller
{
    public function index()
    {
             $users = User::withCount('tweets as tweet_count') // カウント結果を "tweet_count" カラムにエイリアス
                  ->orderByDesc('tweet_count') // カウント結果でソート
                  ->get();

    return view('ranking.index', compact('users'));
    }
}
