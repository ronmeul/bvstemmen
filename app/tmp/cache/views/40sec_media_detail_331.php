<!--cachetime:1427281613--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjMzMSI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzMzMS8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzMxLyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjY2NiI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTE1IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMzEiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTE1IjtzOjc6InRhZ25hbWUiO3M6Njoidm9nZWxzIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIzMzEiO3M6ODoiZXh0ZW5zaWUiO3M6MzoibTR2IjtzOjg6InNvb3J0X2lkIjtzOjE6IjIiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTEwLTMwIDE3OjEzOjE1IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjI0OiJtZWV1d2VuX2FjaHRlcnVpdF9XRy5tNHYiO3M6NzoidXNlcl9pZCI7czoxOiI1IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTc6Im1lZXV3ZW4gYWNodGVydWl0IjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjEwOiIyNi0xMi0yMDA5IjtzOjExOiJvcG1lcmtpbmdlbiI7czo3NToiQWNodGVyc3Rldm9yZW4gemllIGplIG5vZyBiZXRlciBob2UgcHJhY2h0aWcgZGUgdm9nZWxzIGluIGh1biB2bHVjaHQgemlqbi4gIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToxO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNTM3IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI1NyI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzMxIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjU3IjtzOjc6InRhZ25hbWUiO3M6NToiNDBzZWMiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMzMSI7czo4OiJleHRlbnNpZSI7czozOiJtNHYiO3M6ODoic29vcnRfaWQiO3M6MToiMiI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMzAgMTc6MTM6MTUiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6Im1lZXV3ZW5fYWNodGVydWl0X1dHLm00diI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNzoibWVldXdlbiBhY2h0ZXJ1aXQiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTA6IjI2LTEyLTIwMDkiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjc1OiJBY2h0ZXJzdGV2b3JlbiB6aWUgamUgbm9nIGJldGVyIGhvZSBwcmFjaHRpZyBkZSB2b2dlbHMgaW4gaHVuIHZsdWNodCB6aWpuLiAiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjI7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiI1MzkiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6Ijk5IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMzEiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MjoiOTkiO3M6NzoidGFnbmFtZSI7czo2OiJzbmVldXciO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMzMSI7czo4OiJleHRlbnNpZSI7czozOiJtNHYiO3M6ODoic29vcnRfaWQiO3M6MToiMiI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMzAgMTc6MTM6MTUiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6Im1lZXV3ZW5fYWNodGVydWl0X1dHLm00diI7czo3OiJ1c2VyX2lkIjtzOjE6IjUiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNzoibWVldXdlbiBhY2h0ZXJ1aXQiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTA6IjI2LTEyLTIwMDkiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjc1OiJBY2h0ZXJzdGV2b3JlbiB6aWUgamUgbm9nIGJldGVyIGhvZSBwcmFjaHRpZyBkZSB2b2dlbHMgaW4gaHVuIHZsdWNodCB6aWpuLiAiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX19czo0OiJkYXRhIjthOjU6e3M6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzMxIjtzOjg6ImV4dGVuc2llIjtzOjM6Im00diI7czo4OiJzb29ydF9pZCI7czoxOiIyIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0zMCAxNzoxMzoxNSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoibWVldXdlbl9hY2h0ZXJ1aXRfV0cubTR2IjtzOjc6InVzZXJfaWQiO3M6MToiNSI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjE3OiJtZWV1d2VuIGFjaHRlcnVpdCI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxMDoiMjYtMTItMjAwOSI7czoxMToib3BtZXJraW5nZW4iO3M6NzU6IkFjaHRlcnN0ZXZvcmVuIHppZSBqZSBub2cgYmV0ZXIgaG9lIHByYWNodGlnIGRlIHZvZ2VscyBpbiBodW4gdmx1Y2h0IHppam4uICI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MToiNSI7czo4OiJ1c2VybmFtZSI7czoxNjoiamNla2VlQGdtYWlsLmNvbSI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTEwLTE1IDExOjU2OjIyIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTEwLTE1IDExOjU2OjIyIjtzOjQ6Im5hYW0iO3M6MTA6Implcm9lbiBrZWUiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czozOiIyMjciO3M6ODoibWVkaWFfaWQiO3M6MzoiMzMxIjtzOjEyOiJyZWxhdGllc29vcnQiO3M6NToibWFrZXIiO3M6NzoidXNlcl9pZCI7czoxOiI1Ijt9fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MzoiMzMxIjtzOjk6Im9iamVjdF9pZCI7czozOiIxODIiO3M6MjoiaWQiO3M6MzoiMzI5Ijt9fXM6NDoiVGFncyI7YTozOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjY2NiI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTE1IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMzEiO31pOjE7YTo0OntzOjI6ImlkIjtzOjM6IjUzNyI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNTciO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMzMSI7fWk6MjthOjQ6e3M6MjoiaWQiO3M6MzoiNTM5IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI5OSI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzMxIjt9fX1zOjc6ImxvY2RhdGEiO2E6Mzp7czo4OiJMb2NhdGlvbiI7YTozOntzOjI6ImlkIjtzOjM6IjIxMiI7czozOiJsYXQiO3M6MTM6IjUyLjM2NDA5NjI4ODIiO3M6MzoibG9uIjtzOjEyOiI0Ljg3MTU3ODIxNjYiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czozOiIyMTIiO3M6OToib2JqZWN0X2lkIjtzOjM6IjE4MiI7czoyOiJpZCI7czozOiIxODIiO319czozOiJBZHIiO2E6MDp7fX1zOjU6ImFkcmVzIjthOjA6e31zOjU6Im1ha2VyIjthOjE6e3M6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjE6IjUiO3M6ODoidXNlcm5hbWUiO3M6MTY6ImpjZWtlZUBnbWFpbC5jb20iO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0xMC0xNSAxMTo1NjoyMiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0xMC0xNSAxMTo1NjoyMiI7czo0OiJuYWFtIjtzOjEwOiJqZXJvZW4ga2VlIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9fXM6MTY6Im1ldGFfZGVzY3JpcHRpb24iO3M6NDM6IlN0cmFhdGJlZWxkIHZhbiBkZSBidXVydCBpbiBrb3J0ZSBmaWxtcGplcy4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE1OiJwcm9qZWN0bG9uZ25hbWUiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6Mzc3MjoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgNDAgc2Vjb25kZW48L2E+IDwvcD4gICAgPC9oMj4gCiAgICAgICAgPGRpdiBjbGFzcz0iZGV0YWlsIj4KCiAgICAgICAgICAgIDxmaWd1cmUgaWQ9ImZpZyIgY2xhc3M9ImZsb2F0ciI+CgogICAgICAgICAgICAgICAgICAgICAgICA8dmlkZW8gd2lkdGg9IjEwMCUiIGNvbnRyb2xzPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNvdXJjZSBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL3ZpZGVvLzAvMTRiLm1wNCIgdHlwZT0idmlkZW8vbXA0Ij4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzb3VyY2Ugc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC92aWRlby8wLzE0Yi5vZ2ciIHR5cGU9InZpZGVvL29nZyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDwvdmlkZW8+CgoKICAgIAoKICAgICAgICAgICAgICAgIDxmaWdjYXB0aW9uPgogICAgICAgICAgICAgICAgICAgIDxzbWFsbD4KICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9InBlcnNvbiI+amVyb2VuIGtlZTwvc3Bhbj4KICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+ZGVjZW1iZXIgMjYKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5tZWV1d2VuIGFjaHRlcnVpdDxicj48L2gyPgoKICAgICAgICAgQWNodGVyc3Rldm9yZW4gemllIGplIG5vZyBiZXRlciBob2UgcHJhY2h0aWcgZGUgdm9nZWxzIGluIGh1biB2bHVjaHQgemlqbi4gIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMzMxIj4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMjUgMTE6MDY6NTMiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKPGRpdiBjbGFzcz0icGFwZXIiPjxhIGhyZWY9Ii9tZWRpYS90YWcvMTE1LyIgY2xhc3M9ImxhYmVsIj4jdm9nZWxzPC9hPiA8YSBocmVmPSIvbWVkaWEvdGFnLzk5LyIgY2xhc3M9ImxhYmVsIj4jc25lZXV3PC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMzMxKTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzMxLyIgZGF0YS1sYXlvdXQ9Imljb25fbGluayI+PC9kaXY+PC9kaXY+Cgo8L2FzaWRlPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgZnVuY3Rpb24gc2V0cGluKCkKICAgIHsKICAgICAgICB2YXIgbGxsID0gTC5sYXRMbmcoNTIuMzY0MDk2Mjg4MiwgNC44NzE1NzgyMTY2KTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjUwNzoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJtZWV1d2VuIGFjaHRlcnVpdCIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93NjAwLzAvMTRiLm00diIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6dXJsIiBjb250ZW50PSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8zMzEvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="meeuwen achteruit" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/14b.m4v" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/331/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">

                        <video width="100%" controls>
                            <source src="//cache.bvstemmen.nl/video/0/14b.mp4" type="video/mp4">
                            <source src="//cache.bvstemmen.nl/video/0/14b.ogg" type="video/ogg">
                        </video>


    

                <figcaption>
                    <small>
                        <span class="person">jeroen kee</span>
                        
                            <br>december 26
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">meeuwen achteruit<br></h2>

         Achterstevoren zie je nog beter hoe prachtig de vogels in hun vlucht zijn.  
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="331">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 11:06:53">

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


<div class="paper"><a href="/media/tag/115/" class="label">#vogels</a> <a href="/media/tag/99/" class="label">#sneeuw</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,331);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/331/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3640962882, 4.8715782166);
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