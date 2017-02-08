<?php require 'template/header.php' ?>
    <div class="container">
        <h3 class="beautyText">Kontakta oss</h3>
        <hr>
        <form id="contact-form" method="post" action="contact.php" role="form" novalidate="true">

            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Förnamn</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Skriv in ditt förnamn" required="required" data-error="Firstname is required.">
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Efternamn</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Skriv in dit efternamn" required="required" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">e-mail</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Skriv in ditt mail adress" required="required" data-error="Valid email is required.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Telefon</label>
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Skriv in ditt telefon nummer">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Meddelande</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Här kan du skriva din fråga etc.." rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-default" value="Skicka">
                    </div>
                </div>
            </div>

        </form>
    </div>
<?php require 'template/footer.php' ?>
