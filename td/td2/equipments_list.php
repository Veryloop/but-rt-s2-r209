<?php require('head.php'); ?>
<body>
    <!-- Menu haut -->
    <div class="menu">
        <span class="pure-menu-heading">switch conf</span>
        <a href="login.html" class="pure-menu-link">Se connecter</a>
    </div>
    <!-- Menu gauche + contenu page -->
    <div class="pure-g">
        <!-- Menu gauche -->
        <div class="pure-u-1-8">
            <div class="pure-menu">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item">
                        <a href="index.html" class="pure-menu-link">Utilisateurs</a>
                    </li>
                    <li class="pure-menu-item pure-menu-selected">
                        <a href="equipments_list.html" class="pure-menu-link">Équipements</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page -->
        <div class="pure-u-7-8">
            <div class="container">
                <div class="menu">
                    <h2>Liste des commutateurs</h2>
                    <span>
                        <a class="pure-button" href="add_equipment.html">Ajouter un équipement</a>
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
                            <td><a href="configuration.html">Configuration</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SW_RT10</td>
                            <td>23-10-2024</td>
                            <td>10.10.23.243</td>
                            <td><a href="configuration.html">Configuration</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>SW_RT100</td>
                            <td>1-01-2024</td>
                            <td>10.10.23.254</td>
                            <td><a href="configuration.html">Configuration</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>