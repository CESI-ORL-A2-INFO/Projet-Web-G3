{extends file='navbar.tpl'}
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
            <form action="index.php" method="post">
                <div>
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom" readonly>
                </div>
                <div>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom" readonly>
                </div>
                <input class="champ" id="Centre" type="text" value="" placeholder="Orléans" readonly>
            </form>
        </div>
    </div>
    <div class="wrapperPromo">

    </div>
{{/block}}