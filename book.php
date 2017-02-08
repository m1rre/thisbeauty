<?php require 'template/header.php' ?>

<div class="container">
    <form action="" method="post">
        <div class="row">
            <h3 class="beautyText">Behandlingar</h3>
            <hr>
            <!--Left panel - checkpanels-->
            <div class="col-sm-7">
                    <div class="checkbox checkbox-circle">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">
                            <h4>Singelfransförlänging nytt sett 885kr</h4>
                        </label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>

                    <div class="checkbox checkbox-circle">
                        <input id="checkbox2" type="checkbox">
                        <label for="checkbox2">
                            <h4>Singelfransförlänging påfyllning 550kr</h4>
                        </label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>

                    <div class="checkbox checkbox-circle">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3">
                            <h4>Volymfransförlänging nytt sett 19050kr</h4>
                        </label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>

                    <div class="checkbox checkbox-circle">
                        <input id="checkbox4" type="checkbox">
                        <label for="checkbox4">
                            <h4>Volymfransförlänging nytt sett 650kr</h4>
                        </label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
            </div>

            <!--Right panel for date picker and submit button-->
            <div class="col-sm-4">
                <div  id="datepicker"  placeholder="Datum" ></div>
                <hr>
                <input type="submit" class="btn btn-default" value="Boka nu!">
            </div>

        </div>

    </form>

</div>


<?php require 'template/footer.php' ?>
