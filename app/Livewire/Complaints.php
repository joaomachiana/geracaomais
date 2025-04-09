<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Complaint;

class Complaints extends Component
{
    public $complaints, $nome_vitima, $sexo_vitima, $provincia_id,
        $distrito, $data_ocorrencia, $breve_descricao,
        $contacto_denunciante, $contacto_vitima, $informacao_adicional;
    public function render()
    {
        $this->complaints = Complaint::all();
        return view('livewire.complaints');
    }

    private function resetInputFields(){
        $this->nome_vitima = '';
        $this->sexo_vitima = '';
        $this->provincia_id = '';
        $this->distrito = '';
        $this->data_ocorrencia = '';
        $this->breve_descricao = '';
        $this->contacto_denunciante = '';
        $this->contacto_vitima = '';
        $this->informacao_adicional = '';

    }


}
