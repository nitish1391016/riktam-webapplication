<div class="col">
    <a class="card h-100 text-dark civic_main_card" href="civic_details.php?id=<?= $data['id'] ?>">
        <img src="images/<?= $data['image']; ?>" width="100%" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['title'] ?></h5>
            <p class="card-text" style="height: 70px; --webkit-line-clamp: 3; overflow:hidden"><?= $data['description'] ?></p>
            <div class=" d-flex justify-content-between mb-1">
                <small class=" fst-italic">Date: <?= ($data['date']) ?></small>
                <small>Votes: <i><?= $votes ?></i></small>
            </div>
            <small>Location: <i><?= $data['location'] ?></i></small>
        </div>
        <div class="card-footer">
            status: <i class="text-primary"><?= $data['status']?></i>
        </div>
    </a>
</div>