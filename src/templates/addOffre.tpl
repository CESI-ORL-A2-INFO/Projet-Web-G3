{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/addOffre.css">
{/block}

{block name=content}
    <form class="wrapper" accept="index.php" method="post">
        <input type="text" name="nomOffre" placeholder="Nom de l'offre">
        <select name="nomEntr">
            {foreach $nomEntr as $name}
                <option value="{$name['NomEntreprise']}">{$name['NomEntreprise']}</option>
            {/foreach}
        </select>
        <input type="text" name="duree" placeholder="Durée du stage">
        <label for="dateDeb">Date de début : </label>
        <input id="dateDeb" type="date" name="dateDebut" placeholder="Date de début du stage">
        <label for="dateEmi">Date émission : </label>
        <input id="dateEmi" type="date" name="dateEmi" placeholder="Date d'émission du stage">
        <input type="text" name="nbPlace" placeholder="Nombre de place pour ce stage">
        <input type="text" name="remuneration" placeholder="Rémunération de l'offre">
        <input type="text" name="email" placeholder="Email de contact">
        <h3>Promotion : </h3>
        <select name="promo1">
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
        <input type="text" name="lvl1" value="" placeholder="Niveau de la compétence 1">
        <select name="comp2">
            <option value="">Compétence</option>
            {foreach $competences as $comp2}
                <option value="{$comp2['Compétences']}">{$comp2['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl2" value="" placeholder="Niveau de la compétence 2">
        <select name="comp3">
            <option value="">Compétence</option>
            {foreach $competences as $comp3}
                <option value="{$comp3['Compétences']}">{$comp3['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl3" value="" placeholder="Niveau de la compétence 3">
        <select name="comp4">
            <option value="">Compétence</option>
            {foreach $competences as $comp4}
                <option value="{$comp4['Compétences']}">{$comp4['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl4" value="" placeholder="Niveau de la compétence 4">
        <select name="comp5">
            <option value="">Compétence</option>
            {foreach $competences as $comp5}
                <option value="{$comp5['Compétences']}">{$comp5['Compétences']}</option>
            {/foreach}
        </select>
        <input type="text" name="lvl5" value="" placeholder="Niveau de la compétence 5">
        <br>
        <input type="text" name="descr" placeholder="Description de l'offre">
        <button type="submit" name="addOffre" value="true">Ajouter</button>
    </form>
{/block}