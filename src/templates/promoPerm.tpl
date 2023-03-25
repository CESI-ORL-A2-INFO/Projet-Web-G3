{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/promotion.css">
{/block}

{block name=content}
    <h1>{$promo} : </h1>
    <form class="newEtud" method="post" accept="index.php">
        <input type="text" name="nomEtud" placeholder="Nom de l'étudiant">
        <input type="text" name="prenomEtud" placeholder="Prénom de l'étudiant">
        <button type="submit" name="action" value="add">Ajouter un étudiant</button>
        <button type="submit" name="actionPromo" value="del">Supprimer la promotion</button>
    </form>
    <h2>Etudiant : </h2>
    <form class="cardContainer" method="get" action="index.php">
        {foreach $etudiant as $etud}
            <button class="card" name="etud" value="{$etud['IdEtudiant']}">
                <p>{$etud['NomEtudiant']} {$etud['PrenomEtudiant']}</p>
            </button>
        {/foreach}
    </form>
{/block}

