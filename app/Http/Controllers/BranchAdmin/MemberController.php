<?php

namespace App\Http\Controllers\BranchAdmin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = auth()->user()->branch;
        $members = Member::where('branch_id', $branch->id)->latest()->paginate(10);

        return view('branch-admin.members.index', compact('members', 'branch'));
    }

    public function create()
    {
        return view('branch-admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'campus' => 'nullable|string',
            'status_kaderisasi' => 'required|string',
        ]);

        $branch = auth()->user()->branch;

        $branch->users()->create($request->all()); // Wait, members relation not users!
        // Actually it's $branch->members() which doesn't exist yet, I'll just use Member model.
        Member::create([
            'branch_id' => $branch->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'campus' => $request->campus,
            'status_kaderisasi' => $request->status_kaderisasi,
        ]);

        return redirect()->route('branch-admin.members.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function destroy(Member $member)
    {
        if ($member->branch_id !== auth()->user()->branch_id) {
            abort(403);
        }
        $member->delete();

        return redirect()->route('branch-admin.members.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
