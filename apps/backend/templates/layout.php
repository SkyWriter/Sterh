<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
  <div id="navigation_hover">Навигация</div>
  <div id="navigation">
    <ul style="list-style: none;">
      <li><?php echo link_to('Соискатели', 'worker/index') ?></li>
      <li><?php echo link_to('Работодатели', 'employer/index') ?></li>
      <li><hr /></li>
      <li><?php echo link_to('Регионы', 'region/index') ?></li>
      <li><?php echo link_to('Отрасли', 'branch/index') ?></li>
      <li><?php echo link_to('Cпециальности', 'speciality/index') ?></li>
      <li><?php echo link_to('Типы работы', 'job_type/index') ?></li>
    </ul>
  </div>
  <div id="content">
    <?php echo $sf_content ?>
  </div>
  <script type="text/javascript">
  <!--
    $(document).ready( function() {
      menuHideTimeout = 0;
      $('#navigation_hover, #navigation').mouseover( function () { 
        var submenu = $('#navigation');
        if (menuHideTimeout != 0) { clearTimeout(menuHideTimeout); menuHideTimeout = 0; }
        if (submenu.is(":hidden")) { submenu.slideDown(); }
      }).mouseout( function () {
        if (menuHideTimeout != 0) { clearTimeout(menuHideTimeout); }
        menuHideTimeout = setTimeout("$('#navigation').slideUp();", 750);
      });

    $('#navigation a').click(function() {
      $('#navigation').fadeOut('fast');
      return true;
    });
   });
  //-->
  </script>
  </body>
</html>
