<?php

namespace App\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeGenerator extends Component
{
    public $text;// default QR code text
    public $qrCodeUrl;

    public function mount()
    {
        //->size(100)->generate($this->text);
        $this->generateQrCode();

    }

    public function generateQrCode()
    {
       $this->qrCodeUrl = 'data:image/png;base64,' . base64_encode(QrCode::format('png')->size(100)->generate($this->text));
    }

    public function render()
    {
        return view('livewire.qr-code-generator');
    }
}
