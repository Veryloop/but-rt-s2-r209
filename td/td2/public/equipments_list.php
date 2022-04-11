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
                <div class="menu">
                    <h2>Liste des commutateurs</h2>
                    <span>
                        <a class="pure-button" href="add_equipment.php">Ajouter un équipement</a>
                    </span>
                </div>
                <table class="pure-table pure-table-striped table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Référence</th>
                            <th>Fin de garantie</th>
                            <th>IP de management</th>
                            <th>Configuration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>SW_RT01</td>
                            <td>23-08-2024</td>
                            <td>10.10.23.245</td>
                            <td><a href="configuration.php">Configuration</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SW_RT10</td>
                            <td>23-10-2024</td>
                            <td>10.10.23.243</td>
                            <td><a href="configuration.php">Configuration</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>SW_RT100</td>
                            <td>1-01-2024</td>
                            <td>10.10.23.254</td>
                            <td><a href="configuration.php">Configuration</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>