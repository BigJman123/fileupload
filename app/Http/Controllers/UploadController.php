<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

use App\Upload;

use Uuid;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('upload.store');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $upload = Upload::findOrFail($id);
        
        $hash = route('download.show', $upload->hash);

        return view('upload.show', ['upload' => Upload::findOrFail($id)], ['hash' => route('download.show', $upload->hash)]);
        // find upload
        // return a view
        // view should show the URL to get to the download
        // show the password that they need to send along to view it
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
    
    public function store(Request $request) 
    {
        $file = $request->file('file');
        
        $name = time() . $file->getClientOriginalName();
        
        $file->move('uploaded/files', $name);

        $random = str_random(6);

        $hash = Uuid::generate();

        $upload = new Upload([
                'id'              => $request->get('id'),
                'file_name'       => $name,
                'password'        => $random,
                'hash'            => $hash,
                'expires_at'      => $request->get('date')
            ]);

        $upload->save();

        return redirect()->route('upload.show', $upload->id);
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
}
