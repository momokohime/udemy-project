<?php

namespace App\Http\Controllers;
// use DB;
use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }




    public function index()
    {
        return view('projects.index', [
            'projects' => Project::paginate()
        ]);


    }







    public function show(Project $project)
    {
        
        return  view('projects.show', 
            [
                'project' => $project
            ]);

    }






    public function create()
    {


        return view('projects.create', [
            'project' => new Project
        ]);
    }















    public function store(SaveProjectRequest $request)
    {


        // $titulo = request('title');
        // $descripcion = request('description');
        // $urle = request('url');



        // Project::create([
        //     'title' => $titulo,
        //     'description' => $descripcion,
        //     'url' => $urle
        // ]);




        // $fields = request()->validate([
        //     'title' => 'required',
        //     'url' => 'required',
        //     'description' => 'required',
        // ]);


        // Project::create($fields);


        Project::create($request->validated());

        return redirect()->route('projects.index') -> with('status', 'El proyecto se GUARDO');
    }












    public function edit(Project $project, Request $request)
    {





        return view('projects.edit', 
        [
            'project' => $project,
        ]);
    }


    public function update(Project $project, SaveProjectRequest $request)
    {


        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description'),
        // ]);


        $project->update($request->validated());

        return redirect()->route('projects.show', $project) -> with('status', 'El proyecto se ACTUALIZO');
    }




    public function destroy(Project $project)
    {



        $project->delete();

        return redirect()->route('projects.index') -> with('status', 'El proyecto se ELIMINO');
    }





}
