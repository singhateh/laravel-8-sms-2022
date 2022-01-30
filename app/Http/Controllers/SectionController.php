<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SectionController extends Controller
{

    public function index(): View
    {
        return view('admins.sections.index', ['sections' => Section::get()]);
    }


    public function create(): View
    {
        return view('admins.sections.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('sections.index');
    }


    public function show(Section $section): View
    {
        return view('admins.sections.show', compact('section'));
    }

    public function edit(Section $section): View
    {
        return view('admins.sections.edit', compact('section'));
    }


    public function update(Request $request, Section $section): RedirectResponse
    {
        return redirect()->route('sections.index');
    }


    public function destroy(Section $section): RedirectResponse
    {
        return redirect()->route('sections.index');
    }
}
