<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2015 <a href="http://www.valorpublico.com/">Valor Público</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<input type="hidden" id="uri" value="<?php echo base_url(); ?>">
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.7.2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/jqueryui/jquery-ui.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/full-calendar/fullcalendar.min.js"></script>
 
<script src="<?php echo base_url(); ?>assets/admin/js/base.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/ckeditor/ckeditor.js"></script> 
<?php if ($nav_admin === "investigacion" || $nav_admin === "capacitacion"){ ?>
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery-sortable.js"></script> 
<?php }?>
<script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script> 
</body>
</html>