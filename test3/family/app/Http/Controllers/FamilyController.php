<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\Place;



class FamilyController extends Controller
{
   
   
    public function index()
    {
       $families=Family::all();
        return view('showall',$families);
    }
    

  
    public function create()
    {
     
       $places=Place::all();
       return view('add_family',compact('places'));
    }

  
    public function store(Request $request)
    {
        $family=Family::create($request->all());
    }

  
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
      
    public function addFamilyToPlace($fid,$pid)
    {
        
        $family=Family::findOrFail($fid);
        $place=Place::findOrFail($pid);
         $family->place()->save($place);
         $family->refresh();
    }
   
}

