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
                <h2>Liste des utilisateurs</h2>
                <table class="pure-table pure-table-striped table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>SIP</th>
                            <th>Rôle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include('../helper/connection.php');
                            $query = $pdo->query('SELECT username, sip, role FROM users'); 
                            $users = $query->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($users as $key => $user): ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><a href="<?= $user['sip'] ?>"><?= $user['sip'] ?></a></td>
                            <td><?= $user['role'] ?></td>
                        </tr>
                        <?php endforeach ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>