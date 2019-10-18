<!-- HTTP_HEAD -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport\" content="width=device-width, initial-scale=1, user-scalable=no\"/>
	<title>{v}</title>
	<!-- /HTTP_HEAD -->
	<!-- HTTP_STYLE -->
	<style>
		.c {
			text-align: center;
		}

		div,
		input {
			padding: 5px;
			font-size: 1em;
		}

		input {
			width: 95%;
		}

		body {
			text-align: center;
			font-family: verdana;
		}

		button {
			border: 0;
			border-radius: 0.3rem;
			background-color: #1fa3ec;
			color: #fff;
			line-height: 2.4rem;
			font-size: 1.2rem;
			width: 100%;
		}

		.q {
			float: right;
			width: 64px;
			text-align: right;
		}

		.l {
			background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAALVBMVEX///8EBwfBwsLw8PAzNjaCg4NTVVUjJiZDRUUUFxdiZGSho6OSk5Pg4eFydHTCjaf3AAAAZElEQVQ4je2NSw7AIAhEBamKn97/uMXEGBvozkWb9C2Zx4xzWykBhFAeYp9gkLyZE0zIMno9n4g19hmdY39scwqVkOXaxph0ZCXQcqxSpgQpONa59wkRDOL93eAXvimwlbPbwwVAegLS1HGfZAAAAABJRU5ErkJggg==") no-repeat left center;
			background-size: 1em;
		}

	</style>
	<!-- /HTTP_STYLE -->
	<!-- HTTP_SCRIPT -->
	<script>
		function c(l) {
			document.getElementById('s').value = l.innerText || l.textContent;
			document.getElementById('p').focus();
		}

	</script>
	<!-- /HTTP_SCRIPT -->
	<!-- HTTP_HEAD_END -->
</head>

<body>
	<div style="text-align:left;display:inline-block;min-width:260px;">
		<!-- /HTTP_HEAD_END -->

		<!--
	  	<div><a href='#' onclick='c(this)'>{v}</a> {r}% {i}</div>
	  	<div><a href='#' onclick='c(this)'>{v}</a> 100% 	<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAKCAMAAAC+Ge+yAAAACVBMVEUAAAC7u7v///9etNz6AAAAI0lEQVQI133GsQ3AMAAEoXv2H9qNJacKFbEaWTQJ+uQB/nMdEaYAXeJkZ9AAAAAASUVORK5CYII='/></div>
	    <div><a href='#' onclick='c(this)'>Vila17</a> 95% 	<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAMAAAC67D+PAAAADFBMVEUAAAAAtgD///8AAADV1YIHAAAAA3RSTlMAAAD6dsTeAAAAHUlEQVR4AWMAAmYgYGBkArHAAMoEYnQmMxSQywQAKvMA3+mlSFAAAAAASUVORK5CYII='/></div>
	    <div><a href='#'>LilRid</a> 100% 			<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAMAAAC67D+PAAAABlBMVEUAAAD///+l2Z/dAAAAIklEQVR4AWNgZGRkAAIQBURQDEZAgM5kgAJGEAQDwkxkbQAOhgBBk64+mQAAAABJRU5ErkJggg=='/></div>
	    <div><a href='#'>Marcelica</a> 100% 				<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAMAAAC67D+PAAAACVBMVEUAAAC7u7v///9etNz6AAAAJ0lEQVR4AY3GsREAIBSDUD77D63x4tlKw0MdmD0ijTO9f6SFnv7YXB4qAIVn0xoMAAAAAElFTkSuQmCC'/></div>
	    <div><a href='#'>PMica</a> 110% 					<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAALVBMVEX///8EBwfBwsLw8PAzNjaCg4NTVVUjJiZDRUUUFxdiZGSho6OSk5Pg4eFydHTCjaf3AAAAZElEQVQ4je2NSw7AIAhEBamKn97/uMXEGBvozkWb9C2Zx4xzWykBhFAeYp9gkLyZE0zIMno9n4g19hmdY39scwqVkOXaxph0ZCXQcqxSpgQpONa59wkRDOL93eAXvimwlbPbwwVAegLS1HGfZAAAAABJRU5ErkJggg==' width="13px"/></div>
		-->

		<!--style>
			.q{float: right;width: 64px;text-align: right;}
			.l{background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAALVBMVEX///8EBwfBwsLw8PAzNjaCg4NTVVUjJiZDRUUUFxdiZGSho6OSk5Pg4eFydHTCjaf3AAAAZElEQVQ4je2NSw7AIAhEBamKn97/uMXEGBvozkWb9C2Zx4xzWykBhFAeYp9gkLyZE0zIMno9n4g19hmdY39scwqVkOXaxph0ZCXQcqxSpgQpONa59wkRDOL93eAXvimwlbPbwwVAegLS1HGfZAAAAABJRU5ErkJggg==") no-repeat left center;background-size: 1em;}
		</style-->


		<!-- HTTP_PORTAL_OPTIONS -->
		<form action="/wifi\" method="get\"><button>Configure WiFi</button></form><br/>
		<form action="/0wifi\" method="get\"><button>Configure WiFi (No Scan)</button></form><br/>
		<form action="/i\" method="get\"><button>Info</button></form><br/>
		<form action="/r\" method="post\"><button>Reset</button></form>
		<!-- /HTTP_PORTAL_OPTIONS -->

		<div><a href='#' onclick='c(this)'>{v}</a> <span class="q {i}">{r}%</span></div>
		<div><a href='#'>PMisa</a> <span class="q l">100%</span> </div>
		<div><a href='#'>Dragos_Networks</a>&nbsp;<span class="q l">10%</span> </div>
		<div><a href='#'>PMisa</a> <span class="q l">8%</span> </div>

		<!-- HTTP_ITEM -->
		<div><a href='#p' onclick='c(this)'>{v}</a>&nbsp;<span class='q {i}'>{r}%</span></div>
		<!-- /HTTP_ITEM -->
		<!-- HTTP_FORM_START -->
		<form method='get' action='wifisave'><input id='s' name='s' length=32 placeholder='SSID'><br/><input id='p' name='p' length=64 type='password' placeholder='password'><br/>
			<!-- /HTTP_FORM_START -->
			<!-- HTTP_FORM_PARAM -->
			<br/><input id='{i}' name='{n}' length='{l}' placeholder='{p}' value='{v}' {c}>
			<!-- /HTTP_FORM_PARAM -->
			<!-- HTTP_FORM_END -->
			<br/><button type='submit'>save</button></form>
		<!-- /HTTP_FORM_END -->
		<!-- HTTP_SCAN_LINK -->
		<br/>
		<div class="c\"><a href="/wifi\">Scan</a></div>
		<!-- /HTTP_SCAN_LINK -->
		<!-- HTTP_SAVED -->
		<div>Credentials Saved<br />Trying to connect ESP to network.<br />If it fails reconnect to AP to try again</div>
		<!-- /HTTP_SAVED -->




		<!-- HTTP_END -->
	</div>
</body>

</html>
<!-- /HTTP_END -->
