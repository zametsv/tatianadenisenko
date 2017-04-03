<?php get_header(); ?>
  <div class="container container_narrowest container_big-margin">
    <form class="form">
      <div class="form__item form__item_no-margin">
        <input type="text" name="firstname" placeholder="What's your name?*">
        <p class="error-message">Sorry, but this field can't be empty.</p>
      </div>
      <div class="form__item">
        <input type="text" name="email" placeholder="What's your email address?*">
        <p class="error-message">Oopps, I haven't seen emails like that.</p>
      </div>
      <div class="form__item">
        <textarea name="comment" placeholder="Want to leave any message?*" class="textarea"></textarea>
        <p class="error-message">Nothing to say at all? Really?</p>
      </div>
      <div class="form__item">
        <input type="submit" value="Send" class="submit-btn">
        <p class="error-message error-message_main">All the required fields have to be filled out.</p>
        <p class="error-message error-message_main_success">Thanks. I'll contact you ASAP!</p>
      </div>
    </form>
  </div>
<?php get_footer(); ?>