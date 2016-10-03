<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class DownloadController extends Controller
{
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hash)
    {
        $upload = Upload::findByHash($hash);

        return view('download.show')->with(['upload' => $upload]);
    }

    public function download(Request $request)
    {
        // dd($request->input());

        $upload = Upload::where('hash', '=', $request->hash)->where('password', '=', $request->password)->first();

        $path = public_path('uploaded/files/' . $upload->file_name);

        return response()->download($path);

    }


    // TODO: create a new download method
    // this method needs to accept a password and a hash
    // then you should check to see if an active upload is available
    // that has the given hash, and is active, and has the password that has
    // been provided

    // it all of that is true, then for now just dd($upload) or whatever
}
