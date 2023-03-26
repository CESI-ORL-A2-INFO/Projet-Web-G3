{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilPilote.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h1>Tuteur</h1>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <form class="form" action="index.php" method="get">
            <input class="champ" id="name" type="text" name="nom" value="{$nom}">
            <input class="champ" id="Prenom" type="text" name="prenom" value="{$prenom}">
            <select name="centre">
                    {foreach $allCentre as $cent}
                        {if $centre == $cent['Centre']}
                            <option value="{$cent['IdCentre']}" selected>{$cent['Centre']}</option>
                        {else}
                            <option value="{$cent['IdCentre']}">{$cent['Centre']}</option>
                        {/if}
                    {/foreach}
                </select>
            <button type="submit" name="actionPil" value="modif">Modifier</button>
            <button type="submit" name="actionPil" value="suppr">Supprimer</button>
        </form>
    </div>
    {if $user == $idPil}
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true">Déconnexion</button>
    </form>
    
        <form method="get" action="index.php" id="formPromo">
            <select name="promoAdd" id="promo">
                <option value="none">Promotion</option>
                {foreach $pasPromo as $pPromo}
                    <option value="{$pPromo['IdPromo']}">{$pPromo['Promotion']}</option>
                {/foreach}
            </select>
            <button name="addPromo" value="true">Ajouter promotion</button>
        </form>
        <form class="wrapperPromo" method="get" action="index.php">
            {foreach $promotion as $promo}
                <button type="submit" name="promo" value="{$promo['IdPromo']}">
                    <h2 class="promotion">
                        {$promo['Promotion']}
                    </h2>
                </button>
            {/foreach}
        </form>
    {else}

    {/if}
{/block}

{block name="script"}
    {if $user == $idPil}
        <script>
            const form = document.querySelector("#formPromo");
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                var val = document.getElementById("promo").value;
                if (val == "none") {
                    alert("Choisissez une promotion à ajouter");
                    return;
                }
                form.submit();
            })
        </script>
    {/if}
{/block}