<?php /* Template Name: page-kontakt */ ?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<main>
        <section class="formularz">
            <form class="forme" action="kontakt">
                <h1 style="text-align: center; font-size: 40px;">
                    Formularz kontaktowy
                </h1>
                <textarea name="text" id="kontakt" placeholder="Tutaj napisz swoją wiadomość..."></textarea>
                <button class="send" type="submit"> Wyślij</button>
            </form>
        </section>
    </main>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>