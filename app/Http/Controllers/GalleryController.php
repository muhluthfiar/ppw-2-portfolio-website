<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;

/**
* @OA\Info(
* description="Contoh API doc menggunakan OpenAPI/Swagger",
* version="0.0.1",
* title="Contoh API documentation",
* termsOfService="http://swagger.io/terms/",
* @OA\Contact(
* email="choirudin.emchagmail.com"
* ),
* @OA\License(
* name="Apache 2.0",
* url="http://www.apache.org/licenses/LICENSE-2.0.html"
* )
* )
*/

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "posts",
            'menu' => 'Gallery',
            'galleries' => Project::where('picture', '!=',
            '')->whereNotNull('picture')->orderBy('created_at',
            'desc')->paginate(30)
        );

        
        
        return view('gallery.index')->with($data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


/**
 * @OA\Get(
 * path="/api/gallery",
 * tags={"gallery"},
 * summary="Returns a List Of Pictures",
 * description="Returns a List Of Pictures",
 * operationId="getAllGallery",
 * @OA\Response(
 * response="default",
 * description="successful operation"
 * )
 * )
 */

    public function getAllGallery(Request $request)
    {


        $data = array(
            'id' => "posts",
            'menu' => 'Gallery',
            'galleries' => array(Project::all()->where('picture', '!=', '')->whereNotNull('picture'))
        );

        
        return response()->json($data);
    }


    // public function getAllGallery(Request $request) 
    // {
    //     $data = Project::where('picture', '!=', '')->whereNotNull('picture')->orderBy('created_at', 'desc');
    //     return response()->json($data);
    // }
}
