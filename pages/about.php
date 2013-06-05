<div class="h1BG"></div>
<h1>About</h1>
<div class="contentArea lightBG">
	<p>My name is Tracey Heckler, and I'm a software engineer. In my spare time, I'm currently working on a small game.</p>
	<p>My full CV: </p>
	<?php /*require('resources/Resume.htm')*/ ?>
</div>
<script>
	//remove my name from resume
	$("p:contains('Tracey M.')").remove();
	//remove my address from resume
	$("p:contains('237 Jacksonville')").remove();
</script>