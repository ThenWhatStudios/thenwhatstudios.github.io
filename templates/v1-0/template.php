<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Then What Studios</title>
<link rel="apple-touch-icon" sizes="57x57" href="asset/icons/apple57.png">
<link rel="apple-touch-icon" sizes="114x114" href="asset/icons/apple114.png">
<link rel="apple-touch-icon" sizes="72x72" href="asset/icons/apple72.png">
<link rel="apple-touch-icon" sizes="60x60" href="asset/icons/apple60.png">
<link rel="apple-touch-icon" sizes="120x120" href="asset/icons/apple120.png">
<link rel="apple-touch-icon" sizes="76x76" href="asset/icons/apple76.png">
<link rel="apple-touch-icon" sizes="152x152" href="asset/icons/apple152.png">
<link rel="apple-touch-icon" sizes="180x180" href="asset/icons/apple180.png">
<link rel="icon" type="image/png" href="asset/icons/icon192.png" sizes="192x192">
<link rel="icon" type="image/png" href="asset/icons/icon160.png" sizes="160x160">
<link rel="icon" type="image/png" href="asset/icons/icon96.png" sizes="96x96">
<link rel="icon" type="image/png" href="asset/icons/icon16.png" sizes="16x16">
<link rel="icon" type="image/png" href="asset/icons/icon32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="asset/icons/ms144.png">
<meta name="apple-mobile-web-app-title" content="Then What Studios">
<meta name="application-name" content="Then What Studios">
<link rel="stylesheet" href="asset/css/v1-0/v1.0.css">
<script src="asset/js/jquery.js"></script>
<script>
<!--
$(document).ready(function(){
	var url = window.location.hash.substr(1);
	
	var restore = function(){
		var r = $.Deferred();
		
		$('#page1').addClass('hidden');
		$('#games').addClass('hidden');
		$('#games-cd').addClass('hidden');
		$('#teams').addClass('hidden');
		$('#teams-board').addClass('hidden');
		$('#teams-dev').addClass('hidden');
		$('#teams-pbt').addClass('hidden');
		$('#teams-qc').addClass('hidden');
		
		setTimeout(function(){
			r.resolve();
		}, 0);
		
		return r;
	};
	
	if(url == '!/games'){
		$('title').html('TWS - Games');
		restore().done(function(){
			$('#games').removeClass('hidden');
		});
	}else if(url == "!/games/codenamedust"){
		$('title').html('TWS - Codename: Dust');
		restore().done(function(){
			$('#games-cd').removeClass('hidden');
		});
	}else if(url == "!/teams"){
		$('title').html('TWS - Teams');
		restore().done(function(){
			$('#teams').removeClass('hidden');
		});
	}else if(url == "!/teams/board"){
		$('title').html('TWS - Leading Board');
		restore().done(function(){
			$('#teams-board').removeClass('hidden');
		});
	}else if(url == "!/teams/development"){
		$('title').html('TWS - Development Team');
		restore().done(function(){
			$('#teams-dev').removeClass('hidden');
		});
	}else if(url == "!/teams/pbt"){
		$('title').html('TWS - Private BETA Testers');
		restore().done(function(){
			$('#teams-pbt').removeClass('hidden');
		});
	}else if(url == "!/teams/qc"){
		$('title').html('TWS - Quality Control Team');
		restore().done(function(){
			$('#teams-qc').removeClass('hidden');
		});
	}
	
	$(window).scroll(function(){
		var posY = $(window).scrollTop();
		
		if(posY >= 200){
			if($('#nav').hasClass('absolute')){
				$('#nav').removeClass('absolute').addClass('fixed');
			}
			
			if($('#title2').hasClass('hidden')){
				$('#title2').removeClass('hidden');
			}
		}else{
			if($('#nav').hasClass('fixed')){
				$('#nav').removeClass('fixed').addClass('absolute');
			}
			
			$('#title2').addClass('hidden');
		}
	});
	
	$('#title2').click(function(){
		window.history.pushState("string", "Then What Studios", "/ThenWhatStudios");
		$('title').html('Then What Studios');
		restore().done(function(){
			$('#page1').removeClass('hidden');
		});
	});
	
	$('.link-games').click(function(){
		window.history.pushState("string", "TWS - Games", "/ThenWhatStudios/#!/games");
		$('title').html('TWS - Games');
		restore().done(function(){
			$('#games').removeClass('hidden');
		});
		return false;
	});
	
	$('.link-games-cd').click(function(){
		window.history.pushState("string", "TWS - Codename: Dust", "/ThenWhatStudios/#!/games/codenamedust");
		$('title').html('TWS - Codename: Dust');
		restore().done(function(){
			$('#games-cd').removeClass('hidden');
		});
		return false;
	});
	
	$('.link-teams').click(function(){
		window.history.pushState("string", "TWS - Teams", "/ThenWhatStudios/#!/teams");
		$('title').html('TWS - Teams');
		restore().done(function(){
			$('#teams').removeClass('hidden');
		});
		return false;
	});
	
	$('.link-teams-board').click(function(){
		window.history.pushState("string", "TWS - Leading Board", "/ThenWhatStudios/#!/teams/board");
		$('title').html('TWS - Leading Board');
		restore().done(function(){
			$('#teams-board').removeClass('hidden');
		});
		return false;
	});
	
	$('.link-teams-dev').click(function(){
		window.history.pushState("string", "TWS - Development Team", "/ThenWhatStudios/#!/teams/development");
		$('title').html('TWS - Development Team');
		restore().done(function(){
			$('#teams-dev').removeClass('hidden');
		});
		return false;
	});
	
	$('.link-teams-pbt').click(function(){
		window.history.pushState("string", "TWS - Private BETA Testers", "/ThenWhatStudios/#!/teams/pbt");
		$('title').html('TWS - Private BETA Testers');
		restore().done(function(){
			$('#teams-pbt').removeClass('hidden');
		});
		return false;
	});
	
	$('.link-teams-qc').click(function(){
		window.history.pushState("string", "TWS - Quality Control Team", "/ThenWhatStudios/#!/teams/qc");
		$('title').html('TWS - Quality Control Team');
		restore().done(function(){
			$('#teams-qc').removeClass('hidden');
		});
		return false;
	});
});
//-->
</script>
</head>

