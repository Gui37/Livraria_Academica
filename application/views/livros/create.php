<?php echo validation_errors();?>
	<?php echo form_open('livros/create') ?>
	<form class="login-form">
      <input type="text" placeholder="name" name=""  required=""/>
      <input type="password" placeholder="Palavra Passe" name="username"  required=""/>
      <button type="submit">Entrar</button>
      
    </form>
