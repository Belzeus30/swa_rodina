<div class="popup">
    <form action="parsers/save.php" method="post" data-multi-step>
        <div class="card jmeno" data-step>
            <h3>Název rodiny</h3>
            <label for="name">jméno</label>
            <input type="text" name="name">
        </div>
        <div class="card prijmy" data-step>
            <h3>Příjmy</h3>
            <label for="plat">Plat(za měsíc)</label>
            <input type="number" name="plat">
            <label for="2plat">2. plat(za měsíc)</label>
            <input type="number" name="2plat">
            <label for="jedno_prijem">Jednorázové příjmy(celkem)</label>
            <input type="number" name="jedno_prijem">
            <label for="investice">Investice(celkem)</label>
            <input type="number" name="investice">
        </div>
        <div class="card" data-step>
            <h3>Výdaje</h3>
            <div class="vydaje">
                <div class="zbytne">
                    <p><strong>Zbytné</strong></p>
                    <label for="najem">Nájem/Daň(za měsíc)</label>
                    <input type="number" name="najem">
                    <label for="inkaso">Voda+Elektřina(za měsíc)</label>
                    <input type="number" name="inkaso">
                    <label for="jidlo">Jídlo(celkem)</label>
                    <input type="number" name="jidlo">
                    <label for="telekomunikace">Telekomunikace</label>
                    <input type="number" name="telekomunikace">
                </div>
                <div class="nezbytne">
                    <p><strong>Nezbytné</strong></p>
                    <label for="konicky">Koníčky-celkem</label>
                    <input type="number" name="konicky">
                    <label for="vylety">Výlety+Zábava+dárky-celkem</label>
                    <input type="number" name="vylety">
                    <label for="vzdelani">Vzdělání-celkem</label>
                    <input type="number" name="vzdelani">
                </div>
            </div>
        </div>

        <div class="card dluhy" data-step>
            <h3>Dluhy</h3>
            <label for="kcelkem"></label>
            <input type="number" name="kcelkem">
            <label for="ksplatka"></label>
            <input type="number" name="ksplatka">
            <label for="hcelkem"></label>
            <input type="number" name="hcelkem">
            <label for="hsplatka"></label>
            <input type="number" name="hsplatka">
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