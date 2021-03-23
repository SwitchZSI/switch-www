<?php 
	if (!defined("SITE_ID"))
		define("SITE_ID", -1);
?>
<div class="menu-wrap">
  <div class="menu">
	<div class="elementymenu">
    <ul>
      <li class="first"><a href="home" <?php echo SITE_ID == 0 ? 'class="active"' : ''; ?>>HOME</a></li>
<!--	  <li><a href="glosowanie" <?php echo SITE_ID == 7 ? 'class="active"' : ''; ?>>Głosowanie</a></li>-->
	  <li><a href="koncert-zyczen" <?php echo SITE_ID == 4 ? 'class="active"' : ''; ?>>Koncert życzeń</a></li>
      <li><a href="audycje" <?php echo SITE_ID == 1 ? 'class="active"' : ''; ?>>Audycje</a></li>
      <li><a href="projekt" <?php echo SITE_ID == 2 ? 'class="active"' : ''; ?>>Projekt</a></li>
      <li><a href="sklad" <?php echo SITE_ID == 3 ? 'class="active"' : ''; ?>>Skład</a></li>
      <li><a href="sprzet" <?php echo SITE_ID == 5 ? 'class="active"' : ''; ?>>Sprzęt</a></li>
      <li><a href="kontakt" <?php echo SITE_ID == 6 ? 'class="active"' : ''; ?>>Kontakt</a></li>
	  <li><a target="_blank" href="http://zsi.kielce.pl/">Strona ZSI</a></li>
    </ul>
	</div>
  </div>
</div>

<div class="clearing"></div>