<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFolderUploadRequest;
use App\Http\Requests\UpdateFolderUploadRequest;
use App\Models\FolderUpload;

class FolderUploadController extends Controller
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
     * @param  \App\Http\Requests\StoreFolderUploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFolderUploadRequest $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FolderUpload  $folderUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FolderUpload $folderUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FolderUpload  $folderUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FolderUpload $folderUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFolderUploadRequest  $request
     * @param  \App\Models\FolderUpload  $folderUpload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFolderUploadRequest $request, FolderUpload $folderUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FolderUpload  $folderUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FolderUpload $folderUpload)
    {
        //
    }
}
