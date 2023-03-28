{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addEtud.css">
{/block}

{block name=content}
    <form class="wrapper" action="index.php" method="post">
        <input class="champ" type="text" name="nom" placeholder="Nom">
        <input class="champ" type="text" name="prenom" placeholder="Prenom">
        <select name="centre">
            <option value="none">Centre</option>
            {foreach $allCentre as $cent}
                <option value="{$cent['IdCentre']}">{$cent['Centre']}</option>
            {/foreach}
        </select>
        <select name="pilote">
            <option value="none">Pilote</option>
            {foreach $allPilote as $pil}
                <option value="{$pil['IdPilote']}">{$pil['NomPilote']} {$pil['PrenomPilote']}</option>
            {/foreach}
        </select>
        <select name="promo">
            <option value="none">Promotion</option>
            {foreach $allPromotion as $promo1}
                <option value="{$promo1['IdPromo']}">{$promo1['Promotion']}</option>
            {/foreach}
        </select>
        <button type="submit" id="ButAddEtud" name="addEtud" value="add">Ajouter</button>
    </form>
{/block}