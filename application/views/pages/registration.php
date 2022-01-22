<div class="telaregistro" >
 <?php if(isset($_SESSION['success'])){?>
 <div class="alert alert-success">  <?php echo $_SESSION['success']; ?></div>
 <?php
 }?> 
 <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<h1>Biblioteca Online</h1>
<div class="formreg" >
<h2>Novo Utilizador</h2>
<form name="reg-form" action="<?php site_url('Registration/create')?>" method="post"> 
<input type="text" class="form-control" placeholder="Nome" name="name" id="username" required=""/>   
<input type="text" class="form-control" placeholder="Username" name="username" id="username" required=""/>           
<input type="password" class="form-control" placeholder="Password" name="password" id="username" required=""/>                             
<input type="text" class="form-control" placeholder="Contacto" name="contact" id="username" required=""/>
<button name="register"> Registrar </button>
</form>
</div>

<?php 

?>