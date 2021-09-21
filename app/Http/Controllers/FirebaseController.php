<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Database;
use App\Models\graficosKPI1;


class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $string='{name: "Series 2",
            data:[';
          $string2='';
          $this->_KPI1points = new graficosKPI1;
          $points = $this->_KPI1points->getAllpoints();
          $prova = $this->_KPI1points->getAllpoints()->toArray();
          $prova2 = $this->_KPI1points->getAllpoints()->toJson();
          
          foreach($prova as $result){
     $string = $string . "[" . $result['x'] .",". $result['y']. "],"; 
     $string2 = $string2 . "[" . $result['x'] .",". $result['y']. "],"; 
    
   
  }
  $string=$string ."]}";
         
  
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/tirocinio-975e9-firebase-adminsdk-f1gv5-7da7075f22.json');
            $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://tirocinio-975e9-default-rtdb.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();
    
            $newPost2 = $database->getReference();
            return view('welcome')
            ->with('points', $points)
                          ->with('prova', $string)
                          ->with('prova2', $prova2)
                  ->with('prova3', $string2)
            ->with('data', $newPost2->getvalue())
    ;
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
