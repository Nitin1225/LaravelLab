<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $data = array(
            'pageTitle'=>"Home",
            'functionName'=>"home"
        );
        return view('layouts.home')->with($data);
    }

    public function about()
    {
        $data = array(
            'pageTitle'=>"About Me",
            'functionName'=>"about"
        );
        //return view('layouts.about')->with('data', $data);
        return view('layouts.about')->with($data);
    }

    public function projects()
    {
        $data = array(
            'pageTitle'=>"Projects",
            'functionName'=>"projects"
        );
        return view('layouts.projects')->with($data);
    }

    public function faq()
    {
        $data = array(
            'pageTitle'=>"FAQs",
            'functionName'=>"faq"
        );
        return view('layouts.faq')->with($data);
    }

    public function register()
    {
        $data = array(
            'pageTitle' => 'Register',
            'functionName' => 'register'
        );
        return view('layouts.register')->with($data);
    }

    public function userWelcome(Request $request)
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
            // // // $fileMovedPath = 'storage/'.$destinationPath.'/'.$newName;
            $fileMovedPath = 'storage/images/'.$newName;

        $postData = (array)$request->all();
        unset($postData['_token']);
        $postData['image'] = $fileMovedPath;
        $data['pageTitle'] = "Welcome";
        $data['functionName'] = "userWelcome";
        $data['postData'] = $postData;

        // $data = array(
        //     'pageTitle' => 'Welcome',
        //     'functionName' => 'userWelcome'
        // );
        // foreach (array_keys($request->name) as $key) {
        //     $value = $request[$key];
        //     $data[$key] = $value;
        // }
        // // foreach($request as $key => $value)
        // // {
        // // }
        return view('layouts.userWelcome')->with($data);
        //print_r($data); // DI
    }
}
