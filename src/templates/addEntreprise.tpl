{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addEntr.css">
{/block}

{block name=content}
    <form name="formulaire" action="index.php" method="post" class="info" onsubmit="return validateForm()">
        <p>Nom de l'entreprise : </p>
        <input class="champ" name="nomEntr" value="" placeholder="Nom de l'entreprise">
        <span class="error" id="errorNomEntr"></span>
        <p class="adresse">Adresse : </p>
        <input class="champ" name="numRue" value="" placeholder="Numéro de rue">
        <span class="error" id="errorNumRue"></span>
        <input class="champ" name="nomRue" value="" placeholder="Nom de rue">
        <span class="error" id="errorNomRue"></span>
        <input class="champ" placeholder="Code Postale" id="cp" name="cp" value="" placeholder="Code Postal">
        <span class="error" id="errorCP"></span>
        <select class="champ" placeholder="Ville" id="ville" name="ville">
            <option value="none">Ville</option>
        </select>
        <span class="error" id="errorVille"></span>
        <input class="champ" name="pays" value="" placeholder="Pays">
        <span class="error" id="errorPays"></span>
        <p>Secteur : </p>
        <select class="secteur" name="secteur1">
            <option value="none">Secteur</option>
                {foreach $secteur as $sect1}
                    <option value="{$sect1['Secteur_Activite']}">{$sect1['Secteur_Activite']}</option>
                {/foreach}
        </select>
        <select class="secteur" name="secteur2">
            <option value="none">Secteur</option>
                {foreach $secteur as $sect2}
            <option value="{$sect2['Secteur_Activite']}">{$sect2['Secteur_Activite']}</option>
                {/foreach}
        </select>
        <select class="secteur" name="secteur3">
            <option value="none">Secteur</option>
                {foreach $secteur as $sect3}
                    <option value="{$sect3['Secteur_Activite']}">{$sect3['Secteur_Activite']}</option>
                {/foreach}
        </select>
        <span class="error" id="errorSecteur"></span>
        <p>Nombre de stagiaire : </p>
        <input class="champ" name="nbStagiaire" value="" id="nbstagiaire" placeholder="Nombre de stagiaires">
        <span class="error" id="errorstg"></span>
        <button type="submit" id="ButAddEntr" name="actionEntr" value="add">Ajouter une entreprise</button>
    </form>
    <script>
    function validateForm() {
        var nomEntr = document.forms["formulaire"]["nomEntr"];
        var numRue = document.forms["formulaire"]["numRue"]
        var nomRue = document.forms["formulaire"]["nomRue"]
        var ville = document.forms["formulaire"]["ville"]
        var CP = document.forms["formulaire"]["cp"]
        var pays = document.forms["formulaire"]["pays"]
        var stg = document.forms["formulaire"]["nbStagiaire"]
        var secteur = document.forms["formulaire"]["secteur1"]
        var bool = true;

        if (nomEntr.value == "") {
            document.getElementById('errorNomEntr').innerHTML = "*Veuillez entrer un nom valide!";
            nomEntr.focus();
            bool = false;
        } else {
            document.getElementById('errorNomEntr').innerHTML = "";
        }
        if (numRue.value == "") {
            document.getElementById('errorNumRue').innerHTML = "*Veuillez entrer un numéro de rue valide!";
            numRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNumRue').innerHTML = "";
        }
        if (nomRue.value == "") {
            document.getElementById('errorNomRue').innerHTML = "*Veuillez entrer un nom de rue valide!";
            nomRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNomRue').innerHTML = "";
        }
        if (ville.value == "") {
            document.getElementById('errorVille').innerHTML = "*Veuillez entrer une ville valide!";
            ville.focus();
            bool = false;
        } else {
            document.getElementById('errorVille').innerHTML = "";
        }
        if (CP.value == "") {
            document.getElementById('errorCP').innerHTML = "*Veuillez entrer un code postale valide!";
            CP.focus();
            bool = false;
        } else {
            document.getElementById('errorCP').innerHTML = "";
        }
        if (pays.value == "") {
            document.getElementById('errorPays').innerHTML = "*Veuillez entrer un pays valide!";
            pays.focus();
            bool = false;
        } else {
            document.getElementById('errorPays').innerHTML = "";
        }
        if (stg.value == "") {
            document.getElementById('errorstg').innerHTML = "*Veuillez entrer un nombre de stagiaire valide!";
            nbstagiaire.focus()
            bool = false;
        } else {
            document.getElementById('errorstg').innerHTML = "";
        }
        if (secteur.value == "none") {
            document.getElementById('errorSecteur').innerHTML = "Veuillez entrer un secteur!";
            secteur.focus()
            bool = false;
        } else {
            document.getElementById('errorSecteur').innerHTML = "";
        }
        return bool;
    }
    </script>
    <script src="./js/CP.js"></script>

{/block}