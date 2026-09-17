<?php

namespace App\Http\Controllers\BranchAdmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $branch = auth()->user()->branch;

        return view('branch-admin.dashboard', compact('branch'));
    }
}
