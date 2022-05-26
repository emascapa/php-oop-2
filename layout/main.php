<body>
    <header class="py-5 bg-dark">
        <h1 class="display-4 text-center text-light">Don't buy stuff here</h1>
    </header>


    <main class="bg-light py-5">
        <div class="container">
            <div class="row row-cols-3 g-3">
                <?php foreach($productList as $product) {?>
                    <div class="col">
                        <div class="card">
                            <img src="<?= $product->getImage(); ?>" alt="">
                            <div class="card-body">
                                <h4><?= $product->getName(); ?></h4>
                                <p>Prezzo: <?= $product->getPrice(); ?> €</p>
                                <small>Disponibilità: <?= $product->getAvailability(); ?> pezzi</small>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </main>


</body>