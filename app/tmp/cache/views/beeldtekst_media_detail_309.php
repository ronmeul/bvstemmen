<!--cachetime:1427434906--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjMwOSI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzMwOS8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzA5LyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjYyMyI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMDkiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTc4IjtzOjc6InRhZ25hbWUiO3M6Nzoic3RyYXRlbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzA5IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0yNSAwMDoxMDoyNiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoiQnV1cnR2b2xzdGVtbWVuRm90bzQuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czowOiIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDE6MjAgMTI6NDM6MDEiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2MjI6IiBIJmVhY3V0ZTssIGRpZSBtYW4ga2VuIGlrIT8NClomcnNxdW87biBsb29wLCB6JnJzcXVvO24gaG91ZGluZywgaXMgZGF0IG5pZXQgVGVuIERhbT8NCiBIaWoga2VudCBUZW4gRGFtIHZhbiB6aWpuIGVpZ2VuIHdvbmluZy4gIERlIGN2LW1hbiwgaGlqIGNvbnRyb2xlZXJ0IGJpam5hIGFsbGUgaHVpemVuIGluIHppam4gYnV1cnQuIEVlbiBzdHVramUgT3VkLVp1aWQuIE1hYXIgVGVuIERhbSBoZWVmdCBuYXR1dXJsaWprIG1lZXIga2xhbnRlbi4gRW4gem8gaG9lZiBpayBuaWV0IHZyZWVtZCBvcCB0ZSBraWprZW4gZGF0IGhpaiBoaWVyIGFhbmJlbHQuDQogTSBmb3RvZ3JhZmVlcnQgZWVuIGJyYWFrIGxpZ2dlbmQgdGVycmVpbnRqZS4gSWsgdmluZCBoZXQgZXIgdHJpZXN0IHVpdHppZW4uIEZvdG9nZW5pZWsgemVrZXIsIGRlIGFmdGFrZWxpbmcgdmFuIGRlIGJ1dXJ0LiBIdXp1biwgUGFtdWtzIHNwbGVlbiwgZGUgbWVsYW5jaG9saWUgZGllIGplIGJpaiBhZnRha2VsaW5nIHRlZ2Vua29tdCwgIHpvIHZvZWxkZSBQYW11ayBoZXQgdmVydmFsIHZhbiBJc3RhbmJ1bCAmbmRhc2g7IG5hYXN0IGRpZSBvbnRwbG9mZmluZyB2YW4gaGV0IG1vZGVybmUuIA0KIElrIGRlbmssIGhpZXIgbGlndCBPdWQtV2VzdCwgb3ZlciBoZXQgaGVrIGdlZ29vaWQsIHJvbW1lbCwgZGUgZHVubmUgd2FuZGplcyB2YW4gZWVuIHpvbGRlcmJlcmdpbmcsIHZvbGxlIHZ1aWxuaXN6YWtrZW4uIFp3ZXJmYWZ2YWwgdHVzc2VuIGRlIHJpZXRzdGVuZ2Vscy4gTmllbWFuZCBrYW4gZXIgYmlqLCBoZXQgaGVrIGxhYXQgZGF0IG5pZXQgdG9lLiBKZSBtYWcgbmlldCB6b21hYXIgaWV0cyBkb2VuLCBkYWFyIGluIGRpZSB3b25kIHZhbiBkYXQgYWxzIGVlbiByb3R0ZSBraWVzIGdldHJva2tlbiBodWlzLiBIZXQgZXR0ZXJ0IG5vZyB3YXQgbmEgaW4gZGUgd2lqay4NCiBFciBtb2V0IGFsIGV2ZW4gbmlldHMgZ2ViZXVyZCB6aWpuIG1ldCBkZXplIGdyb25kLiBEZSBuYXR1dXIgcHJvYmVlcnQgZ29lZCB0ZSBtYWtlbiwgd2F0IGRlIG1lbnMgb25nZW1lcmt0IGFjaHRlcmxhYXQuIDIwIGphbnVhcmkgMjAxNC4gRGUgem9tZXIgdmFuIDIwMTMgYWxzIGxpY2h0IGJldnJvcmVuIHdpbnRlcmJvZWtldD8NCiBJayB2ZXJ0ZWwgVGVuIERhbSBkYXQgd2Ugcm9uZGxvcGVuIGVuIE0gZGUgYnV1cnQgcHJvYmVlcnQgdmFzdCB0ZSBsZWdnZW4uIFRlbiBEYW0gcGFrdCBoZXQgZGVzb2xhdGUgc3R1a2plIGdyb25kIGVuZXJnaWVrIG9wLiAmcnNxdW87IERhdCBiZWxvb2Z0IGlldHMgbW9vaXMgdGUgd29yZGVuLiZyc3F1bzsgJmxzcXVvO0RhYXIga2FuIGlldHMgdmFuIGdlbWFha3QuICZsc3F1bzsgVGVuIERhbSBpcyBlZW4gb3B0aW1pc3QsIGh1enVuIHplZ3QgaGVtIG5pZXRzLiBIaWogaGVlZnQgZ2VsaWprLiBIaWogZGVua3QgaW4gbW9nZWxpamtoZWRlbiBlbiBlZW4gZ29lZGUgYWZsb29wLg0KTWlqbiBmaW4gZHUgc2kmZWdyYXZlO2NsZSBzbGlrIGlrIGJpaiBoZW0gZ3JhYWcgaW4sIGhpZXIgdmFsdCBpZXRzIHRlIGxlcmVuLiBPbmRlcm5lbWVycywgaGV0IGlzIGdvZWQgZGF0IHplIGVyIHppam4uIEVyIGtvbXQgaWV0cyBuaWV1d3MgZGF0IHZhbiBtaWogZGFuIHdlZXIgb3VkIG1hZyB3b3JkZW4uIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToxO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNDY2IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMwOSI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxMzgiO3M6NzoidGFnbmFtZSI7czoyMjoiT3VkIFdlc3QgaW4gQmVlbGRUZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzA5IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0yNSAwMDoxMDoyNiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoiQnV1cnR2b2xzdGVtbWVuRm90bzQuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czowOiIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDE6MjAgMTI6NDM6MDEiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2MjI6IiBIJmVhY3V0ZTssIGRpZSBtYW4ga2VuIGlrIT8NClomcnNxdW87biBsb29wLCB6JnJzcXVvO24gaG91ZGluZywgaXMgZGF0IG5pZXQgVGVuIERhbT8NCiBIaWoga2VudCBUZW4gRGFtIHZhbiB6aWpuIGVpZ2VuIHdvbmluZy4gIERlIGN2LW1hbiwgaGlqIGNvbnRyb2xlZXJ0IGJpam5hIGFsbGUgaHVpemVuIGluIHppam4gYnV1cnQuIEVlbiBzdHVramUgT3VkLVp1aWQuIE1hYXIgVGVuIERhbSBoZWVmdCBuYXR1dXJsaWprIG1lZXIga2xhbnRlbi4gRW4gem8gaG9lZiBpayBuaWV0IHZyZWVtZCBvcCB0ZSBraWprZW4gZGF0IGhpaiBoaWVyIGFhbmJlbHQuDQogTSBmb3RvZ3JhZmVlcnQgZWVuIGJyYWFrIGxpZ2dlbmQgdGVycmVpbnRqZS4gSWsgdmluZCBoZXQgZXIgdHJpZXN0IHVpdHppZW4uIEZvdG9nZW5pZWsgemVrZXIsIGRlIGFmdGFrZWxpbmcgdmFuIGRlIGJ1dXJ0LiBIdXp1biwgUGFtdWtzIHNwbGVlbiwgZGUgbWVsYW5jaG9saWUgZGllIGplIGJpaiBhZnRha2VsaW5nIHRlZ2Vua29tdCwgIHpvIHZvZWxkZSBQYW11ayBoZXQgdmVydmFsIHZhbiBJc3RhbmJ1bCAmbmRhc2g7IG5hYXN0IGRpZSBvbnRwbG9mZmluZyB2YW4gaGV0IG1vZGVybmUuIA0KIElrIGRlbmssIGhpZXIgbGlndCBPdWQtV2VzdCwgb3ZlciBoZXQgaGVrIGdlZ29vaWQsIHJvbW1lbCwgZGUgZHVubmUgd2FuZGplcyB2YW4gZWVuIHpvbGRlcmJlcmdpbmcsIHZvbGxlIHZ1aWxuaXN6YWtrZW4uIFp3ZXJmYWZ2YWwgdHVzc2VuIGRlIHJpZXRzdGVuZ2Vscy4gTmllbWFuZCBrYW4gZXIgYmlqLCBoZXQgaGVrIGxhYXQgZGF0IG5pZXQgdG9lLiBKZSBtYWcgbmlldCB6b21hYXIgaWV0cyBkb2VuLCBkYWFyIGluIGRpZSB3b25kIHZhbiBkYXQgYWxzIGVlbiByb3R0ZSBraWVzIGdldHJva2tlbiBodWlzLiBIZXQgZXR0ZXJ0IG5vZyB3YXQgbmEgaW4gZGUgd2lqay4NCiBFciBtb2V0IGFsIGV2ZW4gbmlldHMgZ2ViZXVyZCB6aWpuIG1ldCBkZXplIGdyb25kLiBEZSBuYXR1dXIgcHJvYmVlcnQgZ29lZCB0ZSBtYWtlbiwgd2F0IGRlIG1lbnMgb25nZW1lcmt0IGFjaHRlcmxhYXQuIDIwIGphbnVhcmkgMjAxNC4gRGUgem9tZXIgdmFuIDIwMTMgYWxzIGxpY2h0IGJldnJvcmVuIHdpbnRlcmJvZWtldD8NCiBJayB2ZXJ0ZWwgVGVuIERhbSBkYXQgd2Ugcm9uZGxvcGVuIGVuIE0gZGUgYnV1cnQgcHJvYmVlcnQgdmFzdCB0ZSBsZWdnZW4uIFRlbiBEYW0gcGFrdCBoZXQgZGVzb2xhdGUgc3R1a2plIGdyb25kIGVuZXJnaWVrIG9wLiAmcnNxdW87IERhdCBiZWxvb2Z0IGlldHMgbW9vaXMgdGUgd29yZGVuLiZyc3F1bzsgJmxzcXVvO0RhYXIga2FuIGlldHMgdmFuIGdlbWFha3QuICZsc3F1bzsgVGVuIERhbSBpcyBlZW4gb3B0aW1pc3QsIGh1enVuIHplZ3QgaGVtIG5pZXRzLiBIaWogaGVlZnQgZ2VsaWprLiBIaWogZGVua3QgaW4gbW9nZWxpamtoZWRlbiBlbiBlZW4gZ29lZGUgYWZsb29wLg0KTWlqbiBmaW4gZHUgc2kmZWdyYXZlO2NsZSBzbGlrIGlrIGJpaiBoZW0gZ3JhYWcgaW4sIGhpZXIgdmFsdCBpZXRzIHRlIGxlcmVuLiBPbmRlcm5lbWVycywgaGV0IGlzIGdvZWQgZGF0IHplIGVyIHppam4uIEVyIGtvbXQgaWV0cyBuaWV1d3MgZGF0IHZhbiBtaWogZGFuIHdlZXIgb3VkIG1hZyB3b3JkZW4uIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToyO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNzU5IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMwOSI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxOTUiO3M6NzoidGFnbmFtZSI7czoxMDoiYmVlbGR0ZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzA5IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0yNSAwMDoxMDoyNiI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoiQnV1cnR2b2xzdGVtbWVuRm90bzQuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czowOiIiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDE6MjAgMTI6NDM6MDEiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2MjI6IiBIJmVhY3V0ZTssIGRpZSBtYW4ga2VuIGlrIT8NClomcnNxdW87biBsb29wLCB6JnJzcXVvO24gaG91ZGluZywgaXMgZGF0IG5pZXQgVGVuIERhbT8NCiBIaWoga2VudCBUZW4gRGFtIHZhbiB6aWpuIGVpZ2VuIHdvbmluZy4gIERlIGN2LW1hbiwgaGlqIGNvbnRyb2xlZXJ0IGJpam5hIGFsbGUgaHVpemVuIGluIHppam4gYnV1cnQuIEVlbiBzdHVramUgT3VkLVp1aWQuIE1hYXIgVGVuIERhbSBoZWVmdCBuYXR1dXJsaWprIG1lZXIga2xhbnRlbi4gRW4gem8gaG9lZiBpayBuaWV0IHZyZWVtZCBvcCB0ZSBraWprZW4gZGF0IGhpaiBoaWVyIGFhbmJlbHQuDQogTSBmb3RvZ3JhZmVlcnQgZWVuIGJyYWFrIGxpZ2dlbmQgdGVycmVpbnRqZS4gSWsgdmluZCBoZXQgZXIgdHJpZXN0IHVpdHppZW4uIEZvdG9nZW5pZWsgemVrZXIsIGRlIGFmdGFrZWxpbmcgdmFuIGRlIGJ1dXJ0LiBIdXp1biwgUGFtdWtzIHNwbGVlbiwgZGUgbWVsYW5jaG9saWUgZGllIGplIGJpaiBhZnRha2VsaW5nIHRlZ2Vua29tdCwgIHpvIHZvZWxkZSBQYW11ayBoZXQgdmVydmFsIHZhbiBJc3RhbmJ1bCAmbmRhc2g7IG5hYXN0IGRpZSBvbnRwbG9mZmluZyB2YW4gaGV0IG1vZGVybmUuIA0KIElrIGRlbmssIGhpZXIgbGlndCBPdWQtV2VzdCwgb3ZlciBoZXQgaGVrIGdlZ29vaWQsIHJvbW1lbCwgZGUgZHVubmUgd2FuZGplcyB2YW4gZWVuIHpvbGRlcmJlcmdpbmcsIHZvbGxlIHZ1aWxuaXN6YWtrZW4uIFp3ZXJmYWZ2YWwgdHVzc2VuIGRlIHJpZXRzdGVuZ2Vscy4gTmllbWFuZCBrYW4gZXIgYmlqLCBoZXQgaGVrIGxhYXQgZGF0IG5pZXQgdG9lLiBKZSBtYWcgbmlldCB6b21hYXIgaWV0cyBkb2VuLCBkYWFyIGluIGRpZSB3b25kIHZhbiBkYXQgYWxzIGVlbiByb3R0ZSBraWVzIGdldHJva2tlbiBodWlzLiBIZXQgZXR0ZXJ0IG5vZyB3YXQgbmEgaW4gZGUgd2lqay4NCiBFciBtb2V0IGFsIGV2ZW4gbmlldHMgZ2ViZXVyZCB6aWpuIG1ldCBkZXplIGdyb25kLiBEZSBuYXR1dXIgcHJvYmVlcnQgZ29lZCB0ZSBtYWtlbiwgd2F0IGRlIG1lbnMgb25nZW1lcmt0IGFjaHRlcmxhYXQuIDIwIGphbnVhcmkgMjAxNC4gRGUgem9tZXIgdmFuIDIwMTMgYWxzIGxpY2h0IGJldnJvcmVuIHdpbnRlcmJvZWtldD8NCiBJayB2ZXJ0ZWwgVGVuIERhbSBkYXQgd2Ugcm9uZGxvcGVuIGVuIE0gZGUgYnV1cnQgcHJvYmVlcnQgdmFzdCB0ZSBsZWdnZW4uIFRlbiBEYW0gcGFrdCBoZXQgZGVzb2xhdGUgc3R1a2plIGdyb25kIGVuZXJnaWVrIG9wLiAmcnNxdW87IERhdCBiZWxvb2Z0IGlldHMgbW9vaXMgdGUgd29yZGVuLiZyc3F1bzsgJmxzcXVvO0RhYXIga2FuIGlldHMgdmFuIGdlbWFha3QuICZsc3F1bzsgVGVuIERhbSBpcyBlZW4gb3B0aW1pc3QsIGh1enVuIHplZ3QgaGVtIG5pZXRzLiBIaWogaGVlZnQgZ2VsaWprLiBIaWogZGVua3QgaW4gbW9nZWxpamtoZWRlbiBlbiBlZW4gZ29lZGUgYWZsb29wLg0KTWlqbiBmaW4gZHUgc2kmZWdyYXZlO2NsZSBzbGlrIGlrIGJpaiBoZW0gZ3JhYWcgaW4sIGhpZXIgdmFsdCBpZXRzIHRlIGxlcmVuLiBPbmRlcm5lbWVycywgaGV0IGlzIGdvZWQgZGF0IHplIGVyIHppam4uIEVyIGtvbXQgaWV0cyBuaWV1d3MgZGF0IHZhbiBtaWogZGFuIHdlZXIgb3VkIG1hZyB3b3JkZW4uIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMwOSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MTA6MjYiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IkJ1dXJ0dm9sc3RlbW1lbkZvdG80LmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MDoiIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAxOjIwIDEyOjQzOjAxIjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjIyOiIgSCZlYWN1dGU7LCBkaWUgbWFuIGtlbiBpayE/DQpaJnJzcXVvO24gbG9vcCwgeiZyc3F1bztuIGhvdWRpbmcsIGlzIGRhdCBuaWV0IFRlbiBEYW0/DQogSGlqIGtlbnQgVGVuIERhbSB2YW4gemlqbiBlaWdlbiB3b25pbmcuICBEZSBjdi1tYW4sIGhpaiBjb250cm9sZWVydCBiaWpuYSBhbGxlIGh1aXplbiBpbiB6aWpuIGJ1dXJ0LiBFZW4gc3R1a2plIE91ZC1adWlkLiBNYWFyIFRlbiBEYW0gaGVlZnQgbmF0dXVybGlqayBtZWVyIGtsYW50ZW4uIEVuIHpvIGhvZWYgaWsgbmlldCB2cmVlbWQgb3AgdGUga2lqa2VuIGRhdCBoaWogaGllciBhYW5iZWx0Lg0KIE0gZm90b2dyYWZlZXJ0IGVlbiBicmFhayBsaWdnZW5kIHRlcnJlaW50amUuIElrIHZpbmQgaGV0IGVyIHRyaWVzdCB1aXR6aWVuLiBGb3RvZ2VuaWVrIHpla2VyLCBkZSBhZnRha2VsaW5nIHZhbiBkZSBidXVydC4gSHV6dW4sIFBhbXVrcyBzcGxlZW4sIGRlIG1lbGFuY2hvbGllIGRpZSBqZSBiaWogYWZ0YWtlbGluZyB0ZWdlbmtvbXQsICB6byB2b2VsZGUgUGFtdWsgaGV0IHZlcnZhbCB2YW4gSXN0YW5idWwgJm5kYXNoOyBuYWFzdCBkaWUgb250cGxvZmZpbmcgdmFuIGhldCBtb2Rlcm5lLiANCiBJayBkZW5rLCBoaWVyIGxpZ3QgT3VkLVdlc3QsIG92ZXIgaGV0IGhlayBnZWdvb2lkLCByb21tZWwsIGRlIGR1bm5lIHdhbmRqZXMgdmFuIGVlbiB6b2xkZXJiZXJnaW5nLCB2b2xsZSB2dWlsbmlzemFra2VuLiBad2VyZmFmdmFsIHR1c3NlbiBkZSByaWV0c3RlbmdlbHMuIE5pZW1hbmQga2FuIGVyIGJpaiwgaGV0IGhlayBsYWF0IGRhdCBuaWV0IHRvZS4gSmUgbWFnIG5pZXQgem9tYWFyIGlldHMgZG9lbiwgZGFhciBpbiBkaWUgd29uZCB2YW4gZGF0IGFscyBlZW4gcm90dGUga2llcyBnZXRyb2trZW4gaHVpcy4gSGV0IGV0dGVydCBub2cgd2F0IG5hIGluIGRlIHdpamsuDQogRXIgbW9ldCBhbCBldmVuIG5pZXRzIGdlYmV1cmQgemlqbiBtZXQgZGV6ZSBncm9uZC4gRGUgbmF0dXVyIHByb2JlZXJ0IGdvZWQgdGUgbWFrZW4sIHdhdCBkZSBtZW5zIG9uZ2VtZXJrdCBhY2h0ZXJsYWF0LiAyMCBqYW51YXJpIDIwMTQuIERlIHpvbWVyIHZhbiAyMDEzIGFscyBsaWNodCBiZXZyb3JlbiB3aW50ZXJib2VrZXQ/DQogSWsgdmVydGVsIFRlbiBEYW0gZGF0IHdlIHJvbmRsb3BlbiBlbiBNIGRlIGJ1dXJ0IHByb2JlZXJ0IHZhc3QgdGUgbGVnZ2VuLiBUZW4gRGFtIHBha3QgaGV0IGRlc29sYXRlIHN0dWtqZSBncm9uZCBlbmVyZ2llayBvcC4gJnJzcXVvOyBEYXQgYmVsb29mdCBpZXRzIG1vb2lzIHRlIHdvcmRlbi4mcnNxdW87ICZsc3F1bztEYWFyIGthbiBpZXRzIHZhbiBnZW1hYWt0LiAmbHNxdW87IFRlbiBEYW0gaXMgZWVuIG9wdGltaXN0LCBodXp1biB6ZWd0IGhlbSBuaWV0cy4gSGlqIGhlZWZ0IGdlbGlqay4gSGlqIGRlbmt0IGluIG1vZ2VsaWpraGVkZW4gZW4gZWVuIGdvZWRlIGFmbG9vcC4NCk1pam4gZmluIGR1IHNpJmVncmF2ZTtjbGUgc2xpayBpayBiaWogaGVtIGdyYWFnIGluLCBoaWVyIHZhbHQgaWV0cyB0ZSBsZXJlbi4gT25kZXJuZW1lcnMsIGhldCBpcyBnb2VkIGRhdCB6ZSBlciB6aWpuLiBFciBrb210IGlldHMgbmlldXdzIGRhdCB2YW4gbWlqIGRhbiB3ZWVyIG91ZCBtYWcgd29yZGVuLiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiODciO3M6ODoidXNlcm5hbWUiO3M6MjY6ImphYXBob29ndGVpamxpbmdAeHM0YWxsLm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6NDoibmFhbSI7czozMzoiTWFydGlqbiBCYXJ0aCAmIEphYXAgSG9vZ3RlaWpsaW5nIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjA1IjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMwOSI7czoxMjoicmVsYXRpZXNvb3J0IjtzOjU6Im1ha2VyIjtzOjc6InVzZXJfaWQiO3M6MjoiODgiO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIzMDkiO3M6OToib2JqZWN0X2lkIjtzOjM6IjE2MCI7czoyOiJpZCI7czozOiIzMDciO319czo0OiJUYWdzIjthOjM6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiNjIzIjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxNzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMwOSI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiNDY2IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMwOSI7fWk6MjthOjQ6e3M6MjoiaWQiO3M6MzoiNzU5IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMwOSI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czozOiIxOTAiO3M6MzoibGF0IjtzOjEzOiI1Mi4zNjQyODYyODA1IjtzOjM6ImxvbiI7czoxMjoiNC44NjI3ODA1NzEwIjt9czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO2E6MTp7aTowO2E6Mzp7czoxMToibG9jYXRpb25faWQiO3M6MzoiMTkwIjtzOjk6Im9iamVjdF9pZCI7czozOiIxNjAiO3M6MjoiaWQiO3M6MzoiMTYwIjt9fXM6MzoiQWRyIjthOjA6e319czo1OiJhZHJlcyI7YTowOnt9czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiI4OCI7czo4OiJ1c2VybmFtZSI7TjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MTA6MjYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MTA6MjYiO3M6NDoibmFhbSI7czoxMzoiTWFydGlqbiBCYXJ0aCI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjMyOiJEaXQgZGVlbCB2YW4gZGUgc3RhZCB2YXN0cGFra2VuLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjIyOiJPdWQtV2VzdCBpbiBCZWVsZFRla3N0IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NjMwMzoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgT3VkLVdlc3QgaW4gQmVlbGRUZWtzdDwvYT48L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgY2xhc3M9Iml0ZW1pbWcgY2xpY2thYmxlIiBpZD0idGhlaW1nIiBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93MjEzLzAvMTM1LmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC8xMzUuanBnJyk7Ij4KICAgICAgICAgICAgICAgICAgICAgICAgPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIG9ubG9hZGZpeGltZygpCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG15ZWwgPSAkKCJiMyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBpbWdlbCA9ICQoInRoZWltZyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBtaCA9IG15ZWwuY2xpZW50SGVpZ2h0OwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB0aCA9IG1oIC0gMjgwOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLmhlaWdodCA9IHRoOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLnNyYyA9ICIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvaCIgKyB0aCArICIvMC8xMzUuanBnIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkZExvYWRFdmVudChmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbmxvYWRmaXhpbWcoKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgICAgICAgICA8L3NjcmlwdD4KCiAgICAKCiAgICAgICAgICAgICAgICA8ZmlnY2FwdGlvbj4KICAgICAgICAgICAgICAgICAgICA8c21hbGw+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwZXJzb24iPk1hcnRpam4gQmFydGg8L3NwYW4+CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPmphbnVhcmkgMjAxNAogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPmphbnVhcmkgMjAxNDxicj48L2gyPgoKICAgICAgICAgIEgmZWFjdXRlOywgZGllIG1hbiBrZW4gaWshPzxicj48YnI+WiZyc3F1bztuIGxvb3AsIHomcnNxdW87biBob3VkaW5nLCBpcyBkYXQgbmlldCBUZW4gRGFtPzxicj48YnI+IEhpaiBrZW50IFRlbiBEYW0gdmFuIHppam4gZWlnZW4gd29uaW5nLiAgRGUgY3YtbWFuLCBoaWogY29udHJvbGVlcnQgYmlqbmEgYWxsZSBodWl6ZW4gaW4gemlqbiBidXVydC4gRWVuIHN0dWtqZSBPdWQtWnVpZC4gTWFhciBUZW4gRGFtIGhlZWZ0IG5hdHV1cmxpamsgbWVlciBrbGFudGVuLiBFbiB6byBob2VmIGlrIG5pZXQgdnJlZW1kIG9wIHRlIGtpamtlbiBkYXQgaGlqIGhpZXIgYWFuYmVsdC48YnI+PGJyPiBNIGZvdG9ncmFmZWVydCBlZW4gYnJhYWsgbGlnZ2VuZCB0ZXJyZWludGplLiBJayB2aW5kIGhldCBlciB0cmllc3QgdWl0emllbi4gRm90b2dlbmllayB6ZWtlciwgZGUgYWZ0YWtlbGluZyB2YW4gZGUgYnV1cnQuIEh1enVuLCBQYW11a3Mgc3BsZWVuLCBkZSBtZWxhbmNob2xpZSBkaWUgamUgYmlqIGFmdGFrZWxpbmcgdGVnZW5rb210LCAgem8gdm9lbGRlIFBhbXVrIGhldCB2ZXJ2YWwgdmFuIElzdGFuYnVsICZuZGFzaDsgbmFhc3QgZGllIG9udHBsb2ZmaW5nIHZhbiBoZXQgbW9kZXJuZS4gPGJyPjxicj4gSWsgZGVuaywgaGllciBsaWd0IE91ZC1XZXN0LCBvdmVyIGhldCBoZWsgZ2Vnb29pZCwgcm9tbWVsLCBkZSBkdW5uZSB3YW5kamVzIHZhbiBlZW4gem9sZGVyYmVyZ2luZywgdm9sbGUgdnVpbG5pc3pha2tlbi4gWndlcmZhZnZhbCB0dXNzZW4gZGUgcmlldHN0ZW5nZWxzLiBOaWVtYW5kIGthbiBlciBiaWosIGhldCBoZWsgbGFhdCBkYXQgbmlldCB0b2UuIEplIG1hZyBuaWV0IHpvbWFhciBpZXRzIGRvZW4sIGRhYXIgaW4gZGllIHdvbmQgdmFuIGRhdCBhbHMgZWVuIHJvdHRlIGtpZXMgZ2V0cm9ra2VuIGh1aXMuIEhldCBldHRlcnQgbm9nIHdhdCBuYSBpbiBkZSB3aWprLjxicj48YnI+IEVyIG1vZXQgYWwgZXZlbiBuaWV0cyBnZWJldXJkIHppam4gbWV0IGRlemUgZ3JvbmQuIERlIG5hdHV1ciBwcm9iZWVydCBnb2VkIHRlIG1ha2VuLCB3YXQgZGUgbWVucyBvbmdlbWVya3QgYWNodGVybGFhdC4gMjAgamFudWFyaSAyMDE0LiBEZSB6b21lciB2YW4gMjAxMyBhbHMgbGljaHQgYmV2cm9yZW4gd2ludGVyYm9la2V0Pzxicj48YnI+IElrIHZlcnRlbCBUZW4gRGFtIGRhdCB3ZSByb25kbG9wZW4gZW4gTSBkZSBidXVydCBwcm9iZWVydCB2YXN0IHRlIGxlZ2dlbi4gVGVuIERhbSBwYWt0IGhldCBkZXNvbGF0ZSBzdHVramUgZ3JvbmQgZW5lcmdpZWsgb3AuICZyc3F1bzsgRGF0IGJlbG9vZnQgaWV0cyBtb29pcyB0ZSB3b3JkZW4uJnJzcXVvOyAmbHNxdW87RGFhciBrYW4gaWV0cyB2YW4gZ2VtYWFrdC4gJmxzcXVvOyBUZW4gRGFtIGlzIGVlbiBvcHRpbWlzdCwgaHV6dW4gemVndCBoZW0gbmlldHMuIEhpaiBoZWVmdCBnZWxpamsuIEhpaiBkZW5rdCBpbiBtb2dlbGlqa2hlZGVuIGVuIGVlbiBnb2VkZSBhZmxvb3AuPGJyPjxicj5NaWpuIGZpbiBkdSBzaSZlZ3JhdmU7Y2xlIHNsaWsgaWsgYmlqIGhlbSBncmFhZyBpbiwgaGllciB2YWx0IGlldHMgdGUgbGVyZW4uIE9uZGVybmVtZXJzLCBoZXQgaXMgZ29lZCBkYXQgemUgZXIgemlqbi4gRXIga29tdCBpZXRzIG5pZXV3cyBkYXQgdmFuIG1paiBkYW4gd2VlciBvdWQgbWFnIHdvcmRlbi4gCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAo8ZGl2IGNsYXNzPSJyZWFjdGllIj48ZGl2IGNsYXNzPSJ0ZXh0d3JhcHBlciI+CjxpbWcgc3JjPSIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL2ljb25fdXNlci0yOHgyNC5wbmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIyMiIgY2xhc3M9InJlYWN0aW1nIiBhbHQ9IiI+CjxzcGFuIGNsYXNzPSJwZXJzb24iPmhlbms8L3NwYW4+LCZuYnNwOzI2IGZlYnJ1YXJpIDIwMTU6Jm5ic3A7Qm9laG9lLA0KTnUga29tdCBlciBlZW4gIkxvbmdzdGF5IGtpcHBlbmhvayBIb3RlbCIgdm9vciAidnJpamUgdWl0bG9vcCBrZW5uaXMtaW1taWdyYW50ZW4iPC9kaXY+PC9kaXY+ICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMzA5Ij4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMjcgMDU6NDE6NDYiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKPGRpdiBjbGFzcz0icGFwZXIiPjxhIGhyZWY9Ii9tZWRpYS90YWcvMTc4LyIgY2xhc3M9ImxhYmVsIj4jc3RyYXRlbjwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy8xMzgvIiBjbGFzcz0ibGFiZWwiPiNPdWQgV2VzdCBpbiBCZWVsZFRla3N0PC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMzA5KTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8zMDkvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNjQyODYyODA1LCA0Ljg2Mjc4MDU3MTApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NTA3OiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9ImphbnVhcmkgMjAxNCIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93NjAwLzAvMTM1LmpwZyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6dXJsIiBjb250ZW50PSJodHRwOi8vYmVlbGR0ZWtzdC5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzMwOS8iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJidnN0ZW1tZW4iIC8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLy9idnN0ZW1tZW4ubmwvY3NzL21hcC5jc3MiIC8+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5qcyI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9idnN0ZW1tZW4ubmwvanMvbGVhZmxldC5tYXJrZXJjbHVzdGVyLmpzIj48L3NjcmlwdD4iO30='));
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
<meta property="og:title" content="januari 2014" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/135.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/309/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/135.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/135.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/135.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Martijn Barth</span>
                        
                            <br>januari 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">januari 2014<br></h2>

          H&eacute;, die man ken ik!?<br><br>Z&rsquo;n loop, z&rsquo;n houding, is dat niet Ten Dam?<br><br> Hij kent Ten Dam van zijn eigen woning.  De cv-man, hij controleert bijna alle huizen in zijn buurt. Een stukje Oud-Zuid. Maar Ten Dam heeft natuurlijk meer klanten. En zo hoef ik niet vreemd op te kijken dat hij hier aanbelt.<br><br> M fotografeert een braak liggend terreintje. Ik vind het er triest uitzien. Fotogeniek zeker, de aftakeling van de buurt. Huzun, Pamuks spleen, de melancholie die je bij aftakeling tegenkomt,  zo voelde Pamuk het verval van Istanbul &ndash; naast die ontploffing van het moderne. <br><br> Ik denk, hier ligt Oud-West, over het hek gegooid, rommel, de dunne wandjes van een zolderberging, volle vuilniszakken. Zwerfafval tussen de rietstengels. Niemand kan er bij, het hek laat dat niet toe. Je mag niet zomaar iets doen, daar in die wond van dat als een rotte kies getrokken huis. Het ettert nog wat na in de wijk.<br><br> Er moet al even niets gebeurd zijn met deze grond. De natuur probeert goed te maken, wat de mens ongemerkt achterlaat. 20 januari 2014. De zomer van 2013 als licht bevroren winterboeket?<br><br> Ik vertel Ten Dam dat we rondlopen en M de buurt probeert vast te leggen. Ten Dam pakt het desolate stukje grond energiek op. &rsquo; Dat belooft iets moois te worden.&rsquo; &lsquo;Daar kan iets van gemaakt. &lsquo; Ten Dam is een optimist, huzun zegt hem niets. Hij heeft gelijk. Hij denkt in mogelijkheden en een goede afloop.<br><br>Mijn fin du si&egrave;cle slik ik bij hem graag in, hier valt iets te leren. Ondernemers, het is goed dat ze er zijn. Er komt iets nieuws dat van mij dan weer oud mag worden. 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
<div class="reactie"><div class="textwrapper">
<img src="//bvstemmen.nl/img/ics/icon_user-28x24.png" width="22" height="22" class="reactimg" alt="">
<span class="person">henk</span>,&nbsp;26 februari 2015:&nbsp;Boehoe,
Nu komt er een "Longstay kippenhok Hotel" voor "vrije uitloop kennis-immigranten"</div></div>    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="309">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-27 05:41:46">

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


<div class="paper"><a href="/media/tag/178/" class="label">#straten</a> <a href="/media/tag/138/" class="label">#Oud West in BeeldTekst</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,309);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/309/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3642862805, 4.8627805710);
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