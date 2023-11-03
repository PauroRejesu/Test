<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EmployeeList extends Component
{
    public function render()
    {
        $employees = Employee::latest()->with('employee')->take(9)->get();

         return view('livewire.employee-list', compact('employees'));
    }
    
}
