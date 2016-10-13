<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\blog;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home');
    }

    public function teach_detail()
    {
        return view('teach');
    }

    public function show_blog()
    {
        //Auth::guest();

        $user_email = Auth::user()->email;

        if( $user_email == 'justforcbkia@gmail.com')
        {
            $blogs = blog::orderBy('created_at', 'DESC')->get();
        }
        else
        {
            $blogs = blog::orderBy('created_at', 'DESC')
                        ->Where('mail', $user_email)

                        ->get();
        }
        

        $data = ['blogs' => $blogs];
        return view('welcome' , $data);
    }

    public function detail($id)
    {
        //echo '111';
        $blogs = blog::whereid($id)->get();

        $data = ['blogs' => $blogs];
        //dd($data);
        return view('detail',$data);
        //return view('blog.post')->withPost($post);
        
    }

    public function create(Request $request)
    {
        

        $this->validate($request, [
            'website' => 'required',
            'price' => 'required|numeric',
            
            
            
        ]);

        



        blog::create($request->all());
        return redirect('/');
        
        
        
    }
}
