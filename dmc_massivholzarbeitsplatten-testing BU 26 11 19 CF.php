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



<h1 class="font-20 mt-2">Kaufen Sie noch heute Ihre Massivholzplatte</h1>
<div class="dy-cutoff-message"></div>
<p class="mb-2">In unserem Sortiment finden Sie ein un&uuml;bertroffenes Angebot an Holzarbeitsplatten von au&szlig;ergew&ouml;hnlicher Qualit&auml;t, die wir zu fairen Preisen anbieten k&ouml;nnen. W&auml;hlen Sie Ihre Massivholzplatte nach Holzart, Aussehen und von einer Auswahl an unterschiedlichen L&auml;ngen, Tiefen sowie St&auml;rken aus.</p>





<!-- Desktop Filters -->

<div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
    <div class="row-bs col-12-bs col-xl">
        <div class="minimenu mr-1 my-1 p-2" data-filter="farbe">
            <div class="minimenu__name uppercase">farbe</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="hell">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Hell<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="mittel">
                    <div class="border-circle colour-indicator colour-indicator--mwood mr-2"></div>
                    <div>Mittel<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="dunkel">
                    <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                    <div>Dunkel<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="holzart">
            <div class="minimenu__name uppercase">Holzart</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="eiche">
                    <div>Eiche<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="nussbaum">
                    <div>Nussbaum<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="iroko">
                    <div>Iroko<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="buche">
                    <div>Buche<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="esche">
                    <div>Esche<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="wenge">
                    <div>Wenge<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="bambus">
                    <div>Bambus<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="zebrano">
                    <div>Zebrano<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="kirschbaum">
                    <div>Kirschbaum<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="ahorn">
                    <div>Ahorn<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="holzart" data-filter-value="birke">
                    <div>Birke<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="konstruktion">
            <div class="minimenu__name uppercase">Konstruktion</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="konstruktion" data-filter-value="keilgezinkt">
                    <div>Keilgezinkt<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="konstruktion" data-filter-value="stabverleimt">
                    <div>Stabverleimt<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="konstruktion" data-filter-value="gepresst">
                    <div>Gepresst<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="laenge">
            <div class="minimenu__name uppercase">l&auml;nge</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.1m">
                    <div>1.1m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.2m">
                    <div>1.2m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.5m">
                    <div>1.5m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.8m">
                    <div>1.8m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="2m">
                    <div>2m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="2.4m">
                    <div>2.4m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="2.5m">
                    <div>2.5m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"></span></div>
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
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="620mm">
                    <div>620mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="635mm">
                    <div>635mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="650mm">
                    <div>650mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="720mm">
                    <div>720mm<span class="minimenu__details__ind"></span></div>
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
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="27mm">
                    <div>27mm<span class="minimenu__details__ind"></span></div>
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
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="hell">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Hell<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="mittel">
                    <div class="border-circle colour-indicator colour-indicator--mwood mr-2"></div>
                    <div>Mittel<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="dunkel">
                    <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                    <div>Dunkel<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">HOLZART</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="eiche">
                    <div>Eiche<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="nussbaum">
                    <div>Nussbaum<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="iroko">
                    <div>Iroko<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="buche">
                    <div>Buche<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="esche">
                    <div>Esche<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="wenge">
                    <div>Wenge<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="bambus">
                    <div>Bambus<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="zebrano">
                    <div>Zebrano<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="kirschbaum">
                    <div>Kirschbaum<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="ahorn">
                    <div>Ahorn<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="holzart" data-filter-value="birke">
                    <div>Birke<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">KONSTRUKTION</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="konstruktion" data-filter-value="keilgezinkt">
                    <div>Keilgezinkt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="konstruktion" data-filter-value="stabverleimt">
                    <div>Stabverleimt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="konstruktion" data-filter-value="gepresst">
                    <div>Gepresst<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">L&Auml;NGE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.1m">
                    <div>1.1m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.2m">
                    <div>1.2m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.5m">
                    <div>1.5m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.8m">
                    <div>1.8m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="2m">
                    <div>2m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="2.4m">
                    <div>2.4m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="2.5m">
                    <div>2.5m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"> (0)</span></div>
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
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="620mm">
                    <div>620mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="635mm">
                    <div>635mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="720mm">
                    <div>720mm<span class="minimenu__details__ind"> (0)</span></div>
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
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="27mm">
                    <div>27mm<span class="minimenu__details__ind"> (0)</span></div>
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

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="60" data-farbe="mittel" data-holzart="eiche" data-konstruktion="keilgezinkt" data-laenge="1.2m,1.8m,2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-eiche">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574246534/DE/categories/massivholz/arbeitsplatten-eiche-swatch.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574246534/DE/categories/massivholz/arbeitsplatten-eiche-swatch.jpg" alt="Arbeitsplatte Eiche" />
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>60&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="68.33" data-farbe="mittel" data-holzart="eiche" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,635mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/premium-arbeitsplatte-eiche">
            <div class="align-self-start w-100">
                <div>
                    <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574246875/DE/categories/massivholz/arbeitsplatten-premium-eiche.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574246875/DE/categories/massivholz/arbeitsplatten-premium-eiche.jpg" alt="Premium Arbeitsplatte Eiche">
                </div>
                <div class="font-weight-6 py-2 w-100">Premium Eiche</div>
            </div>
            <div class="align-self-end w-100">
                <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>68.33&euro; / m</div>
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
                    <h2 class="page-heading pt-2 mb-0 ta-c mx-1 font-14 colour-grey6">Ma&szlig;anfertigungen</h2>
                    <p class="mx-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren Arbeitsplatten-Konfigurator und sparen Sie nur online <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
                    <div class="m-2 ta-c button button--green px-3 py-2">Mehr erfahren</div>
                </a> 

            </div> 
        </div>
    </div>
    <!-- end of bespoke block -->


    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="83.33" data-farbe="mittel" data-holzart="eiche" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="https://www.worktop-express.de/massivholz-arbeitsplatten/arbeitsplatte-eiche-geoelt">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574246534/DE/categories/massivholz/arbeitsplatten-eiche-swatch.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574246534/DE/categories/massivholz/arbeitsplatten-eiche-swatch.jpg" alt="Arbeitsplatte Eiche Ge&ouml;lt">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche Ge&ouml;lt</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>83.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>


    <!-- bespoke block -->
    <div class="d-none d-xl-block"> 
        <div class="col-12-bs col-md-6 col-xl-auto break-boxage p-1 text-center h-100">
            <div class="background-lightblue--lighter h-100">

                <a href="/kuechenarbeitsplatten-nach-mass" class="d-block">
                    <img  src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_413/v1574348978/DE/categories/fabrication-team-sanding.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,w_788/v1574348978/DE/categories/fabrication-team-sanding.jpg" alt="Ma&szlig;anfertigungen" />
                    <h2 class="page-heading pt-2 mb-0 ta-c mx-1 font-14 colour-grey6">Ma&szlig;anfertigungen</h2>
                    <p class="mx-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren Arbeitsplatten-Konfigurator und sparen Sie nur online <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
                    <div class="m-2 ta-c button button--green px-3 py-2">Mehr erfahren</div>
                </a> 

            </div> 
        </div>
    </div>
    <!-- end of bespoke block -->


    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="86.66" data-farbe="mittel" data-holzart="bambus" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/karamell-bambus-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574247119/DE/categories/massivholz/arbeitsplatten-karamell-bambus.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574247119/DE/categories/massivholz/arbeitsplatten-karamell-bambus.jpg" alt="Arbeitsplatte Karamell Bambus">
                    </div>
                        <div class="font-weight-6 py-2 w-100">Karamell Bambus</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>86.66&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="43.33" data-farbe="hell" data-holzart="buche" data-konstruktion="keilgezinkt" data-laenge="1.2m,1.8m,2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-buche">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574247345/DE/categories/massivholz/arbeitsplatten-buche.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574247345/DE/categories/massivholz/arbeitsplatten-buche.jpg" alt="Arbeitsplatte Buche">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Buche</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>43.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="78.33" data-farbe="dunkel" data-holzart="iroko" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-iroko">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574247473/DE/categories/massivholz/arbeitsplatten-iroko.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574247473/DE/categories/massivholz/arbeitsplatten-iroko.jpg" alt="Arbeitsplatte Iroko">
                    </div>
                        <div class="font-weight-6 py-2 w-100">Iroko</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>78.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="46.66" data-farbe="hell" data-holzart="buche" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/premium-arbeitsplatte-buche">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574248302/DE/categories/massivholz/arbeitsplatten-premium-buche.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574248302/DE/categories/massivholz/arbeitsplatten-premium-buche.jpg" alt="Premium Arbeitsplatte Buche">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Premium Buche</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>46.66&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="136.08" data-farbe="dunkel" data-holzart="nussbaum" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-amerikanischer-nussbaum">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574248453/DE/categories/massivholz/arbeitsplatten-amerikanischer-nussbaum.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574248453/DE/categories/massivholz/arbeitsplatten-amerikanischer-nussbaum.jpg" alt="Arbeitsplatte Amerikanischer Nussbaum">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Amerikanischer<br/>Nussbaum</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>136.08&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="146.66" data-farbe="dunkel" data-holzart="eiche" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-eiche-dunkel">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574248616/DE/categories/massivholz/arbeitsplatten-rauchereiche.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574248616/DE/categories/massivholz/arbeitsplatten-rauchereiche.jpg" alt="Arbeitsplatte Eiche Dunkel">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche Dunkel</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>146.66&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="52.33" data-farbe="hell" data-holzart="birke" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-birke">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574248736/DE/categories/massivholz/arbeitsplatten-birke.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574248736/DE/categories/massivholz/arbeitsplatten-birke.jpg" alt="Arbeitsplatte Birke">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Birke</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>52.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>


    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="96.25" data-farbe="mittel" data-holzart="eiche" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/deluxe-arbeitsplatte-eiche">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574248857/DE/categories/massivholz/deluxe-arbeitsplatten.jpg" alt="Alle Deluxe Arbeitsplatten anzeigen" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574248857/DE/categories/massivholz/deluxe-arbeitsplatten.jpg">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Deluxe Eiche</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: Ab 2-6 Arbeitstagen</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>96.25&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="85" data-farbe="dunkel" data-holzart="nussbaum" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-nussbaum">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574249071/DE/categories/massivholz/arbeitsplatten-nussbaum.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574249071/DE/categories/massivholz/arbeitsplatten-nussbaum.jpg" alt="Arbeitsplatte Nussbaum">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Nussbaum</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>85&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="75" data-farbe="mittel" data-holzart="kirschbaum" data-konstruktion="keilgezinkt" data-laenge="3m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-kirschbaum">
                <div class="align-self-start w-100">
                    <div>
                        <img src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574249241/DE/categories/massivholz/arbeitsplatten-kirschbaum.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574249241/DE/categories/massivholz/arbeitsplatten-kirschbaum.jpg" alt="Arbeitsplatten Kirschbaum">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Kirschbaum</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>75&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="85" data-farbe="hell" data-holzart="bambus" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/bambus-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574249343/DE/categories/massivholz/arbeitsplatten-bambus.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574249343/DE/categories/massivholz/arbeitsplatten-bambus.jpg" alt="Bambus Arbeitsplatten">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Bambus</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>85&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="68.33" data-farbe="hell" data-holzart="ahorn" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="27mm,40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-ahorn">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574249469/DE/categories/massivholz/arbeitsplatten-ahorn.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574249469/DE/categories/massivholz/arbeitsplatten-ahorn.jpg" alt="Arbeitsplatten Ahorn">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Ahorn</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 27mm und 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>68.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="185" data-farbe="dunkel" data-holzart="wenge" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-wenge">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574250126/DE/categories/massivholz/arbeitsplatten-wenge.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574250126/DE/categories/massivholz/arbeitsplatten-wenge.jpg" alt="Arbeitsplatten Wenge">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Wenge</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>185&euro; / m</div>
                </div>
            </a>
        </div>
    </div>


    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="75" data-farbe="hell" data-holzart="esche" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-esche">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574250223/DE/categories/massivholz/arbeitsplatten-esche.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574250223/DE/categories/massivholz/arbeitsplatten-esche.jpg" alt="Arbeitsplatte Esche">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Esche</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>75&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="183.33" data-farbe="mittel" data-holzart="zebrano" data-konstruktion="keilgezinkt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">   
            <a class="d-flex flex-wrap h-100" href="/massivholz-arbeitsplatten/zebrano-arbeitsplatte">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574250308/DE/categories/massivholz/arbeitsplatten-zebrano.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574250308/DE/categories/massivholz/arbeitsplatten-zebrano.jpg" alt="Zebrano Arbeitsplatten">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Zebrano</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>183.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="65" data-farbe="mittel" data-holzart="eiche" data-konstruktion="keilgezinkt" data-laenge="3m,4m" data-staerke="40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-eiche-rustikal">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574251331/DE/categories/massivholz/eiche-rustikal.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574251331/DE/categories/massivholz/eiche-rustikal.jpg" alt="Arbeitsplatte Eiche Rustikal">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche Rustikal</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>65&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="102.50" data-farbe="mittel" data-holzart="eiche" data-konstruktion="stabverleimt" data-laenge="1m,1.5m,2m,2.4m" data-staerke="40mm" data-tiefe="650mm">
        <div class="card card--full h-100 p-1">   
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/tischplatte-eiche-rustikal-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574252542/DE/categories/massivholz/eiche-rustikal-durchgehende-lamellen.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574252542/DE/categories/massivholz/eiche-rustikal-durchgehende-lamellen.jpg" alt="Tischplatte Massivholz Eiche Rustikal mit Durchgehenden Lamellen (45mm Dauben)">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche Rustikal (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>102.50&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="123.33" data-farbe="mittel" data-holzart="eiche" data-konstruktion="stabverleimt" data-laenge="1m,1.5m,2m,2.4m" data-staerke="40mm" data-tiefe="620mm,650mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/premium-eiche-tischplatte-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574257767/DE/categories/massivholz/premium-eiche-durchgehende-lamellen.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574257767/DE/categories/massivholz/premium-eiche-durchgehende-lamellen.jpg" alt="Tischplatte Massivholz Eiche Rustikal mit Durchgehenden Lamellen (45mm Dauben)">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Premium Eiche (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>123.33&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="223.75" data-farbe="mittel" data-holzart="zebrano" data-konstruktion="stabverleimt" data-laenge="2m" data-staerke="40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/zebrano-arbeitsplatte-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574256805/DE/categories/massivholz/zebrano-arbeitsplatte-durchgehenden-lamellen.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574256805/DE/categories/massivholz/zebrano-arbeitsplatte-durchgehenden-lamellen.jpg" alt="Arbeitsplatte Zebrano mit durchgehenden Lamellen">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Zebrano (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>223.75&euro; / m</div>
                </div>
            </a>
        </div>
    </div>


    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="170" data-farbe="mittel" data-holzart="eiche" data-konstruktion="stabverleimt" data-laenge="2m,2.5m,3m,4m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-eiche-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574256949/DE/categories/massivholz/alle-arbeitsplatten-anzeigen.jpg" alt="Arbeitsplatten Eiche mit durchgehenden Lamellen" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574256949/DE/categories/massivholz/alle-arbeitsplatten-anzeigen.jpg">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Eiche (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 2-6 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>170&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="290" data-farbe="dunkel" data-holzart="nussbaum" data-konstruktion="stabverleimt" data-laenge="2m" data-staerke="40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">  
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-amerikanischer-nussbaum-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574257232/DE/categories/massivholz/arbeitsplatte-amerikanischer-nussbaum-durchgehenden-lamellen.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574257232/DE/categories/massivholz/arbeitsplatte-amerikanischer-nussbaum-durchgehenden-lamellen.jpg" alt="Arbeitsplatte Amerikanischer Nussbaum mit durchgehenden Lamellen">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Amerikanischer<br/>Nussbaum (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>290&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="136.66" data-farbe="dunkel" data-holzart="iroko" data-konstruktion="stabverleimt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,720mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-iroko-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574257367/DE/categories/massivholz/holzarbeitsplatten-mit-durchgehenden-lamellen.jpg" alt="Arbeitsplatten Iroko mit durchgehenden Lamellen" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574257367/DE/categories/massivholz/holzarbeitsplatten-mit-durchgehenden-lamellen.jpg">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Iroko (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>136.66&euro; / m</div>
                </div>
            </a>
        </div>
    </div>
    <div class="filter-range__item col-6 col-md-3 col-xl-auto p-1" data-price="277.5" data-farbe="dunkel" data-holzart="wenge" data-konstruktion="stabverleimt" data-laenge="2m,3m,4m" data-staerke="40mm" data-tiefe="620mm,960mm">
        <div class="card card--full h-100 p-1">
            <a class="d-flex flex-wrap h-100" href="massivholz-arbeitsplatten/arbeitsplatte-wenge-durchgehende-lamellen">
                <div class="align-self-start w-100">
                    <div>
                        <img class="cat-card-container__img" src="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_190,w_190/v1574257493/DE/categories/massivholz/abeitsplatte-wenge-durchgehenden-lamellen.jpg" data-at2x="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,g_north_west,h_380,w_380/v1574257493/DE/categories/massivholz/abeitsplatte-wenge-durchgehenden-lamellen.jpg" alt="Arbeitsplatte Wenge mit durchgehenden Lamellen">
                    </div>
                    <div class="font-weight-6 py-2 w-100">Wenge (DL)</div>
                </div>
                <div class="align-self-end w-100">
                    <div class="font-12 colour-grey3 py-1">St&auml;rke: 40mm<br/>Lieferzeit: 7-12 Arbeitstage</div>
                    <div class="font-20 font-md-22 font-weight-6 pt-2 pb-1 spacer-line align-self-end w-100"><sup class="font-11 font-weight-4">ab </sup>277.50&euro; / m</div>
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




