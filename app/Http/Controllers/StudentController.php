<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $max_data = 4;

        $students = Student::orderBy('name','asc')->paginate($max_data);
        return view('account', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'name' => 'required',
            'telp' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]));

        $data = [
            'name'=>$request->input('name'),
            'telp'=>$request->input('telp'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];

        Student::create($data);
        return redirect('/login')->with('succes', 'Success Register Data, Please Login!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(([
            'name' => 'required',
            'telp' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]));

        $data = [
            'name'=>$request->input('name'),
            'telp'=>$request->input('telp'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];

        Student::where('id', $id)->update($data);
        return redirect('/account')->with('success', 'Success Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::where('id',$id)->delete();
        return redirect('/account')->with('success', 'Success Delete Data');
    }
}
