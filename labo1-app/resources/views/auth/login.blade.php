<!doctype html>
<html lang="en">
  <head>
    <title>Clinica - Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 text-black">
            <div class="px-5 ms-xl-4">
              <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
              <span class="h1 fw-bold mb-0">Clinica</span>
            </div>

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
              <form style="width: 23rem;" action="{{ route('login') }}" method="POST">
                @csrf
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h3>
                <form action="{{route('login')}}" method="POST">
                  @csrf
                <div class="form-outline mb-4">
                  <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" required />
                  <label class="form-label" for="form2Example18">Ingresa Tu Correo</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" required />
                  <label class="form-label" for="form2Example28">Ingresa contraseña</label>
                </div>

                <div class="pt-1 mb-4">
                  <button class="btn btn-info btn-lg btn-block" type="submit">Iniciar</button>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a></p>
                <p>No tienes una cuenta? <a href="{{ route('register') }}" class="link-info">Regístrate aquí</a></p>
              </form>
            </div>
          </div>

          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
