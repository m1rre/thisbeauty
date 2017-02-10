<hr>
<div class="container">
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; ThisBeauty 2017</p>
            </div>
        </div>
    </footer>
</div>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="assets/jquery/jquery-3.1.1.min.js"></script>
<!-- JQuery UI -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( function() {

        $("#datepicker").datepicker({
            dateFormat: 'dd-mm-yy',
            numberOfMonths: 1,
            onSelect: function(selected,evnt) {
                console.log(selected);
            }
        });
    });
</script>


<!-- Bootstrap Core JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>


<?php require 'modals/checkout.php' ?>
<?php require 'modals/moreInfo.php' ?>


</body>

</html>
