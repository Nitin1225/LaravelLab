<?php

namespace App\Http\Controllers;

use App\UserDetails;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'pageTitle'=>"User Details",
            'functionName'=>"user"
        );
        return view('users.index')->with($data);
        //return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = array(
            'pageTitle'=>"Register",
            // 'functionName'=>"user"
        );
        $buttonClickedIs = $request->get('action');
        if ($buttonClickedIs=="Register") {
            return view('users.create')->with($data);
        }
        else if ($buttonClickedIs=="Login") {
            return view('layouts.login')->with($data);
        }
        else {
            return view('layouts.login')->with($data);
        }
        // return view('users.create')->with($data);
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
            'name' => 'required',
            'email' => 'required',
            'pass1' => 'required',
            'pass' => 'required',
            'mobile' => 'required',
            'image' => 'required'
        ]);

        $file = $request->file('image');

        $fileFullName = $file->getClientOriginalName(); // file name with extension

        $fileName = pathinfo($fileFullName, PATHINFO_FILENAME); // only filename

        $fileExt = $file->getClientOriginalExtension(); // png i.e. extension
        
        $filePath = $file->getRealPath(); // C:\xampp\tmp\php164D.tmp

        $fileMimeType = $file->getMimeType(); // image/png

        $fileSize = $file->getSize(); // file size in bytes

        // File Moving 
            // $destinationPath = 'uploads';
            // $newName = $fileName.'_'.time().'.'.$fileExt;
            // $file->move($destinationPath, $newName);
            // // // // $file->move($destinationPath, $file->getClientOriginalName());
            // $fileMovedPath = $destinationPath.'/'.$newName;
            
        // File Move Another Way
            $destinationPath = 'public/images';
            $newName = $fileName.'_'.time().'.'.$fileExt;
            $file->storeAs($destinationPath, $newName);
            $fileMovedPath = 'storage/images/'.$newName;

        $postData = (array)$request->all();
        unset($postData['_token']);
        $postData['image'] = $fileMovedPath;
        $data['pageTitle'] = "Welcome";
        $data['functionName'] = "userWelcome";
        $data['postData'] = $postData;

        return view('layouts.userWelcome')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetails $userDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetails $userDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetails $userDetails)
    {
        //
    }
}
