<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6_6</title>
    <style>
        body {
            margin: 50px 20px;
        }
        .errors{
            color:red;
            display: none;
        }
        input:in-range:focus {
            outline: 2px solid green;
        }
        input:out-of-range:focus {
            outline: 2px solid red;
        }
        input:out-of-range {
            border: 2px solid red;
        }
        input:out-of-range + div.errors {
            display: block;
        }
        div.info {
            display: none;
        }
        input:focus~div.info {
            display: block;
        }
    </style>
</head>
<body>
    <h1>form elemek</h1>
    <h2>input fields</h2>
    <p>input specifikus pseudo calss-ok: enabled, deisabled, readonly, readwrite</p>
    <p>Az elem lértejöttekor már kap default pseudo class-okat. Aztán css-sel változtatható.</p>
    <p>Illetve az elem állapotának változásakor további pseudp class-ok adódnak az elemhez. Ezeket a pseudo class-okat is kell ismerni, ha az elemet megfelelően akarjuk használni. Pl.: in-range, out-of-range</p>
    <p>A type attribútummal meghatározható az input típusa.</p>
    <input type="text"><span>text</span><br><br>
    <input type="button" value="button"><span>button</span><br><br>
    <input type="checkbox" name="" id=""><span>checkbox</span><br><br>
    <input type="color" name="" id=""><span>color</span><br><br>
    <input type="date" name="" id=""><span>date</span><br><br><br>
    <input type="datetime" name="" id=""><span>datetime(not supported)</span><br><br>
    <input type="datetime-local" name="" id=""><span>datetime-local</span><br><br>
    <input type="email" name="" id=""><span>email</span><br><br>
    <input type="file" name="" id=""><span>file</span><br><br>
    <input type="image" src="" alt=""><span>image</span><br><br>
    <input type="number" name="" id=""><span>number</span><br><br>
    <input type="password" name="" id=""><span>password</span><br><br>
    <input type="radio" name="" id=""><span>radio</span><br><br>

    <h2>email</h2>
    <p>Ha az email required attribútumú, akkor üresen nem engedi elküldeni. DE!! ha a form attribútumként megadom a novalidate-t, akkor mégis csak el lehet küldeni. (kis hackelés)</p>
    <form action="" novalidate>
        <input type="email" name="" id="" required>
        <button>küld</button>
    </form>
    
    <h2>Elem állapotától függő pseudo class-ok dinamikus használata</h2>
    <p>in-range, out-of-range, focus</p>
    <p>input filed value check with html and css</p>
    <p>Több pseudo class használata egy elemen. Vigyázz a megadás sorrendjére!</p>
    <input type="number" name="" id="" min="2" max="5">
    <div class="errors">Invalid adatok!</div>
    <div class="info">Írj ide egy számot 2-től 5-ig!</div>

    <h2>radio buttons</h2>
    <p>you have to use the same name with them</p>
    <p>with checked, disabled attributes</p>
    <p>css - pointer-events: none letiltja a hsználatát az elemenek</p>
    <form action="">
        <h4>Mennyi 2+3?</h4>
        <input type="radio" name="answer" id="" value="-1" checked>-1
        <br>
        <input type="radio" name="answer" id="" value="5">5
        <br>
        <input type="radio" name="answer" id="" value="8">8
        <br>
        <input type="radio" name="answer" id="" value="10" disabled>10
        <br>
        <button>küldés</button>
    </form>
    <h4>$ GET sent with checkboxes:</h4>
    <?php 
        print_r($_GET);
    ?>
    <h2>checkboxes</h2>
    <p>A name-t tömbként érdemes megadni, így egyszerűbb kezelni a válaszokat, nem kell a nevekkel bíbelődni. Pl. a php asszociatív tömböt kap belőlük. Lásd &uarr; .</p>
    <form action="">
        <h4>question 1</h4>
        <input type="checkbox" name="section1[]" value="1" id="" checked>1 <br><br>
        <input type="checkbox" name="section1[]" value="2" id="">2 <br><br>
        <input type="checkbox" name="section1[]" value="3" id="" disabled>3 <br><br>
        <input type="checkbox" name="section1[]" value="4" id="">4 <br><br>

        <h4>question 2</h4>
        <input type="checkbox" name="section2[]" value="1" id="" checked>1 <br><br>
        <input type="checkbox" name="section2[]" value="2" id="">2 <br><br>
        <input type="checkbox" name="section2[]" value="3" id="" disabled>3 <br><br>
        <input type="checkbox" name="section2[]" value="4" id="">4 <br><br>
        <button>Küld</button>
    </form>

    <h2>file</h2>
    <p>form: enctype="multipart/form-data" (bináris adat feltöltés miatt), method="post"</p>
    <p>egy fájl feltöltésének lehetősége</p>
    <form action="" enctype="multipart/form-data">
        <input type="file" name="f">
        <button>küld</button>
    </form>
    <p>több fájl feltöltésének lehetősége: </p>
    <p>???????????????</p>
    <p>Ekkor tpye="file[]" tömböt kell megadni és "multiple". Ha a type nem tömb akkor csak a kiválasztott elemek közül egy kerül elküldésre.</p>
    <form action="">
        <input type="file" name="files" multiple>
        <button>küld</button>
    </form>

    <h2>select</h2>
    <p>egykiválasztható lehetőség</p>
    <form action="">
        <select name="select1">
            <option value="egy">egy</option>
            <option value="ketto">kettő</option>
            <option value="harom">három</option>
            <option value="negy">négy</option>
        </select>
        <button>küld</button>
    </form>
    <p>több kiválasztható lehetőség: select mltiple</p>
    <p>itt is tömböt kell megadni névként</p>
    <p>És van még: selected - kiválasztott opció, size="2" pl. a mutatott lista nagysága</p>
    <form action="">
        <select name="select2[]" size="2" multiple>
            <option value="egy">egy</option>
            <option value="ketto" selected>kettő</option>
            <option value="harom">három</option>
            <option value="negy">négy</option>
        </select>
        <button>küld</button>
    </form>
    <p>optgroup</p>
    <form action="">
        <select name="select3">
            <optgroup label="1. csoport">
                <option value="egy">egy</option>
                <option value="ketto">kettő</option>
                <option value="harom">három</option>
                <option value="negy">négy</option>
            </optgroup>
            <optgroup label="2. csoport">
                <option value="egy">egy</option>
                <option value="ketto">kettő</option>
                <option value="harom">három</option>
                <option value="negy">négy</option>
            </optgroup>
        </select>
        <button>küld</button>
    </form>
    <h2>datalist</h2>
    <form action="">
        <input type="text" list="mylist">
        <datalist id="mylist">
            <option value="item 1">
            <option value="item 2">
            <option value="item 3">
            <option value="item 4">
            <option value="item 5">
        </datalist>
    </form>
    <h2>fieldset, legend</h2>
    <fieldset style="display: inline-block;">
        <legend>Belépési adatok</legend>
        <label for="">Email:</label>
        <input type="email"><br><br>
        <label for="">Jelszó</label>
        <input type="password" name="" id="">
    </fieldset>
    <h2>textarea</h2>
    <p>több soros szöveg</p>
    <p>cols: egy sorban hány karakter férjen el, rows: sorok száma</p>
    <textarea name="" id="" cols="30" rows="10"></textarea>
</body>
</html>