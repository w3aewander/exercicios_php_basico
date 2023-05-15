
<?php 
 date_default_timezone_set("America/Sao_Paulo");
 include __DIR__ . "/header.php"; 
?>
<div class="header">
  <h1>Curso Fundamentos de PHP</h1>
  <p>Prof. Wanderlei Silva do Carmo <wander.silva@gmail.com></p>
  <?=date('d/m/Y H:i:s');?>
</div>

<div class="menu-header">
  <p style="display: inline-block">
    <a class="menu-link" href="#constante"> Constantes </a>
    <a class="menu-link" href="#variaveis"> Variáveis </a>
    <a class="menu-link" href="#vetores"> Vetores/Array </a>
    <a class="menu-link" href="#funcs"> Funções</a>
    <a class="menu-link" href="#arquivos"> Arquivos</a>
    <a class="menu-link" href="#videos"> Video aulas</a>
    <a class="menu-link" href="exercicio.php"> Exercícios </a>
  </p>
</div>

  <!-- constantes -->
  <div id="constante" class="container box-shadow">
    <?php require __DIR__ . "/constantes.php" ; ?>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div

  <!-- variaveis -->
  <div id="variaveis" class="container box-shadow">
    <?php require __DIR__ . "/variaveis.php" ; ?>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div

  <!-- vetores -->
  <div id="vetores" class="container box-shadow">
    <?php require __DIR__ . "/vetores.php" ; ?>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div

  <!-- funções -->
  <div id="funcs" class="container box-shadow">
    <?php require __DIR__ . "/funcs.php" ; ?>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div

  <!-- manipulação de arquivos -->
  <div id="arquivos" class="container box-shadow">
    <?php require __DIR__ . "/arquivos.php" ; ?>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>
  <!-- video aulas -->
  <div id="videoaulas" class="container box-shadow">
    <?php require __DIR__ . "/videos.php" ; ?>
  </div
  
  <div class="container box-shadow">
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>
  
<?php include __DIR__ . "/footer.php"; ?>