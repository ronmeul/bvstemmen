<!--cachetime:1427316749--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjM2MCI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTQ6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czoxNzoibWVkaWEvZGV0YWlsLzM2MC8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTg6Ii9tZWRpYS9kZXRhaWwvMzYwLyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjM6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6Ijc0NSI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTM4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzNjAiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTM4IjtzOjc6InRhZ25hbWUiO3M6MjI6Ik91ZCBXZXN0IGluIEJlZWxkVGVrc3QiO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM2MCI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTUtMDEtMjUgMTM6NTE6NDEiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTU6IlRlZ2VuRGVadWlsLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTQ6IlRlZ2VuIGRlIHp1aWwgIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjEwOjI3IDEzOjEwOjU4IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjMyOiJUZWdlbiBkZSB6dWlsDQpTZXJlZW4gc3RhYXQgemUgZGFhci4NCkluIGhhcm1vbmllLCBtZXQgZGUgenVpbC4NCkluIGhldCBzdHJhYXRiZWVsZCB3YXMgemUgZWVuIHByYWNodGlnZSBjb21iaW5hdGllIHZhbiBrbGV1cmVuLg0KWmUgYmxlZWYgb25iZXdlZWdsaWprLCB0b2VuIE0gZGUgZm90byBtYWFrdGUuIE9udmVyc3Rvb3JiYWFyLCBtYWFyIGdlZW4gcHJvYmxlZW0gZGF0IGhpaiBmb3RvZ3JhZmVlcmRlLiBaZSB3YWNodCBlcmdlbnMgb3AsIG9mIHJ1c3QgemU/DQpKZSB6aWV0IGhldCBuaWV0LCBtYWFyIGRlIG9tZ2V2aW5nIHdhcyBlZW4gb250a2VubmluZyB2YW4gaGFhciBhYW53ZXppZ2hlaWQuIA0KRGl0IGlzIGVlbiBtb29pZSB1aXRzbmVkZSBpbiBlZW4gdmVyZGVyIHdhdCB1aXRnZWxlZWZkZSBzdHJhYXQuIA0KRGUgQmlsZGVyZGlqa3N0cmFhdCBoYWQgZWVuIGNoaXF1ZSB2b2xrc2hlaWQsIGFscyBqZSBmb3RvJnJzcXVvO3MgemlldCB2YW4gbGFuZ2VyIGdlbGVkZW4uIEhlbGFhcyBoZWJiZW4gdmVlbCB3aW5rZWxzIGVuIGJlZHJpanZlbiBudSBtZWVyIG9vZyB2b29yIGh1biBlaWdlbiB1aXRzdHJhbGluZy4gWmUgb2ZmZXJlbiBoZXQgc3RyYWF0YmVlbGQgYWFuIGVlbiB6byBnb2Vka29vcCBtb2dlbGlqa2UgcHJlZmFiIHVpdHN0cmFsaW5nIG9tIGRlIHdpbnN0IG1heGltYWxpc2VyZW4uIERlIGZhJmNjZWRpbDthZGUgZGllIGRhdCBvcGxldmVydCwgIGlzIGxlbGlqaywgcGFzdCBlaWdlbmxpamsgbmlldCBpbiBoZXQgc3RhdGlnZSB2YW4gZGUgc3RyYWF0Lg0KWGVub3MsIEJyaXN0b2wsIEtpamtzaG9wLm5sICwgaGV0IGlzIGVlbiByYXV3ZSwgYWxsZWRhYWdzZSBvbWdldmluZyAuIEFsbGVzIGJ1aXRlbiBkZSBmb3RvLiBEYXQgd2F0IGplIG5pZXQgemlldC4gDQpFbiBkYWFyb20uIFppaiBzcHJpbmd0IGVyIHpvIG5vZyBtZWVyIHVpdCBJbiBoZXQgc3RyaWprbGljaHQgdmFuIGVlbiBmcmlzaGVsZGVyZSBub3ZlbWJlcm1vcmdlbi4gRGUgenVpbCB6ZXQgbWlqIHRlcnVnIGluIGRlIE91ZGhlaWQuICBaaWogaXMgZGUgc2NoaWtnb2RpbiB2YW4gZGUgb21nZXZpbmcuDQpQYXRoZXRpc2NoIGVpZ2VubGlqaywgem8mcnNxdW87biBsaXNwZWxlbmRlIG1hbiBtZXQgdGUgZ3JvdGUgd29vcmRlbnNjaGF0LiBIb2UgamUgamUga2FuIGxhdGVuIGdhYW4gYmlqIGVlbiBtb29pIHBsYWF0amUgJmhlbGxpcDsNClplIGlzIGRhYXIgZ2V3b29uLiBaaWNoemVsZi4NClpvdSBqZSBkZW5rZW4/DQpFZW4gc2NoYWR1dyB6d2VlZnQgdm9vciBoYWFyLiBJZXRzIHdhdCBoYWFzdCBlZW4gYW5kZXIgbGlqa3QsIGlldHMgd2F0IGhhYXIgaW4gZWVuIGVldXdpZ2hlaWQgemV0Lg0KV2llIGlzIGRlZ2VuZSB2b29yIGhhYXIgb3AgZGllIHBsZWs/IFppaiB6ZWxmIG91ZGVyIG9mIGpvbmdlciwgaW4gZWVuIGFuZGVyZSB0aWpkPyBIYWQgemUgdG9lbiBlZW4gbGFuZ2Ugcm9rIGFhbj8gWndhbmdlcj8NCkRlIHZyb3V3IGRpZSBsZXVudCBpcyBvbnRlZ2VuemVnZ2VsaWprIG1vZGVybiwgdmxvdCBnZWtsZWVkLiBIYWFyIHNjaGFkdXcgaGVlZnQgZGUgY29udG91cmVuIHZhbiBlZXV3ZW4gZ2VsZWRlbiwgdWl0IGRlIGt3ZXRzYmFyZSB0aWpkIHZhbiBoYWFyIHZvb3JvdWRlcnMuDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI2MCI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9fWk6MTthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6Ijc0NCI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIzNjAiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MzoiMTc4IjtzOjc6InRhZ25hbWUiO3M6Nzoic3RyYXRlbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzYwIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNS0wMS0yNSAxMzo1MTo0MSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToiVGVnZW5EZVp1aWwuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNDoiVGVnZW4gZGUgenVpbCAiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MTA6MjcgMTM6MTA6NTgiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2MzI6IlRlZ2VuIGRlIHp1aWwNClNlcmVlbiBzdGFhdCB6ZSBkYWFyLg0KSW4gaGFybW9uaWUsIG1ldCBkZSB6dWlsLg0KSW4gaGV0IHN0cmFhdGJlZWxkIHdhcyB6ZSBlZW4gcHJhY2h0aWdlIGNvbWJpbmF0aWUgdmFuIGtsZXVyZW4uDQpaZSBibGVlZiBvbmJld2VlZ2xpamssIHRvZW4gTSBkZSBmb3RvIG1hYWt0ZS4gT252ZXJzdG9vcmJhYXIsIG1hYXIgZ2VlbiBwcm9ibGVlbSBkYXQgaGlqIGZvdG9ncmFmZWVyZGUuIFplIHdhY2h0IGVyZ2VucyBvcCwgb2YgcnVzdCB6ZT8NCkplIHppZXQgaGV0IG5pZXQsIG1hYXIgZGUgb21nZXZpbmcgd2FzIGVlbiBvbnRrZW5uaW5nIHZhbiBoYWFyIGFhbndlemlnaGVpZC4gDQpEaXQgaXMgZWVuIG1vb2llIHVpdHNuZWRlIGluIGVlbiB2ZXJkZXIgd2F0IHVpdGdlbGVlZmRlIHN0cmFhdC4gDQpEZSBCaWxkZXJkaWprc3RyYWF0IGhhZCBlZW4gY2hpcXVlIHZvbGtzaGVpZCwgYWxzIGplIGZvdG8mcnNxdW87cyB6aWV0IHZhbiBsYW5nZXIgZ2VsZWRlbi4gSGVsYWFzIGhlYmJlbiB2ZWVsIHdpbmtlbHMgZW4gYmVkcmlqdmVuIG51IG1lZXIgb29nIHZvb3IgaHVuIGVpZ2VuIHVpdHN0cmFsaW5nLiBaZSBvZmZlcmVuIGhldCBzdHJhYXRiZWVsZCBhYW4gZWVuIHpvIGdvZWRrb29wIG1vZ2VsaWprZSBwcmVmYWIgdWl0c3RyYWxpbmcgb20gZGUgd2luc3QgbWF4aW1hbGlzZXJlbi4gRGUgZmEmY2NlZGlsO2FkZSBkaWUgZGF0IG9wbGV2ZXJ0LCAgaXMgbGVsaWprLCBwYXN0IGVpZ2VubGlqayBuaWV0IGluIGhldCBzdGF0aWdlIHZhbiBkZSBzdHJhYXQuDQpYZW5vcywgQnJpc3RvbCwgS2lqa3Nob3AubmwgLCBoZXQgaXMgZWVuIHJhdXdlLCBhbGxlZGFhZ3NlIG9tZ2V2aW5nIC4gQWxsZXMgYnVpdGVuIGRlIGZvdG8uIERhdCB3YXQgamUgbmlldCB6aWV0LiANCkVuIGRhYXJvbS4gWmlqIHNwcmluZ3QgZXIgem8gbm9nIG1lZXIgdWl0IEluIGhldCBzdHJpamtsaWNodCB2YW4gZWVuIGZyaXNoZWxkZXJlIG5vdmVtYmVybW9yZ2VuLiBEZSB6dWlsIHpldCBtaWogdGVydWcgaW4gZGUgT3VkaGVpZC4gIFppaiBpcyBkZSBzY2hpa2dvZGluIHZhbiBkZSBvbWdldmluZy4NClBhdGhldGlzY2ggZWlnZW5saWprLCB6byZyc3F1bztuIGxpc3BlbGVuZGUgbWFuIG1ldCB0ZSBncm90ZSB3b29yZGVuc2NoYXQuIEhvZSBqZSBqZSBrYW4gbGF0ZW4gZ2FhbiBiaWogZWVuIG1vb2kgcGxhYXRqZSAmaGVsbGlwOw0KWmUgaXMgZGFhciBnZXdvb24uIFppY2h6ZWxmLg0KWm91IGplIGRlbmtlbj8NCkVlbiBzY2hhZHV3IHp3ZWVmdCB2b29yIGhhYXIuIElldHMgd2F0IGhhYXN0IGVlbiBhbmRlciBsaWprdCwgaWV0cyB3YXQgaGFhciBpbiBlZW4gZWV1d2lnaGVpZCB6ZXQuDQpXaWUgaXMgZGVnZW5lIHZvb3IgaGFhciBvcCBkaWUgcGxlaz8gWmlqIHplbGYgb3VkZXIgb2Ygam9uZ2VyLCBpbiBlZW4gYW5kZXJlIHRpamQ/IEhhZCB6ZSB0b2VuIGVlbiBsYW5nZSByb2sgYWFuPyBad2FuZ2VyPw0KRGUgdnJvdXcgZGllIGxldW50IGlzIG9udGVnZW56ZWdnZWxpamsgbW9kZXJuLCB2bG90IGdla2xlZWQuIEhhYXIgc2NoYWR1dyBoZWVmdCBkZSBjb250b3VyZW4gdmFuIGVldXdlbiBnZWxlZGVuLCB1aXQgZGUga3dldHNiYXJlIHRpamQgdmFuIGhhYXIgdm9vcm91ZGVycy4NCiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjYwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToyO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNzU2IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM2MCI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxOTUiO3M6NzoidGFnbmFtZSI7czoxMDoiYmVlbGR0ZWtzdCI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMzYwIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNS0wMS0yNSAxMzo1MTo0MSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToiVGVnZW5EZVp1aWwuanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiODciO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNDoiVGVnZW4gZGUgenVpbCAiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MTA6MjcgMTM6MTA6NTgiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjE2MzI6IlRlZ2VuIGRlIHp1aWwNClNlcmVlbiBzdGFhdCB6ZSBkYWFyLg0KSW4gaGFybW9uaWUsIG1ldCBkZSB6dWlsLg0KSW4gaGV0IHN0cmFhdGJlZWxkIHdhcyB6ZSBlZW4gcHJhY2h0aWdlIGNvbWJpbmF0aWUgdmFuIGtsZXVyZW4uDQpaZSBibGVlZiBvbmJld2VlZ2xpamssIHRvZW4gTSBkZSBmb3RvIG1hYWt0ZS4gT252ZXJzdG9vcmJhYXIsIG1hYXIgZ2VlbiBwcm9ibGVlbSBkYXQgaGlqIGZvdG9ncmFmZWVyZGUuIFplIHdhY2h0IGVyZ2VucyBvcCwgb2YgcnVzdCB6ZT8NCkplIHppZXQgaGV0IG5pZXQsIG1hYXIgZGUgb21nZXZpbmcgd2FzIGVlbiBvbnRrZW5uaW5nIHZhbiBoYWFyIGFhbndlemlnaGVpZC4gDQpEaXQgaXMgZWVuIG1vb2llIHVpdHNuZWRlIGluIGVlbiB2ZXJkZXIgd2F0IHVpdGdlbGVlZmRlIHN0cmFhdC4gDQpEZSBCaWxkZXJkaWprc3RyYWF0IGhhZCBlZW4gY2hpcXVlIHZvbGtzaGVpZCwgYWxzIGplIGZvdG8mcnNxdW87cyB6aWV0IHZhbiBsYW5nZXIgZ2VsZWRlbi4gSGVsYWFzIGhlYmJlbiB2ZWVsIHdpbmtlbHMgZW4gYmVkcmlqdmVuIG51IG1lZXIgb29nIHZvb3IgaHVuIGVpZ2VuIHVpdHN0cmFsaW5nLiBaZSBvZmZlcmVuIGhldCBzdHJhYXRiZWVsZCBhYW4gZWVuIHpvIGdvZWRrb29wIG1vZ2VsaWprZSBwcmVmYWIgdWl0c3RyYWxpbmcgb20gZGUgd2luc3QgbWF4aW1hbGlzZXJlbi4gRGUgZmEmY2NlZGlsO2FkZSBkaWUgZGF0IG9wbGV2ZXJ0LCAgaXMgbGVsaWprLCBwYXN0IGVpZ2VubGlqayBuaWV0IGluIGhldCBzdGF0aWdlIHZhbiBkZSBzdHJhYXQuDQpYZW5vcywgQnJpc3RvbCwgS2lqa3Nob3AubmwgLCBoZXQgaXMgZWVuIHJhdXdlLCBhbGxlZGFhZ3NlIG9tZ2V2aW5nIC4gQWxsZXMgYnVpdGVuIGRlIGZvdG8uIERhdCB3YXQgamUgbmlldCB6aWV0LiANCkVuIGRhYXJvbS4gWmlqIHNwcmluZ3QgZXIgem8gbm9nIG1lZXIgdWl0IEluIGhldCBzdHJpamtsaWNodCB2YW4gZWVuIGZyaXNoZWxkZXJlIG5vdmVtYmVybW9yZ2VuLiBEZSB6dWlsIHpldCBtaWogdGVydWcgaW4gZGUgT3VkaGVpZC4gIFppaiBpcyBkZSBzY2hpa2dvZGluIHZhbiBkZSBvbWdldmluZy4NClBhdGhldGlzY2ggZWlnZW5saWprLCB6byZyc3F1bztuIGxpc3BlbGVuZGUgbWFuIG1ldCB0ZSBncm90ZSB3b29yZGVuc2NoYXQuIEhvZSBqZSBqZSBrYW4gbGF0ZW4gZ2FhbiBiaWogZWVuIG1vb2kgcGxhYXRqZSAmaGVsbGlwOw0KWmUgaXMgZGFhciBnZXdvb24uIFppY2h6ZWxmLg0KWm91IGplIGRlbmtlbj8NCkVlbiBzY2hhZHV3IHp3ZWVmdCB2b29yIGhhYXIuIElldHMgd2F0IGhhYXN0IGVlbiBhbmRlciBsaWprdCwgaWV0cyB3YXQgaGFhciBpbiBlZW4gZWV1d2lnaGVpZCB6ZXQuDQpXaWUgaXMgZGVnZW5lIHZvb3IgaGFhciBvcCBkaWUgcGxlaz8gWmlqIHplbGYgb3VkZXIgb2Ygam9uZ2VyLCBpbiBlZW4gYW5kZXJlIHRpamQ/IEhhZCB6ZSB0b2VuIGVlbiBsYW5nZSByb2sgYWFuPyBad2FuZ2VyPw0KRGUgdnJvdXcgZGllIGxldW50IGlzIG9udGVnZW56ZWdnZWxpamsgbW9kZXJuLCB2bG90IGdla2xlZWQuIEhhYXIgc2NoYWR1dyBoZWVmdCBkZSBjb250b3VyZW4gdmFuIGVldXdlbiBnZWxlZGVuLCB1aXQgZGUga3dldHNiYXJlIHRpamQgdmFuIGhhYXIgdm9vcm91ZGVycy4NCiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjYwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjM2MCI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTUtMDEtMjUgMTM6NTE6NDEiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6MTU6IlRlZ2VuRGVadWlsLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjI6Ijg3IjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTQ6IlRlZ2VuIGRlIHp1aWwgIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjE5OiIyMDE0OjEwOjI3IDEzOjEwOjU4IjtzOjExOiJvcG1lcmtpbmdlbiI7czoxNjMyOiJUZWdlbiBkZSB6dWlsDQpTZXJlZW4gc3RhYXQgemUgZGFhci4NCkluIGhhcm1vbmllLCBtZXQgZGUgenVpbC4NCkluIGhldCBzdHJhYXRiZWVsZCB3YXMgemUgZWVuIHByYWNodGlnZSBjb21iaW5hdGllIHZhbiBrbGV1cmVuLg0KWmUgYmxlZWYgb25iZXdlZWdsaWprLCB0b2VuIE0gZGUgZm90byBtYWFrdGUuIE9udmVyc3Rvb3JiYWFyLCBtYWFyIGdlZW4gcHJvYmxlZW0gZGF0IGhpaiBmb3RvZ3JhZmVlcmRlLiBaZSB3YWNodCBlcmdlbnMgb3AsIG9mIHJ1c3QgemU/DQpKZSB6aWV0IGhldCBuaWV0LCBtYWFyIGRlIG9tZ2V2aW5nIHdhcyBlZW4gb250a2VubmluZyB2YW4gaGFhciBhYW53ZXppZ2hlaWQuIA0KRGl0IGlzIGVlbiBtb29pZSB1aXRzbmVkZSBpbiBlZW4gdmVyZGVyIHdhdCB1aXRnZWxlZWZkZSBzdHJhYXQuIA0KRGUgQmlsZGVyZGlqa3N0cmFhdCBoYWQgZWVuIGNoaXF1ZSB2b2xrc2hlaWQsIGFscyBqZSBmb3RvJnJzcXVvO3MgemlldCB2YW4gbGFuZ2VyIGdlbGVkZW4uIEhlbGFhcyBoZWJiZW4gdmVlbCB3aW5rZWxzIGVuIGJlZHJpanZlbiBudSBtZWVyIG9vZyB2b29yIGh1biBlaWdlbiB1aXRzdHJhbGluZy4gWmUgb2ZmZXJlbiBoZXQgc3RyYWF0YmVlbGQgYWFuIGVlbiB6byBnb2Vka29vcCBtb2dlbGlqa2UgcHJlZmFiIHVpdHN0cmFsaW5nIG9tIGRlIHdpbnN0IG1heGltYWxpc2VyZW4uIERlIGZhJmNjZWRpbDthZGUgZGllIGRhdCBvcGxldmVydCwgIGlzIGxlbGlqaywgcGFzdCBlaWdlbmxpamsgbmlldCBpbiBoZXQgc3RhdGlnZSB2YW4gZGUgc3RyYWF0Lg0KWGVub3MsIEJyaXN0b2wsIEtpamtzaG9wLm5sICwgaGV0IGlzIGVlbiByYXV3ZSwgYWxsZWRhYWdzZSBvbWdldmluZyAuIEFsbGVzIGJ1aXRlbiBkZSBmb3RvLiBEYXQgd2F0IGplIG5pZXQgemlldC4gDQpFbiBkYWFyb20uIFppaiBzcHJpbmd0IGVyIHpvIG5vZyBtZWVyIHVpdCBJbiBoZXQgc3RyaWprbGljaHQgdmFuIGVlbiBmcmlzaGVsZGVyZSBub3ZlbWJlcm1vcmdlbi4gRGUgenVpbCB6ZXQgbWlqIHRlcnVnIGluIGRlIE91ZGhlaWQuICBaaWogaXMgZGUgc2NoaWtnb2RpbiB2YW4gZGUgb21nZXZpbmcuDQpQYXRoZXRpc2NoIGVpZ2VubGlqaywgem8mcnNxdW87biBsaXNwZWxlbmRlIG1hbiBtZXQgdGUgZ3JvdGUgd29vcmRlbnNjaGF0LiBIb2UgamUgamUga2FuIGxhdGVuIGdhYW4gYmlqIGVlbiBtb29pIHBsYWF0amUgJmhlbGxpcDsNClplIGlzIGRhYXIgZ2V3b29uLiBaaWNoemVsZi4NClpvdSBqZSBkZW5rZW4/DQpFZW4gc2NoYWR1dyB6d2VlZnQgdm9vciBoYWFyLiBJZXRzIHdhdCBoYWFzdCBlZW4gYW5kZXIgbGlqa3QsIGlldHMgd2F0IGhhYXIgaW4gZWVuIGVldXdpZ2hlaWQgemV0Lg0KV2llIGlzIGRlZ2VuZSB2b29yIGhhYXIgb3AgZGllIHBsZWs/IFppaiB6ZWxmIG91ZGVyIG9mIGpvbmdlciwgaW4gZWVuIGFuZGVyZSB0aWpkPyBIYWQgemUgdG9lbiBlZW4gbGFuZ2Ugcm9rIGFhbj8gWndhbmdlcj8NCkRlIHZyb3V3IGRpZSBsZXVudCBpcyBvbnRlZ2VuemVnZ2VsaWprIG1vZGVybiwgdmxvdCBnZWtsZWVkLiBIYWFyIHNjaGFkdXcgaGVlZnQgZGUgY29udG91cmVuIHZhbiBlZXV3ZW4gZ2VsZWRlbiwgdWl0IGRlIGt3ZXRzYmFyZSB0aWpkIHZhbiBoYWFyIHZvb3JvdWRlcnMuDQoiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czoyOiI2MCI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MjoiODciO3M6ODoidXNlcm5hbWUiO3M6MjY6ImphYXBob29ndGVpamxpbmdAeHM0YWxsLm5sIjtzOjg6InBhc3N3b3JkIjtOO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTAtMjUgMDA6MDk6MjgiO3M6NDoibmFhbSI7czozMzoiTWFydGlqbiBCYXJ0aCAmIEphYXAgSG9vZ3RlaWpsaW5nIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiMjUzIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM2MCI7czoxMjoicmVsYXRpZXNvb3J0IjtzOjU6Im1ha2VyIjtzOjc6InVzZXJfaWQiO3M6MjoiOTEiO319czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6MTp7aTowO2E6Mzp7czo4OiJtZWRpYV9pZCI7czozOiIzNjAiO3M6OToib2JqZWN0X2lkIjtzOjM6IjIwNyI7czoyOiJpZCI7czozOiIzNTgiO319czo0OiJUYWdzIjthOjM6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MzoiNzQ1IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxMzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM2MCI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiNzQ0IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxNzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM2MCI7fWk6MjthOjQ6e3M6MjoiaWQiO3M6MzoiNzU2IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxOTUiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjM2MCI7fX19czo3OiJsb2NkYXRhIjthOjA6e31zOjU6ImFkcmVzIjthOjA6e31zOjU6Im1ha2VyIjthOjE6e3M6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6IjkxIjtzOjg6InVzZXJuYW1lIjtOO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNS0wMS0yNSAxMzo1MTo0MSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNS0wMS0yNSAxMzo1MTo0MSI7czo0OiJuYWFtIjtzOjMyOiJNYXJ0aWpuIEJhcnQgJiBKYWFwIEhvb2d0ZWlqbGluZyI7czo5OiJuYWFtX3ppZW4iO3M6MToiMCI7fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjMyOiJEaXQgZGVlbCB2YW4gZGUgc3RhZCB2YXN0cGFra2VuLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoyMjoiT3VkLVdlc3QgaW4gQmVlbGRUZWtzdCI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjIyOiJPdWQtV2VzdCBpbiBCZWVsZFRla3N0IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NjA1MDoiPGFydGljbGU+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiPgogICAgICAgIDxwIGNsYXNzPSJzdWJtZW51Ij48YSBocmVmPSIva2FhcnQvIj5LYWFydDwvYT4gLSA8YSBocmVmPSIvbWVkaWEvIj5MaWpzdDwvYT4gfCA8YSBocmVmPSIvb3Zlci8iPk92ZXIgT3VkLVdlc3QgaW4gQmVlbGRUZWtzdDwvYT48L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgY2xhc3M9Iml0ZW1pbWcgY2xpY2thYmxlIiBpZD0idGhlaW1nIiBzcmM9Ii8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy93MjEzLzAvMTY4LmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC8xNjguanBnJyk7Ij4KICAgICAgICAgICAgICAgICAgICAgICAgPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIG9ubG9hZGZpeGltZygpCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG15ZWwgPSAkKCJiMyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBpbWdlbCA9ICQoInRoZWltZyIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciBtaCA9IG15ZWwuY2xpZW50SGVpZ2h0OwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB0aCA9IG1oIC0gMjgwOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLmhlaWdodCA9IHRoOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltZ2VsLnNyYyA9ICIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvaCIgKyB0aCArICIvMC8xNjguanBnIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkZExvYWRFdmVudChmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbmxvYWRmaXhpbWcoKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgICAgICAgICA8L3NjcmlwdD4KCiAgICAKCiAgICAgICAgICAgICAgICA8ZmlnY2FwdGlvbj4KICAgICAgICAgICAgICAgICAgICA8c21hbGw+CiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwZXJzb24iPk1hcnRpam4gQmFydCAmIEphYXAgSG9vZ3RlaWpsaW5nPC9zcGFuPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj5va3RvYmVyIDIwMTQKICAgICAgICAgICAgICAgICAgICA8L3NtYWxsPgogICAgICAgICAgICAgICAgPC9maWdjYXB0aW9uPgogICAgICAgICAgICA8L2ZpZ3VyZT4KCiAgICAgICAgICAgIDxoMiBzdHlsZT0iZGlzcGxheTppbmxpbmU7Ij5UZWdlbiBkZSB6dWlsIDxicj48L2gyPgoKICAgICAgICAgVGVnZW4gZGUgenVpbDxicj48YnI+U2VyZWVuIHN0YWF0IHplIGRhYXIuPGJyPjxicj5JbiBoYXJtb25pZSwgbWV0IGRlIHp1aWwuPGJyPjxicj5JbiBoZXQgc3RyYWF0YmVlbGQgd2FzIHplIGVlbiBwcmFjaHRpZ2UgY29tYmluYXRpZSB2YW4ga2xldXJlbi48YnI+PGJyPlplIGJsZWVmIG9uYmV3ZWVnbGlqaywgdG9lbiBNIGRlIGZvdG8gbWFha3RlLiBPbnZlcnN0b29yYmFhciwgbWFhciBnZWVuIHByb2JsZWVtIGRhdCBoaWogZm90b2dyYWZlZXJkZS4gWmUgd2FjaHQgZXJnZW5zIG9wLCBvZiBydXN0IHplPzxicj48YnI+SmUgemlldCBoZXQgbmlldCwgbWFhciBkZSBvbWdldmluZyB3YXMgZWVuIG9udGtlbm5pbmcgdmFuIGhhYXIgYWFud2V6aWdoZWlkLiA8YnI+PGJyPkRpdCBpcyBlZW4gbW9vaWUgdWl0c25lZGUgaW4gZWVuIHZlcmRlciB3YXQgdWl0Z2VsZWVmZGUgc3RyYWF0LiA8YnI+PGJyPkRlIEJpbGRlcmRpamtzdHJhYXQgaGFkIGVlbiBjaGlxdWUgdm9sa3NoZWlkLCBhbHMgamUgZm90byZyc3F1bztzIHppZXQgdmFuIGxhbmdlciBnZWxlZGVuLiBIZWxhYXMgaGViYmVuIHZlZWwgd2lua2VscyBlbiBiZWRyaWp2ZW4gbnUgbWVlciBvb2cgdm9vciBodW4gZWlnZW4gdWl0c3RyYWxpbmcuIFplIG9mZmVyZW4gaGV0IHN0cmFhdGJlZWxkIGFhbiBlZW4gem8gZ29lZGtvb3AgbW9nZWxpamtlIHByZWZhYiB1aXRzdHJhbGluZyBvbSBkZSB3aW5zdCBtYXhpbWFsaXNlcmVuLiBEZSBmYSZjY2VkaWw7YWRlIGRpZSBkYXQgb3BsZXZlcnQsICBpcyBsZWxpamssIHBhc3QgZWlnZW5saWprIG5pZXQgaW4gaGV0IHN0YXRpZ2UgdmFuIGRlIHN0cmFhdC48YnI+PGJyPlhlbm9zLCBCcmlzdG9sLCBLaWprc2hvcC5ubCAsIGhldCBpcyBlZW4gcmF1d2UsIGFsbGVkYWFnc2Ugb21nZXZpbmcgLiBBbGxlcyBidWl0ZW4gZGUgZm90by4gRGF0IHdhdCBqZSBuaWV0IHppZXQuIDxicj48YnI+RW4gZGFhcm9tLiBaaWogc3ByaW5ndCBlciB6byBub2cgbWVlciB1aXQgSW4gaGV0IHN0cmlqa2xpY2h0IHZhbiBlZW4gZnJpc2hlbGRlcmUgbm92ZW1iZXJtb3JnZW4uIERlIHp1aWwgemV0IG1paiB0ZXJ1ZyBpbiBkZSBPdWRoZWlkLiAgWmlqIGlzIGRlIHNjaGlrZ29kaW4gdmFuIGRlIG9tZ2V2aW5nLjxicj48YnI+UGF0aGV0aXNjaCBlaWdlbmxpamssIHpvJnJzcXVvO24gbGlzcGVsZW5kZSBtYW4gbWV0IHRlIGdyb3RlIHdvb3JkZW5zY2hhdC4gSG9lIGplIGplIGthbiBsYXRlbiBnYWFuIGJpaiBlZW4gbW9vaSBwbGFhdGplICZoZWxsaXA7PGJyPjxicj5aZSBpcyBkYWFyIGdld29vbi4gWmljaHplbGYuPGJyPjxicj5ab3UgamUgZGVua2VuPzxicj48YnI+RWVuIHNjaGFkdXcgendlZWZ0IHZvb3IgaGFhci4gSWV0cyB3YXQgaGFhc3QgZWVuIGFuZGVyIGxpamt0LCBpZXRzIHdhdCBoYWFyIGluIGVlbiBlZXV3aWdoZWlkIHpldC48YnI+PGJyPldpZSBpcyBkZWdlbmUgdm9vciBoYWFyIG9wIGRpZSBwbGVrPyBaaWogemVsZiBvdWRlciBvZiBqb25nZXIsIGluIGVlbiBhbmRlcmUgdGlqZD8gSGFkIHplIHRvZW4gZWVuIGxhbmdlIHJvayBhYW4/IFp3YW5nZXI/PGJyPjxicj5EZSB2cm91dyBkaWUgbGV1bnQgaXMgb250ZWdlbnplZ2dlbGlqayBtb2Rlcm4sIHZsb3QgZ2VrbGVlZC4gSGFhciBzY2hhZHV3IGhlZWZ0IGRlIGNvbnRvdXJlbiB2YW4gZWV1d2VuIGdlbGVkZW4sIHVpdCBkZSBrd2V0c2JhcmUgdGlqZCB2YW4gaGFhciB2b29yb3VkZXJzLjxicj48YnI+IAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMzYwIj4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMjUgMjA6NTI6MjkiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKPGRpdiBjbGFzcz0icGFwZXIiPjxhIGhyZWY9Ii9tZWRpYS90YWcvMTM4LyIgY2xhc3M9ImxhYmVsIj4jT3VkIFdlc3QgaW4gQmVlbGRUZWtzdDwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy8xNzgvIiBjbGFzcz0ibGFiZWwiPiNzdHJhdGVuPC9hPiAKCjxpbnB1dCBpZD0idGFnYWRkTGFiZWwiIHR5cGU9InRleHQiIHZhbHVlPSJuaWV1dyBsYWJlbCIgb25rZXl1cD0idGFnYWRkKHRoaXMsZXZlbnQsMzYwKTsiIG9uYmx1cj0iaW5wdXRMZWF2ZSh0aGlzKTsiIG9uZm9jdXM9ImlucHV0Rm9jdXModGhpcyk7IiBzcGVsbGNoZWNrPSJmYWxzZSIgYXV0b2NvbXBsZXRlPSJvZmYiIG5hbWU9InRhZ2FkZExhYmVsIj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0ibWFwIiBjbGFzcz0ibWFwIj48L2Rpdj48L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+CiAgICAgICAgPGRpdiBzdHlsZT0ib3ZlcmZsb3c6IGhpZGRlbiI+PGgyPlZsYWtiaWo8L2gyPgogICAgICAgICAgICA8ZGl2IGlkPSJtZWRsaXN0Ij48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0icGFwZXIiPjxkaXYgaWQ9ImZiLXJvb3QiPjwvZGl2Pgo8ZGl2IGNsYXNzPSJmYi1zaGFyZS1idXR0b24iIGRhdGEtaHJlZj0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8zNjAvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZygsICk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo1MDk6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iVGVnZW4gZGUgenVpbCAiIC8+PG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzYwMC8wLzE2OC5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovL2JlZWxkdGVrc3QuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8zNjAvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="Tegen de zuil " /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/168.jpg" /><meta property="og:url" content="http://beeldtekst.bvstemmen.nl/media/detail/360/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">Oud-West in BeeldTekst</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over Oud-West in BeeldTekst</a></p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/168.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/168.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/168.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Martijn Bart & Jaap Hoogteijling</span>
                        
                            <br>oktober 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Tegen de zuil <br></h2>

         Tegen de zuil<br><br>Sereen staat ze daar.<br><br>In harmonie, met de zuil.<br><br>In het straatbeeld was ze een prachtige combinatie van kleuren.<br><br>Ze bleef onbeweeglijk, toen M de foto maakte. Onverstoorbaar, maar geen probleem dat hij fotografeerde. Ze wacht ergens op, of rust ze?<br><br>Je ziet het niet, maar de omgeving was een ontkenning van haar aanwezigheid. <br><br>Dit is een mooie uitsnede in een verder wat uitgeleefde straat. <br><br>De Bilderdijkstraat had een chique volksheid, als je foto&rsquo;s ziet van langer geleden. Helaas hebben veel winkels en bedrijven nu meer oog voor hun eigen uitstraling. Ze offeren het straatbeeld aan een zo goedkoop mogelijke prefab uitstraling om de winst maximaliseren. De fa&ccedil;ade die dat oplevert,  is lelijk, past eigenlijk niet in het statige van de straat.<br><br>Xenos, Bristol, Kijkshop.nl , het is een rauwe, alledaagse omgeving . Alles buiten de foto. Dat wat je niet ziet. <br><br>En daarom. Zij springt er zo nog meer uit In het strijklicht van een frisheldere novembermorgen. De zuil zet mij terug in de Oudheid.  Zij is de schikgodin van de omgeving.<br><br>Pathetisch eigenlijk, zo&rsquo;n lispelende man met te grote woordenschat. Hoe je je kan laten gaan bij een mooi plaatje &hellip;<br><br>Ze is daar gewoon. Zichzelf.<br><br>Zou je denken?<br><br>Een schaduw zweeft voor haar. Iets wat haast een ander lijkt, iets wat haar in een eeuwigheid zet.<br><br>Wie is degene voor haar op die plek? Zij zelf ouder of jonger, in een andere tijd? Had ze toen een lange rok aan? Zwanger?<br><br>De vrouw die leunt is ontegenzeggelijk modern, vlot gekleed. Haar schaduw heeft de contouren van eeuwen geleden, uit de kwetsbare tijd van haar voorouders.<br><br> 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="360">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-25 20:52:29">

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

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,360);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://beeldtekst.bvstemmen.nl/media/detail/360/" data-layout="icon_link"></div></div>

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