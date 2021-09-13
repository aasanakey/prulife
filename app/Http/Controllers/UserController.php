<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $countries = \App\Models\Country::all();
        return view('client.profile', compact('user', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        Validator::make($request->all(), [
            'firstname' => ['sometimes', 'required', 'string', 'max:255'],
            'lastname' => ['sometimes', 'required', 'string', 'max:255'],
            'email' => ['sometimes', 'required', 'string', 'email', 'max:255'],
            'phone' => ['sometimes', 'required', 'phone:AUTO,GH'],
            'address' => ['sometimes', 'required', 'string'],
            "avatar" => ['sometimes', 'required', 'image', 'mimes:jpg,jpeg,png,svg,bmp,tif,jfif'],
            "address" => ['sometimes', 'required', 'string'],
            "country" => ['sometimes', 'required', 'exists:countries,id'],
            "state" => ['sometimes', 'nullable', 'exists:states,id'],
            "city" => ['sometimes', 'nullable', 'exists:cities,id'],
        ])->validate();

        if ($request->hasFile('avatar')) {

            $path = $request->file('avatar')->storeAs('public/clients', time() . "_" . $request->avatar->getClientOriginalName());
            $path = str_replace("public/", "storage/", $path);
            $avatar = $path;
            if ($user->avatar != 'storage/default-avatar.jpg') {
                $toDelete = str_replace("storage/", "public/", $user->avatar);
                Storage::delete($toDelete);
            }

            $user->avatar = $avatar;

        }

        if ($request->firstname && $user->firstname != $request->firstname) {
            $user->firstname = $request->firstname;
        }

        if ($request->lastname && $user->lastname != $request->lastname) {
            $user->lastname = $request->lastname;
        }

        if ($request->phone && $user->phone != $request->phone) {
            Validator::make($request->all(), ["phone" => ['unique:users']])->validate();
            // if ($validator->fails()) {
            //     return \redirect()->back()->withErrors($validator)->withInput();
            // }
            $user->phone = $request->phone;
        }

        if ($request->email && $user->email != $request->email) {
            Validator::make($request->all(), ["email" => ['unique:users']])->validate();
            // if ($validator->fails()) {
            //     return \redirect()->back()->withErrors($validator)->withInput();
            // }

            $user->email = $request->email;
        }

        if ($request->address && $user->address != $request->address) {
            $user->address = $request->address;
        }

        if ($request->country && $user->country_id != $request->country) {
            $user->country_id = $request->country;
        }

        if ($request->state && $user->stat_ide != $request->state) {
            $user->state_id = $request->state;
        }

        if ($request->city && $user->city_id != $request->city) {
            $user->city_id = $request->city;
        }
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show dashboard view
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('client.dashboard');
    }

    /**
     * Show insurance view
     * @return \Illuminate\Http\Response
     */
    public function insurance()
    {
        $policies = auth()->user()->policies;
        return view('client.insurance',compact('policies'));
    }

    /**
     * Show claims view
     * @return \Illuminate\Http\Response
     */
    public function claims()
    {
        $claims = auth()->user()->claims;
        return view('client.claims',compact('claims'));
    }

    /**
     * Show view for creating cliam requests
     * @return \Illuminate\Http\Response
     */
    public function createClaim()
    {
        // $claims = auth()->user()->policies;
        return view('client.create_claims');
    }

    /**
     * Show payments view
     * @return \Illuminate\Http\Response
     */
    public function payments()
    {
        $payments = auth()->user()->transactions;
        return view('client.payments',compact('payments'));
    }

    /**
     * Show sms view
     * @return \Illuminate\Http\Response
     */
    public function sms()
    {
        $messages = auth()->user()->policies;
        return view('client.sms',compact('messages'));
    }

     /**
     * Show insurance view
     * @return \Illuminate\Http\Response
     */
    public function emails()
    {
        $messages = auth()->user()->policies;
        return view('client.emails',compact('messages'));
    }

    public function communications(Request $request)    
    {
        // dd($request->all());
        Validator::make($request->all(),[
            "channel" => ["required","in:sms,email"],
            "subject" => ["required",'string',"max:191"],
            "message" => ["required",'string'],
        ])->validate();
    }
}