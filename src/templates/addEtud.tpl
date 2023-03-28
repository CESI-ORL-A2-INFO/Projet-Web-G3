{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addEtud.css">
{/block}

{block name=content}
    <script>
        function validateForm() {
            var nom = document.forms['formulaire']['nom']
            var prenom = document.forms['formulaire']['prenom']
            var centre = document.forms['formulaire']['centre']
            var pilote = document.forms['formulaire']['pilote']
            var promo = document.forms['formulaire']['pilote']
            var bool = true;

            if (nom.value == "") {
                document.getElementById('errorNom').innerHTML = "* Veuillez entrer un nom valide!";
                nom.focus();
                bool = false;
            } else {
                document.getElementById('errorNom').innerHTML = "";
            }
            if (prenom.value == "") {
                document.getElementById('errorPrenom').innerHTML = "* Veuillez entrer un prenom valide!";
                prenom.focus();
                bool = false;
            } else {
                document.getElementById('errorPrenom').innerHTML = "";
            }
            if (centre.value == "none") {
                document.getElementById('errorCentre').innerHTML = "* Veuillez entrer un centre valide!";
                centre.focus();
                bool = false;
            } else {
                document.getElementById('errorCentre').innerHTML = "";
            }
            if (pilote.value == "none") {
                document.getElementById('errorPilote').innerHTML = "* Veuillez entrer un pilote valide!";
                pilote.focus();
                bool = false;
            } else {
                document.getElementById('errorPilote').innerHTML = "";
            }
            if (promo.value == "none") {
                document.getElementById('errorPromo').innerHTML = "* Veuillez entrer une promotion valide!";
                promo.focus();
                bool = false;
            } else {
                document.getElementById('errorPromo').innerHTML = "";
            }
            return bool;
        }
    </script>
    <form nom="formulaire" class="wrapper" action="index.php" method="post" onsubmit="return validateForm()">
        <input class="champ" type="text" name="nom" placeholder="Nom">
        <span class="error" id="errorNom"></span>
        <input class="champ" type="text" name="prenom" placeholder="Prenom">
        <span class="error" id="errorPrenom"></span>
        <select name="centre">
            <option value="none">Centre</option>
            {foreach $allCentre as $cent}
                <option value="{$cent['IdCentre']}">{$cent['Centre']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorCentre"></span>
        <select name="pilote">
            <option value="none">Pilote</option>
            {foreach $allPilote as $pil}
                <option value="{$pil['IdPilote']}">{$pil['NomPilote']} {$pil['PrenomPilote']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorCentre"></span>
        <select name="promo">
            <option value="none">Promotion</option>
            {foreach $allPromotion as $promo1}
                <option value="{$promo1['IdPromo']}">{$promo1['Promotion']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorCentre"></span>
        <button type="submit" id="ButAddEtud" name="addEtud" value="add">Ajouter</button>
    </form>
{/block}