<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;

class HomeController extends Controller
{
    public function loginform()
    {
    	return view('login');
    }

    public function submitlogin(Request $request)
    {
    	dd($request->all());
    	// dd($request->exampleInputEmail1);
    }

    public function registrationform()
    {
    	return view('registration');
    }

    public function submitregistration(Request $request)
    {
        dd($request->all());
    }

    public function saveRegistration(Request $request)
    {
        $firstName = $request->input('defaultRegisterFormFirstName');
        $lastName = $request->input('defaultRegisterFormLastName');
        $email = $request->input('defaultRegisterFormEmail');
        $password = $request->input('password');

        $v = Validator::make($request->all(), [
            'defaultRegisterFormFirstName' => 'required',
            'defaultRegisterFormLastName' => 'required',
            'defaultRegisterFormEmail' => 'required',
            'password' => 'required|confirmed',
        ]);
    
        if ( $v->fails() )
        {
            return redirect()->back()->withErrors($v->errors());
        }

        DB::table('user')->insert([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        
        session()->flash('msg', 'Registered successfully!');
        return redirect()->back();
    }

    public function selectUser()
    {
        $users = DB::table('user')->get();
        return view('about', compact('users'));
    }

    public function deleteUser(Request $request, $id)
    {
        $userID = $id;
        // $userData = DB::table('user')->where('id', $userID)->count();

        DB::table('user')->where('id', '=', $userID)->delete();
        session()->flash('del-msg', 'User deleted successfully!');
        return redirect()->back();
    }

    /*
    public function deleteCategory(Request $request, $id)
    {
        $categoryID = $id;
        $categoryData = DB::table('products')->where('category_id', $categoryID)->count();
        if ( $categoryData == 0 ) 
        {
            DB::table('product_categories')->where('id', '=', $categoryID)->delete();
            session()->flash('msg', 'Product category saved successfully!');
            return redirect()->route('category_list');
        }
        else 
        {
            session()->flash('err-msg', 'Category have product(s), so unable to delete or delete product(s) first!');
            return redirect()->route('category_list');
        }
    }    
    */ 


}