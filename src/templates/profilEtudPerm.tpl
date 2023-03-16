{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profil.css">
{/block}

{block name=content}
    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Le site qui te fera avancer</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x "></i>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom">
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom">
                <input class="champ" id="CampusCESI" type="text" placeholder="Campus CESI">
                <input class="champ" id="Tuteur" type="text" placeholder="Nom Tuteur">
                <label>
                    <select id="promotion">
                        <option value="CPIA2">CPI A2</option>
                        <option value="FISEA3">FISE A3</option>
                        <option value="FISEA4">FISE A4</option>
                        <option value="FISEA5">FISE A5</option>
                        <option value="FISAA3">FISA A3</option>
                        <option value="FISEA4">FISA A4</option>
                        <option value="FISAA5">FISA A5</option>
                    </select>
                </label>
                <div class="radio">
                    <input type="radio" name="statut" value="libre" style="margin-bottom: 2%;text-align: center" />
                    <label for="statut">Libre</label>
                    <br>
                    <input type="radio" name="statut2" value="recherche" style="margin-bottom: 2%" />
                    <label for="statut2">En recherche</label>
                    <br>
                    <input type="radio" name="statut3" value="trouve" style="margin-bottom: 2%" />
                    <label for="statut3">Stage trouvé</label>
                </div>
                <div>
                    <button id="boutonModif" type="submit" name="action" value="mod">Modifier</button>
                    <button id="boutonSuppr" type="submit" name="action" value="sup">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
{{/block}}