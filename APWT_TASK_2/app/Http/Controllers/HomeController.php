<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('pages.home');
    }
    function login()
    {
        return view('pages.login');
    }
    function reg()
    {
        return view('pages.reg');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        for($i=1;$i<=10;$i++){
            $date=new DateTime();
            $date = $date->format('Y-m-d H:i:s');

            $agent = array(
                "name" => "Agent $i",
                "id" => $i,
                "dob" =>$date
            );
            $agents[]= (object)$agent;
        }
        return view('pages.contact')->with('agents',$agents);
    }
    function product()
    {
        $name = "Hridoy";
        $id="19-40101-1";
        $dob = "17-03-1998";
        $names=array("mansib", "Saharir");

        return view('pages.products')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);;
    }
    function teams()
    {
        return view('pages.teams');
    }
    function Pro_list(){

        for($i=1;$i<=10;$i++){
            $date=new DateTime();
            $date = $date->format('Y-m-d H:i:s');

            $agent = array(
                "name" => "Product $i",
                "id" => $i,
                "dob" =>$date
            );
            $agents[]= (object)$agent;
        }
        return view('pages.ProductList')->with('agents',$agents);;
    }
    function AgentList(Request $req){
        $agent =array(
            "name" =>$req->name,
            "id"=>$req->id,
            "dob"=>$req->dob
        );
        $agents[] = (object)$agent;
        return view('pages.agent')->with('agent',$agents);
    }

    function productlist(Request $req){
        $product =array(
            "name" =>$req->name,
            "id"=>$req->id,
            "dob"=>$req->dob
        );
        $products[] = (object)$product;
        return view('pages.product')->with('product',$products);
    }
    function loginSubmit(Request $req){

        $req->validate([
            'uname'=>'required|min:5|max:10',
            'password'=>'required'

        ]);

        return "<h1>From submitted with $req->uname and $req->password</h1>";
    }
    function regSubmit(Request $req){

        $req->validate([
            'frist_name'=>'required',
            'last_name'=>'required',
            'dob'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        return "<h1>Register comfirm</h1>";
    }
}
