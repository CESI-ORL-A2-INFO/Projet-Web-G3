{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/profilEntr.css">
{/block}

{block name=content}
    <div class="info">
        <form action="index.php" method="post">
            <p>Nom de l'entreprise : </p>
            <input class="champ" name="nomEntr" value="{$infoEntr['NomEntreprise']}">
            <p class="adresse">Adresse : </p>
            <input class="champ" name="numRue" value="{$infoEntr['NumRue']}">
            <input class="champ" name="nomRue" value="{$infoEntr['NomRue']}">
            <input class="champ" name="ville" value="{$infoEntr['Ville']}">
            <input class="champ" name="cp" value="{$infoEntr['CodePostale']}">
            <input class="champ" name="pays" value="{$infoEntr['Pays']}">
            <p>Secteur : </p>
            <select class="secteur" name="secteur1">
                <option value="none">Secteur</option>
                {foreach $secteur as $sect1}
                    {if $card[0]['secteur'][0]['Secteur_Activite'] == $sect1['Secteur_Activite']}
                        <option value="{$sect1['Secteur_Activite']}" selected>{$sect1['Secteur_Activite']}</option>
                    {else}
                        <option value="{$sect1['Secteur_Activite']}">{$sect1['Secteur_Activite']}</option>
                    {/if}
                {/foreach}
            </select>
            <select class="secteur" name="secteur2">
                <option value="none">Secteur</option>
                {foreach $secteur as $sect2}
                    {if $card[0]['secteur'][1]['Secteur_Activite'] == $sect2['Secteur_Activite']}
                        <option value="{$sect2['Secteur_Activite']}" selected>{$sect2['Secteur_Activite']}</option>
                    {else}
                        <option value="{$sect2['Secteur_Activite']}">{$sect2['Secteur_Activite']}</option>
                    {/if}
                {/foreach}
            </select>
            <select class="secteur" name="secteur3">
                <option value="none">Secteur</option>
                {foreach $secteur as $sect3}
                    {if $card[0]['secteur'][2]['Secteur_Activite'] == $sect3['Secteur_Activite']}
                        <option value="{$sect3['Secteur_Activite']}" selected>{$sect3['Secteur_Activite']}</option>
                    {else}
                        <option value="{$sect3['Secteur_Activite']}">{$sect3['Secteur_Activite']}</option>
                    {/if}
                {/foreach}
            </select>
            <p>Nombre de stagiaire : </p>
            <input type="text" name="nbStagiaire" value="{$infoEntr['NbreStagiaire']}">
            <button type="submit" name="actionEntr" value="modif">Modifier l'entreprise</button>
            <button type="submit" name="actionEntr" value="suppr">Supprimer l'entreprise</button>
        </form>
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
                <textarea class="com" type="text" name="commentaire"></textarea>
                <button class="add" type="submit" name="action" value="add">Ajouter</button>
            {else}
                <select class="noteUser" name="note">
                    {if $comUser['confiance'] == 0}
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['confiance'] == 1}
                        <option value="0">0</option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['confiance'] == 2}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['confiance'] == 3}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" selected>3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    {elseif $comUser['confiance'] == 4}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    {elseif $comUser['confiance'] == 5}
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    {/if}
                </select>
                <textarea class="com" type="text" name="commentaire">{$comUser['commentaire']}</textarea>

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