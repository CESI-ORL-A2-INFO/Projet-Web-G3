{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilPilote.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>Profil Tuteur</h1>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <input class="champ" id="name" type="text" value="" placeholder="{$nom}" readonly>
            <input class="champ" id="Prenom" type="text" value="" placeholder="{$prenom}" readonly>
            <input class="champ" id="Centre" type="text" value="" placeholder="{$centre}" readonly>
        </div>
    </div>


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
    <form class="wrapperPromo" method="get" action="index.php">
        {foreach $promotion as $promo}
            <button type="submit" name="promo" value="{$promo['IdPromo']}">
                <h2 class="promotion">
                    {$promo['Promotion']}
                </h2>
            </button>
        {/foreach}
    </form>
{/block}

{block name="script"}
    <script>
        const form = document.querySelector("#formPromo");
        form.addEventListener("submit", function(event) {
            event.preventDefault();
            var val = document.getElementById("promo").value;
            if (val == "none"){
                alert("Choisissez une promotion à ajouter");
                return;
            }
            form.submit();
        })
    </script>
{/block}    