{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEntrPerm.css">
{/block}

{block name=content}
    <div class="info">

        <form name="formulaire" action="index.php" method="post" >
            <p>Nom de l'entreprise : </p>
                <input class="champ" name="nomEntr" value="{$infoEntr['NomEntreprise']}">
                <span class="error" id="errorNomEntr"></span>
                <p class="adresse">Adresse : </p>
                <input class="champ" name="numRue" value="{$infoEntr['NumRue']}">
                <span class="error" id="errorNumRue"></span>
                <input class="champ" name="nomRue" value="{$infoEntr['NomRue']}">
                <span class="error" id="errorNomRue"></span>
                <input class="champ" id="cp" name="cp" value="{$infoEntr['CodePostale']}" placeholder="Code Postal">
                <span class="error" id="errorCP"></span>
                <select class="champ" id="ville" name="ville">
                    <option value="none">{$infoEntr['Ville']}</option>
                </select>
                <span class="error" id="errorVille"></span>
                <input class="champ" name="pays" value="{$infoEntr['Pays']}" placeholder="Pays">
                <span class="error" id="errorPays"></span>
                <p>Secteur : </p>
                <select class="secteur" name="secteur1">
                    <option value="none">Secteur</option>
                    {foreach $secteur as $sect1}

                    {if $card[0]['secteur'][0]['Secteur_Activite'] == $sect1['Secteur_Activite']}
                            <option value="{$sect1['Secteur_Activite']}" selected>{$sect1['Secteur_Activite']}</option>

                    {else}
                            <option value="{$sect1['Secteur_Activite']}">{$sect1['Secteur_Activite']}</option>

                    {/if}

                {/foreach}
                </select>
                <select class="secteur" name="secteur2">
                    <option value="none">Secteur</option>

                {foreach $secteur as $sect2}

                    {if $card[0]['secteur'][1]['Secteur_Activite'] == $sect2['Secteur_Activite']}
                            <option value="{$sect2['Secteur_Activite']}" selected>{$sect2['Secteur_Activite']}</option>

                    {else}
                            <option value="{$sect2['Secteur_Activite']}">{$sect2['Secteur_Activite']}</option>

                    {/if}

                {/foreach}
                </select>
                <select class="secteur" name="secteur3">
                    <option value="none">Secteur</option>

                {foreach $secteur as $sect3}

                    {if $card[0]['secteur'][2]['Secteur_Activite'] == $sect3['Secteur_Activite']}
                            <option value="{$sect3['Secteur_Activite']}" selected>{$sect3['Secteur_Activite']}</option>

                    {else}
                            <option value="{$sect3['Secteur_Activite']}">{$sect3['Secteur_Activite']}</option>

                    {/if}

                {/foreach}

                </select>
                <span class="error" id="errorSecteur"></span>
                <p>Nombre de stagiaire : </p>
                <input class="champ" type="text" name="nbStagiaire" value="{$infoEntr['NbreStagiaire']}">
                <span class="error" id="errorStg"></span>
                <button onclick="return validateForm()" class="btn-modif" type="submit" name="actionEntr" value="modif">Modifier l'entreprise</button>
                <button class="btn-suppr" type="submit" name="actionEntr" value="suppr">Supprimer l'entreprise</button>
    </form>
    <form class="cardContainer" method="get" action="./index.php">
        {foreach $card as $data key=$i}
        <button class="card" name="offre" value="{$data['IdOffre']}">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h3 class="title">{$data['nomOffre']}</h3>
            <p class="debut">Date de début : {$data['dateDebut']}</p>
            <p class="duree">Durée : {$data['duree']} semaines</p>
            <p class="ville">Ville : {$data['ville'][0]['Ville']}</p>
        </button>
        {/foreach}
    </form>
    <form name="commentaire" class="comUser" action="index.php" method="post" onsubmit="return validateFormCom()">
        {if $comUser == null}
        <select class="noteUser" name="note">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <textarea class="com" type="text" name="commentaire"></textarea>
        <button class="add" type="submit" name="action" value="add">Ajouter</button>
        {else}
        <select class="noteUser" name="note">
            {if $comUser['confiance'] == 0}
            <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            {elseif $comUser['confiance'] == 1}
            <option value="0">0</option>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            {elseif $comUser['confiance'] == 2}
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            {elseif $comUser['confiance'] == 3}
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            {elseif $comUser['confiance'] == 4}
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4" selected>4</option>
            <option value="5">5</option>
            {elseif $comUser['confiance'] == 5}
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
            {/if}
        </select>
        <textarea class="com" name="com" value="" type="text" name="commentaire">{$comUser['commentaire']}</textarea>
        <span class="error" id="errorCom"></span>
        <button class="upd" type="submit" name="action" value="upd">Modifier</button>
        <button class="del" type="submit" name="action" value="del">Delete</button>
        {/if}
    </form>
    {foreach $comPil as $pil}
    <h3 class="nomPil">{$pil['NomPilote']} {$pil['PrenomPilote']}</h3>
    <p class="note">{$pil['confiance']}</p>
    <p class="comPil">{$pil['commentaire']}</p>
    {/foreach}
    {foreach $comEtud as $etud}
    <h3 class="nomEtud">{$etud['NomEtudiant']} {$etud['PrenomEtudiant']}</h3>
    <p class="note">{$etud['note']}</p>
    <p class="comEtud">{$etud['commentaire']}</p>
        {/foreach}

    </div>
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
            document.getElementById('errorNomEntr').innerHTML = "* Veuillez entrer un nom valide!";
            nomEntr.focus();
            bool = false;
        } else {
            document.getElementById('errorNomEntr').innerHTML = "";
        }
        if (numRue.value == "") {
            document.getElementById('errorNumRue').innerHTML = "* Veuillez entrer un numéro de rue valide!";
            numRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNumRue').innerHTML = "";
        }
        if (nomRue.value == "") {
            document.getElementById('errorNomRue').innerHTML = "* Veuillez entrer un nom de rue valide!";
            nomRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNomRue').innerHTML = "";
        }
        if (ville.value == "") {
            document.getElementById('errorVille').innerHTML = "* Veuillez entrer une ville valide!";
            ville.focus();
            bool = false;
        } else {
            document.getElementById('errorVille').innerHTML = "";
        }
        if (CP.value == "") {
            document.getElementById('errorCP').innerHTML = "* Veuillez entrer un code postale valide!";
            CP.focus();
            bool = false;
        } else {
            document.getElementById('errorCP').innerHTML = "";
        }
        if (pays.value == "") {
            document.getElementById('errorPays').innerHTML = "* Veuillez entrer un pays valide!";
            pays.focus();
            bool = false;
        } else {
            document.getElementById('errorPays').innerHTML = "";
        }
        if (stg.value == "") {
            document.getElementById('errorStg').innerHTML = "Veuillez entrer un nombre de stagiaire valide!";
            nbstagiaire.focus()
            bool = false;
        } else {
            document.getElementById('errorStg').innerHTML = "";
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
    function validateFormCom(){
        desc = document.forms['commentaire']['com']
        var bool = true;
        
        if(desc.value = ""){
            document.getElementById('errorCom').innerHTML = "Veuillez entrer un commentaire!";
            desc.focus;
            bool = false;
        }else{
            document.getElementById('errorCom').innerHTML =""        
        }
    }
    </script>
    <script src="./js/CP.js"></script>
{/block}