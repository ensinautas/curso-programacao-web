<?php
namespace App\Livewire\Login;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class LoginComponent extends Component
{
    use LivewireAlert;
    public $email ,$password , $credentials = [];

    public function render()
    {
        return view('livewire.login.login-component')->layout("layouts.login.app");
    }

    public function authentication (){        
        $this->validate([
            "email" => "required",
            "password" => "required"
        ],[
            "email.required" => "O campo email é obrigatório",
            "password.required" => "O campo senha é obrigatório"
        ]);
        try {
            $user = User::query()->select("email")->first();
            if (Auth::attempt(['email' =>$this->email, 'password' =>$this->password])){
                return redirect()->route("dashboard.admin");
                
            }else  if(!$user->email){
                $this->alert('warning', 'Aviso',[
                    "text" => "Email não encontrado!",
                    "toast" =>false,
                    "position" =>'center',
                    'showConfirmButton' => true,
                ]);
            }else{
                $this->alert('warning', 'Aviso',[
                    "text" => "Credenciais inválidas, tente novamente!",
                    "toast" =>false,
                    "position" =>'center',
                    'showConfirmButton' => true,
                ]);

            }
        } catch (\Throwable $th) {
            $this->alert('error', 'Erro!',[
             "text" => $th->GetMessage(),
             "toast" => false,
             'position' => 'center',
             "timer" => 300000,
             'showConfirmButton' => true,
            ]);

        }
    }


}
