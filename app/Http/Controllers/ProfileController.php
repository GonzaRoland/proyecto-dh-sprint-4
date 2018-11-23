<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile');
        
    }

    public function update(Request $request, $id)

    {

        //dd($request);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|integer', 
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'street_address' => 'nullable|string|max:50',
            'apt_floor' => 'nullable|string|max:50',
            'zip_code' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:50',
            'province' => 'nullable|string|max:50',
            'file' => 'nullable|max:10000|mimes:doc,docx'
        ]);

        //dd($validator);


        if ($validator->fails()) {
            //dd($validator->failed());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($validator);

        
        //dd($request);
        

        if ($request->hasFile('image')) {
            $file = $request->image->store('fotos', 'public');
            $fileName = $request->image->hashName();
            $filePath = 'storage/app/public/fotos/' . $fileName;
            } else {$filePath = Auth::user()->photopath;}


        $user = User::find($id)->update([

        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email'),
        'street_address' => $request->input('street_address'),
        'apt_floor' => $request->input('apt_floor'),
        'zip_code' => $request->input('zip_code'),
        'city' => $request->input('city'),
        'province' => $request->input('province'),
        'photopath' => $filePath,
    
        
        ]);    
        

        return redirect('/');
        
        

    }
}
