<?php 

    include('header.php'); 
    if (isset($_SESSION['logado']) && !isset($_GET['logout'])) {
        header('Location: admin.php');
    } else if (isset($_GET['logout']))  {
        header('Location: index.php');
    }  

?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="./img/gravura.jpg" alt="gravura">
            </div>
            <div class="col">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="">
                            <input type="checkbox" name="manter_conectado">Manter Conectado
                        </label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="login">Entrar</button>
                    </div>
                    <?php
                        if(isset($erro)) {
                            echo "<div class='alert alert-warning'>$erro</div>";
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>