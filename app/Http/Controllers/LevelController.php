<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class LevelController extends Controller
{

    public function index(): View
    {
        return view('admins.levels.index', ['levels' => Level::get()]);
    }


    public function create(): View
    {
        return view('admins.levels.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('levels.index');
    }


    public function show(Level $level): View
    {
        return view('admins.levels.show', compact('level'));
    }

    public function edit(Level $level): View
    {
        return view('admins.levels.edit', compact('level'));
    }


    public function update(Request $request, Level $level): RedirectResponse
    {
        return redirect()->route('levels.index');
    }


    public function destroy(Level $level): RedirectResponse
    {
        return redirect()->route('levels.index');
    }
}
