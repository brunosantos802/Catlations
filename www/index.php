<!DOCTYPE html>
<html lang="en" style="height: 100%;">

	<head>
        	<link rel="icon" type="image/png" href="./favicon/favicon.png"/>
        	<title>Catlations</title>
    	</head>

    		<body bgcolor="#008080" text="white" style="cursor: url('./cursor/cursor.png'), auto; height: 100%; margin: 0;">

		<!--HEADER -->
	        <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
	        	<tr height="100%">
                	<td align="center" valign="top">
                    	<br>
                    	<h1 style="font-size: 50px">THE BOOK OF CATLATIONS</h1>

                    	<br>

			<!-- CAT IMAGE -->
                    	<table cellpadding="0" cellspacing="0" border="0" width="100%">
                        	<tr><td align="center">
                            	<?php
                                	$image = trim(shell_exec('python3 ../scripts/rand_img.py'));
                               		echo "<img src=\"./image/$image\">";
                            	?>
                        	</td></tr>
                    	</table>

                    	<br>

			<!-- QUOTE -->
                    	<table cellpadding="0" cellspacing="0" border="0" width="1500">
                        	<tr><td align="center">
                            		<h2 style="white-space: pre-line;">
                            		<?php echo shell_exec('bash ../scripts/get_quote.sh'); ?>
                            		</h2>
                        	</td></tr>
                    	</table>
			</td>
            		</tr>

			<!-- EXTRA STUFF HERE -->
                	<tr>
                    	<td align="center">
                        	<h3>____________________________________________________________<h3>
				<h4>No Cats Were Harmed In The Making Of This Webpage</h4>
			</td>
                	</tr>

			<!-- FOOTER -->
			<tr>
                	<td align="center" valign="bottom">
                    	<footer>
                        	<small>
                            		<p>Powered by fortune-mod</p>
                            		<a href="https://github.com/shlomif/fortune-mod/tree/master" target="_blank">Visit Their Official Repo!</a>
                        	</small>
                    	</footer>
                    	<br>
                	</td>
            	</tr>
        	</table>

	</body>
</html>
