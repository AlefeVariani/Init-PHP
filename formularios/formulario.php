<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php if(!$_POST['submit']): ?>
        <form action="formulario.php" method="post">
            <fieldset>
                <legend>Form</legend>
                <label> Nome: <input type="text" name="nome"></label>
                <label> Sobrenome: <input type="text" name="sobrenome"></label>
                <label> Email: <textarea name="email"></textarea></label>
            </fieldset>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <?php else: ?>
        <h1>Dados do formulario</h1>
        <b>Nome: </b> <?php echo $_POST["nome"]; ?><br/>
        <b>Sobrenome: </b> <?php echo $_POST["sobrenome"]; ?><br/>
        <b>Email: </b> <?php echo $_POST["email"]; ?><br/>
        <a href="index.php">Voltar</a>
        <?php endif; ?>
    </body>
</html>