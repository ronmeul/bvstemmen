<!--cachetime:1427434885--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjE6IjYiO31zOjY6ImlzQWpheCI7YjowO3M6NjoibW9kZWxzIjthOjE1OntzOjU6Ik1lZGlhIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjU6Ik1lZGlhIjt9czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjt9czo3OiJPYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjc6Ik9iamVjdHMiO31zOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO31zOjg6IkFkcnBhcnRzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9czo4OiJBZHJ0YWJsZSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBZHJ0YWJsZSI7fXM6ODoiTG9jYXRpb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiTG9jYXRpb24iO31zOjM6IkFkciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBZHIiO31zOjQ6IlVzZXIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVXNlciI7fXM6NDoiVGFncyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJUYWdzIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJUYWduYW1lcyI7fXM6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNToiTmFtZXN3aXRobWVkaXVtIjt9czo4OiJQcm9qZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJQcm9qZWN0cyI7fXM6ODoiTWVzc2FnZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiTWVzc2FnZXMiO31zOjk6IkFkcnBhcnRzYiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBZHJwYXJ0cyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNToibWVkaWEvZGV0YWlsLzYvIjtzOjQ6ImJhc2UiO3M6MDoiIjtzOjc6IndlYnJvb3QiO3M6MToiLyI7czo0OiJoZXJlIjtzOjE2OiIvbWVkaWEvZGV0YWlsLzYvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6MTp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMjQ4IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2NyI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MToiNiI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czoyOiI2NyI7czo3OiJ0YWduYW1lIjtzOjExOiJzdHJhdGVudG9lbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MToiNiI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTEtMDcgMjE6NTA6MjAiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTk6ImtpbmtlcnN0cmFhdDAwMS5qcGciO3M6NzoidXNlcl9pZCI7czoxOiIwIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MDoiIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjA6IiI7czoxMToib3BtZXJraW5nZW4iO3M6MDoiIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjE6IjYiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDEzLTExLTA3IDIxOjUwOjIwIjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjE5OiJraW5rZXJzdHJhYXQwMDEuanBnIjtzOjc6InVzZXJfaWQiO3M6MToiMCI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjA6IiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czowOiIiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjA6IiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO047czo4OiJ1c2VybmFtZSI7TjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7TjtzOjQ6Im5hYW0iO047czo5OiJuYWFtX3ppZW4iO047fXM6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7YTowOnt9czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czoxOiI2IjtzOjk6Im9iamVjdF9pZCI7czoxOiI1IjtzOjI6ImlkIjtzOjE6IjYiO319czo0OiJUYWdzIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjQ4IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2NyI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MToiNiI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czoyOiIyNyI7czozOiJsYXQiO3M6MTM6IjUyLjM2NjI4MDEwMDAiO3M6MzoibG9uIjtzOjEyOiI0Ljg2ODg3MTIwMDAiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czoyOiIyNyI7czo5OiJvYmplY3RfaWQiO3M6MToiNSI7czoyOiJpZCI7czoxOiI1Ijt9fXM6MzoiQWRyIjthOjE6e2k6MDthOjI6e3M6MjoiaWQiO3M6MToiOSI7czoxMToibG9jYXRpb25faWQiO3M6MjoiMjciO319fXM6NToiYWRyZXMiO2E6MTp7aTowO2E6Mjp7czo4OiJBZHJwYXJ0cyI7YTo1OntzOjI6ImlkIjtzOjE6IjkiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjE6IjIiO3M6NDoibmFhbSI7czoxMjoiS2lua2Vyc3RyYWF0IjtzOjU6ImxldmVsIjtzOjE6IjMiO3M6NjoiYWRyX2lkIjtzOjE6IjkiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjE6IjIiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjE6IjEiO3M6NDoibmFhbSI7czo5OiJBbXN0ZXJkYW0iO3M6NToibGV2ZWwiO3M6MToiNSI7czo2OiJhZHJfaWQiO3M6MToiMiI7fX19czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czozMjoiRGl0IGRlZWwgdmFuIGRlIHN0YWQgdmFzdHBha2tlbi4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MjI6Ik91ZC1XZXN0IGluIEJlZWxkVGVrc3QiO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjM5NDE6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIE91ZC1XZXN0IGluIEJlZWxkVGVrc3Q8L2E+PC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wLzYuanBnIiAgb25jbGljaz0icG9wdXBpbWcoJy8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZycsICcwLzYuanBnJyk7Ij4KICAgICAgICAgICAgICAgICAgICAgICAgPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIG9ubG9hZGZpeGltZygpCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG15ZWwgPSAkKCJiMyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBpbWdlbCA9ICQoInRoZWltZyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBtaCA9IG15ZWwuY2xpZW50SGVpZ2h0OwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB0aCA9IG1oIC0gMjgwOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLmhlaWdodCA9IHRoOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLnNyYyA9ICIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvaCIgKyB0aCArICIvMC82LmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQW1zdGVyZGFtIEtpbmtlcnN0cmFhdAoKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5BbXN0ZXJkYW0gS2lua2Vyc3RyYWF0PGJyPjwvaDI+CgogICAgICAgIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iNiI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtoZXRnZXRhbF0iIHZhbHVlPSIxNjI1MzQxNTUyNjc4ODkiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtkYXR1bV0iIHZhbHVlPSIyMDE1LTAzLTI3IDA1OjQxOjI1Ij4KCjxwPjxicj5Kb3V3IHJlYWN0aWU6PC9wPgoKPGRpdiBjbGFzcz0iaW5wdXQgdGV4dGFyZWEiPjx0ZXh0YXJlYSBuYW1lPSJkYXRhW0NvbW1lbnRzXVtiZXJpY2h0XSIgY29scz0iMzAiIHJvd3M9IjYiIGlkPSJhZGRmb3JtQmVyaWNodCIgPjwvdGV4dGFyZWE+PC9kaXY+Cgo8cD48YnI+TmFhbTo8L3A+PGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW25hYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybU5hYW0iPjwvZGl2PgoKPHA+PGJyPkFudGktc3BhbSB2cmFhZzogSG9ldmVlbCBpcyB0d2VlIHBsdXMgZHJpZT88L3A+CjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtzcGFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1TcGFtIj4gPHNwYW4gc3R5bGU9ImRpc3BsYXk6bm9uZTtjb2xvcjpyZWQ7Zm9udC13ZWlnaHQ6Ym9sZDttYXJnaW4tbGVmdDoxZW07IiAgaWQ9ImNvbW1zZyI+PC9zcGFuPjwvZGl2Pgo8cCBjbGFzcz0iY2VudGVyIj48YnI+PGlucHV0IGNsYXNzPSJjdGEiIHR5cGU9InN1Ym1pdCIgbmFtZT0ibm9uZSIgdmFsdWU9Ikluc3R1cmVuIj48L3A+Cgo8L2Zvcm0+Cgo8cD48c3Ryb25nPk4uQi48L3N0cm9uZz4gRGUgcmVkYWN0aWUga2FuIGplIGJpamRyYWdlIGFhbnBhc3NlbiBvZiB2ZXJ3aWpkZXJlbi4gSGllcm92ZXIgd29yZHQgbmlldCBnZWNvcnJlc3BvbmRlZXJkLjwvcD4KCgo8L2Rpdj4gICAgPC9kaXY+CgoKPC9hcnRpY2xlPgoKPGFzaWRlPgoKCgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vYmVlbGR0ZWtzdC5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzYvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNjYyODAxMDAwLCA0Ljg2ODg3MTIwMDApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NTEzOiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9IkFtc3RlcmRhbSBLaW5rZXJzdHJhYXQiIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wLzYuanBnIiAvPjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHA6Ly9iZWVsZHRla3N0LmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvNi8iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJidnN0ZW1tZW4iIC8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLy9idnN0ZW1tZW4ubmwvY3NzL21hcC5jc3MiIC8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5qcyI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5tYXJrZXJjbHVzdGVyLmpzIj48L3NjcmlwdD4iO30='));
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
<meta property="og:title" content="Amsterdam Kinkerstraat" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/6.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/6/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/6.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/6.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/6.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        
                                                    - Amsterdam Kinkerstraat

                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Amsterdam Kinkerstraat<br></h2>

        
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="6">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-27 05:41:25">

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
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/6/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3662801000, 4.8688712000);
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