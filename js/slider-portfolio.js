jQuery(document).ready(function ($) {
    
      var slideCount = $('#slider ul li').length;
      var slideWidth = $('#slider ul li').width();
      var slideHeight = $('#slider ul li').height();
      var sliderUlWidth = slideCount * slideWidth;
      
      $('#slider').css({ width: slideWidth, height: slideHeight });
      
      $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
      
      $('#slider ul li:last-child').prependTo('#slider ul');
  
      function moveLeft() {
          $('#slider ul').animate({
              left: + slideWidth
          }, 200, function () {
              $('#slider ul li:last-child').prependTo('#slider ul');
              $('#slider ul').css('left', '');
          });
      };
  
      function moveRight() {
          $('#slider ul').animate({
              left: - slideWidth
          }, 200, function () {
              $('#slider ul li:first-child').appendTo('#slider ul');
              $('#slider ul').css('left', '');
          });
      };
  
      $('a.control_prev').click(function (e) {
          e.preventDefault();
          moveLeft();
      });
  
      $('a.control_next').click(function (e) {
          e.preventDefault();
          moveRight();
      });
  
  });

  function getProjectDetails(id){
    
    $.ajax({
        url: 'sys/project_details.php?id='+id,
        type: 'get',
        dataType: 'HTML',
        success: function(retorno){
            if(retorno  == "error"){
                alert('Ocorreu um erro!');
            }else{
                $('.a-detalhes-projeto').css('display', 'flex');
                $(".a-detalhes-projeto").html(retorno);
                $('html,body').animate({
                    scrollTop: $(".a-detalhes-projeto").offset().top - 150
                });
            }
        }
    });
    
    return false;
  }

  function closeDetailProject(){
      $('.a-detalhes-projeto').html('');
      $('.a-detalhes-projeto').hide();
  }