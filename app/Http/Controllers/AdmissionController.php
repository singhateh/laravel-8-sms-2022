<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class AdmissionController extends Controller
{

    public function index() : View
    {
        return view('admins.admissions.index', ['admissions' => Admission::get()]);
    }


    public function create() : View
    {
        return view('admins.admissions.create');
    }


    public function store(Request $request) : RedirectResponse
    {
        return redirect()->route('admissions.index');
    }


    public function show(Admission $admission) : View
    {
         return view('admins.admissions.show', compact('admission'));
    }

    public function edit(Admission $admission) : View
    {
         return view('admins.admissions.edit', compact('admission'));
    }


    public function update(Request $request, Admission $admission) : RedirectResponse
    {
        return redirect()->route('admissions.index');
    }


    public function destroy(Admission $admission) : RedirectResponse
    {
        return redirect()->route('admissions.index');
    }
}
