$('a.bgimage').fancybox();
$('a.bgimage-komf').fancybox();


$(document).ready(function() {
        $(".twentytwenty-container[data-pct!='Pplan']").twentytwenty({
          default_offset_pct: 0.1, // сколько показывать 'изображение до' в процентах (максимально 1) сразу после загрузки страницы
          orientation: 'horizontal', // ориентация слайдера ('horizontal' или 'vertical')
          before_label: '', // подпись 'до'
          after_label: '', // подпись 'после'    
          no_overlay: false, // не показывать затемнение с надписями 'до' и 'после'
          move_slider_on_hover: true, // двигать "бегунок" слайдера вместе с курсором мыши
          move_with_handle_only: true, // двигать слайдер только за его "бегунок"
          click_to_move: false // разрешить перемещение "бегунка" слайдера по клику на изображении
        });
        $(".twentytwenty-container[data-pct='Pplan']").twentytwenty({
          default_offset_pct: 0.7, // сколько показывать 'изображение до' в процентах (максимально 1) сразу после загрузки страницы
          orientation: 'horizontal', // ориентация слайдера ('horizontal' или 'vertical')
          before_label: '', // подпись 'до'
          after_label: '', // подпись 'после'    
          no_overlay: false, // не показывать затемнение с надписями 'до' и 'после'
          move_slider_on_hover: true, // двигать "бегунок" слайдера вместе с курсором мыши
          move_with_handle_only: true, // двигать слайдер только за его "бегунок"
          click_to_move: false // разрешить перемещение "бегунка" слайдера по клику на изображении
        });
});

$(document).on("click", function () {
        $(this).trigger("resize.twentytwenty");
    });

$(function() {
  $('.iconMenu').click(function() {
    if($('.itemsMenu').is(':visible')) {
      $('.itemsMenu').removeClass('showitems'); 
    }
    else {
      $('.itemsMenu').addClass('showitems'); 
    }   
 }); 
});