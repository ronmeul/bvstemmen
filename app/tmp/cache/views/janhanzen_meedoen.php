<!--cachetime:1424407411--><?php
			App::uses('PagesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjY6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicGFnZXMiO3M6NjoiYWN0aW9uIjtzOjc6ImRpc3BsYXkiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czo3OiJtZWVkb2VuIjt9czo2OiJtb2RlbHMiO2E6Mjp7czo4OiJQcm9qZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJQcm9qZWN0cyI7fXM6ODoiTWVzc2FnZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiTWVzc2FnZXMiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6ODoibWVlZG9lbi8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6OToiL21lZWRvZW4vIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PagesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo4OntzOjQ6InBhZ2UiO3M6NzoibWVlZG9lbiI7czo3OiJzdWJwYWdlIjtOO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NzoiTWVlZG9lbiI7czo4OiJ0aGlzcGFnZSI7czo3OiJtZWVkb2VuIjtzOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtOO3M6MTU6InByb2plY3Rsb25nbmFtZSI7TjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6Mjc2NjoiCgo8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJzdWJtZW51Ij48cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IHwgPHNwYW4gY2xhc3M9ImFjdCI+SWV0cyBpbnN0dXJlbjwvc3Bhbj4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgZGl0IHByb2plY3Q8L2E+IDwvcD48L2Rpdj4KICAgICAgICAgICAgICAgIDxwPkRyYWFnIG9vayBiaWogYWFuIGRlIGdlc2NoaWVkZW5pcyB2YW4gamUgZWlnZW4gYnV1dXJ0ISBTdHV1ciBudSBhbHZhc3QgamUgdmVyaGFhbCwgZm90bywgZ2VsdWlkc29wbmFtZSBvZiBmaWxtcGplIChoZWVsIGVlbnZvdWRpZyBlbiB6b25kZXIgcmVnaXN0cmF0aWUpLiBNYWFrIGVlbiBrZXV6ZSB1aXQgdm9sZ2VuZGUgbW9nZWxpamtoZWRlbjo8L3A+CgogICAgICAgIDxkaXYgY2xhc3M9InRhYmxlZGlzcCI+CiAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlcm93Ij4KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlY2VsbCBtaWRkbGUiPgogICAgICAgICAgICAgICAgICAgIDxidXR0b24gaWQ9ImJ1dHVwbG8iIGNsYXNzPSJjdGEiIG9uY2xpY2s9ImxvY2F0aW9uLmhyZWYgPSAnL21lZGlhL3VwbG9hZC8nOyIgc3R5bGU9IndpZHRoOjE2MHB4O21hcmdpbi1yaWdodDoyMnB4O21hcmdpbi1ib3R0b206MTNweDsiPlVwbG9hZGVuPC9idXR0b24+CiAgICAgICAgICAgICAgICA8L2Rpdj4KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlY2VsbCB0b3Aga2xlaW4iPgogICAgICAgICAgICAgICAgICAgIEVlbiBiZXN0YW5kIDxzdHJvbmc+dXBsb2FkZW4gdmFuYWYgamUgZWlnZW4gY29tcHV0ZXI8L3N0cm9uZz4sIHRlbGVmb29uIG9mIHRhYmxldC4KICAgICAgICAgICAgICAgIDwvZGl2PgogICAgICAgICAgICA8L2Rpdj4KCiAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlcm93Ij4KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlY2VsbCBtaWRkbGUga2xlaW4iPgogICAgICAgICAgICAgICAgICAgIDxidXR0b24gaWQ9ImJ1dGxpbmsiIGNsYXNzPSJjdGEiIG9uY2xpY2s9ImxvY2F0aW9uLmhyZWYgPSAnL21lZGlhL3VwbG9hZGxpbmsvJzsiIHN0eWxlPSJ3aWR0aDoxNjBweDttYXJnaW4tcmlnaHQ6MjJweDsiPkxpbms8L2J1dHRvbj4KICAgICAgICAgICAgICAgIDwvZGl2PgogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0idGFibGVjZWxsIHRvcCBrbGVpbiI+CiAgICAgICAgICAgICAgICAgICAgRWVuIDxzdHJvbmc+bGluayBuYWFyIGVlbiBhbmRlcmUgd2Vic2l0ZTwvc3Ryb25nPiBvcGdldmVuIHdhYXIgaGV0IGJlc3RhbmQgc3RhYXQgKGJpanZvb3JiZWVsZCBZb3V0dWJlIG9mIEFUNSkuCiAgICAgICAgICAgICAgICA8L2Rpdj4KICAgICAgICAgICAgPC9kaXY+CgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZXJvdyI+CiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJ0YWJsZWNlbGwgbWlkZGxlIj4KICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGlkPSJidXRpbnR5IiBjbGFzcz0iY3RhIiBvbmNsaWNrPSJsb2NhdGlvbi5ocmVmID0gJy9tZWRpYS91cGxvYWR2ZXJoYWFsLyc7IiBzdHlsZT0id2lkdGg6MTYwcHg7bWFyZ2luLXJpZ2h0OjIycHg7Ij5JbnR5cGVuPC9idXR0b24+CiAgICAgICAgICAgICAgICA8L2Rpdj4KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InRhYmxlY2VsbCB0b3Aga2xlaW4iPgogICAgICAgICAgICAgICAgICAgIERpcmVjdCBqZSA8c3Ryb25nPnZlcmhhYWwgaW50eXBlbjwvc3Ryb25nPi4KICAgICAgICAgICAgICAgIDwvZGl2PgogICAgICAgICAgICA8L2Rpdj4KCiAgICAgICAgPC9kaXY+CgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPgoKICAgICAgICA8aDI+U2FtZW53ZXJraW5nPC9oMj4KICAgICAgICA8cD5XaWwgamUgbWV0IG9ucyBzYW1lbndlcmtlbj8gTm9nIGxldWtlciEgU3R1dXIgZWVuIGUtbWFpbCBuYWFyIDxhIGhyZWY9Im1haWx0bzppbmZvJTQwYnZzdGVtbWVuLm5sIj5pbmZvJiM2NDtidnN0ZW1tZW4ubmw8L2E+IHpvZGF0IHdlIGNvbnRhY3QgbWV0IGplIG9wIGt1bm5lbiBuZW1lbi48L3A+CiAgICA8L2Rpdj4KCjwvYXJ0aWNsZT4KCjxhc2lkZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48cD5EZXplIHdlYnNpdGUgaXMgbm9nIHZvbG9wIGluIG9udHdpa2tlbGluZy4gRGF0IGJldGVrZW50IGRhdCBlciBzb21zIG5vZyB3ZWwgZWVucyB3YXQgbWlzIGthbiBnYWFuIG9mIGlldHMgbmlldCBrbG9wdC4gQWxzIGRhdCBoZXQgZ2V2YWwgaXMgPGEgaHJlZj0iL21lc3NhZ2UvZmVlZGJhY2svIj5ob3JlbiB3ZSBoZXQgZ3JhYWc8L2E+LjwvcD4KCgo8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48aDI+SGVscCE8L2gyPjxwPkhlYiBqZSBpbnRlcmVzc2Ugb20gdGUgaGVscGVuPyBMYWF0IGhldCBvbnMgd2V0ZW4gZW4gc3R1dXIgZWVuIGUtbWFpbCBuYWFyIDxhIGhyZWY9Im1haWx0bzppbmZvJTQwYnZzdGVtbWVuLm5sIj5pbmZvJiM2NDtidnN0ZW1tZW4ubmw8L2E+LjwvcD48L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48aDI+R2Vub2VnIHRlIGRvZW48L2gyPjxwPkVsa2UgaW5icmVuZyBpcyB3ZWxrb20hIFdlIGJpZWRlbiBqZSBlZW4gZW50aG91c2lhc3QgdGVhbSB3YWFyIGplIGplIGNyZWF0aXZpdGVpdCBlbiBpZGVlJmV1bWw7biBrd2lqdCBrdW50IGVuIHZlZWwga3VudCBsZXJlbi48L3A+PC9kaXY+CjwvYXNpZGU+CgoKIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!doctype html><html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/base.css">
<style>.b4{background:url('//bvstemmen.nl/img/bg/janhanzen.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
    .b3{background:url('//bvstemmen.nl/img/bg/janhanzen.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
</style>
<script type="text/javascript" src="//bvstemmen.nl/js/base.js"></script>
<title>Meedoen</title>
<meta name="description" content="">
<meta name="apple-mobile-web-app-capable" content="yes"><meta name=viewport content="width=device-width, initial-scale=1">
<meta property="og:type" content="website"><meta property="og:site_name" content="Buurt Vol Stemmen"><meta property="og:locale" content="nl_NL">
</head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>


<article>
    <div class="paper">

                <div class="submenu"><p class="submenu"><a href="/kaart/">Kaart</a> | <span class="act">Iets insturen</span> | <a href="/over/">Over dit project</a> </p></div>
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