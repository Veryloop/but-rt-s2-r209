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
                <h2>Connexion</h2>
                <form class="pure-form pure-form-aligned">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="aligned-name">Nom d'utilisateur</label>
                            <input type="text" id="aligned-name" placeholder="username" />
                        </div>
                        <div class="pure-control-group">
                            <label for="aligned-password">Mot de passe</label>
                            <input type="password" id="aligned-password" placeholder="password" />
                        </div>
                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-primary">Connexion</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>