<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
  <label for="name">
    Nome:<br/>
    <input type="text" name="name">
  </label><br/><br/>

  <label for="name">
    Email:<br/>
    <input type="email" name="email">
  </label><br/><br/>

  <input type="submit" value="Adicionar">

</form>

<?php $render('footer');?>