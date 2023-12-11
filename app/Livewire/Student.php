<?php

namespace App\Livewire;

use App\Models\Students;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{
    use WithPagination;
    public $numberStudent = 5;
    public $search = '';
    public $studentType = '';
    public function getType()
    {
        $this->studentType = Students::where('type', 'second')->get();
    }
    public function render()
    {
        return view(
            'livewire.student',
            [
                'students' => Students::search($this->search)
                    ->when($this->studentType !== '', function ($query) {
                        $query->where('', $this->studentType);
                    })
                    ->paginate($this->numberStudent)
            ]
        );
    }
}
