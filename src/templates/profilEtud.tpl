{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEtud.css">
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
        <div class="form">
            <div>
                <input class="champ" id="name" type="text" value="" placeholder="Nom : {$nom}" readonly>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prénom : {$prenom}" readonly>
                <input class="champ" id="centre1" type="text" value="" placeholder="Centre : {$centre}" readonly>
                <input class="champ" id="pilote" type="text" value="" placeholder="Pilote : {$nomPilote} {$prenomPilote}"
                    readonly>
                <input class="champ" id="last" type="text" value="" placeholder="Promotion : {$promo}" readonly>
            </div>
        </div>
    </div>
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true" class="btn-deconnexion">Déconnexion</button>
    </form>
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