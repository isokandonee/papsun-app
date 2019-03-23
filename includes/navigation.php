<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
	  </li>
	</ul>
</div>

<div class="menu"> <span></span> </div>
<nav id="nav">
		<ul class="main">
				<li><a target="_blank" href="#">Hi There</a></li>
				<li><a target="_blank" href="#">About ME</a></li>
				<li><a href="#">Web Development</a></li>
				<li><a href="#">Digital Marketing</a></li>
				<li><a target="_blank" href="#">Portfolio</a></li>
				<li><a target="_blank" href="#">Contact</a></li>
		</ul>
</nav>
<div class="overlay"></div>

<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');

	$('#nav').toggleClass('show');

});
</script>