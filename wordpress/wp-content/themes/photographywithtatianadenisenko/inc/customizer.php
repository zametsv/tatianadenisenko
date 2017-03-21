<?php
  function td_customize_register($wp_customize){
    $wp_customize->add_section('showcase', array(
      'title'       =>  __('Showcase', 'photographywithtatianadenisenko'),
      'description' =>  sprintf( __('Options for showcase area', 'photographywithtatianadenisenko')),
      'priority'    =>  130,
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'     =>  get_bloginfo('template_directory') . '/assets/images/main-hero-image.jpg',
      'type'        =>  'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'       =>  __('Hero image', 'photographywithtatianadenisenko'),
      'section'     =>  'showcase',
      'settings'    =>  'showcase_image',
      'priority'    =>  1,
    )));
  }

  add_action('customize_register', 'td_customize_register');