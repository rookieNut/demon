<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'name' => 'required',
            'gender' => 'required',
            'birth_day' => 'required | date',
            'mobile_no' => 'required | min:10',
            'email' => 'required | email',
            'address' => 'required',
        ]);

        student::create($request->all());
        return redirect('/students')->with('success', 'data is successfully saved');
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

    public function search(Request $request)
    {
        $name = $request->input('search');
        $students = student::all();
        $search = student::where('name',$name)->get();
       
        if($search->isEmpty())
        {
            return redirect('/students')->with('search', 'No records found for search') ;    
        }
        else 
        { 
            return view('index',compact('students','search')) ;
        }         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::findOrFail($id);
        return view('edit', compact('student'));
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
        $students = array('name' => $request->name,
                        'birth_day' => $request->birth_day,
                        'mobile_no' => $request->mobile_no,
                        'email' => $request->email, 
                        'address' => $request->address,
                     );
        student::where('id', $id)->update($students);
        return redirect('/students')->with('success', 'recorde updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', 'successfully deleted');
    }
}
