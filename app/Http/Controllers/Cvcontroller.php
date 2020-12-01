<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 use App\Cv;
 use App\User;


class Cvcontroller extends Controller
{

    //index of page 
    public function index()
    {
        $listeCV = DB::table('cvs')
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

        DB::table('cvs')->insert([
                'typeCV' =>  $req->input("title"),
                'name' =>  $req->input("presontation"),
                'user_id' =>  1,// session userid
                'created_at' =>  date("Y-m-d h:i"),
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
        $cv_to_edit = Cv ::find($id);

        return view("cv.edit",["cv_to_edit"=>$cv_to_edit]);
     //   echo $id;
    }
    //update cv 
    public function Update(Request $req)
{
    $req->validate([
        'typeCV' => 'required|max:255',
        'name' => 'required',
    ]);

        $id =$req->input('idcv');
        $new_cv = Cv ::find($id);
        $new_cv->typeCV= $req->input('typeCV');
        $new_cv->name = $req->input('name');
        $new_cv->save();        
        session()->flash("success","le Cv a été modifier avec success !");

        return redirect('/');

    }
    // supprimer un CV
    public function Delete($id)
    {


//using delete physique 


  $cv_to_delete = Cv ::find($id);
 echo  $cv_to_delete->delete();
   echo '{"msg":"success"}';
//    echo( $cv_to_delete->delete());





    }
    // Exportation de data base actuel 
    // public function export()
    // {
    //     $sql = "select ...";
    //     $db = new  () ;
    //     $stmt = $db->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->fetchAll();
        
    //     file_put_contents("output.txt", json_encode($result));

    // }
    public function tst()
    {
     
return User::find(1)->my_cv;
    }
}
