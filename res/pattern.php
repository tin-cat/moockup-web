<!DOCTYPE HTML>
<head>
	<title><?= $title ? $title : "Moockup" ?></title>
	<meta name="description" content="<?= $description ? $description : "A web tool by Tin.cat to present drafts, designs or mockups to your client professionally while keeping control of the way it's presented, bringing back the 'wow' effect your work deserves." ?>" />
	<meta name="keywords" content="<?= $keywords ? $keywords : "mockup,draft,web,wireframe,client,present,presenter,tool,javascript" ?>" />
	<meta name="distribution" CONTENT="global" />
	<link rel="canonical" href="https://moockup.tin.cat" />
	<link rel="stylesheet" type="text/css" href="res/css/main.css?v=8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="moockup/moockup.min.css"/>
	<script type="text/javascript" src="moockup/moockup.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>
<body>

<?= $header ? "<header><h1>$header</h1>".($headerSubtitle ? "<h2>$headerSubtitle</h2>" : null)."".($headerSubSubtitle ? "<h3>$headerSubSubtitle</h3>" : null)."</header>" : null ?>

<?= $mosaic ? $mosaic : null ?>

<?= $content ? $content : null ?>

<?= $footer ? "<div class=\"footer\">$footer</div>" : null ?>

<?php if (file_exists("res/additional_footer.php")) include "res/additional_footer.php"; ?>

</body>
</html>