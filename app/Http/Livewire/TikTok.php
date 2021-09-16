<?php

namespace App\Http\Livewire;

use App\Http\Traits\HelperTrait;
use Livewire\Component;

class TikTok extends Component
{
    use HelperTrait;

    public $searchCompleted;
    public $username;
    public $userInfo;
    public $engagementRate;

    public function render()
    {
        return view('livewire.tik-tok')->extends('app')->section('content');
    }

    public function searchUser()
    {
        $this->userInfo = $this->getUserInformation($this->username);
        $this->engagementRate = $this->getEngagementRate($this->username);
        $this->searchCompleted = 1;
    }
}
