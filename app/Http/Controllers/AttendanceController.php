<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       
        $dailyall = Report::where('flag','daily')->get(); //日報の一覧
        $shareall = Report::where('flag','shareall')->get(); //共有の一覧
        $reportsall = Report::all();//書き込みのお知らせで使用
        $usersall = User::all();//ユーザー毎のログイン日時で使用
        return view('sections.daily',compact('dailyall','shareall','usersall','reportsall'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        Report::create([
                'user_id' => Auth::id(),  
                'clock_in' => $request->input('datetime'),
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'flag' =>  $request->input('flag'),//shareallかdaily
                
        ]);
        return redirect()->route('attendance.index')->with('success', '追加が完了しました。');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $details_info = Report::findorfail($id);
        return $details_info;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
