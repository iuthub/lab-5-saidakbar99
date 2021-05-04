<?php
    $fname = $_POST["fname"];
    $section = $_POST["section"];
    $card = $_POST["card"];
    $card_type = $_POST["rbtn"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $fname;
                    if (empty($fname)){
                        header('Location: sorry.php');
                    }
			?></dd>

			<dt>Section</dt>
			<dd><?php echo $section;
                if (empty($section)){
                    header('Location: sorry.php');
                }
			?></dd>

			<dt>Credit Card</dt>
			<dd><?php echo $card;
                if (empty($card)){
                    header('Location: sorry.php');
                }
			?>

                <?php echo $card_type;
                if (empty($card_type)){
                    header('Location: sorry.php');
                }
                ?>
            </dd>
		</dl>
	</body>
</html>
<?php
$file = fopen("sucker.txt","a");
fwrite($file,$fname);
fwrite($file,";".$section);
fwrite($file,";".$card);
fwrite($file,";".$card_type. "\n");
fclose($file);
print file_get_contents("sucker.txt");


?>