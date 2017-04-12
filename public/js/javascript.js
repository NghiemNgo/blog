//$(document).ready(function(){
//    $(window).bind('scroll', function() {
//      var distance = 300;
//      if ($(window).scrollTop() > distance) {
//        header.style.backgroundColor = '#002E5B';
//      }
//      else {
//        header.style.backgroundColor = 'transparent';
//      }
//      if ($(window).scrollTop() > 700) {
//          $('body').addClass('scrolled');
//      } else {
//          $('body').removeClass('scrolled');
//      }
//    });
//    $('.section-third-page').click(function () {
//    $('iframe.maps').css("pointer-events", "auto");
//    });
//    $( ".section-third-page" ).mouseleave(function() {
//      $('iframe.maps').css("pointer-events", "none"); 
//    });
//    $(function() {
//        $('#colorselector').change(function(){
//            $('.colors').hide();
//            $('#' + $(this).val()).show();
//        });
//    });
//});

//preview image before uploaded
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $('#news-page-image1')
            .attr('src', e.target.result);
        };
       reader.readAsDataURL(input.files[0]);
    }
    return true;
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $('#news-page-image2')
            .attr('src', e.target.result);
        };
       reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $('#news-page-image3')
            .attr('src', e.target.result);
        };
       reader.readAsDataURL(input.files[0]);
    }
}
function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $('#news-page-image4')
            .attr('src', e.target.result);
        };
       reader.readAsDataURL(input.files[0]);
    }
}
//HomeCategories.index.plade.php
function checkTopPage() {
        var smallTitle = document.getElementById("top_page_small_title").value;
        var bigTitle = document.getElementById("top_page_big_title").value;
        var content = document.getElementById("top_page_content").value;
        var slogan = document.getElementById("top_page_slogan").value;
        document.getElementById("top-page-small-title").innerHTML = smallTitle;
        document.getElementById("big-title").innerHTML = bigTitle;
        document.getElementById("top-page-content").innerHTML = content;
        document.getElementById("slogan").innerHTML = slogan;
}
function checkProductsPage() {
        var smallTitle = document.getElementById("products_page_small_title").value;
        var bigTitle = document.getElementById("products_page_big_title").value;
        var content = document.getElementById("products_page_content").value;
        var title1 = document.getElementById("products_page_title1").value;
        var content1 = document.getElementById("products_page_content1").value;
        var title2 = document.getElementById("products_page_title2").value;
        var content2 = document.getElementById("products_page_content2").value;
        var title3 = document.getElementById("products_page_title3").value;
        var content3 = document.getElementById("products_page_content3").value;
        var title4 = document.getElementById("products_page_title4").value;
        var content4 = document.getElementById("products_page_content4").value;
        document.getElementById("products-page-small-title").innerHTML = smallTitle;
        document.getElementById("products-page-big-title").innerHTML = bigTitle;
        document.getElementById("products-page-content").innerHTML = content;
        document.getElementById("products-page-icon-title1").innerHTML = title1;
        document.getElementById("products-page-content1").innerHTML = content1;
        document.getElementById("products-page-icon-title2").innerHTML = title2;
        document.getElementById("products-page-content2").innerHTML = content2;
        document.getElementById("products-page-icon-title3").innerHTML = title3;
        document.getElementById("products-page-content3").innerHTML = content3;
        document.getElementById("products-page-icon-title4").innerHTML = title4;
        document.getElementById("products-page-content4").innerHTML = content4;
}

function checkNewsPage() {
        var smallTitle = document.getElementById("news_page_small_title").value;
        var bigTitle = document.getElementById("news_page_big_title").value;
        var title1 = document.getElementById("news_page_title1").value;
        var content1 = document.getElementById("news_page_content1").value;
        var title2 = document.getElementById("news_page_title2").value;
        var content2 = document.getElementById("news_page_content2").value;
        var title3 = document.getElementById("news_page_title3").value;
        var content3 = document.getElementById("news_page_content3").value;
        var title4 = document.getElementById("news_page_title4").value;
        var content4 = document.getElementById("news_page_content4").value;
        document.getElementById("news-page-small-title").innerHTML = smallTitle;
        document.getElementById("news-page-big-title").innerHTML = bigTitle;
        document.getElementById("news-page-title1").innerHTML = title1;
        document.getElementById("news-page-content1").innerHTML = content1;
        document.getElementById("news-page-title2").innerHTML = title2;
        document.getElementById("news-page-content2").innerHTML = content2;
        document.getElementById("news-page-title3").innerHTML = title3;
        document.getElementById("news-page-content3").innerHTML = content3;
        document.getElementById("news-page-title4").innerHTML = title4;
        document.getElementById("news-page-content4").innerHTML = content4;
}
function checkAboutUsPage() {
        var smallTitle = document.getElementById("about_us_small_title").value;
        var bigTitle = document.getElementById("about_us_big_title").value;
        var content = document.getElementById("about_us_content").value;
        document.getElementById("about-us-small-title").innerHTML = smallTitle;
        document.getElementById("about-us-big-title").innerHTML = bigTitle;
        document.getElementById("about-us-content").innerHTML = content;
}
function checkRecruit() {
        var smallTitle = document.getElementById("recruit_small_title").value;
        var content = document.getElementById("recruit_content").value;
        document.getElementById("recruit-small-title").innerHTML = smallTitle;
        document.getElementById("recruit-content").innerHTML = content;
}
function checkWorkPlace(){
    var smallTitle = document.getElementById("workplace_small_title").value;
    document.getElementById("workplace-small-title").innerHTML = smallTitle;
}
function checkCustomer(){
    var smallTitle = document.getElementById("customer_small_title").value;
    document.getElementById("customer-small-title").innerHTML = smallTitle;
}

