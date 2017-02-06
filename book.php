<?php require 'template/header.php' ?>

<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

<p>Välj datum: <input type="text" class="form-control" id="datepicker" size="30" ></p>

<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Behandling
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">Ödla</a></li>
        <li><a href="#">Fisk</a></li>
        <li><a href="#">Hajar</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
</div>


<?php require 'template/footer.php' ?>
