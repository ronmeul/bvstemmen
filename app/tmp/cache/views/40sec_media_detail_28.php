<!--cachetime:1426430537--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjI6IjI4Ijt9czo2OiJpc0FqYXgiO2I6MDtzOjY6Im1vZGVscyI7YToxNTp7czo1OiJNZWRpYSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo1OiJNZWRpYSI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7fXM6NzoiT2JqZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo3OiJPYmplY3RzIjt9czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjt9czo4OiJBZHJwYXJ0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBZHJwYXJ0cyI7fXM6ODoiQWRydGFibGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRydGFibGUiO31zOjg6IkxvY2F0aW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkxvY2F0aW9uIjt9czozOiJBZHIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWRyIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjQ6IlRhZ3MiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVGFncyI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiVGFnbmFtZXMiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7fXM6ODoiUHJvamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiUHJvamVjdHMiO31zOjg6Ik1lc3NhZ2VzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6Ik1lc3NhZ2VzIjt9czo5OiJBZHJwYXJ0c2IiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MTY6Im1lZGlhL2RldGFpbC8yOC8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTc6Ii9tZWRpYS9kZXRhaWwvMjgvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjE6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjcyMCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czoyOiIyOCI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxNzgiO3M6NzoidGFnbmFtZSI7czo3OiJzdHJhdGVuIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czoyOiIyOCI7czo4OiJleHRlbnNpZSI7czowOiIiO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTEtMTcgMjI6MzY6MjMiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MDoiIjtzOjc6InVzZXJfaWQiO3M6MToiMyI7czo2OiJleHR1cmwiO3M6NDI6Imh0dHA6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj1HdWY1aUdpcXFWNCI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo0NDoiMjAwOSBsYXN0IGRheSBIb3RlbCBBYmJhIE92ZXJ0b29tLCBBbXN0ZXJkYW0iO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MjQ6IjIwMDktMDctMjFUMDM6Mjc6MjQuMDAwWiI7czoxMToib3BtZXJraW5nZW4iO3M6MzI3OiJJIGhhZCBqdXN0IGZpbmlzaGVkIHdlZXBpbmcgYmVjYXVzZSBJIHdhcyBzbyBzYWQgdG8gbGVhdmUgSG90ZWwgQWJiYSwgQW1zdGVyZGFtLiAgVGhlcmUgaXMgbm8gcXVlc3Rpb24gdGhhdCBIb3RlbCBBYmJhIGlzIGFic29sdXRlbHkgdGhlIGJlc3QsIG51bWJlciBvbmUgcGxhY2UgdG8gc3RheSBpbiBBbXN0ZXJkYW0gYW5kIE92ZXJ0b29tIGlzIHRoZSBiZXN0IHN0cmVldCBpbiBBbXN0ZXJkYW0gYW5kIEFtc3RlcmRhbSBpcyB0aGUgYmVzdCBjaXR5IGluIHRoZSBOZXRoZXJsYW5kcyBhbmQgTmV0aGVybGFuZHMgaXMgdGhlIGJlc3QgY291bnRyeSBvbiBFYXJ0aC4gIEFtZW4iO3M6NToiZXh0aWQiO3M6MTE6Ikd1ZjVpR2lxcVY0IjtzOjg6ImV4dHRodW1iIjtzOjQ5OiJodHRwczovL2kxLnl0aW1nLmNvbS92aS9HdWY1aUdpcXFWNC9ocWRlZmF1bHQuanBnIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9fX1zOjQ6ImRhdGEiO2E6NTp7czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czoyOiIyOCI7czo4OiJleHRlbnNpZSI7czowOiIiO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTEtMTcgMjI6MzY6MjMiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MDoiIjtzOjc6InVzZXJfaWQiO3M6MToiMyI7czo2OiJleHR1cmwiO3M6NDI6Imh0dHA6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj1HdWY1aUdpcXFWNCI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo0NDoiMjAwOSBsYXN0IGRheSBIb3RlbCBBYmJhIE92ZXJ0b29tLCBBbXN0ZXJkYW0iO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MjQ6IjIwMDktMDctMjFUMDM6Mjc6MjQuMDAwWiI7czoxMToib3BtZXJraW5nZW4iO3M6MzI3OiJJIGhhZCBqdXN0IGZpbmlzaGVkIHdlZXBpbmcgYmVjYXVzZSBJIHdhcyBzbyBzYWQgdG8gbGVhdmUgSG90ZWwgQWJiYSwgQW1zdGVyZGFtLiAgVGhlcmUgaXMgbm8gcXVlc3Rpb24gdGhhdCBIb3RlbCBBYmJhIGlzIGFic29sdXRlbHkgdGhlIGJlc3QsIG51bWJlciBvbmUgcGxhY2UgdG8gc3RheSBpbiBBbXN0ZXJkYW0gYW5kIE92ZXJ0b29tIGlzIHRoZSBiZXN0IHN0cmVldCBpbiBBbXN0ZXJkYW0gYW5kIEFtc3RlcmRhbSBpcyB0aGUgYmVzdCBjaXR5IGluIHRoZSBOZXRoZXJsYW5kcyBhbmQgTmV0aGVybGFuZHMgaXMgdGhlIGJlc3QgY291bnRyeSBvbiBFYXJ0aC4gIEFtZW4iO3M6NToiZXh0aWQiO3M6MTE6Ikd1ZjVpR2lxcVY0IjtzOjg6ImV4dHRodW1iIjtzOjQ5OiJodHRwczovL2kxLnl0aW1nLmNvbS92aS9HdWY1aUdpcXFWNC9ocWRlZmF1bHQuanBnIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MToiMyI7czo4OiJ1c2VybmFtZSI7czoxNzoicm9ubWV1bEB4czRhbGwubmwiO3M6ODoicGFzc3dvcmQiO3M6NDA6IjUxMjU1ZGE0ZWQzNTk2ZWVkYzA4YzQ3MzI2ZDQxZjA5MTBiOWRkMmYiO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTAtMDkgMTQ6MzI6NTQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTAtMDkgMTQ6MzI6NTQiO3M6NDoibmFhbSI7czoxNToiUm9uIE1ldWxlbnN0ZWVuIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MjoiMTMiO3M6ODoibWVkaWFfaWQiO3M6MjoiMjgiO3M6MTI6InJlbGF0aWVzb29ydCI7czo1OiJtYWtlciI7czo3OiJ1c2VyX2lkIjtzOjI6IjE0Ijt9fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MjoiMjgiO3M6OToib2JqZWN0X2lkIjtzOjI6IjE2IjtzOjI6ImlkIjtzOjI6IjI2Ijt9fXM6NDoiVGFncyI7YToxOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjcyMCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czoyOiIyOCI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czoyOiI0MSI7czozOiJsYXQiO3M6MTM6IjUyLjM2MDU1NjgwMDAiO3M6MzoibG9uIjtzOjEyOiI0Ljg2Njk0NDYwMDAiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czoyOiI0MSI7czo5OiJvYmplY3RfaWQiO3M6MjoiMTYiO3M6MjoiaWQiO3M6MjoiMTYiO319czozOiJBZHIiO2E6MTp7aTowO2E6Mjp7czoyOiJpZCI7czoyOiIyMyI7czoxMToibG9jYXRpb25faWQiO3M6MjoiNDEiO319fXM6NToiYWRyZXMiO2E6MTp7aTowO2E6Mjp7czo4OiJBZHJwYXJ0cyI7YTo1OntzOjI6ImlkIjtzOjI6IjIzIjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIyIjtzOjQ6Im5hYW0iO3M6ODoiT3ZlcnRvb20iO3M6NToibGV2ZWwiO3M6MToiMyI7czo2OiJhZHJfaWQiO3M6MjoiMjMiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjE6IjIiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjE6IjEiO3M6NDoibmFhbSI7czo5OiJBbXN0ZXJkYW0iO3M6NToibGV2ZWwiO3M6MToiNSI7czo2OiJhZHJfaWQiO3M6MToiMiI7fX19czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiIxNCI7czo4OiJ1c2VybmFtZSI7TjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTEtMTEgMTU6MTU6MTYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTEtMTEgMTU6MTU6MTYiO3M6NDoibmFhbSI7czoxMzoiTWFyaW8gUmFndWNjaSI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjQzOiJTdHJhYXRiZWVsZCB2YW4gZGUgYnV1cnQgaW4ga29ydGUgZmlsbXBqZXMuIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjExOiI0MCBzZWNvbmRlbiI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjExOiI0MCBzZWNvbmRlbiI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjM2MTQ6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIDQwIHNlY29uZGVuPC9hPiA8L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgPGlmcmFtZSBzcmM9Ii8vd3d3LnlvdXR1YmUuY29tL2VtYmVkL0d1ZjVpR2lxcVY0P3JlbD0wIiBmcmFtZWJvcmRlcj0iMCIgYWxsb3dmdWxsc2NyZWVuPjwvaWZyYW1lPgogICAgICAgICAgICAgICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icGVyc29uIj5NYXJpbyBSYWd1Y2NpPC9zcGFuPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLSBBbXN0ZXJkYW0gT3ZlcnRvb20KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj5qdWxpIDIwMDkKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij4yMDA5IGxhc3QgZGF5IEhvdGVsIEFiYmEgT3ZlcnRvb20sIEFtc3RlcmRhbTxicj48L2gyPgoKICAgICAgICAgSSBoYWQganVzdCBmaW5pc2hlZCB3ZWVwaW5nIGJlY2F1c2UgSSB3YXMgc28gc2FkIHRvIGxlYXZlIEhvdGVsIEFiYmEsIEFtc3RlcmRhbS4gIFRoZXJlIGlzIG5vIHF1ZXN0aW9uIHRoYXQgSG90ZWwgQWJiYSBpcyBhYnNvbHV0ZWx5IHRoZSBiZXN0LCBudW1iZXIgb25lIHBsYWNlIHRvIHN0YXkgaW4gQW1zdGVyZGFtIGFuZCBPdmVydG9vbSBpcyB0aGUgYmVzdCBzdHJlZXQgaW4gQW1zdGVyZGFtIGFuZCBBbXN0ZXJkYW0gaXMgdGhlIGJlc3QgY2l0eSBpbiB0aGUgTmV0aGVybGFuZHMgYW5kIE5ldGhlcmxhbmRzIGlzIHRoZSBiZXN0IGNvdW50cnkgb24gRWFydGguICBBbWVuIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMjgiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0xNSAxNDo0MjoxNyI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgoKCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMjgvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNjA1NTY4MDAwLCA0Ljg2Njk0NDYwMDApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NTI5OiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9IjIwMDkgbGFzdCBkYXkgSG90ZWwgQWJiYSBPdmVydG9vbSwgQW1zdGVyZGFtIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC8xYy4iIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMjgvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="2009 last day Hotel Abba Overtoom, Amsterdam" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/1c." /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/28/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                    <iframe src="//www.youtube.com/embed/Guf5iGiqqV4?rel=0" frameborder="0" allowfullscreen></iframe>
                

                <figcaption>
                    <small>
                        <span class="person">Mario Ragucci</span>
                                                    - Amsterdam Overtoom
                            <br>juli 2009
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">2009 last day Hotel Abba Overtoom, Amsterdam<br></h2>

         I had just finished weeping because I was so sad to leave Hotel Abba, Amsterdam.  There is no question that Hotel Abba is absolutely the best, number one place to stay in Amsterdam and Overtoom is the best street in Amsterdam and Amsterdam is the best city in the Netherlands and Netherlands is the best country on Earth.  Amen 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="28">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-15 14:42:17">

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
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/28/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3605568000, 4.8669446000);
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