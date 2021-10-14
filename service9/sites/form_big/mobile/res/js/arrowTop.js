(function($, window, document, undefined) {

    "use strict";

    var pluginName = "arrowTop";

    function ArrowTop(element, options) {
        this.element = element;
        this.container = null;

        this._name = pluginName;
        this.init();
    }

    $.extend(ArrowTop.prototype, {
        init: function() {
            var elem = this.element;
            this.container = $(this.element);
            this.container.click(this.scroll);
        },
        scroll: function(elem) {
            $('html, body').animate({
                scrollTop: $("form").offset().top - 50
            }, 1000);
        }
    });

    $.fn.arrowTop = function(options) {
        return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" +
                    pluginName, new ArrowTop(this, options));
            }
        });
    };

})(jQuery, window, document);