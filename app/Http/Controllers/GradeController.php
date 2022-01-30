<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class GradeController extends Controller
{

    public function index(): View
    {
        return view('admins.grades.index', ['grades' => Grade::get()]);
    }


    public function create(): View
    {
        return view('admins.grades.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('grades.index');
    }


    public function show(Grade $grade): View
    {
        return view('admins.grades.show', compact('grade'));
    }

    public function edit(Grade $grade): View
    {
        return view('admins.grades.edit', compact('grade'));
    }


    public function update(Request $request, Grade $grade): RedirectResponse
    {
        return redirect()->route('grades.index');
    }


    public function destroy(Grade $grade): RedirectResponse
    {
        return redirect()->route('grades.index');
    }
}
