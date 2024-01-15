<?php

namespace App\Http\Controllers;

use App\Models\jadwal_pelajaran;
use Illuminate\Http\Request;

class jadwal_pelajaranController extends Controller
{
    public function index()
    {
        $jadwal_pelajaran = jadwal_pelajaran::all ();
        return response() ->json($jadwal_pelajaran);
    }

    public function show($id)
    {
        $jadwal_pelajaran = jadwal_pelajaran::find ($id);
        return response() ->json($jadwal_pelajaran);
    }

    public function store(Request $request)
    {
        jadwal_pelajaran::create($request->all());
        return response() ->json("jadwal_pelajaran Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $jadwal_pelajaran = jadwal_pelajaran::find ($id);
        $jadwal_pelajaran->update($request->all());
        return response() ->json("jadwal_pelajaran Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $jadwal_pelajaran = jadwal_pelajaran::find ($id);
        $jadwal_pelajaran->delete();
        return response() ->json("jadwal_pelajaran Berhasil Dihapus");
    }

}