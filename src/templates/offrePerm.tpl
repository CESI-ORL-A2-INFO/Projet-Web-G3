{extends file="navbarPerm.tpl"}
{block name="include"}
    <link rel="stylesheet" href="./css/offreperm.css">
{/block}

{block name=content}
    <form name="formulaire" class="offre" method="post" action="./index.php" onsubmit="return validateForm()">
        <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
        <label for="nomOffre" class="abvc" hidden>Nom Offre</label>
        <input type="text" id="nomOffre" name="nomOffre" value="{$nomOffre}">
        <span class="error" id="errorNomOffre"></span>

        <br><br><select name="nomEntr">
            {foreach $nomEntr as $name}
                {if $name['NomEntreprise'] == $nomEntrSelect}
                    <option value="{$name['NomEntreprise']}" selected>{$name['NomEntreprise']}</option>
                {else}
                    <option value="{$name['NomEntreprise']}">{$name['NomEntreprise']}</option>
                {/if}
            {/foreach}
        </select>
        {foreach $nomEntr as $name}
            {if $name['NomEntreprise'] == $nomEntrSelect}
                <button class="getEntr" name="entr" value="{$name['NomEntreprise']}">Page entreprise</button>
            {/if}
        {/foreach}
        <ul class="secteur">
            {foreach $secteur as $sec}
                <li>
                    {$sec["Secteur_Activite"]}
                </li>
            {/foreach}
        </ul>
        <span class="error" id="errorSecteur"></span>
        <h3>Promotion : </h3>
        <select name="promo1">
            <option value="none">Promotion</option>
            {foreach $promotion as $promo1}
                {if $promoOffre[0]['Promotion'] == $promo1['Promotion']}
                    <option value="{$promo1['Promotion']}" selected>{$promo1['Promotion']}</option>
                {else}
                    <option value="{$promo1['Promotion']}">{$promo1['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <span class="error" id="errorP1"></span>
        <select name="promo2">
            <option value="none">Promotion</option>
            {foreach $promotion as $promo2}
                {if $promoOffre[1]['Promotion'] == $promo2['Promotion']}
                    <option value="{$promo2['Promotion']}" selected>{$promo2['Promotion']}</option>
                {else}
                    <option value="{$promo2['Promotion']}">{$promo2['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <select name="promo3">
            <option value="none">Promotion</option>
            {foreach $promotion as $promo3}
                {if $promoOffre[2]['Promotion'] == $promo3['Promotion']}
                    <option value="{$promo3['Promotion']}" selected>{$promo3['Promotion']}</option>
                {else}
                    <option value="{$promo3['Promotion']}">{$promo3['Promotion']}</option>
                {/if}
            {/foreach}
        </select>
        <select name="promo4">
            <option value="none">Promotion</option>
            {foreach $promotion as $promo4}
                {if $promoOffre[3]['Promotion'] == $promo4['Promotion']}
                    <option value="{$promo4['Promotion']}" selected>{$promo4['Promotion']}</option>
                {else}
                    <option value="{$promo4['Promotion']}">{$promo4['Promotion']}</option>
                {/if}
            {/foreach}
        </select><br>
        <h3>Compétences : </h3>
        <select name="comp1">
            <option value="none">Compétence</option>
            {foreach $competences as $comp1}
                {if $compOffre[0]['Compétences'] == $comp1['Compétences']}
                    <option value="{$comp1['Compétences']}" selected>{$comp1['Compétences']}</option>
                {else}
                    <option value="{$comp1['Compétences']}">{$comp1['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <span class="error" id="errorC1"></span>
        
        <input type="text" id="comp1" name="lvl1" value="{$compOffre[0]['niveau']}">
        <span class="error" id="errorL1"></span>
        <select name="comp2">
            <option value="none">Compétence</option>
            {foreach $competences as $comp2}
                {if $compOffre[1]['Compétences'] == $comp2['Compétences']}
                    <option value="{$comp2['Compétences']}" selected>{$comp2['Compétences']}</option>
                {else}
                    <option value="{$comp2['Compétences']}">{$comp2['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl2" value="{$compOffre[1]['niveau']}">
        <select name="comp3">
            <option value="none">Compétence</option>
            {foreach $competences as $comp3}
                {if $compOffre[2]['Compétences'] == $comp3['Compétences']}
                    <option value="{$comp3['Compétences']}" selected>{$comp3['Compétences']}</option>
                {else}
                    <option value="{$comp3['Compétences']}">{$comp3['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl3" value="{$compOffre[2]['niveau']}">
        <select name="comp4">
            <option value="none">Compétence</option>
            {foreach $competences as $comp4}
                {if $compOffre[3]['Compétences'] == $comp4['Compétences']}
                    <option value="{$comp4['Compétences']}" selected>{$comp4['Compétences']}</option>
                {else}
                    <option value="{$comp4['Compétences']}">{$comp4['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl4" value="{$compOffre[3]['niveau']}">
        <select name="comp5">
            <option value="none">Compétence</option>
            {foreach $competences as $comp5}
                {if $compOffre[4]['Compétences'] == $comp5['Compétences']}
                    <option value="{$comp5['Compétences']}" selected>{$comp5['Compétences']}</option>
                {else}
                    <option value="{$comp5['Compétences']}">{$comp5['Compétences']}</option>
                {/if}
            {/foreach}
        </select>
        <input type="text" name="lvl5" value="{$compOffre[4]['niveau']}">
        <p class="addresse">
            {foreach from=$adresse item=$add key=i}
                adresse :
                {$add[0]},
                {$add[1]},
                {$add[3]},
                {$add[2]},
                {$add[4]}
            {/foreach}
        </p>
        <p class="duree">durée :
            <input type="text" name="duree" value="{$duree}">
            semaines
        </p>
        <span class="error" id="errorDuree"></span>
        <p class="dateOffre">Date de début : </p>
        <input type="date" name="dateDebut" value="{$dateOffre}">
        <span class="error" id="errorDateDebut"></span>
        <p class="dateEmission">Date d'emission : </p>
        <input type="date" name="dateEmi" value="{$dateEmission}">
        <span class="error" id="errorDateEmi"></span>
        <p class="place">Nombre de place : </p>
        <input type="text" name="nbPlace" value="{$place}">
        <span class="error" id="errorNbPlace"></span>
        <p class="paie">Rémunération : </p>
        <input type="text" name="remuneration" value="{$paie}">
        <span class="error" id="errorRemuneration"></span>
        <p class="mail">email : </p>
        <input type="text" name="email" value="{$mail}">
        <span class="error" id="errorEmail"></span></br>
        <textarea name="descr" rows="20" cols="120">{$descr}</textarea>
        <span class="error" id="errorDesc"></span>

        <button type="submit" name="action" value="modif">Modifier</button>
        <button type="submit" name="action" value="suppr">Supprimer</button>
    </form>
    <script>
        function validateForm(){
            var nomOffre = document.forms["formulaire"]["nomOffre"];
            var duree = document.forms["formulaire"]["duree"];
            var NbPlace = document.forms["formulaire"]["nbPlace"];
            var remuneration = document.forms["formulaire"]["remuneration"];
            var email = document.forms["formulaire"]["email"];
            var promo1 = document.forms["formulaire"]["promo1"];
            var comp1 = document.forms["formulaire"]["comp1"];
            var desc = document.forms["formulaire"]["descr"];
            var debut = document.forms["formulaire"]["dateDebut"];     
            var emi = document.forms["formulaire"]["dateEmi"];     
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
                NbPlace.focus();
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
            if (promo1.value == "none") {
                document.getElementById('errorP1').innerHTML = "* Veuillez entrer une promotion!";
                promo1.focus();
                bool = false;
            } else {
                document.getElementById('errorP1').innerHTML = "";
            }
            if (comp1.value == "none") {
                document.getElementById('errorC1').innerHTML = "* Veuillez entrer une compétence!";
                comp1.focus();
                bool = false;
            } else {
                document.getElementById('errorC1').innerHTML = "";
            }
            if (desc.value == "") {
                document.getElementById('errorDesc').innerHTML = "* Veuillez entrer une Description!";
                desc.focus();
                bool = false;
            } else {
                document.getElementById('errorDesc').innerHTML = "";
            }
            if (debut.value == "") {
                document.getElementById('errorDateDebut').innerHTML = "* Veuillez entrer une date de début valide!";
                debut.focus();
                bool = false;
            } else {
                document.getElementById('errorDateDebut').innerHTML = "";
            }
            if (emi.value == "") {
                document.getElementById('errorDateEmi').innerHTML = "* Veuillez entrer une date d'émission valide!";
                emi.focus();
                bool = false;
            } else {
                document.getElementById('errorDateEmi').innerHTML = "";
            }
            return bool;
        }
    </script>
{/block}