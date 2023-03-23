{extends file="navbarPerm.tpl"}
{block name="include"}
    <link rel="stylesheet" href="./css/offre.css">
{/block}

{block name=content}
    <form class="offre" method="post" action="./index.php">
        <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
        <input type="text" name="nomOffre" value="{$nomOffre}">
        <select name="nomEntr">
            {foreach $nomEntr as $name}
                <option value="{$name['NomEntreprise']}">{$name['NomEntreprise']}</option>
            {/foreach}
        </select>
        <ul class="secteur">
            {foreach $secteur as $sec}
                <li>
                    {$sec["Secteur_Activite"]}
                </li>
            {/foreach}
        </ul>
        <h3>Promotion : </h3>
        <select name="promo1">
            <option value="">Promotion</option>
            {foreach $promotion as $promo1}
                {if $promoOffre[0]['Promotion'] == $promo1['Promotion']}
                    <option value="{$promo1['Promotion']}" selected>{$promo1['Promotion']}</option>
                {else}
                    <option value="{$promo1['Promotion']}">{$promo1['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <select name="promo2">
            <option value="">Promotion</option>
            {foreach $promotion as $promo2}
                {if $promoOffre[1]['Promotion'] == $promo2['Promotion']}
                    <option value="{$promo2['Promotion']}" selected>{$promo2['Promotion']}</option>
                {else}
                    <option value="{$promo2['Promotion']}">{$promo2['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <select name="promo3">
            <option value="">Promotion</option>
            {foreach $promotion as $promo3}
                {if $promoOffre[2]['Promotion'] == $promo3['Promotion']}
                    <option value="{$promo3['Promotion']}" selected>{$promo3['Promotion']}</option>
                {else}
                    <option value="{$promo3['Promotion']}">{$promo3['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <select name="promo4">
            <option value="">Promotion</option>
            {foreach $promotion as $promo4}
                {if $promoOffre[3]['Promotion'] == $promo4['Promotion']}
                    <option value="{$promo4['Promotion']}" selected>{$promo4['Promotion']}</option>
                {else}
                    <option value="{$promo4['Promotion']}">{$promo4['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <h3>Compétences : </h3>
        <select name="comp1">
            <option value="">Compétence</option>
            {foreach $competences as $comp1}
                {if $compOffre[0]['Compétences'] == $comp1['Compétences']}
                    <option value="{$comp1['Compétences']}" selected>{$comp1['Compétences']}</option>
                {else}
                    <option value="{$comp1['Compétences']}">{$comp1['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl1" value="{$compOffre[0]['niveau']}">
        <select name="comp2">
            <option value="">Compétence</option>
            {foreach $competences as $comp2}
                {if $compOffre[1]['Compétences'] == $comp2['Compétences']}
                    <option value="{$comp2['Compétences']}" selected>{$comp2['Compétences']}</option>
                {else}
                    <option value="{$comp2['Compétences']}">{$comp2['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl2" value="{$compOffre[1]['niveau']}">
        <select name="comp3">
            <option value="">Compétence</option>
            {foreach $competences as $comp3}
                {if $compOffre[2]['Compétences'] == $comp3['Compétences']}
                    <option value="{$comp3['Compétences']}" selected>{$comp3['Compétences']}</option>
                {else}
                    <option value="{$comp3['Compétences']}">{$comp3['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl3" value="{$compOffre[2]['niveau']}">
        <select name="comp4">
            <option value="">Compétence</option>
            {foreach $competences as $comp4}
                {if $compOffre[3]['Compétences'] == $comp4['Compétences']}
                    <option value="{$comp4['Compétences']}" selected>{$comp4['Compétences']}</option>
                {else}
                    <option value="{$comp4['Compétences']}">{$comp4['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl4" value="{$compOffre[3]['niveau']}">
        <select name="comp5">
            <option value="">Compétence</option>
            {foreach $competences as $comp5}
                {if $compOffre[4]['Compétences'] == $comp5['Compétences']}
                    <option value="{$comp5['Compétences']}" selected>{$comp5['Compétences']}</option>
                {else}
                    <option value="{$comp5['Compétences']}">{$comp5['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl5" value="{$compOffre[4]['niveau']}">
        <p class="addresse">
            {foreach from=$addresse item=$add key=i}
                adresse :
                {$add[0]},
                {$add[1]},
                {$add[3]},
                {$add[2]},
                {$add[4]}
            {/foreach}
        </p>
        <p class="duree">durée :
            <input type="text" name="duree" value="{$duree}">
            semaines
        </p>
        <p class="dateOffre">Date de début : </p>
        <input type="date" name="dateDebut" value="{$dateOffre}">
        <p class="dateEmission">Date d'emission : </p>
        <input type="date" name="dateEmi" value="{$dateEmission}">
        <p class="place">Nombre de place : </p>
        <input type="text" name="nbPlace" value="{$place}">
        <p class="paie">Rémunération : </p>
        <input type="text" name="remuneration" value="{$paie}">
        <p class="mail">email : </p>
        <input type="text" name="email" value="{$mail}"><br>
        <textarea name="descr" rows="20" cols="120">{$descr}</textarea>
        <button type="submit" name="action" value="modif">Modifier</button>
        <button type="submit" name="action" value="suppr">Supprimer</button>
    </form>
{/block}