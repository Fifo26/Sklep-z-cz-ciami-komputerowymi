<?php
    include "header.php";
?>
    <main>
        <div id="formularz">
            <form action="#" method="post">
                <span>
                    <label for="kategoria">Wybierz kategorię</label>
                    <select name="kategoria" id="kat">
                        <option value="">wszystko</option>
                        <option value='where kategoria="monitor"'>Monitor</option>
                        <option value='where kategoria="mysz"'>Mysz</option>
                        <option value='where kategoria="procesor"'>Procesor</option>
                        <option value='where kategoria="karta_graf"'>Karta graficzna</option>
                        <option value='where kategoria="głośniki"'>Głośniki</option>
                    </select>
                </span>
                <span>
                    <label for="sort">Sortowanie</label>
                    <select name="sort" id="sort">
                        <option value="order by nazwa asc">nazwa rosnąco</option>
                        <option value="order by nazwa desc">nazwa malejąco</option>
                        <option value="order by cena asc">cena rosnąco</option>
                        <option value="order by cena desc">cena malejąco</option>
                    </select>
                </span>
                <span>
                    <input type="submit" value="Szukaj">
                </span>
            </form>
        </div>
        <?php
            include "dbconection.php";
        ?>
        
    </main>
<?php
include "footer.php";
?>