$(function(){

  $('.hamburger').click(function(){
    $('.hamburger').toggleClass('open');
    $('nav ul').toggleClass('open');
  });


/*  function indexHeaderPos(){
    let wW = $(window).width();
    console.log(wW);
    if( wW < 768 ){
      $('.indexHeader p').css({
        'left': 0
      });
    }else if( wW <= 1000 ){
      $('.indexHeader p').css({
        'left': 0
      });
    }else if(wW <= 1240){
      $('.indexHeader p').css({
        'left': ((wW-1000)/2*-1) + 'px'
      });
    }else{
      console.log('実行したよ');
      $('.indexHeader p').css({
        'left': '-120px'
      });
    }
  }
  //初期実行
  indexHeaderPos();
  $(window).resize(function(){
    indexHeaderPos();
  });*/


});