<body>
<header id="head">
	<div id="logo"></div>
	<div id="company">
		<div id="title">Then What Studios</div>
		<div id="tagline">Professionalsim and Laziness Combined</div>
	</div>
</header>

<nav id="nav" class="absolute">
	<ul id="title2" class="left hidden">
		<li>Then What Studios</li>
	</ul>
	<ul class="navigation right">
		<li>
			<a class="link-games" href="#!/games">Games</a>
			<ul>
				<li><a class="link-games-cd" href="#!/games/codenamedust">Codename: Dust</a></li>
			</ul>
		</li>
		<li>
			<a class="link-teams" href="#!/teams">Meet the Team</a>
			<ul>
				<li><a class="link-teams-board" href="#!/teams/board">Leading Board</a></li>
				<li><a class="link-teams-dev" href="#!/teams/development">Development Team</a></li>
				<li><a class="link-teams-pbt" href="#!/teams/pbt">Private BETA Testers</a></li>
				<li><a class="link-teams-qc" href="#!/teams/qc">Quality Control Team</a></li>
			</ul>
		</li>
	</ul>
</nav>

<div id="page1" class="wrap">
	<div class="content">
		Welcome to Then What Studios Official Website.<br>
		<h3>Current Project: <a class="link-games-cd" href="#!/games/codenamedust">"Codename: Dust"</a></h3>
		<h3>About</h3>
		Then What Studios ia a video game studio founded by Ghifari Aditya, Brian Lee, and Davis Parks.
		<h3>Contact Us</h3>
		<a href="//www.facebook.com/ThenWhatStudios/">Facebook</a><br>
		<a href="//twitter.com/ThenWhatStudios/">Twiiter</a><br>
		<a href="mailto:thenwhatstudios@gmail.com">Email</a><br>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>

<div id="games" class="wrap hidden">
	<div class="content">
		<h1>Games</h1>
		Then What Studios is a snall indie video game studio. Therefore, our projects takes a long time to finished. However, we never stop doing what we love to do. There is currently only one project:
		<a class="link-games-cd" href="#!/games/codenamedust">Codename: Dust</a>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>

