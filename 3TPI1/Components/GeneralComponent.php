<?php
?>
<div class="col-12 col-lg-8">
    <form method="post" >
        <input type="text" class="text" placeholder="Ingresar Nombre de la Ciudad" name="city" value="<?php echo $city ?>" />
        <input type="submit" value="Enviar" class="submit" name="submit" />
        <?php echo $msg ?>
    </form>
</div>