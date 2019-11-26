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

<h1 class="font-20 my-2">Deutschlands beste Auswahl an Resopal&reg; Arbeitsplatten</h1>
<div class="dy-cutoff-message"></div>
<p class="mb-2">Bei Worktop Express bieten wir ein tolles Sortiment an hochwertigen Resopal&reg; Arbeitsplatten, die wir in verschiedenen Designs wie Betonoptik, Holzoptik oder Stein-Optik vorr&auml;tig haben.  </p>
<p class="mb-2">Jede Oberfl&auml;che aus Schichtstoff wird sorgf&auml;ltig von Resopal&reg; getestet und ist pflegeleicht, belastbar sowie lebensmittelecht. Geben Sie Ihrem Zuhause f&uuml;r wenig Geld einen neuen Look mit unseren stilvollen Laminat - Arbeitsplatten.</p>

<!-- Desktop Filters -->

<div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
    <div class="row-bs col-12-bs col-xl">
        <div class="minimenu mr-1 my-1 p-2" data-filter="farbe">
            <div class="minimenu__name uppercase">farbe</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="schwarz">
                    <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                    <div>Schwarz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="weiss">
                    <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                    <div>Weiss<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="hell">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Hell<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="helles-holz">
                    <div class="border-circle colour-indicator colour-indicator--lwood mr-2"></div>
                    <div>Helles Holz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="mittleres-holz">
                    <div class="border-circle colour-indicator colour-indicator--mwood mr-2"></div>
                    <div>Mittleres Holz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="dunkles-holz">
                    <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                    <div>Dunkles Holz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="grau">
                    <div class="border-circle colour-indicator colour-indicator--grey mr-2"></div>
                    <div>Grau<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="braunton">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                    <div>Braunton<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="finish">
            <div class="minimenu__name uppercase">Finish</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="premium">
                    <div>Premium<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="standard">
                    <div>Standard<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="hochglanz">
                    <div>Hochglanz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="strukturiert">
                    <div>Strukturiert<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="matt">
                    <div>Matt<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="stil">
            <div class="minimenu__name uppercase">Stil</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="holzdekor">
                    <div>Holzdekor<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="steindekor">
                    <div>Steindekor<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="unidekor">
                    <div>Unidekor<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="industrial">
                    <div>Industrial<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="kante">
            <div class="minimenu__name uppercase">Kante</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="kante" data-filter-value="abgerundet">
                    <div>Abgerundet<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="kante" data-filter-value="rechteckig">
                    <div>Rechteckig<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="laenge">
            <div class="minimenu__name uppercase">l&auml;nge</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.2m">
                    <div>1.2m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.8m">
                    <div>1.8m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3.6m">
                    <div>3.6m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="4m">
                    <div>4m<span class="minimenu__details__ind"></span></div>
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
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="600mm">
                    <div>600mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="620mm">
                    <div>620mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="900mm">
                    <div>900mm<span class="minimenu__details__ind"></span></div>
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
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="28mm">
                    <div>28mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="38mm">
                    <div>38mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="40mm">
                    <div>40mm<span class="minimenu__details__ind"></span></div>
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
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="schwarz">
                    <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                    <div>Schwarz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="weiss">
                    <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                    <div>Weiss<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="hell">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Hell<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="hell-holz">
                    <div class="border-circle colour-indicator colour-indicator--lwood mr-2"></div>
                    <div>Hell Holz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="mittleres-holz">
                    <div class="border-circle colour-indicator colour-indicator--mwood mr-2"></div>
                    <div>Mitteleres Holz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="dunkles-holz">
                    <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                    <div>Dunkel Holz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="grau">
                    <div class="border-circle colour-indicator colour-indicator--grey mr-2"></div>
                    <div>Grau<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="braunton">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                    <div>Braunton<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>

        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">FINISH</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="premium">
                    <div>Premium<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="standard">
                    <div>Standard<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="hochglanz">
                    <div>Hochglanz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="strukturiert">
                    <div>Strukturiert<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="matt">
                    <div>Matt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">STIL</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="holzdekor">
                    <div>Holzdekor<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="steindekor">
                    <div>Steindekor<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="unidekor">
                    <div>Unidekor<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="industrial">
                    <div>Industrial<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">KANTE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="kante" data-filter-value="abgerundet">
                    <div>Abgerundet<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="kante" data-filter-value="rechteckig">
                    <div>Rechteckig<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">L&Auml;NGE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.2m">
                    <div>1.2m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.8m">
                    <div>1.8m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3.6m">
                    <div>3.6m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="4m">
                    <div>4m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">TIEFE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="600mm">
                    <div>600mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="620mm">
                    <div>620mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="900mm">
                    <div>900mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">ST&Auml;RKE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="28mm">
                    <div>28mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="38mm">
                    <div>38mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="40mm">
                    <div>40mm<span class="minimenu__details__ind"> (0)</span></div>
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

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="helles-holz" data-finish="matt" data-stil="holzdekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-core-maple">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421344/DE/categories/laminat/core-maple-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421344/DE/categories/laminat/core-maple-gallery.jpg" alt="Arbeitsplatte Core Maple" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Core Maple</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="mittleres-holz,hell" data-finish="strukturiert" data-stil="holzdekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/kuechenarbeitsplatte-eiche">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574418946/DE/categories/laminat/eiche-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574418946/DE/categories/laminat/eiche-gallery.jpg" alt="K&uuml;chenarbeitsplatte Eiche" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <!-- bespoke block -->
    <div class="d-block d-xl-none"> 
        <div class="col-6 col-xl-auto break-boxage p-1 h-100">
            <div class="background-lightblue--lighter h-100 text-center">
                <a href="/kuechenarbeitsplatten-nach-mass" class="d-block">
                    <img  src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_413/v1574348978/DE/categories/fabrication-team-sanding.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_788/v1574348978/DE/categories/fabrication-team-sanding.jpg" alt="Ma&szlig;anfertigungen" />
                    <h2 class="page-heading pt-2 mb-0 ta-l mx-1 font-14 colour-grey6 text-center">Ma&szlig;anfertigungen</h2>
                    <p class="mx-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren Arbeitsplatten-Konfigurator und sparen Sie nur online <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
                    <div class="m-2 ta-c button button--green px-3 py-2 ">Mehr erfahren</div>
                </a> 
            </div> 
        </div>
    </div>
    <!-- end of bespoke block -->

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="grau" data-finish="matt" data-stil="industrial,steindekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-essential-wall">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421740/DE/categories/laminat/arbeitsplatte-essential-wall-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421740/DE/categories/laminat/arbeitsplatte-essential-wall-gallery.jpg" alt="Arbeitsplatte Essential Wall" />
                    </div>
                </div>
                <div class="font-weight-6 py-2 w-100">Essential Wall</div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <!-- bespoke block -->
    <div class="d-none d-xl-block"> 
        <div class="col-12-bs col-md-6 col-xl-auto break-boxage p-1 h-100">
            <div class="background-lightblue--lighter h-100 text-center">
                <a href="/kuechenarbeitsplatten-nach-mass" class="d-block">
                    <div><img  src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_413/v1574348978/DE/categories/fabrication-team-sanding.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_788/v1574348978/DE/categories/fabrication-team-sanding.jpg" alt="Ma&szlig;anfertigungen" /></div>
                    <h2 class="page-heading pt-2 mb-0 ta-l mx-1 font-14 colour-grey6 text-center">Ma&szlig;anfertigungen</h2>
                    <p class="mx-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren Arbeitsplatten-Konfigurator und sparen Sie nur online <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
                    <div class="m-2 ta-c button button--green px-3 py-2 text-center">Mehr erfahren</div>
                </a> 
            </div> 
        </div>
    </div>
    <!-- end of bespoke block -->

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="grau" data-finish="matt" data-stil="steindekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/granit-arbeitsplatte-grau">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421838/DE/categories/laminat/granit-arbeitsplatte-grau-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421838/DE/categories/laminat/granit-arbeitsplatte-grau-gallery.jpg" alt="Granit Arbeitsplatte Grau" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Granit Grau</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="helles-holz" data-finish="matt" data-stil="holzdekor" data-laenge="3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/helles-holz-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574418789/DE/categories/laminat/helles-holz-arbeitsplatte-galerie.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574418789/DE/categories/laminat/helles-holz-arbeitsplatte-galerie.jpg" alt="Helles Holz Arbeitsplatte" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Helles Holz</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="grau,braun" data-finish="matt" data-stil="steindekor,industrial" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-ruby-limescale">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421430/DE/categories/laminat/ruby-limescale-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421430/DE/categories/laminat/ruby-limescale-gallery.jpg" alt="Arbeitsplatte Ruby Limescale" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Ruby Limescale</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="schwarz" data-finish="matt" data-stil="steindekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/schwarzer-granit-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574416926/DE/categories/laminat/schwarzer-granit-arbeitsplatte-galerie.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574416926/DE/categories/laminat/schwarzer-granit-arbeitsplatte-galerie.jpg" alt="Schwarzer Granit Arbeitsplatte" />
                    </div>
                </div>
                <div class="font-weight-6 py-2 w-100">Schwarzer Granit</div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="schwarz" data-finish="matt" data-stil="steindekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/schwarzer-marmor-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574419299/DE/categories/laminat/schwarzer-marmor-arbeitsplatte-galerie.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574419299/DE/categories/laminat/schwarzer-marmor-arbeitsplatte-galerie.jpg" alt="Schwarzer Marmor Arbeitsplatte" />
                    </div>
                </div>
                <div class="font-weight-6 py-2 w-100">Schwarzer Marmor</div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="41.67" data-farbe="weiss" data-finish="matt" data-stil="unidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/weisse-kuechenarbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574416982/DE/categories/laminat/weisse-kuechenarbeitsplatte-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574416982/DE/categories/laminat/weisse-kuechenarbeitsplatte-gallery.jpg" alt="Wei&szlig;e K&uuml;chenarbeitsplatte" />
                    </div>
                </div>
                <div class="font-weight-6 py-2 w-100">Wei&szlig;</div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>41.67&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="42.5" data-farbe="mittleres-holz" data-finish="matt" data-stil="holzdekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-cerasum-mare">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421096/DE/categories/laminat/cerasum-mare-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421096/DE/categories/laminat/cerasum-mare-gallery.jpg" alt="Arbeitsplatte Cerasum Mare" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Cerasum Mare</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>42.5&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="42.50" data-farbe="braunton" data-finish="hochglanz" data-stil="steindekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-emperador">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421554/DE/categories/laminat/emperador-arbeitsplatte-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421554/DE/categories/laminat/emperador-arbeitsplatte-gallery.jpg" alt="Arbeitsplatte Emperadore" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Emperador</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>42.50&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="42.5" data-farbe="grau" data-finish="strukturiert" data-stil="steindekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/grauer-stein-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574419237/DE/categories/laminat/grauer-stein-arbeitsplatte-galerie.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574419237/DE/categories/laminat/grauer-stein-arbeitsplatte-galerie.jpg" alt="Grauer Stein Arbeitsplatte" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Grauer Stein</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>42.5&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="42.5" data-farbe="braunton" data-finish="strukturiert" data-stil="metall-optik" data-laenge="3m" data-kante="rechteckig" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/kuechenarbeitsplatte-kupfer">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574420916/DE/categories/laminat/kupfer-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574420916/DE/categories/laminat/kupfer-gallery.jpg" alt="K&uuml;chenarbeitsplatte Kupfer - Industrial Style" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Kupfer</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>42.5&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="42.5" data-farbe="schwarz" data-finish="strukturiert" data-stil="Steindekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-raja-black">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421013/DE/categories/laminat/raja-black-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421013/DE/categories/laminat/raja-black-gallery.jpg" alt="Arbeitsplatte Raja Black" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Raja Black</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>42.5&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="42.5" data-farbe="weiss" data-finish="strukturiert" data-stil="steindekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/weisser-marmor-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574417396/DE/categories/laminat/weiser-marmor-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574417396/DE/categories/laminat/weiser-marmor-gallery.jpg" alt="Wei&szlig;er Marmor Arbeitsplatte" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Wei&szlig;er Marmor</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>42.5&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="51.25" data-farbe="grau" data-finish="strukturiert" data-stil="steindekor,industrial" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/betonoptik-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574419402/DE/categories/laminat/betonoptik-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574419402/DE/categories/laminat/betonoptik-gallery.jpg" alt="Betonoptik Arbeitsplatte" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Betonoptik</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>51.25&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="51.25" data-farbe="grau" data-finish="strukturiert" data-stil="holzdekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/kuechenarbeitsplatte-dunkles-holz">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574420721/DE/categories/laminat/dunkles-holz-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574420721/DE/categories/laminat/dunkles-holz-gallery.jpg" alt="K&uuml;chenarbeitsplatte dunkles Holz" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Dunkles Holz</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>51.25&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="51.25" data-farbe="braunton" data-finish="premium,matt" data-stil="industrial" data-laenge="3m" data-kante="rechteckig" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-eternal-iron">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574421257/DE/categories/laminat/eternal-iron-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574421257/DE/categories/laminat/eternal-iron-gallery.jpg" alt="Arbeitsplatte Eternal Iron" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eternal Iron</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>51.25&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="51.25" data-farbe="mittleres-holz" data-finish="strukturiert" data-stil="holzdekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/rustikales-holz-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574419585/DE/categories/laminat/rustikales-holz-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574419585/DE/categories/laminat/rustikales-holz-gallery.jpg" alt="Rustikales Holz" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Rustikales Holz</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>51.25&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="68.33" data-farbe="schwarz" data-finish="strukturiert" data-stil="steidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="resopal-arbeitsplatten/arbeitsplatte-schwarzer-schiefer">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574420812/DE/categories/laminat/schwarzer-schiefer-gallery.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574420812/DE/categories/laminat/schwarzer-schiefer-gallery.jpg" alt="Arbeitsplatte schwarzer Schiefer" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Schwarzer Schiefer</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 38mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line"><sup class="font-11 font-weight-4">ab </sup>68.33&euro; / m</div>
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



<h2 class="font-20 my-2">Resopal Arbeitsplatte online bestellen</h2>
<p class="mb-2">Eine Resopal&reg; Arbeitsplatte ist wasserabweisend, was sie zu einer praktischen L&ouml;sung f&uuml;r vielgenutzte Familienk&uuml;chen macht. Die K&uuml;chenarbeitsplatten sind in verschiedenen Farben und Dekoren erh&auml;ltlich und werden aus hochqualitativen Materialien hergestellt, was ein sch&ouml;nes Finish f&uuml;r viele Jahre garantiert</p>
<p class="mb-2">Ein Musterpaket mit je einem Muster jeder beschichteten Arbeitsplatte aus unserem Sortiment k&ouml;nnen Sie bei uns f&uuml;r nur 5&euro; inkl. Lieferung erhalten. Die Kosten k&ouml;nnen im Anschluss beim Kauf einer Resopal® Arbeitsplatte von uns zur&uuml;ckerstattet werden.</p>

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