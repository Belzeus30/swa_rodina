<?php

if (isset($_POST['edit_id'])):
    include '../Models/Database.php';
    include '../Models/Family.php';
    include '../config/init.php';
    $selected_id = isset($_POST['edit_id']) ? $_POST['edit_id'] : "";
    $Family->id = $selected_id;
    $selected_family = $Family->get_one();





    ?>
    <script src="includes/edit_form.js" defer></script>
    <div id="family-detail" data-edit-overlay >

        <div class="edit-popup" data-edit-popup>
            <div class="close" onclick="location.reload()">&#10006;</div>
            <form data-edit-form method="post" action="parsers/edit.php?id=<?= $selected_id ?>">
                <h3  id="zapis">
                    Detail rodiny
                </h3>
                <div class="main-content">
                    <div class="family-name">
                        <label for="name">Jméno rodiny</label>
                        <input name="name"  value="<?= $selected_family['name'] ?>" data-form-input disabled>
                    </div>
                    
 
                    <div class="section">
                        
                        <div class="form-group">
                            <label for="plat">1.plat (měsíčně):</label>
                            <input name="plat" type="text"  value="<?= $selected_family['plat_1'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="2plat">2.plat (měsíčně):</label>
                            <input name="2plat" type="text"  value="<?= $selected_family['plat_2'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="jedno_prijem">Jednorázové přijmy:</label>
                            <input name="jedno_prijem" type="text" 
                                value="<?= $selected_family['jedno_prijem'] ?>" data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="investice">Investice:</label>
                            <input name="investice" type="text"  value="<?= $selected_family['investice'] ?>"
                                data-form-input disabled>
                        </div>
                    </div>
                    <!-- Vydaje -->

                    <div class="section">
                    
                        <div class="form-group">
                            <label for="najem">Nájem/Daň(měsíčně):</label>
                            <input name="najem" type="text"  value="<?= $selected_family['najem'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="inkaso">Voda+Elektřina(za měsíc):</label>
                            <input name="inkaso" type="text"  value="<?= $selected_family['inkaso'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="jidlo">Jídlo:</label>
                            <input name="jidlo" type="text"  value="<?= $selected_family['jidlo'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="telekomunikace">Telekomunikace:</label>
                            <input name="telekomunikace" type="text" 
                                value="<?= $selected_family['telekomunikace'] ?>" data-form-input disabled>
                        </div>
                    </div>
                    <!-- Vydaje zbytne -->
                    <div class="section">
                        <div class="form-group">
                            <label for="konicky">Koníčky:</label>
                            <input name="konicky" type="text"  value="<?= $selected_family['konicky'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="vylety">Výlet+zábava..:</label>
                            <input name="vylety" type="text"  value="<?= $selected_family['vylety'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="vzdelani">Vzdělání:</label>
                            <input name="vzdelani" type="text"  value="<?= $selected_family['vzdelani'] ?>"
                                data-form-input disabled>
                        </div>

                    </div>
                    <!-- Dluhy -->
                    <div class="section">
                    
                        <div class="form-group">
                            <label for="kcelkem">Hypotéka:</label>
                            <input name="kcelkem" type="text"  value="<?= $selected_family['kcelkem'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="ksplatka">Splátka hypo:</label>
                            <input name="ksplatka" type="text"  value="<?= $selected_family['ksplatka'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="hcelkem">Kreditka:</label>
                            <input name="hcelkem" type="text"  value="<?= $selected_family['hcelkem'] ?>"
                                data-form-input disabled>
                        </div>
                        <div class="form-group">
                            <label for="hsplatkay">Splátka kreditky:</label>
                            <input name="hsplatka" type="text"  value="<?= $selected_family['hsplatka'] ?>"
                                data-form-input disabled>
                        </div>
                    </div>

                </div>
            </form>
            <div class="main-details">
                    <p><strong>Zůstatek:</strong> 
                        <?= $selected_family['cashflow'] ?>
                    </p>
                    <p> <strong>Dluh:</strong>   <?=$selected_family['dluh']?></p>
                </div>
                <div class="recommended">
                    <div> <strong>Doporučení:</strong> </div>
                    <?php if ($selected_family['cashflow'] > (6 * ($selected_family['plat_1'] + $selected_family['plat_2']))): ?>

                        <p>Máš velkou rezervu :) investuj do kapitálových trhů</p>
                    <?php elseif ($selected_family['cashflow'] > 0): ?>
                        <p>nemáš dost velkou rezervu šetři si peníze</p>
                    <?php else: ?>
                        <p>Zvedni příjem</p>
                    <?php endif ?>
                </div>
            <div class="button-group">
            <button class="button" data-enable-button>Upravit</button>
            <button class="button" onclick="location.reload()">Zavřít</button>
            <button class="button" onclick="Delete_Family(<?= $selected_family['ID'] ?>)">Smazat</button>
            </div>
        </div>


    </div>

<?php endif ?>