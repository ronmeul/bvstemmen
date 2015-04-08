<!--cachetime:1426920303--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjI4OCI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzI4OC8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMjg4LyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjE6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjM5MSI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTE5IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIyODgiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTE5IjtzOjc6InRhZ25hbWUiO3M6NjoicmVtaXNlIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIyODgiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTEwLTE3IDE2OjI0OjU2IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjk6InRyYW0xLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6IjMxIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MjA6InRyYW1yZW1pc2UgZGUgSGFsbGVuIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDA4OjEwOjIyIDE1OjUwOjIyIjtzOjExOiJvcG1lcmtpbmdlbiI7czoyNDoiMjAwODsgZGUgdmVybGF0ZW4gSGFsbGVuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjI4OCI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMTcgMTY6MjQ6NTYiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6OToidHJhbTEuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoyMDoidHJhbXJlbWlzZSBkZSBIYWxsZW4iO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMDg6MTA6MjIgMTU6NTA6MjIiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjI0OiIyMDA4OyBkZSB2ZXJsYXRlbiBIYWxsZW4iO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fXM6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6IjMxIjtzOjg6InVzZXJuYW1lIjtzOjE0OiJicnVAZXVyb25ldC5ubCI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTE0IDE0OjQwOjQ3IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTE0IDE0OjQwOjQ3IjtzOjQ6Im5hYW0iO3M6ODoiQnJ1bmV0dGUiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6Mjp7aTowO2E6NDp7czoyOiJpZCI7czozOiIxNjMiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjg4IjtzOjEyOiJyZWxhdGllc29vcnQiO3M6NToibWFrZXIiO3M6NzoidXNlcl9pZCI7czoyOiIzMSI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiMTY0IjtzOjg6Im1lZGlhX2lkIjtzOjM6IjI4OCI7czoxMjoicmVsYXRpZXNvb3J0IjtzOjg6InN0YWF0IG9wIjtzOjc6InVzZXJfaWQiO3M6MjoiMzkiO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIyODgiO3M6OToib2JqZWN0X2lkIjtzOjM6IjEzOCI7czoyOiJpZCI7czozOiIyODYiO319czo0OiJUYWdzIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMzkxIjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMTkiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjI4OCI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czozOiIxNjgiO3M6MzoibGF0IjtzOjEzOiI1Mi4zNjc0ODMyNjk4IjtzOjM6ImxvbiI7czoxMjoiNC44Njc4NzY3NjgxIjt9czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO2E6MTp7aTowO2E6Mzp7czoxMToibG9jYXRpb25faWQiO3M6MzoiMTY4IjtzOjk6Im9iamVjdF9pZCI7czozOiIxMzgiO3M6MjoiaWQiO3M6MzoiMTM4Ijt9fXM6MzoiQWRyIjthOjA6e319czo1OiJhZHJlcyI7YTowOnt9czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiIzMSI7czo4OiJ1c2VybmFtZSI7czoxNDoiYnJ1QGV1cm9uZXQubmwiO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0xNCAxNDo0MDo0NyI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0xNCAxNDo0MDo0NyI7czo0OiJuYWFtIjtzOjg6IkJydW5ldHRlIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9fXM6MTY6Im1ldGFfZGVzY3JpcHRpb24iO3M6NDM6IlN0cmFhdGJlZWxkIHZhbiBkZSBidXVydCBpbiBrb3J0ZSBmaWxtcGplcy4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE1OiJwcm9qZWN0bG9uZ25hbWUiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6Mzk4ODoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgNDAgc2Vjb25kZW48L2E+IDwvcD4gICAgPC9oMj4gCiAgICAgICAgPGRpdiBjbGFzcz0iZGV0YWlsIj4KCiAgICAgICAgICAgIDxmaWd1cmUgaWQ9ImZpZyIgY2xhc3M9ImZsb2F0ciI+CgoKICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBjbGFzcz0iaXRlbWltZyBjbGlja2FibGUiIGlkPSJ0aGVpbWciIHNyYz0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3cyMTMvMC8xMjAuanBnIiAgb25jbGljaz0icG9wdXBpbWcoJy8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZycsICcwLzEyMC5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wLzEyMC5qcGciOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYWRkTG9hZEV2ZW50KGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9ubG9hZGZpeGltZygpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2NyaXB0PgoKICAgIAoKICAgICAgICAgICAgICAgIDxmaWdjYXB0aW9uPgogICAgICAgICAgICAgICAgICAgIDxzbWFsbD4KICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9InBlcnNvbiI+QnJ1bmV0dGU8L3NwYW4+CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPm9rdG9iZXIgMjAwOAogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPnRyYW1yZW1pc2UgZGUgSGFsbGVuPGJyPjwvaDI+CgogICAgICAgICAyMDA4OyBkZSB2ZXJsYXRlbiBIYWxsZW4gCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIyODgiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0yMSAwNjo0NTowMyI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgoKCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMjg4LyIgZGF0YS1sYXlvdXQ9Imljb25fbGluayI+PC9kaXY+PC9kaXY+Cgo8L2FzaWRlPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgZnVuY3Rpb24gc2V0cGluKCkKICAgIHsKICAgICAgICB2YXIgbGxsID0gTC5sYXRMbmcoNTIuMzY3NDgzMjY5OCwgNC44Njc4NzY3NjgxKTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjUxMDoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJ0cmFtcmVtaXNlIGRlIEhhbGxlbiIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93NjAwLzAvMTIwLmpwZyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6dXJsIiBjb250ZW50PSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8yODgvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="tramremise de Hallen" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/120.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/288/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/120.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/120.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/120.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Brunette</span>
                        
                            <br>oktober 2008
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">tramremise de Hallen<br></h2>

         2008; de verlaten Hallen 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="288">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-21 06:45:03">

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
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/288/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3674832698, 4.8678767681);
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