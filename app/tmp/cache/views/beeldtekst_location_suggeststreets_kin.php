<!--cachetime:1454800143--><?php
			App::uses('LocationController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6ODoibG9jYXRpb24iO3M6NjoiYWN0aW9uIjtzOjE0OiJzdWdnZXN0c3RyZWV0cyI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6ImtpbiI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6Mzp7czo4OiJBZHJwYXJ0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBZHJwYXJ0cyI7fXM6ODoiUHJvamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiUHJvamVjdHMiO31zOjg6Ik1lc3NhZ2VzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6Ik1lc3NhZ2VzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjI3OiJsb2NhdGlvbi9zdWdnZXN0c3RyZWV0cy9raW4iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6Mjg6Ii9sb2NhdGlvbi9zdWdnZXN0c3RyZWV0cy9raW4iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new LocationController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo2OntzOjg6ImZvdW5kc2V0IjthOjE6e2k6MDthOjE6e3M6ODoiQWRycGFydHMiO2E6NTp7czoyOiJpZCI7czoxOiI5IjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIyIjtzOjQ6Im5hYW0iO3M6MTI6IktpbmtlcnN0cmFhdCI7czo1OiJsZXZlbCI7czoxOiIzIjtzOjY6ImFkcl9pZCI7czoxOiI5Ijt9fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjMyOiJEaXQgZGVlbCB2YW4gZGUgc3RhZCB2YXN0cGFra2VuLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjIyOiJPdWQtV2VzdCBpbiBCZWVsZFRla3N0IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTE2OiI8dWwgaWQ9InJlc3VsdEJveCIgY2xhc3M9InJCb3h1bCI+PGxpIGlkPSJpdGVtMCIgb25jbGljaz0ibGlzdGNsaWNrKCdpdGVtMCcpOyIgY2xhc3M9InJCb3hsaSI+S2lua2Vyc3RyYWF0PC9saT48L3VsPiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><ul id="resultBox" class="rBoxul"><li id="item0" onclick="listclick('item0');" class="rBoxli">Kinkerstraat</li></ul>