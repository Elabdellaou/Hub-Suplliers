<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function profile()
    {
        return view("pages.profile");
    }
    public function update(UpdateUserRequest $req)
    {
        $user = auth()->user();
        if (count(User::where("id", "<>", $user->id)->where("email", $req->email)->get()) != 0)
            return redirect()->back()->with("error", "Email already exist.");
        $data=['first_name'=>$req->first_name,'company'=>$req->company,'last_name'=>$req->last_name,'email'=>$req->email,'phone'=>$req->phone];
        // if ($req->password !== null)
        //     $data["password"]=Hash::make($req->password);
        $user->update($data);
        return redirect()->back()->with("success", "Successfully Updated Profile.");
    }
    public function updatePassword(Request $req){
        $data=$req->validate([
            'password'=>['required','string','min:8','confirmed']
        ]);
        $data['password']=Hash::make($data['password']);
        auth()->user()->update($data);
        return redirect()->back()->with("success", "Successfully Updated Password.");
    }
}
