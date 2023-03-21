{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/search.css">
{/block}

{block name=content}
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
                <p class="ville">Ville : {$data['ville'][$i]['Ville']}</p>
            </button>
        {/foreach}
    </form>
{/block}