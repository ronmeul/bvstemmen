<!--cachetime:1427316712--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjM0OSI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzM0OS8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzQ5LyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6Ijc1NCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTk1IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzNDkiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTk1IjtzOjc6InRhZ25hbWUiO3M6MTA6ImJlZWxkdGVrc3QiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM0OSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTItMDEgMjI6NTQ6MTkiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTA6Ik1lbmVlci5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI4NyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjY6Ik1lbmVlciI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDoxMDoyNyAxMjoxNzoxNyI7czoxMToib3BtZXJraW5nZW4iO3M6MTY0NzoiTWVuZWVyIHppZXQgZXIgam9uZ2VyIHVpdCBvcCBkZSBmb3RvLg0KSG9layBXZW5zbGF1ZXJzdHJhYXQgVGVuIEthdGVtYXJrdCBiZWdpbiBub3ZlbWJlciwgemFjaHQgd2Vlci4gVG9jaCBtYWFyIHdlbCBkZSBqYXMgZGljaHQuDQpNZW5lZXIga3dhbSBvbSBkZSBob2VrIGdlcmVkZW4gbWV0IHppam4gc2Nvb3Rtb2JpZWwsIGVuIHN0b3B0ZSBoaWVyLiBNYWFuZGFnbW9yZ2VuIGlzIG9wIGRpdCBzdHVramUgbWFya3QgbmF1d2VsaWprcyB3YXQgdGUgZG9lbi4gV2lqIGxpZXBlbiBub2cgaW4gZGUgV2VzbGF1ZXJzdHJhYXQsIHRvZW4gaGlqIHpvIGZvdG9nZW5pZWsgc3RvcHRlLiBNIHZlcnNuZWx0IHppam4gcGFzLiBab2FscyBtZW5lZXIgZGFhciBiZXppZyBpcywgbWV0IGRlIGJhZ2FnZSBpbiBoZXQgcmVrLCBlbiBtZXQgemlqbiBrbGVkaW5nIGVuIGhhYXIuIEVuIGluIGRhdCBkZWNvci4NCk5ldCBhbHNvZiBoaWogZWVuIHZlcndhYWlkZSBpbmRydWsgd2lsZGUgcmVjaHRzdHJpamtlbiwgdm9vciBoaWogZXJnZW5zIG9wIGJlem9layBtb2VzdCAmbmRhc2g7IGFsIHdhcyBoZXQgb3VkZXJ3ZXRzIGRlIG1hcmt0LCBvcCB1aXRnYWFuIGtsZWVkIGplIGplLg0KTWVuZWVyIGxlZWsgZGFuIHdlbCBvdWQsIGVuIHdhdCBnZWJyZWtraWcuIERlIG1vYmllbCBtYWFrdCB6byZyc3F1bztuIGluZHJ1ay4NCkhpaiBoYWQgbWV0ZWVuIGRvb3Igd2F0IE0gd2lsZGUgJmhlbGxpcDsgZW4gemVpIGlldHMgZ2V2YXRzLCBrb3J0IG1hYXIga3JhY2h0aWcuIFRlIHZlciB3ZWcsIGlrIGhvb3JkZSBoZXQgbmlldCwgbWFhciBkZSBzdHJla2tpbmcgd2FzIGR1aWRlbGlqay4gSWV0d2F0IGJldHJhcHQgZ2xpbWxhY2h0IE0gYmVsZWVmZCwgZGVuayBpayBkb29yIHppam4gcnVnIGhlZW4gdGUgemllbi4gSGlqIGthbiB6b2lldHMgemVrZXIgd2FhcmRlcmVuLiBNYWFyIE0gbGFhdCBlZW4gZm90b2thbnMgbmlldCB6b21hYXIgZ2xpcHBlbi4gSGlqIHplZ3QgaWV0cyB0ZXJ1ZyBhbHMgJmxzcXVvO1Ugc3RhYXQgZGFhciB6byBtb29pJnJzcXVvOy4NCk1lbmVlciBoYWQgZ2VlbiBiZXp3YWFyICZuZGFzaDsgTSBrb24gaGVtIGZvdG9ncmFmZXJlbiAmbmRhc2g7IGVuIGdpbmcgb252ZXJzdG9vcmJhYXIgZG9vciB3YWFybWVlIGhpaiBiZXppZyB3YXMuIEhldCBtYWFrdCBoZW0gbmlldCB1aXQgb2YgZGUgd2VyZWxkIG9wIHomcnNxdW87biBrb3Agc3RhYXQsIGRhdCBoZWVmdCBoaWogYWwgdmFhayBnZW5vZWcgbWVlZ2VtYWFrdCwgem9pZXRzLiBIaWogd2FzIGhpZXIgdm9vciB6JnJzcXVvO24gcGxlemllciwgZW4gZGF0IHdpbCBoaWogZ3JhYWcgZGVsZW4uDQpabyBibGlqZnQgaGV0IGJlZWxkIHNwb250YWFuLiANClplIHNwcmFrZW4gbm9nIGV2ZW4sIHdhbnQgbWVuZWVyIHdhcyB3ZWwgbmlldXdzZ2llcmlnIHdhYXJ2b29yIGhldCBhbGxlbWFhbCBpcy4gRW4gTSBtYWFrdCByZWNsYW1lIHZvb3IgQnV1cnR2b2xzdGVtbWVuLiBCZW5pZXV3ZCBvZiBtZW5lZXIgZWVuIGtlZXIga2lqa3QsIGhldCBsZXVrIHphbCB2aW5kZW4gaG9lIHppam4gYnV1cnQgdWl0IGRlIHZpcnR1ZWxlIHZlcmYga29tdCwgZW4gbWlzc2NoaWVuIGxlZXN0IGhpaiBkaXQuIA0KRWVuIHZyaWVuZGVsaWprZSBncm9ldCBkdXMsIGJpaiBkZXplLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToxO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNTg5IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM0OSI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxMzgiO3M6NzoidGFnbmFtZSI7czoyMjoiT3VkIFdlc3QgaW4gQmVlbGRUZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzQ5IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0xMi0wMSAyMjo1NDoxOSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxMDoiTWVuZWVyLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6NjoiTWVuZWVyIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjEwOjI3IDEyOjE3OjE3IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjQ3OiJNZW5lZXIgemlldCBlciBqb25nZXIgdWl0IG9wIGRlIGZvdG8uDQpIb2VrIFdlbnNsYXVlcnN0cmFhdCBUZW4gS2F0ZW1hcmt0IGJlZ2luIG5vdmVtYmVyLCB6YWNodCB3ZWVyLiBUb2NoIG1hYXIgd2VsIGRlIGphcyBkaWNodC4NCk1lbmVlciBrd2FtIG9tIGRlIGhvZWsgZ2VyZWRlbiBtZXQgemlqbiBzY29vdG1vYmllbCwgZW4gc3RvcHRlIGhpZXIuIE1hYW5kYWdtb3JnZW4gaXMgb3AgZGl0IHN0dWtqZSBtYXJrdCBuYXV3ZWxpamtzIHdhdCB0ZSBkb2VuLiBXaWogbGllcGVuIG5vZyBpbiBkZSBXZXNsYXVlcnN0cmFhdCwgdG9lbiBoaWogem8gZm90b2dlbmllayBzdG9wdGUuIE0gdmVyc25lbHQgemlqbiBwYXMuIFpvYWxzIG1lbmVlciBkYWFyIGJlemlnIGlzLCBtZXQgZGUgYmFnYWdlIGluIGhldCByZWssIGVuIG1ldCB6aWpuIGtsZWRpbmcgZW4gaGFhci4gRW4gaW4gZGF0IGRlY29yLg0KTmV0IGFsc29mIGhpaiBlZW4gdmVyd2FhaWRlIGluZHJ1ayB3aWxkZSByZWNodHN0cmlqa2VuLCB2b29yIGhpaiBlcmdlbnMgb3AgYmV6b2VrIG1vZXN0ICZuZGFzaDsgYWwgd2FzIGhldCBvdWRlcndldHMgZGUgbWFya3QsIG9wIHVpdGdhYW4ga2xlZWQgamUgamUuDQpNZW5lZXIgbGVlayBkYW4gd2VsIG91ZCwgZW4gd2F0IGdlYnJla2tpZy4gRGUgbW9iaWVsIG1hYWt0IHpvJnJzcXVvO24gaW5kcnVrLg0KSGlqIGhhZCBtZXRlZW4gZG9vciB3YXQgTSB3aWxkZSAmaGVsbGlwOyBlbiB6ZWkgaWV0cyBnZXZhdHMsIGtvcnQgbWFhciBrcmFjaHRpZy4gVGUgdmVyIHdlZywgaWsgaG9vcmRlIGhldCBuaWV0LCBtYWFyIGRlIHN0cmVra2luZyB3YXMgZHVpZGVsaWprLiBJZXR3YXQgYmV0cmFwdCBnbGltbGFjaHQgTSBiZWxlZWZkLCBkZW5rIGlrIGRvb3IgemlqbiBydWcgaGVlbiB0ZSB6aWVuLiBIaWoga2FuIHpvaWV0cyB6ZWtlciB3YWFyZGVyZW4uIE1hYXIgTSBsYWF0IGVlbiBmb3Rva2FucyBuaWV0IHpvbWFhciBnbGlwcGVuLiBIaWogemVndCBpZXRzIHRlcnVnIGFscyAmbHNxdW87VSBzdGFhdCBkYWFyIHpvIG1vb2kmcnNxdW87Lg0KTWVuZWVyIGhhZCBnZWVuIGJlendhYXIgJm5kYXNoOyBNIGtvbiBoZW0gZm90b2dyYWZlcmVuICZuZGFzaDsgZW4gZ2luZyBvbnZlcnN0b29yYmFhciBkb29yIHdhYXJtZWUgaGlqIGJlemlnIHdhcy4gSGV0IG1hYWt0IGhlbSBuaWV0IHVpdCBvZiBkZSB3ZXJlbGQgb3AgeiZyc3F1bztuIGtvcCBzdGFhdCwgZGF0IGhlZWZ0IGhpaiBhbCB2YWFrIGdlbm9lZyBtZWVnZW1hYWt0LCB6b2lldHMuIEhpaiB3YXMgaGllciB2b29yIHomcnNxdW87biBwbGV6aWVyLCBlbiBkYXQgd2lsIGhpaiBncmFhZyBkZWxlbi4NClpvIGJsaWpmdCBoZXQgYmVlbGQgc3BvbnRhYW4uIA0KWmUgc3ByYWtlbiBub2cgZXZlbiwgd2FudCBtZW5lZXIgd2FzIHdlbCBuaWV1d3NnaWVyaWcgd2FhcnZvb3IgaGV0IGFsbGVtYWFsIGlzLiBFbiBNIG1hYWt0IHJlY2xhbWUgdm9vciBCdXVydHZvbHN0ZW1tZW4uIEJlbmlldXdkIG9mIG1lbmVlciBlZW4ga2VlciBraWprdCwgaGV0IGxldWsgemFsIHZpbmRlbiBob2UgemlqbiBidXVydCB1aXQgZGUgdmlydHVlbGUgdmVyZiBrb210LCBlbiBtaXNzY2hpZW4gbGVlc3QgaGlqIGRpdC4gDQpFZW4gdnJpZW5kZWxpamtlIGdyb2V0IGR1cywgYmlqIGRlemUuDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjI7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiI2MjciO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjE3OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzQ5Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjM6IjE3OCI7czo3OiJ0YWduYW1lIjtzOjc6InN0cmF0ZW4iO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM0OSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTItMDEgMjI6NTQ6MTkiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTA6Ik1lbmVlci5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI4NyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjY6Ik1lbmVlciI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDoxMDoyNyAxMjoxNzoxNyI7czoxMToib3BtZXJraW5nZW4iO3M6MTY0NzoiTWVuZWVyIHppZXQgZXIgam9uZ2VyIHVpdCBvcCBkZSBmb3RvLg0KSG9layBXZW5zbGF1ZXJzdHJhYXQgVGVuIEthdGVtYXJrdCBiZWdpbiBub3ZlbWJlciwgemFjaHQgd2Vlci4gVG9jaCBtYWFyIHdlbCBkZSBqYXMgZGljaHQuDQpNZW5lZXIga3dhbSBvbSBkZSBob2VrIGdlcmVkZW4gbWV0IHppam4gc2Nvb3Rtb2JpZWwsIGVuIHN0b3B0ZSBoaWVyLiBNYWFuZGFnbW9yZ2VuIGlzIG9wIGRpdCBzdHVramUgbWFya3QgbmF1d2VsaWprcyB3YXQgdGUgZG9lbi4gV2lqIGxpZXBlbiBub2cgaW4gZGUgV2VzbGF1ZXJzdHJhYXQsIHRvZW4gaGlqIHpvIGZvdG9nZW5pZWsgc3RvcHRlLiBNIHZlcnNuZWx0IHppam4gcGFzLiBab2FscyBtZW5lZXIgZGFhciBiZXppZyBpcywgbWV0IGRlIGJhZ2FnZSBpbiBoZXQgcmVrLCBlbiBtZXQgemlqbiBrbGVkaW5nIGVuIGhhYXIuIEVuIGluIGRhdCBkZWNvci4NCk5ldCBhbHNvZiBoaWogZWVuIHZlcndhYWlkZSBpbmRydWsgd2lsZGUgcmVjaHRzdHJpamtlbiwgdm9vciBoaWogZXJnZW5zIG9wIGJlem9layBtb2VzdCAmbmRhc2g7IGFsIHdhcyBoZXQgb3VkZXJ3ZXRzIGRlIG1hcmt0LCBvcCB1aXRnYWFuIGtsZWVkIGplIGplLg0KTWVuZWVyIGxlZWsgZGFuIHdlbCBvdWQsIGVuIHdhdCBnZWJyZWtraWcuIERlIG1vYmllbCBtYWFrdCB6byZyc3F1bztuIGluZHJ1ay4NCkhpaiBoYWQgbWV0ZWVuIGRvb3Igd2F0IE0gd2lsZGUgJmhlbGxpcDsgZW4gemVpIGlldHMgZ2V2YXRzLCBrb3J0IG1hYXIga3JhY2h0aWcuIFRlIHZlciB3ZWcsIGlrIGhvb3JkZSBoZXQgbmlldCwgbWFhciBkZSBzdHJla2tpbmcgd2FzIGR1aWRlbGlqay4gSWV0d2F0IGJldHJhcHQgZ2xpbWxhY2h0IE0gYmVsZWVmZCwgZGVuayBpayBkb29yIHppam4gcnVnIGhlZW4gdGUgemllbi4gSGlqIGthbiB6b2lldHMgemVrZXIgd2FhcmRlcmVuLiBNYWFyIE0gbGFhdCBlZW4gZm90b2thbnMgbmlldCB6b21hYXIgZ2xpcHBlbi4gSGlqIHplZ3QgaWV0cyB0ZXJ1ZyBhbHMgJmxzcXVvO1Ugc3RhYXQgZGFhciB6byBtb29pJnJzcXVvOy4NCk1lbmVlciBoYWQgZ2VlbiBiZXp3YWFyICZuZGFzaDsgTSBrb24gaGVtIGZvdG9ncmFmZXJlbiAmbmRhc2g7IGVuIGdpbmcgb252ZXJzdG9vcmJhYXIgZG9vciB3YWFybWVlIGhpaiBiZXppZyB3YXMuIEhldCBtYWFrdCBoZW0gbmlldCB1aXQgb2YgZGUgd2VyZWxkIG9wIHomcnNxdW87biBrb3Agc3RhYXQsIGRhdCBoZWVmdCBoaWogYWwgdmFhayBnZW5vZWcgbWVlZ2VtYWFrdCwgem9pZXRzLiBIaWogd2FzIGhpZXIgdm9vciB6JnJzcXVvO24gcGxlemllciwgZW4gZGF0IHdpbCBoaWogZ3JhYWcgZGVsZW4uDQpabyBibGlqZnQgaGV0IGJlZWxkIHNwb250YWFuLiANClplIHNwcmFrZW4gbm9nIGV2ZW4sIHdhbnQgbWVuZWVyIHdhcyB3ZWwgbmlldXdzZ2llcmlnIHdhYXJ2b29yIGhldCBhbGxlbWFhbCBpcy4gRW4gTSBtYWFrdCByZWNsYW1lIHZvb3IgQnV1cnR2b2xzdGVtbWVuLiBCZW5pZXV3ZCBvZiBtZW5lZXIgZWVuIGtlZXIga2lqa3QsIGhldCBsZXVrIHphbCB2aW5kZW4gaG9lIHppam4gYnV1cnQgdWl0IGRlIHZpcnR1ZWxlIHZlcmYga29tdCwgZW4gbWlzc2NoaWVuIGxlZXN0IGhpaiBkaXQuIA0KRWVuIHZyaWVuZGVsaWprZSBncm9ldCBkdXMsIGJpaiBkZXplLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM0OSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMTItMDEgMjI6NTQ6MTkiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTA6Ik1lbmVlci5qcGciO3M6NzoidXNlcl9pZCI7czoyOiI4NyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjY6Ik1lbmVlciI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDoxMDoyNyAxMjoxNzoxNyI7czoxMToib3BtZXJraW5nZW4iO3M6MTY0NzoiTWVuZWVyIHppZXQgZXIgam9uZ2VyIHVpdCBvcCBkZSBmb3RvLg0KSG9layBXZW5zbGF1ZXJzdHJhYXQgVGVuIEthdGVtYXJrdCBiZWdpbiBub3ZlbWJlciwgemFjaHQgd2Vlci4gVG9jaCBtYWFyIHdlbCBkZSBqYXMgZGljaHQuDQpNZW5lZXIga3dhbSBvbSBkZSBob2VrIGdlcmVkZW4gbWV0IHppam4gc2Nvb3Rtb2JpZWwsIGVuIHN0b3B0ZSBoaWVyLiBNYWFuZGFnbW9yZ2VuIGlzIG9wIGRpdCBzdHVramUgbWFya3QgbmF1d2VsaWprcyB3YXQgdGUgZG9lbi4gV2lqIGxpZXBlbiBub2cgaW4gZGUgV2VzbGF1ZXJzdHJhYXQsIHRvZW4gaGlqIHpvIGZvdG9nZW5pZWsgc3RvcHRlLiBNIHZlcnNuZWx0IHppam4gcGFzLiBab2FscyBtZW5lZXIgZGFhciBiZXppZyBpcywgbWV0IGRlIGJhZ2FnZSBpbiBoZXQgcmVrLCBlbiBtZXQgemlqbiBrbGVkaW5nIGVuIGhhYXIuIEVuIGluIGRhdCBkZWNvci4NCk5ldCBhbHNvZiBoaWogZWVuIHZlcndhYWlkZSBpbmRydWsgd2lsZGUgcmVjaHRzdHJpamtlbiwgdm9vciBoaWogZXJnZW5zIG9wIGJlem9layBtb2VzdCAmbmRhc2g7IGFsIHdhcyBoZXQgb3VkZXJ3ZXRzIGRlIG1hcmt0LCBvcCB1aXRnYWFuIGtsZWVkIGplIGplLg0KTWVuZWVyIGxlZWsgZGFuIHdlbCBvdWQsIGVuIHdhdCBnZWJyZWtraWcuIERlIG1vYmllbCBtYWFrdCB6byZyc3F1bztuIGluZHJ1ay4NCkhpaiBoYWQgbWV0ZWVuIGRvb3Igd2F0IE0gd2lsZGUgJmhlbGxpcDsgZW4gemVpIGlldHMgZ2V2YXRzLCBrb3J0IG1hYXIga3JhY2h0aWcuIFRlIHZlciB3ZWcsIGlrIGhvb3JkZSBoZXQgbmlldCwgbWFhciBkZSBzdHJla2tpbmcgd2FzIGR1aWRlbGlqay4gSWV0d2F0IGJldHJhcHQgZ2xpbWxhY2h0IE0gYmVsZWVmZCwgZGVuayBpayBkb29yIHppam4gcnVnIGhlZW4gdGUgemllbi4gSGlqIGthbiB6b2lldHMgemVrZXIgd2FhcmRlcmVuLiBNYWFyIE0gbGFhdCBlZW4gZm90b2thbnMgbmlldCB6b21hYXIgZ2xpcHBlbi4gSGlqIHplZ3QgaWV0cyB0ZXJ1ZyBhbHMgJmxzcXVvO1Ugc3RhYXQgZGFhciB6byBtb29pJnJzcXVvOy4NCk1lbmVlciBoYWQgZ2VlbiBiZXp3YWFyICZuZGFzaDsgTSBrb24gaGVtIGZvdG9ncmFmZXJlbiAmbmRhc2g7IGVuIGdpbmcgb252ZXJzdG9vcmJhYXIgZG9vciB3YWFybWVlIGhpaiBiZXppZyB3YXMuIEhldCBtYWFrdCBoZW0gbmlldCB1aXQgb2YgZGUgd2VyZWxkIG9wIHomcnNxdW87biBrb3Agc3RhYXQsIGRhdCBoZWVmdCBoaWogYWwgdmFhayBnZW5vZWcgbWVlZ2VtYWFrdCwgem9pZXRzLiBIaWogd2FzIGhpZXIgdm9vciB6JnJzcXVvO24gcGxlemllciwgZW4gZGF0IHdpbCBoaWogZ3JhYWcgZGVsZW4uDQpabyBibGlqZnQgaGV0IGJlZWxkIHNwb250YWFuLiANClplIHNwcmFrZW4gbm9nIGV2ZW4sIHdhbnQgbWVuZWVyIHdhcyB3ZWwgbmlldXdzZ2llcmlnIHdhYXJ2b29yIGhldCBhbGxlbWFhbCBpcy4gRW4gTSBtYWFrdCByZWNsYW1lIHZvb3IgQnV1cnR2b2xzdGVtbWVuLiBCZW5pZXV3ZCBvZiBtZW5lZXIgZWVuIGtlZXIga2lqa3QsIGhldCBsZXVrIHphbCB2aW5kZW4gaG9lIHppam4gYnV1cnQgdWl0IGRlIHZpcnR1ZWxlIHZlcmYga29tdCwgZW4gbWlzc2NoaWVuIGxlZXN0IGhpaiBkaXQuIA0KRWVuIHZyaWVuZGVsaWprZSBncm9ldCBkdXMsIGJpaiBkZXplLg0KIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO31zOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiI4NyI7czo4OiJ1c2VybmFtZSI7czoyNjoiamFhcGhvb2d0ZWlqbGluZ0B4czRhbGwubmwiO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0xMC0yNSAwMDowOToyOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0xMC0yNSAwMDowOToyOCI7czo0OiJuYWFtIjtzOjMzOiJNYXJ0aWpuIEJhcnRoICYgSmFhcCBIb29ndGVpamxpbmciO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MTp7aTowO2E6NDp7czoyOiJpZCI7czozOiIyNDQiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzQ5IjtzOjEyOiJyZWxhdGllc29vcnQiO3M6NToibWFrZXIiO3M6NzoidXNlcl9pZCI7czoyOiI4NyI7fX1zOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7YToxOntpOjA7YTozOntzOjg6Im1lZGlhX2lkIjtzOjM6IjM0OSI7czo5OiJvYmplY3RfaWQiO3M6MzoiMjAwIjtzOjI6ImlkIjtzOjM6IjM0NyI7fX1zOjQ6IlRhZ3MiO2E6Mzp7aTowO2E6NDp7czoyOiJpZCI7czozOiI3NTQiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjE5NSI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzQ5Ijt9aToxO2E6NDp7czoyOiJpZCI7czozOiI1ODkiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjEzOCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzQ5Ijt9aToyO2E6NDp7czoyOiJpZCI7czozOiI2MjciO3M6MTE6InRhZ25hbWVzX2lkIjtzOjM6IjE3OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMzQ5Ijt9fX1zOjc6ImxvY2RhdGEiO2E6Mzp7czo4OiJMb2NhdGlvbiI7YTozOntzOjI6ImlkIjtzOjM6IjIzMCI7czozOiJsYXQiO3M6MTM6IjUyLjM2NzY2NjY5NjYiO3M6MzoibG9uIjtzOjEyOiI0Ljg2NjMzMTgxNTciO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czozOiIyMzAiO3M6OToib2JqZWN0X2lkIjtzOjM6IjIwMCI7czoyOiJpZCI7czozOiIyMDAiO319czozOiJBZHIiO2E6MDp7fX1zOjU6ImFkcmVzIjthOjA6e31zOjU6Im1ha2VyIjthOjE6e3M6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6Ijg3IjtzOjg6InVzZXJuYW1lIjtzOjI2OiJqYWFwaG9vZ3RlaWpsaW5nQHhzNGFsbC5ubCI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTEwLTI1IDAwOjA5OjI4IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTEwLTI1IDAwOjA5OjI4IjtzOjQ6Im5hYW0iO3M6MzM6Ik1hcnRpam4gQmFydGggJiBKYWFwIEhvb2d0ZWlqbGluZyI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjMyOiJEaXQgZGVlbCB2YW4gZGUgc3RhZCB2YXN0cGFra2VuLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjIyOiJPdWQtV2VzdCBpbiBCZWVsZFRla3N0IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NjA0NzoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgT3VkLVdlc3QgaW4gQmVlbGRUZWtzdDwvYT48L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgY2xhc3M9Iml0ZW1pbWcgY2xpY2thYmxlIiBpZD0idGhlaW1nIiBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93MjEzLzAvMTVkLmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC8xNWQuanBnJyk7Ij4KICAgICAgICAgICAgICAgICAgICAgICAgPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIG9ubG9hZGZpeGltZygpCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG15ZWwgPSAkKCJiMyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBpbWdlbCA9ICQoInRoZWltZyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBtaCA9IG15ZWwuY2xpZW50SGVpZ2h0OwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB0aCA9IG1oIC0gMjgwOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLmhlaWdodCA9IHRoOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLnNyYyA9ICIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvaCIgKyB0aCArICIvMC8xNWQuanBnIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkZExvYWRFdmVudChmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbmxvYWRmaXhpbWcoKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgICAgICAgICA8L3NjcmlwdD4KCiAgICAKCiAgICAgICAgICAgICAgICA8ZmlnY2FwdGlvbj4KICAgICAgICAgICAgICAgICAgICA8c21hbGw+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwZXJzb24iPk1hcnRpam4gQmFydGggJiBKYWFwIEhvb2d0ZWlqbGluZzwvc3Bhbj4KICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+b2t0b2JlciAyMDE0CiAgICAgICAgICAgICAgICAgICAgPC9zbWFsbD4KICAgICAgICAgICAgICAgIDwvZmlnY2FwdGlvbj4KICAgICAgICAgICAgPC9maWd1cmU+CgogICAgICAgICAgICA8aDIgc3R5bGU9ImRpc3BsYXk6aW5saW5lOyI+TWVuZWVyPGJyPjwvaDI+CgogICAgICAgICBNZW5lZXIgemlldCBlciBqb25nZXIgdWl0IG9wIGRlIGZvdG8uPGJyPjxicj5Ib2VrIFdlbnNsYXVlcnN0cmFhdCBUZW4gS2F0ZW1hcmt0IGJlZ2luIG5vdmVtYmVyLCB6YWNodCB3ZWVyLiBUb2NoIG1hYXIgd2VsIGRlIGphcyBkaWNodC48YnI+PGJyPk1lbmVlciBrd2FtIG9tIGRlIGhvZWsgZ2VyZWRlbiBtZXQgemlqbiBzY29vdG1vYmllbCwgZW4gc3RvcHRlIGhpZXIuIE1hYW5kYWdtb3JnZW4gaXMgb3AgZGl0IHN0dWtqZSBtYXJrdCBuYXV3ZWxpamtzIHdhdCB0ZSBkb2VuLiBXaWogbGllcGVuIG5vZyBpbiBkZSBXZXNsYXVlcnN0cmFhdCwgdG9lbiBoaWogem8gZm90b2dlbmllayBzdG9wdGUuIE0gdmVyc25lbHQgemlqbiBwYXMuIFpvYWxzIG1lbmVlciBkYWFyIGJlemlnIGlzLCBtZXQgZGUgYmFnYWdlIGluIGhldCByZWssIGVuIG1ldCB6aWpuIGtsZWRpbmcgZW4gaGFhci4gRW4gaW4gZGF0IGRlY29yLjxicj48YnI+TmV0IGFsc29mIGhpaiBlZW4gdmVyd2FhaWRlIGluZHJ1ayB3aWxkZSByZWNodHN0cmlqa2VuLCB2b29yIGhpaiBlcmdlbnMgb3AgYmV6b2VrIG1vZXN0ICZuZGFzaDsgYWwgd2FzIGhldCBvdWRlcndldHMgZGUgbWFya3QsIG9wIHVpdGdhYW4ga2xlZWQgamUgamUuPGJyPjxicj5NZW5lZXIgbGVlayBkYW4gd2VsIG91ZCwgZW4gd2F0IGdlYnJla2tpZy4gRGUgbW9iaWVsIG1hYWt0IHpvJnJzcXVvO24gaW5kcnVrLjxicj48YnI+SGlqIGhhZCBtZXRlZW4gZG9vciB3YXQgTSB3aWxkZSAmaGVsbGlwOyBlbiB6ZWkgaWV0cyBnZXZhdHMsIGtvcnQgbWFhciBrcmFjaHRpZy4gVGUgdmVyIHdlZywgaWsgaG9vcmRlIGhldCBuaWV0LCBtYWFyIGRlIHN0cmVra2luZyB3YXMgZHVpZGVsaWprLiBJZXR3YXQgYmV0cmFwdCBnbGltbGFjaHQgTSBiZWxlZWZkLCBkZW5rIGlrIGRvb3IgemlqbiBydWcgaGVlbiB0ZSB6aWVuLiBIaWoga2FuIHpvaWV0cyB6ZWtlciB3YWFyZGVyZW4uIE1hYXIgTSBsYWF0IGVlbiBmb3Rva2FucyBuaWV0IHpvbWFhciBnbGlwcGVuLiBIaWogemVndCBpZXRzIHRlcnVnIGFscyAmbHNxdW87VSBzdGFhdCBkYWFyIHpvIG1vb2kmcnNxdW87Ljxicj48YnI+TWVuZWVyIGhhZCBnZWVuIGJlendhYXIgJm5kYXNoOyBNIGtvbiBoZW0gZm90b2dyYWZlcmVuICZuZGFzaDsgZW4gZ2luZyBvbnZlcnN0b29yYmFhciBkb29yIHdhYXJtZWUgaGlqIGJlemlnIHdhcy4gSGV0IG1hYWt0IGhlbSBuaWV0IHVpdCBvZiBkZSB3ZXJlbGQgb3AgeiZyc3F1bztuIGtvcCBzdGFhdCwgZGF0IGhlZWZ0IGhpaiBhbCB2YWFrIGdlbm9lZyBtZWVnZW1hYWt0LCB6b2lldHMuIEhpaiB3YXMgaGllciB2b29yIHomcnNxdW87biBwbGV6aWVyLCBlbiBkYXQgd2lsIGhpaiBncmFhZyBkZWxlbi48YnI+PGJyPlpvIGJsaWpmdCBoZXQgYmVlbGQgc3BvbnRhYW4uIDxicj48YnI+WmUgc3ByYWtlbiBub2cgZXZlbiwgd2FudCBtZW5lZXIgd2FzIHdlbCBuaWV1d3NnaWVyaWcgd2FhcnZvb3IgaGV0IGFsbGVtYWFsIGlzLiBFbiBNIG1hYWt0IHJlY2xhbWUgdm9vciBCdXVydHZvbHN0ZW1tZW4uIEJlbmlldXdkIG9mIG1lbmVlciBlZW4ga2VlciBraWprdCwgaGV0IGxldWsgemFsIHZpbmRlbiBob2UgemlqbiBidXVydCB1aXQgZGUgdmlydHVlbGUgdmVyZiBrb210LCBlbiBtaXNzY2hpZW4gbGVlc3QgaGlqIGRpdC4gPGJyPjxicj5FZW4gdnJpZW5kZWxpamtlIGdyb2V0IGR1cywgYmlqIGRlemUuPGJyPjxicj4gCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIzNDkiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0yNSAyMDo1MTo1MiI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgo8ZGl2IGNsYXNzPSJwYXBlciI+PGEgaHJlZj0iL21lZGlhL3RhZy8xMzgvIiBjbGFzcz0ibGFiZWwiPiNPdWQgV2VzdCBpbiBCZWVsZFRla3N0PC9hPiA8YSBocmVmPSIvbWVkaWEvdGFnLzE3OC8iIGNsYXNzPSJsYWJlbCI+I3N0cmF0ZW48L2E+IAoKPGlucHV0IGlkPSJ0YWdhZGRMYWJlbCIgdHlwZT0idGV4dCIgdmFsdWU9Im5pZXV3IGxhYmVsIiBvbmtleXVwPSJ0YWdhZGQodGhpcyxldmVudCwzNDkpOyIgb25ibHVyPSJpbnB1dExlYXZlKHRoaXMpOyIgb25mb2N1cz0iaW5wdXRGb2N1cyh0aGlzKTsiIHNwZWxsY2hlY2s9ImZhbHNlIiBhdXRvY29tcGxldGU9Im9mZiIgbmFtZT0idGFnYWRkTGFiZWwiPjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vYmVlbGR0ZWtzdC5idnN0ZW1tZW4ubmwvbWVkaWEvZGV0YWlsLzM0OS8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKDUyLjM2NzY2NjY5NjYsIDQuODY2MzMxODE1Nyk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo1MDE6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iTWVuZWVyIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC8xNWQuanBnIiAvPjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHA6Ly9iZWVsZHRla3N0LmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzQ5LyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
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
<meta property="og:title" content="Meneer" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/15d.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/349/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/15d.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/15d.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/15d.jpg";
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

            <h2 style="display:inline;">Meneer<br></h2>

         Meneer ziet er jonger uit op de foto.<br><br>Hoek Wenslauerstraat Ten Katemarkt begin november, zacht weer. Toch maar wel de jas dicht.<br><br>Meneer kwam om de hoek gereden met zijn scootmobiel, en stopte hier. Maandagmorgen is op dit stukje markt nauwelijks wat te doen. Wij liepen nog in de Weslauerstraat, toen hij zo fotogeniek stopte. M versnelt zijn pas. Zoals meneer daar bezig is, met de bagage in het rek, en met zijn kleding en haar. En in dat decor.<br><br>Net alsof hij een verwaaide indruk wilde rechtstrijken, voor hij ergens op bezoek moest &ndash; al was het ouderwets de markt, op uitgaan kleed je je.<br><br>Meneer leek dan wel oud, en wat gebrekkig. De mobiel maakt zo&rsquo;n indruk.<br><br>Hij had meteen door wat M wilde &hellip; en zei iets gevats, kort maar krachtig. Te ver weg, ik hoorde het niet, maar de strekking was duidelijk. Ietwat betrapt glimlacht M beleefd, denk ik door zijn rug heen te zien. Hij kan zoiets zeker waarderen. Maar M laat een fotokans niet zomaar glippen. Hij zegt iets terug als &lsquo;U staat daar zo mooi&rsquo;.<br><br>Meneer had geen bezwaar &ndash; M kon hem fotograferen &ndash; en ging onverstoorbaar door waarmee hij bezig was. Het maakt hem niet uit of de wereld op z&rsquo;n kop staat, dat heeft hij al vaak genoeg meegemaakt, zoiets. Hij was hier voor z&rsquo;n plezier, en dat wil hij graag delen.<br><br>Zo blijft het beeld spontaan. <br><br>Ze spraken nog even, want meneer was wel nieuwsgierig waarvoor het allemaal is. En M maakt reclame voor Buurtvolstemmen. Benieuwd of meneer een keer kijkt, het leuk zal vinden hoe zijn buurt uit de virtuele verf komt, en misschien leest hij dit. <br><br>Een vriendelijke groet dus, bij deze.<br><br> 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="349">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 20:51:52">

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


<div class="paper"><a href="/media/tag/138/" class="label">#Oud West in BeeldTekst</a> <a href="/media/tag/178/" class="label">#straten</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,349);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/349/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3676666966, 4.8663318157);
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