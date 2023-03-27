{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addOffre.css">
{/block}

{block name=content}
    <script>
    function validateForm() {
        var nomOffre = document.forms["formulaire"]["nomOffre"];
        var duree = document.forms["formulaire"]["duree"]
        var NbPlace = document.forms["formulaire"]["nbPlace"]
        var ville = document.forms["formulaire"]["ville"]
        var CP = document.forms["formulaire"]["cp"]
        var pays = document.forms["formulaire"]["pays"]
        var bool = true;

        if (nomOffre.value == "") {
            document.getElementById('errorNomOffre').innerHTML = "* Veuillez entrez un nom valide!";
            nomOffre.focus();
            bool = false;
        } else {
            document.getElementById('errorNomOffre').innerHTML = "";
        }
        if (duree.value == "") {
            document.getElementById('errorDuree').innerHTML = "* Veuillez entrez une durée valide!";
            duree.focus();
            bool = false;
        } else {
            document.getElementById('errorDuree').innerHTML = "";
        }
        if (NbPlace.value == "") {
            document.getElementById('errorNbPlace').innerHTML = "* Veuillez entrez un nombre de stagiaire valide!";
            nbPlace.focus();
            bool = false;
        } else {
            document.getElementById('errorNbPlace').innerHTML = "";
        }
        if (ville.value == "") {
            document.getElementById('errorVille').innerHTML = "* Veuillez entrez une ville valide!";
            ville.focus();
            bool = false;
        } else {
            document.getElementById('errorVille').innerHTML = "";
        }
        if (CP.value == "") {
            document.getElementById('errorCP').innerHTML = "* Veuillez entrez un code postale valide!";
            CP.focus();
            bool = false;
        } else {
            document.getElementById('errorCP').innerHTML = "";
        }
        if (pays.value == "") {
            document.getElementById('errorPays').innerHTML = "* Veuillez entrez un pays valide!";
            pays.focus();
            bool = false;
        } else {
            document.getElementById('errorPays').innerHTML = "";
        }
        return bool;
    }
    </script>
    <form class="wrapper" name="formulaire" action="index.php" method="post" onsubmit="return validateForm()">
        <h3>Informations : </h3>
        <input type="text" class="champ" name="nomOffre" placeholder="Nom de l'offre">
        <span class="error" id="errorNomOffre"></span>
        <select name="nomEntr">
            {foreach $nomEntr as $name}
                <option value="{$name['NomEntreprise']}">{$name['NomEntreprise']}</option>
            {/foreach}
        </select>
        <input type="text" name="duree" class="champ" placeholder="Durée du stage">
        <span class="error" id="errorDuree"></span>
        </br>
        <label for="dateDeb">Date de début : </label>
        <input id="dateDeb" type="date" class="champ" name="dateDebut" placeholder="Date de début du stage">
        </br>
        <label for="dateEmi">Date émission : </label>
        <input id="dateEmi" type="date" class="champ" name="dateEmi" placeholder="Date d'émission du stage">
        <input type="text" name="nbPlace" class="champ" placeholder="Nombre de place pour ce stage">
        <span class="error" id="errorNbPlace"></span>
        <input type="text" name="remuneration" class="champ" placeholder="Rémunération de l'offre">
        <input type="text" name="email" class="champ" placeholder="Email de contact">
        <h3>Promotion : </h3>
        <select name="promo1" >
            <option value="">Promotion</option>
            {foreach $promotion as $promo1}
                <option value="{$promo1['Promotion']}">{$promo1['Promotion']}</option>
            {/foreach}
        </select>
        <select name="promo2">
            <option value="">Promotion</option>
            {foreach $promotion as $promo2}
                <option value="{$promo2['Promotion']}">{$promo2['Promotion']}</option>
            {/foreach}
        </select>
        <select name="promo3">
            <option value="">Promotion</option>
            {foreach $promotion as $promo3}
                <option value="{$promo3['Promotion']}">{$promo3['Promotion']}</option>
            {/foreach}
        </select>
        <select name="promo4">
            <option value="">Promotion</option>
            {foreach $promotion as $promo4}
                <option value="{$promo4['Promotion']}">{$promo4['Promotion']}</option>
            {/foreach}
        </select>
        <h3>Compétences : </h3>
        <select name="comp1">
            <option value="">Compétence</option>
            {foreach $competences as $comp1}
                <option value="{$comp1['Compétences']}">{$comp1['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl1" class="champ" value="" placeholder="Niveau de la compétence 1">
        <select name="comp2">
            <option value="">Compétence</option>
            {foreach $competences as $comp2}
                <option value="{$comp2['Compétences']}">{$comp2['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl2" class="champ" value="" placeholder="Niveau de la compétence 2">
        <select name="comp3">
            <option value="">Compétence</option>
            {foreach $competences as $comp3}
                <option value="{$comp3['Compétences']}">{$comp3['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl3" class="champ" value="" placeholder="Niveau de la compétence 3">
        <select name="comp4">
            <option value="">Compétence</option>
            {foreach $competences as $comp4}
                <option value="{$comp4['Compétences']}">{$comp4['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl4" class="champ" value="" placeholder="Niveau de la compétence 4">
        <select name="comp5">
            <option value="">Compétence</option>
            {foreach $competences as $comp5}
                <option value="{$comp5['Compétences']}">{$comp5['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl5" class="champ" value="" placeholder="Niveau de la compétence 5">
        <br>
        <input type="text" id="descr" name="descr" placeholder="Description de l'offre">
        <button type="submit" id="ButAddOffre" name="addOffre" value="true">Ajouter</button>
    </form>
{/block}