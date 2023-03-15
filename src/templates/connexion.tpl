{extends file='navbar.tpl'}
{block name="head"}
    <link rel="stylesheet" href="./connexion/connexion.css">
{/block}

{block name="content"}
    <div class="all">
            <div class="wrapper">
                <div class="form">
                    <form action="" method="post">
                        <input class="champ" id="email" type="email" value="" placeholder="Adresse e-mail">
                        <input class="champ" id="password" type="password" value="" placeholder="Mot de passe">
                        <input class="champ" id="connect" type="submit" value="Se connecter">
                    </form>
                    <a href="" id="forgorPassword">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
{/block}