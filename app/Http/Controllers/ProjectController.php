<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index"]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => 'projects',
            'projects' => Project::orderBy('created_at', 'desc')->paginate(10)
        );

        return view('projects.index')->with($data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ProjectTitle' => 'required|max:255',
            'ProjectDescription' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/ProjectImages', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $project = new Project;
        $project->ProjectTitle = $request->input('ProjectTitle');
        $project->ProjectDescription = $request->input('ProjectDescription');
        $project->picture = $fileNameToStore;
        $project->save();

        return redirect('projects')->with('successCreate','Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => 'projects',
            'project' => Project::find($id)
        );
        
        return view('projects.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => 'projects',
            'project' => Project::find($id)
        );
        return view('projects.edit')->with($data);
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
        $this->validate($request, [
            'ProjectTitle' => 'required|max:255',
            'ProjectDescription' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/ProjectImages', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        Project::where('id', $request->id)->update([
            'ProjectTitle' => $request->ProjectTitle,
            'ProjectDescription' => $request->ProjectDescription,
            'picture' => $fileNameToStore
        ]);

        return redirect('projects')->with('successUpdate','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        File::delete(public_path() . '/public/posts_image/' . $project->picture);
        return redirect('projects')->with('successDelete','Data deleted successfully');

        
    }


}