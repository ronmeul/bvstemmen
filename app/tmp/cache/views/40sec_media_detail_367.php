<!--cachetime:1426590298--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjM2NyI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzM2Ny8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzY3LyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6MTp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNzc0IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIyMDQiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM2NyI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIyMDQiO3M6NzoidGFnbmFtZSI7czoxMjoic3FqY2FzZFNCQUllIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIzNjciO3M6ODoiZXh0ZW5zaWUiO3M6MDoiIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE1LTAyLTA2IDE5OjA3OjE0IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjA6IiI7czo3OiJ1c2VyX2lkIjtzOjE6IjAiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czowOiIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MDoiIjtzOjExOiJvcG1lcmtpbmdlbiI7czoyMDk6Imx2RnpOTiAgJmx0O2EgaHJlZj0mcXVvdDtodHRwOi8vYW50ZXN6Y3B5bGZsLmNvbS8mcXVvdDsmZ3Q7YW50ZXN6Y3B5bGZsJmx0Oy9hJmd0OywgW3VybD1odHRwOi8veHBja3Ficnh0ZGxmLmNvbS9deHBja3Ficnh0ZGxmWy91cmxdLCBbbGluaz1odHRwOi8vdnpsdndtaGNqZWlxLmNvbS9ddnpsdndtaGNqZWlxWy9saW5rXSwgaHR0cDovL21ycmljY3h0dnR2ZC5jb20vIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM2NyI7czo4OiJleHRlbnNpZSI7czowOiIiO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTUtMDItMDYgMTk6MDc6MTQiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MDoiIjtzOjc6InVzZXJfaWQiO3M6MToiMCI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjA6IiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czowOiIiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjIwOToibHZGek5OICAmbHQ7YSBocmVmPSZxdW90O2h0dHA6Ly9hbnRlc3pjcHlsZmwuY29tLyZxdW90OyZndDthbnRlc3pjcHlsZmwmbHQ7L2EmZ3Q7LCBbdXJsPWh0dHA6Ly94cGNrcWJyeHRkbGYuY29tL114cGNrcWJyeHRkbGZbL3VybF0sIFtsaW5rPWh0dHA6Ly92emx2d21oY2plaXEuY29tL112emx2d21oY2plaXFbL2xpbmtdLCBodHRwOi8vbXJyaWNjeHR2dHZkLmNvbS8iO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fXM6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtOO3M6ODoidXNlcm5hbWUiO047czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047czo0OiJuYWFtIjtOO3M6OToibmFhbV96aWVuIjtOO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MDp7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MzoiMzY3IjtzOjk6Im9iamVjdF9pZCI7czozOiIyMDciO3M6MjoiaWQiO3M6MzoiMzY1Ijt9fXM6NDoiVGFncyI7YToxOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6Ijc3NCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMjA0IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzNjciO319fXM6NzoibG9jZGF0YSI7YTowOnt9czo1OiJhZHJlcyI7YTowOnt9czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czo0MzoiU3RyYWF0YmVlbGQgdmFuIGRlIGJ1dXJ0IGluIGtvcnRlIGZpbG1wamVzLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo0MDQwOiI8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyICI+CiAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciA0MCBzZWNvbmRlbjwvYT4gPC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wLzE2Zi4iICBvbmNsaWNrPSJwb3B1cGltZygnLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nJywgJzAvMTZmLicpOyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBvbmxvYWRmaXhpbWcoKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBteWVsID0gJCgiYjMiKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgaW1nZWwgPSAkKCJ0aGVpbWciKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbWggPSBteWVsLmNsaWVudEhlaWdodDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgdGggPSBtaCAtIDI4MDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5oZWlnaHQgPSB0aDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5zcmMgPSAiLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL2giICsgdGggKyAiLzAvMTZmLiI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgCgogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPiA8YnI+PC9oMj4KCiAgICAgICAgIGx2RnpOTiAgJmx0O2EgaHJlZj0mcXVvdDtodHRwOi8vYW50ZXN6Y3B5bGZsLmNvbS8mcXVvdDsmZ3Q7YW50ZXN6Y3B5bGZsJmx0Oy9hJmd0OywgW3VybD1odHRwOi8veHBja3Ficnh0ZGxmLmNvbS9deHBja3Ficnh0ZGxmWy91cmxdLCBbbGluaz1odHRwOi8vdnpsdndtaGNqZWlxLmNvbS9ddnpsdndtaGNqZWlxWy9saW5rXSwgaHR0cDovL21ycmljY3h0dnR2ZC5jb20vIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMzY3Ij4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMTcgMTE6MDQ6NTgiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKCgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9Im1hcCIgY2xhc3M9Im1hcCI+PC9kaXY+PC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIiPgogICAgICAgIDxkaXYgc3R5bGU9Im92ZXJmbG93OiBoaWRkZW4iPjxoMj5WbGFrYmlqPC9oMj4KICAgICAgICAgICAgPGRpdiBpZD0ibWVkbGlzdCI+PC9kaXY+CiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJmYi1yb290Ij48L2Rpdj4KPGRpdiBjbGFzcz0iZmItc2hhcmUtYnV0dG9uIiBkYXRhLWhyZWY9Imh0dHA6Ly80MHNlYy5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzM2Ny8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKCwgKTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjQ4ODoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSIgIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC8xNmYuIiAvPjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHA6Ly80MHNlYy5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzM2Ny8iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJidnN0ZW1tZW4iIC8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLy9idnN0ZW1tZW4ubmwvY3NzL21hcC5jc3MiIC8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5qcyI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5tYXJrZXJjbHVzdGVyLmpzIj48L3NjcmlwdD4iO30='));
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
<meta property="og:title" content=" " /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/16f." /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/367/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/16f."  onclick="popupimg('//cache.bvstemmen.nl/img', '0/16f.');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/16f.";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        
                        

                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;"> <br></h2>

         lvFzNN  &lt;a href=&quot;http://anteszcpylfl.com/&quot;&gt;anteszcpylfl&lt;/a&gt;, [url=http://xpckqbrxtdlf.com/]xpckqbrxtdlf[/url], [link=http://vzlvwmhcjeiq.com/]vzlvwmhcjeiq[/link], http://mrriccxtvtvd.com/ 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="367">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-17 11:04:58">

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
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/367/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(, );
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