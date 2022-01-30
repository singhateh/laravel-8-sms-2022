<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ShiftController extends Controller
{

    public function index(): View
    {
        return view('admins.shifts.index', ['shifts' => Shift::get()]);
    }


    public function create(): View
    {
        return view('admins.shifts.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('shifts.index');
    }


    public function show(Shift $shift): View
    {
        return view('admins.shifts.show', compact('shift'));
    }

    public function edit(Shift $shift): View
    {
        return view('admins.shifts.edit', compact('shift'));
    }


    public function update(Request $request, Shift $shift): RedirectResponse
    {
        return redirect()->route('shifts.index');
    }


    public function destroy(Shift $shift): RedirectResponse
    {
        return redirect()->route('shifts.index');
    }
}
