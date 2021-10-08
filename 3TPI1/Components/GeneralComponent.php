<?php
?>
<div class="col-12 col-lg-8">
    <form method="post">
        <input type="text" class="text _input" placeholder="Ingresar Ciudad" name="city" value="<?php echo $city ?>" />
        <input type="submit" value="Enviar" class="submit _btn" name="submit" />
        <?php echo $msg ?>
    </form>
</div>