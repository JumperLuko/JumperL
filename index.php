        <?php get_header(); ?>
        <div class="content fcol-12 h4 wrap" style="padding:0;" title="Escolha um serviço de qualidade!">
            <p class="fcol-12 h3 center"style="padding:2vw 5vw;">Desenvolvimento de inteface agrádavel e eficiênte para site (web design).</p>
            <?php $my_query = new WP_Query( 'category_name=Produtos&orderby=menu_order' );
                while ( $my_query->have_posts() ) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                <div class="col-6 col-b-4 product"><?php the_content(); ?></div>
            <?php endwhile; ?>
        </div>
        <!-- <iframe class="col-12" style="height:90vh;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d161859.3053557954!2d-48.868497969347!3d-26.306444114432313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dea3f39db1ab37%3A0xbc4b989df161e9fa!2sJoinville+-+SC!5e0!3m2!1spt-BR!2sbr!4v1528855096014" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <?php if ( is_active_sidebar( 'footer' ) ) : dynamic_sidebar( 'footer' ); endif; ?>
        <?php //wp_footer(); ?>
    </body>
</html>
