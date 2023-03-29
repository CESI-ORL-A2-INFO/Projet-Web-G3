{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/promotion.css">
{/block}

{block name=content}
    <h1>{$promo} : </h1>
    <form name="formulaire" class="newEtud" method="post" accept="index.php" onsubmit="return validateForm()">
        <input type="text" name="nomEtud" placeholder="Nom de l'étudiant">
        <span class="error" id="errorNom"></span>
        <input type="text" name="prenomEtud" placeholder="Prénom de l'étudiant">
        <span class="error" id="errorPrenom"></span>
        <br><button type="submit" name="action" value="add">Ajouter un étudiant</button>
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
    <script>
    function validateForm(){
        var nom = document.forms['formulaire']['nomEtud'];
        var prenom = document.forms['formulaire']['prenomEtud'];
        var bool = true;
        if (nom.value == ""){
            document.getElementById('errorNom').innerHTML = "*Veuillez entrer un nom valide!"
            nom.focus()
            bool = false
        }else{
            document.getElementById('errorNom').innerHTML = ""
        }
        if (prenom.value == ""){
            document.getElementById('errorPrenom').innerHTML = "*Veuillez entrer un prenom valide!"
            prenom.focus()
            bool = false
        }else{
            document.getElementById('errorPrenom').innerHTML = ""
        }
    return bool;
    }
    </script>
{/block}

