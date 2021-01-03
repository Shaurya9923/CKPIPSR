<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $new=News::all();
        return view('News.index',compact('new'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('News.create');
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
            'newsid' => 'required|unique:news',
            'newstitle' => 'required|alpha',
            'newsdetail' => 'required',
            'newstime' => 'required',            
        ]);
        News::add($request->all());        
        return redirect('/news')->with('messageadd','Successfully Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($newsid)
    {
        //
        $new=News::findOrFail($newsid);        
        return view('News.show',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($newsid)
    {
        //
        $new=News::find($newsid);
        return view('News.edit',compact('new'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $newsid)
    {
        // 
        $validatedData = $request->validate([
            'newsid' => 'required',
            'newstitle' => 'required|alpha',
            'newsdetail' => 'required',
            'newstime' => 'required',            
        ]);       
        $new = News::find($newsid);
        $data = $request->all();        
        $new->edit($data);        
        
        // return view('Faculty.index',compact('fac'));
        return redirect('/news')->with('messageup','Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($newsid)
    {
        //
        News::destroy($newsid);
        return redirect('news')->with('messagedel','Successfully Deleted !');
    }
}
