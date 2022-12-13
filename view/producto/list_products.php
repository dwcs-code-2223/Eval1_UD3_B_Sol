<div class="row"> 
    <?php
    if (count($dataToView["data"]) > 0) {
        foreach ($dataToView["data"] as $prod) {
            ?>
            <div class="col-md-3 card border border-secondary rounded m-2">
                <?php
                $path = $prod->relativePathToView($prod->getImagePath());
                ?>
                <img src="<?= $path ?>" class="card-img-top" title="<?= basename($path) ?>" alt="<?= basename($path) ?>" height="300">
                <div class="card-body ">

                    <h5 class="card-title"><?php echo $prod->getNombre(); ?></h5>

                    <div class="card-text"><?php echo nl2br($prod->getPrecio()) . "€"; ?></div>
                    <hr class="mt-1"/>
                </div>
            </div>
        <?php
    }
} else {
    ?>
        <div class="alert alert-info">
            Actualmente no existen productos.
        </div>
    <?php
}
?>
</div>