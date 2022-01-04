<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Exception\DateTimeException;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function Index()
    {
        $brand = DB::table('brand')->get();
        return view("home/index",['brand'=>$brand]);
    }


    public function Cars()
    {
        return view("home/detail");
    }

    public function login()
    {
        return view('home/login');
    }

    public function logincontroller(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:5','max:12'],
        ]);

        $userinfo = User::where('email', '=', $request->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Email adresiniz veya şifreniz hatalı!');
        }else{
            if($request->password == $userinfo->password){
                $request->session()->put('UserSession',['user_id'=>$userinfo->id,'user_role'=>$userinfo->authority_id]);
                return redirect(route('home'));
            }else{
                return back()->with('fail','Email adresiniz veya şifreniz hatalı!');
            }
        }
    }

    public function logout()
    {
        if(session()->has('UserSession')){
            session()->pull('UserSession');
            return redirect('/home');
        }
    }

    public function register()
    {
        $cities = DB::select('Select * from cities');
        return view('home/register',['cities' => $cities]);
    }

    public function getdistricts(Request $request)
    {
        $districts = DB::table('districts')->where('city_no', '=', $request->input('city_id'))->get();
        return response()->json($districts, 200);
    }

    public function registercontrol(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required','min:3','max:60'],
            'surname' => ['required','min:3','max:60'],
            'email' => ['required', 'email'],
            'password' => ['required','min:5','max:12'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number == null ? 0 : $request->phone_number;
        $user->city_id = $request->city_id == null ? 0 : $request->city_id;
        $user->district_id = $request->district_id == null ? 0 : $request->district_id;
        $user->neighborhood = $request->neighborhood == null ? 0 : $request->neighborhood;
        $user->street = $request->street == null ? 0 : $request->street;
        $user->zip_code = $request->zip_code == null ? 0 : $request->zip_code;
        $user->save();

        return redirect()->route('login')->with('success','Başarıyla kayıt oldunuz, şimdi giriş yapabilirsiniz.');
    }

    public function getmodels(Request $request)
    {
        if($request->input('id')!=0)
        {
            $model = DB::table('car_models')->where('brand_id','=',$request->input('id'))->get();
            return response()->json($model, 200);
        }
        else
        {
            return response()->json(0, 404);
        }
    }

    public function getequipment(Request $request)
    {
        $equipment = DB::table('equipment')->where('model_id','=',$request->input('id'))->get();
        return response()->json($equipment, 200);
    }


    public function searchbar(Request $request)
    {
        $search = DB::table('car')->where('title','like','%' . $request->input('search') . '%')->get();
        return response()->json($search,200);
    }

}
