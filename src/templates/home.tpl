{extends file='navbar.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/home.css">
{/block}
{block name=content}
    <div class="wrapper">
        <form class="card_container" method="get" action="./index.php">
            <button class="card one" name="offreLast" value="1">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">{$nomOffre[0]}</h1>
                <p class="nomEntreprise">{$nomEntr}<br>
                {$secteur}</p>
                <p class="duree">Durée : {$duree}</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : {$ville}</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card two" name="offreLast" value="2">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">{$nomOffre[1]}</h1>
                <p class="nomEntreprise">{$nomEntr}<br>
                {$secteur}</p>
                <p class="duree">Durée : {$duree}</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : {$ville}</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card three" name="offreLast" value="3">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">{$nomOffre[2]}</h1>
                <p class="nomEntreprise">{$nomEntr}<br>
                {$secteur}</p>
                <p class="duree">Durée : {$duree}</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : {$ville}</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card four" name="offreLLast" value="4">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">{$nomOffre[3]}</h1>
                <p class="nomEntreprise">{$nomEntr}<br>
                {$secteur}</p>
                <p class="duree">Durée : {$duree}</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : {$ville}</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card five" name="offreLast" value="5">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">{$nomOffre[4]}</h1>
                <p class="nomEntreprise">{$nomEntr}<br>
                {$secteur}</p>
                <p class="duree">Durée : {$duree}</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : {$ville}</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card six" name="offreLast" value="6">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">{$nomOffre[5]}</h1>
                <p class="nomEntreprise">{$nomEntr}<br>
                {$secteur}</p>
                <p class="duree">Durée : {$duree}</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : {$ville}</p>
                <p class="competence">Competences : </p>
            </div>
        </form>
        <div class="about">
            <h1>Qui sommes nous ?</h1>
            <p>lorem ipsum</p>
        </div>
    </div>
{/block}