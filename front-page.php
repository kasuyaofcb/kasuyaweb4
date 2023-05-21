<?php get_header(); ?>



<main>


<!-- <?php get_template_part('pages/fv2'); ?> -->


<div class="container">
  <div class="description panel blue">
    <!-- <div><h1>Horizontal snapping sections (advanced)</h1>
      <p>Scroll vertically to scrub the horizontal animation. It also dynamically snaps to the sections in an organic way based on the velocity. The snapping occurs based on the natural ending position after momentum is applied, not a simplistic "wherever it is when the user stops". The fading/scaling happens at a consistent rate, not based on how fast you scroll.</p>
      <div class="scroll-down">Scroll down<div class="arrow"></div></div>
    </div> -->

    <?php get_template_part('pages/fv'); ?>
  </div>


  <section class="panel red">

  <?php get_template_part('pages/fv'); ?>
  </section>
  <section class="panel orange">
    TWO
  </section>
  <section class="panel purple">
    THREE
  </section>
  <section class="panel green">
    FOUR
  </section>
  <section class="panel gray">
    FIVE
  </section>

</div>

        <?php get_footer(); ?>
