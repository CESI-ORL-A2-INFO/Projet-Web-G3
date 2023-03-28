{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addPil.css">
{/block}

{block name=content}
    <form class="wrapper" accept="index.php" method="post">
        <input class="champ" type="text" name="nom" placeholder="Nom">
        <input class="champ" type="text" name="prenom" placeholder="Prenom">
        <select name="centre">
            <option value="none">Centre</option>
            {foreach $allCentre as $cent}
                <option value="{$cent['IdCentre']}">{$cent['Centre']}</option>
            {/foreach}
        </select>
        <select name="admin">
            <option value="0">N'est pas admin</option>
            <option value="1">Est admin</option>
        </select>
        <button id="ButAddPil" type="text" name="addPil" value="add">Ajouter</button>
{/block}