<div id="games-cd" class="wrap hidden">
	<div class="content">
		<h1>Codename: Dust</h1>
		<h3>I. Introduction</h3>
		This project is still under early design phase. Mainly, this project is maintained by our Development Team, but we also get some help from people outside the development team as well as outside the studio.
		<h3>II. Summary of Storyline</h3>
		Currently, the story line is being created by our Development Team.
		<h3>III. Downloads</h3>
		Downloads are not available yet.
		<h3>IV. Important Links</h3>
		Links with the prefix [PRIVATE] are only accessible for certain member of the studio.<br>
		<a href="//bit.ly/DustDesignDocument" target="_blank">Design Document</a><br>
		<a href="//bitbucket.com/thenwhatstudios/codename-dust/issues" target="_blank">Issue Tracker</a><br>
		<a href="//bitbucket.com/thenwhatstudios/codename-dust" target="_blank">[PRIVATE] Bitbucket Repository</a><br>
		<a href="//github.com/thenwhatstudios/codenamedust" target="_blank">GitHub Repository</a>
		<h3>V. Developers</h3>
		<b>Ghifari Aditya</b><br>
		Project Lead, Game Design, Physics Design, 3D Modeling, 3D Scuplting, Shader and Lighting, Database Enginerring, and Code.<br>
		<br>
		<b>Tony Groves</b><br>
		Project Manager and Game Design.<br>
		<br>
		<b>Karen Suarez</b><br>
		Project Manager Assistant and Concept Art.<br>
		<br>
		<b>Davis Parks</b><br>
		Game Design and Physics Design.<br>
		<br>
		<b>Sarah Flores</b><br>
		Game Design.<br>
		<br>
		<b>Kaitlyn Davis</b><br>
		Concept Art.
		<h3>VI. Status</h3>
		ETA: June 1<sup>st</sup>, 2015.<br>
		Estimated Project Percentage: 1% Done.
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>

<div id="teams" class="wrap hidden">
	<div class="content">
		<h1>Teams</h1>
		
		Then What Studios is only occupied by 4 teams. Only 3 of which are actually involved during the making of our games. The following are our teams.
		
		<ul class="list none">
			<li><a class="link-teams-board" href="#!/teams/board">Leading Board</a></li>
			<li><a class="link-teams-dev" href="#!/teams/dev">Development Team</a></li>
			<li><a class="link-teams-pbt" href="#!/teams/pbt">Private BETA Testers</a></li>
			<li><a class="link-teams-qc" href="#!/teams/qc">Quality Control Team</a></li>
		</ul>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>
	

<div id="teams-board" class="wrap hidden">
	<div class="content">
		<h1>Leading Board</h1>
		
		<h3>I. Introduction</h3>
		The Leading Board of Then What Studios is only occupied by 3 person. The reason to that is because we aren't making games with help from the others, we are making game together.
		
		<h3>II. Member</h3>
		<b>Tony Groves</b><br>
		CEO, CMO, and CFO.<br>
		<br>
		
		<b>Ghifari Aditya</b><br>
		Co-founder and PR.
		<ul class="list none inline">
			<li class="first"><a href="mailto:ghifari160@gmail.com" target="_blank">Email</a></li>
			<li><a href="//twitter.com/ghifari_sd" target="_blank">Twitter</a></li>
			<li><a href="//www.youtube.com/Ghifari1600" target="_blank">YouTube</a></li>
			<li><a href="//github.com/Ghifari160" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/Ghifari160" target="_blank">Bitbucket</a></li>
		</ul>
		<br>
		
		<b>Brian Lee</b><br>
		Co-founder
		<ul class="list none inline">
			<li class="first"><a href="mailto:chogonom@gmail.com" target="_blank">Email</a></li>
			<li><a href="//twitter.com/chogonom" target="_blank">Twitter</a></li>
			<li class="last"><a href="//www.youtube.com/chogonom" target="_blank">YouTube</a></li>
		</ul>
		<br>
		
		<b>Davis Parks</b><br>
		Co-founder.
		<ul class="list none inline">
			<li class="first"><a href="mailto:sivad.parks@gmail.com" target="_blank">Email</a></li>
			<li><a href="//www.youtube.com/sivad1025" target="_blank">YouTube</a></li>
			<li><a href="//github.com/sivad1025" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/sivad1025" target="_blank">Bitbucket</a></li>
		</ul>
		
		<h3>III. Studio Links</h3>
		<ul class="list none">
			<li><a href="mailto:thenwhatstudios@gmail.com" target="_blank">Email</a></li>
			<li><a href="//www.facebook.com/ThenWhatStudios" target="_blank">Facebook</a></li>
			<li><a href="//twitter.com/ThenWhatStudios" target="_blank">Twitter</a></li>
			<li><a href="//github.com/ThenWhatStudios" target="_blank">GitHub</a></li>
			<li><a href="//bitbucket.com/thenwhatstudios/" target="_blank">Bitbucket</a></li>
		</ul>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>

