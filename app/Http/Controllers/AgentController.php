<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }

    /**
     * Show dashboard view
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('agent.dashboard');
    }

    /**
     * Show prospects view
     * @return \Illuminate\Http\Response
     */
    public function prospects()
    {
        // $prospects = \App\Models\ClientAgent::where('agent_id',auth()->user()->id)
        // ->where('lead','!=','customer')->get();
        $prospects = auth()->user()->prospects;
        return view('agent.prospects',compact('prospects'));
    }

    /**
     * Create a prospect
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProspect(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','phone:AUTO,GH','unique:users'],
            'address' => ['required','string'],
            'lead' => ['required','in:cold,warm,hot,sales-ready,marketing-qualified,sales-qualified,customer']
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $prospect = \App\Models\User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        \App\Models\ClientAgent::create([
            'user_id' => $prospect->id,
            'agent_id' => auth()->user()->id,
            'lead'=> $request->lead,
        ]);
        return redirect()->back()->with('success','Prospect added successfully');
    }

     /**
     * Show client view
     * @return \Illuminate\Http\Response
     */
    public function clients()
    {
        // $clients = \App\Models\ClientAgent::where('agent_id',auth()->user()->id)
        // ->where('lead','customer')->get();
        $clients = auth()->user()->clients;
        return view('agent.clients',compact('clients'));
    }

    /**
     * Create a client
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createClients(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','phone:AUTO,GH','unique:users'],
            'address' => ['required','string'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $client = \App\Models\User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        \App\Models\ClientAgent::create([
            'user_id' => $client->id,
            'agent_id' => auth()->user()->id,
            'lead'=> 'customer',
        ]);
        return redirect()->back()->with('success','Customer added successfully');
    }

    /**
     * Show insurance view
     * @return \Illuminate\Http\Response
     */
    public function insurance()
    {
        
        $insurance = \App\Models\PolicyPlan::all();
        $clients = auth()->user()->clients;
        $polices = auth()->user()->clients;
        return view('agent.insurance',compact('insurance','clients','polices'));
    }
}
