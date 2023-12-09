<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Customer extends Component
{
    public $full_name;
    public $email;
    public $password;

    public function store()
    {
        $validate = $this->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        DB::table('customers')->insert(
            [
                'full_name' => $this->full_name,
                'email' => $this->email,
                'password' => $this->password,
                'created_at' => Carbon::now(),
            ]
        );
        session()->flash('msg', 'Thêm thành công');
        // Customer::create([
        //     'full_name' => $this->full_name,
        //     'email' => $this->email,
        //     'password' => $this->password,
        // ]);
        $this->reset();
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.customer');
    }
}
