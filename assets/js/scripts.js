    var Buttons = function() {
    //VARIABLES PRIVADAS
    var uri = ($(".btn"), $("main"), $("#uri").val()), vars = {};
    var categoria_filtro = "0";
    var tipo_filtro = "0";
    var lupa = false;
    var menu = false;
    //MÉTODOS PRIVADOS
    loadingContent = function() {};
    //MÉTODOS PÚBLICOS
    var methods = {};
    //BOTONES
    //ACCIONES
    return methods.btns = function() {
        $('#send_contact').on('click', function(e){
            $.post(uri + "contact/send", $('#contact_form').serialize(), function(data){
                $('.contact_confirm').show();
            });
            e.preventDefault();
        });
        $('.btn_mobile').on('click', function(e){
            if (menu) {
                $('.content_nav').hide();
                menu = false;
            }else{
                $('.content_nav').show();
                menu = true;
            }
            e.preventDefault();
        })
        $("a.btnComentario").on("click", function(e) {
            $("a.btnAporte").addClass("inactive"), $("a.btnComentario").removeClass("inactive"), 
            $("table.tb_comentario").show(), $("table.tb_aporte").hide(), e.preventDefault();
        }), $("a.btnAporte").on("click", function(e) {
            $("a.btnAporte").removeClass("inactive"), $("a.btnComentario").addClass("inactive"), 
            $("table.tb_aporte").show(), $("table.tb_comentario").hide(), e.preventDefault();
        }), $(".nav_consultoria a").on("click", function(e) {
            var cat = $(this).data("categoria"), pag = $(this).data("page");
            $(".nav_consultoria a").removeClass("active"), $(this).addClass("active"), $("#consultoria_list").html(""), 
            $("#consultoria_list").addClass("loader"), $.post(uri + "getProyectosCateroria", {
                cat: cat,
                pag: pag
            }, function(data) {
                $("#consultoria_list").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#consultoria_list").html(dato.html);
            }), e.preventDefault();
        }), 
        $(".nav_social li a.ico_lupa").on("click", function(e) {
            if (lupa) {
                $('.search_txt').animate({
                    width : '0'
                }, 800)
                $('.search_txt').addClass('hide');
                lupa = false;
            }
            else{
                lupa = true;
                $('.search_txt').animate({
                    width : '200px'
                }, 800)
                $('.search_txt').removeClass('hide');
            }
            e.preventDefault();
        }),
        $("#cat_filtro ul a").on("click", function(e) {
            categoria_filtro = $(this).data("cat");
            var label = $(this).data("tit");
            $("#cat_filtro .label").html(label);
            $(".list_investigacion").html("").addClass("loader");
            $.post(uri + "filtroInvestigacion", {cat:categoria_filtro, tip:tipo_filtro}, function(data){
                var dato = $.parseJSON(data);
                $(".list_investigacion").html(dato.html).removeClass("loader");
            });
            e.preventDefault();
        }),
        $("#tip_filtro ul a").on("click", function(e) {
            tipo_filtro = $(this).data("cat");
            var label = $(this).data("tit");
            $("#tip_filtro .label").html(label);
            $(".list_investigacion").html("").addClass("loader");
            $.post(uri + "filtroInvestigacion", {cat:categoria_filtro, tip:tipo_filtro}, function(data){
                var dato = $.parseJSON(data);
                $(".list_investigacion").html(dato.html).removeClass("loader");
            });
            e.preventDefault();
        }), $(".nav_hor a").on("click", function(e) {
            var cat = $(this).data("categoria");
            $(".list_capacitacion").html(""), $(".list_capacitacion").addClass("loader"), $.post(uri + "getCapacitacionCategoria", {
                cat: cat
            }, function(data) {
                $(".list_capacitacion").removeClass("loader");
                var dato = $.parseJSON(data);
                $(".list_capacitacion").html(dato.html);
            }), e.preventDefault();
        }), $(".btnEnviarComentario").on("click", function(e) {
            var frm = $("#frm_comentarios").serialize();
            $.post(uri + "addComentarioCapacitacion", frm, function() {
                $(".block_comentario").html("");
            }), e.preventDefault();
        }), $("#detalle_capacitacion .btnLeidos").on("click", function(e) {
            $("#more_block").html(""), $("#more_block").addClass("loader"), $(".btnComentados").removeClass("active"), 
            $.post(uri + "capacitacionMasVistos", function(data) {
                $(".btnLeidos").addClass("active"), $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            }), e.preventDefault();
        }), $("#detalle_capacitacion .btnComentados").on("click", function(e) {
            $("#more_block").html(""), $("#more_block").addClass("loader"), $(".btnLeidos").removeClass("active"), 
            $.post(uri + "capacitacionMasComentados", function(data) {
                $(".btnComentados").addClass("active"), $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            }), e.preventDefault();
        }), $("#detalle_investigacion .btnLeidos, #investigacion .btnLeidos").on("click", function(e) {
            $("#more_block").html(""), $("#more_block").addClass("loader"), $(".btnComentados").removeClass("active"), 
            $.post(uri + "investigacionMasVistos", function(data) {
                $(".btnLeidos").addClass("active"), $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            }), e.preventDefault();
        }), $("#detalle_investigacion .btnComentados, #investigacion .btnComentados").on("click", function(e) {
            $("#more_block").html(""), $("#more_block").addClass("loader"), $(".btnLeidos").removeClass("active"), 
            $.post(uri + "investigacionMasValorados", function(data) {
                $(".btnComentados").addClass("active"), $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            }), e.preventDefault();
        });
    }, methods.toggleBtnClass = function() {}, {
        methods: methods,
        vars: vars
    };
}(), Init = function() {
    //VARIABLES PRIVADAS
    var block_cambio_1, block_cambio_2, block_cambio_3, block_cambio_4, title_2_cambio, text_2_cambio, enfoque_1, enfoque_2, enfoque_3, title_enfoque_2, text_enfoque_2, block_ef_1, title_block_ef_1, ef_1_point_1, ef_1_point_2, ef_1_point_3, ef_1_point_4, block_ef_2, title_block_ef_2, ef_2_point_1, ef_2_point_2, ef_2_point_3, ef_2_point_4, block_ef_3, title_block_ef_3, ef_3_point_1, ef_3_point_2, ef_3_point_3, block_personajes, title_us_1, subtitle_us_1, text_us_1, title_us_2, subtitle_us_2_a, subtitle_us_2_b, text_us_2_a, text_us_2_b, title_us_3, equipo, title_us_4, equipo_2, uri = $("#uri").val(), vars = {};
    vars.uno = "abc";
    //MÉTODOS PRIVADOS
    var methods = {};
    return methods.ready = function() {
        methods.load_banner();
    }, methods.load = function() {
        Buttons.methods.btns(), methods.scrollCambioInit(), methods.scrollNosotrosInit(), 
        methods.addContadorCapacitacion(), methods.addContadorInvestigacion(), $(window).scroll(function() {
            methods.scrollCambio(), methods.valoracionInvestigacion(), methods.scrollEnfoque(), methods.scrollNosotros(), $(window).scrollTop() > 98 ? $(".header_float").fadeIn() : $(".header_float").fadeOut();
        });
    }, methods.valoracionInvestigacion = function() {
        $('.stars li a').mouseover(function (){
          $('.stars li a').removeClass('star-active');
          $('.stars li a').removeClass('left');                
          var rating = $(this).attr('id').replace('star-points-', '');
          for (i=1;i<=rating;i++) {                         
              $('#star-points-'+i).addClass('star-active');
              $('#star-points-'+i).addClass('left');
          }                                    
        }).mouseout(function (){
          $('.stars li a').removeClass('star-active');
          $('.stars li a').removeClass('left');                
          var rating = $('#video_rating').val();
          for (i=1;i<=rating;i++) {                         
              $('#star-points-'+i).addClass('star-active');
              $('#star-points-'+i).addClass('left');
          }                  
        })
        
    },methods.addContadorCapacitacion = function() {
        if ($("#detalle_capacitacion").length > 0) {
            var id = $("#detalle_capacitacion").data("id");
            $.post(uri + "addContadorCapacitacion", {
                id: id
            }, function() {}), $.post(uri + "capacitacionMasVistos", function(data) {
                $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            });
        }
    },methods.addContadorInvestigacion = function() {
        if ($("#detalle_investigacion").length > 0) {
            var id = $("#detalle_investigacion").data("id");
            $.post(uri + "addContadorInvestigacion", {
                id: id
            }, function() {}), $.post(uri + "investigacionMasVistos", function(data) {
                $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            });
        }
        if ($("#investigacion").length > 0) {
            $.post(uri + "investigacionMasVistos", function(data) {
                $("#more_block").removeClass("loader");
                var dato = $.parseJSON(data);
                $("#more_block").html(dato.html);
            });
        }
    }, methods.scrollNosotrosInit = function() {
        block_personajes = $(".block_personajes").visible(true), $("#nosotros").length > 0 && (TweenMax.to("#nosotros .block_us_first .title_page", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#nosotros .block_us_first .text_page", .6, {
            opacity: "1",
            delay: .5
        }), TweenMax.to("#nosotros .block_us_first .subtitle_page", .6, {
            opacity: "1",
            delay: 1
        }), TweenMax.to("#nosotros .block_us_first .text_sub_page", .6, {
            opacity: "1",
            delay: 1.5
        }), block_personajes && (TweenMax.to("#nosotros .block_us_first .ll_down", .6, {
            width: "948px",
            marginLeft: "-474px",
            delay: 0
        }), TweenMax.to("#nosotros .block_us_first .personaje_1", .6, {
            opacity: "1",
            delay: .5
        }), TweenMax.to("#nosotros .block_us_first .personaje_2", .6, {
            opacity: "1",
            delay: 1
        }), TweenMax.to("#nosotros .block_us_first .personaje_3", .6, {
            opacity: "1",
            delay: 1.5
        }), TweenMax.to("#nosotros .block_us_first .personaje_4", .6, {
            opacity: "1",
            delay: 2
        }), TweenMax.to("#nosotros .block_us_first .personaje_5", .6, {
            opacity: "1",
            delay: 2.5
        }), TweenMax.to("#nosotros .block_us_first .personaje_6", .6, {
            opacity: "1",
            delay: 3
        }), TweenMax.to("#nosotros .block_us_first .personaje_7", .6, {
            opacity: "1",
            delay: 3
        })));
    }, methods.scrollCambioInit = function() {
        $("#parte_cambio").length > 0 && (TweenMax.to("#parte_cambio .llave_top", .6, {
            width: "100%",
            delay: 0
        }), TweenMax.to("#parte_cambio .block_text_cambio .text_an", .6, {
            opacity: "1",
            delay: .5
        }));
    }, methods.scrollNosotros = function() {
        block_personajes = $(".block_personajes").visible(true), title_us_1 = $("#nosotros .block_us_second .title_an").visible(true), 
        subtitle_us_1 = $("#nosotros .block_us_second .s_title").visible(true), text_us_1 = $("#nosotros .block_us_second .text_an").visible(true), 
        title_us_2 = $("#nosotros .block_us_three .title_an").visible(true), subtitle_us_2_a = $("#nosotros .block_us_three .s_title_gr_a").visible(true), 
        text_us_2_a = $("#nosotros .block_us_three .text_an_a").visible(true), subtitle_us_2_b = $("#nosotros .block_us_three .s_title_gr_b").visible(true), 
        text_us_2_b = $("#nosotros .block_us_three .text_an_b").visible(true), title_us_3 = $("#nosotros .block_us_four .title_an").visible(true), 
        equipo = $("#nosotros .block_us_four .equipo").visible(true), title_us_4 = $("#nosotros .block_us_five .title_an").visible(true), 
        equipo_2 = $("#nosotros .block_us_five .equipo").visible(true), $("#nosotros").length > 0 && (block_personajes && (TweenMax.to("#nosotros .block_us_first .ll_down", .6, {
            width: "948px",
            marginLeft: "-474px",
            delay: 0
        }), TweenMax.to("#nosotros .block_us_first .personaje_1", .6, {
            opacity: "1",
            delay: .5
        }), TweenMax.to("#nosotros .block_us_first .personaje_2", .6, {
            opacity: "1",
            delay: 1
        }), TweenMax.to("#nosotros .block_us_first .personaje_3", .6, {
            opacity: "1",
            delay: 1.5
        }), TweenMax.to("#nosotros .block_us_first .personaje_4", .6, {
            opacity: "1",
            delay: 2
        }), TweenMax.to("#nosotros .block_us_first .personaje_5", .6, {
            opacity: "1",
            delay: 2.5
        }), TweenMax.to("#nosotros .block_us_first .personaje_6", .6, {
            opacity: "1",
            delay: 3
        }), TweenMax.to("#nosotros .block_us_first .personaje_7", .6, {
            opacity: "1",
            delay: 3
        })), subtitle_us_1 && TweenMax.to("#nosotros .block_us_second .s_title", 1, {
            opacity: "1",
            left: "0",
            delay: 0
        }), title_us_1 && TweenMax.to("#nosotros .block_us_second .title_an", 1, {
            opacity: "1",
            right: "0",
            delay: 0
        }), text_us_1 && TweenMax.to("#nosotros .block_us_second .text_an", 1, {
            opacity: "1",
            delay: 0
        }), title_us_2 && TweenMax.to("#nosotros .block_us_three .title_an", 1, {
            opacity: "1",
            left: "0",
            delay: 0
        }), subtitle_us_2_a && TweenMax.to("#nosotros .block_us_three .s_title_gr_a", 1, {
            opacity: "1",
            right: "0",
            delay: 0
        }), text_us_2_a && TweenMax.to("#nosotros .block_us_three .text_an_a", 1, {
            opacity: "1",
            delay: 0
        }), subtitle_us_2_b && TweenMax.to("#nosotros .block_us_three .s_title_gr_b", 1, {
            opacity: "1",
            right: "0",
            delay: 0
        }), text_us_2_b && TweenMax.to("#nosotros .block_us_three .text_an_b", 1, {
            opacity: "1",
            delay: 0
        }), title_us_3 && TweenMax.to("#nosotros .block_us_four .title_an", 1, {
            opacity: "1",
            delay: 0
        }), equipo && TweenMax.to("#nosotros .block_us_four .equipo", 1, {
            bottom: "0",
            delay: 0
        }), title_us_4 && TweenMax.to("#nosotros .block_us_five .title_an", 1, {
            opacity: "1",
            delay: 0
        }), equipo_2 && TweenMax.to("#nosotros .block_us_five .equipo", 1, {
            bottom: "0",
            delay: 0
        }));
    }, methods.scrollEnfoque = function() {
        $("#enfoque").length > 0 && (enfoque_1 = $(".ef1").visible(true), enfoque_2 = $(".ef2").visible(true), 
        enfoque_3 = $(".ef3").visible(true), title_enfoque_2 = $("#title_enfoque_2").visible("complete"), 
        text_enfoque_2 = $("#text_enfoque_2").visible("complete"), block_ef_1 = $("#block_ef_1 .block_ef_second_ll").visible(true), 
        title_block_ef_1 = $("#block_ef_1 .title_an").visible(true), ef_1_point_1 = $("#block_ef_1 .ef_1_point_1").visible(true), 
        ef_1_point_2 = $("#block_ef_1 .ef_1_point_2").visible(true), ef_1_point_3 = $("#block_ef_1 .ef_1_point_3").visible(true), 
        ef_1_point_4 = $("#block_ef_1 .ef_1_point_4").visible(true), block_ef_2 = $("#block_ef_2 .block_ef_second_ll").visible(true), 
        title_block_ef_2 = $("#block_ef_2 .title_an").visible(true), ef_2_point_1 = $("#block_ef_2 .ef_2_point_1").visible(true), 
        ef_2_point_2 = $("#block_ef_2 .ef_2_point_2").visible(true), ef_2_point_3 = $("#block_ef_2 .ef_2_point_3").visible(true), 
        ef_2_point_4 = $("#block_ef_2 .ef_2_point_4").visible(true), block_ef_3 = $("#block_ef_3 .block_ef_second_ll").visible(true), 
        title_block_ef_3 = $("#block_ef_3 .title_an").visible(true), ef_3_point_1 = $("#block_ef_3 .ef_3_point_1").visible(true), 
        ef_3_point_2 = $("#block_ef_3 .ef_3_point_2").visible(true), ef_3_point_3 = $("#block_ef_3 .ef_3_point_3").visible(true), 
        enfoque_1 && TweenMax.to("#enfoque .ef1", .6, {
            opacity: "1",
            delay: 0
        }), enfoque_2 && TweenMax.to("#enfoque .ef2", .6, {
            opacity: "1",
            delay: .5
        }), enfoque_3 && TweenMax.to("#enfoque .ef3", .6, {
            opacity: "1",
            delay: 0
        }), title_enfoque_2 && TweenMax.to("#enfoque #title_enfoque_2", .6, {
            opacity: "1",
            delay: .5
        }), text_enfoque_2 && TweenMax.to("#enfoque #text_enfoque_2", 1, {
            left: "0",
            opacity: "1",
            delay: .5
        }), block_ef_1 && (TweenMax.to("#enfoque #block_ef_1 .block_ef_second_ll .left_ll", .6, {
            marginTop: "-138px",
            height: "276px",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_1 .block_ef_second_ll .right_ll", .6, {
            marginTop: "-138px",
            height: "276px",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_1 .block_ef_second_ll p", .6, {
            opacity: "1",
            delay: 0
        })), title_block_ef_1 && TweenMax.to("#enfoque #block_ef_1 .title_an", .6, {
            opacity: "1",
            delay: 0
        }), ef_1_point_1 && (TweenMax.to("#enfoque #block_ef_1 .ef_1_point_1 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_1 .ef_1_point_1 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_1_point_2 && (TweenMax.to("#enfoque #block_ef_1 .ef_1_point_2 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_1 .ef_1_point_2 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_1_point_3 && (TweenMax.to("#enfoque #block_ef_1 .ef_1_point_3 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_1 .ef_1_point_3 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_1_point_4 && (TweenMax.to("#enfoque #block_ef_1 .ef_1_point_4 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_1 .ef_1_point_4 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), block_ef_2 && (TweenMax.to("#enfoque #block_ef_2 .block_ef_second_ll .left_ll", .6, {
            marginTop: "-138px",
            height: "276px",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_2 .block_ef_second_ll .right_ll", .6, {
            marginTop: "-138px",
            height: "276px",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_2 .block_ef_second_ll p", .6, {
            opacity: "1",
            delay: 0
        })), title_block_ef_2 && TweenMax.to("#enfoque #block_ef_2 .title_an", .6, {
            opacity: "1",
            delay: 0
        }), ef_2_point_1 && (TweenMax.to("#enfoque #block_ef_2 .ef_2_point_1 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_2 .ef_2_point_1 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_2_point_2 && (TweenMax.to("#enfoque #block_ef_2 .ef_2_point_2 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_2 .ef_2_point_2 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_2_point_3 && (TweenMax.to("#enfoque #block_ef_2 .ef_2_point_3 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_2 .ef_2_point_3 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_2_point_4 && (TweenMax.to("#enfoque #block_ef_2 .ef_2_point_4 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_2 .ef_2_point_4 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), block_ef_3 && (TweenMax.to("#enfoque #block_ef_3 .block_ef_second_ll .left_ll", .6, {
            marginTop: "-78px",
            height: "156px",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_3 .block_ef_second_ll .right_ll", .6, {
            marginTop: "-78px",
            height: "156px",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_3 .block_ef_second_ll p", .6, {
            opacity: "1",
            delay: 0
        })), title_block_ef_3 && TweenMax.to("#enfoque #block_ef_3 .title_an", .6, {
            opacity: "1",
            delay: 0
        }), ef_3_point_1 && (TweenMax.to("#enfoque #block_ef_3 .ef_3_point_1 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_3 .ef_3_point_1 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_3_point_2 && (TweenMax.to("#enfoque #block_ef_3 .ef_3_point_2 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_3 .ef_3_point_2 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })), ef_3_point_3 && (TweenMax.to("#enfoque #block_ef_3 .ef_3_point_3 .point", .6, {
            opacity: "1",
            delay: 0
        }), TweenMax.to("#enfoque #block_ef_3 .ef_3_point_3 .text_enf", .6, {
            opacity: "1",
            delay: .5
        })));
    }, methods.scrollCambio = function() {
        $("#parte_cambio").length > 0 && (title_2_cambio = $("#title_2_cambio").visible("complete"), 
        text_2_cambio = $("#text_2_cambio").visible("complete"), block_cambio_1 = $("#block_cambio_1").visible("complete"), 
        block_cambio_2 = $("#block_cambio_2").visible("complete"), block_cambio_3 = $("#block_cambio_3").visible("complete"), 
        block_cambio_4 = $("#block_cambio_4").visible("complete"), title_2_cambio && TweenMax.to("#parte_cambio #title_2_cambio", .6, {
            opacity: "1",
        }), text_2_cambio && TweenMax.to("#parte_cambio #text_2_cambio", .6, {
            left: "0",
            opacity: "1",
        }), block_cambio_1 && (TweenMax.to("#parte_cambio #block_cambio_1 .ico_cambio", 0.5, {
            opacity: "1",
        }), TweenMax.to("#parte_cambio #block_cambio_1 .left_ll", 0.5, {
            opacity: "1",
            delay: 0.5
        }), TweenMax.to("#parte_cambio #block_cambio_1 .text_cambio", 0.5, {
            opacity: "1",
            delay: 1
        })), block_cambio_2 && (TweenMax.to("#parte_cambio #block_cambio_2 .ico_cambio", 0.5, {
            opacity: "1",
        }), TweenMax.to("#parte_cambio #block_cambio_2 .right_ll", 0.5, {
            opacity: "1",
            delay: 0.5
        }), TweenMax.to("#parte_cambio #block_cambio_2 .text_cambio", 0.5, {
            opacity: "1",
            delay: 1
        })), block_cambio_3 && (TweenMax.to("#parte_cambio #block_cambio_3 .ico_cambio", 0.5, {
            opacity: "1",
        }), TweenMax.to("#parte_cambio #block_cambio_3 .left_ll", 0.5, {
            opacity: "1",
            delay: 0.5
        }), TweenMax.to("#parte_cambio #block_cambio_3 .text_cambio", 0.5, {
            opacity: "1",
            delay: 1
        })), block_cambio_4 && (TweenMax.to("#parte_cambio #block_cambio_4 .ico_cambio", 0.5, {
            opacity: "1",
        }), TweenMax.to("#parte_cambio #block_cambio_4 .right_ll", 0.5, {
            opacity: "1",
            delay: 0.5
        }), TweenMax.to("#parte_cambio #block_cambio_4 .text_cambio", 0.5, {
            opacity: "1",
            delay: 1
        })));
    }, methods.load_banner = function() {
        $("#slides").length > 0 && $("#slides .item_slides").length > 1 && $("#slides").slidesjs({
            width: 1600,
            height: 360,
            play: {
                active: !1,
                auto: !0,
                effect: "fade"
            },
            navigation: {
                active: !1
            },
            pagination: {
                active: !1
            },
            effect: {
                fade: {
                    speed: 400
                }
            }
        });
    }, {
        methods: methods,
        vars: vars
    };
}();

//CUANDO HA CARGADO EL DOM
$(document).ready(Init.methods.ready), //CUANDO HA CARGADO DOM, IMÁGENES, ETC
$(window).load(Init.methods.load);