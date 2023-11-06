<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployeeJobList extends Component
{
    public function render()
    {
        $employeeJobList = Employee::latest()->with('employee')->take(21)->get();
        return view('livewire.employee-job-list');
    }
}
