<div class="tab-pane text-white fade show active" id="mainTab"
     role="tabpanel" tabindex="0">

    <!--Match Fixing Slider-->
    <div class="match__fixing__wrap top__bottom__space left__right__space owl-theme owl-carousel">
        @foreach($fixture_slides as $fixture)
        <a href="#0" class="match__fixing__items">
            <div class="match__head">
                <div class="match__head__left">
                    <span class="icons">
                        <i class="icon-football"></i>
                        </span>
                    <span>{{$fixture->league->name}}
                    </span>
                </div>
                <span class="today">
                    {{\App\Helpers\Helpers::makeTime($fixture)}}
                </span>
            </div>
            <div class="match__vs">
                <div class="match__vs__left">
                    <span>
                      {{$fixture->team_home->name}}
                    </span>
                    <span class="flag">
                        <img src="{{$fixture->team_home->logo}}" alt="flag">
                    </span>
                </div>
                <span class="vs">
                    Vs
                </span>
                <div class="match__vs__left">
                    <span class="flag">
                        <img src="{{$fixture->team_away->logo}}" alt="flag">
                    </span>
                    <span>
                       {{$fixture->team_away->name}}
                    </span>
                </div>
            </div>
            <div class="match__result">
                <span class="matchborder"></span>
                <span class="match__text">Match Reult
                </span>
            </div>
            <ul class="match__point">
                <li>
                    <span>1</span>
                    <span>8.55</span>
                </li>
                <li>
                    <span>X</span>
                    <span>6.50</span>
                </li>
                <li>
                    <span>2</span>
                    <span>3.20</span>
                </li>
            </ul>
        </a>
        @endforeach
    </div>

    <!--Match Fixing Slider-->

    <!--Main body-->
    <div class="main__body__wrap left__right__space">

        <!--Live__heightlight Here-->
        <div class="live__heightlight mb__30">
            <div class="section__title">
                <h4>
                    Live Highlights
                </h4>
            </div>
            <div class="heightlight__tab">
                <div class="nav b__bottom" id="nav-tabheight"
                     role="tablist">
                    <button class="nav-link active" id="lightlighttab"
                            data-bs-toggle="tab" data-bs-target="#height1"
                            type="button" role="tab" aria-selected="true">
                                                                    <span class="icons">
                                                                        <i class="icon-football"></i>
                                                                    </span>
                        <span>
                                                                        Football
                                                                    </span>
                    </button>
                    <button class="nav-link " id="lightlighttab2tennis"
                            data-bs-toggle="tab"
                            data-bs-target="#height2tennis" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-tennis"></i>
                                                                        </span>
                        <span>
                                                                            Tennis
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttab3basket"
                            data-bs-toggle="tab"
                            data-bs-target="#basketbtab" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-basketball"></i>
                                                                        </span>
                        <span>
                                                                            Basketball
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttabvolly"
                            data-bs-toggle="tab"
                            data-bs-target="#vollyballs" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-volly"></i>
                                                                        </span>
                        <span>
                                                                            Volleyball
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttab5cricket"
                            data-bs-toggle="tab"
                            data-bs-target="#crickettab" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-cricket"></i>
                                                                        </span>
                        <span>
                                                                            Cricket
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttable"
                            data-bs-toggle="tab"
                            data-bs-target="#tabletennis" type="button"
                            role="tab" aria-selected="false">
                        <span class="icons">
                            <i class="icon-ttennis"></i>
                        </span>
                        <span>
                            Table Tennis
                        </span>
                    </button>
                </div>
            </div>
            <div class="height__table">
                <div class="tab-content" id="nav-tabContentheight">
                    <!--Football-->
                    <div class="tab-pane fade text-white show active"
                         id="height1" role="tabpanel"
                         aria-labelledby="nav-home-tabpre" tabindex="0">
                        <div class="main__table">
                            <div class="section__head b__bottom">
                                <div class="left__head">
                                    <span class="icons">
                                        <i class="icon-football"></i>
                                    </span>
                                    <span>
                                        Football
                                    </span>
                                </div>
                                <div class="right__catagoris">
                                    <div class="right__cate__items">
                                        <select name="cate1"
                                                id="categoris74">
                                            <option value="1">
                                                Result 1X2
                                            </option>
                                            <option value="1">
                                                Result 1X3
                                            </option>
                                            <option value="1">
                                                Result 1X4
                                            </option>
                                            <option value="1">
                                                Result 1X5
                                            </option>
                                        </select>
                                    </div>
                                    <div class="right__cate__items">
                                        <select name="cate1"
                                                id="categoris2">
                                            <option value="1">
                                                Over/Under
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                        </select>
                                    </div>
                                    <div class="right__cate__items">
                                        <select name="cate1"
                                                id="categoris3">
                                            <option value="1">
                                                Both teams to score?
                                            </option>
                                            <option value="1">
                                                ...
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                            <option value="1">
                                                ...
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table__wrap">
                                <div
                                    class="table__items table__pointnone__items">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                        </div>
                                    </div>
                                    <div class="cart__point">
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing opo twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box"
                                           class="point__box bg__none">
                                            1
                                        </a>
                                        <a href="#0box"
                                           class="point__box bg__none">
                                            X
                                        </a>
                                        <a href="#0box"
                                           class="point__box bg__none">
                                            2
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        Goals
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box bg__none">
                                                Over
                                            </a>
                                            <a href="#box"
                                               class="point__box bg__none">
                                                Under
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#0"
                                               class="point__box bg__none">
                                                Yes
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                No
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @foreach($fixture_days as $fixture)
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                            <img height="20" src="{{$fixture->team_home->logo}}">   {{$fixture->team_home->name}}
                                            </h6>
                                            <span class="text">
                                              <img height="20" src="{{$fixture->team_away->logo}}">  {{$fixture->team_away->name}}
                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Live
                                                </a>
                                                <span>
                                                    {{\App\Helpers\Helpers::makeTime($fixture)}}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cart__point"><span> {{$fixture->goal_home}}</span>
                                        <span>{{$fixture->goal_home}}</span>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                8.55
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                2.70
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-lock"></i>
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{--                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div class="t__items__left">
                                                                            <h6>
                                                                                Lampun Warrior FC
                                                                            </h6>
                                                                            <span class="text">
                                                                                                                                Prachuap FC
                                                                                                                            </span>
                                                                            <p>
                                                                                <a href="#0">
                                                                                    Live
                                                                                </a>
                                                                                <span>
                                                                                                                                    1H 05:34
                                                                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart__point">
                                                                                                                        <span>
                                                                                                                            2
                                                                                                                        </span>
                                                                        <span>
                                                                                                                            1
                                                                                                                        </span>
                                                                    </div>
                                                                    <div class="mart__point__items">
                                                                        <a href="#0"
                                                                           class="twing twing__right">
                                                                            <i class="icon-twer"></i>
                                                                        </a>
                                                                        <a href="#0" class="mart">
                                                                            <i class="icon-pmart"></i>
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.55
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="cart__point cart__point__two">
                                                                        2,6
                                                                    </div>
                                                                    <div class="mart__point__two">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                5.50
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#0" class="point__box">
                                                                                5.05
                                                                            </a>
                                                                            <a href="#0" class="point__box">
                                                                                5.50
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items">
                                                                    <div class="t__items">
                                                                        <div class="t__items__left">
                                                                            <h6>
                                                                                England
                                                                            </h6>
                                                                            <span class="text">
                                                                                                                                USA
                                                                                                                            </span>
                                                                            <p>
                                                                                <a href="#0">
                                                                                    Live
                                                                                </a>
                                                                                <span>
                                                                                                                                    2H 45:34
                                                                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart__point">
                                                                                                                        <span>
                                                                                                                            0
                                                                                                                        </span>
                                                                        <span>
                                                                                                                            0
                                                                                                                        </span>
                                                                    </div>
                                                                    <div class="mart__point__items">
                                                                        <a href="#0"
                                                                           class="twing twing__right">
                                                                            <i class="icon-twer"></i>
                                                                        </a>
                                                                        <a href="#0" class="mart opo">
                                                                            <i class="icon-pmart"></i>
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.55
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="cart__point cart__point__two">
                                                                        2,6
                                                                    </div>
                                                                    <div class="mart__point__two">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                5.50
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#0" class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#0" class="point__box">
                                                                                5.50
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div class="t__items__left">
                                                                            <h6>
                                                                                Korea Republic
                                                                            </h6>
                                                                            <span class="text">
                                                                                                                                PFC CSKA Sofia
                                                                                                                            </span>
                                                                            <p>
                                                                                <a href="#0">
                                                                                    Live
                                                                                </a>
                                                                                <span>
                                                                                                                                    2H 45:34
                                                                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart__point">
                                                                                                                        <span>
                                                                                                                            1
                                                                                                                        </span>
                                                                        <span>
                                                                                                                            1
                                                                                                                        </span>
                                                                    </div>
                                                                    <div class="mart__point__items">
                                                                        <a href="#0"
                                                                           class="twing twing__right">
                                                                            <i class="icon-twer"></i>
                                                                        </a>
                                                                        <a href="#0" class="mart">
                                                                            <i class="icon-pmart"></i>
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.55
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="cart__point cart__point__two">
                                                                        2,6
                                                                    </div>
                                                                    <div class="mart__point__two">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                5.05
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#0"
                                                                               class="point__box bg__none">
                                                                                <i class="icon-lock"></i>
                                                                            </a>
                                                                            <a href="#0"
                                                                               class="point__box bg__none">
                                                                                <i class="icon-star star"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div class="t__items__left">
                                                                            <h6>
                                                                                Portugal
                                                                            </h6>
                                                                            <span class="text">
                                                                                                                                Netherlands
                                                                                                                            </span>
                                                                            <p>
                                                                                <a href="#0">
                                                                                    Live
                                                                                </a>
                                                                                <span>
                                                                                                                                    2H 45:34
                                                                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart__point">
                                                                                                                        <span>
                                                                                                                            0
                                                                                                                        </span>
                                                                        <span>
                                                                                                                            0
                                                                                                                        </span>
                                                                    </div>
                                                                    <div class="mart__point__items">
                                                                        <a href="#0"
                                                                           class="twing twing__right">
                                                                            <i class="icon-twer"></i>
                                                                        </a>
                                                                        <a href="#0" class="mart opo">
                                                                            <i class="icon-pmart"></i>
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.55
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="cart__point cart__point__two">
                                                                        2,6
                                                                    </div>
                                                                    <div class="mart__point__two">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                5.05
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#0"
                                                                               class="point__box bg__none">
                                                                                <i class="icon-lock"></i>
                                                                            </a>
                                                                            <a href="#0"
                                                                               class="point__box bg__none">
                                                                                <i class="icon-star star"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div class="t__items__left">
                                                                            <h6>
                                                                                Lampun Warrior FC
                                                                            </h6>
                                                                            <span class="text">
                                                                                                                                Prachuap FC
                                                                                                                            </span>
                                                                            <p>
                                                                                <a href="#0">
                                                                                    Live
                                                                                </a>
                                                                                <span>
                                                                                                                                    1H 05:34
                                                                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart__point">
                                                                                                                        <span>
                                                                                                                            0
                                                                                                                        </span>
                                                                        <span>
                                                                                                                            0
                                                                                                                        </span>
                                                                    </div>
                                                                    <div class="mart__point__items">
                                                                        <a href="#0"
                                                                           class="twing twing__right">
                                                                            <i class="icon-twer"></i>
                                                                        </a>
                                                                        <a href="#0" class="mart opo">
                                                                            <i class="icon-pmart"></i>
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.55
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box" class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="cart__point cart__point__two">
                                                                        2,6
                                                                    </div>
                                                                    <div class="mart__point__two">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                5.50
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#0" class="point__box">
                                                                                7.05
                                                                            </a>
                                                                            <a href="#0" class="point__box">
                                                                                5.50
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>--}}
                                <div class="table__footer">
                                    <a href="#0" class="lobby">
                                        Open Football lobby
                                    </a>
                                    <a href="#0" class="footerpoing">
                                        <span> {!! $fixture_days->links() !!}</span>
                                        <span><i
                                                class="fas fa-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Football-->

                    <!--Tennis-->
                {{-- <div class="tab-pane fade text-white "
                      id="height2tennis" role="tabpanel" tabindex="0">
                     <div class="main__table main__table__tennis">
                         <div class="section__head b__bottom">
                             <div class="left__head">
                                                                                 <span class="icons">
                                                                                     <i class="icon-tennis"></i>
                                                                                 </span>
                                 <span>
                                                                                     Tennis
                                                                                 </span>
                             </div>
                             <div class="right__catagoris">
                                 <div class="right__cate__items">
                                     <select name="cate1"
                                             id="categoris4">
                                         <option value="1">
                                             Result 1X2
                                         </option>
                                         <option value="1">
                                             Result 1X3
                                         </option>
                                         <option value="1">
                                             Result 1X4
                                         </option>
                                         <option value="1">
                                             Result 1X5
                                         </option>
                                     </select>
                                 </div>
                                 <div class="right__cate__items">
                                     <select name="cate1"
                                             id="categoris5">
                                         <option value="1">
                                             Over/Under
                                         </option>
                                         <option value="1">
                                             ....
                                         </option>
                                         <option value="1">
                                             ....
                                         </option>
                                         <option value="1">
                                             ....
                                         </option>
                                     </select>
                                 </div>
                                 <div class="right__cate__items">
                                     <select name="cate1"
                                             id="categoris6">
                                         <option value="1">
                                             Both teams to score?
                                         </option>
                                         <option value="1">
                                             ...
                                         </option>
                                         <option value="1">
                                             ....
                                         </option>
                                         <option value="1">
                                             ...
                                         </option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                         <div class="table__wrap">
                             <div
                                 class="table__items table__pointnone__items">
                                 <div class="t__items">
                                     <div class="t__items__left">

                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">

                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right opo">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart opo">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box bg__none">
                                             1
                                         </a>
                                         <a href="#0box"
                                            class="point__box bg__none">
                                             2
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box bg__none">
                                                 1
                                             </a>
                                             <a href="#box"
                                                class="point__box bg__none">
                                                 2
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box bg__none">
                                                 1
                                             </a>
                                             <a href="#box"
                                                class="point__box bg__none">
                                                 2
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box opo">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__items b__bottom">
                                 <div class="t__items">
                                     <div class="t__items__left">
                                         <h6>
                                             Ilya Snitari MDA
                                         </h6>
                                         <span class="text">
                                                                                             Alex Marti Pujolras ESP
                                                                                         </span>
                                         <p>
                                             <a href="#0">
                                                 Live
                                             </a>
                                             <span>
                                                                                                 3rd Set
                                                                                             </span>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">
                                     <div class="cart__point">
                                                                                         <span>
                                                                                             0 4
                                                                                         </span>
                                         <span>
                                                                                             0 2
                                                                                         </span>
                                         <span>
                                                                                             P G
                                                                                         </span>
                                     </div>
                                     <div class="tennis__cart__right">
                                         <span>2</span>
                                         <span>2</span>
                                         <span>Sets</span>
                                     </div>
                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             2.70
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             8.50
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box bg__none">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__items b__bottom">
                                 <div class="t__items">
                                     <div class="t__items__left">
                                         <h6>
                                             Daniel Rincon SUI
                                         </h6>
                                         <span class="text">
                                                                                             Clara Vlasselaer BEL
                                                                                         </span>
                                         <p>
                                             <a href="#0">
                                                 Live
                                             </a>
                                             <span>
                                                                                                 1st Set
                                                                                             </span>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">
                                     <div class="cart__point">
                                                                                         <span>
                                                                                             0 4
                                                                                         </span>
                                         <span>
                                                                                             0 2
                                                                                         </span>
                                         <span>
                                                                                             P G
                                                                                         </span>
                                     </div>
                                     <div class="tennis__cart__right">
                                         <span>2</span>
                                         <span>2</span>
                                         <span>Sets</span>
                                     </div>
                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             2.70
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             8.50
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box bg__none">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__items b__bottom">
                                 <div class="t__items">
                                     <div class="t__items__left">
                                         <h6>
                                             Steven Diez CAN
                                         </h6>
                                         <span class="text">
                                                                                             Oriol Roca Batalla ESP
                                                                                         </span>
                                         <p>
                                             <a href="#0">
                                                 Live
                                             </a>
                                             <span>
                                                                                                 2rd Set
                                                                                             </span>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">
                                     <div class="cart__point">
                                                                                         <span>
                                                                                             0 4
                                                                                         </span>
                                         <span>
                                                                                             0 2
                                                                                         </span>
                                         <span>
                                                                                             P G
                                                                                         </span>
                                     </div>
                                     <div class="tennis__cart__right">
                                         <span>2</span>
                                         <span>2</span>
                                         <span>Sets</span>
                                     </div>
                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             2.70
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             8.50
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box bg__none">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__items b__bottom">
                                 <div class="t__items">
                                     <div class="t__items__left">
                                         <h6>
                                             Victoria Kan RUS
                                         </h6>
                                         <span class="text">
                                                                                             Denisa Hindova CZE
                                                                                         </span>
                                         <p>
                                             <a href="#0">
                                                 Live
                                             </a>
                                             <span>
                                                                                                 4rd Set
                                                                                             </span>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">
                                     <div class="cart__point">
                                                                                         <span>
                                                                                             0 4
                                                                                         </span>
                                         <span>
                                                                                             0 2
                                                                                         </span>
                                         <span>
                                                                                             P G
                                                                                         </span>
                                     </div>
                                     <div class="tennis__cart__right">
                                         <span>2</span>
                                         <span>2</span>
                                         <span>Sets</span>
                                     </div>
                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             2.70
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             8.50
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box bg__none">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__items b__bottom">
                                 <div class="t__items">
                                     <div class="t__items__left">
                                         <h6>
                                             Steven Diez CAN
                                         </h6>
                                         <span class="text">
                                                                                             Alex Marti Pujolras ESP
                                                                                         </span>
                                         <p>
                                             <a href="#0">
                                                 Live
                                             </a>
                                             <span>
                                                                                                 6rd Set
                                                                                             </span>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">
                                     <div class="cart__point">
                                                                                         <span>
                                                                                             0 4
                                                                                         </span>
                                         <span>
                                                                                             0 2
                                                                                         </span>
                                         <span>
                                                                                             P G
                                                                                         </span>
                                     </div>
                                     <div class="tennis__cart__right">
                                         <span>2</span>
                                         <span>2</span>
                                         <span>Sets</span>
                                     </div>
                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             2.70
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             8.50
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box bg__none">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__items b__bottom">
                                 <div class="t__items">
                                     <div class="t__items__left">
                                         <h6>
                                             Clara Vlasselaer BEL
                                         </h6>
                                         <span class="text">
                                                                                             Oriol Roca Batalla ESP
                                                                                         </span>
                                         <p>
                                             <a href="#0">
                                                 Live
                                             </a>
                                             <span>
                                                                                                 9rd Set
                                                                                             </span>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="tennis__cart__wrap">
                                     <div class="cart__point">
                                                                                         <span>
                                                                                             0 4
                                                                                         </span>
                                         <span>
                                                                                             0 2
                                                                                         </span>
                                         <span>
                                                                                             P G
                                                                                         </span>
                                     </div>
                                     <div class="tennis__cart__right">
                                         <span>2</span>
                                         <span>2</span>
                                         <span>Sets</span>
                                     </div>
                                 </div>
                                 <div class="tennis__right">
                                     <div class="mart__point__items">
                                         <a href="#0"
                                            class="twing twing__right">
                                             <i class="icon-twer"></i>
                                         </a>
                                         <a href="#0" class="mart">
                                             <i class="icon-pmart"></i>
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             2.70
                                         </a>
                                         <a href="#0box"
                                            class="point__box">
                                             8.50
                                         </a>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                     </div>
                                     <div class="mart__point__two">
                                         <div class="mart__point__left">
                                             <a href="#box"
                                                class="point__box">
                                                 8.55
                                             </a>
                                             <a href="#box"
                                                class="point__box">
                                                 2.70
                                             </a>
                                         </div>
                                         <div class="mart__point__right">
                                             <a href="#0"
                                                class="point__box bg__none">
                                                 <i class="icon-star star"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="table__footer">
                                 <a href="#0" class="lobby">
                                     All <span class="text__btn">Tennis Live</span>
                                 </a>
                                 <a href="#0" class="footerpoing">
                                     <span>322</span>
                                     <span><i
                                             class="fas fa-angle-right"></i></span>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>--}}
                <!--Tennis-->

                    {{--                    <!--Basketball-->
                                        <div class="tab-pane fade text-white " id="basketbtab"
                                             role="tabpanel" tabindex="0">
                                            <div
                                                class="main__table main__table__tennis main__table__basketball">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-basketball"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Basketball
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris7">
                                                                <option value="1">
                                                                    Result 1X2
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X3
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X4
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X5
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris8">
                                                                <option value="1">
                                                                    Over/Under
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris9">
                                                                <option value="1">
                                                                    Both teams to score?
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="heght__table__points tennis__table__points">
                                                    <span>Spread</span>
                                                    <span>Total</span>
                                                    <span>Money Line</span>
                                                    <span>Spread</span>
                                                    <span>Total</span>
                                                    <span>Money Line</span>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items mb__10 paddingbnone">
                                                        <div class="t__items t__items__basket">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Niigata Albirex BB
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Sendai 89ERS
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        2H 11:15
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                21
                                                                                                            </span>
                                                        </div>

                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="tov">o 79,5</span>
                                                                        <span>8.50</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items paddingtnone b__bottom">
                                                        <div class="t__items">

                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                26
                                                                                                            </span>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="tov">o 79,5</span>
                                                                        <span>8.50</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items mb__10 paddingbnone">
                                                        <div class="t__items t__items__basket">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tokyo United BC
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Rizing Fukuoka
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        2min
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                11
                                                                                                            </span>
                                                        </div>

                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="tov">o 79,5</span>
                                                                        <span>8.50</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items paddingtnone b__bottom">
                                                        <div class="t__items">

                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                12
                                                                                                            </span>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="tov">o 79,5</span>
                                                                        <span>8.50</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items mb__10 paddingbnone">
                                                        <div class="t__items t__items__basket">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Fukushima Firebonds
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Earth Friends Tokyo Z
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        2min
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                30
                                                                                                            </span>
                                                        </div>

                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box opo">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items paddingtnone b__bottom">
                                                        <div class="t__items">

                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                16
                                                                                                            </span>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box opo">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items mb__10 paddingbnone">
                                                        <div class="t__items t__items__basket">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Saitama Broncos
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Kagawa Five Arrows
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        2min
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                10
                                                                                                            </span>
                                                        </div>

                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="tov">o 79,5</span>
                                                                        <span>8.50</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items paddingtnone b__bottom">
                                                        <div class="t__items">

                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                16
                                                                                                            </span>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="tov">o 79,5</span>
                                                                        <span>8.50</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items mb__10 paddingbnone">
                                                        <div class="t__items t__items__basket">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Saitama Broncos
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Kumamoto Volters
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        2min
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                30
                                                                                                            </span>
                                                        </div>

                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box opo">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none spacing__lock">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__items paddingtnone b__bottom">
                                                        <div class="t__items">

                                                        </div>
                                                        <div class="cart__point">
                                                                                                            <span>
                                                                                                                33
                                                                                                            </span>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">+6,5</span>
                                                                    <span>2.70</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="tov">o 109,5</span>
                                                                    <span>8.50</span>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box opo">
                                                                        2.25
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby">
                                                            All <span class="text__btn">Basketball Live</span>
                                                            Events
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>12</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Basketball-->

                                        <!--Vollyball-->
                                        <div class="tab-pane fade text-white " id="vollyballs"
                                             role="tabpanel" tabindex="0">
                                            <div
                                                class="main__table volloy__max main__table__tennis">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-volly"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Vollyball
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris75">
                                                                <option value="1">
                                                                    Result 1X2
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X3
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X4
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X5
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris76">
                                                                <option value="1">
                                                                    Over/Under
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris77">
                                                                <option value="1">
                                                                    Both teams to score?
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">

                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right opo">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    1
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    2
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        1
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        2
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point bg__none">
                                                                                                                <span>
                                                                                                                   Points
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        Over
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        Under
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tokyo Great Bears
                                                                </h6>
                                                                <span class="text">
                                                                                                                    JT Thunders
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    15
                                                                                                                </span>
                                                                <span>
                                                                                                                    12
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.70
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        7.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        5.50
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    220,6
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        6.50
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Sichuan
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Zhejiang
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    11
                                                                                                                </span>
                                                                <span>
                                                                                                                    17
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box point__box__volly bg__none">
                                                                    <i class="icon-lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#0box"
                                                                       class="point__box point__box__volly bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    220,6
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        6.32
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        5.55
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Ben Tre
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Zhejiang
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    11
                                                                                                                </span>
                                                                <span>
                                                                                                                    17
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box point__box__volly bg__none">
                                                                    <i class="icon-lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#0box"
                                                                       class="point__box point__box__volly bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    220,6
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        5.36
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        9.36
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Gold City More Asia
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Kasetsart VC
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    15
                                                                                                                </span>
                                                                <span>
                                                                                                                    12
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.70
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        7.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        5.50
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    220,6
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        6.50
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Mizuno
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Taipower
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0"
                                                                       class="text__opa">
                                                                        Starting
                                                                    </a>
                                                                    <span class="text__btn">
                                                                                                                        now
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    15
                                                                                                                </span>
                                                                <span>
                                                                                                                    12
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.70
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.50
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        7.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        5.50
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    220,6
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        6.50
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            Open <span class="text__btn"> Volleyball Live</span>
                                                            Events
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>8</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Vollyball-->

                                        <!--Cricket-->
                                        <div class="tab-pane fade text-white " id="crickettab"
                                             role="tabpanel" tabindex="0">
                                            <div
                                                class="main__table main__table__tennis main__table__cricket">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-cricket"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Cricket
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris78">
                                                                <option value="1">
                                                                    Result 1X2
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X3
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X4
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X5
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris89">
                                                                <option value="1">
                                                                    Over/Under
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris82">
                                                                <option value="1">
                                                                    Both teams to score?
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                            <div class="serial">

                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        1
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        2
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tokyo Great Bears
                                                                </h6>
                                                                <span class="text">
                                                                                                                    JT Thunders
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="serial">
                                                                264/7
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        6.50
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            Open <span class="text__btn"> Volleyball Live</span>
                                                            Events
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>8</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Cricket-->

                                        <!--Table Tennis-->
                                        <div class="tab-pane fade text-white " id="tabletennis"
                                             role="tabpanel" tabindex="0">
                                            <div
                                                class="main__table volloy__max main__table__tennis main__table__ttennis">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-ttennis"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Table Tennis
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris83">
                                                                <option value="1">
                                                                    Result 1X2
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X3
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X4
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X5
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris84">
                                                                <option value="1">
                                                                    Over/Under
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris85">
                                                                <option value="1">
                                                                    Both teams to score?
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">

                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right opo">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    1
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    2
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        1
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        2
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                    <span>
                                                                                                                        Points
                                                                                                                    </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        Over
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box bg__none">
                                                                        Under
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Grzegorz Felkel POL
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Karol Wisniewski POL
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        4rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    5
                                                                                                                </span>
                                                                <span>
                                                                                                                    4
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.50
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.03
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="set">Set 1</span>
                                                                        <span>1.75</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="set">Set 1</span>
                                                                        <span>1.87</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    16,2
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.33
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        4.66
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Denis Hofman CZE
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Rostyslav Kliuchuk CZE
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    11
                                                                                                                </span>
                                                                <span>
                                                                                                                    17
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box point__box__volly bg__none">
                                                                    <i class="icon-lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#0box"
                                                                       class="point__box point__box__volly bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    16,2
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.66
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        4.33
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Gold City More Asia
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Kasetsart VC
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Live
                                                                    </a>
                                                                    <span>
                                                                                                                        3rd Set
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    11
                                                                                                                </span>
                                                                <span>
                                                                                                                    12
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>1</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.40
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    3.22
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="set">Set 1</span>
                                                                        <span>1.65</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="set">Set 1</span>
                                                                        <span>1.83</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    16,2
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.90
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        3.50
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Wojciech Gluszek POL
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Arkadiusz Mugowski POL
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0"
                                                                       class="text__opa">
                                                                        Starting
                                                                    </a>
                                                                    <span class="text__btn">
                                                                                                                        now
                                                                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__cart__wrap">
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    2
                                                                                                                </span>
                                                                <span>
                                                                                                                    2
                                                                                                                </span>
                                                            </div>
                                                            <div class="tennis__cart__right">
                                                                <span>2</span>
                                                                <span>2</span>
                                                                <span>Sets</span>
                                                            </div>
                                                        </div>
                                                        <div class="tennis__right">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.80
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.36
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="set">Set 1</span>
                                                                        <span>2.05</span>
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                                                                    <span
                                                                                                                        class="set">Set 1</span>
                                                                        <span>2.70</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart__point">
                                                                                                                <span>
                                                                                                                    16,2
                                                                                                                </span>
                                                            </div>
                                                            <div class="mart__point__two">
                                                                <div class="mart__point__left">
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        2.05
                                                                    </a>
                                                                    <a href="#box"
                                                                       class="point__box">
                                                                        1.50
                                                                    </a>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            Open <span class="text__btn"> Table Tennis</span>
                                                            Events
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>8</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Table Tennis-->--}}
                </div>
            </div>
        </div>
        <!--Live__heightlight End-->

        <!--Next-To-Go Here-->
        <div class="live__heightlight mb__30">
            <div class="section__title">
                <h4>
                    Next To Go
                </h4>
            </div>
            <div class="heightlight__tab nexttogo__tab">
                <div class="nav pt-20" id="nav-tabheightnextgo"
                     role="tablist">
                    <button class="nav-link active" id="lightnext"
                            data-bs-toggle="tab"
                            data-bs-target="#height1next" type="button"
                            role="tab" aria-selected="true">
                                                                    <span class="icons">
                                                                        <i class="icon-football"></i>
                                                                    </span>
                        <span>
                                                                        All
                                                                    </span>
                    </button>
                    <button class="nav-link " id="lightall"
                            data-bs-toggle="tab"
                            data-bs-target="#nextfootball" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-football"></i>
                                                                        </span>
                        <span>
                                                                            Football
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightnext2"
                            data-bs-toggle="tab"
                            data-bs-target="#nextgotennistab" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-tennis"></i>
                                                                        </span>
                        <span>
                                                                            Tennis
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttab3next"
                            data-bs-toggle="tab"
                            data-bs-target="#nextbaskettab" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-basketball"></i>
                                                                        </span>
                        <span>
                                                                            Basketball
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttab4next"
                            data-bs-toggle="tab"
                            data-bs-target="#nexticehockytab" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-icehockey"></i>
                                                                        </span>
                        <span>
                                                                            Ice Hockey
                                                                        </span>
                    </button>
                    <button class="nav-link " id="lightlighttab5next"
                            data-bs-toggle="tab"
                            data-bs-target="#afootballtab" type="button"
                            role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-afootball"></i>
                                                                        </span>
                        <span>
                                                                            American Football
                                                                        </span>
                    </button>
                </div>
            </div>
            <div class="height__table">
                <div class="tab-content" id="nav-tabContentheightnext">
                    <div class="tab-pane fade text-white show active"
                         id="height1next" role="tabpanel"
                         aria-labelledby="nav-home-tabpre" tabindex="0">
                        <div class="main__table">
                            <div class="table__wrap">
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Maximilian Neuchrist AUT
                                                </h6>
                                                <span class="text">
                                                                                                    Timofey Skatov KAZ
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>2.95</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>1.35</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span> Starting in 42 min</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Nuno Borges POR
                                                </h6>
                                                <span class="text">
                                                                                                    Pedro Sousa POR
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>2.00</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>1.72</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span> Starting in 20 min</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Cristina Bucsa ESP
                                                </h6>
                                                <span class="text">
                                                                                                    Kateryna Baindl UKR
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>2.00</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>1.20</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span class="text-base"> Starting in 60 min</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right text-base"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Canada
                                                </h6>
                                                <span class="text">
                                                                                                    Morocco
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>5.23</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>4.53</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span class="text-base"> Starting in 40 min</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right text-base"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Croatia
                                                </h6>
                                                <span class="text">
                                                                                                    Belgium
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>4.23</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>3.53</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span> Today / 21:00</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Canada
                                                </h6>
                                                <span class="text">
                                                                                                    Belgium
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>2.22</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>3.53</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>3.53</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span class="text-base"> Today / 21:00</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right text-base"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-tennis"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Canada
                                                </h6>
                                                <span class="text">
                                                                                                    Belgium
                                                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__boxbet">
                                                <span>Bet now</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span class="text-base"> Today / 21:00</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right text-base"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="table__footer table__footer__nextgo">
                                    <a href="#show" class="lobby">
                                        <span>Show more</span>
                                        <span class="icons"><i
                                                class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade text-white " id="nextfootball"
                         role="tabpanel" tabindex="0">
                        <div class="main__table main__table__nextfootball">
                            <div class="table__wrap">
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-football"></i>
                                            </div>
                                            <div class="content">
                                                                                                <span class="text">
                                                                                                    Sunderland
                                                                                                </span>
                                                <h6>
                                                    Millwall
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">1</span>
                                                <span>2.25</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">x</span>
                                                <span>3.00</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">2</span>
                                                <span>2.53</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span> Today / 21:00</span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div
                                                                            class="t__items__left t__items__left__nextogo">
                                                                            <div class="t__items__icon">
                                                                                <i class="icon-football"></i>
                                                                            </div>
                                                                            <div class="content">
                                                                                                                                <span class="text">
                                                                                                                                    World Cup 2022 - Winner
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__two mart__pint__nextgo">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__boxbet">
                                                                                <span>Bet now</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#min"
                                                                               class="point__box-text point__box__nextto">
                                                                                <span> Today / 21:00</span>
                                                                                <span class="icons"><i
                                                                                        class="fas fa-angle-right"></i></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div
                                                                            class="t__items__left t__items__left__nextogo">
                                                                            <div class="t__items__icon">
                                                                                <i class="icon-football"></i>
                                                                            </div>
                                                                            <div class="content">
                                                                                                                                <span class="text">
                                                                                                                                    World Cup 2022 - Top Goalscorer
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__two mart__pint__nextgo">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__boxbet">
                                                                                <span>Bet now</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#min"
                                                                               class="point__box-text point__box__nextto">
                                                                                <span> Today / 21:00</span>
                                                                                <span class="icons"><i
                                                                                        class="fas fa-angle-right"></i></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div
                                                                            class="t__items__left t__items__left__nextogo">
                                                                            <div class="t__items__icon">
                                                                                <i class="icon-football"></i>
                                                                            </div>
                                                                            <div class="content">
                                                                                                                                <span class="text">
                                                                                                                                    Netherlands
                                                                                                                                </span>
                                                                                <h6>
                                                                                    Millwall
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__two mart__pint__nextgo">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">1</span>
                                                                                <span>6.22</span>
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">X</span>
                                                                                <span>4.53</span>
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">2</span>
                                                                                <span>3.53</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#min"
                                                                               class="point__box-text point__box__nextto">
                                                                                <span> Today / 21:00</span>
                                                                                <span class="icons"><i
                                                                                        class="fas fa-angle-right"></i></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div
                                                                            class="t__items__left t__items__left__nextogo">
                                                                            <div class="t__items__icon">
                                                                                <i class="icon-football"></i>
                                                                            </div>
                                                                            <div class="content">
                                                                                                                                <span class="text">
                                                                                                                                    Canada
                                                                                                                                </span>
                                                                                <h6>
                                                                                    Belgium
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__two mart__pint__nextgo">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">1</span>
                                                                                <span>5.22</span>
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">X</span>
                                                                                <span>4.53</span>
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">2</span>
                                                                                <span>3.53</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#min"
                                                                               class="point__box-text point__box__nextto">
                                                                                <span> Today / 21:00</span>
                                                                                <span class="icons"><i
                                                                                        class="fas fa-angle-right"></i></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table__items b__bottom">
                                                                    <div class="t__items">
                                                                        <div
                                                                            class="t__items__left t__items__left__nextogo">
                                                                            <div class="t__items__icon">
                                                                                <i class="icon-football"></i>
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6>
                                                                                    Luca Van Assche <span>FRA</span>
                                                                                </h6>
                                                                                <h6>
                                                                                    Aleksandar Vukic <span>AUS</span>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__two mart__pint__nextgo">
                                                                        <div class="mart__point__left">
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">1</span>
                                                                                <span>3.20</span>
                                                                            </a>
                                                                            <a href="#box"
                                                                               class="point__box">
                                                                                                                            <span
                                                                                                                                class="point__1">2</span>
                                                                                <span>2.40</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="mart__point__right">
                                                                            <a href="#min"
                                                                               class="point__box-text point__box__nextto">
                                                                                <span class="text-base"> Starting now</span>
                                                                                <span class="icons"><i
                                                                                        class="fas fa-angle-right text-base"></i></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>--}}
                                <div
                                    class="table__footer table__footer__nextgo">
                                    <a href="#show" class="lobby">
                                        <span>Show more</span>
                                        <span class="icons"><i
                                                class="fas fa-chevron-down"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="tab-pane fade text-white "
                                             id="nextgotennistab" role="tabpanel" tabindex="0">
                                            <div class="main__table main__table__nextfootball">
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-tennis"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Dusan Lajovic
                                                                        <span>SRB</span>
                                                                    </h6>
                                                                    <h6>
                                                                        Steven Diez
                                                                        <span>FRA</span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>2.25</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>2.82</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 16:15</span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-tennis"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Maximilian Neuchrist
                                                                        <span>AUT</span>
                                                                    </h6>
                                                                    <h6>
                                                                        Luca Van Assche <span>FRA</span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>3.22</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>4.33</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 26:15</span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-tennis"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Rebecca Peterson <span>SWE</span>
                                                                    </h6>
                                                                    <h6>
                                                                        Alycia Parks
                                                                        <span>USA</span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>1.25</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>2.55</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 19:15</span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade text-white "
                                             id="nextbaskettab" role="tabpanel" tabindex="0">
                                            <div class="main__table main__table__nextfootball">
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Club Basquet Girona 2014
                                                                    </h6>
                                                                    <h6>
                                                                        C.B. Breogan
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">-3,5</span>
                                                                    <span>1.25</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">+3,5</span>
                                                                    <span>1.82</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 17:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        CB 1939 Canarias
                                                                    </h6>
                                                                    <h6>
                                                                        Baloncesto Fuenlabrada
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">-3,5</span>
                                                                    <span>3.22</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">+3,5</span>
                                                                    <span>4.33</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 10:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Aris
                                                                    </h6>
                                                                    <h6>
                                                                        GS Lavriou
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">-12,5</span>
                                                                    <span>1.83</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">+12,5</span>
                                                                    <span>1.95</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 11:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Baskonia Vitoria
                                                                    </h6>
                                                                    <h6>
                                                                        UCAM Murcia
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">-10,5</span>
                                                                    <span>1.90</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">+10,5</span>
                                                                    <span>1.87</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 17:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Real Madrid
                                                                    </h6>
                                                                    <h6>
                                                                        Valencia Basket
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">-10,5</span>
                                                                    <span>1.90</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">+10,5</span>
                                                                    <span>1.87</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 26:15 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        AS Karditsas
                                                                    </h6>
                                                                    <h6>
                                                                        PAOK Salonika
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">-8,5</span>
                                                                    <span>1.87</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">+8,5</span>
                                                                    <span>1.87</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 15:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__footer table__footer__nextgo">
                                                        <a href="#show" class="lobby">
                                                            <span>Show more</span>
                                                            <span class="icons"><i
                                                                    class="fas fa-chevron-down"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade text-white "
                                             id="nexticehockytab" role="tabpanel" tabindex="0">
                                            <div class="main__table main__table__nextfootball">
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-icehockey"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Löwen Frankfurt
                                                                    </h6>
                                                                    <h6>
                                                                        Eisbären Berlin
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>1.40</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>2.25</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 17:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Bietigheim Steelers
                                                                    </h6>
                                                                    <h6>
                                                                        Fischtown Pinguins
                                                                        Bremerhaven
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>1.83</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>1.48</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 10:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Düsseldorfer EG
                                                                    </h6>
                                                                    <h6>
                                                                        Schwenninger Wild Wings
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>1.67</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>2.40</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 11:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        Straubing Tigers
                                                                    </h6>
                                                                    <h6>
                                                                        Grizzlys Wolfsburg
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>1.53</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>2.10</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 17:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        HC Bili Tygri Liberec
                                                                    </h6>
                                                                    <h6>
                                                                        HC Vitkovice Steel
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>2.55</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>1.91</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 26:15 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div
                                                                class="t__items__left t__items__left__nextogo">
                                                                <div class="t__items__icon">
                                                                    <i class="icon-basketball"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        HC Ocelari Trinec
                                                                    </h6>
                                                                    <h6>
                                                                        BK Mlada Boleslav
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mart__point__two mart__pint__nextgo">
                                                            <div class="mart__point__left">
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">1</span>
                                                                    <span>1.60</span>
                                                                </a>
                                                                <a href="#box"
                                                                   class="point__box">
                                                                                                                <span
                                                                                                                    class="point__1">2</span>
                                                                    <span>2.80</span>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__right">
                                                                <a href="#min"
                                                                   class="point__box-text point__box__nextto">
                                                                    <span> Today / 15:30 </span>
                                                                    <span class="icons"><i
                                                                            class="fas fa-angle-right"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="table__footer table__footer__nextgo">
                                                        <a href="#show" class="lobby">
                                                            <span>Show more</span>
                                                            <span class="icons"><i
                                                                    class="fas fa-chevron-down"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}
                    <div class="tab-pane fade text-white " id="afootballtab"
                         role="tabpanel" tabindex="0">
                        <div class="main__table main__table__nextfootball">
                            <div class="table__wrap">
                                <div class="table__items">
                                    <div class="t__items">
                                        <div
                                            class="t__items__left t__items__left__nextogo">
                                            <div class="t__items__icon">
                                                <i class="icon-afootball"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    New Orleans Saints @
                                                </h6>
                                                <h6>
                                                    Tampa Bay Buccaneers
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mart__point__two mart__pint__nextgo">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">+3,5</span>
                                                <span>1.91</span>
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                                                            <span
                                                                                                class="point__1">-3,5</span>
                                                <span>1.91</span>
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#min"
                                               class="point__box-text point__box__nextto">
                                                <span> Tomorrow / 07:15 </span>
                                                <span class="icons"><i
                                                        class="fas fa-angle-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Next-To-Go End-->

        <!--Trending section Here-->
        <div class="live__heightlight trending__now">
            <div class="section__title">
                <h4>
                    Trending Now
                </h4>
            </div>
            <div class="heightlight__tab">
                <div class="nav b__bottom" id="nav-tabheighttrending"
                     role="tablist">
                    <button class="nav-link active" id="lightlighttabtrend"
                            data-bs-toggle="tab"
                            data-bs-target="#height1trend" type="button"
                            role="tab" aria-selected="true">
                                                                    <span class="icons">
                                                                        <i class="icon-football"></i>
                                                                    </span>
                        <span>
                                                                        Football
                                                                    </span>
                    </button>
                    <button class="nav-link " id="treading1"
                            data-bs-toggle="tab" data-bs-target="#treand2"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-tennis"></i>
                                                                        </span>
                        <span>
                                                                            Tennis
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading2"
                            data-bs-toggle="tab" data-bs-target="#treand3"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-basketball"></i>
                                                                        </span>
                        <span>
                                                                            Basketball
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading3"
                            data-bs-toggle="tab" data-bs-target="#treand4"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-volly"></i>
                                                                        </span>
                        <span>
                                                                            Volleyball
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading4"
                            data-bs-toggle="tab" data-bs-target="#treand5"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-ttennis"></i>
                                                                        </span>
                        <span>
                                                                            Table Tennis
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading5"
                            data-bs-toggle="tab" data-bs-target="#treand6"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-afootball"></i>
                                                                        </span>
                        <span>
                                                                            American Football
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading7"
                            data-bs-toggle="tab" data-bs-target="#treand7"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-golf"></i>
                                                                        </span>
                        <span>
                                                                            Golf
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading8"
                            data-bs-toggle="tab" data-bs-target="#treand8"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-cycling"></i>
                                                                        </span>
                        <span>
                                                                            Cycling
                                                                        </span>
                    </button>
                    <button class="nav-link " id="treading9"
                            data-bs-toggle="tab" data-bs-target="#treand9"
                            type="button" role="tab" aria-selected="false">
                                                                        <span class="icons">
                                                                            <i class="icon-golf"></i>
                                                                        </span>
                        <span>
                                                                            Beach Volleyball
                                                                        </span>
                    </button>
                </div>
            </div>
            <div class="height__table">
                <div class="tab-content" id="nav-tabContentheighttrending">
                    <!--football-->
                    <div class="tab-pane fade text-white show active"
                         id="height1trend" role="tabpanel"
                         aria-labelledby="nav-home-tabpre" tabindex="0">
                        <div
                            class="main__table larg__width treanding__table">
                            <div class="section__head b__bottom">
                                <div class="left__head">
                                                                                    <span class="icons">
                                                                                        <i class="icon-football"></i>
                                                                                    </span>
                                    <span>
                                                                                        Football
                                                                                    </span>
                                </div>
                                <div class="right__catagoris">
                                    <div class="right__cate__items">
                                        <select name="cate1"
                                                id="categoris86">
                                            <option value="1">
                                                Result 1X2
                                            </option>
                                            <option value="1">
                                                Result 1X3
                                            </option>
                                            <option value="1">
                                                Result 1X4
                                            </option>
                                            <option value="1">
                                                Result 1X5
                                            </option>
                                        </select>
                                    </div>
                                    <div class="right__cate__items">
                                        <select name="cate1"
                                                id="categoris20">
                                            <option value="1">
                                                Over/Under
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                        </select>
                                    </div>
                                    <div class="right__cate__items">
                                        <select name="cate1"
                                                id="categoris21">
                                            <option value="1">
                                                Both teams to score?
                                            </option>
                                            <option value="1">
                                                ...
                                            </option>
                                            <option value="1">
                                                ....
                                            </option>
                                            <option value="1">
                                                ...
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table__wrap">
                                <div
                                    class="table__items table__pointnone__items">
                                    <div class="t__items">
                                        <div class="t__items__left">

                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right opo">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box"
                                           class="point__box bg__none">
                                            1
                                        </a>
                                        <a href="#0box"
                                           class="point__box bg__none">
                                            X
                                        </a>
                                        <a href="#0box"
                                           class="point__box bg__none">
                                            2
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        Goals
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box bg__none">
                                                Over
                                            </a>
                                            <a href="#box"
                                               class="point__box bg__none">
                                                Under
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box bg__none">
                                                Yes
                                            </a>
                                            <a href="#box"
                                               class="point__box bg__none">
                                                No
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                No
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                Netherlands
                                            </h6>
                                            <span class="text">
                                                                                                England
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                USA
                                            </h6>
                                            <span class="text">
                                                                                                Senegal
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                Prance
                                            </h6>
                                            <span class="text">
                                                                                                Poland
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                Argentina
                                            </h6>
                                            <span class="text">
                                                                                                Australia
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                France
                                            </h6>
                                            <span class="text">
                                                                                                Senegal
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                Japan
                                            </h6>
                                            <span class="text">
                                                                                                Croatia
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                Brazil
                                            </h6>
                                            <span class="text">
                                                                                                Korea Republic
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                Real Zaragoza
                                            </h6>
                                            <span class="text">
                                                                                                Casa Pia Lisbon
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__items b__bottom">
                                    <div class="t__items">
                                        <div class="t__items__left">
                                            <h6>
                                                SC Braga
                                            </h6>
                                            <span class="text">
                                                                                                Real Zaragoza
                                                                                            </span>
                                            <p>
                                                <a href="#0">
                                                    Today / 21:00
                                                </a>
                                                <a href="#0" class="today">
                                                    Today / 21:00
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mart__point__items">
                                        <a href="#0"
                                           class="twing twing__right">
                                            <i class="icon-twer"></i>
                                        </a>
                                        <a href="#0" class="mart opo">
                                            <i class="icon-pmart"></i>
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#0box" class="point__box">
                                            2.70
                                        </a>
                                        <a href="#0box" class="point__box">
                                            8.50
                                        </a>
                                    </div>
                                    <div
                                        class="cart__point cart__point__two">
                                        2,6
                                    </div>
                                    <div class="mart__point__two">
                                        <div class="mart__point__left">
                                            <a href="#box"
                                               class="point__box">
                                                7.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                5.50
                                            </a>
                                        </div>
                                        <div class="mart__point__right">
                                            <a href="#box"
                                               class="point__box">
                                                3.05
                                            </a>
                                            <a href="#box"
                                               class="point__box">
                                                6.50
                                            </a>
                                            <a href="#0"
                                               class="point__box bg__none">
                                                <i class="icon-star star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__footer">
                                    <a href="#0" class="lobby text__opa">
                                        Open Football lobby
                                    </a>
                                    <a href="#0" class="footerpoing">
                                        <span>790</span>
                                        <span><i
                                                class="fas fa-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <!--Tennis-->
                                        <div class="tab-pane fade text-white " id="treand2"
                                             role="tabpanel" tabindex="0">
                                            <div
                                                class="main__table larg__width2 treanding__table main__tabletennis">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-tennis"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Tennis
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris22">
                                                                <option value="1">
                                                                    2way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    3way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    4way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    5way - Who will win?
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris23">
                                                                <option value="1">
                                                                    Who will win the set?
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris24">
                                                                <option value="1">
                                                                    Game Winner
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="heght__table__points">
                                                    <span>1</span>
                                                    <span>2</span>
                                                    <span>1</span>
                                                    <span>2</span>
                                                    <span>1</span>
                                                    <span>2</span>
                                                </div>
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Alycia Parks
                                                                    <span>USA</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Cristina Bucsa <span>ESP</span>
                                                                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.75
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.05
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.75
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.05
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Rebecca Peterson
                                                                    <span>SWE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Ana Konjuh  <span>CRO</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.75
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.50
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.75
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.95
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Nick Hardt <span>DOM</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Victor Lilov   <span>USA</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.70
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.50
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Rebecca Peterson
                                                                    <span>SWE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Alycia Parks   <span>USA</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    6.56
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    7.55
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Ana Konjuh <span>CRO</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Nick Hardt   <span>DOM</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    8.66
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    5.11
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Bu Yunchaokete
                                                                    <span>CHN</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Mark Lajal <span>EST</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    5.66
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.11
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Alexis Gautier
                                                                    <span>FRA</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Dino Prizmic <span>CRO</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    4.06
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    3.01
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Cristina Dinu
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Daniel Rincon <span>ESP</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    3.55
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    2.36
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Mark Lajal <span>EST</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Ana Konjuh <span>CRO</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    6.33
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    4.55
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Lucija Ciric Bagaric <span>CRO</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Ana Konjuh <span>CRO</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tableright__tennis">
                                                            <div class="mart__point__items">
                                                                <a href="#0"
                                                                   class="twing twing__right">
                                                                    <i class="icon-twer"></i>
                                                                </a>
                                                                <a href="#0" class="mart opo">
                                                                    <i class="icon-pmart"></i>
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    1.22
                                                                </a>
                                                                <a href="#0box"
                                                                   class="point__box">
                                                                    3.22
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40">
                                                                <a href="#0box"
                                                                   class="point__box icon__lock__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="mart__point__two pl__40">
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-lock"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="point__box bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            Open Tennis lobby
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>50</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Basketball-->
                                        <div class="tab-pane fade text-white" id="treand3"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table larg__width4 treanding__table main__basketballtable">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-basketball"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Basketball
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris25">
                                                                <option value="1">
                                                                    Result 1X2
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X3
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X4
                                                                </option>
                                                                <option value="1">
                                                                    Result 1X5
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris26">
                                                                <option value="1">
                                                                    Over/Under
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris27">
                                                                <option value="1">
                                                                    Both teams to score?
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ...
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right opo">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            1
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            X
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            2
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    Goals
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            Over
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            Under
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        No
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Memphis Grizzlies @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Detroit Pistons
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 05:10
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            3.25
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            2.25
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.60
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Boston Celtics @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Brooklyn Nets
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 05:10
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.25
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                6.33
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            9.36
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            3.25
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            6.35
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.60
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Los Angeles Lakers @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Washington Wizards
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 05:10
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">

                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast martbas__pointlast__width">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            <i class="icon-lock lock"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Phoenix Suns @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    San Antonio Spurs
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">

                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast martbas__pointlast__width">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            <i class="icon-lock lock"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Chicago Bulls @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Sacramento Kings
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        TTomorrow / 05:10
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.25
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                6.33
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            9.36
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            3.25
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            6.35
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.60
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Denver Nuggets @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    New Orleans Pelicans
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">

                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast martbas__pointlast__width">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            <i class="icon-lock lock"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Indiana Pacers @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Portland Trail Blazers
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">

                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast martbas__pointlast__width">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            <i class="icon-lock lock"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Chicago Bulls @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Sacramento Kings
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        TTomorrow / 05:10
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items mb__10">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.25
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                6.33
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mart__point__items pl__40 pr__40">
                                                                <a href="#0box"
                                                                   class="point__box bg__none">
                                                                    <i class="icon-lock lock"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            9.36
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            3.25
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 79,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                            6.35
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.60
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            Open Football lobby
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>222</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Vollyball-->
                                        <div class="tab-pane fade text-white" id="treand4"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table larg__width5  treanding__table main__basketballtable">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-volly"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Vollyball
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris28">
                                                                <option value="1">
                                                                    2way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    3way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    4way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    5way - Who will win?
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris29">
                                                                <option value="1">
                                                                    Set Winner
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right opo">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            1
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            2
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            1
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            2
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    ZAKSA Kedzierzyn-Kozle
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Cerrad Czarni Radom
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 19:45
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.04
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.26
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.15
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Sao Paulo Barueri VC
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Unilife Maringa
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 02:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.28
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            9.50
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.11
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                5.25
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Gas Sales Piacenza
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Top Volley Cisterna
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 02:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.19
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            4.33
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.10
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.65
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Verona
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Volley Siena
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 02:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.30
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.57
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.25
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.10
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Vero Volley Monza
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Modena Volley
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 23:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.15
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Volley Bergamo
                                                                </h6>
                                                                <span class="text">
                                                                                                                    ASD Pallavolo Pinerolo
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 23:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.15
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            4.33
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.65
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.35
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Volley Milano
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Volley Civitanova
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        06/12/2022 00:30
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.65
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    ZAKSA Kedzierzyn-Kozle
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Cerrad Czarni Radom
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.01
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            10.00
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.36
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.90
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Unet E-Work Busto Arsizio
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Helvia Recina Macerata
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            160
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.45
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.55
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Reale Mutua Fenera Chieri
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Volley Vallefoglia
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            4.50
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            4.33
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.15
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.75
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Cuneo Granda Volley
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Vero Volley Milano
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            6.03
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.35
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.35
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.87
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            OPEN VOLLEYBALL LOBBY
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>100</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Table Tennis-->
                                        <div class="tab-pane fade text-white" id="treand5"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table larg__width6 treanding__table main__basketballtable">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-ttennis"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Table Tennis
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris30">
                                                                <option value="1">
                                                                    2way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    3way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    4way - Who will win?
                                                                </option>
                                                                <option value="1">
                                                                    5way - Who will win?
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris31">
                                                                <option value="1">
                                                                    Set Winner
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                                <option value="1">
                                                                    ....
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right opo">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            1
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box bg__none">
                                                                            2
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            1
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            2
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none opo">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Jiri Louda <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                        Petr Oliver Korp <span>CZE</span>
                                                                                                                    </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 19:45
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="text__btn">
                                                                        35 min
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            3.22
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            5.44
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.15
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Pavel Kulhanek
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Jiri Svec <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Starting in
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="text__btn">
                                                                        35 min
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.28
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            6.50
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.11
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                5.25
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Gas Sales Piacenza
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Top Volley Cisterna
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Starting in
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.19
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            4.33
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.10
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.65
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Jan Mecl Jr.
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Martin Kowalik <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow/ 01:30
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            4.30
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.57
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                3.25
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.10
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Petr Oliver Korp
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Jan Mecl Jr. <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 23:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            2.70
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            3.50
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.15
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Martin Kowalik
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Jiri Louda <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        06/12/2022 00:30
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.70
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            8.50
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.65
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tibor Kolenic
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Pavel Kulhanek <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            5.01
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            9.00
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.36
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.90
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Jiri Louda <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Jan Mecl Jr. <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            3.70
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            1.60
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.45
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.55
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Pavel Kulhanek
                                                                    <span>CZE</span>
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Radek Bartunek <span>CZE</span>
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Today / 21:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__40">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="tablemartbasket__colum">
                                                                    <div
                                                                        class="mart__point__items">
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            5.50
                                                                        </a>
                                                                        <a href="#0box"
                                                                           class="point__box">
                                                                            3.33
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.15
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                Set 1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.75
                                                                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            OPEN VOLLEYBALL LOBBY
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>42</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--American Football-->
                                        <div class="tab-pane fade text-white" id="treand6"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table treanding__table main__basketballtable larg__width7">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-afootball"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            American Football
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris32">
                                                                <option value="1">
                                                                    Game Lines
                                                                </option>
                                                                <option value="1">
                                                                    Game Lines 2
                                                                </option>
                                                                <option value="1">
                                                                    Game Lines 3
                                                                </option>
                                                                <option value="1">
                                                                    Game Lines 4
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__wrap">
                                                    <div
                                                        class="table__items table__pointnone__items">
                                                        <div class="t__items">
                                                            <div class="t__items__left">

                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right opo">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0"
                                                                       class="mart opo">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            Spread
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            Total
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box bg__none">
                                                                            Money Line
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box opo point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    New Orleans Saints @
                                                                </h6>
                                                                <span class="text">
                                                                                                                        Tampa Bay Buccaneers
                                                                                                                    </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        Tomorrow / 05:10
                                                                    </a>
                                                                    <a href="#0" class="today">
                                                                        BUILD A BET
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +3,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                0 40,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            2.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -3,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 40,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.53
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Kansas City Chiefs @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Denver Broncos
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -8,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                0 42,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            4.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +9,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 44,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.22
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    New York Jets @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Buffalo Bills
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +9,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                0 44,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 44,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Las Vegas Raiders @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Los Angeles Rams
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                0 43
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 43
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Philadelphia Eagles @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    New York Giants
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Jacksonville Jaguars @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Tennessee Titans
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                0 44,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.48
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 44,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.91
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            3.20
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Cleveland Browns @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Cincinnati Bengals
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +3,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                0 42
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -3,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                U 42
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 44,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Carolina Panthers @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Seattle Seahawks
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            6.33
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                U 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Minnesota Vikings @
                                                                </h6>
                                                                <span class="text">
                                                                                                                    Detroit Lions
                                                                                                                </span>
                                                                <p>
                                                                    <a href="#0">
                                                                        12/12/2022 03:05
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div
                                                                class="tablebasket__martpoin__wrap pr__10">
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="mart__point__items">
                                                                <div
                                                                    class="martbas__pointlast americanf__point__box">
                                                                    <div
                                                                        class="mart__point__left mb__10">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                +6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                2.70
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                O 109,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                8.50
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            7.50
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -1
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.80
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                                                                            <span
                                                                                                                                class="spoint">
                                                                                                                                -6,5
                                                                                                                            </span>
                                                                            <span>
                                                                                                                                1.87
                                                                                                                            </span>
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            1.55
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            OPEN AMERICAN FOOTBALL LOBBY
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>42</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Golf Playing-->
                                        <div class="tab-pane fade text-white" id="treand7"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table larg__width6 treanding__table main__basketballtable">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-golf"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Golf
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris33">
                                                                <option value="1">
                                                                    3-ball Match
                                                                </option>
                                                                <option value="1">
                                                                    4-ball Match
                                                                </option>
                                                                <option value="1">
                                                                    5-ball Match
                                                                </option>
                                                                <option value="1">
                                                                    6-ball Match
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris34">
                                                                <option value="1">
                                                                    3-ball Match
                                                                </option>
                                                                <option value="1">
                                                                    4-ball Match
                                                                </option>
                                                                <option value="1">
                                                                    5-ball Match
                                                                </option>
                                                                <option value="1">
                                                                    6-ball Match
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="heght__table__points">
                                                    <span>1</span>
                                                    <span>2</span>
                                                    <span>3</span>
                                                    <span>1</span>
                                                    <span>2</span>
                                                </div>
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    To win a Major in 2023
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6 class="p__max">
                                                                    Rory McIlroy major
                                                                    championship wins in 2023
                                                                    (bets void if he does not
                                                                    play in all...
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    The Match VII
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            OPEN GOLF LOBBY
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>4</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Cycling Playing-->
                                        <div class="tab-pane fade text-white" id="treand8"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table larg__width6 treanding__table main__basketballtable">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-cycling"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Cycling
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris35">
                                                                <option value="1">
                                                                    Main bets 1
                                                                </option>
                                                                <option value="1">
                                                                    Main bets 2
                                                                </option>
                                                                <option value="1">
                                                                    Main bets 3
                                                                </option>
                                                                <option value="1">
                                                                    Main bets 4
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="heght__table__points">
                                                    <span>1</span>
                                                    <span>2</span>
                                                    <span>3</span>
                                                    <span>1</span>
                                                    <span>2</span>
                                                </div>
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Milano-San Remo 2023
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6 class="p__max">
                                                                    Paris-Roubaix 2023
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tour de France 2023 -
                                                                    General Classification
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tour of Flanders 2023
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            OPEN GOLF LOBBY
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>4</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Beach Playing-->
                                        <div class="tab-pane fade text-white" id="treand9"
                                             role="tabpanel" aria-labelledby="nav-home-tabpre"
                                             tabindex="0">
                                            <div
                                                class="main__table larg__width6 treanding__table main__basketballtable">
                                                <div class="section__head b__bottom">
                                                    <div class="left__head">
                                                                                                        <span class="icons">
                                                                                                            <i class="icon-golf"></i>
                                                                                                        </span>
                                                        <span>
                                                                                                            Beach Volleyball
                                                                                                        </span>
                                                    </div>
                                                    <div class="right__catagoris">
                                                        <div class="right__cate__items">
                                                            <select name="cate1"
                                                                    id="categoris37">
                                                                <option value="1">
                                                                    Main bets 1
                                                                </option>
                                                                <option value="1">
                                                                    Main bets 2
                                                                </option>
                                                                <option value="1">
                                                                    Main bets 3
                                                                </option>
                                                                <option value="1">
                                                                    Main bets 4
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="heght__table__points">
                                                    <span>1</span>
                                                    <span>2</span>
                                                    <span>3</span>
                                                    <span>1</span>
                                                    <span>2</span>
                                                </div>
                                                <div class="table__wrap">
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tour de France 2023 -
                                                                    General Classification
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table__items b__bottom">
                                                        <div class="t__items">
                                                            <div class="t__items__left">
                                                                <h6>
                                                                    Tour of Flanders 2023
                                                                </h6>
                                                                <p>
                                                                    <a href="#0">
                                                                        23/07/2023 22:00
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tablebasket__main__wrap">
                                                            <div class="mart__point__items">
                                                                <div class="martbas__pointlast">
                                                                    <div
                                                                        class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box aroow__text bg__none">
                                                                            <span>Bet now</span>
                                                                            <span class="icons"><i
                                                                                    class="fas fa-chevron-right"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="mart__point__right">
                                                                    <a href="#0"
                                                                       class="point__box point__boxpadding bg__none">
                                                                        <i class="icon-star star"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table__footer">
                                                        <a href="#0" class="lobby text__opa">
                                                            OPEN GOLF LOBBY
                                                        </a>
                                                        <a href="#0" class="footerpoing">
                                                            <span>4</span>
                                                            <span><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}
                </div>
            </div>
        </div>
        <!--Trending section End-->

        <!--Footer Content Here-->
    {{--     <div class="footer__content__section pt-60 pb-60">
             <div class="footer__content__items">
                 <h5>
                     Sports Betting at Sportingbet
                 </h5>
                 <p>
                     Nulla facilisis scelerisque leo, nec accumsan metus.
                     Vestibulum molestie augue vel erat molestie accumsan. In
                     placerat dolor ut leo porttitor facilisis in a ante.
                     Quisque vitae nibh arcu. Nam vitae cursus purus.
                     Suspendisse sit amet auctor massa. Nulla ac urna in erat
                     molestie maximus. Aliquam a velit vitae ex vehicula
                     suscipit non in enim. Phasellus iaculis libero non dui
                     consequat, vitae vulputate ipsum posuere. Praesent
                     sagittis ipsum venenatis pharetra eleifend. Maecenas
                     commodo mauris vitae leo faucibus fermentum at quis
                     arcu. Nunc malesuada purus ex, vitae posuere turpis
                     pellentesque eget. Curabitur rutrum a tellus et
                     suscipit. Phasellus rhoncus dui et enim aliquet, et
                     tincidunt mi laoreet. Nulla sagittis nibh purus, quis
                     commodo nulla molestie nec. Donec et purus accumsan,
                     sodales nunc at, pretium orci.
                 </p>
             </div>
             <div class="footer__content__items">
                 <h5>
                     Bet online at Sportingbet
                 </h5>
                 <p>
                     Nulla facilisis scelerisque leo, nec accumsan metus.
                     Vestibulum molestie augue vel erat molestie accumsan. In
                     placerat dolor ut leo porttitor facilisis in a ante.
                     Quisque vitae nibh arcu. Nam vitae cursus purus.
                     Suspendisse sit amet auctor massa. Nulla ac urna in erat
                     molestie maximus. Aliquam a velit vitae ex vehicula
                     suscipit non in enim. Phasellus iaculis libero non dui
                     consequat, vitae vulputate ipsum posuere. Praesent
                     sagittis ipsum venenatis pharetra eleifend. Maecenas
                     commodo mauris vitae leo faucibus fermentum at quis
                     arcu. Nunc malesuada purus ex, vitae posuere turpis
                     pellentesque eget. Curabitur rutrum a tellus et
                     suscipit. Phasellus rhoncus dui et enim aliquet, et
                     tincidunt mi laoreet. Nulla sagittis nibh purus, quis
                     commodo nulla molestie nec. Donec et purus accumsan,
                     sodales nunc at, pretium orci.
                 </p>
             </div>
             <div class="footer__content__items">
                 <h5>
                     Bet on Football
                 </h5>
                 <p>
                     Nulla facilisis scelerisque leo, nec accumsan metus.
                     Vestibulum molestie augue vel erat molestie accumsan. In
                     placerat dolor ut leo porttitor facilisis in a ante.
                     Quisque vitae nibh arcu. Nam vitae cursus purus.
                     Suspendisse sit amet auctor massa. Nulla ac urna in erat
                     molestie maximus. Aliquam a velit vitae ex vehicula
                     suscipit non in enim. Phasellus iaculis libero non dui
                     consequat, vitae vulputate ipsum posuere. Praesent
                     sagittis ipsum venenatis pharetra eleifend. Maecenas
                     commodo mauris vitae leo faucibus fermentum at quis
                     arcu. Nunc malesuada purus ex, vitae posuere turpis
                     pellentesque eget. Curabitur rutrum a tellus et
                     suscipit. Phasellus rhoncus dui et enim aliquet, et
                     tincidunt mi laoreet. Nulla sagittis nibh purus, quis
                     commodo nulla molestie nec. Donec et purus accumsan,
                     sodales nunc at, pretium orci.
                 </p>
             </div>
         </div>--}}
    <!--Footer Content End-->

    </div>
    <!--Main body-->

    @include('_partials._footer')

</div>
