var Init = (function () {


  //VARIABLES PRIVADAS
  var dos = 'dos';
  var few = ['a','b','c','d'];
  var block_cambio_1,
      block_cambio_2,
      block_cambio_3,
      block_cambio_4,
      title_2_cambio,
      text_2_cambio;

  var enfoque_1,
      enfoque_2,
      enfoque_3,
      title_enfoque_2,
      text_enfoque_2,
      block_ef_1,
      title_block_ef_1,
      ef_1_point_1,
      ef_1_point_2,
      ef_1_point_3,
      ef_1_point_4,
      block_ef_2,
      title_block_ef_2,
      ef_2_point_1,
      ef_2_point_2,
      ef_2_point_3,
      ef_2_point_4,
      block_ef_3,
      title_block_ef_3,
      ef_3_point_1,
      ef_3_point_2,
      ef_3_point_3;

  var block_personajes,
      title_us_1,
      subtitle_us_1,
      text_us_1,
      title_us_2,
      subtitle_us_2_a,
      subtitle_us_2_b,
      text_us_2_a,
      text_us_2_b,
      title_us_3,
      equipo,
      title_us_4,
      equipo_2;
  //VARIABLES GLOBALES
  var vars = {};

  vars.uno = 'abc';



  //MÉTODOS PRIVADOS
  var ajaxDatabaseConection = function () {
  };



  //MÉTODOS PÚBLICOS
  var methods = {};


  methods.ready = function () {
    methods.load_banner();
  };

  methods.load = function () {
    Buttons.methods.btns();
    methods.scrollCambioInit();
    methods.scrollNosotrosInit();
    $(window).scroll(function(){
      methods.scrollCambio();
      methods.scrollEnfoque();
      methods.scrollNosotros();
      if ($(window).scrollTop() > 98) {
           $('.header_float').fadeIn();
       }
       else {
           $('.header_float').fadeOut();
       }
    });
  };

  methods.scrollNosotrosInit = function (){
    block_personajes = $(".block_personajes").visible();
    if ($("#nosotros").length > 0) {
      TweenMax.to("#nosotros .block_us_first .title_page", 0.6, { opacity:"1" ,delay: 0 });
      TweenMax.to("#nosotros .block_us_first .text_page", 0.6, { opacity:"1" ,delay: 0.5 });
      TweenMax.to("#nosotros .block_us_first .subtitle_page", 0.6, { opacity:"1" ,delay: 1 });
      TweenMax.to("#nosotros .block_us_first .text_sub_page", 0.6, { opacity:"1" ,delay: 1.5 });
      if (block_personajes) {
        TweenMax.to("#nosotros .block_us_first .ll_down", 0.6, { width:"948px", marginLeft: '-474px',delay: 0 });
        TweenMax.to("#nosotros .block_us_first .personaje_1", 0.6, { opacity: '1',delay: 0.5 });
        TweenMax.to("#nosotros .block_us_first .personaje_2", 0.6, { opacity: '1',delay: 1 });
        TweenMax.to("#nosotros .block_us_first .personaje_3", 0.6, { opacity: '1',delay: 1.5 });
        TweenMax.to("#nosotros .block_us_first .personaje_4", 0.6, { opacity: '1',delay: 2 });
        TweenMax.to("#nosotros .block_us_first .personaje_5", 0.6, { opacity: '1',delay: 2.5 });
        TweenMax.to("#nosotros .block_us_first .personaje_6", 0.6, { opacity: '1',delay: 3 });
        TweenMax.to("#nosotros .block_us_first .personaje_7", 0.6, { opacity: '1',delay: 3 });
      }
    }
  };

  methods.scrollCambioInit = function (){
    if ($("#parte_cambio").length > 0) {
      TweenMax.to("#parte_cambio .llave_top", 0.6, { width:"100%" ,delay: 0 });
      TweenMax.to("#parte_cambio .block_text_cambio .text_an", 0.6, { opacity:"1" ,delay: 0.5 });
    }
  };

  methods.scrollNosotros = function (){
    block_personajes = $(".block_personajes").visible();
    title_us_1 = $("#nosotros .block_us_second .title_an").visible();
    subtitle_us_1 = $("#nosotros .block_us_second .sub_title").visible();
    text_us_1 = $("#nosotros .block_us_second .text_an").visible();

    title_us_2 = $("#nosotros .block_us_three .title_an").visible();
    subtitle_us_2_a = $("#nosotros .block_us_three .sub_title_gr_a").visible();
    text_us_2_a = $("#nosotros .block_us_three .text_an_a").visible();
    subtitle_us_2_b = $("#nosotros .block_us_three .sub_title_gr_b").visible();
    text_us_2_b = $("#nosotros .block_us_three .text_an_b").visible();

    title_us_3 = $("#nosotros .block_us_four .title_an").visible();
    equipo = $("#nosotros .block_us_four .equipo").visible();

    title_us_4 = $("#nosotros .block_us_five .title_an").visible();
    equipo_2 = $("#nosotros .block_us_five .equipo").visible();
    if ($("#nosotros").length > 0) {
      if (block_personajes) {
        TweenMax.to("#nosotros .block_us_first .ll_down", 0.6, { width:"948px", marginLeft: '-474px',delay: 0 });
        TweenMax.to("#nosotros .block_us_first .personaje_1", 0.6, { opacity: '1',delay: 0.5 });
        TweenMax.to("#nosotros .block_us_first .personaje_2", 0.6, { opacity: '1',delay: 1 });
        TweenMax.to("#nosotros .block_us_first .personaje_3", 0.6, { opacity: '1',delay: 1.5 });
        TweenMax.to("#nosotros .block_us_first .personaje_4", 0.6, { opacity: '1',delay: 2 });
        TweenMax.to("#nosotros .block_us_first .personaje_5", 0.6, { opacity: '1',delay: 2.5 });
        TweenMax.to("#nosotros .block_us_first .personaje_6", 0.6, { opacity: '1',delay: 3 });
        TweenMax.to("#nosotros .block_us_first .personaje_7", 0.6, { opacity: '1',delay: 3 });
      }
      if (subtitle_us_1) {
        TweenMax.to("#nosotros .block_us_second .sub_title", 1, { opacity:"1", left: '0',delay: 0 });
      }
      if (title_us_1) {
        TweenMax.to("#nosotros .block_us_second .title_an", 1, { opacity:"1", right: '0',delay: 0 });
      }
      if (text_us_1) {
        TweenMax.to("#nosotros .block_us_second .text_an", 1, { opacity:"1",delay: 0 });
      }

      if (title_us_2) {
        TweenMax.to("#nosotros .block_us_three .title_an", 1, { opacity:"1", left: '0',delay: 0 });
      }
      if (subtitle_us_2_a) {
        TweenMax.to("#nosotros .block_us_three .sub_title_gr_a", 1, { opacity:"1", right: '0',delay: 0 });
      }
      if (text_us_2_a) {
        TweenMax.to("#nosotros .block_us_three .text_an_a", 1, { opacity:"1",delay: 0 });
      }
      if (subtitle_us_2_b) {
        TweenMax.to("#nosotros .block_us_three .sub_title_gr_b", 1, { opacity:"1", right: '0',delay: 0 });
      }
      if (text_us_2_b) {
        TweenMax.to("#nosotros .block_us_three .text_an_b", 1, { opacity:"1",delay: 0 });
      }

      if (title_us_3) {
        TweenMax.to("#nosotros .block_us_four .title_an", 1, { opacity:"1",delay: 0 });
      }
      if (equipo) {
        TweenMax.to("#nosotros .block_us_four .equipo", 1, { bottom:"0",delay: 0 });
      }

      if (title_us_4) {
        TweenMax.to("#nosotros .block_us_five .title_an", 1, { opacity:"1",delay: 0 });
      }
      if (equipo_2) {
        TweenMax.to("#nosotros .block_us_five .equipo", 1, { bottom:"0",delay: 0 });
      }
    }
  };
  
  methods.scrollEnfoque = function (){
    if ($("#enfoque").length > 0) {
      enfoque_1 = $(".ef1").visible();
      enfoque_2 = $(".ef2").visible();
      enfoque_3 = $(".ef3").visible();
      title_enfoque_2 = $("#title_enfoque_2").visible('complete');
      text_enfoque_2 = $("#text_enfoque_2").visible('complete');
      block_ef_1 = $("#block_ef_1 .block_ef_second_ll").visible();
      title_block_ef_1 = $("#block_ef_1 .title_an").visible();
      ef_1_point_1 = $("#block_ef_1 .ef_1_point_1").visible();
      ef_1_point_2 = $("#block_ef_1 .ef_1_point_2").visible();
      ef_1_point_3 = $("#block_ef_1 .ef_1_point_3").visible();
      ef_1_point_4 = $("#block_ef_1 .ef_1_point_4").visible();

      block_ef_2 = $("#block_ef_2 .block_ef_second_ll").visible();
      title_block_ef_2 = $("#block_ef_2 .title_an").visible();
      ef_2_point_1 = $("#block_ef_2 .ef_2_point_1").visible();
      ef_2_point_2 = $("#block_ef_2 .ef_2_point_2").visible();
      ef_2_point_3 = $("#block_ef_2 .ef_2_point_3").visible();
      ef_2_point_4 = $("#block_ef_2 .ef_2_point_4").visible();

      block_ef_3 = $("#block_ef_3 .block_ef_second_ll").visible();
      title_block_ef_3 = $("#block_ef_3 .title_an").visible();
      ef_3_point_1 = $("#block_ef_3 .ef_3_point_1").visible();
      ef_3_point_2 = $("#block_ef_3 .ef_3_point_2").visible();
      ef_3_point_3 = $("#block_ef_3 .ef_3_point_3").visible();
      if (enfoque_1) {
        TweenMax.to("#enfoque .ef1", 0.6, { opacity:"1" , delay:0});
      }
      if (enfoque_2) {
        TweenMax.to("#enfoque .ef2", 0.6, { opacity:"1" , delay: 0.5});
      }
      if (enfoque_3) {
        TweenMax.to("#enfoque .ef3", 0.6, { opacity:"1" , delay: 0});
      }
      if (title_enfoque_2) {
        TweenMax.to("#enfoque #title_enfoque_2", 0.6, { opacity:"1" , delay: 0.5});
      }
      if (text_enfoque_2) {
        TweenMax.to("#enfoque #text_enfoque_2", 1, { left: "0", opacity:"1" , delay: 0.5});
      }
      if (block_ef_1) {
        TweenMax.to("#enfoque #block_ef_1 .block_ef_second_ll .left_ll", 0.6, { marginTop:"-138px", height:"276px" , delay: 0});
        TweenMax.to("#enfoque #block_ef_1 .block_ef_second_ll .right_ll", 0.6, { marginTop:"-138px", height:"276px" , delay: 0});
        TweenMax.to("#enfoque #block_ef_1 .block_ef_second_ll p", 0.6, { opacity: "1" , delay: 0});
      }
      if (title_block_ef_1) {
        TweenMax.to("#enfoque #block_ef_1 .title_an", 0.6, { opacity: "1" , delay: 0});
      }
      if (ef_1_point_1) {
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_1 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_1 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_1_point_2) {
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_2 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_2 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_1_point_3) {
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_3 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_3 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_1_point_4) {
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_4 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_1 .ef_1_point_4 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }



      if (block_ef_2) {
        TweenMax.to("#enfoque #block_ef_2 .block_ef_second_ll .left_ll", 0.6, { marginTop:"-138px", height:"276px" , delay: 0});
        TweenMax.to("#enfoque #block_ef_2 .block_ef_second_ll .right_ll", 0.6, { marginTop:"-138px", height:"276px" , delay: 0});
        TweenMax.to("#enfoque #block_ef_2 .block_ef_second_ll p", 0.6, { opacity: "1" , delay: 0});
      }
      if (title_block_ef_2) {
        TweenMax.to("#enfoque #block_ef_2 .title_an", 0.6, { opacity: "1" , delay: 0});
      }
      if (ef_2_point_1) {
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_1 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_1 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_2_point_2) {
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_2 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_2 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_2_point_3) {
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_3 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_3 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_2_point_4) {
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_4 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_2 .ef_2_point_4 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }



      if (block_ef_3) {
        TweenMax.to("#enfoque #block_ef_3 .block_ef_second_ll .left_ll", 0.6, { marginTop:"-78px", height:"156px" , delay: 0});
        TweenMax.to("#enfoque #block_ef_3 .block_ef_second_ll .right_ll", 0.6, { marginTop:"-78px", height:"156px" , delay: 0});
        TweenMax.to("#enfoque #block_ef_3 .block_ef_second_ll p", 0.6, { opacity: "1" , delay: 0});
      }
      if (title_block_ef_3) {
        TweenMax.to("#enfoque #block_ef_3 .title_an", 0.6, { opacity: "1" , delay: 0});
      }
      if (ef_3_point_1) {
        TweenMax.to("#enfoque #block_ef_3 .ef_3_point_1 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_3 .ef_3_point_1 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_3_point_2) {
        TweenMax.to("#enfoque #block_ef_3 .ef_3_point_2 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_3 .ef_3_point_2 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
      if (ef_3_point_3) {
        TweenMax.to("#enfoque #block_ef_3 .ef_3_point_3 .point", 0.6, { opacity: "1" , delay: 0});
        TweenMax.to("#enfoque #block_ef_3 .ef_3_point_3 .text_enf", 0.6, { opacity: "1" , delay: 0.5});
      }
    }
  };

  methods.scrollCambio = function (){
    if ($("#parte_cambio").length > 0) {
      title_2_cambio = $("#title_2_cambio").visible('complete');
      text_2_cambio = $("#text_2_cambio").visible('complete');
      block_cambio_1 = $("#block_cambio_1").visible('complete');
      block_cambio_2 = $("#block_cambio_2").visible('complete');
      block_cambio_3 = $("#block_cambio_3").visible('complete');
      block_cambio_4 = $("#block_cambio_4").visible('complete');
      if (title_2_cambio) {
        TweenMax.to("#parte_cambio #title_2_cambio", 0.6, { opacity:"1" , delay: 0.5});
      }
      if (text_2_cambio) {
        TweenMax.to("#parte_cambio #text_2_cambio", 0.6, { left:"0", opacity: "1" , delay: 0.5});
      }
      if (block_cambio_1) {
        TweenMax.to("#parte_cambio #block_cambio_1 .ico_cambio", 1, { opacity: "1" , delay: 0.5});
        TweenMax.to("#parte_cambio #block_cambio_1 .left_ll", 1, { opacity: "1" , delay: 1});
        TweenMax.to("#parte_cambio #block_cambio_1 .text_cambio", 1, { opacity: "1" , delay: 1.5});
      }
      if (block_cambio_2) {
        TweenMax.to("#parte_cambio #block_cambio_2 .ico_cambio", 1, { opacity: "1" , delay: 0.5});
        TweenMax.to("#parte_cambio #block_cambio_2 .right_ll", 1, { opacity: "1" , delay: 1});
        TweenMax.to("#parte_cambio #block_cambio_2 .text_cambio", 1, { opacity: "1" , delay: 1.5});
      }
      if (block_cambio_3) {
        TweenMax.to("#parte_cambio #block_cambio_3 .ico_cambio", 1, { opacity: "1" , delay: 0.5});
        TweenMax.to("#parte_cambio #block_cambio_3 .left_ll", 1, { opacity: "1" , delay: 1});
        TweenMax.to("#parte_cambio #block_cambio_3 .text_cambio", 1, { opacity: "1" , delay: 1.5});
      }
      if (block_cambio_4) {
        TweenMax.to("#parte_cambio #block_cambio_4 .ico_cambio", 1, { opacity: "1" , delay: 0.5});
        TweenMax.to("#parte_cambio #block_cambio_4 .right_ll", 1, { opacity: "1" , delay: 1});
        TweenMax.to("#parte_cambio #block_cambio_4 .text_cambio", 1, { opacity: "1" , delay: 1.5});
      }
    }
  };

  methods.load_banner = function(){
    if ($("#slides").length > 0) {
      $('#slides').slidesjs({
        width: 1600,
        height: 360,
        play: {
          active: false,
          auto: true,
          effect: "fade"
        },
        navigation: {
          active: false
        },
        pagination:{
          active: false
        },
        effect: {
          fade: {
            speed: 400
          }
        }
      });
    }
  }

 return {
      methods : methods,
      vars : vars
  }


})();




//CUANDO HA CARGADO EL DOM
$(document).ready(Init.methods.ready);


//CUANDO HA CARGADO DOM, IMÁGENES, ETC
$(window).load(Init.methods.load);



