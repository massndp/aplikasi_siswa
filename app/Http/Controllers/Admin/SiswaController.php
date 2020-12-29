<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Http\Requests\SiswaRequest;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_siswa = Siswa::with(['jurusan'])->get();
        return view('pages.siswa.index', [
            'data_siswa' => $data_siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('pages.siswa.create', [
            'jurusans' => $jurusans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store(
            'assets/gallery',
            'public'
        );
        Siswa::create($data);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_siswa = Siswa::findOrFail($id);
        return view('pages.siswa.edit', [
            'data_siswa' => $data_siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiswaRequest $request, $id)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store(
            'assets/gallery',
            'public'
        );

        $data_siswa = Siswa::findOrFail($id);
        $data_siswa->update($data);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_siswa = Siswa::findOrFail($id);
        $data_siswa->delete();

        return redirect()->route('siswa.index');
    }

    public function profile(Request $request, $id)
    {
        $data_siswa = Siswa::findOrFail($id);
        return view('pages.siswa.profile', [
            'data_siswa' => $data_siswa
        ]);
    }
}
