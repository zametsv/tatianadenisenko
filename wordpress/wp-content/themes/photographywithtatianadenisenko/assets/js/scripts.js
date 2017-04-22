//remove class from wp-caption
jQuery(".wp-caption").removeAttr("style");

//lightbox opener and close
jQuery(".header__nav-link_open-modal-lb").on("click", function(){
  jQuery(".modal").addClass("modal__is-visible");
  return false;
});
jQuery(".modal__close-btn").on("click", function(){
  jQuery(".modal").removeClass("modal__is-visible");
  return false;
});

//navigation on hover script
jQuery(".header__nav-link").on("mouseover", function(){
  jQuery(".header__nav-link").not(this).addClass("nav-link_hover");
});
jQuery(".header__nav-link").on("mouseleave", function(){
  jQuery(".header__nav-link").removeClass("nav-link_hover");
});

//modal menu hover script
jQuery(".modal__nav-link").on("mouseover", function(){
  jQuery(".modal__nav-link").not(this).addClass("modal-link_hover");
});
jQuery(".modal__nav-link").on("mouseleave", function(){
  jQuery(".modal__nav-link").removeClass("modal-link_hover");
});

//revealing burger menu
jQuery(function(){
  jQuery(".header__nav_mobile-btn").on("click", function(){
    jQuery(".burger").toggleClass("burger_show");
  });
  jQuery(".burger__close-btn").on("click", function(){
    jQuery(".burger").toggleClass("burger_show");
  });
});

//revealing items in burger menu
jQuery(function(){
  jQuery(".burger__nav-link_click-item").on("click", function(){
    jQuery(".burger__nav-wrap_hidden-menu").toggleClass("open-menu");
    jQuery(".burger__nav-link_color").toggleClass("color-change");
  });
});

//form validation
//  jQuery(document).ready(function(){
//   jQuery(".submit-btn").click(function(e){
//     e.preventDefault();
//     var firstname = jQuery( ".firstname" ).val();
//     var email = jQuery(".email").val();
//     var comment = jQuery(".textarea").val();
//     var ajaxUrl = "/wp-admin/admin-ajax.php";

//     if(name === "" || email === "" || comment === "") {
//       jQuery(".val-error, .error-message").show();
//       jQuery("html, body").animate({
//         scrollTop: jQuery(".val-error").offset().top
//     }, 700)
//     }
//     else {
//       jQuery.ajax({
//         url: ajaxUrl, 
//         method:"POST",
//         data: {
//             firstname: firstname, 
//             email: email,
//             comment: comment,
//             action: 'validate_form'
//         },
//         success: function(data) {
//           jQuery("form").trigger("reset");
//           jQuery(".val-success").show(fast);
//         }
//       });
//     }
//   });
// });
