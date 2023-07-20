<?php

namespace App\Http\Controllers;

use App\Models\Examiner;
use Illuminate\Http\Request;

class ExaminerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examiners = Examiner::all();
        return view('backend.examiner.index', compact('examiners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.examiner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Examiner::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect()->route('examiners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Examiner $examiner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Examiner $examiner)
    {
        return view('backend.examiner.edit', compact('examiner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Examiner $examiner)
    {
        $examiner->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('examiners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Examiner $examiner)
    {
        $examiner->delete();
        return redirect()->route('examiners.index');
    }
}
