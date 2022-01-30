<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class TimeController extends Controller
{

    public function index(): View
    {
        return view('admins.times.index', ['times' => Time::get()]);
    }


    public function create(): View
    {
        return view('admins.times.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('times.index');
    }


    public function show(Time $time): View
    {
        return view('admins.times.show', compact('time'));
    }

    public function edit(Time $time): View
    {
        return view('admins.times.edit', compact('time'));
    }


    public function update(Request $request, Time $time): RedirectResponse
    {
        return redirect()->route('times.index');
    }


    public function destroy(Time $time): RedirectResponse
    {
        return redirect()->route('times.index');
    }
}
