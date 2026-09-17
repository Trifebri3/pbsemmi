<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function getProvinces()
    {
        // Get all provinces with the count of locations
        $provinces = Province::withCount('locations')->get();

        return response()->json($provinces);
    }

    public function getRegencies($provinceId)
    {
        // Get regencies for a specific province with the count of locations
        $regencies = Regency::where('province_id', $provinceId)
            ->withCount('locations')
            ->get();

        return response()->json($regencies);
    }

    public function getLocations(Request $request)
    {
        $query = Location::query();

        // Filters
        if ($request->has('province_id') && $request->province_id != '') {
            $query->where('province_id', $request->province_id);
        }

        if ($request->has('regency_id') && $request->regency_id != '') {
            $query->where('regency_id', $request->regency_id);
        }

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%'.$request->search.'%');
        }

        $locations = $query->get();

        return response()->json($locations);
    }
}
