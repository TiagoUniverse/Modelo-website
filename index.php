<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela inicial</title>

  <!-- CSS -->
  <link rel="stylesheet" href="Assets/Css/components/Header.css" />
  <link rel="stylesheet" href="Assets/Css/components/body.css" />
  <link rel="stylesheet" href="Assets/Css/components/navbar.css" />
  <link rel="stylesheet" href="Assets/Css/components/content.css" />
  <link rel="stylesheet" href="Assets/Css/components/SideBar.css" />
  <link rel="stylesheet" href="Assets/Css/components/footer.css" />
</head>


<body>

  <header>
    <h1>Meu blog</h1>
  </header>

  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <ul>
        <li><a href="index.php">Alterar senha</a></li>
        <li><a href="index.php">Sair</a></li>
      </ul>
    </ul>
  </nav>
  <div class="row">
    <section>
      <article class="card">
        <h3>Primeira artigo</h3>
        <img src="Assets/Img/Tiago-Lopes.jpg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum magni ducimus consequuntur in, maiores sunt consectetur voluptatem autem sapiente qui sint possimus sequi ea voluptate nesciunt. Nisi, eos? Perferendis, repellendus.</p>
      </article>
      <article class="card">
        <h3>Segundo artigo</h3>
        <img src="Assets/Img/user.png">
      </article>
    </section>
    <aside>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">Cadastro do colaborador</a></li>
        <li><a href="index.php">Solicitação de acesso</a></li>
        <li><a href="index.php">Aceitar termos</a></li>
        <li><a href="index.php">Criação de e-mails</a></li>
        <li><a href="index.php">Liberação de sistemas</a></li>
      </ul>
    </aside>
  </div>

  <footer>
    © Todos os Direitos Reservados - Senac, GTI 2022.
  </footer>

</body>

</html>