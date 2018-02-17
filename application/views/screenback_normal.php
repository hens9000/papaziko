<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php echo $title?></title>
     <?php 
     get_css($css);
     get_js($jsh);
     ?>
</head>
<body>
<?php 
foreach($led as $ledrow){$this->load->view('_backend/'.$ledrow);}
get_js($jsf);
?>
</body>
</html>