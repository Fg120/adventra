<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function user_profile()
    {
        $users = User::all();
        return view('home.profileuser', compact('users'));
    }


    public function store(Request $request)
    {
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
            'nik' => 'required',
            'role' => 'required',
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
            'role.required' => 'Pilih role!',
            'address.required' => 'Masukkan alamat lengkap!',
            'nik.required' => 'Masukkan NIK!',
        ]);

        if ($request->id_photo != null) {
            $file = $request->file('id_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $photo_path = $request->file('id_photo')->storeAs('public/user/id', $filename);
            //menghapus string 'public/' karena dapat menyulitkan pemanggilan di blade.

            $photo_path = str_replace('public/', '', $photo_path);
            try {
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'password' => bcrypt($request->password),
                    'province' => $request->province,
                    'regency' => $request->regency,
                    'city' => $request->city,
                    'village' => $request->village,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'nik' => $request->nik,
                    'role' => $request->role,
                    'id_photo' => $photo_path,
                ];
                $attributes['password'] = bcrypt($attributes['password']);
                $users = User::create($data);

                Alert::success('User berhasil ditambahkan');
                return redirect('/admin/user');
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else {
            try {
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'password' => bcrypt($request->password),
                    'province' => $request->province,
                    'regency' => $request->regency,
                    'city' => $request->city,
                    'village' => $request->village,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'nik' => $request->nik,
                    'role' => $request->role,
                ];
                $attributes['password'] = bcrypt($attributes['password']);
                $users = User::create($data);

                Alert::success('User berhasil ditambahkan');
                return redirect('/admin/user');
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }

    public function show($id)
    {
        //
    }

}
