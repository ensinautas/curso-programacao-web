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
    public $iduser, $idemployee,$searcher, $fullname ,$birthday ,$position ,$location ,$phone ,$email ,$password;
    protected $listeners = ["confirmeDeletedUser"];
    public function render()
    {
        return view('livewire.user.user-component',[
            "users" =>$this->getUser(),
        ])->layout('layouts.dashboard.app');
    }

    public function getUser(){
        try{
            if ($this->searcher){
                return User::query()
                ->join("employees","users.employee_id","employees.id")
                ->join("enterprises", "users.enterprise_id", "enterprises.id")
                ->where("employees.fullname", "like", "%".$this->searcher."%")
                ->get(["employees.*" , "employees.id As employeeid" , "enterprises.*" , "users.*" , "users.id As userid"])
                ->get();
            }else{
                return User::query()
                ->join("employees","users.employee_id","employees.id")
                ->join("enterprises", "users.enterprise_id", "enterprises.id")
                ->select(["employees.*" , "employees.id As employeeid" , "enterprises.*" , "users.*" , "users.id As userid"])
                ->get();
            }

        }catch(\Exception $ex){

        }
    }

    public function delete($userid, $employeeid){
       try {
        $this->iduser = $userid;
        $this->idemployee = $employeeid;

        $this->alert('warning', 'Aviso!',[
            "toast" => false,
            'position' => 'center',
            "text" =>"Deseja excluir este registo?",
            "timer" => 300000,
            'showConfirmButton' => true,
            'confirmButtonText' => 'Confirmar',
            'showCancelButton' => true,
            "cancelButtonText" => 'Cancelar',
             'onConfirmed' => 'confirmeDeletedUser'
           ]);
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

    public function confirmeDeletedUser (){
        try {
            DB::BeginTransaction();
            User::find($this->iduser)->delete();
            Employee::find($this->idemployee)->delete();
            DB::commit();
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
