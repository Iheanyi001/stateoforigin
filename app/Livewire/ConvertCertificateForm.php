<?php

namespace App\Livewire;

use App\Models\ConvertCertificate;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class ConvertCertificateForm extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $cert_type;
    #[Validate('file|mimes:pdf|max:1024')]
    public $old_certificate;
    public function save(){

        $this->validate();
        $path = $this->old_certificate->store(path: 'photos');

        ConvertCertificate::create([
           "ref" => rand(100,100000).''.time(),
            "cert_type" => $this->cert_type,
            "old_certificate" => $path,
    ]);
        $this->dispatch('alert', ['type' => 'success', 'message' => 'Request submitted successfully.']);

        return $this->redirect(route('convert.certificate'));
    }
    public function render()
    {
        return view('livewire.convert-certificate-form');
    }
}
