<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Post extends Component
{
    public $post = [
        [
            'content' => "Today's very well",
            'created_at' => "2 mins ago",
            'created_by' => "Admin",
        ]
    ];
    public $content;
    public function addPost()
    {
        $this->validate([
            'content' => "required|max:255"
        ]);

        array_unshift($this->post, [
            'content' => $this->content,
            'created_by' => 'me',
            'created_at' => Carbon::now()->diffForHumans(),
        ]);
        session()->flash('message', "Post Successful");
        $this->content = '';
    }
    public function render()
    {
        return view('livewire.post');
    }
}
