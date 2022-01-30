<?php

namespace App\Http\Controllers;

use App\Models\ClassRouting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ClassRoutingController extends Controller
{

    public function index(): View
    {
        return view('admins.classRoutings.index', ['classRoutings' => ClassRouting::get()]);
    }


    public function create(): View
    {
        return view('admins.classRoutings.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('classRoutings.index');
    }


    public function show(ClassRouting $classRouting): View
    {
        return view('admins.classRoutings.show', compact('classRouting'));
    }

    public function edit(ClassRouting $classRouting): View
    {
        return view('admins.classRoutings.edit', compact('classRouting'));
    }


    public function update(Request $request, ClassRouting $classRouting): RedirectResponse
    {
        return redirect()->route('classRoutings.index');
    }


    public function destroy(ClassRouting $classRouting): RedirectResponse
    {
        return redirect()->route('classRoutings.index');
    }
}
