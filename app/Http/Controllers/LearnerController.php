<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index(){
        $learners = Learner::join('users', 'users.id', '=', 'learners.user_id')
        ->select('users.lname', 'users.fname', 'learners.*')->orderByRaw('lname', 'fname')->get();
        return view('learners.index', ['learners'=>$learners]);
    }
}
