/* Theme Name: Worthy - Free Powerful Theme by HtmlCoder
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Version:1.0.0
 * Created:November 2014
 * License: Creative Commons Attribution 3.0 License (https://creativecommons.org/licenses/by/3.0/)
 * File Description: Place here your custom scripts
 * Custom Script Author: Gerardo Rosciano
 */
$(document).ready(function(){

    $.ajax({
      url: 'http://localhost:8888/api/getBooks',
      method: 'GET',
    }).done(function(result) {
      $("#portfolioContainer").html(result);
      console.log($('.isotope-container').length);
      if ($('.isotope-container').length>0) {
            $('.isotope-container').fadeIn();
            var $container = $('.isotope-container').isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'masonry',
                transitionDuration: '0.6s',
                filter: "*"
            });
            // filter items on button click
            $('.filters').on( 'click', 'ul.nav li a', function() {
                var filterValue = $(this).attr('data-filter');
                $(".filters").find("li.active").removeClass("active");
                $(this).parent().addClass("active");
                $container.isotope({ filter: filterValue });
                return false;
            });
    };
    }).fail(function(err) {
      throw err;
    });
});
