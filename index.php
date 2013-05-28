<?php
include_once('includes/head.php');
include_once('modules/TopSlideShow/TopSlideShow.php');
include_once('modules/NavigationBar/NavigationBar_Main.php');
include_once('modules/SocialMediaTool/SocialMediaTool.php');
include_once('modules/TopBanner/TopBanner.php');
include_once('modules/Restaurants/Restaurants.php');
include_once('modules/Restaurants/menuSBG.php');
include_once('modules/WhatsOnSlideShow/WhatsOnSlideShow.php');
include_once('modules/Causes/Causes.php');
include_once('modules/EventsScroll/EventsScroll.php');
include_once('includes/footer.php');
?>

<div class="well">
  <div id="datetimepicker1" class="input-append date">
    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });
  });
</script>