<div id="teams-dev" class="wrap hidden">
	<div class="content">
		<h1>Development Team</h1>
		<h3>I. Introduction</h3>
		This team is the main development team, the core of the studio, as well as friends of the founders.
		<h3>II. Members</h3>
		<b>Ghifari Aditya</b><br>
		Game Design, Physics Design, 3D Modeling, 3D Scuplting, Shader and Lighting, Database Enginerring, and Code.
		<ul class="list none inline">
			<li class="first"><a href="mailto:ghifari160@gmail.com" target="_blank">Email</a></li>
			<li><a href="//twitter.com/ghifari_sd" target="_blank">Twitter</a></li>
			<li><a href="//www.youtube.com/Ghifari1600" target="_blank">YouTube</a></li>
			<li><a href="//github.com/Ghifari160" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/Ghifari160" target="_blank">Bitbucket</a></li>
		</ul>
		<br>
		<b>Kaitlyn Davis</b><br>
		Concept Art<br>
		<br>
		<b>Sarah Flores</b><br>
		Game Design<br>
		<br>
		<b>Tony Groves</b><br>
		Game Design<br>
		<br>
		<b>Davis Parks</b><br>
		Game Design and Physics Design.
		<ul class="list none inline">
			<li class="first"><a href="mailto:sivad.parks@gmail.com" target="_blank">Email</a></li>
			<li><a href="//www.youtube.com/sivad1025" target="_blank">YouTube</a></li>
			<li><a href="//github.com/sivad1025" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/sivad1025" target="_blank">Bitbucket</a></li>
		</ul>
		<br>
		<b>Karen Suarez</b><br>
		Concept Art
		
		<h3>III. Links</h3>
		<ul class="list none">
			<li><a href="//github.com/orgs/ThenWhatStudios/teams/developers" target="_blank">GitHub</a></li>
			<li><a href="//bitbucket.com/thenwhatstudios/" target="_blank">Bitbucket</a></li>
		</ul>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>

<div id="teams-pbt" class="wrap hidden">
	<div class="content">
		<h1>Private BETA Testers</h1>
		
		<h3>I. Introduction</h3>
		These people are the best at what they do. Sure, they play games all day long, but as a gamer, they know what's best for other gamers. These people decide whether or not certain feature or level of our games deserve a chance for a trip to the Quality Control Phase.
		
		<h3>II. Members</h3>
		<b>Kaitlyn Davis</b><br>
		BETA Tester.<br>
		<br>
		
		<b>Ghifari Aditya</b><br>
		BETA Tester.
		<ul class="list none inline">
			<li class="first"><a href="mailto:ghifari160@gmail.com" target="_blank">Email</a></li>
			<li><a href="//twitter.com/ghifari_sd" target="_blank">Twitter</a></li>
			<li><a href="//www.youtube.com/Ghifari1600" target="_blank">YouTube</a></li>
			<li><a href="//github.com/Ghifari160" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/Ghifari160" target="_blank">Bitbucket</a></li>
		</ul>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>

<div id="teams-qc" class="wrap hidden">
	<div class="content">
		<h1>Quality Control Team</h1>
		
		<h3>I. Introduction</h3>
		These people decide whether or not certain feature or leve of our games deserve to be published. They fix some of the things that needs to be fix. They only reject content which contains too many bugs.
		
		<h3>II. Members</h3>
		<b>Kaitlyn Davis</b><br>
		Supervisor.<br>
		<br>
		
		<b>Davis Parks</b><br>
		Physics Checker
		<ul class="list none inline">
			<li class="first"><a href="mailto:sivad.parks@gmail.com" target="_blank">Email</a></li>
			<li><a href="//www.youtube.com/sivad1025" target="_blank">YouTube</a></li>
			<li><a href="//github.com/sivad1025" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/sivad1025" target="_blank">Bitbucket</a></li>
		</ul>
		<br>
		
		<b>Ghifari Aditya</b><br>
		Code Debug
		<ul class="list none inline">
			<li class="first"><a href="mailto:ghifari160@gmail.com" target="_blank">Email</a></li>
			<li><a href="//twitter.com/ghifari_sd" target="_blank">Twitter</a></li>
			<li><a href="//www.youtube.com/Ghifari1600" target="_blank">YouTube</a></li>
			<li><a href="//github.com/Ghifari160" target="_blank">GitHub</a></li>
			<li class="last"><a href="//bitbucket.com/Ghifari160" target="_blank">Bitbucket</a></li>
		</ul>
	</div>
	
	<footer class="footer">
		<span>Copyright &copy; 2014 - 2015, Then What Studios</span><br>
		<span>Logo and Icons by Brian Lee</span><br>
		<span>Design by Ghifari Aditya</span>
	</footer>
</div>
</body>
</html>