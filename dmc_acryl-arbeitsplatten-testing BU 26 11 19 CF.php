<style>
    body {
        font-family: 'work sans';
    }



    .break-boxage {
        max-width: 413px;
        width: 100%;
    }

    .card img {
        max-width: 100%
    }

    .break-boxage img {
        max-width: 100%
    }

    .background-lightblue--lighter {
        background-color: #f2f7f9
    }

    .page-heading {
        font-family: 'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.4em;
        margin: 5px 0 .5em;
    }

    .filter-range,
    .filters-mobile,
    .filters {
        color: #4D4A49;
        font-size: 14px;
    }

    .category-label::after {
        display: block!important;
        position: absolute;
        top: 4px;
        left: 4px;
        font-size: 12px;
        transition: top 0.2s;
        border-radius: 0;
        padding: 3px 5px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.25);
    }

    .category-label:hover::after {
        top: -30px;
    }

    .category-label--new::after {
        content: "New";
        background-color: #FFF;
        color: #3261df;
    }

    .category-label--sale::after {
        content: "Sale";
        background-color: #DF4132;
        color: white;
    }

    .category-label--slimline::after {
        content: "Slimline";
        background-color: #005D6E;
        color: #fff;
    }

    .minimenu {
        position: relative;
        background: #fff;
        border: 1px solid #DEDCDC;
        cursor: default;
        stroke: #4D4A49;
    }

    .minimenu--active {
        background: #f5f3f2;
    }

    .minimenu--optactive {
        border-bottom: solid 1px #1B9FA8;
    }

    .minimenu--mobile {
        background: #DEDCDC;
        border: 1px solid #bdbdbd;
    }

    .minimenu__name::before {
        content: '';
        width: 6px;
        height: 6px;
        display: inline-block;
        border-bottom: 1px solid;
        border-right: 1px solid;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        margin: 0 8px 3px 0;
    }

    .minimenu__name--noarrow::before {
        display: none;
    }

    .minimenu__details {
        position: absolute;
        display: none;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 310px;
        min-width: 260px;
        background: #F5F3F2;
        color: #4D4A49;
        z-index: 10;
        top: 34px;
        left: -6px;
        overflow: auto;
        -webkit-box-shadow: 0px 5px 3px -3px rgba(0, 0, 0, 0.25);
        box-shadow: 0px 5px 3px -3px rgba(0, 0, 0, 0.25);
    }

    .minimenu__details--active {
        display: block;
    }

    .minimenu__details__item {
        cursor: pointer;
    }

    .minimenu__details__item:hover {
        color: #1B9FA8;
    }

    .minimenu__details__item--active {
        background: #005D6E;
        color: #fff;
    }

    .minimenu__details__item--active:hover {
        color: #fff;
    }

    .minimenu__details__item--active:hover::after {
        content: 'x';
        position: absolute;
        right: 10px;
        opacity: 0.6;
    }

    .minimenu__details__item--fade {
        opacity: .5;
    }

    .minimenu__details__item--remove {
        display: none!important;
    }

    .filter-sort__sel {
        padding: 6px 4px;
        color: #928F8F;
        border-radius: 3px;
        font-family: 'work sans';
    }

    .filter-sort__sel--mob {
        position: absolute;
        top: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
    }

    .filter-tags__index {
        color: #928F8F;
    }

    .filter-tags__item {
        background: #928F8F;
        color: #fff;
    }

    .filter-tags__item__close:hover {
        cursor: pointer;
    }

    .filter-tags__clear {
        cursor: pointer;
    }

    .filter-range__indi {
        border: 1px #928F8F;
        border-style: dashed;
        position: relative;
        border-radius: 0;
        height: 100%;
        width: 100%;
    }

    .filter-range__indi__link {
        color: #005D6E;
        cursor: pointer;
    }

    .filter__warning {
        position: fixed;
        z-index: 100;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background: -webkit-gradient(linear, left top, left bottom, from(#4D4A49), to(#333130));
        background: -webkit-linear-gradient(#4D4A49, #333130);
        background: -o-linear-gradient(#4D4A49, #333130);
        background: linear-gradient(#4D4A49, #333130);
        color: white;
        border-radius: 4px;
        -webkit-box-shadow: -8px 30px 14px -14px rgba(0, 0, 0, 0.2), 8px 30px 14px -14px rgba(0, 0, 0, 0.2);
        box-shadow: -8px 30px 14px -14px rgba(0, 0, 0, 0.2), 8px 30px 14px -14px rgba(0, 0, 0, 0.2);
        opacity: 1;
        -webkit-transition: 0.4s;
        -o-transition: 0.4s;
        transition: 0.4s;
    }

    .filters-mobile {
        display: none;
    }

    .filters-mobile--active {
        display: block;
        position: fixed;
        z-index: 1100;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: #4D4A49;
    }

    .filters-mobile__close {
        cursor: pointer;
    }

    .filters-mobile__accord {
        overflow: auto;
        position: relative;
        max-height: 78vh;
    }

    .filters-mobile__bottom {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .filter-mobile__sort {
        position: relative;
    }

    .colour-indicator--black {
        background: #4D4A49;
    }

    .colour-indicator--white {
        background: #F5F3F2;
    }

    .colour-indicator--light {
        background: #fce9b5;
    }

    .colour-indicator--lwood {
        background: #efd1ae;
    }

    .colour-indicator--mwood {
        background: #d2a061;
    }

    .colour-indicator--dwood {
        background: #795138;
    }

    .colour-indicator--grey {
        background: #928F8F;
    }

    .colour-indicator--blue {
        background: #007FBA;
    }

    .colour-indicator--red {
        background: #BC4B51;
    }

    .filter-range__item {
        overflow: hidden;
    }

    .cat-flex-5 {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 48%;
        flex: 1 0 48%;
        max-width: 48%;
    }

    .colour-indicator {
        width: 16px;
        height: 16px;
        -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, .25);
        box-shadow: 0px 1px 2px rgba(0, 0, 0, .25);
    }

    @media (min-width:768px) {

        .filter-range__item--breakout {
            max-width: 40%;
        }

        .filter-range__indi {
            border-radius: 50%;
            width: 134px;
            height: 134px;
        }

        .break-boxage {
            max-width: 366px;
            width: 100%;
        }

        .cat-flex-5 {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 20%;
            flex: 1 0 20%;
            max-width: 19.6%;
        }

    }

    @media (min-width:1294px) {
        
        .filter-range__item {
            max-width: 20%;
        }

        .filter-range__indi {
            width: 190px;
            height: 190px;
        }


        .break-boxage {
            max-width: 413px;
            width: 100%;
        }

    }

</style>




<h1 class="font-20 my-2">Acryl-Arbeitsplatten</h1>
<div class="dy-cutoff-message"></div>
<p class="mb-2">Unser Sortiment an Acryl-Arbeitsplatten ist die perfekte Wahl f&uuml;r eine bezahlbare Reproduktion von massivem Stein. Erh&auml;ltlich in einer Auswahl an markanten Dekoren, sind diese Arbeitsplatten die perfekte Erg&auml;nzung f&uuml;r jede K&uuml;che. Mit fast nahtlosen Verbindungen, die Ihrer Arbeitsplatte ein glattes und gleichm&auml;&szlig;iges Aussehen verleihen, werden Acryl-Arbeitsplatten aus widerstandsf&auml;higen Materialien hergestellt, was bedeutet, dass diese Oberfl&auml;chen f&uuml;r eine lange Lebensdauer ausgelegt sind. Diese K&uuml;chenplatten finden Sie in keinem Baumarkt &ndash; entdecken Sie unsere Dekore und schaffen Sie das perfekte Herzst&uuml;ck f&uuml;r Ihre K&uuml;che.</p>

<!-- Desktop Filters -->

<div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
    <div class="row-bs col-12-bs col-xl">
        <div class="minimenu mr-1 my-1 p-2" data-filter="farbe">
            <div class="minimenu__name uppercase">farbe</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="weiss">
                    <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                    <div>Wei&szlig;<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="grau">
                    <div class="border-circle colour-indicator colour-indicator--grey mr-2"></div>
                    <div>Grau<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="finish">
            <div class="minimenu__name uppercase">Finish</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="matt">
                    <div>Premium glatt - Matt<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="satiniert">
                    <div>Premium glatt - Satiniert<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        
        <div class="minimenu mr-1 my-1 p-2" data-filter="kante">
            <div class="minimenu__name uppercase">Kante</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="kante" data-filter-value="abgeschraegt">
                    <div>Abgeschr&auml;gt<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="laenge">
            <div class="minimenu__name uppercase">l&auml;nge</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="2m">
                    <div>2m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="mb-2">
                    <a href="/kuechenarbeitsplatten-nach-mass" target="_blank">
                        <div class="font-weight-3">Ben&ouml;tigen Sie ein bestimmtes Ma&szlig;? Benutzen Sie unseren <span class="underline">Ma&szlig;anfertigungsservice</span>, um Ihre Arbeitsplatte anzupassen.</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="tiefe">
            <div class="minimenu__name uppercase">Tiefe</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="650mm">
                    <div>650mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="960mm">
                    <div>960mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="mb-2">
                    <a href="/kuechenarbeitsplatten-nach-mass" target="_blank">
                        <div class="font-weight-3">Ben&ouml;tigen Sie ein bestimmtes Ma&szlig;? Benutzen Sie unseren <span class="underline">Ma&szlig;anfertigungsservice</span>, um Ihre Arbeitsplatte anzupassen.</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="staerke">
            <div class="minimenu__name uppercase">St&auml;rke</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="20mm">
                    <div>20mm<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="order-2 order-xl-1 my-1">
        <div class="filter-sort col-bs text-right">
            <span class="uppercase">Sortieren nach</span>
            <select class="filter-sort__sel">
                <option value="popularity" selected="selected">Beliebtheit</option>
                <option value="price-des">Preis: Absteigend</option>
                <option value="price-asc">Preis: Aufsteigend</option>
            </select>
        </div>
    </div>
    <div class="filter-tags row-bs align-items-center pt-2 col-bs order-1 col-7 col-xl-12">
        <div class="filter-tags__index font-14"><span class="filter-tags__index__num font-weight-6"></span> Artikel angezeigt</div>
        <div class="filter-tags__con d-flex flex-wrap"></div>
        <div class="filter-tags__clear d-none underline">Filter&nbsp;l&ouml;schen</div>
    </div>
</div>

<!-- End of Desktop Filters -->

<!-- Mobile FIlter & Sort -->

<div class="d-flex d-md-none">
    <div class="col-6 pl-0 pr-1">
        <div class="minimenu mobile-filter d-flex align-items-center p-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.5" viewBox="0 0 12 7.5" class="mr-2">
                <g transform="translate(-19 -303.25)">
                    <line x2="10" transform="translate(21 304)" fill="none" stroke-width="1.5"></line>
                    <line x2="10" transform="translate(21 307)" fill="none" stroke-width="1.5"></line>
                    <line x2="10" transform="translate(21 310)" fill="none" stroke-width="1.5"></line>
                    <line x2="1" transform="translate(19 304)" fill="none" stroke-width="1.5"></line>
                    <line x2="1" transform="translate(19 307)" fill="none" stroke-width="1.5"></line>
                    <line x2="1" transform="translate(19 310)" fill="none" stroke-width="1.5"></line>
                </g>
            </svg>
            <div class="minimenu__name minimenu__name--noarrow uppercase">filter</div>
        </div>
    </div>
    <div class="col-6 pr-0 pl-1">
        <div class="filter-mobile__sort">
            <label for="filter-mobile__sort">
                <div class="d-block minimenu mobile-sort p-1">
                    <div class="minimenu__name uppercase">Sortieren nach</div>
                </div>
            </label>
            <select class="minimenu filter-sort__sel filter-sort__sel--mob col-bs" id="filter-mobile__sort">
                <option value="popularity" selected="selected">Beliebtheit</option>
                <option value="price-des">Preis: aufsteigend</option>
                <option value="price-asc">Preis: absteigend</option>
            </select>
        </div>
    </div>
</div>
<div class="filters-mobile font-16 d-md-none">
    <div class="background-grey p-2">
        <div class="row-bs">
            <div class="col-6 pr-1">
                <div class="minimenu minimenu--mobile mobile-filter d-flex align-items-center px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.5" viewBox="0 0 12 7.5" class="mr-2">
                        <g transform="translate(-19 -303.25)">
                            <line x2="10" transform="translate(21 304)" fill="none" stroke-width="1.5"></line>
                            <line x2="10" transform="translate(21 307)" fill="none" stroke-width="1.5"></line>
                            <line x2="10" transform="translate(21 310)" fill="none" stroke-width="1.5"></line>
                            <line x2="1" transform="translate(19 304)" fill="none" stroke-width="1.5"></line>
                            <line x2="1" transform="translate(19 307)" fill="none" stroke-width="1.5"></line>
                            <line x2="1" transform="translate(19 310)" fill="none" stroke-width="1.5"></line>
                        </g>
                    </svg>
                    <div class="minimenu__name minimenu__name--noarrow uppercase">filter</div>
                </div>
            </div>
            <div class="col-6 pl-1">
                <label for="filter-mobile__sort">
                    <div class="d-block minimenu minimenu--mobile mobile-sort px-2 py-1">
                        <div class="minimenu__name uppercase">Sortieren</div>
                    </div>
                </label>
                <select class="minimenu filter-sort__sel filter-sort__sel--mob col-bs" id="filter-mobile__sort">
                    <option value="popularity">Beliebtheit</option>
                    <option value="price-des">Preis: aufsteigend</option>
                    <option value="price-asc">Preis: absteigend</option>
                </select>
            </div>
        </div>
    </div>
    <div class="filters-mobile__accord">
        <div class="filters-mobile__close colour-white py-3 d-flex align-items-center pl-2">
            <div class="font-26 mobmenu__arrow mobmenu__arrow--back"></div>
            <div>FILTER</div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">FARBE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="weiss">
                    <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                    <div>Wei&szlig;<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="grau">
                    <div class="border-circle colour-indicator colour-indicator--grey mr-2"></div>
                    <div>Grau<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>

        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">FINISH</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="matt">
                    <div>Premium glatt - Matt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="satiniert">
                    <div>Premium glatt - Satiniert<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">KANTE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="kante" data-filter-value="abgeschraegt">
                    <div>Abgeschr&auml;gt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">L&Auml;NGE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1m">
                    <div>2m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">TIEFE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="650mm">
                    <div>650mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="960mm">
                    <div>960mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">ST&Auml;RKE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="20mm">
                    <div>20mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="filters-mobile__bottom background-grey6">
        <div class="d-flex py-4 text-center">
            <div class="col-6">
                <div class="button colour-white filters-mobile__clear">Filter l&ouml;schen</div>
            </div>
            <div class="col-6">
                <div class="button button--white filters-mobile__apply">Filtern</div>
            </div>
        </div>
    </div>
</div>

<!-- End of Mobile FIlter & Sort -->

<div class="filter-range row-bs px-2">

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="205" data-farbe="weiss" data-finish="matt" data-laenge="2m,3m" data-kante="abgeschraegte" data-tiefe="650mm,960mm" data-staerke="20mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="/acryl-arbeitsplatten/acryl-arbeitsplatte-arctic">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574259126/DE/categories/acryl/acryl-arbeitsplatten-category-arctic.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574259126/DE/categories/acryl/acryl-arbeitsplatten-category-arctic.jpg" alt="Acryl Arbeitsplatten Arctic">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Arctic</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 20mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>205&euro; / m</div>
                </div>
                
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="205" data-farbe="grau" data-finish="satiniert" data-laenge="2m,3m" data-kante="abgeschraegte" data-tiefe="650mm,960mm" data-staerke="20mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="/acryl-arbeitsplatten/acryl-arbeitsplatte-lovina">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574259125/DE/categories/acryl/acryl-arbeitsplatten-category-lovina.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574259125/DE/categories/acryl/acryl-arbeitsplatten-category-lovina.jpg" alt="Acryl Arbeitsplatten Lovina">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Lovina</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 20mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>205&euro; / m</div>
                </div>
                
            </a>
        </div>
    </div>

    <!-- bespoke block -->
    <div class="d-block d-xl-none"> 
        <div class="d-block d-xl-none col-6 col-xl-auto break-boxage p-1 h-100">
            <div class="background-lightblue--lighter h-100 text-center">
                <a href="/kuechenarbeitsplatten-nach-mass" class="d-block">
                    <img  src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_413/v1574348978/DE/categories/fabrication-team-sanding.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_788/v1574348978/DE/categories/fabrication-team-sanding.jpg" alt="Ma&szlig;anfertigungen" />
                    <h2 class="page-heading pt-2 mb-0 mx-1 font-14 colour-grey6">Ma&szlig;anfertigungen</h2>
                    <p class="mx-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren Arbeitsplatten-Konfigurator und sparen Sie nur online <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
                    <div class="m-2 button button--green px-3 py-2">Mehr erfahren</div>
                </a> 
            </div> 
        </div>
    </div>
    <!-- end of bespoke block -->

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="205" data-farbe="grau" data-finish="matt" data-laenge="2m,3m" data-kante="abgeschraegte" data-tiefe="650mm,960mm" data-staerke="20mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="/acryl-arbeitsplatten/acryl-arbeitsplatte-twilight">
                <div class="align-self-start w-100">
                <div>
                    <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574259129/DE/categories/acryl/acryl-arbeitsplatten-category-twilight.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574259129/DE/categories/acryl/acryl-arbeitsplatten-category-twilight.jpg" alt="Acryl Arbeitsplatten Twilight"/>
                </div>
                    <div class="font-weight-6 py-2 w-100">Twilight</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 20mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>205&euro; / m</div>
                </div>
                
            </a>
        </div>
    </div>

    <!-- bespoke block -->
    <div class="d-none d-xl-block"> 
        <div class="col-12-bs col-md-6 col-xl-auto break-boxage p-1 h-100">
            <div class="background-lightblue--lighter h-100 text-center">
                <a href="/kuechenarbeitsplatten-nach-mass" class="d-block">
                    <img  src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_413/v1574348978/DE/categories/fabrication-team-sanding.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_788/v1574348978/DE/categories/fabrication-team-sanding.jpg" alt="Ma&szlig;anfertigungen" />
                    <h2 class="page-heading pt-2 mb-0 mx-1 font-14 colour-grey6">Ma&szlig;anfertigungen</h2>
                    <p class="mx-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren Arbeitsplatten-Konfigurator und sparen Sie nur online <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
                    <div class="m-2 button button--green px-3 py-2">Mehr erfahren</div>
                </a> 
            </div> 
        </div>
    </div>
    <!-- end of bespoke block -->

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="205" data-farbe="weiss" data-finish="matt" data-laenge="2m,3m" data-kante="abgeschraegte" data-tiefe="650mm,960mm" data-staerke="20mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="/acryl-arbeitsplatten/acryl-arbeitsplatte-snow-quartz">
                <div class="align-self-start w-100">
                <div>
                    <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574259130/DE/categories/acryl/acryl-arbeitsplatten-category-snow-quartz.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574259130/DE/categories/acryl/acryl-arbeitsplatten-category-snow-quartz.jpg" alt="Acryl Arbeitsplatten Snow Quartz"/>
                </div>
                    <div class="font-weight-6 py-2 w-100">Snow Quartz</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 20mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>205&euro; / m</div>
                </div> 
            </a>
        </div>
    </div>


    <div class="p-2 d-flex col-bs col-md-auto align-items-center order-1">
        <div class="filter-range__indi d-flex align-items-center justify-content-center p-3 d-none">
            <div class="text-center px-1">
                <div>Diese Ergebnisse haben<br class="d-md-none" /> Filter angewendet,</div>
                <div class="filter-range__indi__link underline">Alle <span class="filter-range__index"></span> Produkte anzeigen</div>
            </div>
        </div>
    </div>
</div>

<div>

    <h2 class="page-heading my-2">Acryl K&uuml;chenarbeitsplatten</h2>

    <p>Mit einer Auswahl an verf&uuml;gbaren Stilen bietet unsere Kollektion von Acryl K&uuml;chenarbeitsplatten Designs, die zu jedem Zuhause passen. Wenn Sie nach einer bezahlbaren Reproduktion von echtem Stein suchen, sind Sie bei uns richtig. Mit unserer einfach bedienbaren Webseite, einem pr&auml;zisen <a href="/kuechenarbeitsplatten-nach-mass" class="inline-link">Ma&szlig;anfertigungsservice</a> und einer 2-Mann Lieferung bis in einen Raum Ihrer Wahl verf&uuml;gbar, machen wir den Kauf Ihrer neuen Arbeitsplatte einfach</p>

</div>

<div class="container py-5">
    <div class="row-bs">
        <a class="col-md-4 text-center px-1 px-lg-4 py-3 cta d-flex flex-wrap justify-content-center align-items-start" href="/arbeitsplatten-planungstool">
            <img class="cta__img border-circle mb-5" src="skins/skin2019_redesign_home_new/media/arbeitsplatten-planungstool-musterservice.jpg" alt="Gestalten Sie Ihre Traumküche">
            <div class="col-12-bs font-26 font-weight-5">Entwerfen Sie Ihre Traumküche</div>
            <p class="d-none d-md-block">Unser Arbeitsplatten – Planungstool hilft Ihnen die perfekte Arbeitsplatte zu finden. Kombinieren Sie Farben und Schranktürstile mit unseren Arbeitsflächen, bis Sie die richtige finden.</p>
            <div class="button button--green align-self-end my-2 col-10 col-xl-8">Küche entwerfen</div>
        </a>
        <a class="col-md-4 text-center px-1 px-lg-4 py-3 cta d-flex flex-wrap justify-content-center align-items-start" href="/kuechenarbeitsplatte-muster">
            <img class="cta__img border-circle mb-5" src="skins/skin2019_redesign_home_new/media/resopal-arbeitsplatten-musterpaket-lg.jpg" alt="Bestellen Sie Muster">
            <div class="col-12-bs font-26 font-weight-5">Bestellen Sie Muster</div>
            <p class="d-none d-md-block">Überzeugen Sie sich von der außergewöhnlichen Qualität unserer Produkte bequem von Zuhause aus, bevor Sie Ihre Bestellung aufgeben.</p>
            <div class="button button--green align-self-end my-2 col-10 col-xl-8">Muster bestellen</div>
        </a>
        <a class="col-md-4 text-center px-1 px-lg-4 py-3 cta d-flex flex-wrap justify-content-center align-items-start" href="/arbeitsplatten-konfigurator">
            <img class="cta__img border-circle mb-5" src="skins/skin2019_redesign_home_new/media/arbeitsplatten-konfigurator-new-homepage.jpg" alt="Arbeitsplatte nach Maß gestalten">
            <div class="col-12-bs font-26 font-weight-5">Arbeitsplatte nach Ma<span style="text-transform: lowercase;">ß</span> Gestalten</div>
            <p class="d-none d-md-block">Entwerfen, kalkulieren Sie den Preis und bestellen Sie Ihre Arbeitsplatte online - eine schnelle und einfache Möglichkeit Arbeitsplatten nach Maß zu kaufen.</p>
            <div class="button button--green align-self-end my-2 col-10 col-xl-8">Arbeitsplatte gestalten</div>
        </a>
    </div>
</div>

<script src="/media/pdp/script/product-filters.js"></script>