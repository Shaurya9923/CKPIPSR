<?php

namespace App\Http\Controllers;
use App\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $achieve=Achievement::all();
        return view('Achievement.index',compact('achieve'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Achievement.create');
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
            'achievementid' => 'required|unique:achievements',
            'achievementtitle' => 'required',            
            'achievementdate' => 'required',            
            'achievementdetail' => 'required',            
        ]);
        Achievement::add($request->all());        
        return redirect('/achievement')->with('messageadd','Successfully Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($achievementid)
    {
        //
        $achieve=Achievement::findOrFail($achievementid);
        return view('Achievement.show',compact('achieve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($achievementid)
    {
        //
        $achieve=Achievement::find($achievementid);
        return view('Achievement.edit',compact('achieve'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $achievementid)
    {
        //
        $validatedData = $request->validate([
            'achievementid' => 'required',
            'achievementtitle' => 'required',            
            'achievementdate' => 'required',            
            'achievementdetail' => 'required',            
        ]);
        $achievement=Achievement::find($achievementid);
        $data=$request->all();
        // $achievement->edit($data);
        $achievement->edit(collect($data));
        return redirect('/achievement')->with('messageup','Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($achievementid)
    {
        //
        Achievement::destroy($achievementid);
        return redirect('achievement')->with('messagedel','Successfully Deleted !');
    }
}
