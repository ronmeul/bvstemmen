<!--cachetime:1426880858--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjIxNiI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMjE2LyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8yMTYvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjE6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjIzNSI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNjIiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNiI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czoyOiI2MiI7czo3OiJ0YWduYW1lIjtzOjk6InNvdXZlbmlycyI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjE2IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xOCAxODowMzozNCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxMToiemVlc3Rlci5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI1OCI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjc6IlplZXN0ZXIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDI6MTUgMTQ6MjI6MTMiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjI0MDoiRGUgdmVyc3RlZW5kZSB0aWpkLiBEaXQgaXMgbWlqbiBhbGxlcmVlcnN0ZSBmb3NzaWVsLCBpayBoZWIgaGVtIGdldm9uZGVuIG9wIEJvbmFpcmUsIGVuIGRhYXIgYmVuIGlrIG9wZ2Vncm9laWQuIElrIHdhcyAxNCBqYWFyIHRvZW4gaWsgaGVtIHZvbmQsIGVuIHNpbmRzZGllbiBiZW4gaWsgdmVyc2xpbmdlcmQgYWFuIGZvc3NpZWxlbi4gRGl0IGZvc3NpZWwgZG9ldCBtaWogdGVydWdkZW5rZW4gYWFuIG1pam4gamV1Z2QuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjIxNiI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMDItMTggMTg6MDM6MzQiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTE6InplZXN0ZXIuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiNTgiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo3OiJaZWVzdGVyIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAyOjE1IDE0OjIyOjEzIjtzOjExOiJvcG1lcmtpbmdlbiI7czoyNDA6IkRlIHZlcnN0ZWVuZGUgdGlqZC4gRGl0IGlzIG1pam4gYWxsZXJlZXJzdGUgZm9zc2llbCwgaWsgaGViIGhlbSBnZXZvbmRlbiBvcCBCb25haXJlLCBlbiBkYWFyIGJlbiBpayBvcGdlZ3JvZWlkLiBJayB3YXMgMTQgamFhciB0b2VuIGlrIGhlbSB2b25kLCBlbiBzaW5kc2RpZW4gYmVuIGlrIHZlcnNsaW5nZXJkIGFhbiBmb3NzaWVsZW4uIERpdCBmb3NzaWVsIGRvZXQgbWlqIHRlcnVnZGVua2VuIGFhbiBtaWpuIGpldWdkLiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiNTgiO3M6ODoidXNlcm5hbWUiO047czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAyLTE4IDE4OjAzOjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAyLTE4IDE4OjAzOjM0IjtzOjQ6Im5hYW0iO3M6MTQ6IlJpY2hhcmQgTGVuemVuIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MjoiOTgiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjE2IjtzOjEyOiJyZWxhdGllc29vcnQiO3M6ODoic3RhYXQgb3AiO3M6NzoidXNlcl9pZCI7czoyOiI1OCI7fX1zOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7YToxOntpOjA7YTozOntzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNiI7czo5OiJvYmplY3RfaWQiO3M6MjoiMTUiO3M6MjoiaWQiO3M6MzoiMjE0Ijt9fXM6NDoiVGFncyI7YToxOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjIzNSI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNjIiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNiI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czoyOiIyMCI7czozOiJsYXQiO3M6MTM6IjUyLjM3MDIxNTcwMDAiO3M6MzoibG9uIjtzOjEyOiI0Ljg5NTE2NzkwMDAiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czoyOiIyMCI7czo5OiJvYmplY3RfaWQiO3M6MjoiMTUiO3M6MjoiaWQiO3M6MjoiMTUiO319czozOiJBZHIiO2E6MTp7aTowO2E6Mjp7czoyOiJpZCI7czoxOiIyIjtzOjExOiJsb2NhdGlvbl9pZCI7czoyOiIyMCI7fX19czo1OiJhZHJlcyI7YToxOntpOjA7YToyOntzOjg6IkFkcnBhcnRzIjthOjU6e3M6MjoiaWQiO3M6MToiMiI7czoxMToiYWRycGFydHNfaWQiO3M6MToiMSI7czo0OiJuYWFtIjtzOjk6IkFtc3RlcmRhbSI7czo1OiJsZXZlbCI7czoxOiI1IjtzOjY6ImFkcl9pZCI7czoxOiIyIjt9czo5OiJBZHJwYXJ0c2IiO2E6NTp7czoyOiJpZCI7czoxOiIxIjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIwIjtzOjQ6Im5hYW0iO3M6OToiTmVkZXJsYW5kIjtzOjU6ImxldmVsIjtzOjE6IjYiO3M6NjoiYWRyX2lkIjtzOjE6IjEiO319fXM6NToibWFrZXIiO2E6MTp7czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiNTgiO3M6ODoidXNlcm5hbWUiO047czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAyLTE4IDE4OjAzOjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAyLTE4IDE4OjAzOjM0IjtzOjQ6Im5hYW0iO3M6MTQ6IlJpY2hhcmQgTGVuemVuIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9fXM6MTY6Im1ldGFfZGVzY3JpcHRpb24iO3M6NDM6IlN0cmFhdGJlZWxkIHZhbiBkZSBidXVydCBpbiBrb3J0ZSBmaWxtcGplcy4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE1OiJwcm9qZWN0bG9uZ25hbWUiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NDI0NDoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgNDAgc2Vjb25kZW48L2E+IDwvcD4gICAgPC9oMj4gCiAgICAgICAgPGRpdiBjbGFzcz0iZGV0YWlsIj4KCiAgICAgICAgICAgIDxmaWd1cmUgaWQ9ImZpZyIgY2xhc3M9ImZsb2F0ciI+CgoKICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBjbGFzcz0iaXRlbWltZyBjbGlja2FibGUiIGlkPSJ0aGVpbWciIHNyYz0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3cyMTMvMC9kOC5qcGciICBvbmNsaWNrPSJwb3B1cGltZygnLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nJywgJzAvZDguanBnJyk7Ij4KICAgICAgICAgICAgICAgICAgICAgICAgPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIG9ubG9hZGZpeGltZygpCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG15ZWwgPSAkKCJiMyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBpbWdlbCA9ICQoInRoZWltZyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBtaCA9IG15ZWwuY2xpZW50SGVpZ2h0OwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB0aCA9IG1oIC0gMjgwOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLmhlaWdodCA9IHRoOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLnNyYyA9ICIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvaCIgKyB0aCArICIvMC9kOC5qcGciOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYWRkTG9hZEV2ZW50KGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9ubG9hZGZpeGltZygpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2NyaXB0PgoKICAgIAoKICAgICAgICAgICAgICAgIDxmaWdjYXB0aW9uPgogICAgICAgICAgICAgICAgICAgIDxzbWFsbD4KICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9InBlcnNvbiI+UmljaGFyZCBMZW56ZW48L3NwYW4+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAtIE5lZGVybGFuZCBBbXN0ZXJkYW0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj5mZWJydWFyaSAyMDE0CiAgICAgICAgICAgICAgICAgICAgPC9zbWFsbD4KICAgICAgICAgICAgICAgIDwvZmlnY2FwdGlvbj4KICAgICAgICAgICAgPC9maWd1cmU+CgogICAgICAgICAgICA8aDIgc3R5bGU9ImRpc3BsYXk6aW5saW5lOyI+WmVlc3Rlcjxicj48L2gyPgoKICAgICAgICAgRGUgdmVyc3RlZW5kZSB0aWpkLiBEaXQgaXMgbWlqbiBhbGxlcmVlcnN0ZSBmb3NzaWVsLCBpayBoZWIgaGVtIGdldm9uZGVuIG9wIEJvbmFpcmUsIGVuIGRhYXIgYmVuIGlrIG9wZ2Vncm9laWQuIElrIHdhcyAxNCBqYWFyIHRvZW4gaWsgaGVtIHZvbmQsIGVuIHNpbmRzZGllbiBiZW4gaWsgdmVyc2xpbmdlcmQgYWFuIGZvc3NpZWxlbi4gRGl0IGZvc3NpZWwgZG9ldCBtaWogdGVydWdkZW5rZW4gYWFuIG1pam4gamV1Z2QuIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMjE2Ij4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMjAgMTk6NDc6MzgiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKCgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9Im1hcCIgY2xhc3M9Im1hcCI+PC9kaXY+PC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPgogICAgICAgIDxkaXYgc3R5bGU9Im92ZXJmbG93OiBoaWRkZW4iPjxoMj5WbGFrYmlqPC9oMj4KICAgICAgICAgICAgPGRpdiBpZD0ibWVkbGlzdCI+PC9kaXY+CiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJmYi1yb290Ij48L2Rpdj4KPGRpdiBjbGFzcz0iZmItc2hhcmUtYnV0dG9uIiBkYXRhLWhyZWY9Imh0dHA6Ly80MHNlYy5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzIxNi8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKDUyLjM3MDIxNTcwMDAsIDQuODk1MTY3OTAwMCk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo0OTY6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iWmVlc3RlciIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93NjAwLzAvZDguanBnIiAvPjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHA6Ly80MHNlYy5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzIxNi8iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJidnN0ZW1tZW4iIC8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLy9idnN0ZW1tZW4ubmwvY3NzL21hcC5jc3MiIC8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5qcyI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5tYXJrZXJjbHVzdGVyLmpzIj48L3NjcmlwdD4iO30='));
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
<meta property="og:title" content="Zeester" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/d8.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/216/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/d8.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/d8.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/d8.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Richard Lenzen</span>
                                                    - Nederland Amsterdam
                            <br>februari 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Zeester<br></h2>

         De versteende tijd. Dit is mijn allereerste fossiel, ik heb hem gevonden op Bonaire, en daar ben ik opgegroeid. Ik was 14 jaar toen ik hem vond, en sindsdien ben ik verslingerd aan fossielen. Dit fossiel doet mij terugdenken aan mijn jeugd. 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="216">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-20 19:47:38">

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
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/216/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3702157000, 4.8951679000);
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