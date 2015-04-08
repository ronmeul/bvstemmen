<!--cachetime:1427316847--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjIxMyI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMjEzLyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8yMTMvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6Mjp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMjI0IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2MiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjEzIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjYyIjtzOjc6InRhZ25hbWUiO3M6OToic291dmVuaXJzIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIyMTMiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTE0IDE4OjIxOjA5IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjE5OiJLT0ZGSUVyZW1icmFuZHQuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxMToiS2xlaW4gZ2VsdWsiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTM6MDk6MzAgMDg6MTQ6MjAiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2NzoiWml0IGplIGxla2tlciBvcCBlZW4gemF0ZXJkYWdvY2h0ZW5kIGVlbiBoZWVybGlqayBrb3BqZSBrb2ZmaWUgdGUgZHJpbmtlbiwgdmVyc2NoaWpudCBlciBvcCBkZSBib2RlbSB2YW4gamUga29mZmlla29wamUgZWVuIGdlemljaHQ7IGVlbiBSZW1icmFuZHQhIERhdCBpcyBrbGVpbiBnZWx1ay4iO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI5MiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9fWk6MTthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjIyNyI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiODAiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjIxMyI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czoyOiI4MCI7czo3OiJ0YWduYW1lIjtzOjk6InJlbWJyYW5kdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjEzIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xNCAxODoyMTowOSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxOToiS09GRklFcmVtYnJhbmR0LmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6IjMxIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTE6IktsZWluIGdlbHVrIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDEzOjA5OjMwIDA4OjE0OjIwIjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjc6IlppdCBqZSBsZWtrZXIgb3AgZWVuIHphdGVyZGFnb2NodGVuZCBlZW4gaGVlcmxpamsga29wamUga29mZmllIHRlIGRyaW5rZW4sIHZlcnNjaGlqbnQgZXIgb3AgZGUgYm9kZW0gdmFuIGplIGtvZmZpZWtvcGplIGVlbiBnZXppY2h0OyBlZW4gUmVtYnJhbmR0ISBEYXQgaXMga2xlaW4gZ2VsdWsuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiOTIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX19czo0OiJkYXRhIjthOjU6e3M6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjEzIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xNCAxODoyMTowOSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxOToiS09GRklFcmVtYnJhbmR0LmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6IjMxIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTE6IktsZWluIGdlbHVrIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDEzOjA5OjMwIDA4OjE0OjIwIjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjc6IlppdCBqZSBsZWtrZXIgb3AgZWVuIHphdGVyZGFnb2NodGVuZCBlZW4gaGVlcmxpamsga29wamUga29mZmllIHRlIGRyaW5rZW4sIHZlcnNjaGlqbnQgZXIgb3AgZGUgYm9kZW0gdmFuIGplIGtvZmZpZWtvcGplIGVlbiBnZXppY2h0OyBlZW4gUmVtYnJhbmR0ISBEYXQgaXMga2xlaW4gZ2VsdWsuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiOTIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fXM6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6IjMxIjtzOjg6InVzZXJuYW1lIjtzOjE0OiJicnVAZXVyb25ldC5ubCI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTE0IDE0OjQwOjQ3IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTE0IDE0OjQwOjQ3IjtzOjQ6Im5hYW0iO3M6ODoiQnJ1bmV0dGUiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MDp7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MzoiMjEzIjtzOjk6Im9iamVjdF9pZCI7czoyOiI5MiI7czoyOiJpZCI7czozOiIyMTEiO319czo0OiJUYWdzIjthOjI6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjI0IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2MiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjEzIjt9aToxO2E6NDp7czoyOiJpZCI7czozOiIyMjciO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjgwIjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIyMTMiO319fXM6NzoibG9jZGF0YSI7YTozOntzOjg6IkxvY2F0aW9uIjthOjM6e3M6MjoiaWQiO3M6MzoiMTIwIjtzOjM6ImxhdCI7czoxMzoiNTIuMzY0NDMzMzAwMCI7czozOiJsb24iO3M6MTI6IjQuODc0Mjg5NjAwMCI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjE6e2k6MDthOjM6e3M6MTE6ImxvY2F0aW9uX2lkIjtzOjM6IjEyMCI7czo5OiJvYmplY3RfaWQiO3M6MjoiOTIiO3M6MjoiaWQiO3M6MjoiOTIiO319czozOiJBZHIiO2E6MTp7aTowO2E6Mjp7czoyOiJpZCI7czozOiIxMDMiO3M6MTE6ImxvY2F0aW9uX2lkIjtzOjM6IjEyMCI7fX19czo1OiJhZHJlcyI7YToxOntpOjA7YToyOntzOjg6IkFkcnBhcnRzIjthOjU6e3M6MjoiaWQiO3M6MzoiMTAzIjtzOjExOiJhZHJwYXJ0c19pZCI7czozOiIxMDIiO3M6NDoibmFhbSI7czoyOiI5MiI7czo1OiJsZXZlbCI7czoxOiIyIjtzOjY6ImFkcl9pZCI7czozOiIxMDMiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjM6IjEwMiI7czoxMToiYWRycGFydHNfaWQiO3M6MToiMiI7czo0OiJuYWFtIjtzOjE5OiJEZXJkZSBIZWxtZXJzc3RyYWF0IjtzOjU6ImxldmVsIjtzOjE6IjMiO3M6NjoiYWRyX2lkIjtzOjM6IjEwMiI7fX19czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czozMjoiRGl0IGRlZWwgdmFuIGRlIHN0YWQgdmFzdHBha2tlbi4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MjI6Ik91ZC1XZXN0IGluIEJlZWxkVGVrc3QiO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjQ3Mjc6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIE91ZC1XZXN0IGluIEJlZWxkVGVrc3Q8L2E+PC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wL2Q1LmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC9kNS5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wL2Q1LmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gRGVyZGUgSGVsbWVyc3N0cmFhdCA5MgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPnNlcHRlbWJlciAyMDEzCiAgICAgICAgICAgICAgICAgICAgPC9zbWFsbD4KICAgICAgICAgICAgICAgIDwvZmlnY2FwdGlvbj4KICAgICAgICAgICAgPC9maWd1cmU+CgogICAgICAgICAgICA8aDIgc3R5bGU9ImRpc3BsYXk6aW5saW5lOyI+S2xlaW4gZ2VsdWs8YnI+PC9oMj4KCiAgICAgICAgIFppdCBqZSBsZWtrZXIgb3AgZWVuIHphdGVyZGFnb2NodGVuZCBlZW4gaGVlcmxpamsga29wamUga29mZmllIHRlIGRyaW5rZW4sIHZlcnNjaGlqbnQgZXIgb3AgZGUgYm9kZW0gdmFuIGplIGtvZmZpZWtvcGplIGVlbiBnZXppY2h0OyBlZW4gUmVtYnJhbmR0ISBEYXQgaXMga2xlaW4gZ2VsdWsuIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKPGRpdiBjbGFzcz0icmVhY3RpZSI+PGRpdiBjbGFzcz0idGV4dHdyYXBwZXIiPgo8aW1nIHNyYz0iLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9pY29uX3VzZXItMjh4MjQucG5nIiB3aWR0aD0iMjIiIGhlaWdodD0iMjIiIGNsYXNzPSJyZWFjdGltZyIgYWx0PSIiPgo8c3BhbiBjbGFzcz0icGVyc29uIj5Sb248L3NwYW4+LCZuYnNwOzI0IGp1bmkgMjAxNDombmJzcDtUb2Vrb21zdHZvb3JzcGVsbGVuPzwvZGl2PjwvZGl2PiAgICAKPGRpdiBjbGFzcz0idWRpdiByb3VuZCI+Cgo8aDIgaWQ9InVyIj48L2gyPgo8Zm9ybSBpZD0iQWRkRm9ybSIgbmFtZT0iQWRkRm9ybSIgbWV0aG9kPSJwb3N0IiBhY3Rpb249Ii9jb21tZW50L2FkZC8iIG9uc3VibWl0PSJyZXR1cm4gY2hlY2tDb21tZW50QWRkRm9ybSgpOyI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bcGFnaW5hXSIgdmFsdWU9IjIxMyI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtoZXRnZXRhbF0iIHZhbHVlPSIxNjI1MzQxNTUyNjc4ODkiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtkYXR1bV0iIHZhbHVlPSIyMDE1LTAzLTI1IDIwOjU0OjA3Ij4KCjxwPjxicj5Kb3V3IHJlYWN0aWU6PC9wPgoKPGRpdiBjbGFzcz0iaW5wdXQgdGV4dGFyZWEiPjx0ZXh0YXJlYSBuYW1lPSJkYXRhW0NvbW1lbnRzXVtiZXJpY2h0XSIgY29scz0iMzAiIHJvd3M9IjYiIGlkPSJhZGRmb3JtQmVyaWNodCIgPjwvdGV4dGFyZWE+PC9kaXY+Cgo8cD48YnI+TmFhbTo8L3A+PGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW25hYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybU5hYW0iPjwvZGl2PgoKPHA+PGJyPkFudGktc3BhbSB2cmFhZzogSG9ldmVlbCBpcyB0d2VlIHBsdXMgZHJpZT88L3A+CjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtzcGFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1TcGFtIj4gPHNwYW4gc3R5bGU9ImRpc3BsYXk6bm9uZTtjb2xvcjpyZWQ7Zm9udC13ZWlnaHQ6Ym9sZDttYXJnaW4tbGVmdDoxZW07IiAgaWQ9ImNvbW1zZyI+PC9zcGFuPjwvZGl2Pgo8cCBjbGFzcz0iY2VudGVyIj48YnI+PGlucHV0IGNsYXNzPSJjdGEiIHR5cGU9InN1Ym1pdCIgbmFtZT0ibm9uZSIgdmFsdWU9Ikluc3R1cmVuIj48L3A+Cgo8L2Zvcm0+Cgo8cD48c3Ryb25nPk4uQi48L3N0cm9uZz4gRGUgcmVkYWN0aWUga2FuIGplIGJpamRyYWdlIGFhbnBhc3NlbiBvZiB2ZXJ3aWpkZXJlbi4gSGllcm92ZXIgd29yZHQgbmlldCBnZWNvcnJlc3BvbmRlZXJkLjwvcD4KCgo8L2Rpdj4gICAgPC9kaXY+CgoKPC9hcnRpY2xlPgoKPGFzaWRlPgoKCjxkaXYgY2xhc3M9InBhcGVyIj48YSBocmVmPSIvbWVkaWEvdGFnLzYyLyIgY2xhc3M9ImxhYmVsIj4jc291dmVuaXJzPC9hPiA8YSBocmVmPSIvbWVkaWEvdGFnLzgwLyIgY2xhc3M9ImxhYmVsIj4jcmVtYnJhbmR0PC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMjEzKTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8yMTMvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNjQ0MzMzMDAwLCA0Ljg3NDI4OTYwMDApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NTA1OiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9IktsZWluIGdlbHVrIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC9kNS5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8yMTMvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!doctype html><html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/base.css">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/map.css" /><style>.b4{background:url('//bvstemmen.nl/img/bg/beeldtekst.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
.b3{background:url('//bvstemmen.nl/img/bg/beeldtekst.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
</style>
<script type="text/javascript" src="//bvstemmen.nl/js/base.js"></script>
<script type="text/javascript" src="//bvstemmen.nl/js/leaflet.js"></script><script type="text/javascript" src="//bvstemmen.nl/js/leaflet.markercluster.js"></script><title>Oud-West in BeeldTekst</title>
<meta name="description" content="Dit deel van de stad vastpakken.">
<meta name="apple-mobile-web-app-capable" content="yes"><meta name=viewport content="width=device-width, initial-scale=1">
<meta property="og:type" content="website"><meta property="og:site_name" content="Buurt Vol Stemmen"><meta property="og:locale" content="nl_NL">
<meta property="og:title" content="Klein geluk" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/d5.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/213/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/d5.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/d5.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/d5.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        
                                                    - Derde Helmersstraat 92
                            <br>september 2013
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Klein geluk<br></h2>

         Zit je lekker op een zaterdagochtend een heerlijk kopje koffie te drinken, verschijnt er op de bodem van je koffiekopje een gezicht; een Rembrandt! Dat is klein geluk. 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
<div class="reactie"><div class="textwrapper">
<img src="//bvstemmen.nl/img/ics/icon_user-28x24.png" width="22" height="22" class="reactimg" alt="">
<span class="person">Ron</span>,&nbsp;24 juni 2014:&nbsp;Toekomstvoorspellen?</div></div>    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="213">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 20:54:07">

<p><br>Jouw reactie:</p>

<div class="input textarea"><textarea name="data[Comments][bericht]" cols="30" rows="6" id="addformBericht" ></textarea></div>

<p><br>Naam:</p><div class="input text"><input name="data[Comments][naam]" type="text" value="" id="addformNaam"></div>

<p><br>Anti-spam vraag: Hoeveel is twee plus drie?</p>
<div class="input text"><input name="data[Comments][spam]" type="text" value="" id="addformSpam"> <span style="display:none;color:red;font-weight:bold;margin-left:1em;"  id="commsg"></span></div>
<p class="center"><br><input class="cta" type="submit" name="none" value="Insturen"></p>

</form>

<p><strong>N.B.</strong> De redactie kan je bijdrage aanpassen of verwijderen. Hierover wordt niet gecorrespondeerd.</p>


</div>    </div>


</article>

<aside>


<div class="paper"><a href="/media/tag/62/" class="label">#souvenirs</a> <a href="/media/tag/80/" class="label">#rembrandt</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,213);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/213/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3644333000, 4.8742896000);
        map.setView(lll, 17);

        PosIcon = new L.Icon({iconUrl: "//bvstemmen.nl/img/ics/marker.png", iconSize: [22, 42], iconAnchor: [11, 42]});
        PosMark = new L.marker(lll, {icon: PosIcon, draggable: false}).addTo(map);

        map.touchZoom.disable();
        map.doubleClickZoom.disable();
        map.scrollWheelZoom.disable();
        map.boxZoom.disable();
        map.keyboard.disable();
    }

</script>
<style>.leaflet-control-zoom{display:none;}</style>
<div style="display:none;" id="imgenl" class="imgenl" onclick="$('imgenl').style.display = 'none';">
    <img id="imeni" class="imeni" src="" alt="">
</div><div id="smh"><a href="#bodyid"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></div>
<nav><ul class="navul"><li class="navli"><a class="nava" href="//bvstemmen.nl/contact/">Contact</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/over/">Over</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/uitleg/">Plannen</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/agenda/">Agenda</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/projecten/">Projecten</a></li><li class="navli"><a class="nava" href="//bvstemmen.nl/">Home</a></li></ul></nav>
<div id="b3" class="b3"></div><div id="b4" class="b4" style="opacity: 1.0;"></div><div class="b5"></div><div class="b1"></div><div class="b2 shade"></div></body></html>