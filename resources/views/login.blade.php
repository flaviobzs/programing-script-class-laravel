<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nome Sistema</title>
    <!-- icons -->
    <script src="https://kit.fontawesome.com/929e6d111b.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/external.css')}}" />
  </head>
  <body>
    <div class="left"></div>
    <div class="right"></div>
    <div class="transparency"></div>
    <div class="card">
      <div class="company">
        <img src="{{asset('assets/images/capacete.jpg')}}" alt="logo_company" />
      </div>
      <div class="form">
        <form action="{{Route('logar')}}" method="post">
            
          @csrf

          <div class='cadastro'>
            <p>cadastre-se <a href="{{Route('cadastrar_usuario')}}">aqui</a></p>
            <div>
              <i class="fab fa-facebook"></i>
              <i class="fab fa-google-plus-g"></i>
              <i class="fab fa-twitter"></i>
            </div>
          </div>
          <label for="email">
            Email
            <input type="email" name="email" id="email" />
          </label>
          <label for="password">
            Password
            <input type="password" name="password" id="password" />
          </label>
          <button type="submit">LOGIN</button>
        </form>
      </div>
    </div>
  </body>
</html>
