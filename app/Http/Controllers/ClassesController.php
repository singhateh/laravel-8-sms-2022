<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ClassesController extends Controller
{

    public function index(): View
    {
        return view('admins.classess.index', ['classess' => Classes::get()]);
    }


    public function create(): View
    {
        return view('admins.classess.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('classess.index');
    }


    public function show(Classes $classes): View
    {
        return view('admins.classess.show', compact('classes'));
    }

    public function edit(Classes $classes): View
    {
        return view('admins.classess.edit', compact('classes'));
    }


    public function update(Request $request, Classes $classes): RedirectResponse
    {
        return redirect()->route('classess.index');
    }


    public function destroy(Classes $classes): RedirectResponse
    {
        return redirect()->route('classess.index');
    }
}
