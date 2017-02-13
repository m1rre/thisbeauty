function displayAllProducts(id) {
    $(document).ready(function() {
        //Get Daata
        $.getJSON('http://localhost/thisbeauty/api/shop.php', null, function(data) {
            var html = '',
                el = document.getElementById(id);
            //Displaying the products on the page
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
}