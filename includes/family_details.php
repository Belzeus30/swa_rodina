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

        <div>
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
                    <!-- Prijmy -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">1.plat (měsíčně):</label>
                            <input type="text" class="edit" value="<?= $selected_family['plat_1'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">2.plat (měsíčně):</label>
                            <input type="text" class="edit" value="<?= $selected_family['plat_2'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Jednorázové přijmy:</label>
                            <input type="text" class="edit" value="<?= $selected_family['jedno_prijem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Investice:</label>
                            <input type="text" class="edit" value="<?= $selected_family['investice'] ?>" data-form-input disabled>
                        </div>
                    </div>
                    <!-- Vydaje -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Nájem/Daň(měsíčně):</label>
                            <input type="text" class="edit" value="<?= $selected_family['najem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Voda+Elektřina(za měsíc):</label>
                            <input type="text" class="edit" value="<?= $selected_family['inkaso'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Jídlo:</label>
                            <input type="text" class="edit" value="<?= $selected_family['jidlo'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Telekomunikace:</label>
                            <input type="text" class="edit" value="<?= $selected_family['telekomunikace'] ?>" data-form-input disabled>
                        </div>
                    </div>
                    <!-- Vydaje zbytne -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Koníčky:</label>
                            <input type="text" class="edit" value="<?= $selected_family['konicky'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Výlet+zábava..:</label>
                            <input type="text" class="edit" value="<?= $selected_family['vylety'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Vzdělání:</label>
                            <input type="text" class="edit" value="<?= $selected_family['vzdelani'] ?>" data-form-input disabled>
                        </div>

                    </div>
                    <!-- Dluhy -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Hypotéka:</label>
                            <input type="text" class="edit" value="<?= $selected_family['kcelkem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Splátka hypo:</label>
                            <input type="text" class="edit" value="<?= $selected_family['ksplatka'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Kreditka:</label>
                            <input type="text" class="edit" value="<?= $selected_family['hcelkem'] ?>" data-form-input disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Splátka kreditky:</label>
                            <input type="text" class="edit" value="<?= $selected_family['hsplatka'] ?>" data-form-input disabled>
                        </div>
                    </div>

                </div>
            </form>
            <button data-enable-button >Upravit</button>
            <button onclick="location.reload()">Zavřít</button>
            <button onclick="Delete_Family(<?= $selected_family['ID'] ?>)">smazat</button>
        </div>


    </div>

<?php endif ?>