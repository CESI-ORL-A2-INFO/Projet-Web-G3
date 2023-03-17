{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEtud.css">
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
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom" readonly>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom" readonly>
                <select name="centre" id="promotion" disabled>
                    <option value="Orléans" selected>Orléans</option>
                </select>
                <select name="pilote" id="promotion" disabled>
                    <option value="Laporte--Chabasse" selected>Nom du pilote</option>
                </select>
                <label>
                     <select name="promo" id="promotion" disabled> <!-- Utiliser une array sur toutes les options avec null ou 
                     selected pour choisir l'option de l'étudiant -->
                        <option value="CPIA2">CPI A2</option>
                        <option value="FISEA3">FISE A3</option>
                        <option value="FISEA4" selected>FISE A4</option>
                        <option value="FISEA5">FISE A5</option>
                        <option value="FISAA3">FISA A3</option>
                        <option value="FISEA4">FISA A4</option>
                        <option value="FISAA5">FISA A5</option>
                    </select>
                </label>
                <div class="radio"> <!-- Pareil que pour le select mais avec null ou checked -->
                    <input type="radio" name="statut" id="statut" value="libre" style="margin-bottom: 2%;text-align: center" disabled checked/>
                    <label for="statut">Libre</label>
                    <br>
                    <input type="radio" name="statut" id="statut2" value="recherche" style="margin-bottom: 2%" disabled/>
                    <label for="statut2">En recherche</label>
                    <br>
                    <input type="radio" name="statut" id="statut3" value="trouve" style="margin-bottom: 2%" disabled/>
                    <label for="statut3">Stage trouvé</label>
                </div>
            </form>
        </div>
    </div>
    <div class="wrapperStage">

    </div>
{{/block}}