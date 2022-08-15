<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MemberController extends Controller
{
    //
    public function member(){

    	$memberships = Membership::all();

    	return view('member',compact('memberships'));
    }

}
