{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/homePerm.css">
{/block}
{block name=content}
    <div class="offreTable">
        <h2>Offre</h2>
        <table>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Entreprise</th>
                <th scope="col">Description</th>
            </tr>
            {foreach $offre as $dataOffre}
                <tr>
                    <td><a href="./index.php?p=offre&offre={$dataOffre['IdOffre']}">{$dataOffre['nomOffre']}</a></td>
                    <td>{$dataOffre['NomEntreprise']}</td>
                    <td>{$dataOffre['Description']}</td>
                </tr>
            {/foreach}
        </table>
    </div>
    <div class="entrTable">
        <h2>Entreprise</h2>
        <table>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Nombre de stagiaire</th>
            </tr>
            {foreach $entr as $dataEntr}
                <tr>
                    <td><a href="./index.php?p=profilEntr&entr={$dataEntr['NomEntreprise']}">{$dataEntr['NomEntreprise']}</a>
                    </td>
                    <td>{$dataEntr['NbreStagiaire']}</td>
                </tr>
            {/foreach}
        </table>
    </div>
    <div class="piloteTable">
        <h2>Pilote</h2>
        <table>
            <tr>
                <th scope="col">Nom Prénom</th>
                <th scope="col">Centre</th>
            </tr>
            {foreach $pilote as $dataPil}
                <tr>
                    <td><a href="./index.php?p=profilPil&pil={$dataPil['IdPilote']}">{$dataPil['NomPilote']}
                            {$dataPil['PrenomPilote']}</a></td>
                    <td>{$dataPil['Centre']}</td>
                </tr>
            {/foreach}
        </table>
    </div>
    <div class="etudTable">
        <h2>Etudiant</h2>
        <table>
            <tr>
                <th scope="col">Nom Prénom</th>
                <th scope="col">Promotion</th>
                <th scope="col">Centre</th>
            </tr>
            {foreach $etud as $dataEtud}
                <tr>
                    <td><a href="./index.php?p=profilEtud&etud={$dataEtud['IdEtudiant']}">{$dataEtud['NomEtudiant']}
                            {$dataEtud['PrenomEtudiant']}</a></td>
                    <td>{$dataEtud['Promotion']}</td>
                    <td>{$dataEtud['Centre']}</td>
                </tr>
            {/foreach}
        </table>
    </div>
{/block}