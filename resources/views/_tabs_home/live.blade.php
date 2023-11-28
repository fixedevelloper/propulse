<div class="tab-pane text-white fade" id="mainTab2" role="tabpanel" tabindex="0">
    <!--Main Body-->
    <div class="main__body__wrap left__right__space pb-60">
        <!--Home Here-->
        <div class="live__heightlight mb__30 mt__30">
            <div class="height__table">
                <!--Football-->
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
                                <select name="cate1" id="categoris38">
                                    <option value="1">
                                        Result 1x2
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
                                <select name="cate1" id="categoris39">
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
                                <select name="cate1" id="categoris40">
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
                                                    2H 45:34
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
                                        {{is_null($fixture->odd)?'':$fixture->odd->mt_win_home}}
                                    </a>
                                    <a href="#0box" class="point__box">
                                        {{is_null($fixture->odd)?'':$fixture->odd->mt_draw}}
                                    </a>
                                    <a href="#0box" class="point__box">
                                        {{is_null($fixture->odd)?'':$fixture->odd->mt_win_away}}
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
                        <div class="table__footer">
                            <a href="#0" class="lobby">
                                Open Football lobby
                            </a>
                            <a href="#0" class="footerpoing">
                                <span>322</span>
                                <span><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Football-->
            </div>
        </div>
        <!--Home End-->

