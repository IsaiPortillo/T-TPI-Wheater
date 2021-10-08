<?php
if ($status == "yes") {
?><div class='col-12 col-lg-4  _h-100 _side-bar-container'>
        <div id="bg" class=<?php
                            $weather = $result['weather'][0]['main'];
                            if ($weather == "Clouds") {
                                echo "_bg-secondary-light ";
                            } else if ($weather == "Rain") {
                                echo "_bg-secondary";
                            } else if ($weather == "Clear ") {
                                echo "_bg-primary ";
                            }
                            ?>>
            <article class="weather-container">
                <div class="date">
                    <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon'] ?>.png" class="date-icon" />
                    <span class="date-text mx-3 font-weight-bold text-uppercase"><?php echo date('d M', $result['dt']) ?></span>

                </div>
                <span class="temp">
                    <?php echo round($result['main']['temp']) ?> <span class="small-text">
                    °C
                    </span>
                </span>





                <div class="weatherInfo">
                    <div class="temperature">
                        <span><?php echo round($result['main']['temp']) ?> C°</span>
                    </div>
                    <div class="description mr45">
                        <div class="weatherCondition"><?php echo $result['weather'][0]['main'] ?></div>
                        <div class="place"><?php echo $result['name'] ?>, <?php echo $result['sys']['country'] ?></div>
                    </div>
                    <div class="description">
                        <div class="weatherCondition">Wind</div>
                        <div class="place"><?php echo $result['wind']['speed'] ?> M/H</div>
                    </div>
                </div>
                <div class="date">
                    <?php echo date('d M', $result['dt']) ?>
                </div>
            </article>
        </div>

    <?php } ?>
    </div>