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
    <link rel="stylesheet" href="{{asset('assets/css/cadastro.css')}}" />
  </head>
  <body>
    <div class="left"></div>
    <div class="right"></div>
    <div class="transparency"></div>
    <div class="card">
      <div class="form">
        <form action="{{Route('cadastro_usuario')}}" method="post">
          <div>
            <p>CADASTRO</p>
          </div>
          @csrf
          <label for="name">
            Nome
            <input type="text" name="name" id="name" />
          </label>
          <label for="email">
            Email
            <input type="email" name="email" id="email" />
          </label>
          <label for="password">
            Password
            <input type="password" name="password" id="password" />
          </label>
          <label for="estado">
            Estado
            <select name="estado" id="estado">
              <option value="">selecione um estado</option>
              <option value="AL">Alagoas</option>
              <option value="PE">Pernambuco</option>
              <option value="AM">Amazonas</option>
            </select>
          </label>
          <button type="submit">CADASTRAR</button>
        </form>
      </div>
    </div>
  </body>
</html>