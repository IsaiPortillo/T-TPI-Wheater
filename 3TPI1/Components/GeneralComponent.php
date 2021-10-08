<?php
?>
<div class="col-12 col-lg-8" style="">
    <form method="post" class="m-2">
        <input type="text" class="text _input" placeholder="Ingresar Ciudad" name="city" value="<?php echo $city ?>" />
        <input type="submit" value="Enviar" class="submit _btn" name="submit" />
        <?php echo $msg ?>
    </form>
    <div class="" style="overflow: auto; max-height:100vh">
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data2->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data2->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data2->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data2->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data3->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data3->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data3->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data3->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data4->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data4->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data4->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data4->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data5->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data5->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data5->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data5->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data6->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data6->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data6->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data6->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data7->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data7->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data7->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data7->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data8->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data8->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data8->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data8->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data9->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data9->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data9->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data9->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data10->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data10->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data10->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data10->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data11->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data11->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data11->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data11->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data12->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data12->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data12->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data12->weather[0]->description); ?></span>
    </div>
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data13->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data13->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data13->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data13->weather[0]->description); ?></span>
    </div>
    
    <hr>
    <div class="_container-flex p-1 py-2">
        <span class=""><?php echo $data14->name; ?></span>
        <div><img src="http://openweathermap.org/img/w/<?php echo $data14->weather[0]->icon; ?>.png" class="weather-icon " />
            <span class="letras2"><?php echo $data14->main->temp; ?>°C</span>
        </div>
        <span><?php echo ucwords($data14->weather[0]->description); ?></span>
    </div>
    </div>
</div>