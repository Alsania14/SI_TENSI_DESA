<?php

namespace App\Http\Livewire\TempatIbadah;

use Livewire\Component;

use App\Agama;
use App\TempatIbadah;

class ModalCreateTempatIbadah extends Component
{
    public $nama;
    public $longtitude;
    public $latitude;
    public $selected_agama;

    protected $rules = [
        'nama' => 'required|unique:tb_tempatibadah,nama_tempatibadah|min:6',
        'selected_agama' => 'exists:tb_agama,agama'
    ];

    protected $messages = [
        'nama.required' => 'Masukkan nama tempat ibadah',
        'nama.unique' => 'Nama tempat ibadah sudah digunakan',
        'nama.min' => 'Minimal menggunakan enam character',
        'selected_agama.exists' => 'Agama tidak terdaftar di dalam sistem',
    ];

    public function updated($nama,$selected_agama){
        $this->validateOnly($nama);
        $this->validateOnly($selected_agama);
    }

    public function render()
    {
        // AMBIL SEMUA AGAMA DAN SIMPAN DI COMPONENT
        $agamas = Agama::get(['agama']);
        return view('livewire.tempat-ibadah.modal-create-tempat-ibadah',compact(['agamas']));
    }

    public function saveTempatIbadah(){
        // VALIDASI FINAL
        $this->validate();
        
        TempatIbadah::create([
            'potensi_id' => 2,
            'agama_id' => Agama::where('agama',$this->selected_agama)->first()->id,
            'nama_tempatibadah' => $this->nama,
            'lat' => $this->latitude,
            'lng' => $this->longtitude
        ]);

        $this->clearProperty();
        
    }

    public function clearProperty(){
        $this->nama = null;
        $this->longtitude = null;
        $this->latitude = null;
        $this->selected_agama = null;
    }
}
