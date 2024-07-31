<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAND COMBAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="dashboard.css" rel="stylesheet">
    <link href="../common.css" rel="stylesheet">
</head>

<body>
    <div id="dashboard">

        <img src="../img/cloud-1.png" alt="Cloud" class="cloud-1" />

        <img src="../img/cloud-2.png" alt="Cloud" class="cloud-2" />

        <img src="../img/cloud-3.png" alt="Cloud" class="cloud-3" />

        <div class="ground">
            <img src="../img/pipe-right.png" alt="Pipe" class="ground-pipe-right" />
            <img src="../img/pipe-left.png" alt="Pipe" class="ground-pipe-left" />
            <img src="../img/user.png" alt="User" class="ground-mushroom" />
            <img src="../img/ground.png" alt="Ground" class="ground-bg" />
            <img src="../img/mushroom.png" alt="Mushroom" class="ground-brown-mushroom" />

        </div>

        <header class="header">
            <div class="header-username">
                <img src="../img/user.png" class="header-username-img" />
                <h5 class="header-username-name">
                    MrMarioME.6
                </h5>
            </div>
            <div class="header-mariocoin-container">
                <img src="../img/mario-coin-button.png" alt="MarioCoin" class="header-mariocoin-bg" />
                <img src="../img/coin.png" alt="Coin" class="header-mariocoin-coin" />
                <h5 class="header-mariocoin-title">MarioCoin</h5>
                <img src="../img/down-arrow.png" alt="Arrow" class="header-mariocoin-arrow" />

            </div>
        </header>

        <main class="main">
            <section class="stats">
                <div class="stat-card">
                    <h5 class="stat-card-title">Earn per tap</h5>
                    <div class="stat-card-value">
                        <img src="../img/coin.png" alt="Coin" />
                        <p>+ <span id="per-tap-value"></span></p>
                    </div>

                </div>

                <div class="stat-card">
                    <h5 class="stat-card-title">coins to lvl up</h5>

                    <div class="stat-card-value">
                        <img src="../img/coin.png" alt="Coin" />
                        <p><span id="coins-to-lvl-up"></span></p>
                    </div>

                </div>

                <div class="stat-card">
                    <h5 class="stat-card-title">Profit per hour</h5>
                    <div class="stat-card-value">
                        <img src="../img/coin.png" alt="Coin" />
                        <p><span id="profit-per-hour"></span></p>
                    </div>

                </div>
            </section>

            <section class="total">
                <div class="total-coins">
                    <img src="../img/coin.png" alt="Coin" />
                    <span id="total-coin"></span>
                </div>

                <div class="total-lvl">
                    <div class="total-profile">
                        <div class="total-profile-name">
                            <img src="../img/lvl-mario.png" alt="Mario" />
                            <h5>Mario</h5>
                        </div>

                        <div class="total-profile-lvl">
                            <h5>Level <span id="current-lvl"></span>/9</h5>
                        </div>
                    </div>

                    <div class="total-lvl-progress">
                        <div class="total-lvl-bar" id="experience">
                            <img src="../img/flag-red.png" alt="Flag" class="total-lvl-bar-flag" />
                        </div>
                        <img src="../img/loading.png" alt="Experience" class="total-lvl-bar-container" />
                    </div>
                </div>
            </section>
            <section class="tap">
                <img src="../img/tap-to-earn.png" alt="Tap To Earn" id="tap-effect" />
            </section>
        </main>

        <footer class="menu-container">
            <div class="boost">
                <div class="boost-card">
                    <img src="../img/light.png" alt="Light" class="boost-img" />
                    <p class="boost-title"><span id="current-energy"></span>/<span id="max-energy"></span></p>
                </div>

                <div class="boost-card">
                    <a href="boost.html" class="boost-card-link noSelect"></a>
                    <img src="../img/potion.png" alt="Potion" class="boost-img-potion" />
                    <span class="boost-title">Boost</span>
                    <img src="../img/left-arrow.png" alt="Arrow" class="boost-arrow" />

                </div>
            </div>

            <div class="menu">
                <ul class="menu-list">
                    <li class="menu-item active">
                        <a href="#" class="menu-item-link noSelect">
                            <img src="../img/company.png" alt="Company" class="menu-item-img" />
                            <span class="menu-item-title">Company</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="mine.html" class="menu-item-link noSelect">
                            <img src="../img/mine.png" alt="Mine" class="menu-item-img" />
                            <span class="menu-item-title">Mine</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="friends.html" class="menu-item-link noSelect">
                            <img src="../img/friends.png" alt="User" class="menu-item-img" />
                            <span class="menu-item-title">Friends</span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="earn.html" class="menu-item-link noSelect">
                            <img src="../img/earn.png" alt="Earn" class="menu-item-img" />
                            <span class="menu-item-title">Earn</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="airdrop.html" class="menu-item-link noSelect">
                            <img src="../img/wallet.png" alt="Stats" class="menu-item-img" />
                            <span class="menu-item-title">Aitdrop</span>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="script.js" type="text/javascript"></script>
</body>

</html>