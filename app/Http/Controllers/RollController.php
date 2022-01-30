<?php

namespace App\Http\Controllers;

use App\Models\Roll;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class RollController extends Controller
{

    public function index(): View
    {
        return view('admins.rolls.index', ['rolls' => Roll::get()]);
    }


    public function create(): View
    {
        return view('admins.rolls.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('rolls.index');
    }


    public function show(Roll $roll): View
    {
        return view('admins.rolls.show', compact('roll'));
    }

    public function edit(Roll $roll): View
    {
        return view('admins.rolls.edit', compact('roll'));
    }


    public function update(Request $request, Roll $roll): RedirectResponse
    {
        return redirect()->route('rolls.index');
    }


    public function destroy(Roll $roll): RedirectResponse
    {
        return redirect()->route('rolls.index');
    }
}
