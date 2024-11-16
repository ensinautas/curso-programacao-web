<div>

        <main id="main" class="col-md-4 container ">
                <form wire:submit="authentication">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

                <div class="">
                    <label for="">Email</label>
                    <input wire:model="email" type="email" class="form-control" id="" >
                    @error("email") <span class="text-danger">{{ $message }}</span> @enderror


                </div>
                <div class="">
                    <label for="">Senha</label>
                    <input wire:model="password" type="password" class="form-control" id="">
                    @error("password") <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login</button>
                <p class="mt-5 mb-3 text-body-secondary text-center">&copy;{{ date("Y") }}</p>
                </form>

        </main>

</div>
