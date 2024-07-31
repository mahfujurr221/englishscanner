<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LetsLearn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LetslearnController extends Controller
{
    public function index(Request $request)
    {
        $letsLearn = LetsLearn::query();
        if ($request->title) {
            $courses = $letsLearn->where('title', 'like', '%' . $request->title . '%');
        }
        if ($request->description) {
            $courses = $letsLearn->where('description', 'like', '%' . $request->description . '%');
        }
        $letsLearn = $letsLearn->latest()->paginate(20);

        return view('backend.pages.lets-learn.index', compact('letsLearn'));
    }

    // create 
    public function create()
    {
        return view('backend.pages.lets-learn.create');
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'file' => 'required|file|mimes:pdf|max:20000', //20mb max
    ]);

    try {
        DB::beginTransaction();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('public/backend/assets/files/lets-learn');
            $validated['file'] = $filePath;
        } else {
            throw new \Exception("No file was uploaded.");
        }
        LetsLearn::create($validated);

        DB::commit();
        toast('Lets Learn Created Successfully!', 'success');
    } catch (\Exception $e) {
        // Handling the error
        toast('Failed to upload file: ' . $e->getMessage(), 'error');
        return back()->withErrors('Failed to upload file: ' . $e->getMessage());
    }

    return redirect()->route('lets-learn.index');
}


    // edit
    public function edit(string $id)
    {
        return view('backend.pages.lets-learn.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(LetsLearn $letsLearn)
    {
        $letsLearn->delete();
        toast('Lets Learn Deleted Successfully!', 'success');
        return redirect()->route('lets-learn.index');
    }
}
