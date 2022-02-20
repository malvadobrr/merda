<?php
$video = isset($_GET['video']) ? $_GET['video'] : '';
include("configuracao/not.php"); 
?>
<!doctype html>
<html lang="pt-br">
<head>
<title>EG - Embed Generator</title>	
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</head>
<body style="text-align: center; background-color: black">

<h1 style="color: white"><b><a href="<?php include('configuracao/url.php'); ?>">Embed Generator</a></b></h1>	
</br></br>
<form action="" method="GET">
<input type="text" size="50" name="video" value="<?php echo $video; ?>" placeholder="Link do Vídeo" required style="height: 31px">
<input class="btn btn-default" type="submit" value="Gerar Embed">
</br></br></br></br>
</form>

<?php
$video = isset($_GET['video']) ? $_GET['video'] : '';
if ($video == true){

?>

<hr><!-- Iframe Geral -->
<h3 style="color: white">IFRAME COM ANÚNCIO</h3>
<iframe src="<?php include('configuracao/url.php'); ?>geral.php?video=<?php echo base64_encode($video); ?>" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen></iframe>
<h4 style="color: white"><b>Embed</b></h4>
<div><?php if($video){echo '<textarea style="margin:10px;width: 97%;height: 80px;" onClick="this.setSelectionRange(0, this.value.length)">&lt;iframe src="'?><?php include('configuracao/url.php'); ?><?php echo 'geral.php?video='.base64_encode($video).'" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen&gt;&lt;/iframe&gt;</textarea>';}?></div>
<h4 style="color: white"><b>LinkEmbed</b></h4>
<div><?php if($video){echo '<textarea style="margin:10px;width: 97%;height: 80px;" onClick="this.setSelectionRange(0, this.value.length)">'?><?php include('configuracao/url.php'); ?><?php echo 'geral.php?video='.base64_encode($video).'</textarea>';}?></div>


<hr><!-- Player -->
<h3 style="color: white">PLAYER GERAL(MP4, M3U8, LINK)</h3>
<iframe src="<?php include('configuracao/url.php'); ?>play.php?video=<?php echo base64_encode($video); ?>" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen></iframe>
<h4 style="color: white"><b>Embed</b></h4>
<div><?php if($video){echo '<textarea style="margin:10px;width: 97%;height: 80px;" onClick="this.setSelectionRange(0, this.value.length)">&lt;iframe src="'?><?php include('configuracao/url.php'); ?><?php echo 'play.php?video='.base64_encode($video).'" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen&gt;&lt;/iframe&gt;</textarea>';}?></div>
<h4 style="color: white"><b>LinkEmbed</b></h4>
<div><?php if($video){echo '<textarea style="margin:10px;width: 97%;height: 80px;" onClick="this.setSelectionRange(0, this.value.length)">'?><?php include('configuracao/url.php'); ?><?php echo 'play.php?video='.base64_encode($video).'</textarea>';}?></div>


<hr><!-- Google Driver -->
<h3 style="color: white">GOOGLE DRIVER</h3>
<iframe src="<?php include('configuracao/url.php'); ?>gd.php?video=<?php echo base64_encode($video); ?>" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen></iframe>
<h4 style="color: white"><b>Embed</b></h4>
<div><?php if($video){echo '<textarea style="margin:10px;width: 97%;height: 80px;" onClick="this.setSelectionRange(0, this.value.length)">&lt;iframe src="'?><?php include('configuracao/url.php'); ?><?php echo 'gd.php?video='.base64_encode($video).'" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen&gt;&lt;/iframe&gt;</textarea>';}?></div>
<h4 style="color: white"><b>LinkEmbed</b></h4>
<div><?php if($video){echo '<textarea style="margin:10px;width: 97%;height: 80px;" onClick="this.setSelectionRange(0, this.value.length)">'?><?php include('configuracao/url.php'); ?><?php echo 'gd.php?video='.base64_encode($video).'</textarea>';}?></div>



<?php
}
else{
	
} 
?>	

<footer style="color: white">Todos os Direitos Reservados<a href="https://m.me/mjonoficial" target="_blank"> MJ On</a></footer>
</body>
</html>