<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\ClassesResource;
use App\Http\Resources\StudentResource;
use App\Models\Classes;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = StudentResource::collection(Student::paginate(10));
        return inertia('Students/Index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        $classes = ClassesResource::collection(Classes::all());
        return inertia('Students/Form', [
            'student' => null,
            'classes' => $classes,
            'page_meta' => [
                'title' => 'Create Student',
                'description' => 'Use this form to create a new student.',
                'method' => 'POST',
                'url' => route('students.store'),
                'button_text' => 'Save',
            ]
        ]);
    }

    public function store(StudentRequest $request)
    {
        Student::create($request->validated());
        return to_route('students.index');
    }

    public function edit(Student $student)
    {
        $classes = ClassesResource::collection(Classes::all());
        return inertia('Students/Form', [
            'student' => StudentResource::make($student),
            'classes' => $classes,
            'page_meta' => [
                'title' => 'Update Student',
                'description' => 'Use this form to update student.',
                'method' => 'PUT',
                'url' =>  route('students.update', $student),
                'button_text' => 'Update',
            ]
        ]);
    }

    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return to_route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return to_route('students.index');
    }
}
