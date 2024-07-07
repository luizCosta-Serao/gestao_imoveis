<?php
  // Obtendo o empreendimento
  $id = $_GET['id'];
  $empreendimento = MySql::connect()->prepare("SELECT * FROM `empreendimentos` WHERE id = ?");
  $empreendimento->execute(array($id));
  $empreendimento = $empreendimento->fetch();
?>

<section class="empreendimento">
  <p>Empreendimento: <h1 class="title"><?php echo $empreendimento['nome']; ?></h1></p>
  <div class="imagem-empreendimento">
    <h2>Imagem do Empreendimento</h2>
    <img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $empreendimento['imagem'] ?>" alt="">
  </div>
  <div class="info-empreendimento">
    <h2>Informações do Empreendimento</h2>
    <p><b>Nome do Empreendimento:</b> <?php echo $empreendimento['nome'] ?></p>
    <p><b>Tipo do Empreendimento:</b> <?php echo $empreendimento['tipo'] ?></p>
  </div>
</section>