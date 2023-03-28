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

        <form method="Post" action="index.php">
            <div class="form">

                <input class="champ" placeholder="Nom" id="name" type="text" name="nom" value="{$nom}">
                <input class="champ" placeholder="Prénom" id="Prenom" type="text" name="prenom" value="{$prenom}">
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
                <div class="buttons-container">
                    <button type="submit" name="actionPil" value="modif">Modifier</button>
                    <button type="submit" name="actionPil" value="suppr">Supprimer</button>
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

{{/block}}