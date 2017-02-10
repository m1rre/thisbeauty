<?php require 'template/header.php' ?>
<div class="container">
    <h3 class="beautyText">Betala</h3>
    <hr>
    <form id="contact-form" method="post" action="#" role="form" novalidate="true">

        <div class="messages"></div>

        <div class="controls">

            <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Ange Mottagarnamn" required="required" data-error="Firstname is required.">
                        </div>

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Ange Adress" required="required" data-error="Firstname is required.">
                        </div>

                        <div class="form-group">
                            <input id="form_name" type="number" name="name" class="form-control" placeholder="Ange postnr" required="required" data-error="Firstname is required.">
                        </div>

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Ange postOrt" required="required" data-error="Firstname is required.">
                        </div>

                        <div class="form-group">

                            <div class="checkbox checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    <h4>Swish</h4>
                                </label>
                            </div>

                            <div class="checkbox checkbox-circle">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">
                                    <h4>Postförskott</h4>
                                </label>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-lg  btn-default"  style="float: right" value="Slutför">
                            </div>
                            <br><br><br>
                        </div>

                    </div>

                <div class="col-md-6">

                            <div >
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <address>
                                            <strong>ThisBeauty</strong>
                                            <br>
                                            Göteborg, 58964
                                            <br>
                                            <abbr title="Phone">Tel:</abbr> (46) 0724224282
                                        </address>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                        <p>
                                            <em>Datum: 10 Feburari, 2017</em>
                                        </p>
                                        <p>
                                            <em>Kvitto #: 3452552677</em>
                                        </p>
                                    </div>
                                </div>

                                    <div class="text-center">
                                        <h1>Kivtto</h1>
                                    </div>
                                    </span>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Produkt</th>
                                            <th>Antal</th>
                                            <th class="text-center">Pris</th>
                                            <th class="text-center">Totalt</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="col-md-9"><em>PHB All in One Natural Mascara</em></h4></td>
                                            <td class="col-md-1" style="text-align: center"> 2 </td>
                                            <td class="col-md-1 text-center">159kr</td>
                                            <td class="col-md-1 text-center">318kr</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-9"><em>Kebab Pizza</em></h4></td>
                                            <td class="col-md-1" style="text-align: center"> 1 </td>
                                            <td class="col-md-1 text-center">420kr</td>
                                            <td class="col-md-1 text-center">420kr</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-9"><em>Vatten</em></h4></td>
                                            <td class="col-md-1" style="text-align: center"> 3 </td>
                                            <td class="col-md-1 text-center">0kr</td>
                                            <td class="col-md-1 text-center">0kr</td>
                                        </tr>
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td class="text-right">
                                                <p>
                                                    <strong>Frakt: </strong>
                                                </p>
                                                </td>
                                            <td class="text-center">
                                                <p>
                                                    <strong>Gratis</strong>
                                                </p>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                            <td class="text-center text-danger"><h4><strong>800kr</strong></h4></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-pink btn-lg btn-block">
                                        Betala   <span class="glyphicon glyphicon-chevron-right"></span>
                                    </button></td>


                </div>


                </div>

            </div>


    </form>
</div>
<?php require 'template/footer.php' ?>
