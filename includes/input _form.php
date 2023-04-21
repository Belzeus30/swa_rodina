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

<!--
<div class="inputbox">
    <div class="column middle">
        <div class="form" id="myForm">
            <form class="table" action="parsers/save.php" method="post">
                <h1 id=zapis>
                    Jmeno
                </h1>
                <table>
                    <tr>
                        <td><input type="text" name="name" required></td>
                    </tr>
                </table>
                <h1 id="zapis">
                    Příjmy
                </h1>
                <table>
                    <tr>
                        <td>Plat(za měsíc)</td>
                        <td>2. plat(za měsíc)</td>
                        <td>Jednorázové příjmy(celkem)</td>
                        <td>Investice(celkem)</td>
                    </tr>
                    <tr>

                        <td><input type="Number" name="plat" required></td>
                        <td><input type="Number" name="2plat"></td>
                        <td><input type="Number" name="jedno_prijem"></td>
                        <td><input type="Number" name="investice"></td>

                    </tr>
                </table>
                <h1 id="zapis">
                    Výdaje
                </h1>

                <h3>Nezbytné</h3>

                <table>
                    <tr>
                        <td>Nájem/Daň(za měsíc)</td>
                        <td>Voda+Elektřina(za měsíc)</td>
                        <td>Jídlo(celkem)</td>
                        <td>Telekomunikace</td>
                    </tr>
                    <tr>

                        <td><input type="Number" name="najem"></td>
                        <td><input type="Number" name="inkaso"></td>
                        <td><input type="Number" name="jidlo"></td>
                        <td><input type="Number" name="telekomunikace"></td>
                    </tr>
                </table>
                <h3>
                    Zbytné
                </h3>
                <table>
                    <tr>
                        <td>Koníčky-celkem</td>
                        <td>Výlety+Zábava+dárky-celkem</td>
                        <td>Vzdělání-celkem</td>
                    </tr>
                    <tr>
                        <td><input type="Number" name="konicky"></td>
                        <td><input type="Number" name="vylety"></td>
                        <td><input type="Number" name="vzdelani"></td>
                    </tr>
                </table>

                <h1 id="zapis">
                    Dluhy
                </h1>
                <table>
                    <tr>
                        <td>Kreditka-dlužná částka</td>
                        <td>Kreditka-měsíční splátka</td>
                        <td>Hypotéka-dlužná částka</td>
                        <td>Hypotéka-měsíční splátka</td>
                    </tr>
                    <tr>

                        <td><input type="Number" name="kcelkem"></td>
                        <td><input type="Number" name="ksplatka"></td>
                        <td><input type="Number" name="hcelkem"></td>
                        <td><input type="Number" name="hsplatka"></td>
                    </tr>
                </table>
                <input type="submit" class="button" id="submit">
                <input type="button" onclick="closeForm()">

            </form>
        </div>
    </div>
</div>