<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Petugas;

class FormCreatePetugas extends Component
{
    public $petugas;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($petugas)
    {
        $this->petugas = $petugas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form-create-petugas');
    }
}
