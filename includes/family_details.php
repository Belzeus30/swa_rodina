<?php

if (isset($_POST['edit_id'])) :
    include '../Models/Database.php';
    include '../Models/Family.php';
    include '../config/init.php';
    $selected_id = isset($_POST['edit_id']) ? $_POST['edit_id'] : "";
    $Family->id = $selected_id;
    $selected_family = $Family->get_one();





?>
<script src="includes/edit_form.js" defer></script>
    <div id="family-detail">

        <div class="jmeno">
            <form data-edit-form method="post" action="parsers/edit.php?id=<?=$selected_id?>">
                <h1 id="zapis">
                    Zůstatek
                </h1>
                <p>Váš zůstatek je <?= $selected_family['cashflow'] ?></p>
                <p>Váš celkový dluh <?php if($selected_family['dluh']<0){echo '0';} else { echo $selected_family['dluh'];} ?> </p>
                <p>Pro úpravu přepište údaje a klikněte na tlačitko</p>
                
                <?php if ($selected_family['cashflow'] > (6 * ($selected_family['plat_1'] + $selected_family['plat_2']))) : ?>

                    <p>napad na investice </p>
                <?php elseif ($selected_family['cashflow'] > 0) : ?>
                    <p>schov si penize </p>
                <?php else : ?>
                    <p> else zvedni prijmy a sniz vydaje </p>
                <?php endif ?>
                <div class="grid">
                <label for="name">Jméno rodiny</label>
                <input name="name" class="edit1" <?= $selected_family['name']?> data-form-input disabled>
                    <!-- Prijmy -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="1plat">1.plat (měsíčně):</label>
                            <input name="1plat"  type="text" class="edit" value="<?= $selected_family['plat_1'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="2plat">2.plat (měsíčně):</label>
                            <input name="2plat" type="text" class="edit" value="<?= $selected_family['plat_2'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="jedno_prijem">Jednorázové přijmy:</label>
                            <input name="jedno_prijem" type="text" class="edit" value="<?= $selected_family['jedno_prijem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="investice">Investice:</label>
                            <input name="investice" type="text" class="edit" value="<?= $selected_family['investice'] ?>" data-form-input disabled>
                        </div>
                    </div>
                    <!-- Vydaje -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="najem">Nájem/Daň(měsíčně):</label>
                            <input name="najem" type="text" class="edit" value="<?= $selected_family['najem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="inkaso">Voda+Elektřina(za měsíc):</label>
                            <input name="inkaso" type="text" class="edit" value="<?= $selected_family['inkaso'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="jidlo">Jídlo:</label>
                            <input name="jidlo" type="text" class="edit" value="<?= $selected_family['jidlo'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="telekomunikace">Telekomunikace:</label>
                            <input name="telekomunikace" type="text" class="edit" value="<?= $selected_family['telekomunikace'] ?>" data-form-input disabled>
                        </div>
                    </div>
                    <!-- Vydaje zbytne -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="konicky">Koníčky:</label>
                            <input name="konicky" type="text" class="edit" value="<?= $selected_family['konicky'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="vylety">Výlet+zábava..:</label>
                            <input name="vylety" type="text" class="edit" value="<?= $selected_family['vylety'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="vzdelani">Vzdělání:</label>
                            <input name="vzdelani" type="text" class="edit" value="<?= $selected_family['vzdelani'] ?>" data-form-input disabled>
                        </div>

                    </div>
                    <!-- Dluhy -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="kcelkem">Hypotéka:</label>
                            <input name="kcelkem" type="text" class="edit" value="<?= $selected_family['kcelkem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="ksplatka">Splátka hypo:</label>
                            <input name="ksplatka" type="text" class="edit" value="<?= $selected_family['ksplatka'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="hcelkem">Kreditka:</label>
                            <input name="hcelkem" type="text" class="edit" value="<?= $selected_family['hcelkem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="hsplatkay">Splátka kreditky:</label>
                            <input name="hsplatka" type="text" class="edit" value="<?= $selected_family['hsplatka'] ?>" data-form-input disabled>
                        </div>
                    </div>

                </div>
            </form>
            <button class="editb" data-enable-button >Upravit</button>
            <button class="editb" onclick="location.reload()">Zavřít</button>
            <button class="editb" onclick="Delete_Family(<?= $selected_family['ID'] ?>)">Smazat</button>
            <br><br>
        </div>


    </div>

<?php endif ?>