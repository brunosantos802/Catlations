<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" type="image/png" href="./image/favicon.png"/>
		<title>Website title</title>
	</head>
	<body bgcolor="#008080" text="white">

		<!-- <p> <font color="red"><marquee> TEXT </marquee></font></p> -->

		<center><h1>HEADER</h1></center>

		<br></br>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr><td align="center">
				<!-- <?php echo '<img src=./image/archer.gif>'?> -->
				<!-- $image = "<?php echo shell_exec('echo "$(python3 rand_img.py)"'); ?>" -->
				<?php
					$image = trim(shell_exec('python3 ../script/rand_img.py'));
					 echo "<img src=\"./image/$image\">";
				?>
			</td></tr>
		</table>

		<br></br>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr><td align="center">
			<h3>
			<?php echo shell_exec('bash ../script/fortune_teller.sh'); ?>
			<h3>
                        </td></tr>
		</table>

		<h3><center> STRING 1</center></h3>
		<p><center>STRING 2</center></p>

	</body>

	<footer>
		<small><center>
    		<p>Powered by fortune-mod</p>
		<a href="https://github.com/shlomif/fortune-mod/tree/master" target="_blank">Visit Their Official Repo!</a>
		</center></small>
	</footer>
</html>
