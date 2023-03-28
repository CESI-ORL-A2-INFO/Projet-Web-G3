{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/homePerm.css">
{/block}
{block name=content}

    <div class="container">
        <div class="offreTable">
            <h2>Offre</h2>
            <table>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Entreprise</th>
                    <th scope="col">Adresse</th>
                </tr>
                {foreach $offre as $dataOffre}
                    <tr>
                        <td><button class="but"><a href="./index.php?p=offre&offre={$dataOffre['IdOffre']}">{$dataOffre['nomOffre']}</a></button></td>
                        <td>{$dataOffre['NomEntreprise']}</td>
                        <td>
                            {$dataOffre['NumRue']},
                            {$dataOffre['NomRue']},
                            {$dataOffre['Ville']},
                            {$dataOffre['CodePostale']},
                            {$dataOffre['Pays']}
                        </td>
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
                        <td><button class="but"><a
                                href="./index.php?p=profilEntr&entr={$dataEntr['NomEntreprise']}">{$dataEntr['NomEntreprise']}</a>
                        </button></td>
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
                    <th scope="col">Est Admin</th>
                </tr>
                {foreach $pilote as $dataPil}
                    <tr>
                        <td><button class="but"><a href="./index.php?p=profilPil&pil={$dataPil['IdPilote']}">{$dataPil['NomPilote']}
                                {$dataPil['PrenomPilote']}</a></button></td>
                        <td>{$dataPil['Centre']}</td>
                        <td>{$dataPil['admin']}</td>
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
                        <td><button class="but"><a href="./index.php?p=profilEtud&etud={$dataEtud['IdEtudiant']}">{$dataEtud['NomEtudiant']}
                                {$dataEtud['PrenomEtudiant']}</a></button></td>
                        <td>{$dataEtud['Promotion']}</td>
                        <td>{$dataEtud['Centre']}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
        <form class="buttonWrapper" method="get" accept="index.php">
            <button class="button" type="submit" name="p" value="addEntr">Ajouter une entreprise</button>
            <button class="button" type="submit" name="p" value="addOffre">Ajouter une offre</button>
            <button class="button" type="submit" name="p" value="addPil">Ajouter un pilote</button>
            <button class="button" type="submit" name="p" value="addEtud">Ajouter un étudiant</button>
        </form>
        <div class="about">
            <h1>Qui sommes nous ?</h1><br>
            <p>C'Stage est un site web dédié à la recherche et la publication d'offres de stage.
                Ce portail offre une plateforme intuitive et facile d'utilisation pour les
            étudiants et les entreprises souhaitant trouver ou proposer un stage de qualité. Grâce à C'Stage,
                les entreprises peuvent publier des offres de stage pertinentes et ainsi attirer des candidats motivés et
                qualifiés. Les étudiants peuvent quant à eux naviguer à travers les offres et postuler pour les stages
                correspondant
                à leur profil. Avec des fonctionnalités pratiques telles que la recherche de stage par mots-clés, par
                secteur ou
                par localisation, C'Stage offre une expérience de recherche de stage
            efficace et optimisée. De plus, le site propose également des conseils pratiques pour
            aider les étudiants dans leur recherche de stage et pour les accompagner tout au long
            de leur expérience de stage. C'Stage est donc un outil incontournable pour tous les
                étudiants et les entreprises qui souhaitent trouver les meilleurs stages ou les meilleurs candidats pour
                leurs projets.</p>

        </div>

    </div>
{/block}