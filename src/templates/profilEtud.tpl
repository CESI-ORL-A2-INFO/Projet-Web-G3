{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEtud.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Etudiant</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <div>
                <input class="champ" id="name" type="text" value="" placeholder="Nom : {$nom}" readonly>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prénom : {$prenom}" readonly>
                <input class="champ" id="centre" type="text" value="" placeholder="Centre : {$centre}" readonly>
                <input class="champ" id="pilote" type="text" value="" placeholder="Pilote : {$nomPilote} {$prenomPilote}" readonly>
                <input class="champ" id="last" type="text" value="" placeholder="Promotion : {$promo}" readonly>        
            </div>
        </div>
    </div>
    <div class="wrapperStage">
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true">Déconnexion</button>
    </form>

    </div>
{{/block}}