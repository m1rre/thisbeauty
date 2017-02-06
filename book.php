<?php require 'template/header.php' ?>

<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

<div class="row">
    <div class="col-sm-7">
        <form>
            <h3>Välj behandling</h3>
            <div class="checkbox">
                <label><input type="checkbox" value="">Singelfransförlänging nytt sett 885kr</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="">Singelfransförlänging påfyllning 550kr</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="">Volymfransförlänging nytt sett 19050kr</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="">Volymfransförlänging nytt sett 650kr</label>
            </div>
        </form>

        <br>    

        <div id="datepicker" placeholder="Välj datum"></p>
    </div>
    <div class="col-sm-5">

    </div>
</div>








<?php require 'template/footer.php' ?>
