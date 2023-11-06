<?php

namespace App\Http\Livewire;

use App\Models\JobTitle;
use Livewire\Component;

class JobTitleList extends Component
{
    public function render()
    {
        $jobTitles = JobTitle::latest()->with('jobTitle')->get();
        return view('livewire.job-title-list',  compact('jobTitles'));
    }
    public function getJobs()
    {
        $jobs = JobTitle::latest()->with('jobTitle')->get();
        return view('livewire.employee-list', compact('jobs'));
    }
}