{{--        <!--Tennis Start-->
        <div class="live__heightlight">
            <div class="height__table">
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
                                <select name="cate1" id="categoris41">
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
                                <select name="cate1" id="categoris42">
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
                                <select name="cate1" id="categoris43">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            8.55
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.70
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                <span><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tennis End-->

        <!--Basketball Start-->
        <div class="live__heightlight mt__30 ">
            <div class="height__table">
                <div class="main__table main__table__tennis main__table__basketball">
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
                                <select name="cate1" id="categoris44">
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
                                <select name="cate1" id="categoris45">
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
                                <select name="cate1" id="categoris46">
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
                        <div class="table__items mb__10 paddingbnone">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none spacing__lock">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="tov">o 79,5</span>
                                            <span>8.50</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none spacing__lock">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items paddingtnone b__bottom">
                            <div class="t__items">

                            </div>
                            <div class="cart__point">
                                                                                <span>
                                                                                    26
                                                                                </span>
                            </div>
                            <div class="tennis__right">
                                <div class="mart__point__items">
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="tov">o 79,5</span>
                                            <span>8.50</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none opo">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items mb__10 paddingbnone">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none spacing__lock">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="tov">o 79,5</span>
                                            <span>8.50</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none spacing__lock">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items paddingtnone b__bottom">
                            <div class="t__items">

                            </div>
                            <div class="cart__point">
                                                                                <span>
                                                                                    12
                                                                                </span>
                            </div>
                            <div class="tennis__right">
                                <div class="mart__point__items">
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="tov">o 79,5</span>
                                            <span>8.50</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none opo">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items mb__10 paddingbnone">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none spacing__lock">
                                            <i class="icon-lock"></i>
                                        </a>
                                        <a href="#box" class="point__box opo">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none spacing__lock">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items paddingtnone b__bottom">
                            <div class="t__items">

                            </div>
                            <div class="cart__point">
                                                                                <span>
                                                                                    16
                                                                                </span>
                            </div>
                            <div class="tennis__right">
                                <div class="mart__point__items">
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                        <a href="#box" class="point__box opo">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none opo">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items mb__10 paddingbnone">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none spacing__lock">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="tov">o 79,5</span>
                                            <span>8.50</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none spacing__lock">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items paddingtnone b__bottom">
                            <div class="t__items">

                            </div>
                            <div class="cart__point">
                                                                                <span>
                                                                                    16
                                                                                </span>
                            </div>
                            <div class="tennis__right">
                                <div class="mart__point__items">
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="tov">o 79,5</span>
                                            <span>8.50</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none opo">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items mb__10 paddingbnone">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none spacing__lock">
                                            <i class="icon-lock"></i>
                                        </a>
                                        <a href="#box" class="point__box opo">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none spacing__lock">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__items paddingtnone b__bottom">
                            <div class="t__items">

                            </div>
                            <div class="cart__point">
                                                                                <span>
                                                                                    33
                                                                                </span>
                            </div>
                            <div class="tennis__right">
                                <div class="mart__point__items">
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">+6,5</span>
                                        <span>2.70</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        <span class="tov">o 109,5</span>
                                        <span>8.50</span>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        7.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box bg__none opo">
                                            <i class="icon-lock"></i>
                                        </a>
                                        <a href="#box" class="point__box opo">
                                            2.25
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none opo">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__footer">
                            <a href="#0" class="lobby">
                                All <span class="text__btn">Basketball Live</span> Events
                            </a>
                            <a href="#0" class="footerpoing">
                                <span>12</span>
                                <span><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Basketball End-->

        <!--Vollyball Start-->
        <div class="live__heightlight mt__30 ">
            <div class="height__table">
                <div class="main__table main__table__tennis">
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
                                <select name="cate1" id="categoris47">
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
                                <select name="cate1" id="categoris48">
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
                                <select name="cate1" id="categoris49">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart opo">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            7.05
                                        </a>
                                        <a href="#box" class="point__box">
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
                                        <a href="#box" class="point__box">
                                            3.05
                                        </a>
                                        <a href="#box" class="point__box">
                                            6.50
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box point__box__volly bg__none">
                                        <i class="icon-lock"></i>
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#0box" class="point__box point__box__volly bg__none">
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
                                        <a href="#box" class="point__box">
                                            6.32
                                        </a>
                                        <a href="#box" class="point__box">
                                            5.55
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box point__box__volly bg__none">
                                        <i class="icon-lock"></i>
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#0box" class="point__box point__box__volly bg__none">
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
                                        <a href="#box" class="point__box">
                                            5.36
                                        </a>
                                        <a href="#box" class="point__box">
                                            9.36
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart opo">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            7.05
                                        </a>
                                        <a href="#box" class="point__box">
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
                                        <a href="#box" class="point__box">
                                            3.05
                                        </a>
                                        <a href="#box" class="point__box">
                                            6.50
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                        <a href="#0" class="text__opa">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart opo">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.70
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            7.05
                                        </a>
                                        <a href="#box" class="point__box">
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
                                        <a href="#box" class="point__box">
                                            3.05
                                        </a>
                                        <a href="#box" class="point__box">
                                            6.50
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__footer">
                            <a href="#0" class="lobby text__opa">
                                Open <span class="text__btn"> Volleyball Live</span> Events
                            </a>
                            <a href="#0" class="footerpoing">
                                <span>8</span>
                                <span><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vollyball End-->

        <!--Cricket Start-->
        <div class="live__heightlight mt__30 ">
            <div class="height__table">
                <div class="main__table main__table__tennis main__table__cricket">
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
                                <select name="cate1" id="categoris50">
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
                                <select name="cate1" id="categoris51">
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
                                <select name="cate1" id="categoris52">
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
                                        <a href="#box" class="point__box">
                                            3.05
                                        </a>
                                        <a href="#box" class="point__box">
                                            6.50
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__footer">
                            <a href="#0" class="lobby text__opa">
                                Open <span class="text__btn"> Cricket Live</span> Events
                            </a>
                            <a href="#0" class="footerpoing">
                                <span>8</span>
                                <span><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cricket End-->

        <!--Table Tennis Start-->
        <div class="live__heightlight">
            <div class="height__table">
                <div class="main__table main__table__tennis main__table__ttennis">
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
                                <select name="cate1" id="categoris53">
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
                                <select name="cate1" id="categoris54">
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
                                <select name="cate1" id="categoris55">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart opo">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        8.50
                                    </a>
                                    <a href="#0box" class="point__box">
                                        1.03
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="set">Set 1</span>
                                            <span>1.75</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            <span class="set">Set 1</span>
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
                                        <a href="#box" class="point__box">
                                            2.33
                                        </a>
                                        <a href="#box" class="point__box">
                                            4.66
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box point__box__volly bg__none">
                                        <i class="icon-lock"></i>
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#0box" class="point__box point__box__volly bg__none">
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
                                        <a href="#box" class="point__box">
                                            3.66
                                        </a>
                                        <a href="#box" class="point__box">
                                            4.33
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart opo">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        1.40
                                    </a>
                                    <a href="#0box" class="point__box">
                                        3.22
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="set">Set 1</span>
                                            <span>1.65</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            <span class="set">Set 1</span>
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
                                        <a href="#box" class="point__box">
                                            3.90
                                        </a>
                                        <a href="#box" class="point__box">
                                            3.50
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
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
                                        <a href="#0" class="text__opa">
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
                                    <a href="#0" class="twing twing__right">
                                        <i class="icon-twer"></i>
                                    </a>
                                    <a href="#0" class="mart opo">
                                        <i class="icon-pmart"></i>
                                    </a>
                                    <a href="#0box" class="point__box">
                                        2.80
                                    </a>
                                    <a href="#0box" class="point__box">
                                        1.36
                                    </a>
                                </div>
                                <div class="mart__point__two">
                                    <div class="mart__point__left">
                                        <a href="#box" class="point__box">
                                            <span class="set">Set 1</span>
                                            <span>2.05</span>
                                        </a>
                                        <a href="#box" class="point__box">
                                            <span class="set">Set 1</span>
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
                                        <a href="#box" class="point__box">
                                            2.05
                                        </a>
                                        <a href="#box" class="point__box">
                                            1.50
                                        </a>
                                    </div>
                                    <div class="mart__point__right">
                                        <a href="#0" class="point__box bg__none">
                                            <i class="icon-star star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table__footer">
                            <a href="#0" class="lobby text__opa">
                                Open <span class="text__btn"> Table Tennis</span> Events
                            </a>
                            <a href="#0" class="footerpoing">
                                <span>8</span>
                                <span><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Table Tennis End-->--}}
    </div>
    <!--Main Body-->

    <!--Footer Start-->
    <footer class="footer__section main__footer__section media991__pb60 pt-60">
        <div class="container-fluid p-0">
            <!--Footer Top-->
            <div class="footer__top pb-60">
                <div class="row g-5">
                    <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                    General Info
                                </h3>
                            </div>
                            <div class="content-area">
                                <ul class="quick-link">
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Faq
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sportsbetting.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Sports
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Sportsbook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="livecasino.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Live Betting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Virtuals
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                    Casino
                                </h3>
                            </div>
                            <div class="content-area">
                                <ul class="quick-link">
                                    <li>
                                        <a href="casino.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Top
                                        </a>
                                    </li>
                                    <li>
                                        <a href="casino.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> New
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Popular
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Slots
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Table Games
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Jackpots
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Live Casino
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> All Games
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                    Live Casino
                                </h3>
                            </div>
                            <div class="content-area">
                                <ul class="quick-link">
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Top Reted
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Club Royale
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Roulette
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Blackjack
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Games Shows
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Baccarat & Dice
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Poker
                                        </a>
                                    </li>
                                    <li>
                                        <a href="livecasino.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> All Live Casino
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                    Promotions
                                </h3>
                            </div>
                            <div class="content-area">
                                <ul class="quick-link">
                                    <li>
                                        <a href="promotions.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Casino Promotions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sportsbetting.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Sport Promotions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Tournaments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Achevements
                                        </a>
                                    </li>
                                    <li>
                                        <a href="bonuses.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Bonus Shop
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                    Help
                                </h3>
                            </div>
                            <div class="content-area">
                                <ul class="quick-link">
                                    <li>
                                        <a href="#0">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="betslipcheck.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Bet Slip Check
                                        </a>
                                    </li>
                                    <li>
                                        <a href="deposit.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Deposites / Withdrwals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sportsbetting.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Sports Results
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sportsbetting.html">
                                            <img src="assets/img/footer/rightarrow.png" alt="angle"> Sports Stats
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer Top-->

            <!--Footer Sponor Here-->
            <div class="footer__sponsor owl-theme owl-carousel">
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s1.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s12.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s3.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s4.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s5.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s6.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s7.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s8.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s9.png" alt="simg">
                    </a>
                </div>
                <div class="footer__sponsor__items">
                    <a href="#0">
                        <img src="assets/img/sponsor/s10.png" alt="simg">
                    </a>
                </div>
            </div>
            <!--Footer Sponor End-->

            <!--Footer bottom-->
            <div class="footer__bottom">
                <p>
                    Copyright &copy;2023 <a href="#0" class="text--base">SportOdds</a> - All Right Reserved
                </p>
                <ul class="bottom__ling">
                    <li>
                        <a href="#0">
                            Affiliate program
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            Terms & conditions
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            Bonus terms & conditions
                        </a>
                    </li>
                </ul>
            </div>
            <!--Footer bottom-->
        </div>
    </footer>
    <!--Footer End-->
</div>

