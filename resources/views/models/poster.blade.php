<?php error_reporting(0); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0&appId=262632362191543&autoLogAppEvents=1"
    nonce="3oklABjF"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="./utils/css/poster.css" />
<link rel="stylesheet" href="/css/poster.css" />
<section class="section wow fadeInUp p-4" id="forms" data-wow-duration=".5s"
    style="margin-right: 5px;margin-bottom: 2px;padding:2px;margin-left: 5px;">
    <div class="container">
        <div class="row">
            <div class="maincontainerposter">
                <div class="col-lg-8 col-md-8">
                    <article class="row mb-5">
                        <div class="col-12">
                            <div class="col-12 mx-auto">
                                <div class="container">
                                    <div class="row mb-12">
                                        <div class="col-lg-12"><br>
                                            <div class="col-lg-8 text-center">
                                                <div class="search-intheposter">
                                                    <select id="table-filter">
                                                        <option value=""><u>Seleccionar los temas</u>
                                                            <hr>
                                                        </option>
                                                        <option>Glaciares</option>
                                                        <option>Informática</option>
                                                        <option>TEK</option>
                                                        <option>Meteorologia</option>
                                                        <option>Ecosistemas</option>
                                                        <option>Hidrologia</option>
                                                    </select>
                                                    <section class="postersupremos table-responsive">
                                                        <table id="example" class="display nowrap table-responsive"
                                                            width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="tematicacolum">ID</th>
                                                                    <th>Poster</th>
                                                                    <th class="tematicacolum">Tematica</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                        $url_api_poster = "https://script.google.com/macros/s/AKfycbwu40bVhkq9tTW7aWtupGomg1pdDLD4RFSht1EscFQMGRXaTnOAD0rQ4QMq1dgFG5mV1A/exec";
                                                        $inputJSONposters = file_get_contents($url_api_poster);
                                                        $dataarrayposter = json_decode($inputJSONposters, TRUE);
                                                        $datospreparadosposter = $dataarrayposter["user"];
                                                        foreach(array_reverse($datospreparadosposter) as $datasetposter){
                                                            ?>
                                                                <tr>
                                                                    <td class="tematicacolum"><?php echo $datasetposter['id']; ?></td>
                                                                    <td>
                                                                        <div
                                                                            class="card mb-3 posters col-md-12 shadow-lg p-3 mb-5 rounded">
                                                                            <div class="row no-gutters">
                                                                                <?php if($datasetposter["estadourl"] == "no"){
                                                                            ?>
                                                                                <div class="col-md-4"></div>
                                                                                <?php

                                                                    }else{                                                                                                                                     ?>

                                                                                <?php if ($datasetposter["estadourl"] == "no") {
                                                                                                        ?>
                                                                                <div class="col-md-4"
                                                                                    style="margin: 0px;">
                                                                                    <img class="portadaimg"
                                                                                        src="https://drive.google.com/thumbnail?id=<?php echo $datasetposter['idurl']; ?>"
                                                                                        title="No se encontro Archivo." />
                                                                                </div>
                                                                                <?php
                                                                            }else
                                                                            {
                                                                                if($datasetposter["estadourl"] == "si"){
                                                                                ?>
                                                                                <a
                                                                                    href="/posters?ID=<?php echo base64_encode($datasetposter['id']); ?>">
                                                                                    <div class="col-md-4"
                                                                                        style="margin: 0px;">

                                                                                        <img class="portadaimg"
                                                                                            src="https://drive.google.com/thumbnail?id=<?php echo $datasetposter['idurl']; ?>"
                                                                                            title="CLick para ver el Poster Completo" />
                                                                                    </div>
                                                                                </a>
                                                                                <?php
                                                                             }
                                                                            }

                                                                            ?>
                                                                                <?php
                                                                        }
                                                                        ?>
                                                                                <div class="col-md-8">
                                                                                    <div class="card-body">
                                                                                        <?php
                                                                                if ($datasetposter["estadourl"] == "no") {
                                                                                     ?>
                                                                                        <h5
                                                                                            class="card-title titulo-posteres ">
                                                                                            <?php echo $datasetposter['title']; ?>
                                                                                        </h5>
                                                                                        <?php
                                                                                }else{
                                                                                    if ($datasetposter["estadourl"] == "si") { ?>
                                                                                        <a
                                                                                            href="/posters?ID=<?php echo base64_encode($datasetposter['id']); ?>">
                                                                                            <h5
                                                                                                class="card-title titulo-posteres ">
                                                                                                <?php echo $datasetposter['title']; ?>
                                                                                            </h5>
                                                                                        </a>
                                                                                        <?php
                                                                                }
                                                                            }
                                                                                ?>
                                                                                        <div
                                                                                            class="projcard-bar projcard-blue">
                                                                                        </div>
                                                                                        <div class="projcard-tagbox card-text"
                                                                                            style="color: #fff;">
                                                                                            <p class="projcard-tag"
                                                                                                style="color: #fff;">
                                                                                                <?php echo $datasetposter['tematica']; ?></p>
                                                                                            <br>
                                                                                        </div>

                                                                                        <p class="card-text f-l"
                                                                                            style="text-align: justify;">
                                                                                            <strong
                                                                                                class="autores">Autores:</strong>
                                                                                            <?php echo $datasetposter['authors']; ?>
                                                                                        </p>
                                                                                        <p class="card-text f-l"
                                                                                            style="text-align: justify;">
                                                                                            <strong
                                                                                                class="expositores">Expositor:</strong>
                                                                                            <?php echo $datasetposter['expositor']; ?>
                                                                                        </p>
                                                                                        <p class="card-text f-l"
                                                                                            style="text-align: justify;">
                                                                                            <strong
                                                                                                class="expositores">Palabras
                                                                                                Claves:</strong>
                                                                                            <?php echo $datasetposter['key1'] . ',' . $datasetposter['key2'] . ',' . $datasetposter['key3']; ?>
                                                                                        </p>

                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-sm-12 col-md-12 form-group">
                                                                                                <div
                                                                                                    class="col-sm-9 col-md-9 form-group">
                                                                                                    <div
                                                                                                        class="row text-center urlshare">
                                                                                                        <?php $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                                                                                        <a href="https://wa.me/?text=<?php echo 'https://inaigem.gob.pe/simposio/posters?ID=' . base64_encode($datasetposter['id']); ?>"
                                                                                                            data-action="share/whatsapp/share"
                                                                                                            target="_blank"
                                                                                                            title="Comparte con tus amigos de Whatsapp"
                                                                                                            class="fa whatsaap"><i
                                                                                                                class="fa-brands fa-whatsapp"></i></a>
                                                                                                        <?php if ($datasetposter["estadovideo"] == "no") {
                                                                                                    } else {
                                                                                                        if ($datasetposter["estadovideo"] == "si") {
                                                                                                    ?>
                                                                                                        <a href="<?php echo $datasetposter['urlyoutube']; ?>"
                                                                                                            data-action="share/whatsapp/share"
                                                                                                            target="_blank"
                                                                                                            title="Mira la presentación virtual."
                                                                                                            class="fa youtube">
                                                                                                            <i
                                                                                                                class="fab fa-youtube"></i></a>
                                                                                                        <?php
                                                                                                        }
                                                                                                    }  ?>
                                                                                                        <a class=" fa shared"
                                                                                                            href="mailto:<?php echo $datasetposter['information']; ?>"
                                                                                                            title="Enviale un correo al expositor.">
                                                                                                            <i
                                                                                                                class="fas fa-envelope"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <link rel="stylesheet"
                                                                                                    href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" />
                                                                                                <?php if($datasetposter["estadourl"] == "no"){?>
                                                                                                <?php
                                                                                    }
                                                                                    else{
                                                                                        ?>
                                                                                                <div
                                                                                                    class="col-sm-3 col-md-3 form-group">
                                                                                                    <a href="/posters?ID=<?php echo base64_encode($datasetposter['id']); ?>"
                                                                                                        class="text-center"
                                                                                                        title="Click para ver el Poster">
                                                                                                        <div
                                                                                                            class="row text-center urlshare2 ">
                                                                                                            <i
                                                                                                                class="fa-solid fa-link"></i>

                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <?php
                                                                                 }
                                                                                 ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                    </td>
                                                                    <td class="tematicacolum"><?php echo $datasetposter['tematica']; ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                        <script
                                                            src='https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js'>
                                                        </script>
                                                        <script
                                                            src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1664812762/code/poster-datatables/buscadorposterdatatables234755-3494345734343433_dnlqeo.js">
                                                        </script>
                                                    </section>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <aside>
                    <div class="widget wow fadeInLeft p-4" data-wow-duration=".5s"><br>
                        <h5 class="widget-title"><span>Alertas del MONFU</span>
                        </h5>
                        <hr class="sep-2" />
                        <div class="card-carousel">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-innerx" role="listbox">
                                    <?php
                                        $url_alert = "https://script.google.com/macros/s/AKfycbxJo-Rrf0IR9Ue0Xzz69RThnY_ao2bQdM71JcOs43zhDGA4UW5oHf_e9v1zdTyF4P7m/exec";
                                                        $inputJSONalert = file_get_contents($url_alert);
                                                        $dataalerts = json_decode($inputJSONalert, TRUE);
                                                        $datoalerts = $dataalerts["user"];
                                                        foreach(array_reverse($datoalerts) as $dataprocessalert){
                                        ?>
                                    <div class="cardalerts">
                                        <div class="item active">
                                            <div class="divimgnews">
                                                <img class="imgnews img-responsive" src="<?php echo $dataprocessalert['foto']; ?>"
                                                    alt="">
                                            </div>
                                            <div class="contenidonews">
                                                <h5 class="titlenews"><?php echo $dataprocessalert['titulo']; ?></h5>
                                                <p class="subcard-carousel"> <?php echo $dataprocessalert['descripcion']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <script src="https://afernandezgarcia.com/codepen/carousel/js/touchswipe.min.js"></script>
                        <script src="https://afernandezgarcia.com/codepen/carousel/js/bootstrap.js"></script>

                        <script>
                            $(document).ready(function() {

                                //Enable swiping...
                                $(".carousel-inner").swipe({
                                    //Generic swipe handler for all directions
                                    swipeLeft: function(event, direction, distance, duration, fingerCount) {
                                        $(this).parent().carousel('next');
                                    },
                                    swipeRight: function() {
                                        $(this).parent().carousel('prev');
                                    },
                                    //Default is 75px, set to 0 for demo so any distance triggers swipe
                                    threshold: 0
                                });
                            });
                        </script>
                    </div>
                    <div class="widget wow fadeInLeft p-4" data-wow-duration=".5s">
                        <h5 class="widget-title">
                            <span>El clima en esta
                                <?php
                                date_default_timezone_set('America/Lima');
                                $hora = date('H');
                                if ($hora < 13) {
                                    echo 'mañana';
                                } else {
                                    if ($hora >= 13 && $hora < 18) {
                                        echo 'tarde';
                                    } else {
                                        echo 'noche';
                                    }
                                } ?>
                            </span>
                        </h5>
                        <hr class="sep-2" />
                        <script>
                            $(document).ready(function() {
                                navigator.geolocation.getCurrentPosition(success, error);

                                function success(pos) {
                                    var lat = pos.coords.latitude;
                                    var long = pos.coords.longitude;
                                    weather(lat, long);
                                }

                                function error() {
                                    console.log("There was an error");
                                }

                                function weather(lat, long) {
                                    var URL = `https://fcc-weather-api.glitch.me/api/current?lat=${lat}&lon=${long}`;
                                    $.getJSON(URL, function(data) {
                                        display(data);
                                    });
                                }

                                function display(data) {
                                    var city = data.name.toUpperCase();
                                    var temp =
                                        Math.round(data.main.temp_max) +
                                        "&deg; C | " +
                                        Math.round(Math.round(data.main.temp_max) * 1.8 + 32) +
                                        "&deg; F";
                                    var desc = data.weather[0].description;
                                    var font_color;
                                    var bg_color;
                                    if (Math.round(data.main.temp_max) > 25) {
                                        font_color = "#d36326";
                                        bg_color = "#f3f5d2";
                                    } else {
                                        font_color = "#44c3de";
                                        bg_color = "#eff3f9";
                                    }
                                    if (data.weather[0].main == "Sunny" || data.weather[0].main == "sunny") {
                                        $(".weathercon").html(
                                            "<i class='fas fa-sun' style='color: #ffb703;'></i>"
                                        );
                                    } else {
                                        $(".weathercon").html(
                                            "<i class='fas fa-cloud' style='color: #f4a261;'></i>"
                                        );
                                    }
                                    $(".location").html(city);
                                    $(".temp").html(temp);
                                    $(".box").css("background", bg_color);
                                    $(".location").css("color", font_color);
                                    $(".temp").css("color", font_color);
                                }
                            });
                        </script>
                        <!-- partial:index.partial.html -->
                        <div class="box text-center">
                            <div class="card-block box">
                                <div class="weathercon"></div>
                                <div class="diagonalpath card xld">
                                    <h4 class="card-title">
                                        <h2 class="location">Active su Ubicación </h2>
                                    </h4>
                                    <h6 class="temp card-subtitle"></h6>
                                    <p class="date card-link text-center"></p>
                                </div>
                            </div>
                        </div>
                        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
                    </div>
                    <div class="widget wow fadeInLeft p-4" data-wow-duration=".5s">
                        <h5 class="widget-title"><span>Facebook</span></h5>
                        <hr class="sep-2" />
                        <ul class="list-unstyled widget-list">
                            <li class="media widget-post align-items-center">
                                <div class="media-body">
                                    <div class="postfacebook">
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous"
                                            src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0&appId=262632362191543&autoLogAppEvents=1"
                                            nonce="ui9vxEux"></script>
                                        <div class="fb-page" data-href="https://www.facebook.com/inaigemperu"
                                            data-tabs="timeline, events, messages" data-width="" data-height=""
                                            data-small-header="false" data-adapt-container-width="true"
                                            data-hide-cover="false" data-show-facepile="true">
                                            <blockquote cite="https://www.facebook.com/inaigemperu"
                                                class="fb-xfbml-parse-ignore"><a
                                                    href="https://www.facebook.com/inaigemperu">Instituto Nacional de
                                                    Investigación en Glaciares y Ecosistemas de Montaña</a></blockquote>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
