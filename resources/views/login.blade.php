<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form id="loginForm">
        <div class="mb-3">
          <label for="loginEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="loginEmail" required>
        </div>
        <div class="mb-3">
          <label for="loginPassword" class="form-label">Senha</label>
          <input type="password" class="form-control" id="loginPassword" required>
        </div>
        <button type="submit" class="btn btn-secondary">Login</button>
      </form>
   <p><a href="" data-bs-toggle="modal" data-bs-target="#registerModal">Clique aqui para cadastrar</a></p> 

<!-- comando para chamar a modal -->

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Responsivo com modal-lg -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Registro de Aluno</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="registerForm">
            <div class="mb-3">
              <label for="studentName" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="studentName" required>
            </div>
            <div class="mb-3">
              <label for="studentEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="studentEmail" required>
            </div>
            <div class="mb-3">
              <label for="studentPassword" class="form-label">Senha</label>
              <input type="password" class="form-control" id="studentPassword" required>
            </div>
            <div class="mb-3">
              <label for="studentCourse" class="form-label">Curso</label>
              <input type="text" class="form-control" id="studentCourse" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
    <!-- FIm modal registo de aluno-->
  
  















   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>