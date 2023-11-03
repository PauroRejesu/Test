<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobTitle extends Component
{
    public function render()
    {
        $jobTitle = JobTitle::latest()->with('jobTitle')->get();

         return view('livewire.employee-list', compact('employees'));
    }
}
