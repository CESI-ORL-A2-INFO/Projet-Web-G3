{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEtudPerm.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>Profil</h1>
            <h3>Etudiant</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>

        <form name="formulaire "method="post" action="index.php" >
            <div class="form">

                <input class="champ" placeholder="Nom" id="name" type="text" name="nom" value="{$nom}">
                <span class="error" id="errorNom"></span>
                <input class="champ" placeholder="Prénom" id="Prenom" type="text" name="prenom" value="{$prenom}">
                <span class="error" id="errorPrenom"></span>
                <select class="champ abxd" name="centre">
                    <option value="none">Centre</option>
                    {foreach $allCentre as $cent}
                        {if $centre == $cent['Centre']}
                            <option value="{$cent['IdCentre']}" selected>{$cent['Centre']}</option>
                        {else}
                            <option value="{$cent['IdCentre']}">{$cent['Centre']}</option>
                        {/if}
                    {/foreach}
                </select>
                <span class="error" id="errorCentre"></span>
                <select class="champ abxd" name="pilote">
                    <option value="none">Pilote</option>
                    {foreach $allPilote as $pil}
                        {if $nomPilote == $pil['NomPilote']}
                            <option value="{$pil['IdPilote']}" selected>{$pil['NomPilote']} {$pil['PrenomPilote']}</option>
                        {else}
                            <option value="{$pil['IdPilote']}">{$pil['NomPilote']} {$pil['PrenomPilote']}</option>
                        {/if}
                    {/foreach}
                </select>
                <span class="error" id="errorPilote"></span>
                <select class="champ abxd" name="promo">
                    <option value="none">Promotion</option>
                    {foreach $allPromotion as $promo1}
                        {if $promo == $promo1['Promotion']}
                            <option value="{$promo1['Promotion']}" selected>{$promo1['Promotion']}</option>
                        {else}
                            <option value="{$promo1['Promotion']}">{$promo1['Promotion']}</option>
                        {/if}
                    {/foreach}
                </select>
                <span class="error" id="errorPromo"></span>
                <div class="buttons-container">
                    <button onclick="return validateForm()" type="submit" name="action" value="modif">Modifier</button>
                    <button type="submit" name="action" value="suppr">Supprimer</button>
                </div>
            </div>
        </form>
    </div>



    <div class="wrapperStage">
        <form class="cardContainer" method="get" action="./index.php">
            {foreach $card as $data key=$i}
                <button class="card" name="offre" value="{$data['IdOffre']}">
                    <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                    <h3 class="title">{$data['nomOffre']}</h3>
                    <h4 class="nomEntreprise">{$data['nomEntr'][0]['NomEntreprise']}<br>secteur :
                        {foreach $data['secteur'] as $sect}
                            {$sect['Secteur_Activite']} /
                        {/foreach}
                    </h4>
                    <p class="debut">Date de début : {$data['dateDebut']}</p>
                    <p class="duree">Durée : {$data['duree']} semaines</p>
                    <p class="ville">Ville : {$data['ville'][0]['Ville']}</p>
                    <p class="statut">Statut : {$data['statut'][0]['statut']}</p>
                </button>
            {/foreach}
        </form>
    </div>
    <script>
    function validateForm(){
        var nom = document.forms['formulaire']['nom'];
        var prenom = document.forms['formulaire']['prenom'];
        var centre = document.forms['formulaire']['centre'];
        var pilote = document.forms['formulaire']['pilote'];
        var promo = document.forms['formulaire']['promo'];
        var bool = true;

        if (nom.value=""){
            document.getElementById('errorNom').innerHTML = "*Veuillez entrer un nom valide!"
            nom.focus();
            bool = false;
        }else{
            document.getElementById('errorNom').innerHTML = "";
        }

        if (prenom.value=""){
            document.getElementById('errorPrenom').innerHTML = "*Veuillez entrer un prenom valide!"
            prenom.focus();
            bool = false;
        }else{
            document.getElementById('errorPrenom').innerHTML = "";
        }

        if (centre.value="none"){
            document.getElementById('errorCentre').innerHTML = "*Veuillez entrer un centre valide!"
            centre.focus();
            bool = false;
        }else{
            document.getElementById('errorCentre').innerHTML = "";
        }

        if (pilote.value="none"){
            document.getElementById('errorPilote').innerHTML = "*Veuillez entrer un pilote valide!"
            pilote.focus();
            bool = false;
        }else{
            document.getElementById('errorPilote').innerHTML = "";
        }

        if (promo.value="none"){
            document.getElementById('errorPromo').innerHTML = "*Veuillez entrer une promotion valide!"
            promo.focus();
            bool = false;
        }else{
            document.getElementById('errorPromo').innerHTML = "";
        }
    }
    </script>
{/block}