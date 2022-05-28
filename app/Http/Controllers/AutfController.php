<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AutfController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška!', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('TknRegister')->plainTextToken;

        return response()->json([
            'Korisnik -  ' => $user,
            'Register Token: ' => $token,
        ]);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška!', $validator->errors()]);
        }

        $korisnik = User::where('email', $request->email)->first();

        if (!$korisnik || !Hash::check($request->password, $korisnik->password)) {
            return response()->json(['Poruka: ' => 'Molimo pokušajte ponovo!']);
        } else {
            $token = $korisnik->createToken('TknLogin')->plainTextToken;

            return response()->json([
                'Korisnik - ' => $korisnik,
                'Login token - ' => $token
            ]);
        }
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Logout!');
    }
}
