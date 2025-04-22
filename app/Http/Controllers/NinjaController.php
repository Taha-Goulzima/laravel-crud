<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    //
    public function index(){
        $ninja = Ninja::with('gym')->paginate(10);
        //$ninja = Ninja::orderBy('created_at')->get();
        return view('ninja.index',['ninjas'=>$ninja]);
    }
    public function show($id){
        $ninja = Ninja::with('gym')->findOrFail($id);
        return view('ninja.show',['ninja'=>$ninja]);
    }

    public function create(){
        $gyms = Gym::all();
        return view('ninja.create',['gyms'=>$gyms]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=> 'required|min:3',
            'lastname'=> 'required',
            'gym_id'=> 'required',
        ]);
        Ninja::create($validated);
        return redirect()->route('ninja.index')->with('success','Ninja created succsufly');
    }
    public function edit($id)
{
    $ninja = Ninja::findOrFail($id);
    $gyms = Gym::all();

    return view('ninja.edit', compact('ninja', 'gyms'));
}
    public function update(Request $request, $id)
    {
        $ninja = Ninja::findOrFail($id);
    
        $validated = $request->validate([
            'name' => 'required|min:3',
            'lastname' => 'required',
            'gym_id' => 'required',
        ]);
    
        $ninja->update($validated);
    
        return redirect()->route('ninja.show', $ninja->id)->with('success', 'Ninja updated successfully');
    }
    public function destroy($id){
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();
        return redirect()->route('ninja.index')->with('success','Ninja deleted succsufly');
        

    }
}
