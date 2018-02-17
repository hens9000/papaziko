<!DOCTYPE html>
<html lang="en">
<head>
     <?php get_meta($meta)?>
     <title><?php echo $title?></title>
     <?php 
     get_css($css);
     get_js($jsh);
     ?>
</head>
<body>
<?php 
foreach($led as $ledrow){$this->load->view('_frontend/'.$ledrow);}
get_js($jsf);
?>
</body>
</html>