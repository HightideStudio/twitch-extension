<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Twitch Prime</title>
        <meta name="description" content="Twitch Prime">
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
        .widget-container{
        }
    </style>



    <body>
        <div class="widget-container v1">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="8500">
                    <div class="carousel-inner">
                        <div class="wrapper">
                            <div class="carousel-item active">
                                <div class="fortnite-label"><strong></strong></div>
                                
                                <div class="fortnite-data">
                                    <img src="twitch-prime-logo.png" width="500"/>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="fortnite-label"><strong></strong></div>
                                
                                <div class="fortnite-data"></div>
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