<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SchoolController extends Controller
{

    public function index(): View
    {
        return view('admins.schools.index', ['schools' => School::get()]);
    }


    public function create(): View
    {
        return view('admins.schools.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('schools.index');
    }


    public function show(School $school): View
    {
        return view('admins.schools.show', compact('school'));
    }

    public function edit(School $school): View
    {
        return view('admins.schools.edit', compact('school'));
    }


    public function update(Request $request, School $school): RedirectResponse
    {
        return redirect()->route('schools.index');
    }


    public function destroy(School $school): RedirectResponse
    {
        return redirect()->route('schools.index');
    }
}
