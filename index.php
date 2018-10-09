<?php

	include "res/common.php";

	// Moockup demo
	$content .= "
		<div id=\"moockupDemo\"></div>
		<script>
			$('#moockupDemo').Moockup({
				resBaseDir: 'moockup/res/',
				setupFileName: 'moockup_home.json'
			});
		</script>
	";

	$content .= "
		<div class=\"contentWrapper\"><div class=\"content\">
			<a name=\"basicUsage\"></a>
			<h1>Key features</h1>
			<ul class=\"fancy\">
				<li>Keep control of the way your client sees your drafts and mockups.</li>
				<li>Choose between desktop/laptop, phone and tablet themes for your mockups, and combine them in multiple screens.</li>
				<li>Upload your presentation to your web server and share the URL for easy access, no PHP nor database needed.</li>
			</ul>
		</div></div>

		<hr>

		<div class=\"contentWrapper\"><div class=\"content\">
			<a name=\"howto\"></a>
			<h1>How to create your Moockup</h1>
			<ul class=\"fancy\">
				<li>
					Download <a href=\"https://github.com/tin-cat/moockup\">Moockup</a> and unzip it.
				</li>
				<li>
					Copy your mockup PNG or JPG files inside the <i>images</i> folder.
				</li>
				<li>
					Edit the <i>setup.json</i> file to your needs. Take a look at the default provided file or read the <a href=\"#jsonfile\">setup.json documentation</a> section to discover all the available options.
				</li>
				<li>
					Preview your Moockup locally by opening the <i>index.html</i> file in your browser
				</li>
				<li>
					Upload the entire folder to your server and it's ready to share!
				</li>
			</ul>
		</div></div>

		<hr>

		<div class=\"contentWrapper\"><div class=\"content\">
			<a name=\"jsonfile\"></a>
			<h1>Setup.json documentation</h1>
			<p>
				The setup.json contains all the specs of your Moockup: Edit it to compose your Moockup, and preview it by opening the <i>index.html</i> locally in your browser.
			</p>
			<p>
				If you're familiar with the JSON format, take a look at the provided <i>setup.json</i> file and you'll easily understand how it works. If you don't know what JSON is, don't worry, it's quite easy to learn and you'll be creating your Moockups in no time.
			</p>
			<p>
				First, some basics you should understand:
			</p>
			<p><b>Your Moockup can be divided in multiple screens. The user can navigate between screens using the top menu:</b></p>

			<div id=\"moockupCodeDemoMultipleScreens\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoMultipleScreens').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Screen 1',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									}
								]
							},
							{
								'title': 'Screen 2',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/subsection_desktop.jpg'
									}
								]
							},
							{
								'title': 'Screen 3',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									}
								]
							}
						]
					}
				});
			</script>

			<p><b>Each screen can have more than one mockups:</b></p>

			<div id=\"moockupCodeDemoMultipleMockups\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoMultipleMockups').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Screen 1',
								'mockups': [
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/home_mobile.jpg',
										'notchBackgroundColor': '#fff'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/subsection_mobile.jpg',
										'notchBackgroundColor': '#fff'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/another_section_mobile.jpg',
										'notchBackgroundColor': '#333'
									}
								]
							}
						]
					}
				});
			</script>

			<p><b>Each mockup in your screens can be of any of the different available types:</b></p>

			<div id=\"moockupCodeDemoMultipleTypes\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoMultipleTypes').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Screen 1',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									},
									{
										'type': 'MacBook',
										'image': 'moockup/images/home_desktop.jpg'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/another_section_mobile.jpg',
										'notchBackgroundColor': '#333'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				Now, let's start creating your Moockup. This <i>setup.json</i> file is a very minimal example of a Moockup containing only one screen, with only one mockup:
			</p>

			<code class=\"isolated html\">".formatHtml("
{
	\"screens\": [
		{
			\"title\": \"Home\",
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/mockup.jpg\"
				}
			]
		}
	]
}
			")."</code>

			<p>
				The title of the screen is <i>\"Home\"</i>, and the only mockup it contains is a <i>\"MacDesktop\"</i> type mockup, and the image of the mockup is <i>\"images/mockup.jpg\"</i>. Got it? A Moockup with this <i>setup.json</i> would like this:				
			</p>

			<div id=\"moockupCodeDemoStep1\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoStep1').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Home',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				Now let's add another mockup:
			</p>

			<code class=\"isolated html\">".formatHtml("
{
	\"screens\": [
		{
			\"title\": \"Home\",
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/mockup.jpg\"
				},
				[b]{
					\"type\": \"iPhoneXPortrait\",
					\"image\": \"images/mockup_mobile.jpg\",
					\"notchBackgroundColor\": \"#fff\"
				}[/b]
			]
		}
	]
}
			")."</code>

			<p>
				The iPhone X has a notch at the top. To accomodate for this, you should specify the <i>\"notchBackgroundColor\"</i> item. This makes mockups for devices with notches look really cool.
			</p>

			<p>
				It would like this:
			</p>

			<div id=\"moockupCodeDemoStep2\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoStep2').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Home',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/home_mobile.jpg',
										'notchBackgroundColor': '#fff'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				See how we did it? Simply adding another <span class=\"inlineCode\">{ &hellip; }</span> block inside the <span class=\"inlineCode\">\"mockups\": [ &hellip; ]</span> block was enough. This time it's an <i>\"iPhoneXPortrait\"</i> type mockup, and the image is <i>\"images/mockup_mobile.jpg\"</i>. You can add more mockups to each screen, but more than 3 or 4 might look too crumpled.
			</p>

			<p>
				Pay special attention to commas: When you have multiple <span class=\"inlineCode\">{ &hellip; }</span> blocks, they must be separated by commas.
			</p>

			<p>
				Now let's add another screen to your Moockup, take a look:
			</p>

			<code class=\"isolated html\">".formatHtml("
{
	\"screens\": [
		{
			\"title\": \"Home\",
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/mockup.jpg\"
				},
				{
					\"type\": \"iPhoneXPortrait\",
					\"image\": \"images/mockup_mobile.jpg\",
					\"notchBackgroundColor\": \"#fff\"
				}
			]
		},
		[b]{
			\"title\": \"About us\",
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/about_us.jpg\"
				}
			]
		}[/b]
	]
}
			")."</code>

			<p>
				See? This time we've added an entire screen block instead of a mockup block. This new screen is titled <i>\"About us\"</i> and it contains one mockup. It will look like this:
			</p>

			<div id=\"moockupCodeDemoStep3\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoStep3').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Home',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/home_mobile.jpg',
										'notchBackgroundColor': '#fff'
									}
								]
							},
							{
								'title': 'About us',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/subsection_desktop.jpg'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				See how a menu appeared at the top? Now the user can navigate through the screens in your Moockup. You can add as many screens as you need, but take into account loading times of your mockup JPGs and PNGs, remember your client will see this as a webpage on his browser, via his internet connection!
			</p>

			<p>
				If you're not fluent in JSON, take special care also with the <span class=\"inlineCode\">{ &hellip; }</span> and <span class=\"inlineCode\">[ &hellip; ]</span> brackets. See how in the examples we never forget to close them, even when we have bracket blocks inside other bracket blocks!
			</p>

			<p>
				Now that you've got the basics, let's take a look at some interesting customization options. First, let's set a background color for each screen. Do it simply by adding a <i>\"backgroundColor\"</i> item to the screen block you want to customize:
			</p>

			<code class=\"isolated html\">".formatHtml("
{
	\"screens\": [
		{
			\"title\": \"Home\",
			[b]\"backgroundColor\": \"#E01A4F\",[/b]
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/mockup.jpg\"
				},
				{
					\"type\": \"iPhoneXPortrait\",
					\"image\": \"images/mockup_mobile.jpg\",
					\"notchBackgroundColor\": \"#fff\"
				}
			]
		},
		{
			\"title\": \"About us\",
			[b]\"backgroundColor\": \"#F15946\",[/b]
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/about_us.jpg\"
				}
			]
		}
	]
}
			")."</code>

			<div id=\"moockupCodeDemoStep4\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoStep4').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Home',
								'backgroundColor': '#E01A4F',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/home_mobile.jpg',
										'notchBackgroundColor': '#fff'
									}
								]
							},
							{
								'title': 'About us',
								'backgroundColor': '#F15946',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/subsection_desktop.jpg'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				Sometimes you might need to add a title to a mockup, just to give some context to the viewer. You can do so by adding the <i>\"title\"</i> item to the mockup block, like this:
			</p>

			<code class=\"isolated html\">".formatHtml("
			{
				\"screens\": [
					{
						\"title\": \"Home\",
						\"mockups\": [
							{
								\"type\": \"MacDesktop\",
								\"image\": \"images/mockup.jpg\",
								[b]\"title\": \"Home\"[/b]
							},
							{
								\"type\": \"iPhoneXPortrait\",
								\"image\": \"images/mockup_mobile.jpg\",
								\"notchBackgroundColor\": \"#fff\",
								[b]\"title\": \"Sub section\"[/b]
							}
						]
					},
					{
						\"title\": \"About us\",
						\"mockups\": [
							{
								\"type\": \"MacDesktop\",
								\"image\": \"images/about_us.jpg\",
								[b]\"title\": \"About us\"[/b]
							}
						]
					}
				]
			}
						")."</code>

			<p>
				And it looks like this:
			</p>

			<div id=\"moockupCodeDemoStep5\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoStep5').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'screens': [
							{
								'title': 'Home',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg',
										'title': 'Home'
									},
									{
										'type': 'iPhoneXPortrait',
										'image': 'moockup/images/home_mobile.jpg',
										'notchBackgroundColor': '#fff',
										'title': 'Sub section'
									}
								]
							},
							{
								'title': 'About us',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/subsection_desktop.jpg',
										'title': 'About us'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				There are some additional items you can add at the root level of the JSON structure to customize your Moockup, take a look a this example featuring all of them with self-explanatory names:
			</p>

			<code class=\"isolated html\">".formatHtml("
{
	[b]\"pageTitle\": \"The title of the page\",
	\"headerTitle\": \"The message that appears on top of your Moockup\",
	\"footer\": \"A footer message that will appear at the bottom of your Moockup\",
	\"backgroundColor\": \"#E01A4F\",[/b] // A global background color for all screens
	\"screens\": [
		{
			\"title\": \"Home\",
			\"mockups\": [
				{
					\"type\": \"MacDesktop\",
					\"image\": \"images/mockup.jpg\"
				}
			]
		}
	]
}
			")."</code>

			<div id=\"moockupCodeDemoStep6\" class=\"codeDemo\"></div>
			<script>
				$('#moockupCodeDemoStep6').Moockup({
					resBaseDir: 'moockup/res/',
					setup: {
						'headerTitle': 'The message that appears on top of your Moockup',
						'footer': 'A footer message that will appear at the bottom of your Moockup',
						'screens': [
							{
								'title': 'Home',
								'backgroundColor': '#E01A4F',
								'mockups': [
									{
										'type': 'MacDesktop',
										'image': 'moockup/images/home_desktop.jpg'
									}
								]
							}
						]
					}
				});
			</script>

			<p>
				That should give you tools enough to customize your Moockup in lots of different ways. Let's impress your clients the next time you present them your work!
			</p>

		</div>

		<hr>

		<div class=\"contentWrapper\"><div class=\"content\">
			<a name=\"advancedusage\"></a>
			<h1>Advanced usage as a jQuery plugin</h1>
			<p>
				Moockup has been prepared to be extremely easy to setup for easy to share, fullscreen presentations, but it can be used as a jQuery plugin to embed Moockups in more complex scenarios, like the example Moockup you can see at the top of this page. For advanced users, here's how to use Moockup as a jQuery plugin in your project:
			</p>

			<p>
				Include the jQuery library and the <i>moockup.min.js</i> + <i>moockup.min.css</i> files in your head section.
			</p>

			<code class=\"isolated html\">".formatHtml("
<html>
<head>
	[b]<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
	<script src=\"moockup.min.js\"></script>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"moockup.min.css\" />[/b]
</head>
<body>
	...
			")."</code>

			<p>
				Create an empty div in your HTML where you want your Moockup to appear. Assign it a unique id:
			</p>

			<code class=\"isolated html\">".formatHtml("
<div id=\"moockup\"></div>
			")."</code>

			<p>
				Call the Moockup jQuery plugin on your div:
			</p>

			<code class=\"isolated html\">".formatHtml("
<script>
	[b]$('#moockup').Moockup();[/b]
</script>
			")."</code>

			<p>
				This will create your Moockup, but it will still work like a regular Moockup by reading the file <i>setup.json</i>. The interesting part is that you can now pass some additional options to the Moockup jQuery plugin:
			</p>

		</div>

		<hr>

		<div class=\"contentWrapper\"><div class=\"content\">

			<a name=\"jquery_plugin_advanced_options\"></a>
			<h1>jQuery plugin advanced options</h1>
			<ul class=\"options\">
				<li>
					<a name=\"jQueryPluginOptionsIsFullScreen\"></a>
					<div class=\"name\">isFullScreen</div>
					<div class=\"description\">If set to true, the Moockup will take the entire available screen. If left to false, the Moockup will take the size of the div it's been created.</div>
					<div class=\"default\">false</div>
				</li>
				<li>
					<a name=\"jQueryPluginOptionsSetup\"></a>
					<div class=\"name\">setup</div>
					<div class=\"description\">If specified, this setup options will be used instead of reading the setup file. A JSON object must be passed, just like in the file setup.json.</div>
					<div class=\"default\">false</div>
				</li>
				<li>
					<a name=\"jQueryPluginOptionsSetupFileName\"></a>
					<div class=\"name\">setupFileName</div>
					<div class=\"description\">The setup file name to read if no setup option is specified.</div>
					<div class=\"default\">setup.json</div>
				</li>
				<li>
					<a name=\"jQueryPluginOptionsResBaseDir\"></a>
					<div class=\"name\">resBaseDir</div>
					<div class=\"description\">The base directory where Moockup's own resources are located. Change it if you're calling Moockup from a directory different than its own.</div>
					<div class=\"default\">res/</div>
				</li>
				<li>
					<a name=\"jQueryPluginOptionsGapPercentage\"></a>
					<div class=\"name\">gapPercentage</div>
					<div class=\"description\">The gap in between mockups on the same screen, expressed as a percentage relative to the screen's width.</div>
					<div class=\"default\">5</div>
				</li>
				<li>
					<a name=\"jQueryPluginOptionsIsCacheJson\"></a>
					<div class=\"name\">isCacheJson</div>
					<div class=\"description\">Whether to cache the setup file ajax query or not.</div>
					<div class=\"default\">false</div>
				</li>
			</ul>

			<p>
				For example:
			</p>

			<code class=\"isolated html\">".formatHtml("
<script>
	$('#moockup').Moockup({
		[b]'gapPercentage': 10,
		'setup': {
			'headerTitle': 'My Moockup',
			'backgroundColor': '#fff',
			'screens': [
				{
					'title': 'Home',
					'backgroundColor': '#E01A4F',
					'mockups': [
						{
							'type': 'MacDesktop',
							'image': 'images/mockup.png'
						}
					]
				}
			]
		}[/b]
	});
</script>
			")."</code>

		</div>

		<hr>

		<div class=\"contentWrapper\"><div class=\"content\">
			<a name=\"versionhistory\"></a>
			<h1>Version history</h1>
			<ul class=\"fancy\">
				<li>
					<b>v0.1</b><br>
					First official release!
				</li>
			</ul>
		</div></div>

		<hr>

		<div class=\"contentWrapper\"><div class=\"content\">
			<a name=\"additional_credits\"></a>
			<h1>Additional credits</h1>
			<p>The beautiful website <a href=\"https://stories.readymag.com/mollino\" target=\"external\">https://stories.readymag.com/mollino</a> by <a href=\"https://readymag.com\" target=\"external\">Readymag</a> has been used as an example mockup.</p>
			<p>iMac vector image based on the work by <a href=\"https://vecçteezy.com\" target=\"external\">Vecteezy.com</a></p>
			<p>iPhone X vector image based on the work by <a href=\"http://www.designbolts.com/2017/09/13/free-vector-apple-iphone-x-mockup-in-ai-eps\" target=\"external\">DesignBolts</a></p>
		</div></div>
	";

	pattern([
		"title" => "Moockup",
		"header" => "Moockup",
		"headerSubtitle" => "with <div class=\"love\"></div> by <a href=\"http://tin.cat\">tin.cat</a> · download on <a href=\"https://github.com/tin-cat/moockup\">Github</a> · See an <a href=\"moockup\" target=\"example\">Example</a>",
		"headerSubSubtitle" => "A web tool to present drafts, designs or mockups to your client professionally while keeping control of the way it's presented, bringing back the \"wow\" effect your work deserves.",
		"footer" => "with <div class=\"love\"></div> by <a href=\"http://tin.cat\">tin.cat</a>",
		"mosaic" => $mosaic,
		"content" => $content
	]);