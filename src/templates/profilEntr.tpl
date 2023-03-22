{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEntr.css">
{/block}

{block name=content}
    <div class="info">
        <h1 class="nomEntr">{$infoEntr['NomEntreprise']}</h1>
        <p class="adresse">Adresse : {$infoEntr['NumRue']}, {$infoEntr['NomRue']}, {$infoEntr['Ville']},
            {$infoEntr['CodePostale']}, {$infoEntr['Pays']}</p>
        <p class="secteur">Secteur : 
        {foreach $card[0]['secteur'] as $sect}
            {$sect['Secteur_Activite']} /
        {/foreach}
        </p>
        <form class="cardContainer" method="get" action="./index.php">
            {foreach $card as $data key=$i}
                <button class="card" name="offre" value="{$data['IdOffre']}">
                    <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                    <h3 class="title">{$data['nomOffre']}</h3>
                    <p class="debut">Date de début : {$data['dateDebut']}</p>
                    <p class="duree">Durée : {$data['duree']} semaines</p>
                    <p class="ville">Ville : {$data['ville'][0]['Ville']}</p>
                </button>
            {/foreach}
        </form>
        <form class="comUser" action="index.php" method="post">
            {if $comUser == null}
                <select class="noteUser" name="note">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input class="com" type="text" name="commentaire" placeholder="">
                <button class="add" type="submit" name="action" value="add">Ajouter</button>
            {else}
                <select class="noteUser" name="note">
                    {if $comUser['note'] == 0}
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['note'] == 1}
                        <option value="0">0</option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['note'] == 2}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['note'] == 3}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" selected>3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['note'] == 4}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    {elseif $comUser['note'] == 5}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>                        
                        <option value="5" selected>5</option>
                    {/if}
                </select>
                <textarea>Envoyez votre commenraires à l'auteur.</textarea><br>
                <input class="com" type="text" name="commentaire" value="{$comUser['commentaire']}">
                <button class="upd" type="submit" name="action" value="upd">Modifier</button>
                <button class="del" type="submit" name="action" value="del">Delete</button>
            {/if}
        </form>
        {foreach $comPil as $pil}
            <h3 class="nomPil">{$pil['NomPilote']} {$pil['PrenomPilote']}</h3>
            <p class="note">{$pil['confiance']}</p>
            <p class="comPil">{$pil['commentaire']}</p>
        {/foreach}
        {foreach $comEtud as $etud}
            <h3 class="nomEtud">{$etud['NomEtudiant']} {$etud['PrenomEtudiant']}</h3>
            <p class="note">{$etud['note']}</p>
            <p class="comEtud">{$etud['commentaire']}</p>
        {/foreach}



      
    </div>
{/block}