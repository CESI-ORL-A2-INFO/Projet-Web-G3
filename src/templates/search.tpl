{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/search.css">
{/block}

{block name=content}
    <div class="formfiltre">
        <form action="index.php?" method="get" id="formfiltre">
            <input type="search" id="bar" value="{$content}"  name="search" placeholder="Recherche...">

            <input type="text" id="filtre" name="searchfiltre" placeholder="Filtre...">
            <select id="typefiltre" name="filtre">
                <option value="def">Choississez une option</option>
                <option value="offre">Offre</option>
                <option value="entreprise">Entreprise</option>
                <option value="promotion">Promotion</option>
                <option value="comp">Compétences</option>
                <option value="secteur">Secteur d'activité</option>
        </select>
        <button id="butbar" name="p" value="search">Recherche</button>
    </form>
</div>

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
        <p class="promo">Promo :
            {foreach $data['promo'] as $prom}
            {$prom['Promotion']} /
            {/foreach}
        </p>
        <p class="ville">Ville : {$data['ville'][0]['Ville']}</p>
        <p class="competence">Compétences :
            {foreach $data['competences'] as $comp}
            {$comp['Compétences']} - {$comp['niveau']} /
            {/foreach}</p>
        <p class="descr">{$data['descr']}</p>
        </button>
    {/foreach}
</form>
<a class="firstPage" href="./index.php?p=search&current_page=1">
    <<< /a>
        {if $current_page != 1}
            <a class="pagePrec" href="./index.php?p=search&current_page={$current_page-1}">
                << /a>
                {/if}
                {if $current_page != $lastPage}
                    <a class="pageSuiv" href="./index.php?p=search&current_page={$current_page+1}">></a>
                {/if}
                <a class="lastPage" href="./index.php?p=search&current_page={$lastPage}">>></a>
{/block}