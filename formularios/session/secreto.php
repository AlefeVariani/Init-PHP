<?php session_start();?>
<?php if (isset($_SESSION['logado'])): ?>
<h1>Pagina secreta</h1>
<br>
<a href="logout.php">Logout(sair)</a>    
<?php else: ?>
<h1>Vc não tem acesso</h1>
<a href="index.php">Login</a>
<?php endif; ?>

    