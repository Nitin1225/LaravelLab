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
            'mobile' => 'required'
        ]);

        $postData = (array)$request->all();
        unset($postData['_token']);
        $data['pageTitle'] = "Welcome";
        $data['functionName'] = "userWelcome";
        $data['postData'] = $postData;
        // $data = array(
        //     'title' => 'Welcome',
        //     'func' => 'userWelcome'
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
