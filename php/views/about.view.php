<?php require'partials/header.php' ?>
<?php require'partials/nav.php' ?>


<main>
    <div class="container">
        <div class="">
            <h1><?php echo $heading ?></h1>
            <hr>
        </div>
        <div class="pb-3">
            <ol class="list-group list-group-numbered">
                <?php foreach (filterByYear($books ,2020) as $book) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $book['name'] ?></div>
                            <?php echo $book['author'] ?>
                        </div>
                        <span class="badge bg-primary rounded-pill"><?php echo $book['year'] ?></span>
                    </li>
                <?php endforeach ?>
            </ol>
        </div>
    </div>
</main>
<?php require'partials/footer.php' ?>