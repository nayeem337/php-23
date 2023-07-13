<?php include "includes/header.php"?>

    <section class="py-5">
        <div class="container">
            <div class="row">


                <?php foreach ($products as $product) { ?>


                <div class="col-md-4 mt-2">
                    <div class="card">
                        <img src="assets/image/<?php echo $product['image']?>" alt="" class="card-img-top" style="height: 300px!important;">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $product['title']?></h2>
                            <p class="card-text"><?php echo $product['price']?></p>
                            <p class="card-text"><?php echo $product['size']?></p>
                            <a href="action.php?page=product-details&&id=<?php echo $product['id'] ?>" class="float-end btn btn-success w-100"> view</a>
                        </div>
                    </div>
                </div>

                <?php  } ?>

            </div>
        </div>
    </section>



<?php include "includes/footer.php"?>

