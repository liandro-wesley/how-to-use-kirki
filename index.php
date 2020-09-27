
<?php get_header(); ?>

<main>
  <section class="blog">
    <div class="blog__wrap">
      <div class="blog__line">
        <div class="blog__content-read">
          <?php 
            if( have_posts() ):
              while( have_posts() ): the_post();
            ?>
              <article class="posts">
                <section class="posts__author">
                  <div class="posts__author posts__author-avatar">
                  <?php $email = get_the_author_email(); $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] ); $usegravatar = get_option('woo_gravatar');?><img src="<?php echo $grav_url; ?>" alt="Foto de Perfil do Autor" width="100" height="100"/>
                  </div>
                  <div class="posts__author posts__author-name">
                    <?php the_author_posts_link(); ?>
                  </div>
                </section>
                <!-- /posts__author -->
                <section class="posts__details">
                    <div class="posts__details-category">
                      <p><?php the_category( ' ' ); ?></p>
                    </div>
                    <div class="posts__details-date">
                      <p><span class="dashicons dashicons-calendar-alt"></span> <?php echo get_the_date(); ?></p>
                    </div>
                    <div class="posts__details-tags">
                      <p><?php the_tags( '<span class="dashicons dashicons-tag""></span> ', ', ' ); ?></p>
                    </div>
                </section>
                <!-- /posts__details -->
                <section class="posts__content">
                  <div class="posts__content-title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <article class="posts__content-text">
                    <?php the_content(); ?>
                  </article>
                </section>
                <!-- /posts__content -->
              </article>
              <!-- /posts  -->
            <?php 
              endwhile;
            else:
            ?>
            <!-- CALLBACK FOR ERROR -->
            <p>Oops! Parece que não conseguimos encontrar nenhuma publicação...</p>
          <?php endif; ?>
          <!-- /end the loop -->
        </div>
        <div class="blog__content-pagination">
          <?= the_posts_pagination(array(
            'prev_text' => __( "<span class='dashicons dashicons-arrow-left-alt2'></span>", 'kirkiexample' ),
            'next_text' => __( "<span class='dashicons dashicons-arrow-right-alt2'></span>", 'kirkiexample' ),
          )); ?>
        </div>
      </div>
      <!-- /blog__line -->
    </div>
    <!-- /blog__wrap -->
  </section>
  <!-- /blog -->
</main>

<?php get_footer(); ?>
