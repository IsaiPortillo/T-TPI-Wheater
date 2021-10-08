<?php
if ($status == "yes") {
?><div class='col-12 col-lg-4  _h-100 _side-bar-container'>
        <div id="bg" class=<?php
                            $weather = $result['weather'][0]['main'];
                            if ($weather == "Clouds") {
                                echo "_bg-primary-light ";
                            } else if ($weather == "Rain") {
                                echo "_bg-primary";
                            } else if ($weather == "Clear ") {
                                echo "_bg-secondary-light ";
                            } else {
                                echo "_bg-light ";
                            }
                            ?>>
            <article class="weather-container">
                <div class="date">
                    <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon'] ?>.png" class="date-icon" />
                    <span class="date-text mx-3 font-weight-bold text-uppercase"><?php echo date('d M', $result['dt']) ?></span>
                </div>
                <div class="state my-0  text-capitalize"><?php echo $result['weather'][0]['description'] ?></div>
                <span class="temp">
                    <?php echo round($result['main']['temp']) ?> <span class="small-text">
                        °C
                    </span>
                </span>
                <div class="city "><?php echo $result['name'] ?>, <?php echo $result['sys']['country'] ?></div>






            </article>
        </div>

    <?php } ?>
    </div>