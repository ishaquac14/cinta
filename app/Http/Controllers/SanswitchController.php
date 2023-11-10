<?php

namespace App\Http\Controllers;

use App\Models\Sanswitch;
use Illuminate\Http\Request;

class SanswitchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');

        $sanswitchs = Sanswitch::orderBy('created_at', 'DESC')
            ->where(function ($query) use ($searchTerm) {
                if ($searchTerm) {
                    $query->where('nama', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('asal_perusahaan', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('departemen', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('tujuan_lokasi', 'LIKE', '%' . $searchTerm . '%');
                }
            })
            ->paginate(5);

        return view('pages.sanswitch.index', compact('sanswitchs'));
    }    
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('pages.sanswitch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nik' => 'required|string',
            'nama' => 'required|string',
            'asal_perusahaan' => 'required|string',
            'nama_pic' => 'required|string',
            'departemen' => 'required|string',
            'tujuan_lokasi' => 'required|string',
            'tujuan' => 'required|string',
        ]);

        // Simpan data buku ke dalam database
        Sanswitch::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'asal_perusahaan' => $request->asal_perusahaan,
            'nama_pic' => $request->nama_pic,
            'departemen' => $request->departemen,
            'tujuan_lokasi' => $request->tujuan_lokasi,
            'tujuan' => $request->tujuan,
        ]);    
        
        return redirect()->route('pages.sanswitch.index')->with('success', 'Data Sukses Ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $physical = Sanswitch::findOrFail($id);
        return view('pages.sanswitch.show', compact('sanswitch'));
    }
}
