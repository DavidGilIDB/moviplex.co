<div class="row">
</div>
<div class="d-flex justify-content-between row">
    <div class="col-12 col-sm-4 col">
        <div class="img-gradient">
            <img src="<?= STORAGEURL . $item->image ?>" alt="">
        </div>
    </div>
    <div class="col-12 col-sm-7 d-flex flex-column justify-content-center col">

        <div class="d-flex flex-column align-items-center" style="border:1px solid lightgray;border-radius:5px ;padding:2rem 0">
            <audio controls autoplay style="width:100%; ">
                <source src="<?= STORAGEURL . $item->src ?>" type="audio/mp3">
            </audio>
        </div>
    </div>
</div>
