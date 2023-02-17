<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class UserController extends Controller
{
 
    function homepage(Request $req)
    {
        return view('/homepage');
    } 
    
    function user(Request $req)
    {
        return view('/user');
    } 
    
    function about(Request $req)
    {
        return view('/about');
    } 

    function contact(Request $req)
    {
       return view('/contact');
    } 
  
    function login(Request $req)
    {
        
        $user = User::where(['email' => $req->email])
        ->where(['password' => $req->password])
        ->first();
    

    if($user == true) {
        $req->session()->put('user', $user);
        return redirect('/user?success=true');
    } else {
        return redirect('/login?success=false');
    }
    }

    function register(Request $req)
    {
        //return $req->all();

        try{
            DB::insert('INSERT INTO users(name,email,password,gender,birthday,created_at) VALUES (?,?,?,?,?,?)', 
            [$req->fullname,$req->email,$req->password,$req->gender,$req->birthday,now()]);
        return redirect('/login?success=registered');
        } catch(\Exception){
           // return redirect('/?success=failed');
       }
       
    }

    function search2()
    {
        return view('userlist', ['listofuser'=> DB::table('users')->paginate(2)] );
    }
    
    function search(Request $req) 
    {
        return view('userlist',['listofuser' => DB::table('users')
            ->select(DB::raw('id, name, email, password,gender,birthday, created_at, updated_at'))
            ->where('email', 'like', '%' . $req->q . '%')
            ->orWhere('name', 'like', '%' . $req->q . '%')
            ->paginate(10)]);
    }

    function deleteuser(Request $req)
    {
        $data = DB::table('users')
            ->where('id', $req->rid)
            ->first();
            return view('userdelete', ['users'=>$data]);
    }

    function deleteprofile(Request $req)
    {
        DB::table('users')
            ->where('id', $req->rid)
            ->delete();
        return redirect('/deletedprofile?success=deleted');
    }

    function getuser(Request $req)
    {
        $data = DB::table('users')
        ->where('id',$req->rid)
        ->first();
        return view('useredit', ['users'=>$data]);
    }

    function viewuser(Request $req)
    {
        $data = DB::table('users')
        ->where('id',$req->rid)
        ->first();
        return view('userview', ['users'=>$data]);
    }

    function edituser(Request $req)
    {

        //return $req->all();
         DB::table('users')->where('id',$req->rid)
        ->update(array(
            'name'=> $req->fullname,
            'email' => $req->email,
            'gender' => $req->gender,
            'birthday' => $req->birthday,
            'updated_at' => DB::raw('now()')));
            return redirect('userview?rid='.$req->rid.'&success=1');
    }

    function activity(Request $req)
    {
        return view('/activity');
    }

    function billing(Request $req)
    {
        return view('/billing');
    }

    function booking(Request $req)
    {
        return view('/booking');
    }

    function cart(Request $req)
    {
        return view('/cart');
    }

    function category(Request $req)
    {
        return view('/category');
    }

    function deletecart(Request $req)
    {
        return view('/deletecart');
    }

    function deletedcart(Request $req)
    {
        return view('/deletedcart');
    }

    function deletedprofile(Request $req)
    {
        return view('/deletedprofile');
    }

    function deletereview(Request $req)
    {
        return view('/deletereview');
    }

    function deletedreview(Request $req)
    {
        return view('/deletedreview');
    }

    function destination(Request $req)
    {
        return view('/destination');
    }

    function insertinfo(Request $req)
    {
        return view('/insertinfo');
    }

    function statuspayment(Request $req)
    {
        return view('/statuspayment');
    }

    function payment(Request $req)
    {
        return view('/payment');
    }

    function forgot(Request $req)
    {
        $data = DB::table('users')
        ->where('id',$req->rid)
        ->first();
        return view('reset', ['users'=>$data]);
    }

    function reset(Request $req)
    {
        DB::table('users')->where('id',$req->rid)
        ->update(array(
            'password'=> $req->password,
            'password'=> $req->password,
            'updated_at' => DB::raw('now()')));
            return redirect('new?rid='.$req->rid.'&success=1');
        //return view('/reset');
    }

    function new(Request $req)
    {
        return view('/new');
    }

    function review(Request $req)
    {
        return view('/review');
    }

    function select(Request $req)
    {
        return view('/select');
    }

    function tour(Request $req)
    {
        return view('/tour');
    }

    function setting(Request $req)
    {
        //return view('/try');
        //return $req->all();
        return view('setting',['listofsetting' => DB::table('setting')
            ->select(DB::raw('id, email, booking, cart, billing, review'))
            ->where('email', 'like', '%' . $req->q . '%')
            ->paginate(10)]);
    }

    
}