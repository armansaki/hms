<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function addnewform()
    {
      return view('admin.doctor.addnew');
    }

    public function addnew(Request $request)
    {
        $this->validator($request->all());
        if ($request->hasFile('picture')){
                         // $destinationPath=public_path('images\notice');
                          $file     = request()->file('picture');
                          $fileName = 'hms_img_'.date('_j\_m_Y_').rand(1,15).'.'. $file->getClientOriginalExtension();
                         $file->move('img/doctors',$fileName);
              }else{
              $fileName='';
              }
        if ($this->create($request->all(),$fileName)) {
          return redirect(route('home'))->withSuccess('Doctor Registered successfully');
        }else {
            return redirect(route('home'))->withFailed('Doctor Registered failed');
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'contact' => 'required|regex:/^[0][1][5-9][0-9][0-9](\d{6})$/|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'picture'=>'nullable|mimes:jpeg,bmp,png',
        ])->validate();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data,$fileName)
    {
        if(User::create([
            'name' => $data['name'],
            'contact' => $data['contact'],
            'password' => Hash::make($data['password']),
        ])){
          return Doctor::create([
              'name' => $data['name'],
              'contact' => $data['contact'],
              'degree' => $data['degree'],
              'speciality' => $data['speciality'],
              'picture' => $fileName,
          ]);
        }
        else {
          return false;
        }
    }
}
