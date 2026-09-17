<?php

namespace App\Http\Controllers\BranchAdmin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = auth()->user()->branch;
        $submissions = Submission::where('branch_id', $branch->id)->latest()->paginate(10);

        return view('branch-admin.submissions.index', compact('submissions', 'branch'));
    }

    public function create()
    {
        return view('branch-admin.submissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|string',
        ]);

        $branch = auth()->user()->branch;

        Submission::create([
            'branch_id' => $branch->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title).'-'.time(),
            'content' => $request->content,
            'type' => $request->type,
            'status' => 'Pending',
        ]);

        return redirect()->route('branch-admin.submissions.index')->with('success', 'Pengajuan publikasi berhasil dikirim dan menunggu persetujuan pusat.');
    }

    public function destroy(Submission $submission)
    {
        if ($submission->branch_id !== auth()->user()->branch_id) {
            abort(403);
        }
        $submission->delete();

        return redirect()->route('branch-admin.submissions.index')->with('success', 'Pengajuan publikasi dibatalkan.');
    }
}
