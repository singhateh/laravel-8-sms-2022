<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SessionController extends Controller
{

    public function index(): View
    {
        return view('admins.sessions.index', ['sessions' => Session::get()]);
    }


    public function create(): View
    {
        return view('admins.sessions.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('sessions.index');
    }


    public function show(Session $session): View
    {
        return view('admins.sessions.show', compact('session'));
    }

    public function edit(Session $session): View
    {
        return view('admins.sessions.edit', compact('session'));
    }


    public function update(Request $request, Session $session): RedirectResponse
    {
        return redirect()->route('sessions.index');
    }


    public function destroy(Session $session): RedirectResponse
    {
        return redirect()->route('sessions.index');
    }
}
