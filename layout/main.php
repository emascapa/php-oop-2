<body>

<!--     <section class="position-absolute basket_div" style="top: 40px; right: 30px;">
        <div class="px-5 py-2 d-inline bg-light border border-4 border-warning rounded-pill">
            prodotti qui
        </div>
    </section> -->

    <header class="py-5 bg-dark">
        <h1 class="display-4 text-center text-light">Don't buy stuff here</h1>
    </header>


    <main class="bg-light py-5">
        <div class="container">
            <div class="row row-cols-3 g-3 py-2">
                <div class="col d-flex align-items-center justify-content-center p-2">
                    <div style="height: 20px; width: 20px" class="bg-primary rounded rounded-4 me-1"></div>
                    <span>Food</span>
                </div>
                <div class="col d-flex align-items-center justify-content-center p-2">
                    <div style="height: 20px; width: 20px" class="bg-danger rounded rounded-4 me-1"></div>
                    <span>Games</span>
                </div>
                <div class="col d-flex align-items-center justify-content-center p-2">
                    <div style="height: 20px; width: 20px" class="bg-success rounded rounded-4 me-1"></div>
                    <span>Cosmetic</span>
                </div>

            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                <?php foreach ($productList as $product) { ?>
                    <div class="col">
                        <div class="h-100 card border-4 <?php
                                                        if ($product->getTypeID() == 0) {
                                                            echo 'border-primary';
                                                        } elseif ($product->getTypeID() == 1) {
                                                            echo 'border-danger';
                                                        } else {
                                                            echo 'border-success';
                                                        }
                                                        ?>">
                            <img src="<?= $product->getImage(); ?>" alt="">
                            <div class="card-body d-flex flex-column justify-content-between text-center">

                                <div>
                                    <h4><?= $product->getName(); ?></h4>
                                    <p>Prezzo: <?= $product->getPrice(); ?> €</p>
                                </div>

                                <small class="">Disponibilità: <?= $product->getAvailability(); ?> pezzi</small>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

</body>