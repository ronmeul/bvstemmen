<!--cachetime:1427316931--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjI0NSI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMjQ1LyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8yNDUvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjE6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjY4MiI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIyNDUiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTc4IjtzOjc6InRhZ25hbWUiO3M6Nzoic3RyYXRlbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjQ1IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wNi0xOSAyMToyMTo0OCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czo5OiJpbWFnZS5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI3NCI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjA6IiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxMDoiMjAxNDowNjoxOSI7czoxMToib3BtZXJraW5nZW4iO3M6MDoiIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjI0NSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMDYtMTkgMjE6MjE6NDgiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6OToiaW1hZ2UuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiNzQiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czowOiIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTA6IjIwMTQ6MDY6MTkiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjA6IiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiNzQiO3M6ODoidXNlcm5hbWUiO3M6MjM6Imhhcm9sZC5tZWVrZWxAZ21haWwuY29tIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDYtMTkgMjE6MTk6MTMiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDYtMTkgMjE6MTk6MTMiO3M6NDoibmFhbSI7czo2OiJIYXJvbGQiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czozOiIxMjkiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjQ1IjtzOjEyOiJyZWxhdGllc29vcnQiO3M6NToibWFrZXIiO3M6NzoidXNlcl9pZCI7czoyOiI3NSI7fX1zOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7YToxOntpOjA7YTozOntzOjg6Im1lZGlhX2lkIjtzOjM6IjI0NSI7czo5OiJvYmplY3RfaWQiO3M6MzoiMTA5IjtzOjI6ImlkIjtzOjM6IjI0MyI7fX1zOjQ6IlRhZ3MiO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czozOiI2ODIiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjE3OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjQ1Ijt9fX1zOjc6ImxvY2RhdGEiO2E6Mzp7czo4OiJMb2NhdGlvbiI7YTozOntzOjI6ImlkIjtzOjM6IjEzOCI7czozOiJsYXQiO3M6MTM6IjUyLjM5MDQ3NDkwMDAiO3M6MzoibG9uIjtzOjEyOiI0Ljg3NzYxMTIwMDAiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czozOiIxMzgiO3M6OToib2JqZWN0X2lkIjtzOjM6IjEwOSI7czoyOiJpZCI7czozOiIxMDkiO319czozOiJBZHIiO2E6MTp7aTowO2E6Mjp7czoyOiJpZCI7czozOiIxMjEiO3M6MTE6ImxvY2F0aW9uX2lkIjtzOjM6IjEzOCI7fX19czo1OiJhZHJlcyI7YToxOntpOjA7YToyOntzOjg6IkFkcnBhcnRzIjthOjU6e3M6MjoiaWQiO3M6MzoiMTIxIjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIyIjtzOjQ6Im5hYW0iO3M6MTQ6IkhvdXRyaWprc3RyYWF0IjtzOjU6ImxldmVsIjtzOjE6IjMiO3M6NjoiYWRyX2lkIjtzOjM6IjEyMSI7fXM6OToiQWRycGFydHNiIjthOjU6e3M6MjoiaWQiO3M6MToiMiI7czoxMToiYWRycGFydHNfaWQiO3M6MToiMSI7czo0OiJuYWFtIjtzOjk6IkFtc3RlcmRhbSI7czo1OiJsZXZlbCI7czoxOiI1IjtzOjY6ImFkcl9pZCI7czoxOiIyIjt9fX1zOjU6Im1ha2VyIjthOjE6e3M6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6Ijc1IjtzOjg6InVzZXJuYW1lIjtOO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNi0xOSAyMToyMTo0OCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNi0xOSAyMToyMTo0OCI7czo0OiJuYWFtIjtzOjk6IkguIE1lZWtlbCI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjMyOiJEaXQgZGVlbCB2YW4gZGUgc3RhZCB2YXN0cGFra2VuLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjIyOiJPdWQtV2VzdCBpbiBCZWVsZFRla3N0IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NDAzMDoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgT3VkLVdlc3QgaW4gQmVlbGRUZWtzdDwvYT48L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgY2xhc3M9Iml0ZW1pbWcgY2xpY2thYmxlIiBpZD0idGhlaW1nIiBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93MjEzLzAvZjUuanBnIiAgb25jbGljaz0icG9wdXBpbWcoJy8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZycsICcwL2Y1LmpwZycpOyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBvbmxvYWRmaXhpbWcoKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBteWVsID0gJCgiYjMiKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgaW1nZWwgPSAkKCJ0aGVpbWciKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbWggPSBteWVsLmNsaWVudEhlaWdodDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgdGggPSBtaCAtIDI4MDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5oZWlnaHQgPSB0aDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5zcmMgPSAiLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL2giICsgdGggKyAiLzAvZjUuanBnIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkZExvYWRFdmVudChmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbmxvYWRmaXhpbWcoKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgICAgICAgICA8L3NjcmlwdD4KCiAgICAKCiAgICAgICAgICAgICAgICA8ZmlnY2FwdGlvbj4KICAgICAgICAgICAgICAgICAgICA8c21hbGw+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwZXJzb24iPkguIE1lZWtlbDwvc3Bhbj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQW1zdGVyZGFtIEhvdXRyaWprc3RyYWF0CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+anVuaSAyMDE0CiAgICAgICAgICAgICAgICAgICAgPC9zbWFsbD4KICAgICAgICAgICAgICAgIDwvZmlnY2FwdGlvbj4KICAgICAgICAgICAgPC9maWd1cmU+CgogICAgICAgICAgICA8aDIgc3R5bGU9ImRpc3BsYXk6aW5saW5lOyI+QW1zdGVyZGFtIEhvdXRyaWprc3RyYWF0PGJyPjwvaDI+CgogICAgICAgIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMjQ1Ij4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMjUgMjA6NTU6MzEiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKCgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9Im1hcCIgY2xhc3M9Im1hcCI+PC9kaXY+PC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPgogICAgICAgIDxkaXYgc3R5bGU9Im92ZXJmbG93OiBoaWRkZW4iPjxoMj5WbGFrYmlqPC9oMj4KICAgICAgICAgICAgPGRpdiBpZD0ibWVkbGlzdCI+PC9kaXY+CiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJmYi1yb290Ij48L2Rpdj4KPGRpdiBjbGFzcz0iZmItc2hhcmUtYnV0dG9uIiBkYXRhLWhyZWY9Imh0dHA6Ly9iZWVsZHRla3N0LmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMjQ1LyIgZGF0YS1sYXlvdXQ9Imljb25fbGluayI+PC9kaXY+PC9kaXY+Cgo8L2FzaWRlPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgZnVuY3Rpb24gc2V0cGluKCkKICAgIHsKICAgICAgICB2YXIgbGxsID0gTC5sYXRMbmcoNTIuMzkwNDc0OTAwMCwgNC44Nzc2MTEyMDAwKTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjUxODoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJBbXN0ZXJkYW0gSG91dHJpamtzdHJhYXQiIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wL2Y1LmpwZyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6dXJsIiBjb250ZW50PSJodHRwOi8vYmVlbGR0ZWtzdC5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzI0NS8iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJidnN0ZW1tZW4iIC8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLy9idnN0ZW1tZW4ubmwvY3NzL21hcC5jc3MiIC8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5qcyI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5tYXJrZXJjbHVzdGVyLmpzIj48L3NjcmlwdD4iO30='));
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
<meta property="og:title" content="Amsterdam Houtrijkstraat" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/f5.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/245/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/f5.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/f5.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/f5.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">H. Meekel</span>
                                                    - Amsterdam Houtrijkstraat
                            <br>juni 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Amsterdam Houtrijkstraat<br></h2>

        
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="245">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 20:55:31">

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
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/245/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3904749000, 4.8776112000);
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