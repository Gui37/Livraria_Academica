<h1>Biblioteca Online</h1>
  <div class="telalogin">
 <?php if(isset($_SESSION['success'])){?>
 <div class="alert alert-success">  <?php echo $_SESSION['success']; ?></div>
 <?php
 }?> 
 <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
  <div class="formlogin">
    <h2>Login</h2>
    <form class="login-form" method="post">
      <input type="text" placeholder="Username" name="username" id="username"  required=""/>
      <input type="password" placeholder="Palavra Passe" name="password" id="password"  required=""/>
      <button name="register">Entrar</button>
      <p class="message">Não Registrado? <a href="<?php echo site_url('Registration')?>">Novo Utilizador</a></p>
    </form>
  </div>
</div>
