<?php

$homeLink = $this->Html->link(
      'Home',
      [
        'controller' => 'applicants',
        'action' => 'index',
      ]
    );

?>

<div class="main-nav navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <h6 class="visible-xs">MENU</h6>
  </div>
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><?php echo $homeLink ?></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#contact">Apply</a></li>
      <li><a href="#contact">Message</a></li>
      <li><a href="#contact">News</a></li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
  </div>
</div>