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
                <h2>Configuration du switch #x</h2>
                <textarea id="conf" class="pure-u-1" rows="20" readonly>
interface FastEthernet0/0
    ip address 192.168.100.1 255.255.255.0
    duplex auto
    speed auto
    end
                </textarea>
            </div>
        </div>
    </div>
</body>
</html>