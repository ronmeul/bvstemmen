<!--cachetime:1426728761--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjMxMiI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzMxMi8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzEyLyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjQ3MiI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTM4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMTIiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTM4IjtzOjc6InRhZ25hbWUiO3M6MjI6Ik91ZCBXZXN0IGluIEJlZWxkVGVrc3QiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMxMiI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMjcgMTY6MDk6MzgiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IkJ1dXJ0dm9sc3RlbW1lbkZvdG8zLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MDoiIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAxOjIwIDEyOjIzOjI4IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxOTgwOiJEaXQgaHVpcyBrcmlqZ3QgZWVuIG5pZXV3ZSBrYWZ0LiBPZiBoZXQgaGVsZSBib2VrIHdvcmR0IHZlcnZhbmdlbiAmaGVsbGlwOyBuaWV0cyBob3VkdCBkZSB2b29ydWl0Z2FuZyB0ZWdlbi4gV2FudCBtZXQgdm9vcnVpdGdhbmcgdmFsdCB2ZWVsIHRlIHZlcmRpZW5lbi4gVm9vcmFsIGdlbGQuIEVuIGRhYXIga2FuIGplIGplIHZlcmxhbmdlbiBuYWFyIGt1bnN0IG1lZSBiZXZyZWRpZ2VuLCBpbiBkZSBkaXJlY3RpZWthbWVyLiBIZXQgb3VkZSBrYW4gd2VnIHZpYSBhY2h0ZXIuDQpNaWpuIHJlYWxpdGVpdCBraWprdCBkYWFydGVnZW5hYW4sIG1ldCBhcmd1c29nZW4uDQpBcmd3YW5lbmQgb29rIHppZXQgaGV0IHZlcmxlZGVuIG9ucy4gSWsga29tIFZpbmNlbnQgSHVuaW5rIHRlZ2VuOiAmbGRxdW87JmhlbGxpcDsgZWVuIHNvb3J0IGRlbW9uZW46IGRlIG1lbnNlbGlqa2UgemllbCBkaWUgZGUgbGV2ZW5zZGllbnN0IHZlcnZ1bGQgaGVlZnQgZW4gYWZzdGFuZCBkb2V0IHZhbiBoZXQgbGljaGFhbS4gSW4gaGV0IG91ZC1MYXRpam5zZSB0YWFsZ2VicnVpayAmaGVsbGlwOyBkZSB0ZXJtIExlbXVyaXMuIFRvdCBkZXplIExlbXVyZW4gYmVob29ydCBvb2sgZGVnZW5lIGRpZSBkZSB6b3JnIGdla3JlZ2VuIGhlZWZ0IHZvb3IgemlqbiBuYWJlc3RhYW5kZW4sIGVuIG1ldCBiZWRhYXJkZSwgdnJlZWR6YW1lIG1hY2h0IGhldCBodWlzIGJlaGVlcnN0ICZoZWxsaXA7IFdpZSB2YW53ZWdlIHZlcmtlZXJkIGdlZHJhZyBpbiBoZXQgbGV2ZW4ganVpc3QgZ2VlbiB2YXN0ZSBwbGVrIGhlZWZ0LCBtYWFyIHJvbmR6d2VyZnQgZW4gYWxzIGhldCB3YXJlIG1ldCBiYWxsaW5nc2NoYXAgaXMgZ2VzdHJhZnQsIC0tIGVlbiBvbnNjaHVsZGlnIHNwb29rYmVlbGQgdm9vciBkZSBnb2VkZW4sIG1hYXIgdm9vciBkZSBrd2FkZW4gZWVuIGdlc2VsICZoZWxsaXA7JnJkcXVvOyBaZSBzdGFyZW4gbWUgYWFuLCB2YW5hZiAxIGhvb2csIGRlIGRpY2h0Z2V0aW1tZXJkZSBkZXVyLCB2YW5hY2h0ZXIgZGUgdml0cmFnZS4gRGUgdG9lc2Nob3V3ZXIgcHJvYmVlcnQgZG9vciBkZSBtdXVyIGhlZW4gdGUga2lqa2VuLCBkZSBmb3RvIGdlZWZ0IG5pZXRzIHRlcnVnLg0KV2F0IHplZ3QgZGUgZm90bywgZGUgZ2V2ZWwuIFdhdCBhZGVtdCBoZXQgaHVpcyB1aXQ/DQpOZWRlcmxhbmQga2VudCB6aWpuIGZhJmNjZWRpbDthZGVuLiAgQmVsZ2VuIGt1bm5lbiBoZXQgYmV0ZXIsIGxhYXQgVmFuIEZsZXRlcmVuIHppZW4uIEluIE5lZGVybGFuZCBpcyB2ZXJnYW5lIGdsb3JpZSBvbSBhZiB0ZSBicmVrZW4sIGluIEJlbGdpJmV1bWw7IGVlbiBkZWVsIHZhbiBkZSBjdWx0dXVyLiBXZSBtaXNzZW4gaGllciBpZXRzICZuZGFzaDsgZ2VicmVrIGFhbiBoZXJiZWxldmluZz8NCkRlIE5lZGVybGFuZHNlIGphY2h0IG9wIGhlcmdlYnJ1aWsgaXMgbmV0IHRlIGdyb290LCBKZSB2ZXJ3YWNodCBzcG9yZW4gJmhlbGxpcDsgbWFhciBkZSB6YWFrIGlzIGFsIHZlcnZhbmdlbi4gTmF1d2VsaWprcyB2ZXJnZXRlbiBvYmplY3Rlbi4gRGUgTWFya3RoYWxsZW4gJmhlbGxpcDsgZWVuIHByb2plY3QgZGF0IGRlIGtvb3BtYW5zZ2Vlc3QgIGFjaHRlciBkZSBiZWxldmluZyB2YW4gaGV0IHZvbGsgcGxhYXRzdC4gRGF0IGlzIG1vb2ksIGhldCBrYW4gb29rIGhhbmQgaW4gaGFuZCAmaGVsbGlwOw0KR2Vub2VnICBvdWQgbWF0ZXJpYWFsIGluIGRlemUgYnV1cnQsIGRvb3JsZWVmZGUgbXVyZW4NClNwb3JlbiB2YW4gdmVyZ2FuZSBnbG9yaWUNCklrIGRlbmsgYWFuIGRlIG9tZ2V2aW5nLCB3YW5uZWVyIE0gZGUgZm90byBuZWVtdC4gTnUgaWsgJmxzcXVvO20gdGVydWd6aWUsIGJlc2VmIGlrIGRhdCBoaWogd2FhcnNjaGlqbmxpamsgaGV0IHZlcnNjaGlsIGluIGJlbGV2ZW4sIGluIGxldmVuIHphZywgcmVjaHQgdm9vciBoZW0uDQpSZWNodHMsIHZvb3IgZGUga2lqa2VyICZuZGFzaDsgdm9vciBkZSBiZXdvbmVyIGxpbmtzICAtIHplIHp3YWFpZW4hDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjE7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiI2MjkiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjE3OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzEyIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjM6IjE3OCI7czo3OiJ0YWduYW1lIjtzOjc6InN0cmF0ZW4iO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMxMiI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMjcgMTY6MDk6MzgiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IkJ1dXJ0dm9sc3RlbW1lbkZvdG8zLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MDoiIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAxOjIwIDEyOjIzOjI4IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxOTgwOiJEaXQgaHVpcyBrcmlqZ3QgZWVuIG5pZXV3ZSBrYWZ0LiBPZiBoZXQgaGVsZSBib2VrIHdvcmR0IHZlcnZhbmdlbiAmaGVsbGlwOyBuaWV0cyBob3VkdCBkZSB2b29ydWl0Z2FuZyB0ZWdlbi4gV2FudCBtZXQgdm9vcnVpdGdhbmcgdmFsdCB2ZWVsIHRlIHZlcmRpZW5lbi4gVm9vcmFsIGdlbGQuIEVuIGRhYXIga2FuIGplIGplIHZlcmxhbmdlbiBuYWFyIGt1bnN0IG1lZSBiZXZyZWRpZ2VuLCBpbiBkZSBkaXJlY3RpZWthbWVyLiBIZXQgb3VkZSBrYW4gd2VnIHZpYSBhY2h0ZXIuDQpNaWpuIHJlYWxpdGVpdCBraWprdCBkYWFydGVnZW5hYW4sIG1ldCBhcmd1c29nZW4uDQpBcmd3YW5lbmQgb29rIHppZXQgaGV0IHZlcmxlZGVuIG9ucy4gSWsga29tIFZpbmNlbnQgSHVuaW5rIHRlZ2VuOiAmbGRxdW87JmhlbGxpcDsgZWVuIHNvb3J0IGRlbW9uZW46IGRlIG1lbnNlbGlqa2UgemllbCBkaWUgZGUgbGV2ZW5zZGllbnN0IHZlcnZ1bGQgaGVlZnQgZW4gYWZzdGFuZCBkb2V0IHZhbiBoZXQgbGljaGFhbS4gSW4gaGV0IG91ZC1MYXRpam5zZSB0YWFsZ2VicnVpayAmaGVsbGlwOyBkZSB0ZXJtIExlbXVyaXMuIFRvdCBkZXplIExlbXVyZW4gYmVob29ydCBvb2sgZGVnZW5lIGRpZSBkZSB6b3JnIGdla3JlZ2VuIGhlZWZ0IHZvb3IgemlqbiBuYWJlc3RhYW5kZW4sIGVuIG1ldCBiZWRhYXJkZSwgdnJlZWR6YW1lIG1hY2h0IGhldCBodWlzIGJlaGVlcnN0ICZoZWxsaXA7IFdpZSB2YW53ZWdlIHZlcmtlZXJkIGdlZHJhZyBpbiBoZXQgbGV2ZW4ganVpc3QgZ2VlbiB2YXN0ZSBwbGVrIGhlZWZ0LCBtYWFyIHJvbmR6d2VyZnQgZW4gYWxzIGhldCB3YXJlIG1ldCBiYWxsaW5nc2NoYXAgaXMgZ2VzdHJhZnQsIC0tIGVlbiBvbnNjaHVsZGlnIHNwb29rYmVlbGQgdm9vciBkZSBnb2VkZW4sIG1hYXIgdm9vciBkZSBrd2FkZW4gZWVuIGdlc2VsICZoZWxsaXA7JnJkcXVvOyBaZSBzdGFyZW4gbWUgYWFuLCB2YW5hZiAxIGhvb2csIGRlIGRpY2h0Z2V0aW1tZXJkZSBkZXVyLCB2YW5hY2h0ZXIgZGUgdml0cmFnZS4gRGUgdG9lc2Nob3V3ZXIgcHJvYmVlcnQgZG9vciBkZSBtdXVyIGhlZW4gdGUga2lqa2VuLCBkZSBmb3RvIGdlZWZ0IG5pZXRzIHRlcnVnLg0KV2F0IHplZ3QgZGUgZm90bywgZGUgZ2V2ZWwuIFdhdCBhZGVtdCBoZXQgaHVpcyB1aXQ/DQpOZWRlcmxhbmQga2VudCB6aWpuIGZhJmNjZWRpbDthZGVuLiAgQmVsZ2VuIGt1bm5lbiBoZXQgYmV0ZXIsIGxhYXQgVmFuIEZsZXRlcmVuIHppZW4uIEluIE5lZGVybGFuZCBpcyB2ZXJnYW5lIGdsb3JpZSBvbSBhZiB0ZSBicmVrZW4sIGluIEJlbGdpJmV1bWw7IGVlbiBkZWVsIHZhbiBkZSBjdWx0dXVyLiBXZSBtaXNzZW4gaGllciBpZXRzICZuZGFzaDsgZ2VicmVrIGFhbiBoZXJiZWxldmluZz8NCkRlIE5lZGVybGFuZHNlIGphY2h0IG9wIGhlcmdlYnJ1aWsgaXMgbmV0IHRlIGdyb290LCBKZSB2ZXJ3YWNodCBzcG9yZW4gJmhlbGxpcDsgbWFhciBkZSB6YWFrIGlzIGFsIHZlcnZhbmdlbi4gTmF1d2VsaWprcyB2ZXJnZXRlbiBvYmplY3Rlbi4gRGUgTWFya3RoYWxsZW4gJmhlbGxpcDsgZWVuIHByb2plY3QgZGF0IGRlIGtvb3BtYW5zZ2Vlc3QgIGFjaHRlciBkZSBiZWxldmluZyB2YW4gaGV0IHZvbGsgcGxhYXRzdC4gRGF0IGlzIG1vb2ksIGhldCBrYW4gb29rIGhhbmQgaW4gaGFuZCAmaGVsbGlwOw0KR2Vub2VnICBvdWQgbWF0ZXJpYWFsIGluIGRlemUgYnV1cnQsIGRvb3JsZWVmZGUgbXVyZW4NClNwb3JlbiB2YW4gdmVyZ2FuZSBnbG9yaWUNCklrIGRlbmsgYWFuIGRlIG9tZ2V2aW5nLCB3YW5uZWVyIE0gZGUgZm90byBuZWVtdC4gTnUgaWsgJmxzcXVvO20gdGVydWd6aWUsIGJlc2VmIGlrIGRhdCBoaWogd2FhcnNjaGlqbmxpamsgaGV0IHZlcnNjaGlsIGluIGJlbGV2ZW4sIGluIGxldmVuIHphZywgcmVjaHQgdm9vciBoZW0uDQpSZWNodHMsIHZvb3IgZGUga2lqa2VyICZuZGFzaDsgdm9vciBkZSBiZXdvbmVyIGxpbmtzICAtIHplIHp3YWFpZW4hDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjI7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiI3NjIiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjE5NSI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzEyIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjM6IjE5NSI7czo3OiJ0YWduYW1lIjtzOjEwOiJiZWVsZHRla3N0Ijt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIzMTIiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTEwLTI3IDE2OjA5OjM4IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjI0OiJCdXVydHZvbHN0ZW1tZW5Gb3RvMy5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI4NyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjA6IiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDowMToyMCAxMjoyMzoyOCI7czoxMToib3BtZXJraW5nZW4iO3M6MTk4MDoiRGl0IGh1aXMga3Jpamd0IGVlbiBuaWV1d2Uga2FmdC4gT2YgaGV0IGhlbGUgYm9layB3b3JkdCB2ZXJ2YW5nZW4gJmhlbGxpcDsgbmlldHMgaG91ZHQgZGUgdm9vcnVpdGdhbmcgdGVnZW4uIFdhbnQgbWV0IHZvb3J1aXRnYW5nIHZhbHQgdmVlbCB0ZSB2ZXJkaWVuZW4uIFZvb3JhbCBnZWxkLiBFbiBkYWFyIGthbiBqZSBqZSB2ZXJsYW5nZW4gbmFhciBrdW5zdCBtZWUgYmV2cmVkaWdlbiwgaW4gZGUgZGlyZWN0aWVrYW1lci4gSGV0IG91ZGUga2FuIHdlZyB2aWEgYWNodGVyLg0KTWlqbiByZWFsaXRlaXQga2lqa3QgZGFhcnRlZ2VuYWFuLCBtZXQgYXJndXNvZ2VuLg0KQXJnd2FuZW5kIG9vayB6aWV0IGhldCB2ZXJsZWRlbiBvbnMuIElrIGtvbSBWaW5jZW50IEh1bmluayB0ZWdlbjogJmxkcXVvOyZoZWxsaXA7IGVlbiBzb29ydCBkZW1vbmVuOiBkZSBtZW5zZWxpamtlIHppZWwgZGllIGRlIGxldmVuc2RpZW5zdCB2ZXJ2dWxkIGhlZWZ0IGVuIGFmc3RhbmQgZG9ldCB2YW4gaGV0IGxpY2hhYW0uIEluIGhldCBvdWQtTGF0aWpuc2UgdGFhbGdlYnJ1aWsgJmhlbGxpcDsgZGUgdGVybSBMZW11cmlzLiBUb3QgZGV6ZSBMZW11cmVuIGJlaG9vcnQgb29rIGRlZ2VuZSBkaWUgZGUgem9yZyBnZWtyZWdlbiBoZWVmdCB2b29yIHppam4gbmFiZXN0YWFuZGVuLCBlbiBtZXQgYmVkYWFyZGUsIHZyZWVkemFtZSBtYWNodCBoZXQgaHVpcyBiZWhlZXJzdCAmaGVsbGlwOyBXaWUgdmFud2VnZSB2ZXJrZWVyZCBnZWRyYWcgaW4gaGV0IGxldmVuIGp1aXN0IGdlZW4gdmFzdGUgcGxlayBoZWVmdCwgbWFhciByb25kendlcmZ0IGVuIGFscyBoZXQgd2FyZSBtZXQgYmFsbGluZ3NjaGFwIGlzIGdlc3RyYWZ0LCAtLSBlZW4gb25zY2h1bGRpZyBzcG9va2JlZWxkIHZvb3IgZGUgZ29lZGVuLCBtYWFyIHZvb3IgZGUga3dhZGVuIGVlbiBnZXNlbCAmaGVsbGlwOyZyZHF1bzsgWmUgc3RhcmVuIG1lIGFhbiwgdmFuYWYgMSBob29nLCBkZSBkaWNodGdldGltbWVyZGUgZGV1ciwgdmFuYWNodGVyIGRlIHZpdHJhZ2UuIERlIHRvZXNjaG91d2VyIHByb2JlZXJ0IGRvb3IgZGUgbXV1ciBoZWVuIHRlIGtpamtlbiwgZGUgZm90byBnZWVmdCBuaWV0cyB0ZXJ1Zy4NCldhdCB6ZWd0IGRlIGZvdG8sIGRlIGdldmVsLiBXYXQgYWRlbXQgaGV0IGh1aXMgdWl0Pw0KTmVkZXJsYW5kIGtlbnQgemlqbiBmYSZjY2VkaWw7YWRlbi4gIEJlbGdlbiBrdW5uZW4gaGV0IGJldGVyLCBsYWF0IFZhbiBGbGV0ZXJlbiB6aWVuLiBJbiBOZWRlcmxhbmQgaXMgdmVyZ2FuZSBnbG9yaWUgb20gYWYgdGUgYnJla2VuLCBpbiBCZWxnaSZldW1sOyBlZW4gZGVlbCB2YW4gZGUgY3VsdHV1ci4gV2UgbWlzc2VuIGhpZXIgaWV0cyAmbmRhc2g7IGdlYnJlayBhYW4gaGVyYmVsZXZpbmc/DQpEZSBOZWRlcmxhbmRzZSBqYWNodCBvcCBoZXJnZWJydWlrIGlzIG5ldCB0ZSBncm9vdCwgSmUgdmVyd2FjaHQgc3BvcmVuICZoZWxsaXA7IG1hYXIgZGUgemFhayBpcyBhbCB2ZXJ2YW5nZW4uIE5hdXdlbGlqa3MgdmVyZ2V0ZW4gb2JqZWN0ZW4uIERlIE1hcmt0aGFsbGVuICZoZWxsaXA7IGVlbiBwcm9qZWN0IGRhdCBkZSBrb29wbWFuc2dlZXN0ICBhY2h0ZXIgZGUgYmVsZXZpbmcgdmFuIGhldCB2b2xrIHBsYWF0c3QuIERhdCBpcyBtb29pLCBoZXQga2FuIG9vayBoYW5kIGluIGhhbmQgJmhlbGxpcDsNCkdlbm9lZyAgb3VkIG1hdGVyaWFhbCBpbiBkZXplIGJ1dXJ0LCBkb29ybGVlZmRlIG11cmVuDQpTcG9yZW4gdmFuIHZlcmdhbmUgZ2xvcmllDQpJayBkZW5rIGFhbiBkZSBvbWdldmluZywgd2FubmVlciBNIGRlIGZvdG8gbmVlbXQuIE51IGlrICZsc3F1bzttIHRlcnVnemllLCBiZXNlZiBpayBkYXQgaGlqIHdhYXJzY2hpam5saWprIGhldCB2ZXJzY2hpbCBpbiBiZWxldmVuLCBpbiBsZXZlbiB6YWcsIHJlY2h0IHZvb3IgaGVtLg0KUmVjaHRzLCB2b29yIGRlIGtpamtlciAmbmRhc2g7IHZvb3IgZGUgYmV3b25lciBsaW5rcyAgLSB6ZSB6d2FhaWVuIQ0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMxMiI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMjcgMTY6MDk6MzgiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IkJ1dXJ0dm9sc3RlbW1lbkZvdG8zLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MDoiIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAxOjIwIDEyOjIzOjI4IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxOTgwOiJEaXQgaHVpcyBrcmlqZ3QgZWVuIG5pZXV3ZSBrYWZ0LiBPZiBoZXQgaGVsZSBib2VrIHdvcmR0IHZlcnZhbmdlbiAmaGVsbGlwOyBuaWV0cyBob3VkdCBkZSB2b29ydWl0Z2FuZyB0ZWdlbi4gV2FudCBtZXQgdm9vcnVpdGdhbmcgdmFsdCB2ZWVsIHRlIHZlcmRpZW5lbi4gVm9vcmFsIGdlbGQuIEVuIGRhYXIga2FuIGplIGplIHZlcmxhbmdlbiBuYWFyIGt1bnN0IG1lZSBiZXZyZWRpZ2VuLCBpbiBkZSBkaXJlY3RpZWthbWVyLiBIZXQgb3VkZSBrYW4gd2VnIHZpYSBhY2h0ZXIuDQpNaWpuIHJlYWxpdGVpdCBraWprdCBkYWFydGVnZW5hYW4sIG1ldCBhcmd1c29nZW4uDQpBcmd3YW5lbmQgb29rIHppZXQgaGV0IHZlcmxlZGVuIG9ucy4gSWsga29tIFZpbmNlbnQgSHVuaW5rIHRlZ2VuOiAmbGRxdW87JmhlbGxpcDsgZWVuIHNvb3J0IGRlbW9uZW46IGRlIG1lbnNlbGlqa2UgemllbCBkaWUgZGUgbGV2ZW5zZGllbnN0IHZlcnZ1bGQgaGVlZnQgZW4gYWZzdGFuZCBkb2V0IHZhbiBoZXQgbGljaGFhbS4gSW4gaGV0IG91ZC1MYXRpam5zZSB0YWFsZ2VicnVpayAmaGVsbGlwOyBkZSB0ZXJtIExlbXVyaXMuIFRvdCBkZXplIExlbXVyZW4gYmVob29ydCBvb2sgZGVnZW5lIGRpZSBkZSB6b3JnIGdla3JlZ2VuIGhlZWZ0IHZvb3IgemlqbiBuYWJlc3RhYW5kZW4sIGVuIG1ldCBiZWRhYXJkZSwgdnJlZWR6YW1lIG1hY2h0IGhldCBodWlzIGJlaGVlcnN0ICZoZWxsaXA7IFdpZSB2YW53ZWdlIHZlcmtlZXJkIGdlZHJhZyBpbiBoZXQgbGV2ZW4ganVpc3QgZ2VlbiB2YXN0ZSBwbGVrIGhlZWZ0LCBtYWFyIHJvbmR6d2VyZnQgZW4gYWxzIGhldCB3YXJlIG1ldCBiYWxsaW5nc2NoYXAgaXMgZ2VzdHJhZnQsIC0tIGVlbiBvbnNjaHVsZGlnIHNwb29rYmVlbGQgdm9vciBkZSBnb2VkZW4sIG1hYXIgdm9vciBkZSBrd2FkZW4gZWVuIGdlc2VsICZoZWxsaXA7JnJkcXVvOyBaZSBzdGFyZW4gbWUgYWFuLCB2YW5hZiAxIGhvb2csIGRlIGRpY2h0Z2V0aW1tZXJkZSBkZXVyLCB2YW5hY2h0ZXIgZGUgdml0cmFnZS4gRGUgdG9lc2Nob3V3ZXIgcHJvYmVlcnQgZG9vciBkZSBtdXVyIGhlZW4gdGUga2lqa2VuLCBkZSBmb3RvIGdlZWZ0IG5pZXRzIHRlcnVnLg0KV2F0IHplZ3QgZGUgZm90bywgZGUgZ2V2ZWwuIFdhdCBhZGVtdCBoZXQgaHVpcyB1aXQ/DQpOZWRlcmxhbmQga2VudCB6aWpuIGZhJmNjZWRpbDthZGVuLiAgQmVsZ2VuIGt1bm5lbiBoZXQgYmV0ZXIsIGxhYXQgVmFuIEZsZXRlcmVuIHppZW4uIEluIE5lZGVybGFuZCBpcyB2ZXJnYW5lIGdsb3JpZSBvbSBhZiB0ZSBicmVrZW4sIGluIEJlbGdpJmV1bWw7IGVlbiBkZWVsIHZhbiBkZSBjdWx0dXVyLiBXZSBtaXNzZW4gaGllciBpZXRzICZuZGFzaDsgZ2VicmVrIGFhbiBoZXJiZWxldmluZz8NCkRlIE5lZGVybGFuZHNlIGphY2h0IG9wIGhlcmdlYnJ1aWsgaXMgbmV0IHRlIGdyb290LCBKZSB2ZXJ3YWNodCBzcG9yZW4gJmhlbGxpcDsgbWFhciBkZSB6YWFrIGlzIGFsIHZlcnZhbmdlbi4gTmF1d2VsaWprcyB2ZXJnZXRlbiBvYmplY3Rlbi4gRGUgTWFya3RoYWxsZW4gJmhlbGxpcDsgZWVuIHByb2plY3QgZGF0IGRlIGtvb3BtYW5zZ2Vlc3QgIGFjaHRlciBkZSBiZWxldmluZyB2YW4gaGV0IHZvbGsgcGxhYXRzdC4gRGF0IGlzIG1vb2ksIGhldCBrYW4gb29rIGhhbmQgaW4gaGFuZCAmaGVsbGlwOw0KR2Vub2VnICBvdWQgbWF0ZXJpYWFsIGluIGRlemUgYnV1cnQsIGRvb3JsZWVmZGUgbXVyZW4NClNwb3JlbiB2YW4gdmVyZ2FuZSBnbG9yaWUNCklrIGRlbmsgYWFuIGRlIG9tZ2V2aW5nLCB3YW5uZWVyIE0gZGUgZm90byBuZWVtdC4gTnUgaWsgJmxzcXVvO20gdGVydWd6aWUsIGJlc2VmIGlrIGRhdCBoaWogd2FhcnNjaGlqbmxpamsgaGV0IHZlcnNjaGlsIGluIGJlbGV2ZW4sIGluIGxldmVuIHphZywgcmVjaHQgdm9vciBoZW0uDQpSZWNodHMsIHZvb3IgZGUga2lqa2VyICZuZGFzaDsgdm9vciBkZSBiZXdvbmVyIGxpbmtzICAtIHplIHp3YWFpZW4hDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fXM6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6Ijg3IjtzOjg6InVzZXJuYW1lIjtzOjI2OiJqYWFwaG9vZ3RlaWpsaW5nQHhzNGFsbC5ubCI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTEwLTI1IDAwOjA5OjI4IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTEwLTI1IDAwOjA5OjI4IjtzOjQ6Im5hYW0iO3M6MzM6Ik1hcnRpam4gQmFydGggJiBKYWFwIEhvb2d0ZWlqbGluZyI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fXM6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7YToxOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjIwOCI7czo4OiJtZWRpYV9pZCI7czozOiIzMTIiO3M6MTI6InJlbGF0aWVzb29ydCI7czo1OiJtYWtlciI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3Ijt9fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MzoiMzEyIjtzOjk6Im9iamVjdF9pZCI7czozOiIxNjMiO3M6MjoiaWQiO3M6MzoiMzEwIjt9fXM6NDoiVGFncyI7YTozOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjQ3MiI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTM4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMTIiO31pOjE7YTo0OntzOjI6ImlkIjtzOjM6IjYyOSI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMTIiO31pOjI7YTo0OntzOjI6ImlkIjtzOjM6Ijc2MiI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTk1IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMTIiO319fXM6NzoibG9jZGF0YSI7YTozOntzOjg6IkxvY2F0aW9uIjthOjM6e3M6MjoiaWQiO3M6MzoiMTkzIjtzOjM6ImxhdCI7czoxMzoiNTIuMzY3Mzc4NDU0MiI7czozOiJsb24iO3M6MTI6IjQuODYzODUzNDU0NiI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjE6e2k6MDthOjM6e3M6MTE6ImxvY2F0aW9uX2lkIjtzOjM6IjE5MyI7czo5OiJvYmplY3RfaWQiO3M6MzoiMTYzIjtzOjI6ImlkIjtzOjM6IjE2MyI7fX1zOjM6IkFkciI7YTowOnt9fXM6NToiYWRyZXMiO2E6MDp7fXM6NToibWFrZXIiO2E6MTp7czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiODciO3M6ODoidXNlcm5hbWUiO3M6MjY6ImphYXBob29ndGVpamxpbmdAeHM0YWxsLm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6NDoibmFhbSI7czozMzoiTWFydGlqbiBCYXJ0aCAmIEphYXAgSG9vZ3RlaWpsaW5nIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9fXM6MTY6Im1ldGFfZGVzY3JpcHRpb24iO3M6NDM6IlN0cmFhdGJlZWxkIHZhbiBkZSBidXVydCBpbiBrb3J0ZSBmaWxtcGplcy4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE1OiJwcm9qZWN0bG9uZ25hbWUiO3M6MTE6IjQwIHNlY29uZGVuIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NjQyNzoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgNDAgc2Vjb25kZW48L2E+IDwvcD4gICAgPC9oMj4gCiAgICAgICAgPGRpdiBjbGFzcz0iZGV0YWlsIj4KCiAgICAgICAgICAgIDxmaWd1cmUgaWQ9ImZpZyIgY2xhc3M9ImZsb2F0ciI+CgoKICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBjbGFzcz0iaXRlbWltZyBjbGlja2FibGUiIGlkPSJ0aGVpbWciIHNyYz0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3cyMTMvMC8xMzguanBnIiAgb25jbGljaz0icG9wdXBpbWcoJy8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZycsICcwLzEzOC5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wLzEzOC5qcGciOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYWRkTG9hZEV2ZW50KGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9ubG9hZGZpeGltZygpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2NyaXB0PgoKICAgIAoKICAgICAgICAgICAgICAgIDxmaWdjYXB0aW9uPgogICAgICAgICAgICAgICAgICAgIDxzbWFsbD4KICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9InBlcnNvbiI+TWFydGlqbiBCYXJ0aCAmIEphYXAgSG9vZ3RlaWpsaW5nPC9zcGFuPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj5qYW51YXJpIDIwMTQKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5qYW51YXJpIDIwMTQ8YnI+PC9oMj4KCiAgICAgICAgIERpdCBodWlzIGtyaWpndCBlZW4gbmlldXdlIGthZnQuIE9mIGhldCBoZWxlIGJvZWsgd29yZHQgdmVydmFuZ2VuICZoZWxsaXA7IG5pZXRzIGhvdWR0IGRlIHZvb3J1aXRnYW5nIHRlZ2VuLiBXYW50IG1ldCB2b29ydWl0Z2FuZyB2YWx0IHZlZWwgdGUgdmVyZGllbmVuLiBWb29yYWwgZ2VsZC4gRW4gZGFhciBrYW4gamUgamUgdmVybGFuZ2VuIG5hYXIga3Vuc3QgbWVlIGJldnJlZGlnZW4sIGluIGRlIGRpcmVjdGlla2FtZXIuIEhldCBvdWRlIGthbiB3ZWcgdmlhIGFjaHRlci48YnI+PGJyPk1pam4gcmVhbGl0ZWl0IGtpamt0IGRhYXJ0ZWdlbmFhbiwgbWV0IGFyZ3Vzb2dlbi48YnI+PGJyPkFyZ3dhbmVuZCBvb2sgemlldCBoZXQgdmVybGVkZW4gb25zLiBJayBrb20gVmluY2VudCBIdW5pbmsgdGVnZW46ICZsZHF1bzsmaGVsbGlwOyBlZW4gc29vcnQgZGVtb25lbjogZGUgbWVuc2VsaWprZSB6aWVsIGRpZSBkZSBsZXZlbnNkaWVuc3QgdmVydnVsZCBoZWVmdCBlbiBhZnN0YW5kIGRvZXQgdmFuIGhldCBsaWNoYWFtLiBJbiBoZXQgb3VkLUxhdGlqbnNlIHRhYWxnZWJydWlrICZoZWxsaXA7IGRlIHRlcm0gTGVtdXJpcy4gVG90IGRlemUgTGVtdXJlbiBiZWhvb3J0IG9vayBkZWdlbmUgZGllIGRlIHpvcmcgZ2VrcmVnZW4gaGVlZnQgdm9vciB6aWpuIG5hYmVzdGFhbmRlbiwgZW4gbWV0IGJlZGFhcmRlLCB2cmVlZHphbWUgbWFjaHQgaGV0IGh1aXMgYmVoZWVyc3QgJmhlbGxpcDsgV2llIHZhbndlZ2UgdmVya2VlcmQgZ2VkcmFnIGluIGhldCBsZXZlbiBqdWlzdCBnZWVuIHZhc3RlIHBsZWsgaGVlZnQsIG1hYXIgcm9uZHp3ZXJmdCBlbiBhbHMgaGV0IHdhcmUgbWV0IGJhbGxpbmdzY2hhcCBpcyBnZXN0cmFmdCwgLS0gZWVuIG9uc2NodWxkaWcgc3Bvb2tiZWVsZCB2b29yIGRlIGdvZWRlbiwgbWFhciB2b29yIGRlIGt3YWRlbiBlZW4gZ2VzZWwgJmhlbGxpcDsmcmRxdW87IFplIHN0YXJlbiBtZSBhYW4sIHZhbmFmIDEgaG9vZywgZGUgZGljaHRnZXRpbW1lcmRlIGRldXIsIHZhbmFjaHRlciBkZSB2aXRyYWdlLiBEZSB0b2VzY2hvdXdlciBwcm9iZWVydCBkb29yIGRlIG11dXIgaGVlbiB0ZSBraWprZW4sIGRlIGZvdG8gZ2VlZnQgbmlldHMgdGVydWcuPGJyPjxicj5XYXQgemVndCBkZSBmb3RvLCBkZSBnZXZlbC4gV2F0IGFkZW10IGhldCBodWlzIHVpdD88YnI+PGJyPk5lZGVybGFuZCBrZW50IHppam4gZmEmY2NlZGlsO2FkZW4uICBCZWxnZW4ga3VubmVuIGhldCBiZXRlciwgbGFhdCBWYW4gRmxldGVyZW4gemllbi4gSW4gTmVkZXJsYW5kIGlzIHZlcmdhbmUgZ2xvcmllIG9tIGFmIHRlIGJyZWtlbiwgaW4gQmVsZ2kmZXVtbDsgZWVuIGRlZWwgdmFuIGRlIGN1bHR1dXIuIFdlIG1pc3NlbiBoaWVyIGlldHMgJm5kYXNoOyBnZWJyZWsgYWFuIGhlcmJlbGV2aW5nPzxicj48YnI+RGUgTmVkZXJsYW5kc2UgamFjaHQgb3AgaGVyZ2VicnVpayBpcyBuZXQgdGUgZ3Jvb3QsIEplIHZlcndhY2h0IHNwb3JlbiAmaGVsbGlwOyBtYWFyIGRlIHphYWsgaXMgYWwgdmVydmFuZ2VuLiBOYXV3ZWxpamtzIHZlcmdldGVuIG9iamVjdGVuLiBEZSBNYXJrdGhhbGxlbiAmaGVsbGlwOyBlZW4gcHJvamVjdCBkYXQgZGUga29vcG1hbnNnZWVzdCAgYWNodGVyIGRlIGJlbGV2aW5nIHZhbiBoZXQgdm9sayBwbGFhdHN0LiBEYXQgaXMgbW9vaSwgaGV0IGthbiBvb2sgaGFuZCBpbiBoYW5kICZoZWxsaXA7PGJyPjxicj5HZW5vZWcgIG91ZCBtYXRlcmlhYWwgaW4gZGV6ZSBidXVydCwgZG9vcmxlZWZkZSBtdXJlbjxicj48YnI+U3BvcmVuIHZhbiB2ZXJnYW5lIGdsb3JpZTxicj48YnI+SWsgZGVuayBhYW4gZGUgb21nZXZpbmcsIHdhbm5lZXIgTSBkZSBmb3RvIG5lZW10LiBOdSBpayAmbHNxdW87bSB0ZXJ1Z3ppZSwgYmVzZWYgaWsgZGF0IGhpaiB3YWFyc2NoaWpubGlqayBoZXQgdmVyc2NoaWwgaW4gYmVsZXZlbiwgaW4gbGV2ZW4gemFnLCByZWNodCB2b29yIGhlbS48YnI+PGJyPlJlY2h0cywgdm9vciBkZSBraWprZXIgJm5kYXNoOyB2b29yIGRlIGJld29uZXIgbGlua3MgIC0gemUgendhYWllbiE8YnI+PGJyPiAKICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyICIgPgo8cD5HZWVmIDxhIGhyZWY9IiN1ciI+amUgcmVhY3RpZTwvYT4gb3AgZGl0IGl0ZW0uPC9wPgogICAgCiAgICAKPGRpdiBjbGFzcz0idWRpdiByb3VuZCI+Cgo8aDIgaWQ9InVyIj48L2gyPgo8Zm9ybSBpZD0iQWRkRm9ybSIgbmFtZT0iQWRkRm9ybSIgbWV0aG9kPSJwb3N0IiBhY3Rpb249Ii9jb21tZW50L2FkZC8iIG9uc3VibWl0PSJyZXR1cm4gY2hlY2tDb21tZW50QWRkRm9ybSgpOyI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bcGFnaW5hXSIgdmFsdWU9IjMxMiI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtoZXRnZXRhbF0iIHZhbHVlPSIxNjI1MzQxNTUyNjc4ODkiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtkYXR1bV0iIHZhbHVlPSIyMDE1LTAzLTE5IDAxOjMyOjQxIj4KCjxwPjxicj5Kb3V3IHJlYWN0aWU6PC9wPgoKPGRpdiBjbGFzcz0iaW5wdXQgdGV4dGFyZWEiPjx0ZXh0YXJlYSBuYW1lPSJkYXRhW0NvbW1lbnRzXVtiZXJpY2h0XSIgY29scz0iMzAiIHJvd3M9IjYiIGlkPSJhZGRmb3JtQmVyaWNodCIgPjwvdGV4dGFyZWE+PC9kaXY+Cgo8cD48YnI+TmFhbTo8L3A+PGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW25hYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybU5hYW0iPjwvZGl2PgoKPHA+PGJyPkFudGktc3BhbSB2cmFhZzogSG9ldmVlbCBpcyB0d2VlIHBsdXMgZHJpZT88L3A+CjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtzcGFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1TcGFtIj4gPHNwYW4gc3R5bGU9ImRpc3BsYXk6bm9uZTtjb2xvcjpyZWQ7Zm9udC13ZWlnaHQ6Ym9sZDttYXJnaW4tbGVmdDoxZW07IiAgaWQ9ImNvbW1zZyI+PC9zcGFuPjwvZGl2Pgo8cCBjbGFzcz0iY2VudGVyIj48YnI+PGlucHV0IGNsYXNzPSJjdGEiIHR5cGU9InN1Ym1pdCIgbmFtZT0ibm9uZSIgdmFsdWU9Ikluc3R1cmVuIj48L3A+Cgo8L2Zvcm0+Cgo8cD48c3Ryb25nPk4uQi48L3N0cm9uZz4gRGUgcmVkYWN0aWUga2FuIGplIGJpamRyYWdlIGFhbnBhc3NlbiBvZiB2ZXJ3aWpkZXJlbi4gSGllcm92ZXIgd29yZHQgbmlldCBnZWNvcnJlc3BvbmRlZXJkLjwvcD4KCgo8L2Rpdj4gICAgPC9kaXY+CgoKPC9hcnRpY2xlPgoKPGFzaWRlPgoKCjxkaXYgY2xhc3M9InBhcGVyIj48YSBocmVmPSIvbWVkaWEvdGFnLzEzOC8iIGNsYXNzPSJsYWJlbCI+I091ZCBXZXN0IGluIEJlZWxkVGVrc3Q8L2E+IDxhIGhyZWY9Ii9tZWRpYS90YWcvMTc4LyIgY2xhc3M9ImxhYmVsIj4jc3RyYXRlbjwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy8xOTUvIiBjbGFzcz0ibGFiZWwiPiNiZWVsZHRla3N0PC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMzEyKTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzEyLyIgZGF0YS1sYXlvdXQ9Imljb25fbGluayI+PC9kaXY+PC9kaXY+Cgo8L2FzaWRlPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgZnVuY3Rpb24gc2V0cGluKCkKICAgIHsKICAgICAgICB2YXIgbGxsID0gTC5sYXRMbmcoNTIuMzY3Mzc4NDU0MiwgNC44NjM4NTM0NTQ2KTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjUwMjoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJqYW51YXJpIDIwMTQiIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wLzEzOC5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzEyLyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
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
<meta property="og:title" content="januari 2014" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/138.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/312/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/138.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/138.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/138.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Martijn Barth & Jaap Hoogteijling</span>
                        
                            <br>januari 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">januari 2014<br></h2>

         Dit huis krijgt een nieuwe kaft. Of het hele boek wordt vervangen &hellip; niets houdt de vooruitgang tegen. Want met vooruitgang valt veel te verdienen. Vooral geld. En daar kan je je verlangen naar kunst mee bevredigen, in de directiekamer. Het oude kan weg via achter.<br><br>Mijn realiteit kijkt daartegenaan, met argusogen.<br><br>Argwanend ook ziet het verleden ons. Ik kom Vincent Hunink tegen: &ldquo;&hellip; een soort demonen: de menselijke ziel die de levensdienst vervuld heeft en afstand doet van het lichaam. In het oud-Latijnse taalgebruik &hellip; de term Lemuris. Tot deze Lemuren behoort ook degene die de zorg gekregen heeft voor zijn nabestaanden, en met bedaarde, vreedzame macht het huis beheerst &hellip; Wie vanwege verkeerd gedrag in het leven juist geen vaste plek heeft, maar rondzwerft en als het ware met ballingschap is gestraft, -- een onschuldig spookbeeld voor de goeden, maar voor de kwaden een gesel &hellip;&rdquo; Ze staren me aan, vanaf 1 hoog, de dichtgetimmerde deur, vanachter de vitrage. De toeschouwer probeert door de muur heen te kijken, de foto geeft niets terug.<br><br>Wat zegt de foto, de gevel. Wat ademt het huis uit?<br><br>Nederland kent zijn fa&ccedil;aden.  Belgen kunnen het beter, laat Van Fleteren zien. In Nederland is vergane glorie om af te breken, in Belgi&euml; een deel van de cultuur. We missen hier iets &ndash; gebrek aan herbeleving?<br><br>De Nederlandse jacht op hergebruik is net te groot, Je verwacht sporen &hellip; maar de zaak is al vervangen. Nauwelijks vergeten objecten. De Markthallen &hellip; een project dat de koopmansgeest  achter de beleving van het volk plaatst. Dat is mooi, het kan ook hand in hand &hellip;<br><br>Genoeg  oud materiaal in deze buurt, doorleefde muren<br><br>Sporen van vergane glorie<br><br>Ik denk aan de omgeving, wanneer M de foto neemt. Nu ik &lsquo;m terugzie, besef ik dat hij waarschijnlijk het verschil in beleven, in leven zag, recht voor hem.<br><br>Rechts, voor de kijker &ndash; voor de bewoner links  - ze zwaaien!<br><br> 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="312">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-19 01:32:41">

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


<div class="paper"><a href="/media/tag/138/" class="label">#Oud West in BeeldTekst</a> <a href="/media/tag/178/" class="label">#straten</a> <a href="/media/tag/195/" class="label">#beeldtekst</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,312);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/312/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3673784542, 4.8638534546);
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