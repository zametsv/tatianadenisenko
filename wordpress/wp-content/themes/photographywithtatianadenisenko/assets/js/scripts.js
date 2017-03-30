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

//paying with images in portfolio
