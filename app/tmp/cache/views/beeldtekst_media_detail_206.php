<!--cachetime:1427316892--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjIwNiI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMjA2LyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8yMDYvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6MTp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMjA4IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2MiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjA2Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjYyIjtzOjc6InRhZ25hbWUiO3M6OToic291dmVuaXJzIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIyMDYiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTEyIDEyOjQ1OjExIjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjg6Im11aXMuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiNTMiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czozMDoiTXVpemVuaXNzZW4gKGVlbiB0d2VlZGUgbGV2ZW4pIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjA6IiI7czoxMToib3BtZXJraW5nZW4iO3M6MjM3MzoiICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YXVkaW8gd2lkdGg9IjkwJSIgY29udHJvbHM+DQo8c291cmNlIHNyYz0iaHR0cDovL2NhY2hlLmJ2c3RlbW1lbi5ubC9hdWRpby8wLzEwNy5tcDMiIHR5cGU9ImF1ZGlvL21wMyI+DQo8c291cmNlIHNyYz0iaHR0cDovL2NhY2hlLmJ2c3RlbW1lbi5ubC9hdWRpby8wLzEwNy5vZ2ciIHR5cGU9ImF1ZGlvL29nZyI+DQo8L2F1ZGlvPg0KRW4gem8gbGllcCBpayB3ZWVyIGVlbnMgb3Agc3RyYWF0IHRlIGR3YWxlbi4gSWsgbGllcCBsYW5ncyBlZW4ga2FkZSBlbiBoZXQgd2FhaWRlIGZsaW5rLCB6ZWcgbWFhciBnZXJ1c3QgaGV0IHdhcyBzdG9ybWFjaHRpZyB3ZWVyLiBFbiBuYXR1dXJsaWprIHJlZ2VuZGUgaGV0IG9vay4gSWsgbW9lc3Qgb3BwYXNzZW4gZGF0IGlrIG5pZXQgaW4gZGF0IGdyb3RlIHdhdGVyIHRlcmVjaHQga3dhbSwgd2FudCBkYW4ga29uIGlrIGhldCBlY2h0IHdlbCB2ZXJnZXRlbi4gRHVzIGlrIHN0YWsgZGUgc3RyYWF0IG92ZXIsIG5hYXIgZGUgaHVpemVuLiBCZXN0IGdldmFhcmxpamsgb29rIG1ldCBhbCBkaWUgYXV0byZyc3F1bztzIGZpZXRzZW4gdm9ldGVuLCBwb3RlbiBlbnpvdm9vcnQsIG1hYXIgaGV0IGx1a3RlLiAmbHNxdW87R2wmdXVtbDtjayBtdXNzIG1hbiBoYWJlbiZyc3F1bzsgaGViIGlrIGVlbnMgZ2Vob29yZCB2YW4gZWVuIGR3YWFsZ2FzdCBoZWxlbWFhbCB1aXQgRHVpdHNsYW5kIGVuIGRhYXIgaGFkICZsc3F1bztpZSBnZWxpamsgaW4uIA0KSGllciB3YXMgaGV0IHZlaWxpZyBlbiBpayBzbnVmZmVsZGUgd2F0IHJvbmQsIG9wIHpvZWsgbmFhciBlZW4gZ2V1ciBkaWUgbWUgZXJnZW5zIHpvdSBicmVuZ2VuIHdhYXIgd2F0IHRlIGV0ZW4gd2FzLiBIZXQgZHV1cmRlIG5pZXQgbGFuZyBvZiBtaWpuIG5ldXMgcGlrdGUgaWV0cyBvcC4gRWVuIGhlZXJsaWprZSBnZXVyIGRyb25nIHppY2ggbWlqbiBuZXVzIGJpbm5lbiBlbiBpayBtb2VzdCBlciBvcCBhZi4gRGUgZ2V1ciBrd2FtIHVpdCBlZW4gd29uaW5nIG9wIGRlIGJlZ2FuZSBncm9uZCBlbiBpayBkcm9uZyB2aWEgaGV0IGx1Y2h0cm9vc3RlciBuYWFyIGJpbm5lbi4gRWVuIHBpenplcmlhLCBkYXQgd2FzIGVjaHQgZWVuIGZlZXN0IHZvb3IgZWVuIG11aXMuDQpKZSBiZWdyaWpwdCBkYWFyIGhlYiBpayBlZW4gaGVsZSB0aWpkIGdlYml2YWtrZWVyZCwgdG90ZGF0IGlrIHdlcmQgdmVyamFhZ2QgZG9vciBlZW4gZ3JvdGUgendhcnRlIGthdCBtZXQgZWVuIHdpdHRlIGJlZiBlbiB2YW4gZGllIHNjaGV2ZSBncm9lbmUgb2dlbi4gRG9vZHNiYW5nIHdhcyBpayB2b29yIGRhdCBiZWVzdC4gVG9lbiBiZW4gaWsgaGV0IG1hYXIgZWVuIHBhYXIgZXRhZ2VzIGhvZ2Vyb3AgZ2FhbiB6b2VrZW4sIHdhYXIgaGV0IGVlbiBzdHVrIHdhcm1lciB3YXMgZW4gd2FhciBpayBvb2sgbm9nIHdlbCBoZXQgJmVhY3V0ZTsmZWFjdXRlO24gZW4gYW5kZXIgdGUgZXRlbiB2b25kLiBEZSB2cm91dyBkZXMgaHVpemVzIGtvb2t0ZSByb3lhYWwgZW4gbWV0IHZlZWwgcGFzc2llLCB3YWFyZG9vciBlciB2YWFrIHdhdCBuYWFzdCBoZXQgZ2FzdGZvcm51aXMgdGVyZWNodCBrd2FtLCB2b29yIG1paiBlbiB2b29yIGRlIGhvbmQmaGVsbGlwOyANCkRpZSBoYWQgaGV0IG5hdHV1cmxpamsgYWxnYXV3IG9wIG1paiB2b29yemllbiBkdXMgZWNodCBydXN0aWcga29uIGlrIGRhYXIgbmlldCB6aXR0ZW4gZW4gdG9lbiBiZW4gaWsgb3AgZGUgem9sZGVyIGdhYW4gd29uZW4uIERhdCBiZXZpZWwgbWUgdWl0c3Rla2VuZCEgSWsgbWFha3RlIGRhYXIgZWVuIG5lc3QgdmFuIG91ZGUgbGFwcGVuIGluIGVlbiBrYXN0LiBabyZyc3F1bztuIGhlZXJsaWprIGhvbGxldGplIHdhYXIgamUgZGUgaGVsZSBkYWcga2FuIGxpZ2dlbiBkcm9tZW4uIEVuICZyc3F1bztzIGF2b25kcyBnaW5nIGlrIG5hYXIgYmVuZWRlbiBvbSBkZSByZXN0amVzIG9wIHRlIHBldXplbGVuLCB3YWFyIGRlIGhvbmQgbmlldCBiaWoga29uLiBFZW4gaGVlcmxpamtlIG91ZGUgZGFnIGhlYiBpayBkYWFyIGdlaGFkLiANClRvdCBpayBvcCBlZW4gb2NodGVuZCBuaWV0IG1lZXIgd2Fra2VyIHdlcmQuIA0KSmFyZW4gbGF0ZXIgaGViYmVuIHplIG1paiBnZXZvbmRlbiBpbiBkZSBrYXN0IHR1c3NlbiBkZSBvdWRlIGxhcHBlbi4gSWsgd2FzIGlubWlkZGVscyBoZWxlbWFhbCB2ZXJkcm9vZ2QgZW4gemUgaGViYmVuIG1lIGluIGVlbiBkb29zamUgZ2VkYWFuIGVuIG51IGRvZSBpayBvcGVlbnMgbWVlIGFhbiBlZW4gYnV1cnRwcm9qZWN0LiBXaWUgaGFkIGRhdCBrdW5uZW4gZGVua2VuLCBpayBpbiBlbGsgZ2V2YWwgbmlldC4gTWFhciBpayB2aW5kIGhldCBiZXN0IGhvb3IsIGRpdCBsZXZlbiBuYSBkZSBkb29kLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjIwNiI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMDItMTIgMTI6NDU6MTEiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6ODoibXVpcy5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI1MyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjMwOiJNdWl6ZW5pc3NlbiAoZWVuIHR3ZWVkZSBsZXZlbikiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MDoiIjtzOjExOiJvcG1lcmtpbmdlbiI7czoyMzczOiIgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhdWRpbyB3aWR0aD0iOTAlIiBjb250cm9scz4NCjxzb3VyY2Ugc3JjPSJodHRwOi8vY2FjaGUuYnZzdGVtbWVuLm5sL2F1ZGlvLzAvMTA3Lm1wMyIgdHlwZT0iYXVkaW8vbXAzIj4NCjxzb3VyY2Ugc3JjPSJodHRwOi8vY2FjaGUuYnZzdGVtbWVuLm5sL2F1ZGlvLzAvMTA3Lm9nZyIgdHlwZT0iYXVkaW8vb2dnIj4NCjwvYXVkaW8+DQpFbiB6byBsaWVwIGlrIHdlZXIgZWVucyBvcCBzdHJhYXQgdGUgZHdhbGVuLiBJayBsaWVwIGxhbmdzIGVlbiBrYWRlIGVuIGhldCB3YWFpZGUgZmxpbmssIHplZyBtYWFyIGdlcnVzdCBoZXQgd2FzIHN0b3JtYWNodGlnIHdlZXIuIEVuIG5hdHV1cmxpamsgcmVnZW5kZSBoZXQgb29rLiBJayBtb2VzdCBvcHBhc3NlbiBkYXQgaWsgbmlldCBpbiBkYXQgZ3JvdGUgd2F0ZXIgdGVyZWNodCBrd2FtLCB3YW50IGRhbiBrb24gaWsgaGV0IGVjaHQgd2VsIHZlcmdldGVuLiBEdXMgaWsgc3RhayBkZSBzdHJhYXQgb3ZlciwgbmFhciBkZSBodWl6ZW4uIEJlc3QgZ2V2YWFybGlqayBvb2sgbWV0IGFsIGRpZSBhdXRvJnJzcXVvO3MgZmlldHNlbiB2b2V0ZW4sIHBvdGVuIGVuem92b29ydCwgbWFhciBoZXQgbHVrdGUuICZsc3F1bztHbCZ1dW1sO2NrIG11c3MgbWFuIGhhYmVuJnJzcXVvOyBoZWIgaWsgZWVucyBnZWhvb3JkIHZhbiBlZW4gZHdhYWxnYXN0IGhlbGVtYWFsIHVpdCBEdWl0c2xhbmQgZW4gZGFhciBoYWQgJmxzcXVvO2llIGdlbGlqayBpbi4gDQpIaWVyIHdhcyBoZXQgdmVpbGlnIGVuIGlrIHNudWZmZWxkZSB3YXQgcm9uZCwgb3Agem9layBuYWFyIGVlbiBnZXVyIGRpZSBtZSBlcmdlbnMgem91IGJyZW5nZW4gd2FhciB3YXQgdGUgZXRlbiB3YXMuIEhldCBkdXVyZGUgbmlldCBsYW5nIG9mIG1pam4gbmV1cyBwaWt0ZSBpZXRzIG9wLiBFZW4gaGVlcmxpamtlIGdldXIgZHJvbmcgemljaCBtaWpuIG5ldXMgYmlubmVuIGVuIGlrIG1vZXN0IGVyIG9wIGFmLiBEZSBnZXVyIGt3YW0gdWl0IGVlbiB3b25pbmcgb3AgZGUgYmVnYW5lIGdyb25kIGVuIGlrIGRyb25nIHZpYSBoZXQgbHVjaHRyb29zdGVyIG5hYXIgYmlubmVuLiBFZW4gcGl6emVyaWEsIGRhdCB3YXMgZWNodCBlZW4gZmVlc3Qgdm9vciBlZW4gbXVpcy4NCkplIGJlZ3JpanB0IGRhYXIgaGViIGlrIGVlbiBoZWxlIHRpamQgZ2ViaXZha2tlZXJkLCB0b3RkYXQgaWsgd2VyZCB2ZXJqYWFnZCBkb29yIGVlbiBncm90ZSB6d2FydGUga2F0IG1ldCBlZW4gd2l0dGUgYmVmIGVuIHZhbiBkaWUgc2NoZXZlIGdyb2VuZSBvZ2VuLiBEb29kc2Jhbmcgd2FzIGlrIHZvb3IgZGF0IGJlZXN0LiBUb2VuIGJlbiBpayBoZXQgbWFhciBlZW4gcGFhciBldGFnZXMgaG9nZXJvcCBnYWFuIHpvZWtlbiwgd2FhciBoZXQgZWVuIHN0dWsgd2FybWVyIHdhcyBlbiB3YWFyIGlrIG9vayBub2cgd2VsIGhldCAmZWFjdXRlOyZlYWN1dGU7biBlbiBhbmRlciB0ZSBldGVuIHZvbmQuIERlIHZyb3V3IGRlcyBodWl6ZXMga29va3RlIHJveWFhbCBlbiBtZXQgdmVlbCBwYXNzaWUsIHdhYXJkb29yIGVyIHZhYWsgd2F0IG5hYXN0IGhldCBnYXN0Zm9ybnVpcyB0ZXJlY2h0IGt3YW0sIHZvb3IgbWlqIGVuIHZvb3IgZGUgaG9uZCZoZWxsaXA7IA0KRGllIGhhZCBoZXQgbmF0dXVybGlqayBhbGdhdXcgb3AgbWlqIHZvb3J6aWVuIGR1cyBlY2h0IHJ1c3RpZyBrb24gaWsgZGFhciBuaWV0IHppdHRlbiBlbiB0b2VuIGJlbiBpayBvcCBkZSB6b2xkZXIgZ2FhbiB3b25lbi4gRGF0IGJldmllbCBtZSB1aXRzdGVrZW5kISBJayBtYWFrdGUgZGFhciBlZW4gbmVzdCB2YW4gb3VkZSBsYXBwZW4gaW4gZWVuIGthc3QuIFpvJnJzcXVvO24gaGVlcmxpamsgaG9sbGV0amUgd2FhciBqZSBkZSBoZWxlIGRhZyBrYW4gbGlnZ2VuIGRyb21lbi4gRW4gJnJzcXVvO3MgYXZvbmRzIGdpbmcgaWsgbmFhciBiZW5lZGVuIG9tIGRlIHJlc3RqZXMgb3AgdGUgcGV1emVsZW4sIHdhYXIgZGUgaG9uZCBuaWV0IGJpaiBrb24uIEVlbiBoZWVybGlqa2Ugb3VkZSBkYWcgaGViIGlrIGRhYXIgZ2VoYWQuIA0KVG90IGlrIG9wIGVlbiBvY2h0ZW5kIG5pZXQgbWVlciB3YWtrZXIgd2VyZC4gDQpKYXJlbiBsYXRlciBoZWJiZW4gemUgbWlqIGdldm9uZGVuIGluIGRlIGthc3QgdHVzc2VuIGRlIG91ZGUgbGFwcGVuLiBJayB3YXMgaW5taWRkZWxzIGhlbGVtYWFsIHZlcmRyb29nZCBlbiB6ZSBoZWJiZW4gbWUgaW4gZWVuIGRvb3NqZSBnZWRhYW4gZW4gbnUgZG9lIGlrIG9wZWVucyBtZWUgYWFuIGVlbiBidXVydHByb2plY3QuIFdpZSBoYWQgZGF0IGt1bm5lbiBkZW5rZW4sIGlrIGluIGVsayBnZXZhbCBuaWV0LiBNYWFyIGlrIHZpbmQgaGV0IGJlc3QgaG9vciwgZGl0IGxldmVuIG5hIGRlIGRvb2QuDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fXM6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6IjUzIjtzOjg6InVzZXJuYW1lIjtzOjE1OiJlYmVsaW5hYkBkZHMubmwiO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMi0xMiAxMjozODo0NiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMi0xMiAxMjozODo0NiI7czo0OiJuYWFtIjtzOjE4OiJFYmVsaW5hIEJyZXRob3V3ZXIiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MDp7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MzoiMjA2IjtzOjk6Im9iamVjdF9pZCI7czoyOiIxNSI7czoyOiJpZCI7czozOiIyMDQiO319czo0OiJUYWdzIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjA4IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2MiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjA2Ijt9fX1zOjc6ImxvY2RhdGEiO2E6Mzp7czo4OiJMb2NhdGlvbiI7YTozOntzOjI6ImlkIjtzOjI6IjIwIjtzOjM6ImxhdCI7czoxMzoiNTIuMzcwMjE1NzAwMCI7czozOiJsb24iO3M6MTI6IjQuODk1MTY3OTAwMCI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjE6e2k6MDthOjM6e3M6MTE6ImxvY2F0aW9uX2lkIjtzOjI6IjIwIjtzOjk6Im9iamVjdF9pZCI7czoyOiIxNSI7czoyOiJpZCI7czoyOiIxNSI7fX1zOjM6IkFkciI7YToxOntpOjA7YToyOntzOjI6ImlkIjtzOjE6IjIiO3M6MTE6ImxvY2F0aW9uX2lkIjtzOjI6IjIwIjt9fX1zOjU6ImFkcmVzIjthOjE6e2k6MDthOjI6e3M6ODoiQWRycGFydHMiO2E6NTp7czoyOiJpZCI7czoxOiIyIjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIxIjtzOjQ6Im5hYW0iO3M6OToiQW1zdGVyZGFtIjtzOjU6ImxldmVsIjtzOjE6IjUiO3M6NjoiYWRyX2lkIjtzOjE6IjIiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjE6IjEiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjE6IjAiO3M6NDoibmFhbSI7czo5OiJOZWRlcmxhbmQiO3M6NToibGV2ZWwiO3M6MToiNiI7czo2OiJhZHJfaWQiO3M6MToiMSI7fX19czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czozMjoiRGl0IGRlZWwgdmFuIGRlIHN0YWQgdmFzdHBha2tlbi4iO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MjI6Ik91ZC1XZXN0IGluIEJlZWxkVGVrc3QiO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjYzODg6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIE91ZC1XZXN0IGluIEJlZWxkVGVrc3Q8L2E+PC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wL2NlLmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC9jZS5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wL2NlLmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gTmVkZXJsYW5kIEFtc3RlcmRhbQoKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5NdWl6ZW5pc3NlbiAoZWVuIHR3ZWVkZSBsZXZlbik8YnI+PC9oMj4KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGF1ZGlvIHdpZHRoPSI5MCUiIGNvbnRyb2xzPjxicj48YnI+PHNvdXJjZSBzcmM9Imh0dHA6Ly9jYWNoZS5idnN0ZW1tZW4ubmwvYXVkaW8vMC8xMDcubXAzIiB0eXBlPSJhdWRpby9tcDMiPjxicj48YnI+PHNvdXJjZSBzcmM9Imh0dHA6Ly9jYWNoZS5idnN0ZW1tZW4ubmwvYXVkaW8vMC8xMDcub2dnIiB0eXBlPSJhdWRpby9vZ2ciPjxicj48YnI+PC9hdWRpbz48YnI+PGJyPkVuIHpvIGxpZXAgaWsgd2VlciBlZW5zIG9wIHN0cmFhdCB0ZSBkd2FsZW4uIElrIGxpZXAgbGFuZ3MgZWVuIGthZGUgZW4gaGV0IHdhYWlkZSBmbGluaywgemVnIG1hYXIgZ2VydXN0IGhldCB3YXMgc3Rvcm1hY2h0aWcgd2Vlci4gRW4gbmF0dXVybGlqayByZWdlbmRlIGhldCBvb2suIElrIG1vZXN0IG9wcGFzc2VuIGRhdCBpayBuaWV0IGluIGRhdCBncm90ZSB3YXRlciB0ZXJlY2h0IGt3YW0sIHdhbnQgZGFuIGtvbiBpayBoZXQgZWNodCB3ZWwgdmVyZ2V0ZW4uIER1cyBpayBzdGFrIGRlIHN0cmFhdCBvdmVyLCBuYWFyIGRlIGh1aXplbi4gQmVzdCBnZXZhYXJsaWprIG9vayBtZXQgYWwgZGllIGF1dG8mcnNxdW87cyBmaWV0c2VuIHZvZXRlbiwgcG90ZW4gZW56b3Zvb3J0LCBtYWFyIGhldCBsdWt0ZS4gJmxzcXVvO0dsJnV1bWw7Y2sgbXVzcyBtYW4gaGFiZW4mcnNxdW87IGhlYiBpayBlZW5zIGdlaG9vcmQgdmFuIGVlbiBkd2FhbGdhc3QgaGVsZW1hYWwgdWl0IER1aXRzbGFuZCBlbiBkYWFyIGhhZCAmbHNxdW87aWUgZ2VsaWprIGluLiA8YnI+PGJyPkhpZXIgd2FzIGhldCB2ZWlsaWcgZW4gaWsgc251ZmZlbGRlIHdhdCByb25kLCBvcCB6b2VrIG5hYXIgZWVuIGdldXIgZGllIG1lIGVyZ2VucyB6b3UgYnJlbmdlbiB3YWFyIHdhdCB0ZSBldGVuIHdhcy4gSGV0IGR1dXJkZSBuaWV0IGxhbmcgb2YgbWlqbiBuZXVzIHBpa3RlIGlldHMgb3AuIEVlbiBoZWVybGlqa2UgZ2V1ciBkcm9uZyB6aWNoIG1pam4gbmV1cyBiaW5uZW4gZW4gaWsgbW9lc3QgZXIgb3AgYWYuIERlIGdldXIga3dhbSB1aXQgZWVuIHdvbmluZyBvcCBkZSBiZWdhbmUgZ3JvbmQgZW4gaWsgZHJvbmcgdmlhIGhldCBsdWNodHJvb3N0ZXIgbmFhciBiaW5uZW4uIEVlbiBwaXp6ZXJpYSwgZGF0IHdhcyBlY2h0IGVlbiBmZWVzdCB2b29yIGVlbiBtdWlzLjxicj48YnI+SmUgYmVncmlqcHQgZGFhciBoZWIgaWsgZWVuIGhlbGUgdGlqZCBnZWJpdmFra2VlcmQsIHRvdGRhdCBpayB3ZXJkIHZlcmphYWdkIGRvb3IgZWVuIGdyb3RlIHp3YXJ0ZSBrYXQgbWV0IGVlbiB3aXR0ZSBiZWYgZW4gdmFuIGRpZSBzY2hldmUgZ3JvZW5lIG9nZW4uIERvb2RzYmFuZyB3YXMgaWsgdm9vciBkYXQgYmVlc3QuIFRvZW4gYmVuIGlrIGhldCBtYWFyIGVlbiBwYWFyIGV0YWdlcyBob2dlcm9wIGdhYW4gem9la2VuLCB3YWFyIGhldCBlZW4gc3R1ayB3YXJtZXIgd2FzIGVuIHdhYXIgaWsgb29rIG5vZyB3ZWwgaGV0ICZlYWN1dGU7JmVhY3V0ZTtuIGVuIGFuZGVyIHRlIGV0ZW4gdm9uZC4gRGUgdnJvdXcgZGVzIGh1aXplcyBrb29rdGUgcm95YWFsIGVuIG1ldCB2ZWVsIHBhc3NpZSwgd2FhcmRvb3IgZXIgdmFhayB3YXQgbmFhc3QgaGV0IGdhc3Rmb3JudWlzIHRlcmVjaHQga3dhbSwgdm9vciBtaWogZW4gdm9vciBkZSBob25kJmhlbGxpcDsgPGJyPjxicj5EaWUgaGFkIGhldCBuYXR1dXJsaWprIGFsZ2F1dyBvcCBtaWogdm9vcnppZW4gZHVzIGVjaHQgcnVzdGlnIGtvbiBpayBkYWFyIG5pZXQgeml0dGVuIGVuIHRvZW4gYmVuIGlrIG9wIGRlIHpvbGRlciBnYWFuIHdvbmVuLiBEYXQgYmV2aWVsIG1lIHVpdHN0ZWtlbmQhIElrIG1hYWt0ZSBkYWFyIGVlbiBuZXN0IHZhbiBvdWRlIGxhcHBlbiBpbiBlZW4ga2FzdC4gWm8mcnNxdW87biBoZWVybGlqayBob2xsZXRqZSB3YWFyIGplIGRlIGhlbGUgZGFnIGthbiBsaWdnZW4gZHJvbWVuLiBFbiAmcnNxdW87cyBhdm9uZHMgZ2luZyBpayBuYWFyIGJlbmVkZW4gb20gZGUgcmVzdGplcyBvcCB0ZSBwZXV6ZWxlbiwgd2FhciBkZSBob25kIG5pZXQgYmlqIGtvbi4gRWVuIGhlZXJsaWprZSBvdWRlIGRhZyBoZWIgaWsgZGFhciBnZWhhZC4gPGJyPjxicj5Ub3QgaWsgb3AgZWVuIG9jaHRlbmQgbmlldCBtZWVyIHdha2tlciB3ZXJkLiA8YnI+PGJyPkphcmVuIGxhdGVyIGhlYmJlbiB6ZSBtaWogZ2V2b25kZW4gaW4gZGUga2FzdCB0dXNzZW4gZGUgb3VkZSBsYXBwZW4uIElrIHdhcyBpbm1pZGRlbHMgaGVsZW1hYWwgdmVyZHJvb2dkIGVuIHplIGhlYmJlbiBtZSBpbiBlZW4gZG9vc2plIGdlZGFhbiBlbiBudSBkb2UgaWsgb3BlZW5zIG1lZSBhYW4gZWVuIGJ1dXJ0cHJvamVjdC4gV2llIGhhZCBkYXQga3VubmVuIGRlbmtlbiwgaWsgaW4gZWxrIGdldmFsIG5pZXQuIE1hYXIgaWsgdmluZCBoZXQgYmVzdCBob29yLCBkaXQgbGV2ZW4gbmEgZGUgZG9vZC48YnI+PGJyPiAKICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyICIgPgo8cD5HZWVmIDxhIGhyZWY9IiN1ciI+amUgcmVhY3RpZTwvYT4gb3AgZGl0IGl0ZW0uPC9wPgogICAgCiAgICAKPGRpdiBjbGFzcz0idWRpdiByb3VuZCI+Cgo8aDIgaWQ9InVyIj48L2gyPgo8Zm9ybSBpZD0iQWRkRm9ybSIgbmFtZT0iQWRkRm9ybSIgbWV0aG9kPSJwb3N0IiBhY3Rpb249Ii9jb21tZW50L2FkZC8iIG9uc3VibWl0PSJyZXR1cm4gY2hlY2tDb21tZW50QWRkRm9ybSgpOyI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bcGFnaW5hXSIgdmFsdWU9IjIwNiI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtoZXRnZXRhbF0iIHZhbHVlPSIxNjI1MzQxNTUyNjc4ODkiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtkYXR1bV0iIHZhbHVlPSIyMDE1LTAzLTI1IDIwOjU0OjUyIj4KCjxwPjxicj5Kb3V3IHJlYWN0aWU6PC9wPgoKPGRpdiBjbGFzcz0iaW5wdXQgdGV4dGFyZWEiPjx0ZXh0YXJlYSBuYW1lPSJkYXRhW0NvbW1lbnRzXVtiZXJpY2h0XSIgY29scz0iMzAiIHJvd3M9IjYiIGlkPSJhZGRmb3JtQmVyaWNodCIgPjwvdGV4dGFyZWE+PC9kaXY+Cgo8cD48YnI+TmFhbTo8L3A+PGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW25hYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybU5hYW0iPjwvZGl2PgoKPHA+PGJyPkFudGktc3BhbSB2cmFhZzogSG9ldmVlbCBpcyB0d2VlIHBsdXMgZHJpZT88L3A+CjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtzcGFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1TcGFtIj4gPHNwYW4gc3R5bGU9ImRpc3BsYXk6bm9uZTtjb2xvcjpyZWQ7Zm9udC13ZWlnaHQ6Ym9sZDttYXJnaW4tbGVmdDoxZW07IiAgaWQ9ImNvbW1zZyI+PC9zcGFuPjwvZGl2Pgo8cCBjbGFzcz0iY2VudGVyIj48YnI+PGlucHV0IGNsYXNzPSJjdGEiIHR5cGU9InN1Ym1pdCIgbmFtZT0ibm9uZSIgdmFsdWU9Ikluc3R1cmVuIj48L3A+Cgo8L2Zvcm0+Cgo8cD48c3Ryb25nPk4uQi48L3N0cm9uZz4gRGUgcmVkYWN0aWUga2FuIGplIGJpamRyYWdlIGFhbnBhc3NlbiBvZiB2ZXJ3aWpkZXJlbi4gSGllcm92ZXIgd29yZHQgbmlldCBnZWNvcnJlc3BvbmRlZXJkLjwvcD4KCgo8L2Rpdj4gICAgPC9kaXY+CgoKPC9hcnRpY2xlPgoKPGFzaWRlPgoKCgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vYmVlbGR0ZWtzdC5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzIwNi8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKDUyLjM3MDIxNTcwMDAsIDQuODk1MTY3OTAwMCk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo1MjQ6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iTXVpemVuaXNzZW4gKGVlbiB0d2VlZGUgbGV2ZW4pIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC9jZS5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8yMDYvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="Muizenissen (een tweede leven)" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/ce.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/206/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/ce.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/ce.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/ce.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        
                                                    - Nederland Amsterdam

                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Muizenissen (een tweede leven)<br></h2>

                                         <audio width="90%" controls><br><br><source src="http://cache.bvstemmen.nl/audio/0/107.mp3" type="audio/mp3"><br><br><source src="http://cache.bvstemmen.nl/audio/0/107.ogg" type="audio/ogg"><br><br></audio><br><br>En zo liep ik weer eens op straat te dwalen. Ik liep langs een kade en het waaide flink, zeg maar gerust het was stormachtig weer. En natuurlijk regende het ook. Ik moest oppassen dat ik niet in dat grote water terecht kwam, want dan kon ik het echt wel vergeten. Dus ik stak de straat over, naar de huizen. Best gevaarlijk ook met al die auto&rsquo;s fietsen voeten, poten enzovoort, maar het lukte. &lsquo;Gl&uuml;ck muss man haben&rsquo; heb ik eens gehoord van een dwaalgast helemaal uit Duitsland en daar had &lsquo;ie gelijk in. <br><br>Hier was het veilig en ik snuffelde wat rond, op zoek naar een geur die me ergens zou brengen waar wat te eten was. Het duurde niet lang of mijn neus pikte iets op. Een heerlijke geur drong zich mijn neus binnen en ik moest er op af. De geur kwam uit een woning op de begane grond en ik drong via het luchtrooster naar binnen. Een pizzeria, dat was echt een feest voor een muis.<br><br>Je begrijpt daar heb ik een hele tijd gebivakkeerd, totdat ik werd verjaagd door een grote zwarte kat met een witte bef en van die scheve groene ogen. Doodsbang was ik voor dat beest. Toen ben ik het maar een paar etages hogerop gaan zoeken, waar het een stuk warmer was en waar ik ook nog wel het &eacute;&eacute;n en ander te eten vond. De vrouw des huizes kookte royaal en met veel passie, waardoor er vaak wat naast het gastfornuis terecht kwam, voor mij en voor de hond&hellip; <br><br>Die had het natuurlijk algauw op mij voorzien dus echt rustig kon ik daar niet zitten en toen ben ik op de zolder gaan wonen. Dat beviel me uitstekend! Ik maakte daar een nest van oude lappen in een kast. Zo&rsquo;n heerlijk holletje waar je de hele dag kan liggen dromen. En &rsquo;s avonds ging ik naar beneden om de restjes op te peuzelen, waar de hond niet bij kon. Een heerlijke oude dag heb ik daar gehad. <br><br>Tot ik op een ochtend niet meer wakker werd. <br><br>Jaren later hebben ze mij gevonden in de kast tussen de oude lappen. Ik was inmiddels helemaal verdroogd en ze hebben me in een doosje gedaan en nu doe ik opeens mee aan een buurtproject. Wie had dat kunnen denken, ik in elk geval niet. Maar ik vind het best hoor, dit leven na de dood.<br><br> 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="206">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 20:54:52">

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
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/206/" data-layout="icon_link"></div></div>

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