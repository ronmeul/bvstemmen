<!--cachetime:1426399856--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjM0NyI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzM0Ny8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzQ3LyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjU4NCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTE5IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzNDciO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTE5IjtzOjc6InRhZ25hbWUiO3M6NjoicmVtaXNlIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIzNDciO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTEyLTAxIDIyOjQ2OjU5IjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjEwOiJIYWxsZW4uanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czo2OiJIYWxsZW4iO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MTA6MjcgMTE6NTg6MTIiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE4NDc6IkluIGphbnVhcmksIGJpam5hIDkgbWFhbmRlbiBnZWxlZGVuLCBkd2FhbGRlbiB3ZSBsYW5ncyBlZW4gYWZicmFha3RlcnJlaW4gd2FhciBhbCB3YXQgd2VyZCBvcGdlYm91d2QuIE9wIGRlIG1lZXN0ZSBwbGVra2VuIHNsYWFuIHplIG51IGRlIGxhYXRzdGUgc3Bpamtlci4NCkhhbGxlbiwgemUgbGlqa2VuIHRlcnVnLiBJbiBSb3R0ZXJkYW0gaXMgaGlqIG5ldCBrbGFhciwgaGV0IGZvb2R3YWxoYWxsYS4gR2VsdWtraWcgaXMgZXIgaW4gUGFyaWpzIGFsIGhlZWwgbGFuZyBkZSBtYXJjaCZlYWN1dGU7IGNvdXZlcnQgU2FpbnQtUXVlbnRpbi4NCklrIHdhcyBpbiBWYW5uZXMsIEJyZXRhZ25lLiBJbiBoZXQgb3VkZSBoYXJ0IHdhcyBlZW4gcHJhY2h0aWcgb3ZlcmRla3RlIG5pZXV3ZSBtYXJrdGhhbCBtZXQgZGUga29vcGx1aSB2YW4gZGUgVGVuIEthdGUgbWFya3QuIEVlbiBzY2hhdCBhYW4gdm9lZHNlbCwgZHJhbmsgIGVuIGFuZGVyZSB3YXJlbi4gTW9kZXJuIGRhayBlbiB0b2NoIGVlbiBhdXRoZW50aWVrIGthcmFrdGVyLCBnZXdvb24uDQpOZWUsIGRlIEhhbGxlbiBiaWVkZW4gdmVlbCwgbWFhciBkZSBzZmVlciBpcyBhbmRlcnMuIA0KVGV2ZWVsIEN1bHR1dXIsIHRlIHdlaW5pZyB2b2xrcz8gSGV0IHppZXQgZXIgdHJlbmR5IHVpdCwgamEsIGRhdCBkZWt0IGRlIGxhZGluZyBhYXJkaWcsIGVuIGhldCBlcmJpaiBob3JlbmRlIHB1YmxpZWsgemFsIGVlbiBib29zdCBnZXZlbiBhYW4gZGUgb21nZXZpbmcuIEVuIHdhYXJvbSBvb2sgbmlldCwgc29vcnRnZWxpamtlIHByb2plY3RlbiB6aWpuIGJlc3QgZ2VzbGFhZ2QgaW4gYW5kZXJlIHdpamtlbiB2YW4gQW1zdGVyZGFtLiBJayB3b29uZGUgamFyZW4gZ2VsZWRlbiBpbiBkZSBTdGFhdHNsaWVkZW5idXVydCwgbWV0IHVpdHppY2h0IG9wIGRlIHJ1Jml1bWw7bmVzIHZhbiBkZSBXZXN0ZXJnYXNmYWJyaWVrLiBFbiB0b2VuIGtsaWt0ZSBpayBvcCBGb29kaGFsbGVuLm5sLCBlbiB2YWwgc3RpbC4NCkRlIFRlbiBLYXRlbWFya3QgZXJpbiBtZXQgaGV0IG91ZGUgV2VzdCwgZGF0IHphbCB2b29yIGRlIHByb2plY3RvbnR3aWtrZWxhYXJzIHRldmVlbCB2YW4gaGV0emVsZmRlIHppam4gZ2V3ZWVzdC4gRGUgbnUgYmVvb2dkZSBzcGluIG9mZiB2YW4gbmlldXdlIGJlem9la2VycyB2dWx0IGRlIGVpZ2VuIHBvcnRlbW9ubmVlLCAmZWFjdXRlO24gaGV0IHphbCBhbCBkaWUgaW5pdGlhdGlldmVuIGhlbWVsc2JyZWVkIGhvbmRlcmQgbWV0ZXIgdmVyZGVyb3AgdGVuIGdvZWRlIGtvbWVuLiBFZW4gcmV0cm9tYXJrdCB2b29yIGRlIEhhbGxlbnRvZXJpc3QuDQpEZSB3ZXJlbGQgYmxpamZ0IG5pZXQgYmlqIGhldCBvdWRlLg0KSGlqIGtpamt0IG5vZyBlZW4ga2VlciBhY2h0ZXIgemljaCwgd2FubmVlciBoaWogZGUgaG9layBvbSBnYWF0IHJpY2h0aW5nIGRlIEtpbmtlcnN0cmFhdC4gSWsgemFsIGhldCB6ZSBuaWV0IHZyYWdlbiwgaGllciBiaWogZWVuIHN0YWxsZXRqZS4gSGV0IGlzIHplIGJlc3QsIHpvbGFuZyBoZXQgYmV0ZXIgZ2FhdC4gSGFuZGVsIGtlbnQgd2VpbmlnIHByaW5jaXBlcy4NCkVuIGluIGRlIEtpbmtlcnN0cmFhdCB6YWwgaGV0IG9uZ2V2ZWVyIGhldHplbGZkZSB6aWpuLCBlZW4gaGVlcmxpamtlIG11bHRpY3VsdHVyZWxlIGFsbGVnYWFyIGluIGVlbiBob2xsYW5kcyBqYXNqZS4gSGV0IGlzIGdvZWQga2Fua2VyZW4gb3AgZGllIG1vZGlldXplIHR5cGVzLCBtZXQgZWVuIGJyb29kamUgd29yc3QgdmFuIGRlIEhFTUEuDQpIZXQgYmxpamZ0IGhpZXIgZWVuIHZvbGtzYnV1cnQsIGFsbGVlbiBuaWV0IHZhbiBoZXQgdm9say4gTmlldXcgT3VkIFdlc3QgZ2x1dXJ0IGFsIG5hYXIgYmlubmVuLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToxO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNjM1IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM0NyI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxMzgiO3M6NzoidGFnbmFtZSI7czoyMjoiT3VkIFdlc3QgaW4gQmVlbGRUZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzQ3IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMi0wMSAyMjo0Njo1OSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxMDoiSGFsbGVuLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6NjoiSGFsbGVuIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjEwOjI3IDExOjU4OjEyIjtzOjExOiJvcG1lcmtpbmdlbiI7czoxODQ3OiJJbiBqYW51YXJpLCBiaWpuYSA5IG1hYW5kZW4gZ2VsZWRlbiwgZHdhYWxkZW4gd2UgbGFuZ3MgZWVuIGFmYnJhYWt0ZXJyZWluIHdhYXIgYWwgd2F0IHdlcmQgb3BnZWJvdXdkLiBPcCBkZSBtZWVzdGUgcGxla2tlbiBzbGFhbiB6ZSBudSBkZSBsYWF0c3RlIHNwaWprZXIuDQpIYWxsZW4sIHplIGxpamtlbiB0ZXJ1Zy4gSW4gUm90dGVyZGFtIGlzIGhpaiBuZXQga2xhYXIsIGhldCBmb29kd2FsaGFsbGEuIEdlbHVra2lnIGlzIGVyIGluIFBhcmlqcyBhbCBoZWVsIGxhbmcgZGUgbWFyY2gmZWFjdXRlOyBjb3V2ZXJ0IFNhaW50LVF1ZW50aW4uDQpJayB3YXMgaW4gVmFubmVzLCBCcmV0YWduZS4gSW4gaGV0IG91ZGUgaGFydCB3YXMgZWVuIHByYWNodGlnIG92ZXJkZWt0ZSBuaWV1d2UgbWFya3RoYWwgbWV0IGRlIGtvb3BsdWkgdmFuIGRlIFRlbiBLYXRlIG1hcmt0LiBFZW4gc2NoYXQgYWFuIHZvZWRzZWwsIGRyYW5rICBlbiBhbmRlcmUgd2FyZW4uIE1vZGVybiBkYWsgZW4gdG9jaCBlZW4gYXV0aGVudGllayBrYXJha3RlciwgZ2V3b29uLg0KTmVlLCBkZSBIYWxsZW4gYmllZGVuIHZlZWwsIG1hYXIgZGUgc2ZlZXIgaXMgYW5kZXJzLiANClRldmVlbCBDdWx0dXVyLCB0ZSB3ZWluaWcgdm9sa3M/IEhldCB6aWV0IGVyIHRyZW5keSB1aXQsIGphLCBkYXQgZGVrdCBkZSBsYWRpbmcgYWFyZGlnLCBlbiBoZXQgZXJiaWogaG9yZW5kZSBwdWJsaWVrIHphbCBlZW4gYm9vc3QgZ2V2ZW4gYWFuIGRlIG9tZ2V2aW5nLiBFbiB3YWFyb20gb29rIG5pZXQsIHNvb3J0Z2VsaWprZSBwcm9qZWN0ZW4gemlqbiBiZXN0IGdlc2xhYWdkIGluIGFuZGVyZSB3aWprZW4gdmFuIEFtc3RlcmRhbS4gSWsgd29vbmRlIGphcmVuIGdlbGVkZW4gaW4gZGUgU3RhYXRzbGllZGVuYnV1cnQsIG1ldCB1aXR6aWNodCBvcCBkZSBydSZpdW1sO25lcyB2YW4gZGUgV2VzdGVyZ2FzZmFicmllay4gRW4gdG9lbiBrbGlrdGUgaWsgb3AgRm9vZGhhbGxlbi5ubCwgZW4gdmFsIHN0aWwuDQpEZSBUZW4gS2F0ZW1hcmt0IGVyaW4gbWV0IGhldCBvdWRlIFdlc3QsIGRhdCB6YWwgdm9vciBkZSBwcm9qZWN0b250d2lra2VsYWFycyB0ZXZlZWwgdmFuIGhldHplbGZkZSB6aWpuIGdld2Vlc3QuIERlIG51IGJlb29nZGUgc3BpbiBvZmYgdmFuIG5pZXV3ZSBiZXpvZWtlcnMgdnVsdCBkZSBlaWdlbiBwb3J0ZW1vbm5lZSwgJmVhY3V0ZTtuIGhldCB6YWwgYWwgZGllIGluaXRpYXRpZXZlbiBoZW1lbHNicmVlZCBob25kZXJkIG1ldGVyIHZlcmRlcm9wIHRlbiBnb2VkZSBrb21lbi4gRWVuIHJldHJvbWFya3Qgdm9vciBkZSBIYWxsZW50b2VyaXN0Lg0KRGUgd2VyZWxkIGJsaWpmdCBuaWV0IGJpaiBoZXQgb3VkZS4NCkhpaiBraWprdCBub2cgZWVuIGtlZXIgYWNodGVyIHppY2gsIHdhbm5lZXIgaGlqIGRlIGhvZWsgb20gZ2FhdCByaWNodGluZyBkZSBLaW5rZXJzdHJhYXQuIElrIHphbCBoZXQgemUgbmlldCB2cmFnZW4sIGhpZXIgYmlqIGVlbiBzdGFsbGV0amUuIEhldCBpcyB6ZSBiZXN0LCB6b2xhbmcgaGV0IGJldGVyIGdhYXQuIEhhbmRlbCBrZW50IHdlaW5pZyBwcmluY2lwZXMuDQpFbiBpbiBkZSBLaW5rZXJzdHJhYXQgemFsIGhldCBvbmdldmVlciBoZXR6ZWxmZGUgemlqbiwgZWVuIGhlZXJsaWprZSBtdWx0aWN1bHR1cmVsZSBhbGxlZ2FhciBpbiBlZW4gaG9sbGFuZHMgamFzamUuIEhldCBpcyBnb2VkIGthbmtlcmVuIG9wIGRpZSBtb2RpZXV6ZSB0eXBlcywgbWV0IGVlbiBicm9vZGplIHdvcnN0IHZhbiBkZSBIRU1BLg0KSGV0IGJsaWpmdCBoaWVyIGVlbiB2b2xrc2J1dXJ0LCBhbGxlZW4gbmlldCB2YW4gaGV0IHZvbGsuIE5pZXV3IE91ZCBXZXN0IGdsdXVydCBhbCBuYWFyIGJpbm5lbi4NCiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9fWk6MjthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6Ijc2NSI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTk1IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzNDciO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTk1IjtzOjc6InRhZ25hbWUiO3M6MTA6ImJlZWxkdGVrc3QiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM0NyI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTItMDEgMjI6NDY6NTkiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTA6IkhhbGxlbi5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI4NyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjY6IkhhbGxlbiI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDoxMDoyNyAxMTo1ODoxMiI7czoxMToib3BtZXJraW5nZW4iO3M6MTg0NzoiSW4gamFudWFyaSwgYmlqbmEgOSBtYWFuZGVuIGdlbGVkZW4sIGR3YWFsZGVuIHdlIGxhbmdzIGVlbiBhZmJyYWFrdGVycmVpbiB3YWFyIGFsIHdhdCB3ZXJkIG9wZ2Vib3V3ZC4gT3AgZGUgbWVlc3RlIHBsZWtrZW4gc2xhYW4gemUgbnUgZGUgbGFhdHN0ZSBzcGlqa2VyLg0KSGFsbGVuLCB6ZSBsaWprZW4gdGVydWcuIEluIFJvdHRlcmRhbSBpcyBoaWogbmV0IGtsYWFyLCBoZXQgZm9vZHdhbGhhbGxhLiBHZWx1a2tpZyBpcyBlciBpbiBQYXJpanMgYWwgaGVlbCBsYW5nIGRlIG1hcmNoJmVhY3V0ZTsgY291dmVydCBTYWludC1RdWVudGluLg0KSWsgd2FzIGluIFZhbm5lcywgQnJldGFnbmUuIEluIGhldCBvdWRlIGhhcnQgd2FzIGVlbiBwcmFjaHRpZyBvdmVyZGVrdGUgbmlldXdlIG1hcmt0aGFsIG1ldCBkZSBrb29wbHVpIHZhbiBkZSBUZW4gS2F0ZSBtYXJrdC4gRWVuIHNjaGF0IGFhbiB2b2Vkc2VsLCBkcmFuayAgZW4gYW5kZXJlIHdhcmVuLiBNb2Rlcm4gZGFrIGVuIHRvY2ggZWVuIGF1dGhlbnRpZWsga2FyYWt0ZXIsIGdld29vbi4NCk5lZSwgZGUgSGFsbGVuIGJpZWRlbiB2ZWVsLCBtYWFyIGRlIHNmZWVyIGlzIGFuZGVycy4gDQpUZXZlZWwgQ3VsdHV1ciwgdGUgd2VpbmlnIHZvbGtzPyBIZXQgemlldCBlciB0cmVuZHkgdWl0LCBqYSwgZGF0IGRla3QgZGUgbGFkaW5nIGFhcmRpZywgZW4gaGV0IGVyYmlqIGhvcmVuZGUgcHVibGllayB6YWwgZWVuIGJvb3N0IGdldmVuIGFhbiBkZSBvbWdldmluZy4gRW4gd2Fhcm9tIG9vayBuaWV0LCBzb29ydGdlbGlqa2UgcHJvamVjdGVuIHppam4gYmVzdCBnZXNsYWFnZCBpbiBhbmRlcmUgd2lqa2VuIHZhbiBBbXN0ZXJkYW0uIElrIHdvb25kZSBqYXJlbiBnZWxlZGVuIGluIGRlIFN0YWF0c2xpZWRlbmJ1dXJ0LCBtZXQgdWl0emljaHQgb3AgZGUgcnUmaXVtbDtuZXMgdmFuIGRlIFdlc3Rlcmdhc2ZhYnJpZWsuIEVuIHRvZW4ga2xpa3RlIGlrIG9wIEZvb2RoYWxsZW4ubmwsIGVuIHZhbCBzdGlsLg0KRGUgVGVuIEthdGVtYXJrdCBlcmluIG1ldCBoZXQgb3VkZSBXZXN0LCBkYXQgemFsIHZvb3IgZGUgcHJvamVjdG9udHdpa2tlbGFhcnMgdGV2ZWVsIHZhbiBoZXR6ZWxmZGUgemlqbiBnZXdlZXN0LiBEZSBudSBiZW9vZ2RlIHNwaW4gb2ZmIHZhbiBuaWV1d2UgYmV6b2VrZXJzIHZ1bHQgZGUgZWlnZW4gcG9ydGVtb25uZWUsICZlYWN1dGU7biBoZXQgemFsIGFsIGRpZSBpbml0aWF0aWV2ZW4gaGVtZWxzYnJlZWQgaG9uZGVyZCBtZXRlciB2ZXJkZXJvcCB0ZW4gZ29lZGUga29tZW4uIEVlbiByZXRyb21hcmt0IHZvb3IgZGUgSGFsbGVudG9lcmlzdC4NCkRlIHdlcmVsZCBibGlqZnQgbmlldCBiaWogaGV0IG91ZGUuDQpIaWoga2lqa3Qgbm9nIGVlbiBrZWVyIGFjaHRlciB6aWNoLCB3YW5uZWVyIGhpaiBkZSBob2VrIG9tIGdhYXQgcmljaHRpbmcgZGUgS2lua2Vyc3RyYWF0LiBJayB6YWwgaGV0IHplIG5pZXQgdnJhZ2VuLCBoaWVyIGJpaiBlZW4gc3RhbGxldGplLiBIZXQgaXMgemUgYmVzdCwgem9sYW5nIGhldCBiZXRlciBnYWF0LiBIYW5kZWwga2VudCB3ZWluaWcgcHJpbmNpcGVzLg0KRW4gaW4gZGUgS2lua2Vyc3RyYWF0IHphbCBoZXQgb25nZXZlZXIgaGV0emVsZmRlIHppam4sIGVlbiBoZWVybGlqa2UgbXVsdGljdWx0dXJlbGUgYWxsZWdhYXIgaW4gZWVuIGhvbGxhbmRzIGphc2plLiBIZXQgaXMgZ29lZCBrYW5rZXJlbiBvcCBkaWUgbW9kaWV1emUgdHlwZXMsIG1ldCBlZW4gYnJvb2RqZSB3b3JzdCB2YW4gZGUgSEVNQS4NCkhldCBibGlqZnQgaGllciBlZW4gdm9sa3NidXVydCwgYWxsZWVuIG5pZXQgdmFuIGhldCB2b2xrLiBOaWV1dyBPdWQgV2VzdCBnbHV1cnQgYWwgbmFhciBiaW5uZW4uDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX19czo0OiJkYXRhIjthOjU6e3M6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzQ3IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMi0wMSAyMjo0Njo1OSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxMDoiSGFsbGVuLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6NjoiSGFsbGVuIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjEwOjI3IDExOjU4OjEyIjtzOjExOiJvcG1lcmtpbmdlbiI7czoxODQ3OiJJbiBqYW51YXJpLCBiaWpuYSA5IG1hYW5kZW4gZ2VsZWRlbiwgZHdhYWxkZW4gd2UgbGFuZ3MgZWVuIGFmYnJhYWt0ZXJyZWluIHdhYXIgYWwgd2F0IHdlcmQgb3BnZWJvdXdkLiBPcCBkZSBtZWVzdGUgcGxla2tlbiBzbGFhbiB6ZSBudSBkZSBsYWF0c3RlIHNwaWprZXIuDQpIYWxsZW4sIHplIGxpamtlbiB0ZXJ1Zy4gSW4gUm90dGVyZGFtIGlzIGhpaiBuZXQga2xhYXIsIGhldCBmb29kd2FsaGFsbGEuIEdlbHVra2lnIGlzIGVyIGluIFBhcmlqcyBhbCBoZWVsIGxhbmcgZGUgbWFyY2gmZWFjdXRlOyBjb3V2ZXJ0IFNhaW50LVF1ZW50aW4uDQpJayB3YXMgaW4gVmFubmVzLCBCcmV0YWduZS4gSW4gaGV0IG91ZGUgaGFydCB3YXMgZWVuIHByYWNodGlnIG92ZXJkZWt0ZSBuaWV1d2UgbWFya3RoYWwgbWV0IGRlIGtvb3BsdWkgdmFuIGRlIFRlbiBLYXRlIG1hcmt0LiBFZW4gc2NoYXQgYWFuIHZvZWRzZWwsIGRyYW5rICBlbiBhbmRlcmUgd2FyZW4uIE1vZGVybiBkYWsgZW4gdG9jaCBlZW4gYXV0aGVudGllayBrYXJha3RlciwgZ2V3b29uLg0KTmVlLCBkZSBIYWxsZW4gYmllZGVuIHZlZWwsIG1hYXIgZGUgc2ZlZXIgaXMgYW5kZXJzLiANClRldmVlbCBDdWx0dXVyLCB0ZSB3ZWluaWcgdm9sa3M/IEhldCB6aWV0IGVyIHRyZW5keSB1aXQsIGphLCBkYXQgZGVrdCBkZSBsYWRpbmcgYWFyZGlnLCBlbiBoZXQgZXJiaWogaG9yZW5kZSBwdWJsaWVrIHphbCBlZW4gYm9vc3QgZ2V2ZW4gYWFuIGRlIG9tZ2V2aW5nLiBFbiB3YWFyb20gb29rIG5pZXQsIHNvb3J0Z2VsaWprZSBwcm9qZWN0ZW4gemlqbiBiZXN0IGdlc2xhYWdkIGluIGFuZGVyZSB3aWprZW4gdmFuIEFtc3RlcmRhbS4gSWsgd29vbmRlIGphcmVuIGdlbGVkZW4gaW4gZGUgU3RhYXRzbGllZGVuYnV1cnQsIG1ldCB1aXR6aWNodCBvcCBkZSBydSZpdW1sO25lcyB2YW4gZGUgV2VzdGVyZ2FzZmFicmllay4gRW4gdG9lbiBrbGlrdGUgaWsgb3AgRm9vZGhhbGxlbi5ubCwgZW4gdmFsIHN0aWwuDQpEZSBUZW4gS2F0ZW1hcmt0IGVyaW4gbWV0IGhldCBvdWRlIFdlc3QsIGRhdCB6YWwgdm9vciBkZSBwcm9qZWN0b250d2lra2VsYWFycyB0ZXZlZWwgdmFuIGhldHplbGZkZSB6aWpuIGdld2Vlc3QuIERlIG51IGJlb29nZGUgc3BpbiBvZmYgdmFuIG5pZXV3ZSBiZXpvZWtlcnMgdnVsdCBkZSBlaWdlbiBwb3J0ZW1vbm5lZSwgJmVhY3V0ZTtuIGhldCB6YWwgYWwgZGllIGluaXRpYXRpZXZlbiBoZW1lbHNicmVlZCBob25kZXJkIG1ldGVyIHZlcmRlcm9wIHRlbiBnb2VkZSBrb21lbi4gRWVuIHJldHJvbWFya3Qgdm9vciBkZSBIYWxsZW50b2VyaXN0Lg0KRGUgd2VyZWxkIGJsaWpmdCBuaWV0IGJpaiBoZXQgb3VkZS4NCkhpaiBraWprdCBub2cgZWVuIGtlZXIgYWNodGVyIHppY2gsIHdhbm5lZXIgaGlqIGRlIGhvZWsgb20gZ2FhdCByaWNodGluZyBkZSBLaW5rZXJzdHJhYXQuIElrIHphbCBoZXQgemUgbmlldCB2cmFnZW4sIGhpZXIgYmlqIGVlbiBzdGFsbGV0amUuIEhldCBpcyB6ZSBiZXN0LCB6b2xhbmcgaGV0IGJldGVyIGdhYXQuIEhhbmRlbCBrZW50IHdlaW5pZyBwcmluY2lwZXMuDQpFbiBpbiBkZSBLaW5rZXJzdHJhYXQgemFsIGhldCBvbmdldmVlciBoZXR6ZWxmZGUgemlqbiwgZWVuIGhlZXJsaWprZSBtdWx0aWN1bHR1cmVsZSBhbGxlZ2FhciBpbiBlZW4gaG9sbGFuZHMgamFzamUuIEhldCBpcyBnb2VkIGthbmtlcmVuIG9wIGRpZSBtb2RpZXV6ZSB0eXBlcywgbWV0IGVlbiBicm9vZGplIHdvcnN0IHZhbiBkZSBIRU1BLg0KSGV0IGJsaWpmdCBoaWVyIGVlbiB2b2xrc2J1dXJ0LCBhbGxlZW4gbmlldCB2YW4gaGV0IHZvbGsuIE5pZXV3IE91ZCBXZXN0IGdsdXVydCBhbCBuYWFyIGJpbm5lbi4NCiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiODciO3M6ODoidXNlcm5hbWUiO3M6MjY6ImphYXBob29ndGVpamxpbmdAeHM0YWxsLm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6NDoibmFhbSI7czozMzoiTWFydGlqbiBCYXJ0aCAmIEphYXAgSG9vZ3RlaWpsaW5nIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjQyIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM0NyI7czoxMjoicmVsYXRpZXNvb3J0IjtzOjU6Im1ha2VyIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIzNDciO3M6OToib2JqZWN0X2lkIjtzOjM6IjE5OCI7czoyOiJpZCI7czozOiIzNDUiO319czo0OiJUYWdzIjthOjM6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiNTg0IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMTkiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM0NyI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiNjM1IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM0NyI7fWk6MjthOjQ6e3M6MjoiaWQiO3M6MzoiNzY1IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM0NyI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czozOiIyMjgiO3M6MzoibGF0IjtzOjEzOiI1Mi4zNjY4NjA5MjMyIjtzOjM6ImxvbiI7czoxMjoiNC44NjgxODc5MDQ0Ijt9czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO2E6MTp7aTowO2E6Mzp7czoxMToibG9jYXRpb25faWQiO3M6MzoiMjI4IjtzOjk6Im9iamVjdF9pZCI7czozOiIxOTgiO3M6MjoiaWQiO3M6MzoiMTk4Ijt9fXM6MzoiQWRyIjthOjA6e319czo1OiJhZHJlcyI7YTowOnt9czo1OiJtYWtlciI7YToxOntzOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiI4NyI7czo4OiJ1c2VybmFtZSI7czoyNjoiamFhcGhvb2d0ZWlqbGluZ0B4czRhbGwubmwiO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0xMC0yNSAwMDowOToyOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0xMC0yNSAwMDowOToyOCI7czo0OiJuYWFtIjtzOjMzOiJNYXJ0aWpuIEJhcnRoICYgSmFhcCBIb29ndGVpamxpbmciO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO319czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czo0MzoiU3RyYWF0YmVlbGQgdmFuIGRlIGJ1dXJ0IGluIGtvcnRlIGZpbG1wamVzLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo2Mjg3OiI8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyICI+CiAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciA0MCBzZWNvbmRlbjwvYT4gPC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wLzE1Yi5qcGciICBvbmNsaWNrPSJwb3B1cGltZygnLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nJywgJzAvMTViLmpwZycpOyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBvbmxvYWRmaXhpbWcoKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBteWVsID0gJCgiYjMiKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgaW1nZWwgPSAkKCJ0aGVpbWciKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbWggPSBteWVsLmNsaWVudEhlaWdodDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgdGggPSBtaCAtIDI4MDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5oZWlnaHQgPSB0aDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbWdlbC5zcmMgPSAiLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL2giICsgdGggKyAiLzAvMTViLmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icGVyc29uIj5NYXJ0aWpuIEJhcnRoICYgSmFhcCBIb29ndGVpamxpbmc8L3NwYW4+CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPm9rdG9iZXIgMjAxNAogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPkhhbGxlbjxicj48L2gyPgoKICAgICAgICAgSW4gamFudWFyaSwgYmlqbmEgOSBtYWFuZGVuIGdlbGVkZW4sIGR3YWFsZGVuIHdlIGxhbmdzIGVlbiBhZmJyYWFrdGVycmVpbiB3YWFyIGFsIHdhdCB3ZXJkIG9wZ2Vib3V3ZC4gT3AgZGUgbWVlc3RlIHBsZWtrZW4gc2xhYW4gemUgbnUgZGUgbGFhdHN0ZSBzcGlqa2VyLjxicj48YnI+SGFsbGVuLCB6ZSBsaWprZW4gdGVydWcuIEluIFJvdHRlcmRhbSBpcyBoaWogbmV0IGtsYWFyLCBoZXQgZm9vZHdhbGhhbGxhLiBHZWx1a2tpZyBpcyBlciBpbiBQYXJpanMgYWwgaGVlbCBsYW5nIGRlIG1hcmNoJmVhY3V0ZTsgY291dmVydCBTYWludC1RdWVudGluLjxicj48YnI+SWsgd2FzIGluIFZhbm5lcywgQnJldGFnbmUuIEluIGhldCBvdWRlIGhhcnQgd2FzIGVlbiBwcmFjaHRpZyBvdmVyZGVrdGUgbmlldXdlIG1hcmt0aGFsIG1ldCBkZSBrb29wbHVpIHZhbiBkZSBUZW4gS2F0ZSBtYXJrdC4gRWVuIHNjaGF0IGFhbiB2b2Vkc2VsLCBkcmFuayAgZW4gYW5kZXJlIHdhcmVuLiBNb2Rlcm4gZGFrIGVuIHRvY2ggZWVuIGF1dGhlbnRpZWsga2FyYWt0ZXIsIGdld29vbi48YnI+PGJyPk5lZSwgZGUgSGFsbGVuIGJpZWRlbiB2ZWVsLCBtYWFyIGRlIHNmZWVyIGlzIGFuZGVycy4gPGJyPjxicj5UZXZlZWwgQ3VsdHV1ciwgdGUgd2VpbmlnIHZvbGtzPyBIZXQgemlldCBlciB0cmVuZHkgdWl0LCBqYSwgZGF0IGRla3QgZGUgbGFkaW5nIGFhcmRpZywgZW4gaGV0IGVyYmlqIGhvcmVuZGUgcHVibGllayB6YWwgZWVuIGJvb3N0IGdldmVuIGFhbiBkZSBvbWdldmluZy4gRW4gd2Fhcm9tIG9vayBuaWV0LCBzb29ydGdlbGlqa2UgcHJvamVjdGVuIHppam4gYmVzdCBnZXNsYWFnZCBpbiBhbmRlcmUgd2lqa2VuIHZhbiBBbXN0ZXJkYW0uIElrIHdvb25kZSBqYXJlbiBnZWxlZGVuIGluIGRlIFN0YWF0c2xpZWRlbmJ1dXJ0LCBtZXQgdWl0emljaHQgb3AgZGUgcnUmaXVtbDtuZXMgdmFuIGRlIFdlc3Rlcmdhc2ZhYnJpZWsuIEVuIHRvZW4ga2xpa3RlIGlrIG9wIEZvb2RoYWxsZW4ubmwsIGVuIHZhbCBzdGlsLjxicj48YnI+RGUgVGVuIEthdGVtYXJrdCBlcmluIG1ldCBoZXQgb3VkZSBXZXN0LCBkYXQgemFsIHZvb3IgZGUgcHJvamVjdG9udHdpa2tlbGFhcnMgdGV2ZWVsIHZhbiBoZXR6ZWxmZGUgemlqbiBnZXdlZXN0LiBEZSBudSBiZW9vZ2RlIHNwaW4gb2ZmIHZhbiBuaWV1d2UgYmV6b2VrZXJzIHZ1bHQgZGUgZWlnZW4gcG9ydGVtb25uZWUsICZlYWN1dGU7biBoZXQgemFsIGFsIGRpZSBpbml0aWF0aWV2ZW4gaGVtZWxzYnJlZWQgaG9uZGVyZCBtZXRlciB2ZXJkZXJvcCB0ZW4gZ29lZGUga29tZW4uIEVlbiByZXRyb21hcmt0IHZvb3IgZGUgSGFsbGVudG9lcmlzdC48YnI+PGJyPkRlIHdlcmVsZCBibGlqZnQgbmlldCBiaWogaGV0IG91ZGUuPGJyPjxicj5IaWoga2lqa3Qgbm9nIGVlbiBrZWVyIGFjaHRlciB6aWNoLCB3YW5uZWVyIGhpaiBkZSBob2VrIG9tIGdhYXQgcmljaHRpbmcgZGUgS2lua2Vyc3RyYWF0LiBJayB6YWwgaGV0IHplIG5pZXQgdnJhZ2VuLCBoaWVyIGJpaiBlZW4gc3RhbGxldGplLiBIZXQgaXMgemUgYmVzdCwgem9sYW5nIGhldCBiZXRlciBnYWF0LiBIYW5kZWwga2VudCB3ZWluaWcgcHJpbmNpcGVzLjxicj48YnI+RW4gaW4gZGUgS2lua2Vyc3RyYWF0IHphbCBoZXQgb25nZXZlZXIgaGV0emVsZmRlIHppam4sIGVlbiBoZWVybGlqa2UgbXVsdGljdWx0dXJlbGUgYWxsZWdhYXIgaW4gZWVuIGhvbGxhbmRzIGphc2plLiBIZXQgaXMgZ29lZCBrYW5rZXJlbiBvcCBkaWUgbW9kaWV1emUgdHlwZXMsIG1ldCBlZW4gYnJvb2RqZSB3b3JzdCB2YW4gZGUgSEVNQS48YnI+PGJyPkhldCBibGlqZnQgaGllciBlZW4gdm9sa3NidXVydCwgYWxsZWVuIG5pZXQgdmFuIGhldCB2b2xrLiBOaWV1dyBPdWQgV2VzdCBnbHV1cnQgYWwgbmFhciBiaW5uZW4uPGJyPjxicj4gCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIzNDciPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0xNSAwNjoxMDo1NiI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgo8ZGl2IGNsYXNzPSJwYXBlciI+PGEgaHJlZj0iL21lZGlhL3RhZy8xMTkvIiBjbGFzcz0ibGFiZWwiPiNyZW1pc2U8L2E+IDxhIGhyZWY9Ii9tZWRpYS90YWcvMTM4LyIgY2xhc3M9ImxhYmVsIj4jT3VkIFdlc3QgaW4gQmVlbGRUZWtzdDwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy8xOTUvIiBjbGFzcz0ibGFiZWwiPiNiZWVsZHRla3N0PC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMzQ3KTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzQ3LyIgZGF0YS1sYXlvdXQ9Imljb25fbGluayI+PC9kaXY+PC9kaXY+Cgo8L2FzaWRlPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgZnVuY3Rpb24gc2V0cGluKCkKICAgIHsKICAgICAgICB2YXIgbGxsID0gTC5sYXRMbmcoNTIuMzY2ODYwOTIzMiwgNC44NjgxODc5MDQ0KTsKICAgICAgICBtYXAuc2V0VmlldyhsbGwsIDE3KTsKCiAgICAgICAgUG9zSWNvbiA9IG5ldyBMLkljb24oe2ljb25Vcmw6ICIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL21hcmtlci5wbmciLCBpY29uU2l6ZTogWzIyLCA0Ml0sIGljb25BbmNob3I6IFsxMSwgNDJdfSk7CiAgICAgICAgUG9zTWFyayA9IG5ldyBMLm1hcmtlcihsbGwsIHtpY29uOiBQb3NJY29uLCBkcmFnZ2FibGU6IGZhbHNlfSkuYWRkVG8obWFwKTsKCiAgICAgICAgbWFwLnRvdWNoWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmRvdWJsZUNsaWNrWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLnNjcm9sbFdoZWVsWm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmJveFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5rZXlib2FyZC5kaXNhYmxlKCk7CiAgICB9Cgo8L3NjcmlwdD4KPHN0eWxlPi5sZWFmbGV0LWNvbnRyb2wtem9vbXtkaXNwbGF5Om5vbmU7fTwvc3R5bGU+CjxkaXYgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIGlkPSJpbWdlbmwiIGNsYXNzPSJpbWdlbmwiIG9uY2xpY2s9IiQoJ2ltZ2VubCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Ij4KICAgIDxpbWcgaWQ9ImltZW5pIiBjbGFzcz0iaW1lbmkiIHNyYz0iIiBhbHQ9IiI+CjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjQ5NjoiPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJIYWxsZW4iIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wLzE1Yi5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzQ3LyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
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
<meta property="og:title" content="Hallen" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/15b.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/347/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/15b.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/15b.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/15b.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Martijn Barth & Jaap Hoogteijling</span>
                        
                            <br>oktober 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Hallen<br></h2>

         In januari, bijna 9 maanden geleden, dwaalden we langs een afbraakterrein waar al wat werd opgebouwd. Op de meeste plekken slaan ze nu de laatste spijker.<br><br>Hallen, ze lijken terug. In Rotterdam is hij net klaar, het foodwalhalla. Gelukkig is er in Parijs al heel lang de march&eacute; couvert Saint-Quentin.<br><br>Ik was in Vannes, Bretagne. In het oude hart was een prachtig overdekte nieuwe markthal met de kooplui van de Ten Kate markt. Een schat aan voedsel, drank  en andere waren. Modern dak en toch een authentiek karakter, gewoon.<br><br>Nee, de Hallen bieden veel, maar de sfeer is anders. <br><br>Teveel Cultuur, te weinig volks? Het ziet er trendy uit, ja, dat dekt de lading aardig, en het erbij horende publiek zal een boost geven aan de omgeving. En waarom ook niet, soortgelijke projecten zijn best geslaagd in andere wijken van Amsterdam. Ik woonde jaren geleden in de Staatsliedenbuurt, met uitzicht op de ru&iuml;nes van de Westergasfabriek. En toen klikte ik op Foodhallen.nl, en val stil.<br><br>De Ten Katemarkt erin met het oude West, dat zal voor de projectontwikkelaars teveel van hetzelfde zijn geweest. De nu beoogde spin off van nieuwe bezoekers vult de eigen portemonnee, &eacute;n het zal al die initiatieven hemelsbreed honderd meter verderop ten goede komen. Een retromarkt voor de Hallentoerist.<br><br>De wereld blijft niet bij het oude.<br><br>Hij kijkt nog een keer achter zich, wanneer hij de hoek om gaat richting de Kinkerstraat. Ik zal het ze niet vragen, hier bij een stalletje. Het is ze best, zolang het beter gaat. Handel kent weinig principes.<br><br>En in de Kinkerstraat zal het ongeveer hetzelfde zijn, een heerlijke multiculturele allegaar in een hollands jasje. Het is goed kankeren op die modieuze types, met een broodje worst van de HEMA.<br><br>Het blijft hier een volksbuurt, alleen niet van het volk. Nieuw Oud West gluurt al naar binnen.<br><br> 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="347">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-15 06:10:56">

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


<div class="paper"><a href="/media/tag/119/" class="label">#remise</a> <a href="/media/tag/138/" class="label">#Oud West in BeeldTekst</a> <a href="/media/tag/195/" class="label">#beeldtekst</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,347);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/347/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3668609232, 4.8681879044);
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