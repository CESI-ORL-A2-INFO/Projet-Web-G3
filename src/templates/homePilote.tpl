{extends file='navbarPerm.tpl'}
{block name="include"}
    <link rel="stylesheet" href="./css/home.css">
{/block}
{block name=content}
    <div class="wrapper">
        <form class="card_container" method="get" action="./index.php">
            <button class="card one" name="offreLast" value="{$idOffre[5]}">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[0]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[5][0]}<br>secteur :
                    {foreach $secteur[5] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}
                </h4>
                <p class="duree">Durée : {$duree[0]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[5] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[5][0]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[5] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
            </button>
            <button class="card two" name="offreLast" value="5">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[1]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[4][0]}<br>secteur :
                    {foreach $secteur[4] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}</h4>
                <p class="duree">Durée : {$duree[1]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[4] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[4][0]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[4] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
            </button>
            <button class="card three" name="offreLast" value="4">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[2]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[3][0]}<br>secteur :
                    {foreach $secteur[3] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}</h4>
                <p class="duree">Durée : {$duree[2]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[3] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[3][0]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[3] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
            </button>
            <button class="card four" name="offreLast" value="3">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[3]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[2][0]}<br>secteur :
                    {foreach $secteur[2] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}</h4>
                <p class="duree">Durée : {$duree[3]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[2] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[2][0]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[2] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
            </button>
            <button class="card five" name="offreLast" value="2">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[4]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[1][0]}<br>secteur :
                    {foreach $secteur[1] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}</h4>
                <p class="duree">Durée : {$duree[4]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[1] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[1][0]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[1] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
            </button>
            <button class="card six" name="offreLast" value="{$idOffre[0]}">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title">{$nomOffre[5]}</h3>
                <h4 class="nomEntreprise">{$nomEntr[0][0]}<br>secteur :
                    {foreach $secteur[0] as $sect}
                        {$sect['Secteur_Activite']} /
                    {/foreach}</h4>
                <p class="duree">Durée : {$duree[5]} semaines</p>
                <p class="promo">Promo :
                    {foreach $promo[0] as $prom}
                        {$prom['Promotion']} /
                    {/foreach}
                </p>
                <p class="ville">Ville : {$ville[0][0]}</p>
                <p class="competence">Compétences :
                    {foreach $competences[0] as $comp}
                        {$comp['Compétences']} - {$comp['niveau']} /
                    {/foreach}</p>
            </button>
        </form>
        <div class="about">
            <h3>Qui sommes nous ?</h3>
            <p>lorem ipsum</p>
        </div>
    </div>
{/block}