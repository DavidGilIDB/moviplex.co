<div class="row">
    <h1><?= $item->name ?? $item->title ?></h1>
</div>
<div class="d-flex justify-content-between row">
    <div class="col-12 col-sm-4 col">
        <div class="img-gradient">
            <img src="<?= STORAGEURL . $item->image ?>" alt="">
        </div>
    </div>
    <div class="col-12 col-sm-7 d-flex flex-column justify-content-start col">
        <video class="mb-4" autoplay controls>
            <source src="<?= STORAGEURL . $item->src ?>" type="video/mp4">
        </video>
        <div>
            <p></p>
        </div>
        <p></p>
    </div>
</div>