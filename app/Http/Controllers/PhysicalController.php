<?php

namespace App\Http\Controllers;

use App\Models\Physical;
use Illuminate\Http\Request;

class PhysicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');

        $physicals = Physical::orderBy('created_at', 'DESC')
            ->where(function ($query) use ($searchTerm) {
                if ($searchTerm) {
                    $query->where('nama', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('asal_perusahaan', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('departemen', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('tujuan_lokasi', 'LIKE', '%' . $searchTerm . '%');
                }
            })
            ->paginate(5);

        return view('pages.physical.index', compact('physicals'));
    }    
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $physical['physical'] = Physical::all(); 
        return view('pages.physical.create', $physical);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'host' => 'required|in:OK,NG',
            'storage' => 'required|in:OK,NG',
            'hdd1' => 'required|in:OK,NG',
            'hdd2' => 'required|in:OK,NG',
            'note' => 'nullable|string',
        ]);

        // Pastikan 'note' tidak null, berikan nilai default jika perlu
        $note = $request->input('note', '');

        // Simpan data ke database
        Physical::create([
            'host' => $request->input('host'),
            'storage' => $request->input('storage'),
            'hdd1' => $request->input('hdd1'),
            'hdd2' => $request->input('hdd2'),
            'note' => $note,
        ]);
        // return $request->all();
        // Redirect atau memberikan respons sesuai kebutuhan
        return redirect()->route('welcome')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $physical = Physical::findOrFail($id);
        return view('pages.physical.index', compact('physical'));
    }
}

