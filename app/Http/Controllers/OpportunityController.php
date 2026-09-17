<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function index(Request $request)
    {
        $query = Opportunity::where('status', 'active');

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Search by title
        if ($request->filled('search')) {
            $query->where('title', 'like', '%'.$request->search.'%');
        }

        // Default sorting
        $opportunities = $query->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12)
            ->withQueryString();

        return view('public.opportunities.index', compact('opportunities'));
    }

    public function show(Opportunity $opportunity)
    {
        if ($opportunity->status !== 'active') {
            abort(404);
        }

        return view('public.opportunities.show', compact('opportunity'));
    }
}
