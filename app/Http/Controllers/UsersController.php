<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
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

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->id_photo != '') {
            Storage::delete('public/' . $user->id_photo);
            $file = $request->file('id_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $photo_path = $request->file('id_photo')->storeAs('public/user/id', $filename);
            //menghapus string 'public/' karena dapat menyulitkan pemanggilan di blade.
            $photo_path = str_replace('public/', '', $photo_path);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = bcrypt($request->password);
        // $user->province = $request->province;
        // $user->regency = $request->regency;
        // $user->city = $request->city;
        // $user->village = $request->village;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->nik = $request->nik;
        $user->role = $request->role;
        if ($request->id_photo != '') {
            $user->id_photo = $photo_path;
        }
        $user->save();

        Alert::success('User berhasil diupdate');
        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->photo != null) {
            try {
                Storage::delete('public/' . $user->photo);
                $user->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }
        } elseif ($user->photo == null) {
            try {
                $user->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        Alert::success('User berhasil dihapus');
        return redirect()->route('admin.user.index');
    }
}
