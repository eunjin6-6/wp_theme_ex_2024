<?php get_header() ?>

<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo wp_logout_url(); ?>">로그아웃</a>
			<?php else : ?>
			  <?php wp_login_form() ?>
		<?php endif; ?>


  
<?php get_footer() ?>