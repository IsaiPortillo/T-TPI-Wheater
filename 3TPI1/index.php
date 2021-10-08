<?PHP include "api.php"?>
<?PHP include "api2.php"?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Pronostico del Tiempo usando OpenWeatherMap con PHP</title>
</head>
<body class="bg">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-8 container">
            <div class="form container-fluid">
                <form style="width:100%;" method="post">
                    <input type="text" class="text" placeholder="Ingresar Nombre de la Ciudad" name="city" value="<?php //echo $city?>"/>
                    <input type="submit" value="Enviar" class="submit" name="submit"/>
                    <?php echo $msg?>
                </form>
                <div class="container"> 
                    <div class=""><?php echo $data->name; ?></div>
                    <div class="container time">
                        <div><?php echo date("jS F, Y",$currentTime); ?></div>
                        <div><?php echo ucwords($data->weather[0]->description); ?></div>
                    </div>
                    <div class="container-fluid weather-forecast letrasdiv">
                        <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon "/> 
                        <span class="letras2">Max: <?php echo $data->main->temp_max; ?>°C</span>
                        <span class="min-temperature text-primary">Min: <?php echo $data->main->temp_min; ?>°C</span>
                    </div>
                    <div class="container time letras">
                        <div class="">Humedad: <?php echo $data->main->humidity; ?> %</div>
                        <div>Viento: <?php echo $data->wind->speed; ?> km/h</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <?php if($status=="yes"){?>
            <article class="widget">
                <div class="weatherIcon">
                    <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png"/>
                </div>
                <div class="weatherInfo">
                    <div class="temperature">
                    <span><?php echo round($result['main']['temp'])?> C°</span>
                    </div>
                    <div class="description mr45">
                    <div class="weatherCondition"><?php echo $result['weather'][0]['description']?></div>
                    <div class="place"><?php echo $result['name']?>, <?php echo $result['sys']['country']?></div>
                    </div>
                    <div class="description">
                    <div class="weatherCondition">Wind</div>
                    <div class="place"><?php echo $result['wind']['speed']?> M/H</div>
                    </div>
                </div>
                <div class="date">
                    <?php echo date('d M',$result['dt'])?> 
                </div>
            </article>
            <?php } ?>
        </div>
    </div>  
</body>
</html>