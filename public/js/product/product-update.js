/*
* Ing.Charles Rodriguez
*/

function productUpdate() {
    var selft = this;
    this.constructor = function () {
        this.component_init();
    },
        this.component_init = function () {
            window.Echo.channel('stock-available')
                .listen('StockAvailable', (data) => {
                    // alert('Event!');
                    $('#stock-notification').addClass('invisible');
                    $('#stock-notification > strong').empty().prepend(data.product.stock+' '+data.product.name+' Nuevos!');
                    $('#stock-notification').removeClass('invisible');
                });
        }
    /* Funciones Locales */
}

$(function () {
    var product_update = new productUpdate();
    product_update.constructor();
});
