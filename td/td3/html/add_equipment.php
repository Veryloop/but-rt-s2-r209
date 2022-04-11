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
                <h2>Ajouter un équipement</h2>
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <div class="pure-g">
                            <div class="pure-u-1-3">
                                <div class="pure-g">
                                    <div class="pure-u-17-24">
                                        <label for="ref">Référence</label>
                                        <input type="text" id="ref" placeholder="SW_xxx" class="pure-u-23-24"/>
                                    </div>
                                    <div class="pure-u-4-24">
                                        <label>Auto IP</label>
                                        <button type="button" class="pure-button" onclick="autoip(event)">
                                            Auto IP
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="pure-u-1-3">
                                <label for="warranty">Fin de garantie</label>
                                <input type="date" id="warranty" placeholder="01/01/2022" class="pure-u-23-24"/>
                            </div>
                            <div class="pure-u-1-3">
                                <label for="ip">IP de management</label>
                                <input type="text" id="ip" placeholder="10.10.yyy.xxx" class="pure-u-1"/>
                            </div>
                            <textarea id="conf" class="pure-u-1" rows="20"></textarea>
                        </div>
                        <button type="submit" class="pure-button pure-button-primary">Enregistrer</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>