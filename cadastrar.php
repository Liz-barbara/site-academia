<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="cadastrar.css">
</head>

<body>
    <form class="form" action="index.php">
        <div class="card">
          
                <div class="card-top">
                    <img class= "img-login" src="img/logo.png"     alt=""></img>
                    <p></p>
                    <h20 class="titulo">Seu único limite é você mesmo</h20>
                    <p>Increva-se</p>
                </div>
            <div class="card-group">
                <label> E-mail</label>
                <input type="email" name="e-mail" placeholder="Digite seu e-mail" required>
            </div>

            <div class="card-group">
                <label> Senha </label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="card-group">
                <label> <input type="checkbox" > Lembre-me </label>
               
            </div>

            <div class="card-group">
              <button type="submit">ACESSAR</button>
               
            </div>

        </div>
    </form>


</body>