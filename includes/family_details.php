<?php

if (isset($_POST['edit_id'])):
    include '../Models/Database.php';
    include '../Models/Family.php';
    include '../config/init.php';
    $selected_id = isset($_POST['edit_id']) ? $_POST['edit_id'] : "";
    $Family->id = $selected_id;
    $selected_family = $Family->get_one();






    ?>

    <div id="family-detail">

        <div>
            <form action="">
                <h1 id="zapis">
                    Zůstatek
                </h1>
                <p>Váš zůstatek je (zustatek)</p>
                <p>Váš dluh na kreditce činí(kdluh), Vače hypotéka činí(hdluh)</p>
                <p>Pro úpravu přepište údaje a klikněte na tlačitko</p>
                <p>if zustatek vetsi nez (6*(plat_1+plat_2)) then napad na investice else if (zustatek vetsi nez 0)
                    schov si penize, else zvedni prijmy a sniz vydaje </p>
                <div class="grid">
                    <!-- Prijmy -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">1.plat (měsíčně):</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">2.plat (měsíčně):</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Jednorázové přijmy:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Investice:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                    </div>
                    <!-- Vydaje -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Nájem/Daň(měsíčně):</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Voda+Elektřina(za měsíc):</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Jídlo:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Telekomunikace:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                    </div>
                    <!-- Vydaje zbytne -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Koníčky:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Výlet+zábava..:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Vzdělání:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        
                    </div>
                    <!-- Dluhy -->
                    <div class="clmn">
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Hypotéka:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Splátka hypo:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Kreditka:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            <label for="name">Splátka kreditky:</label>
                            <input type="text" class="edit" disabled>
                        </div>
                    </div>

                </div>
            </form>
            <button onclick="Edit_Family(<?= $selected_family['ID'] ?>)">Upravit</button>
            <button onclick="location.reload()">Zavřít</button>
            <button onclick="Delete_Family(<?= $selected_family['ID'] ?>)">smazat</button>
        </div>


    </div>

<?php endif ?>