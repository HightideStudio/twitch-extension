<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Fortnite Tracker</title>
        <meta name="description" content="Fortnite Tracker">
        <meta name="author" content="SitePoint">

        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="jquery.cookie.js" crossorigin="anonymous"></script>

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->

        <!-- https://write.corbpie.com/how-to-use-the-fortnite-tracker-api-with-php/ -->
        <!-- https://docs.google.com/document/d/1p3C7hV1WOo4figK2CNzSG_muAuszUIJ-hzzrv2toqrE/edit -->
        <!-- https://fortnitetracker.com/site-api -->
    </head>

    <style>
        /* ---------------------------- Version 1 ---------------------------- */
        @font-face {
            font-family: fortniteFont;
            src: url(LuckiestGuy.ttf);
        }
        .noMargin{
            margin: 0 !important;
        }
        .noPadding{
            padding: 0 !important;
        }
        .noPaddingLeft{
            padding-left: 0 !important;
        }
        .noMarginLeft{
            margin-left: 0 !important;
        }
        .player-name{
            font-size: 22px;
        }
        /* .player-name{
            font-family: fortniteFont;
            font-size: 18px;
            letter-spacing: 2px;
        } */
        .container{
            margin-top: 50px;
        }
        .widget-container.v1 .carousel{
            -webkit-box-shadow: 0 0 20px 0 #000;
            box-shadow: 0 0 20px 0 #000;  
            width: 100%;
            height: 375px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        .widget-container.v1 .carousel-inner{
            background-color: #2D2D2D;
            color: #fff;
            border: 1px solid #444;
            width: 100%;
            height: 100%;
            overflow: hidden;
            -webkit-border-radius: 5px;
            border-radius: 5px;

            position: relative;
        }
        .widget-container.v1 .carousel-inner .wrapper{
            background: url("https://blackbox-xwmwgob.netdna-ssl.com/wp-content/uploads/2018/01/Fortnite-Logo-Server-Hosting.png");
            background-repeat: no-repeat;
            background-size: 120px;
            background-position: center 10px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        .widget-container.v1 .carousel-item{
            height: 100%;
        }
        .widget-container.v1 .carousel-item.one{
           
        }
        .widget-container.v1 .fortnite-label{
            padding-top: 110px;
            text-align: center;
        }
        .widget-container.v1 .fortnite-data{
            padding-top: 5px;
            text-align: center;
        }
        .widget-container.v1 .fortnite-data span.dataGroup{
            display: block;
        }
        .widget-container.v1 .fortnite-data-total-games{
            line-height: 0;
            font-size: 10px;
            color: #BEBEBE;
            text-align: center;
            line-height: 15px;
        }
        .widget-container.v1 .mainLogo{
            text-align: center;
            z-index: 999;
            margin-top: 5px;
        }
        /* ---------------------------- Version 1 ---------------------------- */




        
        /* ---------------------------- Version 2 ---------------------------- */
        .widget-container.v2{
            position: relative;
        }

        .widget-container.v2 .carousel{
            /* -webkit-box-shadow: 0 0 20px 0 #000;
            box-shadow: 0 0 20px 0 #000;   */
            width: 100%;
            height: 90px;
            padding-top: 5px;
            background-color: #2D2D2D ;
        }
        .widget-container.v2 .carousel-inner{
            color: #fff;
            overflow: hidden;
            /* -webkit-border-radius: 5px;
            border-radius: 5px; */
            height : 100%;
            width: 100%;
            padding-left: 90px;

            background: #2D2D2D url("https://blackbox-xwmwgob.netdna-ssl.com/wp-content/uploads/2018/01/Fortnite-Logo-Server-Hosting.png");
            background-repeat: no-repeat;
            background-size: 60px;
            background-position: 15px 20px;
        }
        .widget-container.v2 .carousel-item{
            height: 100%;
        }
        .widget-container.v2 .fortnite-data span.dataGroup{
            margin-right: 10px;
        }
        
        .widget-container.v2 .carousel-inner .wrapper{
            -webkit-border-radius: 5px;
            border-radius: 5px;
            height : 100%;
            overflow: hidden;
        }
        .widget-container.v2 .mainLogo{
            position: absolute;
            /* top: 45px; */
            top: 85px;
            left: 3px;
        }




        .widget-container.v2 .vertical .carousel-inner {
            height: 100%;
        }

        .widget-container.v2 .carousel.vertical .carousel-item {
            -webkit-transition: 0.6s ease-in-out top !important;
            -moz-transition: 0.6s ease-in-out top !important;
            -ms-transition: 0.6s ease-in-out top !important;
            -o-transition: 0.6s ease-in-out top !important;
            transition: 0.6s ease-in-out top !important;
        }

        .widget-container.v2 .carousel.vertical .active {
            top: 0;
        }
        .widget-container.v2 .fortnite-data-total-games{
            line-height: 1;
            font-size: 12px;
            color: #f2f2f2;
            position: absolute;
            bottom: 20px; 
            left: 90px;
        }
        /* ---------------------------- Version 2 ---------------------------- */




        
        /* ---------------------------- Version 3 ---------------------------- */
        .widget-container.v3{
            position: relative;
        }

        .widget-container.v3 .carousel{
            /* -webkit-box-shadow: 0 0 20px 0 #000;
            box-shadow: 0 0 20px 0 #000;   */
            width: 100%;
            height: 450px;
            padding-top: 5px;

            background-color: #2D2D2D;

            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.15+0,0.05+100 */
            /* background: -moz-linear-gradient(left, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.05) 100%);
            background: -webkit-linear-gradient(left, rgba(0,0,0,0.15) 0%,rgba(0,0,0,0.05) 100%);
            background: linear-gradient(to right, rgba(0,0,0,0.15) 0%,rgba(0,0,0,0.05) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#26000000', endColorstr='#0d000000',GradientType=1 ); IE6-9 */
        }
        .widget-container.v3 .carousel-inner{
            color: #fff;
            overflow: hidden;
            /* -webkit-border-radius: 5px;
            border-radius: 5px; */
            height : 100%;
            width: 100%;

            background-image: url("https://blackbox-xwmwgob.netdna-ssl.com/wp-content/uploads/2018/01/Fortnite-Logo-Server-Hosting.png");
            background-repeat: no-repeat;
            background-size: 60px;
            background-position: 5px 0;
        }
        .widget-container.v3 .fortnite-data{
            margin-top: 20px;
        }
        .widget-container.v3 .carousel-item{
            height: 100%;
        }
        .widget-container.v3 .fortnite-data span.dataGroup{
            margin-right: 10px;
        }
        
        .widget-container.v3 .carousel-inner .wrapper{
            -webkit-border-radius: 5px;
            border-radius: 5px;
            height : 100%;
            overflow: hidden;
        }
        .widget-container.v3 .mainLogo{
            position: absolute;
            /* top: 45px; */
            top: 85px;
            left: 3px;
        }
        .widget-container.v3 .data-table-row{
            padding: 5px 5px 5px 0;
        }
        
        .widget-container.v3 .victory-top1{
            border: 1px solid #3b3f42;
            margin-top: -1px !important;
        }
        .widget-container.v3 .previous-match-table-data{
            margin-top: 5px;
        }





        .widget-container.v3 .vertical .carousel-inner {
            height: 100%;
        }

        .widget-container.v3 .carousel.vertical .carousel-item {
            -webkit-transition: 0.6s ease-in-out top !important;
            -moz-transition: 0.6s ease-in-out top !important;
            -ms-transition: 0.6s ease-in-out top !important;
            -o-transition: 0.6s ease-in-out top !important;
            transition: 0.6s ease-in-out top !important;
        }

        .widget-container.v3 .carousel.vertical .active {
            top: 0;
        }
        .widget-container.v3 .fortnite-data-total-games{
            line-height: 1;
            font-size: 12px;
            color: #f2f2f2;
            margin-top: 20px;
        }
        /* ---------------------------- Version 3 ---------------------------- */



        .widget-container.v4 .carousel-inner{
            width: 500px;

            background-image: url("https://blackbox-xwmwgob.netdna-ssl.com/wp-content/uploads/2018/01/Fortnite-Logo-Server-Hosting.png");
            background-repeat: no-repeat;
            background-size: 90px;
            background-position: 10px 5px;

            
            font-family: fortniteFont;
            font-size: 18px;
            letter-spacing: 2px;

            color: #ffffff;
        }

        .widget-container.v4 .carousel-inner{
            padding-left: 120px;
        }

        .widget-container.v4 .carousel-inner .small-widget{
            height: 80px;
            text-align: center;
            font-size: 25px;
            line-height: 30px;
            padding-top: 10px;
            letter-spacing: 5px;

            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.05+0,0.05+100;Neutral+Density */
            background: -moz-linear-gradient(left, rgba(0,0,0,0.50) 0%, rgba(0,0,0,0.50) 100%);
            background: -webkit-linear-gradient(left, rgba(0,0,0,0.50) 0%,rgba(0,0,0,0.50) 100%);
            background: linear-gradient(to right, rgba(0,0,0,0.50) 0%,rgba(0,0,0,0.50) 100%); 
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0d000000', endColorstr='#0d000000',GradientType=1 ); IE6-9
        }

        .widget-container.v4 .carousel-inner .dataGroup .label{
            font-size: 30px;
        }

        .widget-container.v4 .carousel-inner .small-widget.wins{
            
        }

        .widget-container.v4 .carousel-inner .small-widget.kills{
            /* margin-left: -1px; */
            margin-left: 4px;
        }

        .widget-container.v4 .carousel-inner .small-widget.kd{
            /* margin-left: -1px; */
            margin-left: 4px;
        }
            

        

    </style>



    <body class="noMargin" style="padding-top: 50px; width: 100% !important;">
    
        <div class="row">
            <div class="widget-container v2 col-lg">
                <div class="container2 col-lg">
                    <div id="carouselExampleControls" class="carousel slide vertical" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner">
                            <div class="wrapper">
                                <div class="carousel-item one active">
                                    <div class="fortnite-label player-name"><strong></strong></div>
                                    
                                    <div class="fortnite-data"></div>
                                </div>

                                <div class="fortnite-data-total-games">Total Games: <span></span></div>
                            </div>
                        </div>
                    </div>



                    <br/>
                    <button class="fetchData sr-only">Reload Fortnite Tracket</button>
                    
                    <div class="outputData"></div>
                </div>
            </div><!-- close widget-container v2 -->
        </div><!-- close row -->





        <div class="row col-lg noMargin noPadding">
            <div class="widget-container v1 col-6 col-sm-3">
                <div class="container  noMargin">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner">
                            <div class="wrapper">
                                <div class="carousel-item one active">
                                    <div class="fortnite-label player-name"><strong></strong></div>
                                    
                                    <div class="fortnite-data"></div>
                                </div>

                                <br/>
                                <div class="fortnite-data-total-games">Total Games: <span></span></div>
                            </div>
                        </div>
                    </div>



                    <br/>
                    <button class="fetchData sr-only">Reload Fortnite Tracket</button>
                    
                    <div class="outputData"></div>
                </div>
            </div><!-- close widget-container v1 -->


            <div class="widget-container v3 col-6 col-sm-9">
                <div class="container3 noMargin">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner">
                            <div class="wrapper">
                                <div class="carousel-item one active">
                                    <div class="fortnite-label player-name"><strong></strong></div>


                                    <div class="fortnite-data"></div>



                                    <div class="previous-match-table-data">

                                    </div>

                                    
                                    <div class="fortnite-data-total-games"><span></span></div>
                                </div>
                                
                                    
                            </div>
                        </div>
                    </div>



                    <br/>
                    <button class="fetchData sr-only">Reload Fortnite Tracket</button>
                    
                    <div class="outputData"></div>
                </div>
            </div><!-- close widget-container v3 -->
        </div><!-- close row -->


        <div class="container">
            <div class="row">
            <div class="widget-container v4 col-6 col-sm-3">
                <div class="container  noMargin">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner">
                            <div class="wrapper">
                                <div class="carousel-item one active">
                                    <!-- <div class="fortnite-label player-name"><strong></strong></div> -->
                                    
                                    <div class="fortnite-data">
                                        <div class="container noMargin">
                                            <div class="row">
                                                <div class="col-sm small-widget wins">
                                                    
                                                </div>

                                                <div class="col-sm small-widget kills">
                                                    
                                                </div>

                                                <div class="col-sm small-widget kd">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <br/>
                    <button class="fetchData sr-only">Reload Fortnite Tracket</button>
                    
                    <div class="outputData"></div>
                </div>
            </div><!-- close widget-container v4 -->
            </div>
        </div>






        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            /* ------------------------------- REDDOG ------------------------------------- */
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/pc/reddog.br");
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            // curl_setopt($ch, CURLOPT_HEADER, FALSE);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            //     'TRN-Api-Key: 3ceb0925-52a2-4d08-9659-4fb3dd849bf7'
            // ));
            // $response = curl_exec($ch);
            // curl_close($ch);


            
            /* ------------------------------- ITSDUFER ------------------------------------- */
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/pc/Aiimless");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'TRN-Api-Key: 4cadc7b2-f710-4f3e-a5d7-c6cec31efa3b'
            ));
            $response = curl_exec($ch);
            curl_close($ch);



            $data = json_decode($response);
            $solo = $data->stats->p2;//solos data
            $duos = $data->stats->p10;//duos data
            $squads = $data->stats->p9;//squads data
            


            function objectToArray($d) {
                if (is_object($d)) {
                    // Gets the properties of the given object
                    // with get_object_vars function
                    $d = get_object_vars($d);
                }
                
                if (is_array($d)) {
                    /*
                    * Return array converted to object
                    * Using __FUNCTION__ (Magic constant)
                    * for recursive call
                    */
                    return array_map(__FUNCTION__, $d);
                }
                else {
                    // Return array
                    return $d;
                }
            }
            $array = objectToArray($response);
        ?>
    


        <script>
            $( document ).ready(function() {
                /*
                    TRN-Api-Key: 3ceb0925-52a2-4d08-9659-4fb3dd849bf7
                    https://api.fortnitetracker.com/v1/profile/psn/reddog.br
                */
                /*
                    TRN-Api-Key: 4cadc7b2-f710-4f3e-a5d7-c6cec31efa3b
                    https://api.fortnitetracker.com/v1/profile/psn/twitchtvitsdufer
                */
                var reloadData = function(){
                    location.reload();
                };
                $(".fetchData").on("click", function(){
                    reloadData();
                })
                window.setInterval(function(){
                    reloadData();
                }, 59000);



                var ar = <?php echo $response ?>;
                console.log(ar);



                $(".container .carousel-item.one .fortnite-label.player-name strong").append("<span class='dataGroup'><span class='label'>" + ar.epicUserHandle + "</span> </span>");

                $(".container2 .carousel-item.one .fortnite-label.player-name strong").append("<span class='dataGroup'><span class='label'>" + ar.epicUserHandle + "'s <small>Daily Stats</small></span> </span>");

                $(".container3 .carousel-item.one .fortnite-label.player-name strong").append("<span class='dataGroup' style='margin-left: 75px; margin-top: -10px'><span class='label'>" + ar.epicUserHandle + "'s <small>Daily Stats</small></span> </span>");
                


                var d = new Date();

                var month = d.getMonth()+1;
                var day = d.getDate();
                var localTime = d.getTime();
                var localOffset = d.getTimezoneOffset() * 60000;

                var utc = localTime + localOffset;

                var todaysDate = d.getFullYear() + '-' +
                    (month<10 ? '0' : '') + month + '-' +
                    (day<10 ? '0' : '') + day;
                
                

                /* ------------------- Data v3 Daily Stats - Table Data ----------------------- */
                $.cookie("fortnite-tracker-last-data-id", "");

                var killsToday = 0;
                var matchesToday = 0;
                var scoreToday = 0;
                var winsToday = 0;
                var kdToday = 0;
                var currentKD = 0;
                var dataDate = "";


                var previousKills = ar.recentMatches[0].kills;
                var previousScore = ar.recentMatches[0].score;
                var previousKD= ar.recentMatches[0].kills / ar.recentMatches[0].matches;
                var previousWins = ar.recentMatches[0].p1;
                var previousDataID = ar.recentMatches[0].id;
                var cookieDataID;


                console.log("Previous ID "+previousDataID);
                console.log("cookie ID "+cookieDataID);

                if(cookieDataID == ""){
                    $.cookie("fortnite-tracker-last-data-id", previousDataID);
                    console.log("Add default start Data ID")

                }else if(previousDataID != cookieDataID){
                    $.cookie("fortnite-tracker-last-data-id", previousDataID);
                    
                    $.cookie("fortnite-tracker-kills-total",parseInt($.cookie("fortnite-tracker-kills-total")) + parseInt(previousKills));
                    
                    console.log("Data ID dont match")

                }else if(previousDataID == cookieDataID){
                    
                    console.log("No new data!")
                }



                $.each(ar.recentMatches, function( i, value ) {
                    dataDate = value.dateCollected;
                    var dataID = value.id;
                    
                    var dataDateParsed = dataDate.split("-")[0] + "-" + dataDate.split("-")[1] + "-" + dataDate.split("-")[2] 
                    var dataDateFormated = dataDateParsed.split("T")[0];
                    console.log("TODAY : " + todaysDate + " - DATA : " + dataDateFormated);

                    // if(todaysDate == dataDateFormated){
                        currentKD = value.kills / value.matches;
                        killsToday += value.kills;
                        matchesToday += value.matches;
                        scoreToday += value.score;
                        winsToday += value.top1;
                        kdToday += currentKD;
                        

                        if(value.top1 == 1){
                            
                            $(".previous-match-table-data").append(""+
                            "<div class='container noMargin noPadding' data-time-collected="+dataDateParsed.split("T")[1]+" data-date-collected="+dataDateFormated+">"+
                                "<div class='row  data-table-row victory-top1 noMargin'>"+
                                    "<span class='col noPaddingLeft text-center'><img src='victory.png' title="+dataID+" width='120'/></span>"+
                                    "<span class='col noPaddingLeft text-center'>"+ value.kills +" </span>"+
                                    "<span class='col text-center'>" + value.top1 + "</span>"+
                                    "<span class='col text-center'>+"+ value.score +"</span>"+
                                    "<span class='col text-center'>" + currentKD.toFixed(2) + "</span>"+
                                "</div> "+
                            "</div>");
                        }else if(value.top1 >= 2){
                            $(".previous-match-table-data").append(""+
                            "<div class='container noMargin noPadding' data-time-collected="+dataDateParsed.split("T")[1]+" data-date-collected="+dataDateFormated+">"+
                                "<div class='row  data-table-row victory-top1 noMargin'>"+
                                    "<span class='col noPaddingLeft text-center'><img src='victory.png' title="+dataID+" width='120'/>x"+ value.top1 +"</span>"+
                                    "<span class='col noPaddingLeft text-center' style='padding-top: 10px;'>"+ value.kills +" </span>"+
                                    "<span class='col text-center' style='padding-top: 10px;'>" + value.matches + "</span>"+
                                    "<span class='col text-center' style='padding-top: 10px;'>+"+ value.score +"</span>"+
                                    "<span class='col text-center' style='padding-top: 10px;'>" + currentKD.toFixed(2) + "</span>"+
                                "</div> "+
                            "</div>");
                        }else{
                            $(".previous-match-table-data").append(""+
                            "<div class='container noMargin noPadding' data-time-collected="+dataDateParsed.split("T")[1]+" data-date-collected="+dataDateFormated+">"+
                                "<div class='row  data-table-row noMargin'>"+
                                    "<span class='col noPaddingLeft text-center' title="+dataID+">"+ value.top1 +" </span>"+
                                    "<span class='col noPaddingLeft text-center'>"+ value.kills +" </span>"+
                                    "<span class='col text-center'>" + value.matches + "</span>"+
                                    "<span class='col text-center'>+"+ value.score +"</span>"+
                                    "<span class='col text-center'>" + currentKD.toFixed(2) + "</span>"+
                                "</div> "+
                            "</div>");
                        }






                    // }
                });//close each

                var totalKDtoday = killsToday/matchesToday;
                var fortniteTrackerLastKills = "";

                $.cookie("fortnite-tracker-kills-last", previousKills);
                $.cookie("fortnite-tracker-wins-last", previousWins);
                $.cookie("fortnite-tracker-score-last", previousScore);
                $.cookie("fortnite-tracker-kd-last", previousKD.toFixed(2));
                
                // $.cookie("fortnite-tracker-kills-total", killsToday);
                $.cookie("fortnite-tracker-wins-total", winsToday);
                $.cookie("fortnite-tracker-score-total", scoreToday);
                $.cookie("fortnite-tracker-kd-total", totalKDtoday.toFixed(2) );
                
                // var fortniteTrackerLastKills = parseInt($.cookie("fortnite-tracker-kills-total")) + parseInt(previousKills);
                // fortniteTrackerLastKills = killsToday;

                if($.cookie("fortnite-tracker-kills-total") == null || $.cookie("fortnite-tracker-kills-total") == ""){
                    $.cookie("fortnite-tracker-kills-total", killsToday);

                    fortniteTrackerLastKills = killsToday
                }else{
                    fortniteTrackerLastKills = $.cookie("fortnite-tracker-kills-total");
                }


                /*
                if($.cookie("fortnite-tracker-kills-total") == null){
                    $.cookie("fortnite-tracker-kills-total", killsToday);

                    var fortniteTrackerLastKills = killsToday
                }else{
                    // alert(parseInt($.cookie("fortnite-tracker-kills-total")) + parseInt(previousKills))
                    if(fortniteTrackerLastKills != killsToday){

                        fortniteTrackerLastKills = parseInt($.cookie("fortnite-tracker-kills-total")) + parseInt(previousKills);
                    
                        $.cookie("fortnite-tracker-kills-total", fortniteTrackerLastKills);


                        

                        console.log(fortniteTrackerLastKills)
                        console.log(killsToday)
                    }
                }
                */

                // alert(fortniteTrackerLastKills)
                
                var fortniteTrackerLastWins = $.cookie("fortnite-tracker-wins-last");
                var fortniteTrackerLastKD = $.cookie("fortnite-tracker-kd-last");
                var fortniteTrackerLastScore = $.cookie("fortnite-tracker-score-last");
                


                





                /* --------------- Data v3 Total Daily Stats - Table Label --------------- */
                $(".widget-container.v3 .container3 .carousel-item.one .fortnite-data").html(""+
                "<div class='container noMargin '>"+
                    "<div class='row'>"+
                        "<span class='col dataGroup text-center noPaddingLeft'>"+
                            "<span class='label'>"+
                                "<strong>Wins </strong> " + winsToday + 
                            "</span> "+
                        "</span> "+
                        "<span class='col dataGroup text-center noPaddingLeft'>"+
                            "<span class='label'>"+
                                "<strong>Kills </strong> " + killsToday + 
                            "</span> "+
                        "</span> "+
                        "<span class='col dataGroup text-center'>"+
                            "<span class='label'>"+
                                "<strong>Matches </strong>  " + matchesToday + 
                            " </span> "+
                        "</span> "+
                        "<span class='col dataGroup text-center'>"+
                            "<span class='label'>"+
                                "<strong>Score </strong>  +" + scoreToday + 
                            " </span> "+
                        "</span> "+
                        "<span class='col dataGroup text-center'>"+
                            "<span class='label'>"+
                                "<strong> K/D : </strong>  " + totalKDtoday.toFixed(2)  + 
                            " </span> "+
                        "</span>"+
                    "</div>"+
                "</div>");

                    

                /* --------------- Data v3 - Lifetime Total Game Data --------------- */   
                $(".widget-container.v3 .container .carousel .fortnite-data-total-games").html(""+
                "<div class='container noMargin  '>"+
                    "<div class='row'>"+
                        "<span class='col dataGroup text-center noPaddingLeft'> Lifetime : " + ar.lifeTimeStats[8].value + "</span>" +
                        "<span class='col dataGroup text-center noPaddingLeft'> Lifetime : " + ar.lifeTimeStats[7].value +"</span> " + 
                        "<span class='col dataGroup text-center'> Lifetime : " + ar.lifeTimeStats[10].value + "</span>" +
                        "<span class='col dataGroup text-center'> Lifetime : " + ar.lifeTimeStats[6].value + "</span>"+
                        "<span class='col dataGroup text-center'> Lifetime : " + ar.lifeTimeStats[11].value + "</span>"+
                    "</div>"+
                "</div>");








                /* --------------- Data v1 Total Daily Stats - Table Label  --------------- */
                $(".widget-container.v1 .container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Wins </strong> " + winsToday + "</span> </span>");
                $(".widget-container.v1 .container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Kills </strong> " + fortniteTrackerLastKills + "</span> </span>");
                $(".widget-container.v1 .container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Matches </strong>  " + matchesToday + " </span> </span>");
                $(".widget-container.v1 .container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Score </strong>  +" + scoreToday + " </span> </span>");
                $(".widget-container.v1 .container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>K/D</strong>  " + totalKDtoday.toFixed(2) + " </span> </span>");


                /* --------------- Data v1 - Lifetime Total Game Data --------------- */   
                $(".widget-container.v1 .container .carousel .fortnite-data-total-games").html(""+
                "<div class='row'>"+
                    "<span class='col-lg-12 dataGroup noPaddingLeft'> Lifetime Kills : " + ar.lifeTimeStats[10].value +"</span> " + 
                    "<span class='col-lg-12 dataGroup'> Lifetime Matches : " + ar.lifeTimeStats[7].value + "</span>" +
                    "<span class='col-lg-12 dataGroup'> Lifetime Wins : " + ar.lifeTimeStats[8].value + "</span>" +
                    "<span class='col-lg-12 dataGroup'> Lifetime K/D : " + ar.lifeTimeStats[11].value + "</span>"+
                "</div>");








                /* --------------- Data v2 Total Daily Stats - Table Label  --------------- */
                $(".widget-container.v2 .container2 .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Wins </strong> " + winsToday + "</span> </span>");
                $(".widget-container.v2 .container2 .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Kills </strong> " + fortniteTrackerLastKills + "</span> </span>");
                $(".widget-container.v2 .container2 .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Matches </strong>  " + matchesToday + " </span> </span>");
                $(".widget-container.v2 .container2 .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>Score </strong> " + scoreToday + "</span> </span>");
                $(".widget-container.v2 .container2 .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'><strong>K/D </strong>  " + totalKDtoday.toFixed(2) + " </span> </span>");


                /* --------------- Data v2 - Lifetime Total Game Data --------------- */   
                $(".widget-container.v2 .container2 .carousel .fortnite-data-total-games").html(""+
                "<div class=''>"+
                    "<span class='col-lg dataGroup noPaddingLeft'> Lifetime Kills : " + ar.lifeTimeStats[10].value +"</span> " + 
                    "<span class='col-lg dataGroup'> Lifetime Matches : " + ar.lifeTimeStats[7].value + "</span>" +
                    "<span class='col-lg dataGroup'> Lifetime Wins : " + ar.lifeTimeStats[8].value + "</span>" +
                    "<span class='col-lg dataGroup'> Lifetime K/D : " + ar.lifeTimeStats[11].value + "</span>"+
                "</div>");











                /* --------------- Data v4 Total Daily Stats - Small Widget  --------------- */
                $(".widget-container.v4 .container .carousel-item .fortnite-data .small-widget.wins").html("<span class='dataGroup'><span class='label'><strong>Wins </strong> <br/>" + winsToday + "</span> </span>");
                $(".widget-container.v4 .container .carousel-item .fortnite-data .small-widget.kills").html("<span class='dataGroup'><span class='label'><strong>Kills </strong> <br/>" + fortniteTrackerLastKills + "</span> </span>");
                $(".widget-container.v4 .container .carousel-item .fortnite-data .small-widget.kd").html("<span class='dataGroup'><span class='label'><strong>K/D </strong> <br/>" + totalKDtoday.toFixed(2) + "</span> </span>");













                var animatethis = function(targetElement, speed){
                    $(targetElement).delay("5000").animate({ marginTop: "-=60px"},
                    {
                        duration: speed,
                        complete: function ()
                        {
                            targetElement.delay("10000").animate({ marginTop: "+=60px" },
                            {
                                duration: speed,
                                complete: function ()
                                {
                                    animatethis(targetElement, speed);
                                }
                            });
                        }
                    });
                };
            
                animatethis($('.moving'), 5000);

            });
        </script>
    </body>
</html>