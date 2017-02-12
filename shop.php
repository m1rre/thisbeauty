<?php require 'template/header.php' ?>

<div class="container">
    <h3 class="beautyText">Produkter</h3>
    <hr>
    <div id="products" class="row list-group">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $.getJSON('http://localhost/thisbeauty/api/shop.php', null, function(data) {
                    var html = '',
                        el = document.getElementById("products");
                    $.each(data, function (key, val) {
                       html +=
                            '<div class="col-xs-12 col-sm-6 col-md-3">' +
                            '<div class="col-item">' +
                            '<div >' +
                            '<img src="assets/img/products/lashsealer.jpg" class="img-responsive" />' +
                            '</div>' +
                            '<div class="info">' +
                            '<div class="row">' +
                            '<div class="price col-md-12">' +
                            '<h5>' + val.name + '</h5>' +
                            '<h5 class="price-text-color">' + val.price + 'kr</h5>' +
                            '</div>' +
                            '</div>' +
                            '<div class="separator clear-left">' +
                            '<p class="btn-add">' +
                            '<a  class="btn btn-default">Lägg i kundvagn</a>' +
                            '<p class="btn-details">' +
                            '<a data-toggle="modal" data-target="#moreInfo" class="btn btn-pink">Läs mer</a>' +
                            '</div>' +
                            '<div class="clearfix">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                       ;
                    });
                    el.innerHTML = html;
                });

            });

        </script>
        <div id="products">

        </div>


        <!--Product-->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div >
                    <img src="assets/img/products/lashsealer.jpg" class="img-responsive" />
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-12">
                            <h5>PHB All in One Natural Mascara</h5>
                            <h5 class="price-text-color">159kr</h5>
                        </div>

                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add">
                            <a  class="btn btn-default">Lägg i kundvagn</a>

                        <p class="btn-details">
                            <a data-toggle="modal" data-target="#moreInfo" class="btn btn-pink">Läs mer</a>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>

        <!--Product-->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div >
                    <img src="assets/img/products/lashsealer.jpg" class="img-responsive" />
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-12">
                            <h5>PHB All in One Natural Mascara</h5>
                            <h5 class="price-text-color">159kr</h5>
                        </div>

                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add">
                            <a  class="btn btn-default">Lägg i kundvagn</a>

                        <p class="btn-details">
                            <a data-toggle="modal" data-target="#moreInfo" class="btn btn-pink">Läs mer</a>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<?php require 'template/footer.php' ?>
