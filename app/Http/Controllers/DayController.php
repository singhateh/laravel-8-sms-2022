<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class DayController extends Controller
{

    public function index(): View
    {
        return view('admins.days.index', ['days' => Day::get()]);
    }


    public function create(): View
    {
        return view('admins.days.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('days.index');
    }


    public function show(Day $day): View
    {
        return view('admins.days.show', compact('day'));
    }

    public function edit(Day $day): View
    {
        return view('admins.days.edit', compact('day'));
    }


    public function update(Request $request, Day $day): RedirectResponse
    {
        return redirect()->route('days.index');
    }


    public function destroy(Day $day): RedirectResponse
    {
        return redirect()->route('days.index');
    }
}
