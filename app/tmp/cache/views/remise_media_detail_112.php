<!--cachetime:1427242107--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjExMiI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzExMi8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMTEyLyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjQ6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjI6IjI1IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiIxNCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTEyIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjE0IjtzOjc6InRhZ25hbWUiO3M6MTA6IndhbmRlbGFhcnMiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjExMiI7czo4OiJleHRlbnNpZSI7czozOiJtb3YiO3M6ODoic29vcnRfaWQiO3M6MToiMiI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTItMTEgMTI6NDQ6MzQiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IndhbmRlbGFhcnNfaW5fZG9ua2VyLm1vdiI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNToibmFjaHR3YW5kZWxhYXJzIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjI4OiIyOCBva3RvYmVyIDIwMTMgICAgICAgIDIzLjAwIjtzOjExOiJvcG1lcmtpbmdlbiI7czowOiIiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI0MyI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMSI7czo1OiJzY2FsZSI7czoxOiIwIjt9fWk6MTthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjI6IjI2IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiIxNSI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTEyIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjE1IjtzOjc6InRhZ25hbWUiO3M6NToibmFjaHQiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjExMiI7czo4OiJleHRlbnNpZSI7czozOiJtb3YiO3M6ODoic29vcnRfaWQiO3M6MToiMiI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTItMTEgMTI6NDQ6MzQiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IndhbmRlbGFhcnNfaW5fZG9ua2VyLm1vdiI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNToibmFjaHR3YW5kZWxhYXJzIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjI4OiIyOCBva3RvYmVyIDIwMTMgICAgICAgIDIzLjAwIjtzOjExOiJvcG1lcmtpbmdlbiI7czowOiIiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI0MyI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMSI7czo1OiJzY2FsZSI7czoxOiIwIjt9fWk6MjthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjI6IjI3IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiIxNiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTEyIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjE2IjtzOjc6InRhZ25hbWUiO3M6NjoiaGVyZnN0Ijt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIxMTIiO3M6ODoiZXh0ZW5zaWUiO3M6MzoibW92IjtzOjg6InNvb3J0X2lkIjtzOjE6IjIiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDEzLTEyLTExIDEyOjQ0OjM0IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjI0OiJ3YW5kZWxhYXJzX2luX2Rvbmtlci5tb3YiO3M6NzoidXNlcl9pZCI7czoxOiI1IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTU6Im5hY2h0d2FuZGVsYWFycyI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoyODoiMjggb2t0b2JlciAyMDEzICAgICAgICAyMy4wMCI7czoxMToib3BtZXJraW5nZW4iO3M6MDoiIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiNDMiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjEiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjM7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiIxMTgiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjU3IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxMTIiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MjoiNTciO3M6NzoidGFnbmFtZSI7czo1OiI0MHNlYyI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMTEyIjtzOjg6ImV4dGVuc2llIjtzOjM6Im1vdiI7czo4OiJzb29ydF9pZCI7czoxOiIyIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxMy0xMi0xMSAxMjo0NDozNCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoid2FuZGVsYWFyc19pbl9kb25rZXIubW92IjtzOjc6InVzZXJfaWQiO3M6MToiNSI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjE1OiJuYWNodHdhbmRlbGFhcnMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6Mjg6IjI4IG9rdG9iZXIgMjAxMyAgICAgICAgMjMuMDAiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjA6IiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjQzIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIxIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjExMiI7czo4OiJleHRlbnNpZSI7czozOiJtb3YiO3M6ODoic29vcnRfaWQiO3M6MToiMiI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTMtMTItMTEgMTI6NDQ6MzQiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IndhbmRlbGFhcnNfaW5fZG9ua2VyLm1vdiI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNToibmFjaHR3YW5kZWxhYXJzIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjI4OiIyOCBva3RvYmVyIDIwMTMgICAgICAgIDIzLjAwIjtzOjExOiJvcG1lcmtpbmdlbiI7czowOiIiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI0MyI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMSI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MToiNSI7czo4OiJ1c2VybmFtZSI7czoxNjoiamNla2VlQGdtYWlsLmNvbSI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTEwLTE1IDExOjU2OjIyIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTEwLTE1IDExOjU2OjIyIjtzOjQ6Im5hYW0iO3M6MTA6Implcm9lbiBrZWUiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czoyOiIzMiI7czo4OiJtZWRpYV9pZCI7czozOiIxMTIiO3M6MTI6InJlbGF0aWVzb29ydCI7czo1OiJtYWtlciI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIxMTIiO3M6OToib2JqZWN0X2lkIjtzOjI6IjM4IjtzOjI6ImlkIjtzOjM6IjExMCI7fX1zOjQ6IlRhZ3MiO2E6NDp7aTowO2E6NDp7czoyOiJpZCI7czoyOiIyNSI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiMTQiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjExMiI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MjoiMjYiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjE1IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxMTIiO31pOjI7YTo0OntzOjI6ImlkIjtzOjI6IjI3IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiIxNiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTEyIjt9aTozO2E6NDp7czoyOiJpZCI7czozOiIxMTgiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjU3IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxMTIiO319fXM6NzoibG9jZGF0YSI7YTowOnt9czo1OiJhZHJlcyI7YTowOnt9czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoxOiI1IjtzOjg6InVzZXJuYW1lIjtzOjE2OiJqY2VrZWVAZ21haWwuY29tIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTAtMTUgMTE6NTY6MjIiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTAtMTUgMTE6NTY6MjIiO3M6NDoibmFhbSI7czoxMDoiamVyb2VuIGtlZSI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjI5OiJFZW4gcmVjb25zdHJ1Y3RpZSBpbiB3b3JkaW5nLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxNDoiUmVtaXNlIHJlcHJpc2UiO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoxNDoiUmVtaXNlIHJlcHJpc2UiO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czozODQ4OiI8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyICI+CiAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciBSZW1pc2UgcmVwcmlzZTwvYT4gfCA8YSBocmVmPSIvbWVlZG9lbi8iPklldHMgaW5zdHVyZW48L2E+IHwgPGEgaHJlZj0iL2NvbnRhY3QvIj5Db250YWN0PC9hPiA8L3A+CgogICAgPC9oMj4gCiAgICAgICAgPGRpdiBjbGFzcz0iZGV0YWlsIj4KCiAgICAgICAgICAgIDxmaWd1cmUgaWQ9ImZpZyIgY2xhc3M9ImZsb2F0ciI+CgogICAgICAgICAgICAgICAgICAgICAgICA8dmlkZW8gd2lkdGg9IjEwMCUiIGNvbnRyb2xzPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNvdXJjZSBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL3ZpZGVvLzAvNzAubXA0IiB0eXBlPSJ2aWRlby9tcDQiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNvdXJjZSBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL3ZpZGVvLzAvNzAub2dnIiB0eXBlPSJ2aWRlby9vZ2ciPgogICAgICAgICAgICAgICAgICAgICAgICA8L3ZpZGVvPgoKCiAgICAKCiAgICAgICAgICAgICAgICA8ZmlnY2FwdGlvbj4KICAgICAgICAgICAgICAgICAgICA8c21hbGw+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwZXJzb24iPmplcm9lbiBrZWU8L3NwYW4+CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPmF1Z3VzdHVzIDIKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5uYWNodHdhbmRlbGFhcnM8YnI+PC9oMj4KCiAgICAgICAgCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIxMTIiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0yNSAwMDowODoyNyI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgo8ZGl2IGNsYXNzPSJwYXBlciI+PGEgaHJlZj0iL21lZGlhL3RhZy8xNC8iIGNsYXNzPSJsYWJlbCI+I3dhbmRlbGFhcnM8L2E+IDxhIGhyZWY9Ii9tZWRpYS90YWcvMTUvIiBjbGFzcz0ibGFiZWwiPiNuYWNodDwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy8xNi8iIGNsYXNzPSJsYWJlbCI+I2hlcmZzdDwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy81Ny8iIGNsYXNzPSJsYWJlbCI+IzQwc2VjPC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMTEyKTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovL3JlbWlzZS5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzExMi8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKCwgKTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjUwNToiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJuYWNodHdhbmRlbGFhcnMiIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wLzcwLm1vdiIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6dXJsIiBjb250ZW50PSJodHRwOi8vcmVtaXNlLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMTEyLyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!doctype html><html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/base.css">
<link rel="stylesheet" type="text/css" href="//bvstemmen.nl/css/map.css" /><style>.b4{background:url('//bvstemmen.nl/img/bg/remise.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
    .b3{background:url('//bvstemmen.nl/img/bg/remise.jpg') no-repeat left top fixed transparent;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}
</style>
<script type="text/javascript" src="//bvstemmen.nl/js/base.js"></script>
<script type="text/javascript" src="//bvstemmen.nl/js/leaflet.js"></script><script type="text/javascript" src="//bvstemmen.nl/js/leaflet.markercluster.js"></script><title>Remise reprise</title>
<meta name="description" content="Een reconstructie in wording.">
<meta name="apple-mobile-web-app-capable" content="yes"><meta name=viewport content="width=device-width, initial-scale=1">
<meta property="og:type" content="website"><meta property="og:site_name" content="Buurt Vol Stemmen"><meta property="og:locale" content="nl_NL">
<meta property="og:title" content="nachtwandelaars" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/70.mov" /><meta property="og:url" content="http://remise.bvstemmen.nl/media/detail/112/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Remise reprise</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Remise reprise</a> | <a href="/meedoen/">Iets insturen</a> | <a href="/contact/">Contact</a> </p>

    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">

                        <video width="100%" controls>
                            <source src="//cache.bvstemmen.nl/video/0/70.mp4" type="video/mp4">
                            <source src="//cache.bvstemmen.nl/video/0/70.ogg" type="video/ogg">
                        </video>


    

                <figcaption>
                    <small>
                        <span class="person">jeroen kee</span>
                        
                            <br>augustus 2
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">nachtwandelaars<br></h2>

        
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="112">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 00:08:27">

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


<div class="paper"><a href="/media/tag/14/" class="label">#wandelaars</a> <a href="/media/tag/15/" class="label">#nacht</a> <a href="/media/tag/16/" class="label">#herfst</a> <a href="/media/tag/57/" class="label">#40sec</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,112);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://remise.bvstemmen.nl/media/detail/112/" data-layout="icon_link"></div></div>

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