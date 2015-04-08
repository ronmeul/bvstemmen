<!--cachetime:1426326528--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjE4NSI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMTg1LyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8xODUvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6MTp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMTg3IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2NyI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTg1Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjY3IjtzOjc6InRhZ25hbWUiO3M6MTE6InN0cmF0ZW50b2VuIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIxODUiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTExIDIyOjI5OjE2IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjIxOiJLYW5hYWxzdHJhYXQob3VkKS5qcGciO3M6NzoidXNlcl9pZCI7czoxOiIzIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MDoiIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjA6IiI7czoxMToib3BtZXJraW5nZW4iO3M6MDoiIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjE4NSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMDItMTEgMjI6Mjk6MTYiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjE6IkthbmFhbHN0cmFhdChvdWQpLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjE6IjMiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czowOiIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MDoiIjtzOjExOiJvcG1lcmtpbmdlbiI7czowOiIiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fXM6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjE6IjMiO3M6ODoidXNlcm5hbWUiO3M6MTc6InJvbm1ldWxAeHM0YWxsLm5sIjtzOjg6InBhc3N3b3JkIjtzOjQwOiI1MTI1NWRhNGVkMzU5NmVlZGMwOGM0NzMyNmQ0MWYwOTEwYjlkZDJmIjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTEwLTA5IDE0OjMyOjU0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTEwLTA5IDE0OjMyOjU0IjtzOjQ6Im5hYW0iO3M6MTU6IlJvbiBNZXVsZW5zdGVlbiI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fXM6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7YTowOnt9czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIxODUiO3M6OToib2JqZWN0X2lkIjtzOjI6IjY1IjtzOjI6ImlkIjtzOjM6IjE4MyI7fX1zOjQ6IlRhZ3MiO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czozOiIxODciO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjY3IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxODUiO319fXM6NzoibG9jZGF0YSI7YTozOntzOjg6IkxvY2F0aW9uIjthOjM6e3M6MjoiaWQiO3M6MjoiOTUiO3M6MzoibGF0IjtzOjEzOiI1Mi4zNjE5MzY3MDAwIjtzOjM6ImxvbiI7czoxMjoiNC44NjIzNjc1MDAwIjt9czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO2E6MTp7aTowO2E6Mzp7czoxMToibG9jYXRpb25faWQiO3M6MjoiOTUiO3M6OToib2JqZWN0X2lkIjtzOjI6IjY1IjtzOjI6ImlkIjtzOjI6IjY1Ijt9fXM6MzoiQWRyIjthOjE6e2k6MDthOjI6e3M6MjoiaWQiO3M6MjoiNzgiO3M6MTE6ImxvY2F0aW9uX2lkIjtzOjI6Ijk1Ijt9fX1zOjU6ImFkcmVzIjthOjE6e2k6MDthOjI6e3M6ODoiQWRycGFydHMiO2E6NTp7czoyOiJpZCI7czoyOiI3OCI7czoxMToiYWRycGFydHNfaWQiO3M6MToiMiI7czo0OiJuYWFtIjtzOjEyOiJLYW5hYWxzdHJhYXQiO3M6NToibGV2ZWwiO3M6MToiMyI7czo2OiJhZHJfaWQiO3M6MjoiNzgiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjE6IjIiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjE6IjEiO3M6NDoibmFhbSI7czo5OiJBbXN0ZXJkYW0iO3M6NToibGV2ZWwiO3M6MToiNSI7czo2OiJhZHJfaWQiO3M6MToiMiI7fX19czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czo0MzoiU3RyYWF0YmVlbGQgdmFuIGRlIGJ1dXJ0IGluIGtvcnRlIGZpbG1wamVzLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czozOTMzOiI8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyICI+CiAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciA0MCBzZWNvbmRlbjwvYT4gPC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wL2I5LmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC9iOS5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wL2I5LmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQW1zdGVyZGFtIEthbmFhbHN0cmFhdAoKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5BbXN0ZXJkYW0gS2FuYWFsc3RyYWF0PGJyPjwvaDI+CgogICAgICAgIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMTg1Ij4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMTQgMDk6NDg6NDgiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKCgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9Im1hcCIgY2xhc3M9Im1hcCI+PC9kaXY+PC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPgogICAgICAgIDxkaXYgc3R5bGU9Im92ZXJmbG93OiBoaWRkZW4iPjxoMj5WbGFrYmlqPC9oMj4KICAgICAgICAgICAgPGRpdiBpZD0ibWVkbGlzdCI+PC9kaXY+CiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJmYi1yb290Ij48L2Rpdj4KPGRpdiBjbGFzcz0iZmItc2hhcmUtYnV0dG9uIiBkYXRhLWhyZWY9Imh0dHA6Ly80MHNlYy5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzE4NS8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKDUyLjM2MTkzNjcwMDAsIDQuODYyMzY3NTAwMCk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo1MTE6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iQW1zdGVyZGFtIEthbmFhbHN0cmFhdCIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93NjAwLzAvYjkuanBnIiAvPjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHA6Ly80MHNlYy5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzE4NS8iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJidnN0ZW1tZW4iIC8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLy9idnN0ZW1tZW4ubmwvY3NzL21hcC5jc3MiIC8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5qcyI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5tYXJrZXJjbHVzdGVyLmpzIj48L3NjcmlwdD4iO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!doctype html><html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/base.css">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/map.css" /><style>.b4{background:url('//bvstemmen.nl/img/bg/40sec.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
    .b3{background:url('//bvstemmen.nl/img/bg/40sec.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
</style>
<script type="text/javascript" src="//bvstemmen.nl/js/base.js"></script>
<script type="text/javascript" src="//bvstemmen.nl/js/leaflet.js"></script><script type="text/javascript" src="//bvstemmen.nl/js/leaflet.markercluster.js"></script><title>40 seconden</title>
<meta name="description" content="Straatbeeld van de buurt in korte filmpjes.">
<meta name="apple-mobile-web-app-capable" content="yes"><meta name=viewport content="width=device-width, initial-scale=1">
<meta property="og:type" content="website"><meta property="og:site_name" content="Buurt Vol Stemmen"><meta property="og:locale" content="nl_NL">
<meta property="og:title" content="Amsterdam Kanaalstraat" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/b9.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/185/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/b9.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/b9.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/b9.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        
                                                    - Amsterdam Kanaalstraat

                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Amsterdam Kanaalstraat<br></h2>

        
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="185">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-14 09:48:48">

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




    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/185/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3619367000, 4.8623675000);
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