<?php

namespace App\Livewire\Navbar;

use App\Models\Curso;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $cursos = Curso::all();
        return view('livewire.navbar.navbar', compact('cursos'));
    }
}
