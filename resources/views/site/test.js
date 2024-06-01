$(function() {
    $.fn.raty.defaults.path = 'http://www.kavehbgc.com/template/default/fa/images';
    $('.big_stars').raty({
        space:false,
        starOff: 'star-big-off.png',
        starOn: 'star-big-on.png',
        noRatedMsg: '! بدون امتیاز',
        hints: ['بد', 'ضعیف', 'عادی', 'خوب', 'عالی'],
        score: function() {
            return $(this).attr('data-score');
        },
        click: function(score, evt) {

        }
    });
});
