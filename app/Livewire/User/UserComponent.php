<?php

namespace App\Livewire\User;

use App\Models\Employee;
use App\Models\Enterprise;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UserComponent extends Component
{
    use LivewireAlert;
    public $fullname ,$birthday ,$position ,$location ,$phone ,$email ,$password;
    public function render()
    {
        return view('livewire.user.user-component',[
            "users" =>$this->getUser(),
        ])->layout('layouts.dashboard.app');
    }

    public function getUser(){
        try{
        return User::all();
        }catch(\Exception $ex){

        }
    }

    public function save(){
        
        $this->validate([
            "fullname" => "required",
            "birthday" => "required",
            "location" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required",
        ],[
            "fullname.required" => "campo obrigatório",
            "birthday.required" => "campo obrigatório",
            "position.required" => "campo obrigatório",
            "location.required" => "campo obrigatório",
            "phone.required" => "campo obrigatório",
            "email.required" => "campo obrigatório",
            "password.required" => "campo obrigatório",
        ]);

        try {
            DB::BeginTransaction();
            $employee = Employee::create([
                "fullname" =>$this->fullname,
                "birthday" =>$this->birthday,
                "location" =>$this->location,
                "phone" =>$this->phone,
          ]);

            User::create([
            "email" =>$this->email,
            "password" =>  Hash::make($this->password),
            "employee_id" =>$employee->id,
            "enterprise_id" =>$this->getCurrentIdOfEnterprise()->id
            ]);
            DB::commit();

            $this->alert('success', 'Sucesso!',[
                "toast" => false,
                'position' => 'center',
                "text" => "Registo salvo com sucesso!",
                "timer" => 300000,
                'showConfirmButton' => true,
               ]);
            $this->reset([
                "fullname",
                "birthday",
                "position",
                "location",
                "phone",
                "email",
                "password",
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->alert('error', 'Erro!',[
                "toast" => false,
                'position' => 'center',
                "text" => $th->GetMessage(),
                "timer" => 300000,
                'showConfirmButton' => true,
               ]);
        }
    }

    public function getCurrentIdOfEnterprise(){
        try {
           return Enterprise::query()->select(["id"])->first();
        } catch (\Throwable $th) {
            $this->alert('error', 'Erro!',[
                "toast" => false,
                'position' => 'center',
                "text" => $th->GetMessage(),
                "timer" => 300000,
                'showConfirmButton' => true,
               ]);
        }
    }





}
