<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
<<<<<<< Updated upstream
=======
>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //create user
        $attributes = Request()->validate([
        'name' => 'required',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:8',
        ]);
<<<<<<< HEAD
        
=======
>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        // session()->flash('success', 'Yout account has been created!');

        return redirect('/')->with('success', 'Yout account has been created!');;
    }
}
<<<<<<< HEAD
=======
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\facades\storage;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());
        $users = User::all();
        return view('register.create');
     

        
    }
    public function store(Request $request)
    {
        // dd($request);
        $file =$request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path =$request->file('photo')->storeAs('public/ktp',$filename);

        $path = str_replace('public/','',$path);
        
        //dd($path);
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->NamaBelakang,
            'email' => $request->Email,
            'phonenumber' => $request->NoTelp,
            'password' => Hash::make($request->password),
            'province' => $request->Provinsi,
            'city' => $request->Kabupaten,
            'district' => $request->Kecamatan,
            'village' => $request->Kelurahan,
            'address' => $request->Alamat,
            'gender' => $request->JenisKelamin,
            'nik' => $request->NoNIK,
            'photo' => $path
        ];
        $users = User::create($data);
        
    }
    }
>>>>>>> Stashed changes
=======
>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4
