{extends file='footer.tpl'}
{block name="navbarcss"}
    <link rel="stylesheet" href="./css/connexion.css">
{/block}

{block name=content}
    <script>
        function validateForm() {
            var mail = document.forms["formulaire"]["mail"];
            var mdp = document.forms["formulaire"]["mdp"]
            var bool = true;

            if (mail.value == "") {
                document.getElementById('errormail').innerHTML = "* Veuillez entrer un mail valide!";
                mail.focus();
                bool = false;
            } else {
                document.getElementById('errormail').innerHTML = "";
            }
            if (mdp.value == "") {
                document.getElementById('errorpass').innerHTML = "* Veuillez entrer un Mot de passe valide!";
                mdp.focus();
                bool = false;
            } else {
                document.getElementById('errorpass').innerHTML = "";
            }
            return bool;
        }
    </script>
    <style>
        .error {
            color: #D8000C;
            margin-left: 20%;
            padding-top: 5%;

        }

        @media only screen and (max-width: 830px) {
            .error {
                margin-left: 0%;
            }
        }
    </style>

    <div class="allh">
        <div class="wrapper">
            <div class="form">
                <form name="formulaire" action="index.php" method="post" id="form" onSubmit="return validateForm()">
                    <input class="champ" id="email" type="email" name="mail" placeholder="Adresse e-mail">
                    <span class="error" id="errormail"></span>
                    <input class="champ" id="password" type="password" name="mdp" placeholder="Mot de passe">
                    <span class="error" id="errorpass"></span>
                    <button class="champ" id="connect" type="submit" name="p" value="home">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
    
{/block}