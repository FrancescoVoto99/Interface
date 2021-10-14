<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Database;
use App\Models\messages;
use App\Models\alberi;
use App\Models\kpis;
use App\Models\subsystems;
use App\Models\kpihistorys;


class InterfaceController extends Controller
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
        $this->subsystems = new subsystems;
        $this->kpihistorys = new kpihistorys;
    }
    public function index()
    {
            return view('welcome');
        
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

    public function getSubsystem(){
        $theSubsystem=$this->subsystems->getAllSubsystem();
        return $theSubsystem;

    }
    public function getKpiHistory(){
        $theKpiHistory=$this->kpihistorys->getKpiHistory();
        return $theKpiHistory;

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
