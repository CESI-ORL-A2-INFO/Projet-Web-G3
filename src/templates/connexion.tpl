{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./connexion/connexion.css">
{/block}

{block name=content}
    <div class="all">
            <div class="wrapper">
                <div class="form">
                    <form action="index.php" method="post">
                        <input class="champ" id="email" type="email" name="mail" placeholder="Adresse e-mail">
                        <input class="champ" id="password" type="password" name="mdp" placeholder="Mot de passe">
                        <button class="champ" id="connect" type="submit" name="co" value="try">Se connecter</button>
                    </form>
                    <a href="" id="forgorPassword">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
{/block}