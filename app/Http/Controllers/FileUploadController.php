<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileUploadRequest;
use App\Http\Requests\UpdateFileUploadRequest;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFileUploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileUploadRequest $request)
    {

//        return $request->photos->getClientOriginalExtension();
        $dbName = $request->photos->getClientOriginalName();
        $newName = "img_".uniqid().".".$request->file('photos')->extension();
        $extensions = ['docx','xlsx','pdf','csv'];
        $FileUpload = new FileUpload();
        $FileUpload->StorageFileName = $newName;
        $FileUpload->UiDbFileName = $dbName;
        $FileUpload->extension = $request->photos->getClientOriginalExtension();

        if($request->hasFile('photos')){
            $request->file('photos')->storeAs("public",$newName);
        }
        $FileUpload->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileUploadRequest  $request
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileUploadRequest $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUpload $fileUpload)
    {
        //
    }
}
