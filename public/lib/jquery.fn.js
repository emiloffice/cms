(function ($) {
    $.fn.menuSelector = function (e) {
        var dt,dd,li;
        dt = this.children().eq(0);
        dd = this.children().eq(1);
        li = dd.children().children().eq(e-1);
        dd.css('display', 'block');
        dt.addClass('selected');
        li.addClass('current');
    };
})(jQuery)