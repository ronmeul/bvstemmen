<!--cachetime:1427370347--><?php
			App::uses('PagesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjY6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicGFnZXMiO3M6NjoiYWN0aW9uIjtzOjc6ImRpc3BsYXkiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czo3OiJjb250YWN0Ijt9czo2OiJtb2RlbHMiO2E6Mjp7czo4OiJQcm9qZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJQcm9qZWN0cyI7fXM6ODoiTWVzc2FnZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiTWVzc2FnZXMiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6ODoiY29udGFjdC8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6OToiL2NvbnRhY3QvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PagesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo4OntzOjQ6InBhZ2UiO3M6NzoiY29udGFjdCI7czo3OiJzdWJwYWdlIjtOO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NzoiQ29udGFjdCI7czo4OiJ0aGlzcGFnZSI7czo3OiJjb250YWN0IjtzOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjI5OiJFZW4gcmVjb25zdHJ1Y3RpZSBpbiB3b3JkaW5nLiI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjE0OiJSZW1pc2UgcmVwcmlzZSI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjgyOToiPGFydGljbGU+CgkJPGRpdiBjbGFzcz0icGFwZXIiPgoKICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciBSZW1pc2UgcmVwcmlzZTwvYT4gfCA8YSBocmVmPSIvbWVlZG9lbi8iPklldHMgaW5zdHVyZW48L2E+IHwgPHNwYW4gY2xhc3M9ImFjdCI+Q29udGFjdDwvc3Bhbj4gPC9wPgoKCgoJCQk8aDI+Q29udGFjdDwvaDI+CgkJCTxwPkhlYiBqZSBvcG1lcmtpbmdlbiBvZiB2cmFnZW4/IFdlIGhvcmVuIGhldCBncmFhZyEgU3R1dXIgZWVuIGUtbWFpbCBuYWFyIDxhIGhyZWY9Im1haWx0bzppbmZvJTQwYnZzdGVtbWVuLm5sIj5pbmZvJiM2NDtidnN0ZW1tZW4ubmw8L2E+IG9mIGdlYnJ1aWsgaGV0IDxhIGhyZWY9Ii9tZXNzYWdlL2ZlZWRiYWNrLyI+Y29udGFjdGZvcm11bGllcjwvYT4uPC9wPgoKCQk8L2Rpdj4KCTwvYXJ0aWNsZT4KCjxhc2lkZT4KCTxkaXYgY2xhc3M9InBhcGVyIj48aDI+TmlldXdzYnJpZWY8L2gyPjxwPkxhYXQgamUgZS1tYWlsYWRyZXM8c3VwPio8L3N1cD4gYWNodGVyIHpvZGF0IHdlIGplIG9wIGRlIGhvb2d0ZSBrdW5uZW4gaG91ZGVuLjwvcD4KCjxpZnJhbWUgc3R5bGU9IndpZHRoOjEwMCU7bWFyZ2luOjA7aGVpZ2h0OmF1dG87Ym9yZGVyOjA7IiBzcmM9Imh0dHA6Ly9lbWFpbC5idnN0ZW1tZW4ubmwvIj48L2lmcmFtZT4KCgo8cD48c3VwPio8L3N1cD4gVWl0ZXJhYXJkIGhvdWRlbiB3ZSBqZSBlLW1haWxhZHJlcyBnZWhlaW0uPC9wPjwvZGl2Pgo8L2FzaWRlPiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!doctype html><html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/base.css">
<style>.b4{background:url('//bvstemmen.nl/img/bg/remise.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
    .b3{background:url('//bvstemmen.nl/img/bg/remise.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
</style>
<script type="text/javascript" src="//bvstemmen.nl/js/base.js"></script>
<title>Contact</title>
<meta name="description" content="Een reconstructie in wording.">
<meta name="apple-mobile-web-app-capable" content="yes"><meta name=viewport content="width=device-width, initial-scale=1">
<meta property="og:type" content="website"><meta property="og:site_name" content="Buurt Vol Stemmen"><meta property="og:locale" content="nl_NL">
</head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Remise reprise</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
		<div class="paper">

                        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Remise reprise</a> | <a href="/meedoen/">Iets insturen</a> | <span class="act">Contact</span> </p>



			<h2>Contact</h2>
			<p>Heb je opmerkingen of vragen? We horen het graag! Stuur een e-mail naar <a href="mailto:info%40bvstemmen.nl">info&#64;bvstemmen.nl</a> of gebruik het <a href="/message/feedback/">contactformulier</a>.</p>

		</div>
	</article>

<aside>
	<div class="paper"><h2>Nieuwsbrief</h2><p>Laat je e-mailadres<sup>*</sup> achter zodat we je op de hoogte kunnen houden.</p>

<iframe style="width:100%;margin:0;height:auto;border:0;" src="http://email.bvstemmen.nl/"></iframe>


<p><sup>*</sup> Uiteraard houden we je e-mailadres geheim.</p></div>
</aside><div id="smh"><a href="#bodyid"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></div>
<nav><ul class="navul"><li class="navli"><span class="act nava">Contact</span></li><li class="navli"><a class="nava" href="//bvstemmen.nl/over/">Over</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/uitleg/">Plannen</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/agenda/">Agenda</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/projecten/">Projecten</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/">Home</a></li></ul></nav>
<div id="b3" class="b3"></div><div id="b4" class="b4" style="opacity: 1.0;"></div><div class="b5"></div><div class="b1"></div><div class="b2 shade"></div></body></html>