<!--cachetime:1427281621--><?php
			App::uses('PagesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjY6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicGFnZXMiO3M6NjoiYWN0aW9uIjtzOjc6ImRpc3BsYXkiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czo3OiJtZWVkb2VuIjt9czo2OiJtb2RlbHMiO2E6Mjp7czo4OiJQcm9qZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJQcm9qZWN0cyI7fXM6ODoiTWVzc2FnZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiTWVzc2FnZXMiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6ODoibWVlZG9lbi8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6OToiL21lZWRvZW4vIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PagesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo4OntzOjQ6InBhZ2UiO3M6NzoibWVlZG9lbiI7czo3OiJzdWJwYWdlIjtOO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NzoiTWVlZG9lbiI7czo4OiJ0aGlzcGFnZSI7czo3OiJtZWVkb2VuIjtzOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjQzOiJTdHJhYXRiZWVsZCB2YW4gZGUgYnV1cnQgaW4ga29ydGUgZmlsbXBqZXMuIjtzOjE1OiJwcm9qZWN0bG9uZ25hbWUiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6Mjc1NToiCgo8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJzdWJtZW51Ij48cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIDQwIHNlY29uZGVuPC9hPiA8L3A+PC9kaXY+CiAgICAgICAgICAgICAgICA8cD5EcmFhZyBvb2sgYmlqIGFhbiBkZSBnZXNjaGllZGVuaXMgdmFuIGplIGVpZ2VuIGJ1dXVydCEgU3R1dXIgbnUgYWx2YXN0IGplIHZlcmhhYWwsIGZvdG8sIGdlbHVpZHNvcG5hbWUgb2YgZmlsbXBqZSAoaGVlbCBlZW52b3VkaWcgZW4gem9uZGVyIHJlZ2lzdHJhdGllKS4gTWFhayBlZW4ga2V1emUgdWl0IHZvbGdlbmRlIG1vZ2VsaWpraGVkZW46PC9wPgoKICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZWRpc3AiPgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZXJvdyI+CiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZWNlbGwgbWlkZGxlIj4KICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGlkPSJidXR1cGxvIiBjbGFzcz0iY3RhIiBvbmNsaWNrPSJsb2NhdGlvbi5ocmVmID0gJy9tZWRpYS91cGxvYWQvJzsiIHN0eWxlPSJ3aWR0aDoxNjBweDttYXJnaW4tcmlnaHQ6MjJweDttYXJnaW4tYm90dG9tOjEzcHg7Ij5VcGxvYWRlbjwvYnV0dG9uPgogICAgICAgICAgICAgICAgPC9kaXY+CiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZWNlbGwgdG9wIGtsZWluIj4KICAgICAgICAgICAgICAgICAgICBFZW4gYmVzdGFuZCA8c3Ryb25nPnVwbG9hZGVuIHZhbmFmIGplIGVpZ2VuIGNvbXB1dGVyPC9zdHJvbmc+LCB0ZWxlZm9vbiBvZiB0YWJsZXQuCiAgICAgICAgICAgICAgICA8L2Rpdj4KICAgICAgICAgICAgPC9kaXY+CgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZXJvdyI+CiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZWNlbGwgbWlkZGxlIGtsZWluIj4KICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGlkPSJidXRsaW5rIiBjbGFzcz0iY3RhIiBvbmNsaWNrPSJsb2NhdGlvbi5ocmVmID0gJy9tZWRpYS91cGxvYWRsaW5rLyc7IiBzdHlsZT0id2lkdGg6MTYwcHg7bWFyZ2luLXJpZ2h0OjIycHg7Ij5MaW5rPC9idXR0b24+CiAgICAgICAgICAgICAgICA8L2Rpdj4KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlY2VsbCB0b3Aga2xlaW4iPgogICAgICAgICAgICAgICAgICAgIEVlbiA8c3Ryb25nPmxpbmsgbmFhciBlZW4gYW5kZXJlIHdlYnNpdGU8L3N0cm9uZz4gb3BnZXZlbiB3YWFyIGhldCBiZXN0YW5kIHN0YWF0IChiaWp2b29yYmVlbGQgWW91dHViZSBvZiBBVDUpLgogICAgICAgICAgICAgICAgPC9kaXY+CiAgICAgICAgICAgIDwvZGl2PgoKICAgICAgICAgICAgPGRpdiBjbGFzcz0idGFibGVyb3ciPgogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0idGFibGVjZWxsIG1pZGRsZSI+CiAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBpZD0iYnV0aW50eSIgY2xhc3M9ImN0YSIgb25jbGljaz0ibG9jYXRpb24uaHJlZiA9ICcvbWVkaWEvdXBsb2FkdmVyaGFhbC8nOyIgc3R5bGU9IndpZHRoOjE2MHB4O21hcmdpbi1yaWdodDoyMnB4OyI+SW50eXBlbjwvYnV0dG9uPgogICAgICAgICAgICAgICAgPC9kaXY+CiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZWNlbGwgdG9wIGtsZWluIj4KICAgICAgICAgICAgICAgICAgICBEaXJlY3QgamUgPHN0cm9uZz52ZXJoYWFsIGludHlwZW48L3N0cm9uZz4uCiAgICAgICAgICAgICAgICA8L2Rpdj4KICAgICAgICAgICAgPC9kaXY+CgogICAgICAgIDwvZGl2PgoKICAgIDwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KCiAgICAgICAgPGgyPlNhbWVud2Vya2luZzwvaDI+CiAgICAgICAgPHA+V2lsIGplIG1ldCBvbnMgc2FtZW53ZXJrZW4/IE5vZyBsZXVrZXIhIFN0dXVyIGVlbiBlLW1haWwgbmFhciA8YSBocmVmPSJtYWlsdG86aW5mbyU0MGJ2c3RlbW1lbi5ubCI+aW5mbyYjNjQ7YnZzdGVtbWVuLm5sPC9hPiB6b2RhdCB3ZSBjb250YWN0IG1ldCBqZSBvcCBrdW5uZW4gbmVtZW4uPC9wPgogICAgPC9kaXY+Cgo8L2FydGljbGU+Cgo8YXNpZGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PHA+RGV6ZSB3ZWJzaXRlIGlzIG5vZyB2b2xvcCBpbiBvbnR3aWtrZWxpbmcuIERhdCBiZXRla2VudCBkYXQgZXIgc29tcyBub2cgd2VsIGVlbnMgd2F0IG1pcyBrYW4gZ2FhbiBvZiBpZXRzIG5pZXQga2xvcHQuIEFscyBkYXQgaGV0IGdldmFsIGlzIDxhIGhyZWY9Ii9tZXNzYWdlL2ZlZWRiYWNrLyI+aG9yZW4gd2UgaGV0IGdyYWFnPC9hPi48L3A+CgoKPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGgyPkhlbHAhPC9oMj48cD5IZWIgamUgaW50ZXJlc3NlIG9tIHRlIGhlbHBlbj8gTGFhdCBoZXQgb25zIHdldGVuIGVuIHN0dXVyIGVlbiBlLW1haWwgbmFhciA8YSBocmVmPSJtYWlsdG86aW5mbyU0MGJ2c3RlbW1lbi5ubCI+aW5mbyYjNjQ7YnZzdGVtbWVuLm5sPC9hPi48L3A+PC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGgyPkdlbm9lZyB0ZSBkb2VuPC9oMj48cD5FbGtlIGluYnJlbmcgaXMgd2Vsa29tISBXZSBiaWVkZW4gamUgZWVuIGVudGhvdXNpYXN0IHRlYW0gd2FhciBqZSBqZSBjcmVhdGl2aXRlaXQgZW4gaWRlZSZldW1sO24ga3dpanQga3VudCBlbiB2ZWVsIGt1bnQgbGVyZW4uPC9wPjwvZGl2Pgo8L2FzaWRlPgoKCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!doctype html><html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/base.css">
<style>.b4{background:url('//bvstemmen.nl/img/bg/40sec.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
    .b3{background:url('//bvstemmen.nl/img/bg/40sec.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
</style>
<script type="text/javascript" src="//bvstemmen.nl/js/base.js"></script>
<title>Meedoen</title>
<meta name="description" content="Straatbeeld van de buurt in korte filmpjes.">
<meta name="apple-mobile-web-app-capable" content="yes"><meta name=viewport content="width=device-width, initial-scale=1">
<meta property="og:type" content="website"><meta property="og:site_name" content="Buurt Vol Stemmen"><meta property="og:locale" content="nl_NL">
</head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>


<article>
    <div class="paper">

                <div class="submenu"><p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p></div>
                <p>Draag ook bij aan de geschiedenis van je eigen buuurt! Stuur nu alvast je verhaal, foto, geluidsopname of filmpje (heel eenvoudig en zonder registratie). Maak een keuze uit volgende mogelijkheden:</p>

        <div class="tabledisp">
            <div class="tablerow">
                <div class="tablecell middle">
                    <button id="butuplo" class="cta" onclick="location.href = '/media/upload/';" style="width:160px;margin-right:22px;margin-bottom:13px;">Uploaden</button>
                </div>
                <div class="tablecell top klein">
                    Een bestand <strong>uploaden vanaf je eigen computer</strong>, telefoon of tablet.
                </div>
            </div>

            <div class="tablerow">
                <div class="tablecell middle klein">
                    <button id="butlink" class="cta" onclick="location.href = '/media/uploadlink/';" style="width:160px;margin-right:22px;">Link</button>
                </div>
                <div class="tablecell top klein">
                    Een <strong>link naar een andere website</strong> opgeven waar het bestand staat (bijvoorbeeld Youtube of AT5).
                </div>
            </div>

            <div class="tablerow">
                <div class="tablecell middle">
                    <button id="butinty" class="cta" onclick="location.href = '/media/uploadverhaal/';" style="width:160px;margin-right:22px;">Intypen</button>
                </div>
                <div class="tablecell top klein">
                    Direct je <strong>verhaal intypen</strong>.
                </div>
            </div>

        </div>

    </div>

    <div class="paper">

        <h2>Samenwerking</h2>
        <p>Wil je met ons samenwerken? Nog leuker! Stuur een e-mail naar <a href="mailto:info%40bvstemmen.nl">info&#64;bvstemmen.nl</a> zodat we contact met je op kunnen nemen.</p>
    </div>

</article>

<aside>
    <div class="paper"><p>Deze website is nog volop in ontwikkeling. Dat betekent dat er soms nog wel eens wat mis kan gaan of iets niet klopt. Als dat het geval is <a href="/message/feedback/">horen we het graag</a>.</p>


</div>
    <div class="paper"><h2>Help!</h2><p>Heb je interesse om te helpen? Laat het ons weten en stuur een e-mail naar <a href="mailto:info%40bvstemmen.nl">info&#64;bvstemmen.nl</a>.</p></div>
    <div class="paper"><h2>Genoeg te doen</h2><p>Elke inbreng is welkom! We bieden je een enthousiast team waar je je creativiteit en idee&euml;n kwijt kunt en veel kunt leren.</p></div>
</aside>


<div id="smh"><a href="#bodyid"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></div>
<nav><ul class="navul"><li class="navli"><a class="nava" href="//bvstemmen.nl/contact/">Contact</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/over/">Over</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/uitleg/">Plannen</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/agenda/">Agenda</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/projecten/">Projecten</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/">Home</a></li></ul></nav>
<div id="b3" class="b3"></div><div id="b4" class="b4" style="opacity: 1.0;"></div><div class="b5"></div><div class="b1"></div><div class="b2 shade"></div></body></html>