<?php $render('header'); ?>

Meu nome é: <?php echo $nome; ?><br/>
Eu tenho: <?php echo $idade; ?>anos

<hr/>

<?php foreach($posts as $post): ?>
  <h3><?php echo $post['titulo']; ?></h3>
  <p><?php echo $post['corpo']; ?></p> 
<?php endforeach; ?>  

<?php $render('footer');?>