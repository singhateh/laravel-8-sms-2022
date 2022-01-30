<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class SettingController extends Controller
{

    public function index() : View
    {
        return view('admins.settings.index', ['settings' => Setting::get()]);
    }


    public function create() : View
    {
        return view('admins.settings.create');
    }


    public function store(Request $request) : RedirectResponse
    {
        return redirect()->route('settings.index');
    }


    public function show(Setting $setting) : View
    {
         return view('admins.settings.show', compact('setting'));
    }

    public function edit(Setting $setting) : View
    {
         return view('admins.settings.edit', compact('setting'));
    }


    public function update(Request $request, Setting $setting) : RedirectResponse
    {
        return redirect()->route('settings.index');
    }


    public function destroy(Setting $setting) : RedirectResponse
    {
        return redirect()->route('settings.index');
    }
}
