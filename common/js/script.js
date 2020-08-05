$(function(){

  /*---　ハンバーガーメニュー　---*/
  $('.hamburger').click(function(){
    $('.hamburger').toggleClass('open');
    $('nav ul').toggleClass('open');
  });


  /*---　記事左寄せ　---*/
  let singleW = $('.mainFlex li').eq(0).width();
  $('.mainFlex li').each(function(index,element){
    $('.mainFlex').append('<li style="height:0; width:'+ singleW +'px; margin:0; padding:0;" class="append"></li>');
  });

  /*---　ウィンドウ可変イベント　---*/
  $(window).resize(function(){
    singleW = $('.mainFlex li').eq(0).width();
    $('.append').css({
      'width': singleW +'px'
    });
  });



});
