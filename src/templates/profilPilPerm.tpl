{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilPilPerm.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>    Profil Tuteur</h1>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <input class="champ" placeholder="Nom" id="name" type="text" name="nom" value="{$nom}">
            <input class="champ" placeholder="Prénom" id="Prenom" type="text" name="prenom" value="{$prenom}">
            <select class="champ abxd" name="centre">
                {foreach $allCentre as $cent}
                    {if $centre == $cent['Centre']}
                        <option value="{$cent['IdCentre']}" selected>{$cent['Centre']}</option>
                    {else}
                        <option value="{$cent['IdCentre']}">{$cent['Centre']}</option>
                    {/if}
                {/foreach}
            </select>
            <div class="buttons-container">
            <button type="submit" name="actionPil" value="modif">Modifier</button>
            <button type="submit" name="actionPil" value="suppr">Supprimer</button>
        </div>
    </div>


        
    </div>
    {if $user == $idPil}
       <div class="button-container">
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true" class="btn-deconnexion">Déconnexion</button>
    </div>
    </form>
    <div class="select-container">
    <form method="get" action="index.php" id="formPromo">
        <select name="promoAdd" id="promo">
            <option value="none">Promotion</option>
            {foreach $pasPromo as $pPromo}
                <option value="{$pPromo['IdPromo']}">{$pPromo['Promotion']}</option>
            {/foreach}
        </select>
        <button name="addPromo" value="true">Ajouter promotion</button>
    </form>
    </div>


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