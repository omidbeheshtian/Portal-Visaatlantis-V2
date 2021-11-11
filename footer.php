<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
    });
    </script>
<?php wp_footer(); ?>