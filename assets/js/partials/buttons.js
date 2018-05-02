var Buttons = (function () {



  //VARIABLES PRIVADAS
  var $btn = $('.btn'),
      $main = $('main');




  //VARIABLES GLOBALES
  var vars = {};



  //MÉTODOS PRIVADOS
  loadingContent = function () {
  };





  //MÉTODOS PÚBLICOS
  var methods = {};




  //BOTONES
  methods.btns = function () {
    $('a.btnComentario').on('click', function(e){
      $('a.btnAporte').addClass('inactive');
      $('a.btnComentario').removeClass('inactive');
      $('table.tb_comentario').show();
      $('table.tb_aporte').hide();
      e.preventDefault();
    });
    $('a.btnAporte').on('click', function(e){
      $('a.btnAporte').removeClass('inactive');
      $('a.btnComentario').addClass('inactive');
      $('table.tb_aporte').show();
      $('table.tb_comentario').hide();
      e.preventDefault();
    });
    $('.btnEnviarComentario').on('click', function(data){
      
    })

  };




  //ACCIONES
  methods.toggleBtnClass = function (element) {

  };




 return {
      methods : methods,
      vars : vars
  }


})();