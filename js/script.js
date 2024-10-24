$.fn.tooltip = function(options) {
    var settings = $.extend({}, {
        arrowSize: 5
    }, options);
    return this.each(function() {
        var self = $(this).attr('title', '');
        var wrapper = self.wrap('<div></div>').parent().addClass('tooltip-wrapper');
        var tooltip = $('<div></div>');
        var width = tooltip.html(self.data('tooltip').replace(/ /g, '&nbsp;')).innerWidth();
        tooltip.css({
            top: -self.height()-2,
            left: -(width-self.width())/2
        }).addClass('tooltip');
        tooltip.appendTo(wrapper);
        self.mouseenter(function() {
            if (!self.data('hover')) {
                self.data('hover', true);
                var width = tooltip.innerWidth();
                tooltip.css({
                    left: -(width-self.width())/2
                });
            }
        });
    });
};

$(function() {
    var $email = $('a[data-type=email]');
    var email = $email.text().replace('[at]', '@').replace('[dot]', '.').replace(/\s+/g, '');
    $email.attr('href', 'mailto:' + email).text(email);
    $('.profiles a').tooltip();
    var pages = $('.pages ul a').click(function() {
        $(this).addClass('selected').parent().siblings().find('a').removeClass('selected');
    });
    // pagination [commented out]
    $('.pages span a').click(function() {
        if ($(this).hasClass('disabled')) {
            return false;
        }
        var selected = $('.pages ul a.selected')
        var succ = selected.parent()[$(this).attr('class')]();
        if (succ.length) {
            selected.removeClass('selected');
            succ.find('a').addClass('selected');
        }
    });
    $('.pages a').click(function() {
        var index = $('.pages ul a.selected').parent().index();
        if (index === 0) {
            $('.pages .prev').addClass('disabled');
        } else {
            $('.pages .prev').removeClass('disabled');
        }
        console.log(index + ' ' + pages.length);
        if (index === pages.length-1) {
            $('.pages .next').addClass('disabled');
        } else {
            $('.pages .next').removeClass('disabled');
        }
    });
});


