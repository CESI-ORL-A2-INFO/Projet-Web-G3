{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addOffre.css">
{/block}

{block name=content}
    <script>
        function validateForm() {
            var nomOffre = document.forms["formulaire"]["nomOffre"];
            var duree = document.forms["formulaire"]["duree"];
            var NbPlace = document.forms["formulaire"]["nbPlace"];
            var remuneration = document.forms["formulaire"]["remuneration"];
            var email = document.forms["formulaire"]["email"];
            var promo1 = document.forms["formulaire"]["promo1"];
            var comp1 = document.forms["formulaire"]["comp1"];
            var bool = true;

            if (nomOffre.value == "") {
                document.getElementById('errorNomOffre').innerHTML = "* Veuillez entrer un nom valide!";
                nomOffre.focus();
                bool = false;
            } else {
                document.getElementById('errorNomOffre').innerHTML = "";
            }
            if (duree.value == "") {
                document.getElementById('errorDuree').innerHTML = "* Veuillez entrer une durée valide!";
                duree.focus();
                bool = false;
            } else {
                document.getElementById('errorDuree').innerHTML = "";
            }
            if (NbPlace.value == "") {
                document.getElementById('errorNbPlace').innerHTML = "* Veuillez entrer un nombre de stagiaire valide!";
                nbPlace.focus();
                bool = false;
            } else {
                document.getElementById('errorNbPlace').innerHTML = "";
            }
            if (remuneration.value == "") {
                document.getElementById('errorRemuneration').innerHTML = "* Veuillez entrer un montant valide!";
                remuneration.focus();
                bool = false;
            } else {
                document.getElementById('errorRemuneration').innerHTML = "";
            }
            if (email.value == "") {
                document.getElementById('errorEmail').innerHTML = "* Veuillez entrer un email valide!";
                email.focus();
                bool = false;
            } else {
                document.getElementById('errorEmail').innerHTML = "";
            }
            if (promo1.value == "") {
                document.getElementById('errorP1').innerHTML = "* Veuillez entrer une promotion!";
                promo1.focus();
                bool = false;
            } else {
                document.getElementById('errorP1').innerHTML = "";
            }
            if (comp1.value == "") {
                document.getElementById('errorC1').innerHTML = "* Veuillez entrer une compétence!";
                comp1.focus();
                bool = false;
            } else {
                document.getElementById('errorC1').innerHTML = "";
            }
            return bool;
        }
    </script>
    <form name="formulaire" class="wrapper" action="index.php" method="post" onsubmit="return validateForm()">
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
        <span class="error" id="errorRemuneration"></span>
        <input type="text" name="email" class="champ" placeholder="Email de contact">
        <span class="error" id="errorEmail"></span>
        <h3>Promotion : </h3>
        <select name="promo1" >
            <option value="">Promotion</option>
            {foreach $promotion as $promo1}
                <option value="{$promo1['Promotion']}">{$promo1['Promotion']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorP1"></span>
        <select name="promo2">
            <option value="">Promotion</option>
            {foreach $promotion as $promo2}
                <option value="{$promo2['Promotion']}">{$promo2['Promotion']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorP2"></span>
        <select name="promo3">
            <option value="">Promotion</option>
            {foreach $promotion as $promo3}
                <option value="{$promo3['Promotion']}">{$promo3['Promotion']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorP3"></span>
        <select name="promo4">
            <option value="">Promotion</option>
            {foreach $promotion as $promo4}
                <option value="{$promo4['Promotion']}">{$promo4['Promotion']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorP4"></span>
        <h3>Compétences : </h3>
        <select name="comp1">
            <option value="">Compétence</option>
            {foreach $competences as $comp1}
                <option value="{$comp1['Compétences']}">{$comp1['Compétences']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorC1"></span>
        <select name="lvl1">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl1"></span>
        <select name="comp2">
            <option value="">Compétence</option>
            {foreach $competences as $comp2}
                <option value="{$comp2['Compétences']}">{$comp2['Compétences']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorC2"></span>
        <select name="lvl2">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl2"></span>
        <select name="comp3">
            <option value="">Compétence</option>
            {foreach $competences as $comp3}
                <option value="{$comp3['Compétences']}">{$comp3['Compétences']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorC3"></span>
        <select name="lvl3">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl3"></span>
        <select name="comp4">
            <option value="">Compétence</option>
            {foreach $competences as $comp4}
                <option value="{$comp4['Compétences']}">{$comp4['Compétences']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorC4"></span>
        <select name="lvl4">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl4"></span>
        <select name="comp5">
            <option value="">Compétence</option>
            {foreach $competences as $comp5}
                <option value="{$comp5['Compétences']}">{$comp5['Compétences']}</option>
            {/foreach}
        </select>
        <span class="error" id="errorC5"></span>
        <select name="lvl5">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl5"></span>
        <br>
        <input type="text" id="descr" name="descr" placeholder="Description de l'offre">
        <span class="error" id="errorDescr"></span>
        <button type="submit" id="ButAddOffre" name="addOffre" value="add">Ajouter</button>
    </form>
{/block}

