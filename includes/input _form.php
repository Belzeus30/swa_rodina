<div class="popup">

    <form action="parsers/save.php" method="post" data-multi-step>
        <div class="card jmeno" data-step>
            <div class="close" onclick="closePopup()">&#10006;</div>
            <h3>Název rodiny</h3>
            <div class="form-group">
                <label for="name">Jméno</label>
                <input type="text" name="name">
            </div>
            <div class="button-group">
                <button type="button" data-next>Další</button>
            </div>

        </div>
        <div class="card prijmy" data-step>
        <div class="close" onclick="closePopup()">&#10006;</div>
            <h3>Příjmy</h3>
            <div class="form-group">
                <label for="plat">Plat(za měsíc)</label>
                <input type="number" name="plat">
            </div>
            <div class="form-group">
                <label for="2plat">2. plat(za měsíc)</label>
                <input type="number" name="2plat">
            </div>
            <div class="form-group">
                <label for="jedno_prijem">Jednorázové příjmy</label>
                <input type="number" name="jedno_prijem">
            </div>
            <div class="form-group">
                <label for="investice">Investice(celkem)</label>
                <input type="number" name="investice">
            </div>
            <div class="button-group">
                <button type="button" data-previos>Předchozí</button>
                <button type="button" data-next>Další</button>
            </div>
        </div>
        <div class="card vydaje" data-step>
        <div class="close" onclick="closePopup()">&#10006;</div>
            <h3>Výdaje</h3>
            <div class="vydaje-druhy">
                <div class="zbytne">
                    <p><strong>Zbytné</strong></p>
                    <div class="form-group">
                        <label for="najem">Nájem/Daň(za měsíc)</label>
                        <input type="number" name="najem">
                    </div>
                    <div class="form-group">
                        <label for="inkaso">Voda+Elektřina(za měsíc)</label>
                        <input type="number" name="inkaso">
                    </div>
                    <div class="form-group">
                        <label for="jidlo">Jídlo</label>
                        <input type="number" name="jidlo">
                    </div>
                    <div class="form-group">
                        <label for="telekomunikace">Telekomunikace</label>
                        <input type="number" name="telekomunikace">
                    </div>
                </div>
                <div class="nezbytne">
                    <p><strong>Nezbytné</strong></p>
                    <div class="form-group">
                        <label for="konicky">Koníčky</label>
                        <input type="number" name="konicky">
                    </div>

                    <div class="form-group">
                        <label for="vylety">Jiné</label>
                        <input type="number" name="vylety">
                    </div>

                    <div class="form-group">
                        <label for="vzdelani">Vzdělání</label>
                        <input type="number" name="vzdelani">
                    </div>
                </div>
            </div>
            <div class="button-group">
                <button type="button" data-previos>Předchozí</button>
                <button type="button" data-next>Další</button>
            </div>
        </div>

        <div class="card dluhy" data-step>
        <div class="close" onclick="closePopup()">&#10006;</div> 
            <h3>Dluhy</h3>
            <div class="form-group">
                <label for="kcelkem">Kreditka dluh</label>
                <input type="number" name="kcelkem">
            </div>

            <div class="form-group">
                <label for="ksplatka">Kreditka splátka</label>
                <input type="number" name="ksplatka">
            </div>

            <div class="form-group">
                <label for="hcelkem">Hypotéka dluh</label>
                <input type="number" name="hcelkem">
            </div>

            <div class="form-group">
                <label for="hsplatka">Hypotéka splátka</label>
                <input type="number" name="hsplatka">
            </div>
            <div class="button-group">
                <button type="button" data-previos>Předchozí</button>
                <button type="submit" data-next>Odeslat</button>
            </div>

        </div>
    </form>
</div>

