<?php

namespace App\Http\Controllers;
use App\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fac=Faculty::all();
        return view('Faculty.index',compact('fac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'facultyfirstname' => 'required|alpha|max:15|min:3',
            'facultylastname' => 'required|alpha|max:15|min:3',
            'facultyemailid' => 'required|email:rfc,dns',
            'facultyid' => 'required|unique:faculties',
            'facultydesignation' => 'required', 
            'facultyqualification' => 'required',
            'joiningdate' => 'required',
            'facultydob' => 'required',
            'facultyexperience' => 'required',
            'nationalpublication' => 'required',
            'internationalpublication' => 'required',
        ]);
        
        // Faculty::imagestore($request);        
        Faculty::add($request->all());                
        return redirect('/faculty')->with('messageadd','Successfully Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($facultyid)
    {
        //
        $fac=Faculty::findOrFail($facultyid);        
        return view('Faculty.show',compact('fac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($facultyid)
    {
        //
        $fac=Faculty::find($facultyid);
        return view('Faculty.edit',compact('fac'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $facultyid)
    {
        //
        $validatedData = $request->validate([
            'facultyfirstname' => 'required|alpha|max:15|min:3',
            'facultylastname' => 'required|alpha|max:15|min:3',
            'facultyemailid' => 'required|email:rfc,dns',
            'facultyid' => 'required',
            'facultydesignation' => 'required', 
            'facultyqualification' => 'required',
            'joiningdate' => 'required',
            'facultydob' => 'required',
            'facultyexperience' => 'required',
            'nationalpublication' => 'required',
            'internationalpublication' => 'required',
        ]);
        $faculty = Faculty::find($facultyid);
        $data = $request->all();        
        // $faculty->edit($data);        
        $faculty->edit(collect($data));
        // return view('Faculty.index',compact('fac'));
        return redirect('/faculty')->with('messageup','Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($facultyid)
    {
        //
        Faculty::destroy($facultyid);
        return redirect('faculty')->with('messagedel','Successfully Deleted !');
    }
    
}
