<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Database;
use App\Models\messages;
use App\Models\alberi;
use App\Models\kpis;


class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->messages = new messages;
        $this->alberi = new alberi;
        $this->kpis = new kpis;
    }
    public function index()
    {
        
        $themessages=$this->kpis->getAllKpi();
  
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/tirocinio-975e9-firebase-adminsdk-f1gv5-7da7075f22.json');
            $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://tirocinio-975e9-default-rtdb.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();
    
            $newPost2 = $database->getReference();
            return view('welcome')
            ->with('data', $newPost2->getvalue())
            ->with('messages', $themessages);
        }
    }
    public function getMessage(){
        $themessages=$this->messages->getAllMessages();
        return $themessages;

    }
    public function getAlbero(){
        $theNodes=$this->alberi->getAllNodes();
        return $theNodes;

    }

    public function getKpi(){
        $theKpi=$this->kpis->getAllKpi();
        return $theKpi;

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
