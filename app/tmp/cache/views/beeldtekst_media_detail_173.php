<!--cachetime:1425485663--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjE3MyI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMTczLyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8xNzMvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjE2NiI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNzEiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjE3MyI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czoyOiI3MSI7czo3OiJ0YWduYW1lIjtzOjU6InN0cmlwIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIxNzMiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTEwIDE2OjU4OjUyIjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjE1OiJzdHJpcEhFTUFfMi5qcGciO3M6NzoidXNlcl9pZCI7czoyOiIzMSI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjE2OiJaaWNodGJhcmUgbGlqbmVuIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAyOjA4IDE1OjExOjA3IjtzOjExOiJvcG1lcmtpbmdlbiI7czo1MToiU3RyaXB0ZWtlbmFhcnMgdGVrZW5lbiBkZSBldGFsYWdlcyB2YW4gZGUgSGVtYSB2b2wuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiODEiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjE7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiIxNjciO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjcyIjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxNzMiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MjoiNzIiO3M6NzoidGFnbmFtZSI7czo4OiJldGFsYWdlcyI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMTczIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xMCAxNjo1ODo1MiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToic3RyaXBIRU1BXzIuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNjoiWmljaHRiYXJlIGxpam5lbiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDowMjowOCAxNToxMTowNyI7czoxMToib3BtZXJraW5nZW4iO3M6NTE6IlN0cmlwdGVrZW5hYXJzIHRla2VuZW4gZGUgZXRhbGFnZXMgdmFuIGRlIEhlbWEgdm9sLiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjgxIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToyO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMTgyIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI1OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTczIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjU4IjtzOjc6InRhZ25hbWUiO3M6MTU6InppY2h0YmFyZWxpam5lbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMTczIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xMCAxNjo1ODo1MiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToic3RyaXBIRU1BXzIuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNjoiWmljaHRiYXJlIGxpam5lbiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDowMjowOCAxNToxMTowNyI7czoxMToib3BtZXJraW5nZW4iO3M6NTE6IlN0cmlwdGVrZW5hYXJzIHRla2VuZW4gZGUgZXRhbGFnZXMgdmFuIGRlIEhlbWEgdm9sLiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjgxIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjE3MyI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMDItMTAgMTY6NTg6NTIiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTU6InN0cmlwSEVNQV8yLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6IjMxIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTY6IlppY2h0YmFyZSBsaWpuZW4iO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDI6MDggMTU6MTE6MDciO3M6MTE6Im9wbWVya2luZ2VuIjtzOjUxOiJTdHJpcHRla2VuYWFycyB0ZWtlbmVuIGRlIGV0YWxhZ2VzIHZhbiBkZSBIZW1hIHZvbC4iO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI4MSI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiMzEiO3M6ODoidXNlcm5hbWUiO3M6MTQ6ImJydUBldXJvbmV0Lm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMTQgMTQ6NDA6NDciO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMTQgMTQ6NDA6NDciO3M6NDoibmFhbSI7czo4OiJCcnVuZXR0ZSI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fXM6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7YToxOntpOjA7YTo0OntzOjI6ImlkIjtzOjI6Ijc3IjtzOjg6Im1lZGlhX2lkIjtzOjM6IjE3MyI7czoxMjoicmVsYXRpZXNvb3J0IjtzOjU6Im1ha2VyIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIxNzMiO3M6OToib2JqZWN0X2lkIjtzOjI6IjY3IjtzOjI6ImlkIjtzOjM6IjE3MSI7fX1zOjQ6IlRhZ3MiO2E6Mzp7aTowO2E6NDp7czoyOiJpZCI7czozOiIxNjYiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjcxIjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxNzMiO31pOjE7YTo0OntzOjI6ImlkIjtzOjM6IjE2NyI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNzIiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjE3MyI7fWk6MjthOjQ6e3M6MjoiaWQiO3M6MzoiMTgyIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI1OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTczIjt9fX1zOjc6ImxvY2RhdGEiO2E6Mzp7czo4OiJMb2NhdGlvbiI7YTozOntzOjI6ImlkIjtzOjI6Ijk3IjtzOjM6ImxhdCI7czoxMzoiNTIuMzY0MTM4MTAwMCI7czozOiJsb24iO3M6MTI6IjQuODYzMjgxNjAwMCI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjE6e2k6MDthOjM6e3M6MTE6ImxvY2F0aW9uX2lkIjtzOjI6Ijk3IjtzOjk6Im9iamVjdF9pZCI7czoyOiI2NyI7czoyOiJpZCI7czoyOiI2NyI7fX1zOjM6IkFkciI7YToxOntpOjA7YToyOntzOjI6ImlkIjtzOjI6IjgwIjtzOjExOiJsb2NhdGlvbl9pZCI7czoyOiI5NyI7fX19czo1OiJhZHJlcyI7YToxOntpOjA7YToyOntzOjg6IkFkcnBhcnRzIjthOjU6e3M6MjoiaWQiO3M6MjoiODAiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjI6Ijc5IjtzOjQ6Im5hYW0iO3M6MjoiODEiO3M6NToibGV2ZWwiO3M6MToiMiI7czo2OiJhZHJfaWQiO3M6MjoiODAiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjI6Ijc5IjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIyIjtzOjQ6Im5hYW0iO3M6MjI6IkphbiBQaWV0ZXIgSGVpamVzdHJhYXQiO3M6NToibGV2ZWwiO3M6MToiMyI7czo2OiJhZHJfaWQiO3M6MjoiNzkiO319fXM6NToibWFrZXIiO2E6MTp7czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiMzEiO3M6ODoidXNlcm5hbWUiO3M6MTQ6ImJydUBldXJvbmV0Lm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMTQgMTQ6NDA6NDciO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMTQgMTQ6NDA6NDciO3M6NDoibmFhbSI7czo4OiJCcnVuZXR0ZSI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjMyOiJEaXQgZGVlbCB2YW4gZGUgc3RhZCB2YXN0cGFra2VuLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjIyOiJPdWQtV2VzdCBpbiBCZWVsZFRla3N0IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NDQ3MToiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgT3VkLVdlc3QgaW4gQmVlbGRUZWtzdDwvYT48L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgY2xhc3M9Iml0ZW1pbWcgY2xpY2thYmxlIiBpZD0idGhlaW1nIiBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93MjEzLzAvYWQuanBnIiAgb25jbGljaz0icG9wdXBpbWcoJy8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZycsICcwL2FkLmpwZycpOyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBvbmxvYWRmaXhpbWcoKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBteWVsID0gJCgiYjMiKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgaW1nZWwgPSAkKCJ0aGVpbWciKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbWggPSBteWVsLmNsaWVudEhlaWdodDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgdGggPSBtaCAtIDI4MDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5oZWlnaHQgPSB0aDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5zcmMgPSAiLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL2giICsgdGggKyAiLzAvYWQuanBnIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkZExvYWRFdmVudChmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbmxvYWRmaXhpbWcoKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgICAgICAgICA8L3NjcmlwdD4KCiAgICAKCiAgICAgICAgICAgICAgICA8ZmlnY2FwdGlvbj4KICAgICAgICAgICAgICAgICAgICA8c21hbGw+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwZXJzb24iPkJydW5ldHRlPC9zcGFuPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLSBKYW4gUGlldGVyIEhlaWplc3RyYWF0IDgxCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+ZmVicnVhcmkgMjAxNAogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPlppY2h0YmFyZSBsaWpuZW48YnI+PC9oMj4KCiAgICAgICAgIFN0cmlwdGVrZW5hYXJzIHRla2VuZW4gZGUgZXRhbGFnZXMgdmFuIGRlIEhlbWEgdm9sLiAKICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyICIgPgo8cD5HZWVmIDxhIGhyZWY9IiN1ciI+amUgcmVhY3RpZTwvYT4gb3AgZGl0IGl0ZW0uPC9wPgogICAgCiAgICAKPGRpdiBjbGFzcz0idWRpdiByb3VuZCI+Cgo8aDIgaWQ9InVyIj48L2gyPgo8Zm9ybSBpZD0iQWRkRm9ybSIgbmFtZT0iQWRkRm9ybSIgbWV0aG9kPSJwb3N0IiBhY3Rpb249Ii9jb21tZW50L2FkZC8iIG9uc3VibWl0PSJyZXR1cm4gY2hlY2tDb21tZW50QWRkRm9ybSgpOyI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bcGFnaW5hXSIgdmFsdWU9IjE3MyI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtoZXRnZXRhbF0iIHZhbHVlPSIxNjI1MzQxNTUyNjc4ODkiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtkYXR1bV0iIHZhbHVlPSIyMDE1LTAzLTA0IDE2OjE0OjIzIj4KCjxwPjxicj5Kb3V3IHJlYWN0aWU6PC9wPgoKPGRpdiBjbGFzcz0iaW5wdXQgdGV4dGFyZWEiPjx0ZXh0YXJlYSBuYW1lPSJkYXRhW0NvbW1lbnRzXVtiZXJpY2h0XSIgY29scz0iMzAiIHJvd3M9IjYiIGlkPSJhZGRmb3JtQmVyaWNodCIgPjwvdGV4dGFyZWE+PC9kaXY+Cgo8cD48YnI+TmFhbTo8L3A+PGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW25hYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybU5hYW0iPjwvZGl2PgoKPHA+PGJyPkFudGktc3BhbSB2cmFhZzogSG9ldmVlbCBpcyB0d2VlIHBsdXMgZHJpZT88L3A+CjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtzcGFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1TcGFtIj4gPHNwYW4gc3R5bGU9ImRpc3BsYXk6bm9uZTtjb2xvcjpyZWQ7Zm9udC13ZWlnaHQ6Ym9sZDttYXJnaW4tbGVmdDoxZW07IiAgaWQ9ImNvbW1zZyI+PC9zcGFuPjwvZGl2Pgo8cCBjbGFzcz0iY2VudGVyIj48YnI+PGlucHV0IGNsYXNzPSJjdGEiIHR5cGU9InN1Ym1pdCIgbmFtZT0ibm9uZSIgdmFsdWU9Ikluc3R1cmVuIj48L3A+Cgo8L2Zvcm0+Cgo8cD48c3Ryb25nPk4uQi48L3N0cm9uZz4gRGUgcmVkYWN0aWUga2FuIGplIGJpamRyYWdlIGFhbnBhc3NlbiBvZiB2ZXJ3aWpkZXJlbi4gSGllcm92ZXIgd29yZHQgbmlldCBnZWNvcnJlc3BvbmRlZXJkLjwvcD4KCgo8L2Rpdj4gICAgPC9kaXY+CgoKPC9hcnRpY2xlPgoKPGFzaWRlPgoKCjxkaXYgY2xhc3M9InBhcGVyIj48YSBocmVmPSIvbWVkaWEvdGFnLzcxLyIgY2xhc3M9ImxhYmVsIj4jc3RyaXA8L2E+IDxhIGhyZWY9Ii9tZWRpYS90YWcvNzIvIiBjbGFzcz0ibGFiZWwiPiNldGFsYWdlczwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy81OC8iIGNsYXNzPSJsYWJlbCI+I3ppY2h0YmFyZWxpam5lbjwvYT4gCgo8aW5wdXQgaWQ9InRhZ2FkZExhYmVsIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0ibmlldXcgbGFiZWwiIG9ua2V5dXA9InRhZ2FkZCh0aGlzLGV2ZW50LDE3Myk7IiBvbmJsdXI9ImlucHV0TGVhdmUodGhpcyk7IiBvbmZvY3VzPSJpbnB1dEZvY3VzKHRoaXMpOyIgc3BlbGxjaGVjaz0iZmFsc2UiIGF1dG9jb21wbGV0ZT0ib2ZmIiBuYW1lPSJ0YWdhZGRMYWJlbCI+PC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9Im1hcCIgY2xhc3M9Im1hcCI+PC9kaXY+PC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPgogICAgICAgIDxkaXYgc3R5bGU9Im92ZXJmbG93OiBoaWRkZW4iPjxoMj5WbGFrYmlqPC9oMj4KICAgICAgICAgICAgPGRpdiBpZD0ibWVkbGlzdCI+PC9kaXY+CiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJmYi1yb290Ij48L2Rpdj4KPGRpdiBjbGFzcz0iZmItc2hhcmUtYnV0dG9uIiBkYXRhLWhyZWY9Imh0dHA6Ly9iZWVsZHRla3N0LmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMTczLyIgZGF0YS1sYXlvdXQ9Imljb25fbGluayI+PC9kaXY+PC9kaXY+Cgo8L2FzaWRlPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgZnVuY3Rpb24gc2V0cGluKCkKICAgIHsKICAgICAgICB2YXIgbGxsID0gTC5sYXRMbmcoNTIuMzY0MTM4MTAwMCwgNC44NjMyODE2MDAwKTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjUxMDoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJaaWNodGJhcmUgbGlqbmVuIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC9hZC5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8xNzMvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="Zichtbare lijnen" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/ad.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/173/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/ad.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/ad.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/ad.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Brunette</span>
                                                    - Jan Pieter Heijestraat 81
                            <br>februari 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Zichtbare lijnen<br></h2>

         Striptekenaars tekenen de etalages van de Hema vol. 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="173">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-04 16:14:23">

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


<div class="paper"><a href="/media/tag/71/" class="label">#strip</a> <a href="/media/tag/72/" class="label">#etalages</a> <a href="/media/tag/58/" class="label">#zichtbarelijnen</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,173);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/173/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3641381000, 4.8632816000);
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