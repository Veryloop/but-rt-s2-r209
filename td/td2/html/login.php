<?php require '../helper/head.php'; ?>
<body>
    <?php require '../helper/menu_haut.php'; ?>
    <!-- Menu gauche + contenu page -->
    <div class="pure-g">
        <!-- Menu gauche -->
        <div class="pure-u-1-8">
            <?php require '../helper/menu_gauche.php'; ?>
        </div>
        <!-- Page -->
        <div class="pure-u-7-8">
            <div class="container">
                <?php if(isset($_POST['username']) && isset($_POST['password'])){ 
                    if($_POST['username'] === "admin" && $_POST['password'] === "1234"){
                        $_SESSION['logon'] = true; } else {
                            echo "username/password erroné"; 
                        }
                    }
                ?>
                <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?> 
                    Vous êtes connecté !<br>
                    <a href="/logout.php" class="pure-button pure-button-primary">Se deconnecter</a>
                <?php else: ?>
                <h2>Connexion</h2>
                <form class="pure-form pure-form-aligned" action="/login.php" method="post">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" name="username" placeholder="username" />
                        </div>
                        <div class="pure-control-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" placeholder="password" />
                        </div>
                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-primary">Connexion</button>
                        </div>
                    </fieldset>
                </form>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>