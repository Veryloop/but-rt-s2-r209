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
                        <tr>
                            <td>1</td>
                            <td>Bob</td>
                            <td><a href="sip:bob@pabx.local">sip:bob@pabx.local</a></td>
                            <td>Technicien</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Alice</td>
                            <td><a href="sip:alice@pabx.local">sip:alice@pabx.local</a></td>
                            <td>Ingénieur réseau</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td><a href="sip:john@pabx.local">sip:john@pabx.local</a></td>
                            <td>Technicien</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>