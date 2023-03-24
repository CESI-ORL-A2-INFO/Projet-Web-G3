{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEntr.css">
{/block}

{block name=content}
    <form action="index.php" method="post" class="info">
        <p>Nom de l'entreprise : </p>
    <input class="champ" name="nomEntr" value="" placeholder="Nom de l'entreprise">
    <p class="adresse">Adresse : </p>
    <input class="champ" name="numRue" value="" placeholder="Numéro de rue">
    <input class="champ" name="nomRue" value="" placeholder="Nom de rue">
    <input class="champ" name="ville" value="" placeholder="Ville">
    <input class="champ" name="cp" value="" placeholder="Code Postal">
    <input class="champ" name="pays" value="" placeholder="Pays">
    <p>Secteur : </p>
    <select class="secteur" name="secteur1">
        <option value="none">Secteur</option>
        {foreach $secteur as $sect1}
        <option value="{$sect1['Secteur_Activite']}">{$sect1['Secteur_Activite']}</option>
        {/foreach}
    </select>
    <select class="secteur" name="secteur2">
        <option value="none">Secteur</option>
        {foreach $secteur as $sect2}
        <option value="{$sect2['Secteur_Activite']}">{$sect2['Secteur_Activite']}</option>
        {/foreach}
    </select>
    <select class="secteur" name="secteur3">
        <option value="none">Secteur</option>
        {foreach $secteur as $sect3}
        <option value="{$sect3['Secteur_Activite']}">{$sect3['Secteur_Activite']}</option>
        {/foreach}
    </select>
    <p>Nombre de stagiaire : </p>
    <input type="text" name="nbStagiaire" value="" placeholder="Nombre de stagiaires">
    <button type="submit" name="actionEntr" value="add">Ajouter une entreprise</button>
</form>
{/block}