<?php include('configuracao/popup.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Play</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1 user-scalable=no" />
		<script type="text/javascript" src="java/FWDEVPlayer.js"></script>
		<script src="js/block.js"></script>
		<!-- Setup EVP -->
		<script type="text/javascript">
			FWDEVPUtils.onReady(function(){

				FWDEVPlayer.videoStartBehaviour = "pause";
				
				new FWDEVPlayer({		
					//main settings
					instanceName:"player1",
					parentId:"myDiv",
					mainFolderPath:"content",
					skinPath:"classic_skin_dark",
					initializeOnlyWhenVisible:"no",
					displayType:"fullscreen", 
					autoScale:"yes",
					fillEntireVideoScreen:"no",
					openDownloadLinkOnMobile:"no",
					useHEXColorsForSkin:"no",
					normalHEXButtonsColor:"#FF0000",
					selectedHEXButtonsColor:"#FFFFFF",
					privateVideoPassword:"428c841430ea18a70f7b06525d4b748a",
					startAtTime:"",
					stopAtTime:"",
					startAtVideoSource:2,
					videoSource:[
						{source:"<?=base64_decode($_GET['video']);?>", label:"auto"}
					],
					posterPath:", ",
					showErrorInfo:"yes",
					fillEntireScreenWithPoster:"yes",
					rightClickContextMenu:"developer",
					disableDoubleClickFullscreen:"no",
					useChromeless:"no",
					showPreloader:"yes",
					addKeyboardSupport:"yes",
					autoPlay:"no",
					loop:"no",
					scrubAtTimeAtFirstPlay:"00:00:00",
					maxWidth:600,
					maxHeight:380,
					volume:.8,
					greenScreenTolerance:200,
					backgroundColor:"#000000",
					posterBackgroundColor:"",
					//logo settings
					showLogo:"no",
					hideLogoWithController:"yes",
					logoPosition:"topRight",
					logoLink:"",
					logoMargins:5,
					//controller settings
					showController:"yes",
					showControllerWhenVideoIsStopped:"yes",
					showVolumeScrubber:"yes",
					showVolumeButton:"yes",
					showTime:"yes",
					showQualityButton:"yes",
					showSubtitleButton:"yes",
					showShareButton:"no",
					showEmbedButton:"no",
					showDownloadButton:"yes",
					showFullScreenButton:"yes",
					repeatBackground:"no",
					controllerHeight:43,
					controllerHideDelay:3,
					startSpaceBetweenButtons:11,
					spaceBetweenButtons:11,
					mainScrubberOffestTop:15,
					scrubbersOffsetWidth:2,
					timeOffsetLeftWidth:1,
					timeOffsetRightWidth:2,
					volumeScrubberWidth:80,
					volumeScrubberOffsetRightWidth:0,
					timeColor:"#bdbdbd",
					youtubeQualityButtonNormalColor:"#888888",
					youtubeQualityButtonSelectedColor:"#FFFFFF",
					//cuepoints
					executeCuepointsOnlyOnce:"no",
					//annotations
					annotiationsListId:"none",
					showAnnotationsPositionTool:"no",
					//subtitles
					showSubtitleButton:"no",
					subtitlesOffLabel:"Subtitle off",
					startAtSubtitle:1,
					subtitlesSource:[
						{subtitlePath:"", subtileLabel:""},
						{subtitlePath:"", subtileLabel:""},
						{subtitlePath:"", subtileLabel:""}
					],
					//audio visualizer
					audioVisualizerLinesColor:"#0099FF",
					audioVisualizerCircleColor:"#FFFFFF",
					//advertisement on pause window
					aopwTitle:"Advertisement",
					aopwSource:"",
					aopwWidth:400,
					aopwHeight:240,
					aopwBorderSize:6,
					aopwTitleColor:"#FFFFFF",
					//playback rate / speed
					showPlaybackRateButton:"yes",
					defaultPlaybackRate:"1", //0.25, 0.5, 1, 1.25, 1.5, 2
					//embed window
					embedWindowCloseButtonMargins:0,
					borderColor:"#333333",
					mainLabelsColor:"#FFFFFF",
					secondaryLabelsColor:"#a1a1a1",
					shareAndEmbedTextColor:"#5a5a5a",
					inputBackgroundColor:"#000000",
					inputColor:"#FFFFFF"
					
				});
			});
		</script>
		
	</head>

	<body style="background-color:#aaaaaa;">
		
		<div id="myDiv" style="margin:auto;"></div>
	</body>
	
	</body>

</html>