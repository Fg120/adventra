<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'id_photo' => 'required',
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
            'id_photo.required' => 'Upload foto KTP!',
            'address.required' => 'Masukkan alamat lengkap!',
            'nik.required' => 'Masukkan NIK!',
        ]);

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
                'id_photo' => $photo_path,
                'nik' => $request->nik,
                'role' => $request->role,
            ];
            $attributes['password'] = bcrypt($attributes['password']);
            $users = User::create($data);

            Alert::success('Akun berhasil dibuat');
            return redirect('/admin/user');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
