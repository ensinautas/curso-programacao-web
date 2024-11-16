<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render(){

        return view('livewire.admin.dashboard-component',[
            "counterUsers" =>$this->getCounterUsers()
        ])->layout('layouts.dashboard.app');
    }

    public function getCounterUsers() {
        try {
            return User::query()->count();
        } catch (\Throwable $th) {
            $this->alert('error', 'Erro!',[
                "text" => $th->getMessage(),
                "toast" => false,
                'position' => 'center',
                "timer" => 300000,
                'showConfirmButton' => true,
               ]);
        }
    }



}
