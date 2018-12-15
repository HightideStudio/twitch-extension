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

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->

        <!-- https://write.corbpie.com/how-to-use-the-fortnite-tracker-api-with-php/ -->
        <!-- https://docs.google.com/document/d/1p3C7hV1WOo4figK2CNzSG_muAuszUIJ-hzzrv2toqrE/edit -->
        <!-- https://fortnitetracker.com/site-api -->
    </head>

    <style>
        /* ---------------------------- Version 1 ---------------------------- */
        .widget-container.v1 .container{
            margin-top: 100px;
        }
        .widget-container.v1 .carousel{
            -webkit-box-shadow: 0 0 20px 0 #000;
            box-shadow: 0 0 20px 0 #000;  
            width: 150px;
            height: 310px;
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
            background-position: 15px 10px;
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
        }
        .widget-container.v1 .mainLogo{
            text-align: center;
            z-index: 999;
            margin-top: 5px;
        }
        /* ---------------------------- Version 1 ---------------------------- */




        
        /* ---------------------------- Version 2 ---------------------------- */
        .widget-container.v2{
            margin-top: 100px;
            position: relative;
        }

        .widget-container.v2 .carousel{
            /* -webkit-box-shadow: 0 0 20px 0 #000;
            box-shadow: 0 0 20px 0 #000;   */
            width: 750px;
            height: 90px;
            padding-top: 5px;
            background-color: #2D2D2D ;
            padding-left: 120px;
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
            background-position: 15px 5px;
        }
        .widget-container.v2 .carousel-item{
            height: 100%;
        }
        .widget-container.v2 .fortnite-data span{
            font-size: 14px;
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
    </style>



    <body>
        <div class="widget-container v1">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                    <div class="carousel-inner">
                        <div class="wrapper">
                            <div class="carousel-item one active">
                                <div class="fortnite-label"><strong>Solo</strong></div>
                                
                                <div class="fortnite-data"></div>
                            </div>
                            
                            <div class="carousel-item two">
                                <div class="fortnite-label"><strong>Duo</strong></div>
                                
                                <div class="fortnite-data"></div>
                            </div>
                            
                            <div class="carousel-item third">
                                <div class="fortnite-label"><strong>Squad</strong></div>
                                
                                <div class="fortnite-data"></div>
                            </div>

                            <div class="mainLogo">
                                <div class="fortnite-data-total-games">Total Games: <span></span></div>

                                <img src="/twitch-extension/fortnite-tracker/logo.png" height="100"/>
                            </div>
                        </div>
                    </div>
                </div>



                <br/>
                <button class="fetchData sr-only">Reload Fortnite Tracket</button>
                
                <div class="outputData"></div>
            </div>
        </div>




        
        <div class="widget-container v2">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide vertical" data-ride="carousel" data-interval="10000">
                    <div class="carousel-inner">
                        <div class="wrapper">
                            <div class="carousel-item one active">
                                <div class="fortnite-label"><strong>Solo</strong></div>
                                
                                <div class="fortnite-data"></div>
                            </div>
                            
                            <div class="carousel-item two">
                                <div class="fortnite-label"><strong>Duo</strong></div>
                                
                                <div class="fortnite-data"></div>
                            </div>
                            
                            <div class="carousel-item third">
                                <div class="fortnite-label"><strong>Squad</strong></div>
                                
                                <div class="fortnite-data"></div>
                            </div>

                            <div class="fortnite-data-total-games">Total Games: <span></span></div>
                            <div class="mainLogo moving">
                                <img src="/twitch-extension/fortnite-tracker/logo.png" height="80"/>
                            </div>
                        </div>
                    </div>
                </div>



                <br/>
                <button class="fetchData sr-only">Reload Fortnite Tracket</button>
                
                <div class="outputData"></div>
            </div>
        </div>






        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/pc/reddog.br");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'TRN-Api-Key: 3ceb0925-52a2-4d08-9659-4fb3dd849bf7'
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
                    https://api.fortnitetracker.com/v1/profile/psn/reddog_br_
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
                


                /* --------------- Solo Data --------------- */
                $(".container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p2.top1.label + "</span> - <span class='value'>" + ar.stats.p2.top1.valueInt + "</span> </span>");
                $(".container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p2.kd.label + "</span> - <span class='value'>" + ar.stats.p2.kd.displayValue + "</span> </span>");
                $(".container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p2.kills.label + "</span> - <span class='value'>" + ar.stats.p2.kills.displayValue + "</span> </span>");
                $(".container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p2.winRatio.label + "</span> - <span class='value'>" + ar.stats.p2.winRatio.displayValue + "</span> </span>");
                $(".container .carousel-item.one .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p2.matches.label + "</span> - <span class='value'>" + ar.stats.p2.matches.valueInt + "</span> </span>");
                


                /* --------------- Duo Data --------------- */
                $(".container .carousel-item.two .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p10.top1.label + "</span> - <span class='value'>" + ar.stats.p10.top1.valueInt + "</span> </span>");
                $(".container .carousel-item.two .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p10.kd.label + "</span> - <span class='value'>" +  ar.stats.p10.kd.displayValue + "</span> </span>");
                $(".container .carousel-item.two .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p10.kills.label + "</span> - <span class='value'>" + ar.stats.p10.kills.displayValue + "</span> </span>");
                $(".container .carousel-item.two .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p10.winRatio.label + "</span> - <span class='value'>" + ar.stats.p10.winRatio.displayValue + "</span> </span>");
                $(".container .carousel-item.two .fortnite-data").append("<span class='dataGroup'><span class='label'>" + ar.stats.p10.matches.label + "</span> - <span class='value'>" + ar.stats.p10.matches.valueInt + "</span> </span>");
                


                /* --------------- Squad Data --------------- */
                $(".container .carousel-item.third .fortnite-data").append("<span class='dataGroup'><span>" + ar.stats.p9.top1.label + "</span> - " + ar.stats.p9.top1.valueInt + "</span> </span>");
                $(".container .carousel-item.third .fortnite-data").append("<span class='dataGroup'><span>" + ar.stats.p9.kd.label + "</span> - " +  ar.stats.p9.kd.displayValue + "</span> </span>");
                $(".container .carousel-item.third .fortnite-data").append("<span class='dataGroup'><span>" + ar.stats.p9.kills.label + "</span> - " + ar.stats.p9.kills.displayValue + "</span> </span>");
                $(".container .carousel-item.third .fortnite-data").append("<span class='dataGroup'><span>" + ar.stats.p9.winRatio.label + "</span> - " + ar.stats.p9.winRatio.displayValue + "</span> </span>");
                $(".container .carousel-item.third .fortnite-data").append("<span class='dataGroup'><span>" + ar.stats.p9.matches.label + "</span> - " + ar.stats.p9.matches.valueInt + "</span> </span>");



                /* --------------- Overall Game Data --------------- */   
                $(".widget-container.v1 .container .carousel .fortnite-data-total-games").html("Total Matches - " + ar.lifeTimeStats[7].value);

                
                $(".widget-container.v2 .container .carousel .fortnite-data-total-games").html("Total Matches - " + ar.lifeTimeStats[7].value + " 	&nbsp;	&nbsp; &bull; &nbsp;	&nbsp; " + "Total Kills - " + ar.lifeTimeStats[10].value + " 	&nbsp;	&nbsp; &bull; &nbsp;	&nbsp; " + "Total Wins - " + ar.lifeTimeStats[8].value + " ");






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