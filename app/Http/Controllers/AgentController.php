<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
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
        // $countries = \App\Models\Country::all();
        // $cities = \App\Models\City::all();
        // return view('agent.profile', compact('agent', 'countries', 'cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        $countries = \App\Models\Country::all();
        return view('agent.profile', compact('agent', 'countries'));
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
        
        $validator = Validator::make($request->all(), [
            "firstname" => ['sometimes', 'required', 'string', 'max:255'],
            "lastname" => ['sometimes', 'required', 'string', 'max:255'],
            "phone" => ['sometimes', 'required', 'phone:AUTO,GH'],
            "email" => ['sometimes', 'required', 'string', 'email', 'max:255'],
            "avatar" => ['sometimes', 'required','image', 'mimes:jpg,jpeg,png,svg,bmp,tif,jfif'],
            "address" => ['sometimes', 'required', 'string'],
            "country" => ['sometimes', 'required','exists:countries,id'],
            "state" => ['sometimes', 'nullable','exists:states,id'],
            "city" => ['sometimes', 'nullable','exists:cities,id'],
        ]);
        if ($validator->fails()) {
            return \redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('avatar')) {
            
            $path = $request->file('avatar')->storeAs('public/agents',time()."_".$request->avatar->getClientOriginalName());
            $path = str_replace("public/","storage/",$path);
            $avatar =$path;
            if($agent->avatar != 'storage/default-avatar.jpg'){
                $toDelete = str_replace("storage/","public/",$user->avatar);
                Storage::delete($toDelete);
            }
                 
            $agent->avatar = $avatar;
            
        }

        if ($request->firstname && $agent->firstname != $request->firstname) {
            $agent->firstname = $request->firstname;
        }

        if ($request->lastname && $agent->lastname != $request->lastname) {
            $agent->lastname = $request->lastname;
        }

        if ($request->phone && $agent->phone != $request->phone) {
            $validator = Validator::make($request->all(), [
                "phone" => ['unique:agents'],
            ]);
            if ($validator->fails()) {
                return \redirect()->back()->withErrors($validator)->withInput();
            }
            $agent->phone = $request->phone;
        }

        if ($request->email && $agent->email != $request->email) {
            $validator = Validator::make($request->all(), [
                "email" => ['unique:agents'],
            ]);
            if ($validator->fails()) {
                return \redirect()->back()->withErrors($validator)->withInput();
            }

            $agent->email = $request->email;
        }

        if ($request->address && $agent->address != $request->address) {
            $agent->address = $request->address;
        }

        if ($request->country && $agent->country_id != $request->country) {
            $agent->country_id = $request->country;
        }

        if ($request->state && $agent->stat_ide != $request->state) {
            $agent->state_id = $request->state;
        }

        if ($request->city && $agent->city_id != $request->city) {
            $agent->city_id = $request->city;
        }
        $agent->save();
        return redirect()->back()->with('success', 'Profile updated successfully.');
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
        return view('agent.prospects', compact('prospects'));
    }

    /**
     * Create a prospect
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProspect(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'phone:AUTO,GH', 'unique:users'],
            'address' => ['required', 'string'],
            'lead' => ['required', 'in:cold,warm,hot,sales-ready,marketing-qualified,sales-qualified,customer'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $prospect = \App\Models\User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        \App\Models\ClientAgent::create([
            'user_id' => $prospect->id,
            'agent_id' => auth()->user()->id,
            'lead' => $request->lead,
        ]);
        return redirect()->back()->with('success', 'Prospect added successfully');
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
        return view('agent.clients', compact('clients'));
    }

    /**
     * Create a client
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createClients(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'phone:AUTO,GH', 'unique:users'],
            'address' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $client = \App\Models\User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        \App\Models\ClientAgent::create([
            'user_id' => $client->id,
            'agent_id' => auth()->user()->id,
            'lead' => 'customer',
        ]);
        return redirect()->back()->with('success', 'Customer added successfully');
    }

    /**
     * Show insurance view
     * @return \Illuminate\Http\Response
     */
    public function insurance()
    {

        $insurance = \App\Models\PolicyPlan::all();
        $clients = auth()->user()->clients;
        $policies = \App\Models\UserPolicy::with(['user' => function ($q) {
            $q->agent()->where('id', auth()->user()->id);
        }])->get();
        // return response()->json($policies);
        return view('agent.insurance', compact('insurance', 'clients', 'policies'));
    }

    /**
     * Create a client insurance policy
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createInsurance(Request $request)
    {
        // \dd($request->all());
        $validator = Validator::make($request->all(), [
            "insurance" => ['required'],
            "client" => ['required'],
            "expiry_date" => ['required', 'date'],
            "renewal_date" => ['required', 'date'],
            "beneficiaries" => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

    }
}