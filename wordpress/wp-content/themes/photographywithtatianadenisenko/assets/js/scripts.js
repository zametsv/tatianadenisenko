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

//revealing burger menu
jQuery(".header__nav_mobile-btn").on("click", function(){
  jQuery(".burger").addClass("burger_show");
});
jQuery(".burger__close-btn").on("click", function(){
  jQuery(".burger").removeClass("burger_show");
});

//revealing items in burger menu
jQuery(".burger__nav-link_click-item").on("click", function(){
  jQuery(".burger__nav-wrap-item_hidden").addClass("burger__nav-wrap-item_show");
  jQuery(".burger__nav-link_color").addClass("burger__nav-link_color-change");
  jQuery(".burger__nav-link_click-item").on("click", function(){
    jQuery(".burger__nav-wrap-item_hidden").removeClass("burger__nav-wrap-item_show");
    jQuery(".burger__nav-link_color").removeClass("burger__nav-link_color-change");
  });
});