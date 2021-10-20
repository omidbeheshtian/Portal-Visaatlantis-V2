<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/popper.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/select2.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>