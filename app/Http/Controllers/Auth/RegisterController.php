<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // create user
        $attributes = Request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|unique:users,phone_number',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'province' => 'required',
            'regency' => 'required',
            'city' => 'required',
            'village' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'id_photo' => 'required',
            'nik' => 'required',
        ], [
            'name.required' => 'Masukkan nama lengkap!',
            'email.required' => 'Masukkan email!',
            'email.unique' => 'Email telah terdaftar!',
            'password.required' => 'Masukkan password!',
            'password.min' => 'Password minimal 8 karakter!',
            'phone_number.required' => 'Masukkan nomor HP!',
            'phone_number.unique' => 'Nomor HP telah terdaftar!',
            'confirm_password.required' => 'Masukkan konfirmasi password!',
            'confirm_password.same' => 'Password tidak sama!',
            'province.required' => 'Pilih provinsi!',
            'regency.required' => 'Pilih kabupaten!',
            'city.required' => 'Pilih kecamatan!',
            'village.required' => 'Pilih desa!',
            'id_photo.required' => 'Upload foto KTP!',
            'address.required' => 'Masukkan alamat lengkap!',
            'nik.required' => 'Masukkan NIK!',
        ]);
        try {
            $attributes['password'] = bcrypt($attributes['password']);
            $user = User::create($attributes);
            // auth()->login($user);
            alert::success('Akun berhasil dibuat','Silahkan login!');
            return redirect('/login');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
