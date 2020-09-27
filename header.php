<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= bloginfo('description');?> - <?= bloginfo('title'); ?></title>
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <style>
      :root{
        --color-primary: #2764F1;
        --title-h1: 36px;
      }
      .color-primary{
        background-color: var(--color-primary) !important;
      }
      .title-h1{
        font-size: var(--title-h1) !important;
      }
    </style>
    <?php wp_head(); ?>
  </head>
  <body <?= body_class(); ?>>
    <header>
      <section class="head__wrap color-primary">
        <article class="head__line">
          <h1><?= bloginfo('description'); ?></h1>
          <a href="https://kirki.org/" target="_blank"><img src="https://kirki.org/wp-content/uploads/2020/04/kirki-logo-white-1.png" alt="O Kirki Customizer Framework"></a>
        </article>
      </section>
    </header>