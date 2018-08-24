
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
        return parseInt( number, 10 ) >= 1000 && parseInt( number, 10 ) <= 5000;
      },
      tw_fif: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 5000 && parseInt( number, 10 ) <= 10000;
      },
      fif_eit: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 10000 && parseInt( number, 10 ) <= 15000;
      },
      eit_two: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 15000 && parseInt( number, 10 ) <= 20000;
      },
      twoplus: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 20000;
      },
      two_twofif: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 200 && parseInt( number, 10 ) <= 250;
      },
      twofif_tri: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 250 && parseInt( number, 10 ) <= 300;
      },
      tri_trifif: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 300 && parseInt( number, 10 ) <= 350;
      },
      tri_for: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 350 && parseInt( number, 10 ) <= 400;
      },
      for_forfif: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 400 && parseInt( number, 10 ) <= 450;
      },
      forfif_fif: function() {
        var number = $(this).find('.discountedPrice').text().split("Rs")[1];
        return parseInt( number, 10 ) >= 450 && parseInt( number, 10 ) <= 500;
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
            $.post("rating.php", {PID: DATA.productID}, function(data){
                var rating = JSON.parse(data);
                console.log(rating);
                $('#numReviews').html(rating.numReviews)
                if(rating.rating)
                    $("#wrapper #star"+rating.rating).attr("checked", "checked");
                else
                    $("#wrapper #star5").attr("checked", "checked");
            });
            $("#wrapper input").unbind().on("click", function(){
                var rating = $(this).attr("id").split("star")[1];
                console.log(rating);
                console.log(DATA);
                $.post("inputRating.php", {PID: DATA.productID,rating: rating}, function(data){
                    console.log(data);
                    var ERROR = JSON.parse(data);
                    if(ERROR.message){
                        swal("Sorry", ERROR.message, "error");
                    }
                    if(ERROR.success){
                        swal("Thank you", ERROR.success, "success");
                    }
                })
            });
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
            if(DATA.size === 'FALSE'){
                $("input[name='size']").parent().parent().parent().css("display", "none");
                $("input[name='size']").parent().parent().parent().val("");
            }
            if(DATA.size === 'TRUE'){
                $("input[name='size']").parent().parent().parent().css("display", "flex");
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
        var size = $("input[name='size'").val()+"\"";
        console.log(size);
        var name = $("input[name='nameOnProduct']").val();
        var plating = $("select[name='plating']").val().split("-")[0];
        var language = $("select[name='language']").val().split("-")[0];
        var nametype = $("select[name='nametype']").val().split("-")[0];
        console.log(plating);
        console.log(language);
        console.log(nametype);
        $.post("addToCart.php", {productID: productID, product: product, quantity: quantity, price: price, nameOnProduct: name, size: size, plating: plating, language: language, nametype: nametype}, function(data){
            console.log(data);
            var DATA = JSON.parse(data);
            console.log(DATA);
            $("#numProdInCart").attr("data-notify", DATA.count);
            $("#numProdInCartmob").attr("data-notify", DATA.count);
            if(DATA.error){
                swal("Sorry", DATA.error, "error");
            }
        });
    });

    /*==================================================================
    [ Fixing session quantity ]*/
    $("input[name='num-product'], #cart-prod-plus, #cart-prod-minus").on("change click", function(){
        var quantity = $(this).parent().find("input[name='num-product']").val();
        var PID = $(this).parent().parent().parent().find(".column-2").attr("data-PID");
        console.log(quantity);
        console.log(PID);
        $.post("fixQty.php", {PID: PID, quantity: quantity}, function(data){
            console.log(data);
        });
    });

    /*==================================================================
    [ Updating Cart Total ]*/
    var subtotal = 0;
    var total = 0;
    $("td.column-5").each(function(){
        subtotal += parseInt($(this).html().split(" ")[1]);
        total = 0;
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
    $("#proceedToCheckout").on("click", function(){
        $("input[name='num-product']").each(function(){
            var quantity = $(this).parent().find("input[name='num-product']").val();
            var PID = $(this).parent().parent().parent().find(".column-2").attr("data-PID");
            console.log(quantity);
            console.log(PID);
            $.post("fixQty.php", {PID: PID, quantity: quantity}, function(data){
                console.log(data);
            });
        });
        $.post("sendTotal.php", {total: total}, function(){
        });
    });

    /*==================================================================
    [ Deleting Item From Cart ]*/
    $(".how-itemcart1").on("click", function(){
        $(this).parent().parent().addClass("removed-item");
        $(this).parent().parent().fadeOut(1000, function(){
            $(this).remove();
        })
        var PID = ($(".removed-item").find(".column-2").attr("data-PID"));
        $.post("deleteItem.php", {PID: PID}, function(data){
            console.log(data);
        });
    });
    
    /*==================================================================
    [ Edit profile Data ]*/
    $("#submitChng").on("click", function(){
        $("input").prop("disabled", true );
        var email = $("#email").val();
        var address = $("#address").val();
        var country = $("#country").val();
        var city = $("#city").val();
        var zipcode = $("#zipcode").val();
        var contact = $("#contact").val();
        $.post("editProfile.php", {email: email, address: address, country: country, city: city, zipcode: zipcode, contact: contact}, function(data){
            console.log(data);
            console.log("Account altered");
        });
    });

    /*==================================================================
    [ New Shipping address ]*/
    $("#newAddr").on("click", function(){
        $("input").prop("disabled", true );
        var email = $("#email").val();
        var address = $("#address").val();
        var country = $("#country").val();
        var city = $("#city").val();
        var zipcode = $("#zipcode").val();
        $.post("editProfile.php", {email: email, address: address, country: country, city: city, zipcode: zipcode}, function(data){
            console.log("Account altered");
        });
    });

    /*==================================================================
    [ Add giftcard ]*/
    $(".giftcardAdd").on("click", function(){
        var target = $(this).parent().parent().parent();
        var cardName = $(target).find(".title").html();
        var cardCost = $(target).find(".discountedPrice").html().split("Rs")[1];
        console.log(cardName+" "+cardCost);
        $.post("addToCart.php", {cardName: cardName, cardCost: cardCost}, function(data){
            console.log(data);
            var DATA = JSON.parse(data);
            console.log(DATA);
            $("#numProdInCart").attr("data-notify", DATA.count);
            $("#numProdInCartmob").attr("data-notify", DATA.count);
            if(DATA.error){
                swal("Sorry", DATA.error, "error");
            }
            if(DATA.success){
                swal("Giftcard" ,DATA.success, "success");
            }
        });
    });

    $(".btnPdf").on("click",function(){
        var target = $(this).parent();
        var row = $(target).parent();
        var data = $(row).find(".data").html();
        console.log(data);
        $.post("getOrderData.php", {data: data}, function(data){
            console.log(data);  
            var DATA = JSON.parse(data);
            var doc = new jsPDF();
            
            // You'll need to make your image into a Data URL
            // Use http://dataurl.net/#dataurlmaker
            var imgData = 'data:image/jpeg;base64,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';
            var doc = new jsPDF();

            doc.setFontSize(30);
            doc.addImage(imgData, 'JPEG', 20, 15, 15, 17);
            doc.text(40, 27, 'Jewel Circle');

            doc.setFontSize(13);
            doc.text(20, 50, "To:");
            doc.text(29, 50, DATA.name);
            doc.text(29, 57, DATA.address);
            doc.text(29, 64, DATA.city+","+DATA.zipcode);

            doc.text(148,50,"OrderID:");
            doc.text(166,50,DATA.orderID);
            doc.text(148,57,"Order Date:");
            doc.text(174,57,DATA.date.split(" ")[0]);

            doc.line(15, 70, 197, 70);
            doc.line(15, 70, 15, 250);
            doc.text(18, 75, "Product")
            doc.text(18, 75, "Product")
            doc.line(58, 70, 58, 250);
            doc.text(59, 75, "Plating")
            doc.text(59, 75, "Plating")
            doc.line(75, 70, 75, 250);
            doc.text(77, 75, "Language")
            doc.text(77, 75, "Language")
            doc.line(99, 70, 99, 250);
            doc.text(100, 75, "Nametype")
            doc.text(100, 75, "Nametype")
            doc.line(123, 70, 123, 250);
            doc.text(135, 75, "Name")
            doc.text(135, 75, "Name")
            doc.line(163, 70, 163, 250);
            doc.text(165, 75, "Qty")
            doc.text(165, 75, "Qty")
            doc.line(173, 70, 173, 250);
            doc.text(185, 75, "Price")
            doc.text(185, 75, "Price")
            doc.line(197, 70, 197, 250);
            doc.line(15, 77, 197, 77)
            doc.line(20, 250, 197, 250)

            var y = 85;
            var total = 0;

            for (var i = DATA.product.length - 1; i >= 0; i--) {
                doc.text(16, y, DATA.product[i].type+" "+DATA.product[i].category+"("+DATA.product[i].prodSize+")")
                doc.text(60, y, DATA.product[i].plating)
                doc.text(79, y, DATA.product[i].language)
                doc.text(103, y, DATA.product[i].nameType)
                doc.text(125, y, DATA.product[i].nameOnProduct)
                doc.text(167, y, DATA.product[i].quantity)
                doc.text(182, y, DATA.product[i].totalAmount)
                doc.line(15, y+1, 197, y+1)
                y+=7;
                total += parseInt(DATA.product[i].totalAmount); 
            }
            
            doc.text(135, 265, "Total: Rs")
            doc.text(155, 265, ""+total)
            doc.line(20,275,197,275)
            doc.setFontSize(10)
            doc.text(102,285, "Jewel Circle ®")

            doc.save('invoice.pdf');

        });
    });


})(jQuery);

function submitProduct(value){
    $("#hiddenProduct").val(value)
    $("#submitProduct").submit();
}