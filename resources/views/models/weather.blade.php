<?php





$city    = 'Arequipa';
$country = 'Pe';
$api_key_weather="c87d088aaede77aec1bc18bf87f51c4f";
$idioma="es";

$url     = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.','.$country.'&lang='.$idioma.'&APPID='.$api_key_weather;
$json    = file_get_contents( $url );
$data    = json_decode( $json, true );
$clima = $data['weather'];
$main= $data['main'];
$sys=$data['sys'];


 foreach ($clima as $country) {
                                    $iconoweather = $country['icon'] . ".png";
                                    $description = $country['description'];
                                    $url_img =  'http://openweathermap.org/img/w/' . $iconoweather . '';
                                ?>

                                <?php
                                date_default_timezone_set('America/Lima');
                                $hora = date('H');
                                if ($hora < 13) {
                                    ?>
                                <div class="blog-card spring-fever" style="background: url(https://res.cloudinary.com/dicmh7cfa/image/upload/v1665667898/logos%20monfu%202022/estadia%20clima/4_msuzoc.png) no-repeat;">
                                    <div class="title-content">
                                      <h3 class="temperaturasd"> <?php echo round($data['main']['temp'] - 273.15) . " °C" ?></h3>

                                      <div class="intro"><?php echo  $data['name'] . ",&nbsp" . $sys['country'];
                                        ?> <img class="iconx" src="<?php echo $url_img ?>" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="card-info">
                                        <?php echo  $data['name'] . "&nbsp tiene" ?> <?php
                                        date_default_timezone_set('America/lima');
                                        $DateAndTime = date('m-d-Y h:i:s a', time());
                                        foreach ($clima as $country) echo $country['description'] ; ?>
                                    </div>
                                    <div class="utility-info">
                                      <ul class="utility-list">
                                        <li class="date"><?php echo $DateAndTime?></li>
                                      </ul>
                                    </div>
                                    <div class="gradient-overlay"></div>
                                    <div class="color-overlay"></div>
                                  </div>
                                    <?php
                                } else {
                                    if ($hora >= 13 && $hora < 18) {
                                        ?>
                                <div class="blog-card spring-fever" style="background: url(https://res.cloudinary.com/dicmh7cfa/image/upload/v1665667898/logos%20monfu%202022/estadia%20clima/3_techlj.png) no-repeat;">
                                    <div class="title-content">
                                        <h3> <?php echo round($data['main']['temp'] - 273.15) . " °C" ?></h3>

                                        <div class="intro"><?php echo  $data['name'] . ",&nbsp" . $sys['country'];
                                          ?> <img class="iconx" src="<?php echo $url_img ?>" class="img-fluid" alt=""></div>
                                      </div>
                                      <div class="card-info">
                                          <?php echo  $data['name'] . "&nbsp tiene" ?> <?php
                                          date_default_timezone_set('America/lima');
                                          $DateAndTime = date('m-d-Y h:i:s a', time());
                                          foreach ($clima as $country) echo $country['description'] ; ?>
                                      </div>
                                      <div class="utility-info">
                                        <ul class="utility-list">
                                          <li class="date"><?php echo $DateAndTime?></li>
                                        </ul>
                                      </div>
                                      <div class="gradient-overlay"></div>
                                      <div class="color-overlay"></div>
                                  </div>
                                    <?php
                                    } else {
                                        ?>
                                <div class="blog-card spring-fever" style="background: url(https://res.cloudinary.com/dicmh7cfa/image/upload/v1665667898/logos%20monfu%202022/estadia%20clima/2_pvngrg.png) no-repeat;">
                                    <div class="title-content">
                                        <h3> <?php echo round($data['main']['temp'] - 273.15) . " °C" ?></h3>

                                        <div class="intro"><?php echo  $data['name'] . ",&nbsp" . $sys['country'];
                                          ?> <img class="iconx" src="<?php echo $url_img ?>" class="img-fluid" alt=""></div>
                                      </div>
                                      <div class="card-info">
                                          <?php echo  $data['name'] . "&nbsp tiene" ?> <?php
                                          date_default_timezone_set('America/lima');
                                          $DateAndTime = date('m-d-Y h:i:s a', time());
                                          foreach ($clima as $country) echo $country['description'] ; ?>
                                      </div>
                                      <div class="utility-info">
                                        <ul class="utility-list">
                                          <li class="date"><?php echo $DateAndTime?></li>
                                        </ul>
                                      </div>
                                      <div class="gradient-overlay"></div>
                                      <div class="color-overlay"></div>
                                  </div>
                                    <?php
                                    }
                                } ?>


               <?php
                                }



// var_dump($data );



?>
