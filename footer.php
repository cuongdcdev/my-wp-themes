    <div class='main-footer col-xs-12'>
	  <a id="backToTop" data-original-title="TO TOP" class="btn up-arrow pull-right "  data-toggle="tooltip" title="">
	    <span class="glyphicon glyphicon-chevron-up"></span>
	  </a>
  <br><br>
  <?php 
    if(is_active_sidebar("cnn_footer")){
        dynamic_sidebar("cnn_footer");
    }
  ?>
    </div><!-- footer -->



    <!-- jQuery -->
    <script src='<?php bloginfo('template_directory');?>/js/jquery.min.js'></script>
    <script src="<?php bloginfo('template_directory')?>/js/jquery.fancybox.pack.js"></script>
    <script src='<?php bloginfo("template_directory") ;?>/js/bootstrap.min.js'></script>
    <script src='<?php bloginfo("template_directory")?>/js/main.js'></script>
    <!-- Bootstrap JavaScript -->

    <?php wp_footer();?>
</body>

</html>