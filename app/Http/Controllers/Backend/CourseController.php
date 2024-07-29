<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::query();
        if ($request->title) {
            $courses = $courses->where('title', 'like', '%' . $request->title . '%');
        }
        if ($request->description) {
            $courses = $courses->where('description', 'like', '%' . $request->description . '%');
        }
        if ($request->code) {
            $courses = $courses->where('course_fee', 'like', '%' . $request->code . '%');
        }
        $courses = $courses->latest()->paginate(20);
        return view('backend.pages.course.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'code' => 'required',
            'description' => 'required',
            'course_fee' => 'required',
        ]);
        $course = Course::create($validated);
        if ($course) {
            toast('Course Created Successfully!', 'success');
            return redirect()->route('courses.index');
        } else {
            toast('Course Created Failed!', 'error');
            return redirect()->route('courses.index');
        }
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required',
            'code' => 'required',
            'description' => 'required',
            'course_fee' => 'required',
        ]);
        $course->update($validated);
        if ($course) {
            toast('Course Updated Successfully!', 'success');
            return redirect()->route('courses.index');
        } else {
            toast('Course Updated Failed!', 'error');
            return redirect()->route('courses.index');
        }
    }

    public function destroy(Course $course)
    {
        $course->delete();
        toast('User Deleted Successfully!', 'success');
        return redirect()->route('courses.index');
    }
}
