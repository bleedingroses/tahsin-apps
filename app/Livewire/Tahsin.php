<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Santri;
use App\Models\Grup;
use App\Models\Kajian;
use Carbon\Carbon;
use Livewire\Attributes\Rule;

class Tahsin extends Component
{
    public $jadwal;
    public $grup;
    public $grup_id;
    public $materi;
    public $absensi = [];

    public $selectedSantri = [];
    public $santri;

    public $currentPage = 1;
    public function goToNextPage()
    {
        $this->currentPage++;
    }
    public $pages = [1, 2];

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function mount()
    {
        $this->grup = Grup::all();
        $this->santri = Santri::all();
    }

    public function render()
    {
        $this->jadwal = Carbon::now()->format('d-M-y');
        return view('livewire.tahsin');
    }
    public function submit ()
    {
        Kajian::create([
            'jadwal' => $this->jadwal,
            'grup_id' => $this->grup_id,
            'materi' => $this->materi,
            'absensi' => implode(', ', $this->absensi)
        ]);
        return redirect('/kajian')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
