{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/search.css">
{/block}

{block name=content}
    <form class="cardContainer" method="get" action="./index.php">
        {foreach $card as $data key=$i}
            <button class="card" name="offre" value="">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[]}<br>secteur :
                    {foreach $secteur[] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}
                </h4>
                <p class="duree">Durée : {$duree[]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
                <p class="descr">{descr[]}</p>
            </button>
        {/foreach}
    </form>
{/block}