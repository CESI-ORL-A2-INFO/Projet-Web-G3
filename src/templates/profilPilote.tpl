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
        <div class="form">
            <input class="champ" id="name" type="text" value="" placeholder="{$nom}" readonly>
            <input class="champ" id="Prenom" type="text" value="" placeholder="{$prenom}" readonly>
            <input class="champ" id="Centre" type="text" value="" placeholder="{$centre}" readonly>
        </div>
    </div>
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true">Déconnexion</button>
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
{{/block}}