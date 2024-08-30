<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Potensi as ModelsPotensi;
use App\Models\Desa as ModelsDesa;
use App\Models\Kecamatan as ModelsKecamatan;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Log;
class Laporan extends Component
{
    public $tahun, $kecamatan, $desa;
    protected $laporans, $desas, $kecamatans;

    public function render()
    {
        $this->laporans = ModelsPotensi::join('desas', 'desas.id', '=', 'potensis.desa_id')
            ->join('pemiliklahans', 'pemiliklahans.id', '=', 'potensis.pemiliklahan_id')
            ->join('infotanahs', 'infotanahs.id', '=', 'potensis.infotanah_id')
            ->select('potensis.*', 'desas.nama_desa', 'pemiliklahans.nama_pemiliklahan', 'infotanahs.jenis_tanah', 'infotanahs.ketinggian', 'infotanahs.kelembaban')
            ->get();

        $this->desas = ModelsDesa::where('kecamatans_id', $this->kecamatan)->get();
        $this->kecamatans = ModelsKecamatan::all();

        return view('livewire.laporan', [
            'laporans' => $this->laporans,
            'desas' => $this->desas,
            'kecamatans' => $this->kecamatans,
        ])->extends('layouts.app')->section('content');
    }

    public function cetakPdf()
{
    \Illuminate\Support\Facades\Log::info('Mencetak PDF dengan parameter:', [
        'tahun' => $this->tahun,
        'kecamatan' => $this->kecamatan,
        'desa' => $this->desa
    ]);

    $petas = ModelsPotensi::join('desas', 'desas.id', '=', 'potensis.desa_id')
        ->join('pemiliklahans', 'pemiliklahans.id', '=', 'potensis.pemiliklahan_id')
        ->join('infotanahs', 'infotanahs.id', '=', 'potensis.infotanah_id')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.kecamatans_id')
        ->select('potensis.*', 'desas.nama_desa', 'pemiliklahans.nama_pemiliklahan', 'infotanahs.jenis_tanah',
            'infotanahs.ketinggian', 'infotanahs.kelembaban', 'kecamatans.nama_kecamatan')
        ->when($this->tahun, function($query) {
            return $query->whereYear('potensis.created_at', $this->tahun);
        })
        ->when($this->kecamatan, function($query) {
            return $query->where('desas.kecamatans_id', $this->kecamatan);
        })
        ->when($this->desa, function($query) {
            return $query->where('desa_id', $this->desa);
        })
        
        ->get();

        \Illuminate\Support\Facades\Log::info('Data untuk PDF:', ['petas' => $petas]);

    $pdf = PDF::loadView('livewire.cetakpeta', ['petas' => $petas]);
    // $fileName = date('Y-m-d_H:i:s') . '_cetak_laporan.pdf';
    return response()->stream(
        function () use ($pdf) {
            echo $pdf->output();
        },
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . date('Y-m-d_H:i:s') . '_cetak_laporan.pdf"',
        ]
    );
}

}
