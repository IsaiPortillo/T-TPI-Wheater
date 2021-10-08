<?php
?>
<div class="col-12 col-lg-8">
    <form method="post" >
        <input type="text" class="text" placeholder="Ingresar Nombre de la Ciudad" name="city" value="<?php echo $city ?>" />
        <input type="submit" value="Enviar" class="submit" name="submit" />
        <?php echo $msg ?>
    </form>
    <div>
        <div>
        <span class=""><?php echo $data->name; ?></span>
        <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon "/>
        <span class="letras2"><?php echo $data->main->temp; ?>°C</span>
        <span><?php echo ucwords($data->weather[0]->description); ?></span>
        </div>
        

    </div>

</div>