{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/search.css">
{/block}

{block name=content}
    <form class="cardContainer" method="get" action="./index.php">
        {foreach $card as $data key=$i}
            <button class="card" name="offre" value="">
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
                <p class="ville">Ville : {$data['ville'][$i]['Ville']}</p>
                <p class="competence">Compétences :
                    {foreach $data['competences'] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
                <p class="descr">{$data['descr']}</p>
            </button>
        {/foreach}
    </form>
    <a class="firstPage" href="./index.php?p=search&current_page=1"><<</a>
    {if $current_page != 1}
        <a class="pagePrec" href="./index.php?p=search&current_page={$current_page-1}"><</a>
    {/if}
    {if $current_page != $lastPage}
        <a class="pageSuiv" href="./index.php?p=search&current_page={$current_page+1}">></a>
    {/if}
    <a class="lastPage" href="./index.php?p=search&current_page={$lastPage}">>></a>
{/block}