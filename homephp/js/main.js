
(function ($) {
    "use strict";

    /*[ Load page ]
    ===========================================================*/
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div class="loader05"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'html',
        transition: function(url){ window.location.href = url; }
    });
    
    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });


    /*==================================================================
    [ Fixed Header ]*/
    var headerDesktop = $('.container-menu-desktop');
    var wrapMenu = $('.wrap-menu-desktop');

    if($('.top-bar').length > 0) {
        var posWrapHeader = $('.top-bar').height();
    }
    else {
        var posWrapHeader = 0;
    }
    

    if($(window).scrollTop() > posWrapHeader) {
        $(headerDesktop).addClass('fix-menu-desktop');
        $(wrapMenu).css('top',0); 
    }  
    else {
        $(headerDesktop).removeClass('fix-menu-desktop');
        $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
    }

    $(window).on('scroll',function(){
        if($(this).scrollTop() > posWrapHeader) {
            $(headerDesktop).addClass('fix-menu-desktop');
            $(wrapMenu).css('top',0); 
        }  
        else {
            $(headerDesktop).removeClass('fix-menu-desktop');
            $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
        } 
    });


    /*==================================================================
    [ Menu mobile ]*/
    $('.btn-show-menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('.menu-mobile').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu-m');

    for(var i=0; i<arrowMainMenu.length; i++){
        $(arrowMainMenu[i]).on('click', function(){
            $(this).parent().find('.sub-menu-m').slideToggle();
            $(this).toggleClass('turn-arrow-main-menu-m');
        })
    }

    $(window).resize(function(){
        if($(window).width() >= 992){
            if($('.menu-mobile').css('display') == 'block') {
                $('.menu-mobile').css('display','none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }

            $('.sub-menu-m').each(function(){
                if($(this).css('display') == 'block') { console.log('hello');
                    $(this).css('display','none');
                    $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
                }
            });
                
        }
    });


    /*==================================================================
    [ Show / hide modal search ]*/
    $('.js-show-modal-search').on('click', function(){
        $('.modal-search-header').addClass('show-modal-search');
        $(this).css('opacity','0');
    });

    $('.js-hide-modal-search').on('click', function(){
        $('.modal-search-header').removeClass('show-modal-search');
        $('.js-show-modal-search').css('opacity','1');
    });

    $('.container-search-header').on('click', function(e){
        e.stopPropagation();
    });


    /*==================================================================
    [ Isotope ]*/
    var $topeContainer = $('.isotope-grid');
    var $filter = $('.filter-tope-group');

    // filter items on button click
    $filter.each(function () {
        $filter.on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({filter: filterValue});

        });
    });

    var $plating = $('.plating');

    $plating.each(function(){
        $plating.on('click', 'a', function(){
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({filter: filterValue});
        });
    })

    // filter functions
    var filterFns = {
      // 1000-1200
      th_tw: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 1000 && parseInt( number, 10 ) <= 1200;
      },
      tw_fif: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 1200 && parseInt( number, 10 ) <= 1500;
      },
      fif_eit: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 1500 && parseInt( number, 10 ) <= 1800;
      },
      eit_two: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 1800 && parseInt( number, 10 ) <= 2000;
      },
      twoplus: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 2000;
      }
    };

    $('#filters').on( 'click', 'a', function() {
      var filterValue = $( this ).attr('data-filter');
      console.log(filterValue);
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      console.log(filterValue);
      $topeContainer.isotope({ filter: filterValue });
      $(this).parent().parent().parent().each(function(){
        $(this).find('a').removeClass('filter-link-active');
      })
      $(this).addClass('filter-link-active');
    });

    // init Isotope
    $(window).on('load', function () {
        var $grid = $topeContainer.each(function () {
            $(this).isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows',
                percentPosition: true,
                getSortData: {
                    price: '.discountedPrice'
                },
                animationEngine : 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });

    });

    var isotopeButton = $('.filter-tope-group button');

    $(isotopeButton).each(function(){
        $(this).on('click', function(){
            for(var i=0; i<isotopeButton.length; i++) {
                $(isotopeButton[i]).removeClass('how-active1');
            }

            $(this).addClass('how-active1');
        });
    });

    /*==================================================================
    [ Filter / Search product ]*/
    $('.js-show-filter').on('click',function(){
        $(this).toggleClass('show-filter');
        $('.panel-filter').slideToggle(400);

        if($('.js-show-search').hasClass('show-search')) {
            $('.js-show-search').removeClass('show-search');
            $('.panel-search').slideUp(400);
        }    
    });

    $('.js-show-search').on('click',function(){
        $(this).toggleClass('show-search');
        $('.panel-search').slideToggle(400);

        if($('.js-show-filter').hasClass('show-filter')) {
            $('.js-show-filter').removeClass('show-filter');
            $('.panel-filter').slideUp(400);
        }    
    });



    /*==================================================================
    [ Cart ]*/
    $('.js-show-cart').on('click',function(){
        $('.js-panel-cart').addClass('show-header-cart');
    });

    $('.js-hide-cart').on('click',function(){
        $('.js-panel-cart').removeClass('show-header-cart');
    });

    /*==================================================================
    [ Cart ]*/
    $('.js-show-sidebar').on('click',function(){
        $('.js-sidebar').addClass('show-sidebar');
    });

    $('.js-hide-sidebar').on('click',function(){
        $('.js-sidebar').removeClass('show-sidebar');
    });

    /*==================================================================
    [ +/- num product ]*/
    $('.btn-num-product-down').on('click', function(){
        var numProduct = Number($(this).next().val());
        if(numProduct > 0) $(this).next().val(numProduct - 1);
    });

    $('.btn-num-product-up').on('click', function(){
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
    });

    /*==================================================================
    [ Rating ]*/
    $('.wrap-rating').each(function(){
        var item = $(this).find('.item-rating');
        var rated = -1;
        var input = $(this).find('input');
        $(input).val(0);

        $(item).on('mouseenter', function(){
            var index = item.index(this);
            var i = 0;
            for(i=0; i<=index; i++) {
                $(item[i]).removeClass('zmdi-star-outline');
                $(item[i]).addClass('zmdi-star');
            }

            for(var j=i; j<item.length; j++) {
                $(item[j]).addClass('zmdi-star-outline');
                $(item[j]).removeClass('zmdi-star');
            }
        });

        $(item).on('click', function(){
            var index = item.index(this);
            rated = index;
            $(input).val(index+1);
        });

        $(this).on('mouseleave', function(){
            var i = 0;
            for(i=0; i<=rated; i++) {
                $(item[i]).removeClass('zmdi-star-outline');
                $(item[i]).addClass('zmdi-star');
            }

            for(var j=i; j<item.length; j++) {
                $(item[j]).addClass('zmdi-star-outline');
                $(item[j]).removeClass('zmdi-star');
            }
        });
    });
    
    /*==================================================================
    [ Show modal1 ]*/
    $('.js-show-modal1').on('click',function(e){
        e.preventDefault();
        $("#addToCart").prop("disabled", true);
        if($("input[name='nameOnProduct']").val()){
            $("#addToCart").prop("disabled", false);
        }
        $('.js-modal1').addClass('show-modal1');
        var title = $(this).parentsUntil(".item-slick2").find(".title").html();
        $(".js-name-detail").html(title);
        $("select[name='plating'], select[name='language'], select[name='nametype'], input[name='num-product'], input[name='nameOnProduct']").bind("change keyup mouseup click", function(){
            if($("input[name='nameOnProduct']").val()){
                $("#addToCart").prop("disabled", false);
            }
            else{
                $("#addToCart").prop("disabled", true);
            }
            // $("#preview").css("color", $("select[name='plating']").val().split('-')[0]);
            $("#preview").html($("input[name='nameOnProduct']").val());
            $("#preview").css("color", $("select[name='plating']").val().split('-')[0]);
            $("#total").html("Rs "+(parseInt($("input[name='num-product']").val())*(parseInt($("select[name='plating']").val().split('-')[1].split('Rs')[1])+parseInt($("select[name='nametype']").val().split('-')[1].split('Rs')[1])+parseInt($("select[name='language']").val().split('-')[1].split('Rs')[1]))));
        });
        $("#prod-plus, #prod-minus").on("click", function(){
            var total = parseInt($("select[name='plating']").val().split('-')[1].split('Rs')[1])+parseInt($("select[name='nametype']").val().split('-')[1].split('Rs')[1])+parseInt($("select[name='language']").val().split('-')[1].split('Rs')[1]);
            var quantity = $("input[name='num-product']").val()
            $("#total").html("Rs "+(parseInt(total)*parseInt(quantity)));
        });
        $.post("templates/modal.inc.php", {title: title}, function(data){
            var DATA = JSON.parse(data);
            console.log(DATA);
            $(".js-name-detail").attr("id", DATA.productID);
            $(".slick3").html(DATA.html);
            $("input[name='nameOnProduct']").attr("maxlength", DATA.nameLength);
            function sliderInit(){
                $('.wrap-slick3').each(function(){
                    $(this).find('.slick3').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        infinite: true,
                        autoplay: false,
                        autoplaySpeed: 6000,

                        arrows: true,
                        appendArrows: $(this).find('.wrap-slick3-arrows'),
                        prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
                        nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

                        dots: true,
                        appendDots: $(this).find('.wrap-slick3-dots'),
                        dotsClass: 'slick3-dots',
                        customPaging: function(slick, index) {
                            var portrait = $(slick.$slides[index]).data('thumb');
                            return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
                        },  
                    });
                });
            }
            sliderInit();
            $(".description").html(DATA.description);
            $("select[name='plating']").html("");
            $("select[name='language']").html("");
            $("select[name='nametype']").html("");
            for (var i = 0; i < DATA.plating.length ; i++) {
                var option = "<option>"+DATA.plating[i][0]+" -Rs "+DATA.plating[i][1]+"</option>";
                $("select[name='plating']").append(option);
            }        
            for (var i = 0; i < DATA.language.length ; i++) {
                var option = "<option>"+DATA.language[i][0]+" -Rs "+DATA.language[i][1]+"</option>";
                $("select[name='language']").append(option);
            }
            for (var i = 0; i < DATA.nametype.length ; i++) {
                var option = "<option>"+DATA.nametype[i][0]+" -Rs "+DATA.nametype[i][1]+"</option>";
                $("select[name='nametype']").append(option);
            }
        $("#total").html("Rs "+$("input[name='num-product']").val()*(parseInt($("select[name='plating']").val().split('-')[1].split('Rs')[1])+parseInt($("select[name='nametype']").val().split('-')[1].split('Rs')[1])+parseInt($("select[name='language']").val().split('-')[1].split('Rs')[1])));
        });
    });

    $('.js-hide-modal1').on('click',function(){
        $('.js-modal1').removeClass('show-modal1');
        $('.wrap-slick3').each(function(){
            $(this).find('.slick3').slick("unslick");
        });
    });

    /*==================================================================
    [ Add to Cart ]*/
    $("#addToCart").on("click", function(){
        var product = $(".js-name-detail").html();
        var productID = $(".js-name-detail").attr("id");
        var quantity = $("input[name='num-product']").val();
        var price = $("#total").html().split(" ")[1];
        var name = $("input[name='nameOnProduct']").val();
        $.post("addToCart.php", {productID: productID, product: product, quantity: quantity, price: price, nameOnProduct: name}, function(data){
            var DATA = JSON.parse(data);
            console.log(DATA);
            $("#numProdInCart").attr("data-notify", DATA.count);
            if(DATA.error){
                swal("Sorry", DATA.error, "error");
            }
        });
    });

    /*==================================================================
    [ Updating Cart Total ]*/
    var subtotal = 0;
    var total = 0;
    $("td.column-5").each(function(){
        subtotal += parseInt($(this).html().split(" ")[1]);
        total += subtotal;
    });
    $("input[name='num-product'], #cart-prod-plus, #cart-prod-minus").on("change click", function(){
        var quantity = parseInt($(this).parent().find("input[name='num-product']").val());
        var unitPrice = parseInt($(this).parent().parent().parent().find(".unit-price").html().split(" ")[1]);
        subtotal = quantity*unitPrice;
        total = subtotal;
        $(this).parent().parent().parent().find(".column-5").html("Rs "+subtotal);
        $("#total").html("Rs "+total);
        subtotal = 0;
        $("td.column-5").each(function(){
            subtotal += parseInt($(this).html().split(" ")[1]);
        });
        total = subtotal;
        $("#sub-total").html("Rs "+subtotal);
        $("#total").html("Rs "+total);
        $.post("sendTotal.php", {total: total}, function(){
        });
    })
    $("#sub-total").html("Rs "+subtotal);
    $("#total").html("Rs "+total);
    $("select[name='country']").on("change", function(){
        var shipping = $('option:selected', "select[name='country']").attr('data-price');
        console.log(shipping);
        $("#shipping").html(shipping);
    });
    $(".update").on("click", function(){
        var shipping = $('option:selected', "select[name='country']").attr('data-price');
        var coupon = parseInt($("input[name='coupon']").val().split("%")[0])/100;
        $("#coupon").addClass("label1");
        $("#coupon").attr("data-label1", $("input[name='coupon']").val());
        total = 0;
        total += subtotal;
        var discount = total * coupon;
        if(discount)
            total -= discount;
        // total += parseInt(shipping);
        $("#total").html("Rs "+total);
        $.post("sendTotal.php", {total: total}, function(){
        });
    });
    $("#apply-coupon").on("click", function(){
        var couponCode = $("input[name='coupon']").val();
        console.log(couponCode);
        $.post('checkCoupon.php', {couponCode: couponCode}, function(data){
            console.log(data);
            var DATA = JSON.parse(data);
            console.log(DATA);
            if(DATA.discount){
                $("input[name='coupon']").val(DATA.discount + "% OFF");
            }
        });
    });

    /*==================================================================
    [ Deleting Item From Cart ]*/
    $(".how-itemcart1").on("click", function(){
        $(this).parent().parent().addClass("removed-item", function(){
            $(this).parent().parent().remove();
        });
        var PID = ($(".removed-item").find(".column-2").attr("data-PID"));
        $.post("deleteItem.php", {PID: PID}, function(data){
            console.log(data);
        });
    });
    
    /*==================================================================
    [ Sending data to charge.php ]*/

})(jQuery);

function submitProduct(value){
    $("#hiddenProduct").val(value)
    $("#submitProduct").submit();
}