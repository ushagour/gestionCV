<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use App\Cvs;


class Cvcontroller extends Controller
{

    //index of page 
    public function index()
    {
        $listeCV = DB::table('Cvs')
        ->where('user_id',1)
        ->paginate(5);

        return view("cv.index",["liste"=>$listeCV]);
    }

    // affichage du formulaire de creation CV 
    public function Ajouter()
    {
    
return view("cv.add");

    }
    // enregistré un Cv
    public function Add(Request $req)
    {

    
        
        $req->validate([
            'title' => 'required|max:255',
            'presontation' => 'required',
        ]);

        DB::table('Cvs')->insert([
                'title' =>  $req->input("title"),
                'presontation' =>  $req->input("presontation"),
            ]
        );



    
        // $cvmodel->user_id= session('data')-;
     //   return $req->all();
        session()->flash("success","le Cv a été enregigtre avec success !");
         return redirect('/');

}
    // recupérer un CV et le metre  
    public function Modifier($id)
    {
        $cv_to_edit = Cvs ::find($id);

        return view("cv.edit",["cv_to_edit"=>$cv_to_edit]);
     //   echo $id;
    }
    //update cv 
    public function Update(Request $req)
{
    $req->validate([
        'title' => 'required|max:255',
        'presontation' => 'required',
    ]);

        $id =$req->input('idcv');
        $new_cv = Cvs ::find($id);
        $new_cv->title = $req->input('title');
        $new_cv->presontation = $req->input('presontation');
        $new_cv->save();        
        session()->flash("success","le Cv a été modifier avec success !");

        return redirect('/');

    }
    // supprimer un CV
    public function Delete($id)
    {
  // echo $id;


  $cv_to_delete = Cvs ::find($id);
  $cv_to_delete->delete();
  echo '{"msg":"success"}';


    }
}
