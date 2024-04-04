<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Mountain;
use App\Mail\TourRegisteredMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Http\Requests\Admin\Join\StoreRequest;
use App\Http\Requests\Admin\Join\UpdateRequest;

class JoinController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $join = Join::with('mountain')->orderBy('created_at','DESC')->get();
        return view('admin.modules.join.index',[
            'joins' =>$join
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        $mountain = Mountain::get();
        $mountain =$request->input('mountain_id');
        $mountain->id=session()->get('mountain_id');
        return view('admin.modules.join.create',[
            'mountains' => $mountain,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {   
        $join = new Join();
        $join->user_id = $request->user_id;
        $join->infomation=$request->infomation;
        $join->mountain_id = $request->mountain_id;
        $join->quantity=$request->quantity;
        $join->date = $request->date;
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $join->save();
        return redirect()->route('client.home')->with('success','Create country successfully');
        
    
        
    }

    public function registerTour(Request $request, $id)
    {
        $join = Join::find($id);
        // Xử lý đăng ký tour ở đây

        // Gửi email
        Mail::to($join->user->email)->send(new TourRegisteredMail($join));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {   $mountain = Mountain::get();
        $join = Join::findOrFail($id);
        return view('admin.modules.join.edit',[
            'id'=>$id,
            'joins' => $join,
            'mountains' => $mountain,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $join = Join::findOrFail($id);
        $join->name = $request->name;
        $join->infomation = $request->infomation;
        $join->quantity = $request->quantity;
        $join->mountain_id = $request->mountain_id;
        $join->date = $request->date;
        $join->save();

        return redirect()->route('admin.join.index')->with('success', 'Update Tour successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $join = Join::find($id);
        if($join == null) {
            abort(404);
        }
        $join->delete();

        return redirect()->route('admin.join.index')->with('success','Delete tour successfully');
    }
}
