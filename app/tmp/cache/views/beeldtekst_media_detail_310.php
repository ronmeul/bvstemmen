<!--cachetime:1427316767--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjMxMCI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzMxMC8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzEwLyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjYyNCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzMTAiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTc4IjtzOjc6InRhZ25hbWUiO3M6Nzoic3RyYXRlbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzEwIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0yNyAxMzo0NjoyMCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoiQnV1cnR2b2xzdGVtbWVuRm90bzEuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo5OiIgRmlldHNlcnMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDE6MjAgMTI6MTg6MDQiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2NTI6IiBEZXplIG1hYW5kYWdvY2h0ZW5kIGluIGphbnVhcmkgemllIGplIHplIG5hdXdlbGlqa3MuIDExLjIzIA0KIElrIHdlZXQgbm9nIGhvZSBLYW1pa2F6ZUphYXAgemljaCBkb29yIGRlIGphcmVuIDE5ODAgcmFjZXRlLiBIaWogaGVlZnQgZGUga3J1aXNwdW50ZW4gb3ZlcmxlZWZkLCB6ZWxmcyBuaWV0IGdld29uZCBnZXJhYWt0IHRyb3V3ZW5zLg0KIFZhbHQgaGV0IHUgb29rIG9wIGhvZXZlZWwgZmlldHNlbiBvdmVyYWwgc3RhYW4uIEVuIHplIHN0YWFuIGVyIGFscyB3ZWdnZWdvb2lkZSBwbGFzdGljIGZsZXNqZXMuDQogRmlldHNlbiBpcyBnb2VkIHZvb3IgaGV0IG1pbGlldSwgbWFhciBpbiBBbXN0ZXJkYW0gJmhlbGxpcDsgZW4gbWlsaWV1IGlzIG1lZXIgZGFuIHNjaG9uZSBsdWNodCBlbiBpanNiZXJlbiBvcCBzY2hvdHNlbi4gDQpEZSBnZWRhY2h0ZSBhY2h0ZXIgZGF0IG1pbGlldSwgZWV1d2lnZSBoYXJtb25pZSB2b29yIGRlIG1lbnNlbndlcmVsZD8gRGllIGlzIGVyIG5pZXQgaW4gaGV0IGZpZXRzdmVya2VlciwgZGFhciBnZWxkdCBoZXQgcmVjaHQgdmFuIGRlIHN0ZXJrc3RlLCBkZSBhc29jaWFhbHN0ZSwgZW4gZGFuIHppam4gd2UgYWwgc25lbCB3ZWVyIHRlcnVnIGJpaiBoZXQgbWlsaWV1LCBkZSBuYXR1dXIgaGVlZnQgbmlldHMgdGUgbWFrZW4gbWV0IGV2ZW53aWNodCwgd2lqIG1lbnNlbiB3ZW5zZW4gZGF0IGhldCBub29pdCBtZWVyIGFuZGVycyB3b3JkdCBkYW4gbnUgJm5kYXNoOyBpbiBoZXQgV2VzdGVuIGRhbiB2b29yYWwgb29rIG5vZyAmbmRhc2g7IHdhbnQgZGFuIGxldmVuIHdlIG5vZyBsYW5nIGVuIGdlbHVra2lnIGluIGRlIGZyaXNzZSBsdWNodC4NCiBKYSwgamUgemlldCBoZXQgbmlldCBhYW4gZGUgZmlldHNlbiBhZiwgbW9yc2lnIGtvbXQgaGV0IG92ZXIgd2F0IGhpZXIgc3RhYXQsIHZlcmdldGVuLiBXZWdnZXdvcnBlbi4gQWZ2YWwuIEVlbiBnZWRhY2h0ZSBkaWUgd2Ugd2lsbGVuIGRvZW4gZ2Vsb3ZlbiwgbmlldCBiaWogZmlldHNlbiBwYXN0Lg0KIEZpZXRzZXJzLCBqZSBrYW4gZWlnZW5saWprIGFsbGVlbiBqZSBzY2hvdWRlcnMgZXJvdmVyIG9waGFsZW4sIGRhdCBiZXNlZiBpayBzdGVlZHMgbWVlciwgbnUgaWsgdmFrZXIgYXV0byBtb2V0IHJpamRlbi4gWmVrZXIgYmlqIGhldCB6aWVuIHZhbiBkZXplIHpvb2kgZGllIHplIG9wIHN0cmFhdCBhY2h0ZXJsYXRlbi4NCiBKZSBsYWF0IHplIGhlZWwgYWxzIHplIHJvbmRmaWV0c2VuLCB6b2FscyBoZXJ0amVzIGVuIHp3aWpudGplcywgbWFhciBtZWRlZG9nZW4/IEVuIGplIGxhYXQgemUgaGVlbCwgYWFuZ2V6aWVuIGplICZuZGFzaDsgaGVlbCB0ZWdlbm5hdHV1cmxpamsgdWl0IHJlc3BlY3QgJm5kYXNoOyBtZXQgamUgYXV0byBkZSBzdGVya3N0ZSBiZW50LiANCkhldCBpcyBvb2sgc3RyYWZiYWFyIG9tIHplIGthcG90IHRlIG1ha2VuLiBKYW1tZXIgZGF0IGZpZXRzZXJzIGRhdCBiZXNlZmZlbiwgZW4gbmlldCBkYXQgZXIgb3AgemUgZ2VqYWFnZCBrYW4gd29yZGVuLiANCkFscyBqZSBkZSBuYXR1dXIgb21kcmFhaXQsIGJsaWprdCBtYWFyIHdlZXIsIGRhbiBnYWF0IGRlIHp3YWtrZXJlIHppY2ggbmV0IHpvIGFzb2NpYWFsIGdlZHJhZ2VuIGFscyBkZSBzdGVya2VyZS4NCiBMYW5nemFhbSBsb3BlbiB3ZSBkb29yLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToxO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNDY4IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMxMCI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxMzgiO3M6NzoidGFnbmFtZSI7czoyMjoiT3VkIFdlc3QgaW4gQmVlbGRUZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzEwIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0yNyAxMzo0NjoyMCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoiQnV1cnR2b2xzdGVtbWVuRm90bzEuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo5OiIgRmlldHNlcnMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDE6MjAgMTI6MTg6MDQiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2NTI6IiBEZXplIG1hYW5kYWdvY2h0ZW5kIGluIGphbnVhcmkgemllIGplIHplIG5hdXdlbGlqa3MuIDExLjIzIA0KIElrIHdlZXQgbm9nIGhvZSBLYW1pa2F6ZUphYXAgemljaCBkb29yIGRlIGphcmVuIDE5ODAgcmFjZXRlLiBIaWogaGVlZnQgZGUga3J1aXNwdW50ZW4gb3ZlcmxlZWZkLCB6ZWxmcyBuaWV0IGdld29uZCBnZXJhYWt0IHRyb3V3ZW5zLg0KIFZhbHQgaGV0IHUgb29rIG9wIGhvZXZlZWwgZmlldHNlbiBvdmVyYWwgc3RhYW4uIEVuIHplIHN0YWFuIGVyIGFscyB3ZWdnZWdvb2lkZSBwbGFzdGljIGZsZXNqZXMuDQogRmlldHNlbiBpcyBnb2VkIHZvb3IgaGV0IG1pbGlldSwgbWFhciBpbiBBbXN0ZXJkYW0gJmhlbGxpcDsgZW4gbWlsaWV1IGlzIG1lZXIgZGFuIHNjaG9uZSBsdWNodCBlbiBpanNiZXJlbiBvcCBzY2hvdHNlbi4gDQpEZSBnZWRhY2h0ZSBhY2h0ZXIgZGF0IG1pbGlldSwgZWV1d2lnZSBoYXJtb25pZSB2b29yIGRlIG1lbnNlbndlcmVsZD8gRGllIGlzIGVyIG5pZXQgaW4gaGV0IGZpZXRzdmVya2VlciwgZGFhciBnZWxkdCBoZXQgcmVjaHQgdmFuIGRlIHN0ZXJrc3RlLCBkZSBhc29jaWFhbHN0ZSwgZW4gZGFuIHppam4gd2UgYWwgc25lbCB3ZWVyIHRlcnVnIGJpaiBoZXQgbWlsaWV1LCBkZSBuYXR1dXIgaGVlZnQgbmlldHMgdGUgbWFrZW4gbWV0IGV2ZW53aWNodCwgd2lqIG1lbnNlbiB3ZW5zZW4gZGF0IGhldCBub29pdCBtZWVyIGFuZGVycyB3b3JkdCBkYW4gbnUgJm5kYXNoOyBpbiBoZXQgV2VzdGVuIGRhbiB2b29yYWwgb29rIG5vZyAmbmRhc2g7IHdhbnQgZGFuIGxldmVuIHdlIG5vZyBsYW5nIGVuIGdlbHVra2lnIGluIGRlIGZyaXNzZSBsdWNodC4NCiBKYSwgamUgemlldCBoZXQgbmlldCBhYW4gZGUgZmlldHNlbiBhZiwgbW9yc2lnIGtvbXQgaGV0IG92ZXIgd2F0IGhpZXIgc3RhYXQsIHZlcmdldGVuLiBXZWdnZXdvcnBlbi4gQWZ2YWwuIEVlbiBnZWRhY2h0ZSBkaWUgd2Ugd2lsbGVuIGRvZW4gZ2Vsb3ZlbiwgbmlldCBiaWogZmlldHNlbiBwYXN0Lg0KIEZpZXRzZXJzLCBqZSBrYW4gZWlnZW5saWprIGFsbGVlbiBqZSBzY2hvdWRlcnMgZXJvdmVyIG9waGFsZW4sIGRhdCBiZXNlZiBpayBzdGVlZHMgbWVlciwgbnUgaWsgdmFrZXIgYXV0byBtb2V0IHJpamRlbi4gWmVrZXIgYmlqIGhldCB6aWVuIHZhbiBkZXplIHpvb2kgZGllIHplIG9wIHN0cmFhdCBhY2h0ZXJsYXRlbi4NCiBKZSBsYWF0IHplIGhlZWwgYWxzIHplIHJvbmRmaWV0c2VuLCB6b2FscyBoZXJ0amVzIGVuIHp3aWpudGplcywgbWFhciBtZWRlZG9nZW4/IEVuIGplIGxhYXQgemUgaGVlbCwgYWFuZ2V6aWVuIGplICZuZGFzaDsgaGVlbCB0ZWdlbm5hdHV1cmxpamsgdWl0IHJlc3BlY3QgJm5kYXNoOyBtZXQgamUgYXV0byBkZSBzdGVya3N0ZSBiZW50LiANCkhldCBpcyBvb2sgc3RyYWZiYWFyIG9tIHplIGthcG90IHRlIG1ha2VuLiBKYW1tZXIgZGF0IGZpZXRzZXJzIGRhdCBiZXNlZmZlbiwgZW4gbmlldCBkYXQgZXIgb3AgemUgZ2VqYWFnZCBrYW4gd29yZGVuLiANCkFscyBqZSBkZSBuYXR1dXIgb21kcmFhaXQsIGJsaWprdCBtYWFyIHdlZXIsIGRhbiBnYWF0IGRlIHp3YWtrZXJlIHppY2ggbmV0IHpvIGFzb2NpYWFsIGdlZHJhZ2VuIGFscyBkZSBzdGVya2VyZS4NCiBMYW5nemFhbSBsb3BlbiB3ZSBkb29yLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToyO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNzYwIjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMxMCI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxOTUiO3M6NzoidGFnbmFtZSI7czoxMDoiYmVlbGR0ZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzEwIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMC0yNyAxMzo0NjoyMCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoyNDoiQnV1cnR2b2xzdGVtbWVuRm90bzEuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo5OiIgRmlldHNlcnMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDE6MjAgMTI6MTg6MDQiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2NTI6IiBEZXplIG1hYW5kYWdvY2h0ZW5kIGluIGphbnVhcmkgemllIGplIHplIG5hdXdlbGlqa3MuIDExLjIzIA0KIElrIHdlZXQgbm9nIGhvZSBLYW1pa2F6ZUphYXAgemljaCBkb29yIGRlIGphcmVuIDE5ODAgcmFjZXRlLiBIaWogaGVlZnQgZGUga3J1aXNwdW50ZW4gb3ZlcmxlZWZkLCB6ZWxmcyBuaWV0IGdld29uZCBnZXJhYWt0IHRyb3V3ZW5zLg0KIFZhbHQgaGV0IHUgb29rIG9wIGhvZXZlZWwgZmlldHNlbiBvdmVyYWwgc3RhYW4uIEVuIHplIHN0YWFuIGVyIGFscyB3ZWdnZWdvb2lkZSBwbGFzdGljIGZsZXNqZXMuDQogRmlldHNlbiBpcyBnb2VkIHZvb3IgaGV0IG1pbGlldSwgbWFhciBpbiBBbXN0ZXJkYW0gJmhlbGxpcDsgZW4gbWlsaWV1IGlzIG1lZXIgZGFuIHNjaG9uZSBsdWNodCBlbiBpanNiZXJlbiBvcCBzY2hvdHNlbi4gDQpEZSBnZWRhY2h0ZSBhY2h0ZXIgZGF0IG1pbGlldSwgZWV1d2lnZSBoYXJtb25pZSB2b29yIGRlIG1lbnNlbndlcmVsZD8gRGllIGlzIGVyIG5pZXQgaW4gaGV0IGZpZXRzdmVya2VlciwgZGFhciBnZWxkdCBoZXQgcmVjaHQgdmFuIGRlIHN0ZXJrc3RlLCBkZSBhc29jaWFhbHN0ZSwgZW4gZGFuIHppam4gd2UgYWwgc25lbCB3ZWVyIHRlcnVnIGJpaiBoZXQgbWlsaWV1LCBkZSBuYXR1dXIgaGVlZnQgbmlldHMgdGUgbWFrZW4gbWV0IGV2ZW53aWNodCwgd2lqIG1lbnNlbiB3ZW5zZW4gZGF0IGhldCBub29pdCBtZWVyIGFuZGVycyB3b3JkdCBkYW4gbnUgJm5kYXNoOyBpbiBoZXQgV2VzdGVuIGRhbiB2b29yYWwgb29rIG5vZyAmbmRhc2g7IHdhbnQgZGFuIGxldmVuIHdlIG5vZyBsYW5nIGVuIGdlbHVra2lnIGluIGRlIGZyaXNzZSBsdWNodC4NCiBKYSwgamUgemlldCBoZXQgbmlldCBhYW4gZGUgZmlldHNlbiBhZiwgbW9yc2lnIGtvbXQgaGV0IG92ZXIgd2F0IGhpZXIgc3RhYXQsIHZlcmdldGVuLiBXZWdnZXdvcnBlbi4gQWZ2YWwuIEVlbiBnZWRhY2h0ZSBkaWUgd2Ugd2lsbGVuIGRvZW4gZ2Vsb3ZlbiwgbmlldCBiaWogZmlldHNlbiBwYXN0Lg0KIEZpZXRzZXJzLCBqZSBrYW4gZWlnZW5saWprIGFsbGVlbiBqZSBzY2hvdWRlcnMgZXJvdmVyIG9waGFsZW4sIGRhdCBiZXNlZiBpayBzdGVlZHMgbWVlciwgbnUgaWsgdmFrZXIgYXV0byBtb2V0IHJpamRlbi4gWmVrZXIgYmlqIGhldCB6aWVuIHZhbiBkZXplIHpvb2kgZGllIHplIG9wIHN0cmFhdCBhY2h0ZXJsYXRlbi4NCiBKZSBsYWF0IHplIGhlZWwgYWxzIHplIHJvbmRmaWV0c2VuLCB6b2FscyBoZXJ0amVzIGVuIHp3aWpudGplcywgbWFhciBtZWRlZG9nZW4/IEVuIGplIGxhYXQgemUgaGVlbCwgYWFuZ2V6aWVuIGplICZuZGFzaDsgaGVlbCB0ZWdlbm5hdHV1cmxpamsgdWl0IHJlc3BlY3QgJm5kYXNoOyBtZXQgamUgYXV0byBkZSBzdGVya3N0ZSBiZW50LiANCkhldCBpcyBvb2sgc3RyYWZiYWFyIG9tIHplIGthcG90IHRlIG1ha2VuLiBKYW1tZXIgZGF0IGZpZXRzZXJzIGRhdCBiZXNlZmZlbiwgZW4gbmlldCBkYXQgZXIgb3AgemUgZ2VqYWFnZCBrYW4gd29yZGVuLiANCkFscyBqZSBkZSBuYXR1dXIgb21kcmFhaXQsIGJsaWprdCBtYWFyIHdlZXIsIGRhbiBnYWF0IGRlIHp3YWtrZXJlIHppY2ggbmV0IHpvIGFzb2NpYWFsIGdlZHJhZ2VuIGFscyBkZSBzdGVya2VyZS4NCiBMYW5nemFhbSBsb3BlbiB3ZSBkb29yLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjMxMCI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTAtMjcgMTM6NDY6MjAiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MjQ6IkJ1dXJ0dm9sc3RlbW1lbkZvdG8xLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6OToiIEZpZXRzZXJzIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjAxOjIwIDEyOjE4OjA0IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjUyOiIgRGV6ZSBtYWFuZGFnb2NodGVuZCBpbiBqYW51YXJpIHppZSBqZSB6ZSBuYXV3ZWxpamtzLiAxMS4yMyANCiBJayB3ZWV0IG5vZyBob2UgS2FtaWthemVKYWFwIHppY2ggZG9vciBkZSBqYXJlbiAxOTgwIHJhY2V0ZS4gSGlqIGhlZWZ0IGRlIGtydWlzcHVudGVuIG92ZXJsZWVmZCwgemVsZnMgbmlldCBnZXdvbmQgZ2VyYWFrdCB0cm91d2Vucy4NCiBWYWx0IGhldCB1IG9vayBvcCBob2V2ZWVsIGZpZXRzZW4gb3ZlcmFsIHN0YWFuLiBFbiB6ZSBzdGFhbiBlciBhbHMgd2VnZ2Vnb29pZGUgcGxhc3RpYyBmbGVzamVzLg0KIEZpZXRzZW4gaXMgZ29lZCB2b29yIGhldCBtaWxpZXUsIG1hYXIgaW4gQW1zdGVyZGFtICZoZWxsaXA7IGVuIG1pbGlldSBpcyBtZWVyIGRhbiBzY2hvbmUgbHVjaHQgZW4gaWpzYmVyZW4gb3Agc2Nob3RzZW4uIA0KRGUgZ2VkYWNodGUgYWNodGVyIGRhdCBtaWxpZXUsIGVldXdpZ2UgaGFybW9uaWUgdm9vciBkZSBtZW5zZW53ZXJlbGQ/IERpZSBpcyBlciBuaWV0IGluIGhldCBmaWV0c3ZlcmtlZXIsIGRhYXIgZ2VsZHQgaGV0IHJlY2h0IHZhbiBkZSBzdGVya3N0ZSwgZGUgYXNvY2lhYWxzdGUsIGVuIGRhbiB6aWpuIHdlIGFsIHNuZWwgd2VlciB0ZXJ1ZyBiaWogaGV0IG1pbGlldSwgZGUgbmF0dXVyIGhlZWZ0IG5pZXRzIHRlIG1ha2VuIG1ldCBldmVud2ljaHQsIHdpaiBtZW5zZW4gd2Vuc2VuIGRhdCBoZXQgbm9vaXQgbWVlciBhbmRlcnMgd29yZHQgZGFuIG51ICZuZGFzaDsgaW4gaGV0IFdlc3RlbiBkYW4gdm9vcmFsIG9vayBub2cgJm5kYXNoOyB3YW50IGRhbiBsZXZlbiB3ZSBub2cgbGFuZyBlbiBnZWx1a2tpZyBpbiBkZSBmcmlzc2UgbHVjaHQuDQogSmEsIGplIHppZXQgaGV0IG5pZXQgYWFuIGRlIGZpZXRzZW4gYWYsIG1vcnNpZyBrb210IGhldCBvdmVyIHdhdCBoaWVyIHN0YWF0LCB2ZXJnZXRlbi4gV2VnZ2V3b3JwZW4uIEFmdmFsLiBFZW4gZ2VkYWNodGUgZGllIHdlIHdpbGxlbiBkb2VuIGdlbG92ZW4sIG5pZXQgYmlqIGZpZXRzZW4gcGFzdC4NCiBGaWV0c2VycywgamUga2FuIGVpZ2VubGlqayBhbGxlZW4gamUgc2Nob3VkZXJzIGVyb3ZlciBvcGhhbGVuLCBkYXQgYmVzZWYgaWsgc3RlZWRzIG1lZXIsIG51IGlrIHZha2VyIGF1dG8gbW9ldCByaWpkZW4uIFpla2VyIGJpaiBoZXQgemllbiB2YW4gZGV6ZSB6b29pIGRpZSB6ZSBvcCBzdHJhYXQgYWNodGVybGF0ZW4uDQogSmUgbGFhdCB6ZSBoZWVsIGFscyB6ZSByb25kZmlldHNlbiwgem9hbHMgaGVydGplcyBlbiB6d2lqbnRqZXMsIG1hYXIgbWVkZWRvZ2VuPyBFbiBqZSBsYWF0IHplIGhlZWwsIGFhbmdlemllbiBqZSAmbmRhc2g7IGhlZWwgdGVnZW5uYXR1dXJsaWprIHVpdCByZXNwZWN0ICZuZGFzaDsgbWV0IGplIGF1dG8gZGUgc3RlcmtzdGUgYmVudC4gDQpIZXQgaXMgb29rIHN0cmFmYmFhciBvbSB6ZSBrYXBvdCB0ZSBtYWtlbi4gSmFtbWVyIGRhdCBmaWV0c2VycyBkYXQgYmVzZWZmZW4sIGVuIG5pZXQgZGF0IGVyIG9wIHplIGdlamFhZ2Qga2FuIHdvcmRlbi4gDQpBbHMgamUgZGUgbmF0dXVyIG9tZHJhYWl0LCBibGlqa3QgbWFhciB3ZWVyLCBkYW4gZ2FhdCBkZSB6d2Fra2VyZSB6aWNoIG5ldCB6byBhc29jaWFhbCBnZWRyYWdlbiBhbHMgZGUgc3RlcmtlcmUuDQogTGFuZ3phYW0gbG9wZW4gd2UgZG9vci4NCiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiODciO3M6ODoidXNlcm5hbWUiO3M6MjY6ImphYXBob29ndGVpamxpbmdAeHM0YWxsLm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6NDoibmFhbSI7czozMzoiTWFydGlqbiBCYXJ0aCAmIEphYXAgSG9vZ3RlaWpsaW5nIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjA2IjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMxMCI7czoxMjoicmVsYXRpZXNvb3J0IjtzOjU6Im1ha2VyIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIzMTAiO3M6OToib2JqZWN0X2lkIjtzOjM6IjE2MSI7czoyOiJpZCI7czozOiIzMDgiO319czo0OiJUYWdzIjthOjM6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiNjI0IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxNzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMxMCI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiNDY4IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMxMCI7fWk6MjthOjQ6e3M6MjoiaWQiO3M6MzoiNzYwIjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjMxMCI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czozOiIxOTEiO3M6MzoibGF0IjtzOjEzOiI1Mi4zNjcyNTM5ODUzIjtzOjM6ImxvbiI7czoxMjoiNC44NjcxMzY0Nzg0Ijt9czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO2E6MTp7aTowO2E6Mzp7czoxMToibG9jYXRpb25faWQiO3M6MzoiMTkxIjtzOjk6Im9iamVjdF9pZCI7czozOiIxNjEiO3M6MjoiaWQiO3M6MzoiMTYxIjt9fXM6MzoiQWRyIjthOjA6e319czo1OiJhZHJlcyI7YTowOnt9czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiI4NyI7czo4OiJ1c2VybmFtZSI7czoyNjoiamFhcGhvb2d0ZWlqbGluZ0B4czRhbGwubmwiO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0xMC0yNSAwMDowOToyOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0xMC0yNSAwMDowOToyOCI7czo0OiJuYWFtIjtzOjMzOiJNYXJ0aWpuIEJhcnRoICYgSmFhcCBIb29ndGVpamxpbmciO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO319czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czozMjoiRGl0IGRlZWwgdmFuIGRlIHN0YWQgdmFzdHBha2tlbi4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MjI6Ik91ZC1XZXN0IGluIEJlZWxkVGVrc3QiO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjYwNjE6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIE91ZC1XZXN0IGluIEJlZWxkVGVrc3Q8L2E+PC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wLzEzNi5qcGciICBvbmNsaWNrPSJwb3B1cGltZygnLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nJywgJzAvMTM2LmpwZycpOyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBvbmxvYWRmaXhpbWcoKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBteWVsID0gJCgiYjMiKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgaW1nZWwgPSAkKCJ0aGVpbWciKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbWggPSBteWVsLmNsaWVudEhlaWdodDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgdGggPSBtaCAtIDI4MDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5oZWlnaHQgPSB0aDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5zcmMgPSAiLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL2giICsgdGggKyAiLzAvMTM2LmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icGVyc29uIj5NYXJ0aWpuIEJhcnRoICYgSmFhcCBIb29ndGVpamxpbmc8L3NwYW4+CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPmphbnVhcmkgMjAxNAogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPiBGaWV0c2Vyczxicj48L2gyPgoKICAgICAgICAgIERlemUgbWFhbmRhZ29jaHRlbmQgaW4gamFudWFyaSB6aWUgamUgemUgbmF1d2VsaWprcy4gMTEuMjMgPGJyPjxicj4gSWsgd2VldCBub2cgaG9lIEthbWlrYXplSmFhcCB6aWNoIGRvb3IgZGUgamFyZW4gMTk4MCByYWNldGUuIEhpaiBoZWVmdCBkZSBrcnVpc3B1bnRlbiBvdmVybGVlZmQsIHplbGZzIG5pZXQgZ2V3b25kIGdlcmFha3QgdHJvdXdlbnMuPGJyPjxicj4gVmFsdCBoZXQgdSBvb2sgb3AgaG9ldmVlbCBmaWV0c2VuIG92ZXJhbCBzdGFhbi4gRW4gemUgc3RhYW4gZXIgYWxzIHdlZ2dlZ29vaWRlIHBsYXN0aWMgZmxlc2plcy48YnI+PGJyPiBGaWV0c2VuIGlzIGdvZWQgdm9vciBoZXQgbWlsaWV1LCBtYWFyIGluIEFtc3RlcmRhbSAmaGVsbGlwOyBlbiBtaWxpZXUgaXMgbWVlciBkYW4gc2Nob25lIGx1Y2h0IGVuIGlqc2JlcmVuIG9wIHNjaG90c2VuLiA8YnI+PGJyPkRlIGdlZGFjaHRlIGFjaHRlciBkYXQgbWlsaWV1LCBlZXV3aWdlIGhhcm1vbmllIHZvb3IgZGUgbWVuc2Vud2VyZWxkPyBEaWUgaXMgZXIgbmlldCBpbiBoZXQgZmlldHN2ZXJrZWVyLCBkYWFyIGdlbGR0IGhldCByZWNodCB2YW4gZGUgc3RlcmtzdGUsIGRlIGFzb2NpYWFsc3RlLCBlbiBkYW4gemlqbiB3ZSBhbCBzbmVsIHdlZXIgdGVydWcgYmlqIGhldCBtaWxpZXUsIGRlIG5hdHV1ciBoZWVmdCBuaWV0cyB0ZSBtYWtlbiBtZXQgZXZlbndpY2h0LCB3aWogbWVuc2VuIHdlbnNlbiBkYXQgaGV0IG5vb2l0IG1lZXIgYW5kZXJzIHdvcmR0IGRhbiBudSAmbmRhc2g7IGluIGhldCBXZXN0ZW4gZGFuIHZvb3JhbCBvb2sgbm9nICZuZGFzaDsgd2FudCBkYW4gbGV2ZW4gd2Ugbm9nIGxhbmcgZW4gZ2VsdWtraWcgaW4gZGUgZnJpc3NlIGx1Y2h0Ljxicj48YnI+IEphLCBqZSB6aWV0IGhldCBuaWV0IGFhbiBkZSBmaWV0c2VuIGFmLCBtb3JzaWcga29tdCBoZXQgb3ZlciB3YXQgaGllciBzdGFhdCwgdmVyZ2V0ZW4uIFdlZ2dld29ycGVuLiBBZnZhbC4gRWVuIGdlZGFjaHRlIGRpZSB3ZSB3aWxsZW4gZG9lbiBnZWxvdmVuLCBuaWV0IGJpaiBmaWV0c2VuIHBhc3QuPGJyPjxicj4gRmlldHNlcnMsIGplIGthbiBlaWdlbmxpamsgYWxsZWVuIGplIHNjaG91ZGVycyBlcm92ZXIgb3BoYWxlbiwgZGF0IGJlc2VmIGlrIHN0ZWVkcyBtZWVyLCBudSBpayB2YWtlciBhdXRvIG1vZXQgcmlqZGVuLiBaZWtlciBiaWogaGV0IHppZW4gdmFuIGRlemUgem9vaSBkaWUgemUgb3Agc3RyYWF0IGFjaHRlcmxhdGVuLjxicj48YnI+IEplIGxhYXQgemUgaGVlbCBhbHMgemUgcm9uZGZpZXRzZW4sIHpvYWxzIGhlcnRqZXMgZW4gendpam50amVzLCBtYWFyIG1lZGVkb2dlbj8gRW4gamUgbGFhdCB6ZSBoZWVsLCBhYW5nZXppZW4gamUgJm5kYXNoOyBoZWVsIHRlZ2VubmF0dXVybGlqayB1aXQgcmVzcGVjdCAmbmRhc2g7IG1ldCBqZSBhdXRvIGRlIHN0ZXJrc3RlIGJlbnQuIDxicj48YnI+SGV0IGlzIG9vayBzdHJhZmJhYXIgb20gemUga2Fwb3QgdGUgbWFrZW4uIEphbW1lciBkYXQgZmlldHNlcnMgZGF0IGJlc2VmZmVuLCBlbiBuaWV0IGRhdCBlciBvcCB6ZSBnZWphYWdkIGthbiB3b3JkZW4uIDxicj48YnI+QWxzIGplIGRlIG5hdHV1ciBvbWRyYWFpdCwgYmxpamt0IG1hYXIgd2VlciwgZGFuIGdhYXQgZGUgendha2tlcmUgemljaCBuZXQgem8gYXNvY2lhYWwgZ2VkcmFnZW4gYWxzIGRlIHN0ZXJrZXJlLjxicj48YnI+IExhbmd6YWFtIGxvcGVuIHdlIGRvb3IuPGJyPjxicj4gCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIzMTAiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0yNSAyMDo1Mjo0NyI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgo8ZGl2IGNsYXNzPSJwYXBlciI+PGEgaHJlZj0iL21lZGlhL3RhZy8xNzgvIiBjbGFzcz0ibGFiZWwiPiNzdHJhdGVuPC9hPiA8YSBocmVmPSIvbWVkaWEvdGFnLzEzOC8iIGNsYXNzPSJsYWJlbCI+I091ZCBXZXN0IGluIEJlZWxkVGVrc3Q8L2E+IAoKPGlucHV0IGlkPSJ0YWdhZGRMYWJlbCIgdHlwZT0idGV4dCIgdmFsdWU9Im5pZXV3IGxhYmVsIiBvbmtleXVwPSJ0YWdhZGQodGhpcyxldmVudCwzMTApOyIgb25ibHVyPSJpbnB1dExlYXZlKHRoaXMpOyIgb25mb2N1cz0iaW5wdXRGb2N1cyh0aGlzKTsiIHNwZWxsY2hlY2s9ImZhbHNlIiBhdXRvY29tcGxldGU9Im9mZiIgbmFtZT0idGFnYWRkTGFiZWwiPjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vYmVlbGR0ZWtzdC5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzMxMC8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKDUyLjM2NzI1Mzk4NTMsIDQuODY3MTM2NDc4NCk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo1MDQ6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iIEZpZXRzZXJzIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC8xMzYuanBnIiAvPjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHA6Ly9iZWVsZHRla3N0LmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzEwLyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
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
<meta property="og:title" content=" Fietsers" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/136.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/310/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/136.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/136.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/136.jpg";
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

            <h2 style="display:inline;"> Fietsers<br></h2>

          Deze maandagochtend in januari zie je ze nauwelijks. 11.23 <br><br> Ik weet nog hoe KamikazeJaap zich door de jaren 1980 racete. Hij heeft de kruispunten overleefd, zelfs niet gewond geraakt trouwens.<br><br> Valt het u ook op hoeveel fietsen overal staan. En ze staan er als weggegooide plastic flesjes.<br><br> Fietsen is goed voor het milieu, maar in Amsterdam &hellip; en milieu is meer dan schone lucht en ijsberen op schotsen. <br><br>De gedachte achter dat milieu, eeuwige harmonie voor de mensenwereld? Die is er niet in het fietsverkeer, daar geldt het recht van de sterkste, de asociaalste, en dan zijn we al snel weer terug bij het milieu, de natuur heeft niets te maken met evenwicht, wij mensen wensen dat het nooit meer anders wordt dan nu &ndash; in het Westen dan vooral ook nog &ndash; want dan leven we nog lang en gelukkig in de frisse lucht.<br><br> Ja, je ziet het niet aan de fietsen af, morsig komt het over wat hier staat, vergeten. Weggeworpen. Afval. Een gedachte die we willen doen geloven, niet bij fietsen past.<br><br> Fietsers, je kan eigenlijk alleen je schouders erover ophalen, dat besef ik steeds meer, nu ik vaker auto moet rijden. Zeker bij het zien van deze zooi die ze op straat achterlaten.<br><br> Je laat ze heel als ze rondfietsen, zoals hertjes en zwijntjes, maar mededogen? En je laat ze heel, aangezien je &ndash; heel tegennatuurlijk uit respect &ndash; met je auto de sterkste bent. <br><br>Het is ook strafbaar om ze kapot te maken. Jammer dat fietsers dat beseffen, en niet dat er op ze gejaagd kan worden. <br><br>Als je de natuur omdraait, blijkt maar weer, dan gaat de zwakkere zich net zo asociaal gedragen als de sterkere.<br><br> Langzaam lopen we door.<br><br> 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="310">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 20:52:47">

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

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,310);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/310/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3672539853, 4.8671364784);
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