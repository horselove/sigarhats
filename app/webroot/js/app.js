$(function () {
  $(document).foundation();

  $(".lazy").lazyload({
      effect: 'fadeIn'
  });

  // Fixed top on scroll
  function scrollFix() {
    var isFixed = 0;
    $(window).on('scroll', function(){
      $('[data-scroll-fix="fixed"]').each(function () {
        var offsetTop = 40;
        var pos = Math.round($(this).offset().top) - offsetTop;
        var scrollTop = $(window).scrollTop();
        var elemW = $(this).outerWidth();
        var elemPos = $(this).offset();


        if ((isFixed == 0 && scrollTop >= pos)) {
          isFixed = 1;
          $(this).css('opacity', '0');
          $(this).clone().appendTo('body')
          .attr('data-scroll-fix', 'is-fixed')
          .addClass('fixed clone')
          .css({
              'opacity' : '1',
              width: elemW + 'px',
              top: offsetTop + 'px',
              left: elemPos.left + 'px'
          });

        } else if (isFixed == 1 && scrollTop < pos ) {
          isFixed = 0;
          $('.clone').remove();
          $(this).css('opacity', '1');
        }
      });
    });
  }

  // Disabling fixed on scroll for small and touch screens
  if ($(window).width() > 1024 && !Modernizr.touch) {
      scrollFix();
  }

});
