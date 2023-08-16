<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('dispenduk.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'NIK' => ['required', 'numeric', 'unique:'.User::class],
            'gender' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'district' => ['required'],
            'village' => ['required'],
            'address' => ['required'],
            'num_whatsapp' => ['required', 'numeric', 'digits_between:8,15'],
            'username' => ['required', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'selfie_url' => ['required', 'mimes:png,jpg,jpeg']
        ],[
            'name.required' => "nama tidak boleh kosong",
            'NIK.required' =>  "NIK tidak boleh kosong",
            'NIK.numeric' =>  "NIK harus angka",
            'NIK.unique' =>  "NIK sudah terdaftar",
            'gender.required' =>  "jenis kelamin tidak boleh kosong",
            'birthday.required' =>  "tanggal lahir nama tidak boleh kosong",
            'district.required' => "kecamatan nama tidak boleh kosong",
            'village.required' => "kelurahan/desa nama tidak boleh kosong",
            'address.required' => "alamat nama tidak boleh kosong",
            'num_whatsapp.required' =>  "nomor whatsapp nama tidak boleh kosong",
            'num_whatsapp.numeric' =>  "nomor whatsapp harus angka",
            'num_whatsapp.digits_between' =>  "panjang nomor whatsapp minimal 8 maksimal 15 digit",
            'username.required' =>  "username nama tidak boleh kosong",
            'email.required' =>  "email nama tidak boleh kosong",
            'email.email' =>  "format email salah",
            'email.unique' =>  "email sudah terdaftar",
            'password.required' =>  "password nama tidak boleh kosong",
            'selfie_url.required' =>  "foto selfie tidak boleh kosong",
            'selfie_url.mimes' =>  "format foto harus salah satu dari png,jpg,jpeg"
        ]);

        $selfie_url = $request->file('selfie_url')->store('selfie');

        $user = User::create(array_merge($request->all(),
            ['password' => Hash::make($request->password)],
            ['selfie_url' => $selfie_url]
            
        ));

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
