<script id="playerPageTemplate" type="text/template">
	<h1><%=playerName%></h1>
	<div class="sectionBody">

        <div class="row">
            <div class="col-xs-2">
                <img src="img/avatars/2_<%=player_id%>_1?ver=2" class="roundAvatar headingAvatar largeAvatar" />
            </div>
            <div class="col-xs-3">
                <h3 class="bigVal"><%=current_elo%></h3>
                <p>points</p>
            </div>
            <div class="col-xs-4">
                <h3 class="bigVal"><span id="playerGamesWon"><%=games_won%></span><small>/<span id="playerGamesPlayed"><%=games_played%></span></small></h3>
                <p>games won (<span id="playerWinPercent"><%=games_won_percent%></span>%)</p>
            </div>

            <div class="col-xs-3">
                <h3 class="bigVal"><span id="playerRank"><%=rank%></span></h3>
                <p>of <span id="playersTotal"><%=total_competitors%></span> players</p>
            </div>
        </div>

        <h2>Top rivls</h2>
        <div id="playerStats"></div>
        <!--
        <a href="#" id="topRivlsShowMore">Show more</a>
        -->

    </div>

    <!--
    <h2>Current titles</h2>
    <div class="row">
        <div class="col-xs-12">
            <h4>These are temp examples, feel free to email me some examples + logic on how to calculate them</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h4 class="bigVal"><span class="glyphicon glyphicon-fire"></span> The bully</h4>
            <p>Hey, pick on someone your own size!</p>
        </div>
        <div class="col-xs-12">
            <h4 class="bigVal"><span class="glyphicon glyphicon-cutlery"></span> Game hungry</h4>
            <p>You can&apos;t keep <%=playerName%> away from the action</p>
        </div>
    </div>
    -->

    <!--
	<h2>Points over time</h2>
	<canvas id="playerGraph" width="1024" height="728"></canvas>
    -->

    <h2>Recent games</h2>
    <div class="sectionBody">

        <div id="recentGames" class="row">
            <div class="col-xs-2">
                <img src="img/avatars/2_<%=player_id%>_1?ver=2" class="mediumAvatar roundAvatar" />
            </div>
            <div class="col-xs-2">
                <span class="vs">vs...</span>
            </div>
            <div class="col-xs-2 text-center">
                <img src="img/avatars/2_13_1?ver=2" class="mediumAvatar roundAvatar" /><br />
                <span class="recentWin">2</span> - <span>1</span>
            </div>
            <div class="col-xs-2 text-center">
                <img src="img/avatars/2_10_1?ver=2" class="mediumAvatar roundAvatar" /><br />
                <span class="recentWin">4</span> - <span class="">3</span>
            </div>
            <div class="col-xs-2 text-center">
                <img src="img/avatars/2_8_1?ver=2" class="mediumAvatar roundAvatar" /><br />
                <span class="">1</span> - <span class="recentLoss">2</span>
            </div>
            <div class="col-xs-2 text-center">
                <img src="img/avatars/2_1_1?ver=2" class="mediumAvatar roundAvatar" /><br />
                <span class=recentWin"">1</span> - <span class="">1</span>
            </div>

        </div>

        <br /><br /><br /><br /><em>discard this version:</em>
        <div id="playerHistory"></div>
    </div>
</script>