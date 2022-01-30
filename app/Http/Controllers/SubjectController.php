<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SubjectController extends Controller
{

    public function index(): View
    {
        return view('admins.subjects.index', ['subjects' => Subject::get()]);
    }


    public function create(): View
    {
        return view('admins.subjects.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('subjects.index');
    }


    public function show(Subject $subject): View
    {
        return view('admins.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject): View
    {
        return view('admins.subjects.edit', compact('subject'));
    }


    public function update(Request $request, Subject $subject): RedirectResponse
    {
        return redirect()->route('subjects.index');
    }


    public function destroy(Subject $subject): RedirectResponse
    {
        return redirect()->route('subjects.index');
    }
}
