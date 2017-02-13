<?php require 'template/header.php' ?>

<div class="container">

    <!-- Page Title -->
    <h3 class="beautyText">Produkter</h3>
    <hr>

    <div id="products" class="row list-group">

        <!-- requiring JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!--Looping though all the products-->
        <script>
            displayAllProducts("products");
        </script>

        <!--Products will be place inside this div-->
        <div id="products"> </div>

    </div>
</div>

<?php require 'template/footer.php' ?>
