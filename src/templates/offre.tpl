{extends file="navbar.tpl"}
{block name="include"}
    <link rel="stylesheet" href="./css/offre.css">
{/block}

{block name=content}
    <div class="offre">
        <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
        <a href="./index.php?" class="icons"><i class="fa-solid fa-bookmark fa-2x"></i></a>
        <h1 class="nomOffre">{$nomOffre}</h1>
        <a href="./index.php?p=profilEntr&entr={$nomEntr}" class="nomEntr">
            <h3 class="nomEntr">{$nomEntr}</h3>
        </a>
        <ul class="secteur">
            {foreach $secteur as $sec}
                <li>
                    {$sec["Secteur_Activite"]}
                </li>
            {/foreach}
        </ul>
        <ul class="promo">
            {foreach $promo as $prom}
                <li>
                    {$prom["Promotion"]}
                </li>
            {/foreach}
        </ul>
        <p class="addresse">
            {foreach from=$addresse item=$add key=i}
                adresse : {$add[0]} {$add[1]} {$add[2]} {$add[3]} {$add[4]}
            {/foreach}

        </p>
        <p class="duree">durée : {$duree} semaines</p>
        <ul class="competence">
            {foreach $competence as $comp}
                <li>
                    {$comp[0]} : {$comp[1]},
                </li>
            {/foreach}
        </ul>
        <p class="dateOffre">Date de début : {$dateOffre}</p>
        <p class="dateEmission">Date d'emission : {$dateEmission}</p>
        <p class="place">Nombre de place : {$place}</p>
        <p class="paie">Rémunération : {$paie}</p>
        <p class="mail">email : {$mail}</p>
        <p class="descr">{$descr}</p>
        <form action="./index.php" method="post">
            <select class="statut" name="statut">
                {foreach $statut as $stat key=$k}
                    {if $stat[0] == $currentStatut}
                        <option value="{$k}" selected>{$stat[0]}</option>
                    {else}
                        <option value="{$k}">{$stat[0]}</option>
                    {/if}
                {/foreach}
            </select>
            <button type="submit">Changer le statut</button>
        </form>
    </div>
{/block}