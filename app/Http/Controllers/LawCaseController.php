<?php

namespace App\Http\Controllers;

use App\Models\LawCase;
use App\Http\Requests\StoreLawCaseRequest;
use App\Http\Requests\UpdateLawCaseRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LawCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function myCases()
{
    $user = Auth::user();

    $lawCase = LawCase::where('user_id', $user->id)->get();

    // 🔥 USER SPECIFIC STATS
    $stats = [
        'total_cases' => LawCase::where('user_id', $user->id)->count(),
        'active_cases' => LawCase::where('user_id', $user->id)
                                ->where('case_status', 'active')
                                ->count(),

        'pending_cases' => LawCase::where('user_id', $user->id)
                                 ->where('case_status', 'pending')
                                 ->count(),

        'closed_cases' => LawCase::where('user_id', $user->id)
                                ->where('case_status', 'closed')
                                ->count(),
    ];

    return view('admin.cases.myCases', compact('lawCase', 'stats'));
}
    public function dashboard()
{   $cases=LawCase::latest()->take(4)->get();
    $stats = [
        'total_cases' => LawCase::count(),
        'active_cases' => LawCase::where('case_status', 'active')->count(),
        'pending_cases' => LawCase::where('case_status', 'pending')->count(),
        'closed_cases' => LawCase::where('case_status', 'closed')->count(),
    ];

    return view('admin.dashboard', compact('stats' , 'cases'));
}
    
    public function caseIndex()
{
    $cases = LawCase::all();

    $stats = [
        'total_cases' => LawCase::count(),
        'active_cases' => LawCase::where('case_status', 'active')->count(),
        'closed_cases' => LawCase::where('case_status', 'won')->count(),
        'pending_cases' => LawCase::where('case_status', 'pending')->count(),
    ];

    return view('admin.cases.index', compact('cases', 'stats'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function caseCreate()
    {
        return view('admin.cases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function caseStore(StoreLawCaseRequest $request)
    {
        $slug = Str::slug($request->case_title);
        $userId = Auth::user()->id;
        $status = $request->case_status;

        LawCase::create([
            'case_number' => $request->case_number,
            'client_name' => $request->client_name,
            'slug' => $slug,
            'case_title' => $request->case_title,
            'case_category' => $request->case_category,
            'court_name' => $request->court_name,
            'lawyer_name' => $request->lawyer_name,
            'case_date' => $request->case_date,
            'case_status' => $status,
            'case_description' => $request->case_description,
            'user_id' => $userId,
        ]);

        return redirect()->route('case.index')->with('success', 'Case created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {    $lawcase = LawCase::findOrFail($id);
        return view('admin.cases.show' , compact('lawcase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {$lawcase = LawCase::findOrFail($id);
        return view('admin.cases.edit' , compact('lawcase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLawCaseRequest $request,$id)
    {   
$lawCase = LawCase::findOrFail($id);

        $slug = Str::slug($request->case_title);
        $userId = Auth::user()->id;
        $status = $request->case_status;

        $lawCase->update([
            'case_number' => $request->case_number,
            'client_name' => $request->client_name,
            'slug' => $slug,
            'case_title' => $request->case_title,
            'case_category' => $request->case_category?? $lawCase->case_category,
            'court_name' => $request->court_name,
            'lawyer_name' => $request->lawyer_name ?? $lawCase->lawyer_name,
            'case_date' => $request->case_date,
            'case_status' => $status?? $lawCase->case_status,
            'case_description' => $request->case_description,
            'user_id' => $userId,
        ]);

        return redirect()->route('myCases')->with('success', 'Case created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $lawCase = LawCase::findOrFail($id);
   $lawCase->delete();
        return redirect()->route("myCases")->with("success", "Case deleted successfully.");
    }
}
