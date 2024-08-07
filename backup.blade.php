<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{url('/theme/mario/pages')}}/mine.css" rel="stylesheet">
    <link href="{{url('/theme/mario')}}/common.css" rel="stylesheet">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
    <script>
        // Initialize Eruda
        eruda.init();
    </script>
</head>

<body>
    <div class="menu-container">
        <div class="menu">
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="{{url('/dashboard')}}" class="menu-item-link noSelect">
                        <img src="{{url('/theme/mario')}}/img/company.png" alt="Company" class="menu-item-img" />
                        <span class="menu-item-title">Company</span>
                    </a>
                </li>
                <li class="menu-item active">
                    <a href="{{url('/mine')}}" class="menu-item-link noSelect">
                        <img src="{{url('/theme/mario')}}/img/mine.png" alt="Mine" class="menu-item-img" />
                        <span class="menu-item-title">Mine</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{url('/referral')}}" class="menu-item-link noSelect">
                        <img src="{{url('/theme/mario')}}/img/friends.png" alt="User" class="menu-item-img" />
                        <span class="menu-item-title">Friends</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{url('/earn')}}" class="menu-item-link noSelect">
                        <img src="{{url('/theme/mario')}}/img/earn.png" alt="Earn" class="menu-item-img" />
                        <span class="menu-item-title">Earn</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/airdrop')}}" class="menu-item-link noSelect">
                        <img src="{{url('/theme/mario')}}/img/wallet.png" alt="Stats" class="menu-item-img" />
                        <span class="menu-item-title">Airdrop</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <img src="{{url('/theme/mario')}}/img/cloud-1.png" alt="Cloud" class="cloud-1" />

    <img src="{{url('/theme/mario')}}/img/cloud-2.png" alt="Cloud" class="cloud-2" />

    <img src="{{url('/theme/mario')}}/img/cloud-3.png" alt="Cloud" class="cloud-3" />

    <div class="ground">
        <img src="{{url('/theme/mario')}}/img/pipe-right.png" alt="Pipe" class="ground-pipe-right" />
        <img src="{{url('/theme/mario')}}/img/pipe-left.png" alt="Pipe" class="ground-pipe-left" />
        <img src="{{url('/theme/mario')}}/img/ground.png" alt="Ground" class="ground-bg" />
    </div>

    <main class="main">
        <div class="header">
            <div class="lvl-progress">
                <div class="lvl-img">
                    <img src="{{url('/theme/mario')}}/img/user.png" />
                    <h5>Mario</h5>
                </div>

                <div class="lvl-bar">
                    <img src="{{url('/theme/mario')}}/img/loading-sm.png" />
                    <div class="lvl-exp" id="experience"></div>
                </div>
            </div>
            <div class="lvl-number">
                <h5>Level <span id="current-lvl"></span>/9</h5>
            </div>
        </div>

        <div class="total-coins">
            <img src="{{url('/theme/mario')}}/img/coin.png" alt="Coin" />

            <span id="total-coins"></span>
        </div>

        <div class="cards-container">
            <div class="cards-nav">
                <ul class="cards-nav-list">
                    <li class="cards-nav-item active-cards" id="my-cards-link">
                        <a href="#" id="my-cards-link" class="noSelect">
                            Dev Cards
                        </a>
                    </li>
                    <li class="cards-nav-item" id="new-cards-link"> <a href="#" class="noSelect">
                            City Cards
                        </a></li>
                    <li class="cards-nav-item" id="flag-cards-link"> <a href="#" class="noSelect">
                            Flag Cards
                        </a>
                    </li>
                    <li class="cards-nav-item" id="special-cards-link"> <a href="#" class="noSelect">
                            Specials
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="cards-list" id="my-cards">
                <li class="card-item" a data-img="/img/my-cards/card-1.jpg" data-card-name="Mini Mario"
                    data-card-profit="{{'level'.$next_mini_mario_level.'_profit'}}">
                    <img src="{{url('/theme/mario')}}/img/my-cards/card-1.jpg" />
                    <div class="card-info">
                        <h5>Mini Mario</h5>
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_mini_profit = 'level'.$next_mini_mario_level.'_profit';
                                if($nexts_mini_mario->$lvl_mini_profit < 1000)
                                 {
                                   echo $nexts_mini_mario->$lvl_mini_profit;   
                                 }elseif($nexts_mini_mario->$lvl_mini_profit > 999 && $nexts_mini_mario->$lvl_mini_profit < 1000000)
                                 {
                                    echo $nexts_mini_mario->$lvl_mini_profit / 1000 ."K"; 
                                 }elseif($nexts_mini_mario->$lvl_mini_profit > 99999)
                                 {
                                      echo $nexts_mini_mario->$lvl_mini_profit / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <!-- 
                          {{$next_mini_mario_level}} ==> لول بعدی که کاربر ارتقا دهد به ان خواهد رسید اگر این عدد منهای 1 شود لول فعلی که فعال است مشخص می شود
                         چون در این متغییر لول بعدی که کاربر بعد ارتقا بهش دست پیدا می کنه داره لود میشه من منهای یک کردم
                        --->
                        <h5>lvl{{$next_mini_mario_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_mini_price = 'level'.$next_mini_mario_level.'_price';
                                 if($nexts_mini_mario->$lvl_mini_price < 1000)
                                 {
                                   echo $nexts_mini_mario->$lvl_mini_price;   
                                 }elseif($nexts_mini_mario->$lvl_mini_price > 999 && $nexts_mini_mario->$lvl_mini_price < 1000000)
                                 {
                                    echo $nexts_mini_mario->$lvl_mini_price / 1000 ."K"; 
                                 }elseif($nexts_mini_mario->$lvl_mini_price > 99999)
                                 {
                                      echo $nexts_mini_mario->$lvl_mini_price / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" g data-img="/img/my-cards/card-7.jpg" data-card-name="Chaos City">
                    <img src="{{url('/theme/mario')}}/img/my-cards/card-7.jpg" />
                    <div class="card-info">
                        <h5>Chaos City</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_chaos_profit = 'level'.$next_chaos_city_level.'_profit';
                                if($nexts_chaos_city->$lvl_chaos_profit < 1000)
                                 {
                                   echo $nexts_chaos_city->$lvl_chaos_profit;   
                                 }elseif($nexts_chaos_city->$lvl_chaos_profit > 999 && $nexts_chaos_city->$lvl_chaos_profit < 1000000)
                                 {
                                    echo $nexts_chaos_city->$lvl_chaos_profit / 1000 ."K"; 
                                 }elseif($nexts_chaos_city->$lvl_chaos_profit > 99999)
                                 {
                                      echo $nexts_chaos_city->$lvl_chaos_profit / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_chaos_city_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_chaos_price = 'level'.$next_chaos_city_level.'_price';
                                 if($nexts_chaos_city->$lvl_chaos_price < 1000)
                                 {
                                   echo $nexts_chaos_city->$lvl_chaos_price;   
                                 }elseif($nexts_chaos_city->$lvl_chaos_price > 999 && $nexts_chaos_city->$lvl_chaos_price < 1000000)
                                 {
                                    echo $nexts_chaos_city->$lvl_chaos_price / 1000 ."K"; 
                                 }elseif($nexts_chaos_city->$lvl_chaos_price > 99999)
                                 {
                                      echo $nexts_chaos_city->$lvl_chaos_price / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>
                    </div>
                </li>
                <li class="card-item" h data-img="/img/my-cards/card-8.jpg" data-card-name="Body Builder">
                    <img src="{{url('/theme/mario')}}/img/my-cards/card-8.jpg" />
                    <div class="card-info">
                        <h5>Body Builder</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_bodybuilder_profit = 'level'.$next_body_builder_level.'_profit';
                                if($nexts_body_builder->$lvl_bodybuilder_profit < 1000)
                                 {
                                   echo $nexts_body_builder->$lvl_bodybuilder_profit;   
                                 }elseif($nexts_body_builder->$lvl_bodybuilder_profit > 999 && $nexts_body_builder->$lvl_bodybuilder_profit < 1000000)
                                 {
                                    echo $nexts_body_builder->$lvl_bodybuilder_profit / 1000 ."K"; 
                                 }elseif($nexts_body_builder->$lvl_bodybuilder_profit > 99999)
                                 {
                                      echo $nexts_body_builder->$lvl_bodybuilder_profit / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>

                    </div>


                    <div class="card-info-footer">
                        <h5>lvl{{$next_body_builder_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_bodybuilder_price = 'level'.$next_body_builder_level.'_price';
                                 if($nexts_body_builder->$lvl_bodybuilder_price < 1000)
                                 {
                                   echo $nexts_body_builder->$lvl_bodybuilder_price;   
                                 }elseif($nexts_body_builder->$lvl_bodybuilder_price > 999 && $nexts_body_builder->$lvl_bodybuilder_price < 1000000)
                                 {
                                    echo $nexts_body_builder->$lvl_bodybuilder_price / 1000 ."K"; 
                                 }elseif($nexts_body_builder->$lvl_bodybuilder_price > 99999)
                                 {
                                      echo $nexts_body_builder->$lvl_bodybuilder_price / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" i data-img="/img/my-cards/card-9.jpg" data-card-name="Car Lover">
                    <img src="{{url('/theme/mario')}}/img/my-cards/card-9.jpg" />
                    <div class="card-info">
                        <h5>Car Lover</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
							    $lvl_carlover_profit = 'level'.$next_car_lover_level.'_profit';
                                if($nexts_car_lover->$lvl_carlover_profit < 1000)
                                 {
                                   echo $nexts_car_lover->$lvl_carlover_profit;   
                                 }elseif($nexts_car_lover->$lvl_carlover_profit > 999 && $nexts_car_lover->$lvl_carlover_profit < 1000000)
                                 {
                                    echo $nexts_car_lover->$lvl_carlover_profit / 1000 ."K"; 
                                 }elseif($nexts_car_lover->$lvl_carlover_profit > 99999)
                                 {
                                      echo $nexts_car_lover->$lvl_carlover_profit / 1000000 ."M";
                                 }
							?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_car_lover_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
                                $lvl_carlover_price = 'level'.$next_car_lover_level.'_price';
                                 if($nexts_car_lover->$lvl_carlover_price < 1000)
                                 {
                                   echo $nexts_car_lover->$lvl_carlover_price;   
                                 }elseif($nexts_car_lover->$lvl_carlover_price > 999 && $nexts_car_lover->$lvl_carlover_price < 1000000)
                                 {
                                    echo $nexts_car_lover->$lvl_carlover_price / 1000 ."K"; 
                                 }elseif($nexts_car_lover->$lvl_carlover_price > 99999)
                                 {
                                      echo $nexts_car_lover->$lvl_carlover_price / 1000000 ."M";
                                 }
                                
                                ?>
                            </h5>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="cards-list hidden" id="new-cards">
                <li class="card-item" aa data-img="/img/new-cards/card-1.png" data-card-name="Shy Mushroom">
                    <img src="{{url('/theme/mario')}}/img/new-cards/card-1.png" />
                    <div class="card-info">
                        <h5>Shy Mushroom</h5>
                        <!--  <span>card1</span> --->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_shymushroom_profit = 'level'.$next_shy_mushroom_level.'_profit';
                                if($nexts_shy_mushroom->$lvl_shymushroom_profit < 1000)
                                 {
                                   echo $nexts_shy_mushroom->$lvl_shymushroom_profit;   
                                 }elseif($nexts_shy_mushroom->$lvl_shymushroom_profit > 999 && $nexts_shy_mushroom->$lvl_shymushroom_profit < 1000000)
                                 {
                                    echo $nexts_shy_mushroom->$lvl_shymushroom_profit / 1000 ."K"; 
                                 }elseif($nexts_shy_mushroom->$lvl_shymushroom_profit > 99999)
                                 {
                                      echo $nexts_shy_mushroom->$lvl_shymushroom_profit / 1000000 ."M";
                                 }

                                ?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_shy_mushroom_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                  $lvl_shymushroom_price = 'level'.$next_shy_mushroom_level.'_price';
                                 if($nexts_shy_mushroom->$lvl_shymushroom_price < 1000)
                                 {
                                   echo $nexts_shy_mushroom->$lvl_shymushroom_price;   
                                 }elseif($nexts_shy_mushroom->$lvl_shymushroom_price > 999 && $nexts_shy_mushroom->$lvl_shymushroom_price < 1000000)
                                 {
                                    echo $nexts_shy_mushroom->$lvl_shymushroom_price / 1000 ."K"; 
                                 }elseif($nexts_shy_mushroom->$lvl_shymushroom_price > 99999)
                                 {
                                      echo $nexts_shy_mushroom->$lvl_shymushroom_price / 1000000 ."M";
                                 }
                                  ?>
                            </h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" ab data-img="/img/new-cards/card-2.png" data-card-name="Mario Mafia">
                    <img src="{{url('/theme/mario')}}/img/new-cards/card-2.png" />
                    <div class="card-info">
                        <h5>Mario Mafia</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_mariomafia_profit = 'level'.$next_mario_mafia_level.'_profit';
                                if($nexts_mario_mafia->$lvl_mariomafia_profit < 1000)
                                 {
                                   echo $nexts_mario_mafia->$lvl_mariomafia_profit;   
                                 }elseif($nexts_mario_mafia->$lvl_mariomafia_profit > 999 && $nexts_mario_mafia->$lvl_mariomafia_profit < 1000000)
                                 {
                                    echo $nexts_mario_mafia->$lvl_mariomafia_profit / 1000 ."K"; 
                                 }elseif($nexts_mario_mafia->$lvl_mariomafia_profit > 99999)
                                 {
                                      echo $nexts_mario_mafia->$lvl_mariomafia_profit / 1000000 ."M";
                                 }
                                ?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_mario_mafia_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                  $lvl_mariomafia_price = 'level'.$next_mario_mafia_level.'_price';
                                 if($nexts_mario_mafia->$lvl_mariomafia_price < 1000)
                                 {
                                   echo $nexts_mario_mafia->$lvl_mariomafia_price;   
                                 }elseif($nexts_mario_mafia->$lvl_mariomafia_price > 999 && $nexts_mario_mafia->$lvl_mariomafia_price < 1000000)
                                 {
                                    echo $nexts_mario_mafia->$lvl_mariomafia_price / 1000 ."K"; 
                                 }elseif($nexts_mario_mafia->$lvl_mariomafia_price > 99999)
                                 {
                                      echo $nexts_mario_mafia->$lvl_mariomafia_price / 1000000 ."M";
                                 }
                                 ?>
                            </h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" ac data-img="/img/new-cards/card-3.png" data-card-name="Buisness Mario">
                    <img src="{{url('/theme/mario')}}/img/new-cards/card-3.png" />
                    <div class="card-info">
                        <h5>Buisness Mario</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_buisnessmario_profit = 'level'.$next_buisness_mario_level.'_profit';
                                if($nexts_buisness_mario->$lvl_buisnessmario_profit < 1000)
                                 {
                                   echo $nexts_buisness_mario->$lvl_buisnessmario_profit;   
                                 }elseif($nexts_buisness_mario->$lvl_buisnessmario_profit > 999 && $nexts_buisness_mario->$lvl_buisnessmario_profit < 1000000)
                                 {
                                    echo $nexts_buisness_mario->$lvl_buisnessmario_profit / 1000 ."K"; 
                                 }elseif($nexts_buisness_mario->$lvl_buisnessmario_profit > 99999)
                                 {
                                      echo $nexts_buisness_mario->$lvl_buisnessmario_profit / 1000000 ."M";
                                 }
                                 ?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_buisness_mario_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>2.1k</h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" ad data-img="/img/new-cards/card-4.png" data-card-name="Mario Pixley">
                    <img src="{{url('/theme/mario')}}/img/new-cards/card-4.png" />
                    <div class="card-info">
                        <h5>Mario Pixley</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
							     $lvl_mariopixley_profit = 'level'.$next_mario_pixley_level.'_profit';
                                if($nexts_mario_pixley->$lvl_mariopixley_profit < 1000)
                                 {
                                   echo $nexts_mario_pixley->$lvl_mariopixley_profit;   
                                 }elseif($nexts_mario_pixley->$lvl_mariopixley_profit > 999 && $nexts_mario_pixley->$lvl_mariopixley_profit < 1000000)
                                 {
                                    echo $nexts_mario_pixley->$lvl_mariopixley_profit / 1000 ."K"; 
                                 }elseif($nexts_mario_pixley->$lvl_mariopixley_profit > 99999)
                                 {
                                      echo $nexts_mario_pixley->$lvl_mariopixley_profit / 1000000 ."M";
                                 }
							?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_mario_pixley_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                  $lvl_mariopixley_price = 'level'.$next_mario_pixley_level.'_price';
                                 if($nexts_mario_pixley->$lvl_mariopixley_price < 1000)
                                 {
                                   echo $nexts_mario_pixley->$lvl_mariopixley_price;   
                                 }elseif($nexts_mario_pixley->$lvl_mariopixley_price > 999 && $nexts_mario_pixley->$lvl_mariopixley_price < 1000000)
                                 {
                                    echo $nexts_mario_pixley->$lvl_mariopixley_price / 1000 ."K"; 
                                 }elseif($nexts_mario_pixley->$lvl_mariopixley_price > 99999)
                                 {
                                      echo $nexts_mario_pixley->$lvl_mariopixley_price / 1000000 ."M";
                                 }

                               ?>
                            </h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" ae data-img="/img/new-cards/card-5.png" data-card-name="Princess Kiss">
                    <img src="{{url('/theme/mario')}}/img/new-cards/card-5.png" />
                    <div class="card-info">
                        <h5>Princess Kiss</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
							   $lvl_princesskiss_profit = 'level'.$next_princess_kiss_level.'_profit';
                                if($nexts_princess_kiss->$lvl_princesskiss_profit < 1000)
                                 {
                                   echo $nexts_princess_kiss->$lvl_princesskiss_profit;   
                                 }elseif($nexts_princess_kiss->$lvl_princesskiss_profit > 999 && $nexts_princess_kiss->$lvl_princesskiss_profit < 1000000)
                                 {
                                    echo $nexts_princess_kiss->$lvl_princesskiss_profit / 1000 ."K"; 
                                 }elseif($nexts_princess_kiss->$lvl_princesskiss_profit > 99999)
                                 {
                                      echo $nexts_princess_kiss->$lvl_princesskiss_profit / 1000000 ."M";
                                 }
							?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_princess_kiss_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_princesskiss_price = 'level'.$next_princess_kiss_level.'_price';
                                 if($nexts_princess_kiss->$lvl_princesskiss_price < 1000)
                                 {
                                   echo $nexts_princess_kiss->$lvl_princesskiss_price;   
                                 }elseif($nexts_princess_kiss->$lvl_princesskiss_price > 999 && $nexts_princess_kiss->$lvl_princesskiss_price < 1000000)
                                 {
                                    echo $nexts_princess_kiss->$lvl_princesskiss_price / 1000 ."K"; 
                                 }elseif($nexts_princess_kiss->$lvl_princesskiss_price > 99999)
                                 {
                                      echo $nexts_princess_kiss->$lvl_princesskiss_price / 1000000 ."M";
                                 }

                                 ?>
                            </h5>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="cards-list hidden" id="flag-cards-list">
                <li class="card-item" ba data-img="/img/flag-cards/card-1.png" data-card-name="German license">
                    <img src="{{url('/theme/mario')}}/img/flag-cards/card-1.png" />
                    <div class="card-info">
                        <h5>German license</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
							   $lvl_germanlicense_profit = 'level'.$next_german_license_level.'_profit';
                                if($nexts_german_license->$lvl_germanlicense_profit < 1000)
                                 {
                                   echo $nexts_german_license->$lvl_germanlicense_profit;   
                                 }elseif($nexts_german_license->$lvl_germanlicense_profit > 999 && $nexts_german_license->$lvl_germanlicense_profit < 1000000)
                                 {
                                    echo $nexts_german_license->$lvl_germanlicense_profit / 1000 ."K"; 
                                 }elseif($nexts_german_license->$lvl_germanlicense_profit > 99999)
                                 {
                                      echo $nexts_german_license->$lvl_germanlicense_profit / 1000000 ."M";
                                 }  
							?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_german_license_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_germanlicense_price = 'level'.$next_german_license_level.'_price';
                                 if($nexts_german_license->$lvl_germanlicense_price < 1000)
                                 {
                                   echo $nexts_german_license->$lvl_germanlicense_price;   
                                 }elseif($nexts_german_license->$lvl_germanlicense_price > 999 && $nexts_german_license->$lvl_germanlicense_price < 1000000)
                                 {
                                    echo $nexts_german_license->$lvl_germanlicense_price / 1000 ."K"; 
                                 }elseif($nexts_german_license->$lvl_germanlicense_price > 99999)
                                 {
                                      echo $nexts_german_license->$lvl_germanlicense_price / 1000000 ."M";
                                 }

                                ?>
                            </h5>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="cards-list hidden" id="special-cards-list">
                <li class="card-item" ca data-img="/img/special-cards/card-1.png" data-card-name="Young Mario">
                    <img src="{{url('/theme/mario')}}/img/special-cards/card-1.png" />
                    <div class="card-info">
                        <h5>Young Mario</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                  $lvl_youngmario_profit = 'level'.$next_young_mario_level.'_profit';
                                if($nexts_young_mario->$lvl_youngmario_profit < 1000)
                                 {
                                   echo $nexts_young_mario->$lvl_youngmario_profit;   
                                 }elseif($nexts_young_mario->$lvl_youngmario_profit > 999 && $nexts_young_mario->$lvl_youngmario_profit < 1000000)
                                 {
                                    echo $nexts_young_mario->$lvl_youngmario_profit / 1000 ."K"; 
                                 }elseif($nexts_young_mario->$lvl_youngmario_profit > 99999)
                                 {
                                      echo $nexts_young_mario->$lvl_youngmario_profit / 1000000 ."M";
                                 }

                                 ?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_young_mario_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_youngmario_price = 'level'.$next_young_mario_level.'_price';
                                 if($nexts_young_mario->$lvl_youngmario_price < 1000)
                                 {
                                   echo $nexts_young_mario->$lvl_youngmario_price;   
                                 }elseif($nexts_young_mario->$lvl_youngmario_price > 999 && $nexts_young_mario->$lvl_youngmario_price < 1000000)
                                 {
                                    echo $nexts_young_mario->$lvl_youngmario_price / 1000 ."K"; 
                                 }elseif($nexts_young_mario->$lvl_youngmario_price > 99999)
                                 {
                                      echo $nexts_young_mario->$lvl_youngmario_price / 1000000 ."M";
                                 }

                                ?>
                            </h5>
                        </div>
                    </div>
                </li>

                <li class="card-item" cb data-img="/img/special-cards/card-2.png" data-card-name="Police Mario">
                    <img src="{{url('/theme/mario')}}/img/special-cards/card-2.png" />
                    <div class="card-info">
                        <h5>Police Mario</h5>
                        <!--  <span>card1</span> -->
                        <div class="card-info-profit">
                            <span>Profit per hour</span>
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php 
							     $lvl_policemario_profit = 'level'.$next_police_mario_level.'_profit';
                                if($nexts_police_mario->$lvl_policemario_profit < 1000)
                                 {
                                   echo $nexts_police_mario->$lvl_policemario_profit;   
                                 }elseif($nexts_police_mario->$lvl_policemario_profit > 999 && $nexts_police_mario->$lvl_policemario_profit < 1000000)
                                 {
                                    echo $nexts_police_mario->$lvl_policemario_profit / 1000 ."K"; 
                                 }elseif($nexts_police_mario->$lvl_policemario_profit > 99999)
                                 {
                                      echo $nexts_police_mario->$lvl_policemario_profit / 1000000 ."M";
                                 }
							?>
                            </h5>
                        </div>
                    </div>

                    <div class="card-info-footer">
                        <h5>lvl{{$next_police_mario_level - 1}}</h5>
                        <div class="card-info-footer-value">
                            <img src="{{url('/theme/mario')}}/img/card-coin.png" />
                            <h5>
                                <?php
                                 $lvl_policemario_price = 'level'.$next_police_mario_level.'_price';
                                 if($nexts_police_mario->$lvl_policemario_price < 1000)
                                 {
                                   echo $nexts_police_mario->$lvl_policemario_price;   
                                 }elseif($nexts_police_mario->$lvl_policemario_price > 999 && $nexts_police_mario->$lvl_policemario_price < 1000000)
                                 {
                                    echo $nexts_police_mario->$lvl_policemario_price / 1000 ."K"; 
                                 }elseif($nexts_police_mario->$lvl_policemario_price > 99999)
                                 {
                                      echo $nexts_police_mario->$lvl_policemario_price / 1000000 ."M";
                                 }

                                 ?>
                            </h5>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <div class="modal hidden" id="modal">
            <img alt="Energy" class="modal-img" id="modal-img" />

            <div>
                <h5 class="modal-title" id="modal-name"></h5>
            </div>

            <p class="modal-text">Profit per hour: <span id="modal-profit"></span></p>

            <div class="modal-price">
                <img src="{{url('/theme/mario')}}/img/coin.png" alt="Coin" class="modal-coin-img" />

                <span class="price"></span>
            </div>

            <div class="modal-buttons">
                <div class="btn noSelect" a>
                    <span class="btn-text">Go ahead</span>
                </div>

                <div class="btn noSelect" id="close-modal" b>
                    <span class="btn-text">cancel</span>
                </div>
            </div>
        </div>

    </main>
    <div class="overlay hidden" id="overlay"></div>
    <div id="coins-container" class="hidden"></div>
    <script src="{{url('/theme/mario/pages')}}/mine.js" type="text/javascript"></script>
</body>

</html>