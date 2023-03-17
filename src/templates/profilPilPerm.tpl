{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilPilPerm.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Le site qui te fera avancer</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom">
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom">
                <select name="centre" id="promotion">
                    <option value="Orléans" selected>Orléans</option>
                </select>
                <div>
                    <button id="boutonModif" type="submit" name="action" value="mod">Modifier</button>
                    <button id="boutonSuppr" type="submit" name="action" value="sup">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="wrapperStage">

    </div>
{{/block}}