<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;;

class TanggapanMasyarakatController extends Controller
{

    public function __construct()
    {
        $this->middleware([
            'privilege:masyarakat',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pengaduan' => Pengaduan::where('nik', Session::get('nik'))->orderBy('id', 'desc')->get(),

            'kata' => '',
        ];

        return view('dashboard.pengaduan.riwayat', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $pengaduan = Pengaduan::find($req->id);

        $state = $pengaduan->tanggapan()->create([
            'tanggapan' => $req->tanggapan,
            'id_masyarakat' => Session::get('id'),
            'tanggal_tanggapan' => now()
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = Pengaduan::find($id);

        if ($state) {
            $data = [
                'pengaduan' => $state,
                'tanggapan' => Tanggapan::where('id_pengaduan', $id)->orderBy('id', 'asc')->get(),
            ];
        } else {
            Alert::error('Terjadi kesalahan!', 'Pengaduan tidak ditemukan');
            return back();
        }

        return view('dashboard.pengaduan.tanggapan', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'tanggapan' => Tanggapan::find($id)
        ];

        return view('dashboard.tanggapan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tanggapan = Tanggapan::find($id);
        $state = $tanggapan->update([
            'tanggapan' => $req->tanggapan
        ]);

        if ($state) {
            Alert::success('Berhasil!', 'Tanggapan berhasil di edit');
        } else {
            Alert::error('Terjadi kesalahan!', 'Tanggapan gagal di edit');
        }
        return redirect('dashboard/riwayat/' . $tanggapan->id_pengaduan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = Tanggapan::find($id)->delete();

        if ($state) {
            Alert::success('Berhasil!', 'Tanggapan berhasil di hapus');
        } else {
            Alert::error('Terjadi kesalahan!', 'Tanggapan gagal di hapus');
        }

        return back();
    }
}
