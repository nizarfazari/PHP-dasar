<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
	<style type="text/css">
		.warna{
			background-color: gold
		}
	</style>
</head>
<body>
<!-- td = kolom 
	 tr = baris -->

<table border="1" cellpadding="10" cellspacing="0">
	<?php for( $a = 1; $a < 5; $a++) : ?>
		<?php if($a % 2 == 0 ) : ?>
		<tr class="warna">
		<?php else : ?>
		<tr>
		<?php endif; ?>

			<?php for( $b = 1;$b < 3;$b++) : ?>
				<td>
					<?php  echo "$a,$b"?>
				</td>
			<?php endfor; ?>
		</tr>	
	<?php endfor; ?>
		
</table>

</body>
</html>