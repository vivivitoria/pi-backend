<?php
$erro = filter_input(INPUT_GET, "erro", FILTER_SANITIZE_SPECIAL_CHARS);
switch ($erro) {
    case 1:
        echo '<div class="erro">E-mail não encontrado!</div>';
        break;
    case 2:
        echo '<div class="erro">Senha incorreta!</div>';
        break;
    case 3:
        echo '<div class="erro">Você precisa estar logado!</div>';
        break;
}
?>
    <body>
      <div class="btn-back">
        <a href="./index.html"> &#8592; Voltar</a>
      </div>
        <div class="container">
          <div class="forms-container">
            <div class="signin-signup">
              <form action="db/cadastro.php" method="POST" class="sign-in-form">
                <h2 class="title">Entrar na sua conta:</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Email" name="login" id="login"/>
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Senha" name="senha" id="senha">
                </div>
                <input type="submit" id="entrar" value="Entrar" class="btn solid">  
              </form>

            <div class="panel right-panel">
              <div class="content">
                <h3>Já tem uma conta?</h3>
                <p>
                Entre aqui!
                </p>
                <a href="?p=useradd">
                <button class="btn transparent" id="sign-in-btn">
                  Fazer login
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>      
      
      <script type="text/javascript" src="js/jquery-1.8.2.js"></script>
      <script src="./js/login.js"></script>
      <script src="/server/controllers/user.js"></script>


