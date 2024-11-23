<x-layout>

	<div wire:ignore.self class="modal fade" id="form-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Salvar Utiliador</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form wire:submit='save'>
            <div>
                <label>Nome</label>
                <input wire:model='fullname' class="form-control" type="text" >
                @error("fullname")<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div>
                <label>Data de nascimento</label>
                <input wire:model='birthday' class="form-control" type="date" >
                @error("birthday")<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div>
                <label>Cargo</label>
                <input wire:model='position' class="form-control" type="text" >
                @error("position")<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div>
                <label>Localização</label>
                <input wire:model='location' class="form-control" type="text" >
                @error("location")<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div>
                <label>Telefone</label>
                <input wire:model='phone' class="form-control" type="text" >
                @error("phone")<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div>
                <label>Email</label>
                <input wire:model='email' class="form-control" type="email" >
                @error("email")<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div>
                <label>Senha</label>
                <input wire:model='password' class="form-control" type="password" >
                @error("password")<span class="text-danger">{{ $message }}</span>@enderror
            </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <input class="btn btn-primary" type="submit" name="" id="" value="Salvar">
      </div>
    </form>
    </div>
  </div>
</div>

</x-layout>

