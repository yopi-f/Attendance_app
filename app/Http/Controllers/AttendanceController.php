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
        if ($details_info->flag =='daily') {
            return view('screenmoves.daily_details',compact('details_info'));//詳細画面
        }
        elseif ($details_info->flag =='shareall') {
            return view('screenmoves.share_details',compact('details_info'));//全体共有詳細画面
        }
    }        
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_info = Report::findOrfail($id);
        if ($edit_info->user_id !== Auth::id()) {
            abort(403,'アクセスが許可されていません。');//権限チェック
        }
        if ($edit_info->flag =='daily') {
            return view('screenmoves.daily_edit',compact('edit_info'));//日報編集画面へ移動
        }
        elseif ($edit_info->flag =='shareall') {
            return view('screenmoves.share_edit',compact('edit_info'));//全体共有編集画面へ移動
        }
    }      
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::findOrFail($id);
        if ($report->user_id !== Auth::id()) {
            abort(403,'アクセスが許可されていません。');//権限チェック
        }
        $report->update([
            'clock_in' => $request->input('datetime'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
        return redirect()->route('attendance.index')->with('success', '更新が完了しました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report=Report::findorfail($id);
        if ($report->user_id !== Auth::id()) {
            abort(403,'アクセスが許可されていません。');//権限チェック
        }
        $report->delete();
        return redirect()->route('attendance.index')->with('success', '削除が完了しました。');
    }
}
