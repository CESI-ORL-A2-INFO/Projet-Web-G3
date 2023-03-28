{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addPil.css">
{/block}

{block name=content}
    <script>
        function validateForm() {
            var nom = document.forms['formulaire']['nom']
            var prenom = document.forms['formulaire']['prenom']
            var centre = document.forms['formulaire']['centre']
            var admin = document.forms['formulaire']['admin']
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
            return bool;
        }
    </script>
    <form class="wrapper" name="formulaire" accept="index.php" method="post" onsubmit="return validateForm()">
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
        <select name="admin">
            <option value="0">N'est pas admin</option>
            <option value="1">Est admin</option>
        </select>
        <span class="error" id="errorAdmin"></span>
        <button id="ButAddPil" type="text" name="addPil" value="add">Ajouter</button>
{/block}