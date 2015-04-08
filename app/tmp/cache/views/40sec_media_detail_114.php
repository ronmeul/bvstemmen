<!--cachetime:1426893869--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjExNCI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMTE0LyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8xMTQvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjI6IjMxIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiIxOSI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTE0Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjE5IjtzOjc6InRhZ25hbWUiO3M6NDoibWFhbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMTE0IjtzOjg6ImV4dGVuc2llIjtzOjM6Im1vdiI7czo4OiJzb29ydF9pZCI7czoxOiIyIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxMy0xMi0xMSAxMjo1MToyNiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czo4OiJtYWFuLm1vdiI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxMDoibWFhbiwgcGxhcyI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxODoiMjAxMzoxMDoyOCDCoDIzOjAwIjtzOjExOiJvcG1lcmtpbmdlbiI7czowOiIiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI1MyI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMSI7czo1OiJzY2FsZSI7czoxOiIwIjt9fWk6MTthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjI6IjMyIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiIxOCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTE0Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjE4IjtzOjc6InRhZ25hbWUiO3M6NjoiZG9ua2VyIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIxMTQiO3M6ODoiZXh0ZW5zaWUiO3M6MzoibW92IjtzOjg6InNvb3J0X2lkIjtzOjE6IjIiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDEzLTEyLTExIDEyOjUxOjI2IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjg6Im1hYW4ubW92IjtzOjc6InVzZXJfaWQiO3M6MToiNSI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjEwOiJtYWFuLCBwbGFzIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE4OiIyMDEzOjEwOjI4IMKgMjM6MDAiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjA6IiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjUzIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIxIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToyO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMTIwIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI1NyI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTE0Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjU3IjtzOjc6InRhZ25hbWUiO3M6NToiNDBzZWMiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjExNCI7czo4OiJleHRlbnNpZSI7czozOiJtb3YiO3M6ODoic29vcnRfaWQiO3M6MToiMiI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTItMTEgMTI6NTE6MjYiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6ODoibWFhbi5tb3YiO3M6NzoidXNlcl9pZCI7czoxOiI1IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTA6Im1hYW4sIHBsYXMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTg6IjIwMTM6MTA6MjggwqAyMzowMCI7czoxMToib3BtZXJraW5nZW4iO3M6MDoiIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiNTMiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjEiO3M6NToic2NhbGUiO3M6MToiMCI7fX19czo0OiJkYXRhIjthOjU6e3M6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMTE0IjtzOjg6ImV4dGVuc2llIjtzOjM6Im1vdiI7czo4OiJzb29ydF9pZCI7czoxOiIyIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxMy0xMi0xMSAxMjo1MToyNiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czo4OiJtYWFuLm1vdiI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxMDoibWFhbiwgcGxhcyI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxODoiMjAxMzoxMDoyOCDCoDIzOjAwIjtzOjExOiJvcG1lcmtpbmdlbiI7czowOiIiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI1MyI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMSI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MToiNSI7czo4OiJ1c2VybmFtZSI7czoxNjoiamNla2VlQGdtYWlsLmNvbSI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTEwLTE1IDExOjU2OjIyIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTEwLTE1IDExOjU2OjIyIjtzOjQ6Im5hYW0iO3M6MTA6Implcm9lbiBrZWUiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czoyOiIzNCI7czo4OiJtZWRpYV9pZCI7czozOiIxMTQiO3M6MTI6InJlbGF0aWVzb29ydCI7czo1OiJtYWtlciI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIxMTQiO3M6OToib2JqZWN0X2lkIjtzOjI6IjM5IjtzOjI6ImlkIjtzOjM6IjExMiI7fX1zOjQ6IlRhZ3MiO2E6Mzp7aTowO2E6NDp7czoyOiJpZCI7czoyOiIzMSI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiMTkiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjExNCI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MjoiMzIiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjE4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxMTQiO31pOjI7YTo0OntzOjI6ImlkIjtzOjM6IjEyMCI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNTciO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjExNCI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czoyOiI2OCI7czozOiJsYXQiO3M6MTM6IjUyLjM2Njk5MzUwMDAiO3M6MzoibG9uIjtzOjEyOiI0Ljg2MjY3NTIwMDAiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czoyOiI2OCI7czo5OiJvYmplY3RfaWQiO3M6MjoiMzkiO3M6MjoiaWQiO3M6MjoiMzkiO319czozOiJBZHIiO2E6MTp7aTowO2E6Mjp7czoyOiJpZCI7czoyOiI1MCI7czoxMToibG9jYXRpb25faWQiO3M6MjoiNjgiO319fXM6NToiYWRyZXMiO2E6MTp7aTowO2E6Mjp7czo4OiJBZHJwYXJ0cyI7YTo1OntzOjI6ImlkIjtzOjI6IjUwIjtzOjExOiJhZHJwYXJ0c19pZCI7czoyOiIyMSI7czo0OiJuYWFtIjtzOjI6IjUzIjtzOjU6ImxldmVsIjtzOjE6IjIiO3M6NjoiYWRyX2lkIjtzOjI6IjUwIjt9czo5OiJBZHJwYXJ0c2IiO2E6NTp7czoyOiJpZCI7czoyOiIyMSI7czoxMToiYWRycGFydHNfaWQiO3M6MToiMiI7czo0OiJuYWFtIjtzOjIzOiJUd2VlZGUgS29zdHZlcmxvcmVua2FkZSI7czo1OiJsZXZlbCI7czoxOiIzIjtzOjY6ImFkcl9pZCI7czoyOiIyMSI7fX19czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoxOiI1IjtzOjg6InVzZXJuYW1lIjtzOjE2OiJqY2VrZWVAZ21haWwuY29tIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTAtMTUgMTE6NTY6MjIiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTAtMTUgMTE6NTY6MjIiO3M6NDoibmFhbSI7czoxMDoiamVyb2VuIGtlZSI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjQzOiJTdHJhYXRiZWVsZCB2YW4gZGUgYnV1cnQgaW4ga29ydGUgZmlsbXBqZXMuIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjExOiI0MCBzZWNvbmRlbiI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjExOiI0MCBzZWNvbmRlbiI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjM3NDA6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIDQwIHNlY29uZGVuPC9hPiA8L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKICAgICAgICAgICAgICAgICAgICAgICAgPHZpZGVvIHdpZHRoPSIxMDAlIiBjb250cm9scz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzb3VyY2Ugc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC92aWRlby8wLzcyLm1wNCIgdHlwZT0idmlkZW8vbXA0Ij4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzb3VyY2Ugc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC92aWRlby8wLzcyLm9nZyIgdHlwZT0idmlkZW8vb2dnIj4KICAgICAgICAgICAgICAgICAgICAgICAgPC92aWRlbz4KCgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icGVyc29uIj5qZXJvZW4ga2VlPC9zcGFuPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLSBUd2VlZGUgS29zdHZlcmxvcmVua2FkZSA1MwogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPm9rdG9iZXIgMjAxMwogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPm1hYW4sIHBsYXM8YnI+PC9oMj4KCiAgICAgICAgCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIxMTQiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0yMCAyMzoyNDoyOSI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgo8ZGl2IGNsYXNzPSJwYXBlciI+PGEgaHJlZj0iL21lZGlhL3RhZy8xOS8iIGNsYXNzPSJsYWJlbCI+I21hYW48L2E+IDxhIGhyZWY9Ii9tZWRpYS90YWcvMTgvIiBjbGFzcz0ibGFiZWwiPiNkb25rZXI8L2E+IAoKPGlucHV0IGlkPSJ0YWdhZGRMYWJlbCIgdHlwZT0idGV4dCIgdmFsdWU9Im5pZXV3IGxhYmVsIiBvbmtleXVwPSJ0YWdhZGQodGhpcyxldmVudCwxMTQpOyIgb25ibHVyPSJpbnB1dExlYXZlKHRoaXMpOyIgb25mb2N1cz0iaW5wdXRGb2N1cyh0aGlzKTsiIHNwZWxsY2hlY2s9ImZhbHNlIiBhdXRvY29tcGxldGU9Im9mZiIgbmFtZT0idGFnYWRkTGFiZWwiPjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8xMTQvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNjY5OTM1MDAwLCA0Ljg2MjY3NTIwMDApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NDk5OiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9Im1hYW4sIHBsYXMiIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wLzcyLm1vdiIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6dXJsIiBjb250ZW50PSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8xMTQvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="maan, plas" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/72.mov" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/114/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">

                        <video width="100%" controls>
                            <source src="//cache.bvstemmen.nl/video/0/72.mp4" type="video/mp4">
                            <source src="//cache.bvstemmen.nl/video/0/72.ogg" type="video/ogg">
                        </video>


    

                <figcaption>
                    <small>
                        <span class="person">jeroen kee</span>
                                                    - Tweede Kostverlorenkade 53
                            <br>oktober 2013
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">maan, plas<br></h2>

        
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="114">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-20 23:24:29">

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


<div class="paper"><a href="/media/tag/19/" class="label">#maan</a> <a href="/media/tag/18/" class="label">#donker</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,114);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/114/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3669935000, 4.8626752000);
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