<!--cachetime:1427221903--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjIxNCI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMjE0LyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8yMTQvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YToxMDp7czo0OiJ0YWdzIjthOjQ6e2k6MDthOjM6e3M6NDoiVGFncyI7YTo0OntzOjI6ImlkIjtzOjM6IjIzMCI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNzEiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNCI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czoyOiI3MSI7czo3OiJ0YWduYW1lIjtzOjU6InN0cmlwIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIyMTQiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTE0IDE4OjI1OjIwIjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjE1OiJTVFJJUF9yYW1lbi5qcGciO3M6NzoidXNlcl9pZCI7czoyOiIzMSI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjIwOiJTdHJpcCBpbiBkZSBldGFsYWdlcyI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDowMjoxNCAxMjowNTo1OSI7czoxMToib3BtZXJraW5nZW4iO3M6MTA5OiJFdGFsYWdlcyBnZXZ1bGQgbWV0IHN0cmlwcy4gWmljaHRiYXJlIExpam5lbiBpcyB0ZSB6aWVuIGJpaiBCRVAgU3RyaXB0LCBlZW4gcm91dGUgdmFuIGV0YWxhZ2VzIGRvb3IgT3VkLVdlc3QuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiOTAiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjE7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiIyMzEiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjcyIjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIyMTQiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MjoiNzIiO3M6NzoidGFnbmFtZSI7czo4OiJldGFsYWdlcyI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjE0IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xNCAxODoyNToyMCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToiU1RSSVBfcmFtZW4uanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoyMDoiU3RyaXAgaW4gZGUgZXRhbGFnZXMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDI6MTQgMTI6MDU6NTkiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjEwOToiRXRhbGFnZXMgZ2V2dWxkIG1ldCBzdHJpcHMuIFppY2h0YmFyZSBMaWpuZW4gaXMgdGUgemllbiBiaWogQkVQIFN0cmlwdCwgZWVuIHJvdXRlIHZhbiBldGFsYWdlcyBkb29yIE91ZC1XZXN0LiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjkwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aToyO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMjM0IjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI1OCI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjE0Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjU4IjtzOjc6InRhZ25hbWUiO3M6MTU6InppY2h0YmFyZWxpam5lbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjE0IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xNCAxODoyNToyMCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToiU1RSSVBfcmFtZW4uanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoyMDoiU3RyaXAgaW4gZGUgZXRhbGFnZXMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDI6MTQgMTI6MDU6NTkiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjEwOToiRXRhbGFnZXMgZ2V2dWxkIG1ldCBzdHJpcHMuIFppY2h0YmFyZSBMaWpuZW4gaXMgdGUgemllbiBiaWogQkVQIFN0cmlwdCwgZWVuIHJvdXRlIHZhbiBldGFsYWdlcyBkb29yIE91ZC1XZXN0LiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjkwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319aTozO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNzMxIjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxNzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNCI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czoyOiJpZCI7czozOiIxNzgiO3M6NzoidGFnbmFtZSI7czo3OiJzdHJhdGVuIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIyMTQiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTE0IDE4OjI1OjIwIjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjE1OiJTVFJJUF9yYW1lbi5qcGciO3M6NzoidXNlcl9pZCI7czoyOiIzMSI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjIwOiJTdHJpcCBpbiBkZSBldGFsYWdlcyI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czoxOToiMjAxNDowMjoxNCAxMjowNTo1OSI7czoxMToib3BtZXJraW5nZW4iO3M6MTA5OiJFdGFsYWdlcyBnZXZ1bGQgbWV0IHN0cmlwcy4gWmljaHRiYXJlIExpam5lbiBpcyB0ZSB6aWVuIGJpaiBCRVAgU3RyaXB0LCBlZW4gcm91dGUgdmFuIGV0YWxhZ2VzIGRvb3IgT3VkLVdlc3QuIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MjoiOTAiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX19czo0OiJkYXRhIjthOjU6e3M6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMjE0IjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xNCAxODoyNToyMCI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czoxNToiU1RSSVBfcmFtZW4uanBnIjtzOjc6InVzZXJfaWQiO3M6MjoiMzEiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoyMDoiU3RyaXAgaW4gZGUgZXRhbGFnZXMiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MTk6IjIwMTQ6MDI6MTQgMTI6MDU6NTkiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjEwOToiRXRhbGFnZXMgZ2V2dWxkIG1ldCBzdHJpcHMuIFppY2h0YmFyZSBMaWpuZW4gaXMgdGUgemllbiBiaWogQkVQIFN0cmlwdCwgZWVuIHJvdXRlIHZhbiBldGFsYWdlcyBkb29yIE91ZC1XZXN0LiI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjkwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO31zOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoyOiIzMSI7czo4OiJ1c2VybmFtZSI7czoxNDoiYnJ1QGV1cm9uZXQubmwiO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0xNCAxNDo0MDo0NyI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0xNCAxNDo0MDo0NyI7czo0OiJuYWFtIjtzOjg6IkJydW5ldHRlIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjE6e2k6MDthOjQ6e3M6MjoiaWQiO3M6MjoiOTYiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjE0IjtzOjEyOiJyZWxhdGllc29vcnQiO3M6NToibWFrZXIiO3M6NzoidXNlcl9pZCI7czoyOiIzMSI7fX1zOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7YToxOntpOjA7YTozOntzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNCI7czo5OiJvYmplY3RfaWQiO3M6MjoiOTMiO3M6MjoiaWQiO3M6MzoiMjEyIjt9fXM6NDoiVGFncyI7YTo0OntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjIzMCI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNzEiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjIxNCI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiMjMxIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI3MiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMjE0Ijt9aToyO2E6NDp7czoyOiJpZCI7czozOiIyMzQiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjU4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIyMTQiO31pOjM7YTo0OntzOjI6ImlkIjtzOjM6IjczMSI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIyMTQiO319fXM6NzoibG9jZGF0YSI7YTozOntzOjg6IkxvY2F0aW9uIjthOjM6e3M6MjoiaWQiO3M6MzoiMTIyIjtzOjM6ImxhdCI7czoxMzoiNTIuMzY4Njk0ODAwMCI7czozOiJsb24iO3M6MTI6IjQuODY3OTE5NTAwMCI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjE6e2k6MDthOjM6e3M6MTE6ImxvY2F0aW9uX2lkIjtzOjM6IjEyMiI7czo5OiJvYmplY3RfaWQiO3M6MjoiOTMiO3M6MjoiaWQiO3M6MjoiOTMiO319czozOiJBZHIiO2E6MTp7aTowO2E6Mjp7czoyOiJpZCI7czozOiIxMDUiO3M6MTE6ImxvY2F0aW9uX2lkIjtzOjM6IjEyMiI7fX19czo1OiJhZHJlcyI7YToxOntpOjA7YToyOntzOjg6IkFkcnBhcnRzIjthOjU6e3M6MjoiaWQiO3M6MzoiMTA1IjtzOjExOiJhZHJwYXJ0c19pZCI7czozOiIxMDQiO3M6NDoibmFhbSI7czoyOiI5MCI7czo1OiJsZXZlbCI7czoxOiIyIjtzOjY6ImFkcl9pZCI7czozOiIxMDUiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjM6IjEwNCI7czoxMToiYWRycGFydHNfaWQiO3M6MToiMiI7czo0OiJuYWFtIjtzOjIxOiJFbGlzYWJldGggV29sZmZzdHJhYXQiO3M6NToibGV2ZWwiO3M6MToiMyI7czo2OiJhZHJfaWQiO3M6MzoiMTA0Ijt9fX1zOjU6Im1ha2VyIjthOjE6e3M6NDoiVXNlciI7YTo4OntzOjI6ImlkIjtzOjI6IjMxIjtzOjg6InVzZXJuYW1lIjtzOjE0OiJicnVAZXVyb25ldC5ubCI7czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTE0IDE0OjQwOjQ3IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTE0IDE0OjQwOjQ3IjtzOjQ6Im5hYW0iO3M6ODoiQnJ1bmV0dGUiO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO319czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czo0MzoiU3RyYWF0YmVlbGQgdmFuIGRlIGJ1dXJ0IGluIGtvcnRlIGZpbG1wamVzLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo0NTcwOiI8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyICI+CiAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciA0MCBzZWNvbmRlbjwvYT4gPC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wL2Q2LmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC9kNi5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wL2Q2LmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icGVyc29uIj5CcnVuZXR0ZTwvc3Bhbj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gRWxpc2FiZXRoIFdvbGZmc3RyYWF0IDkwCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+ZmVicnVhcmkgMjAxNAogICAgICAgICAgICAgICAgICAgIDwvc21hbGw+CiAgICAgICAgICAgICAgICA8L2ZpZ2NhcHRpb24+CiAgICAgICAgICAgIDwvZmlndXJlPgoKICAgICAgICAgICAgPGgyIHN0eWxlPSJkaXNwbGF5OmlubGluZTsiPlN0cmlwIGluIGRlIGV0YWxhZ2VzPGJyPjwvaDI+CgogICAgICAgICBFdGFsYWdlcyBnZXZ1bGQgbWV0IHN0cmlwcy4gWmljaHRiYXJlIExpam5lbiBpcyB0ZSB6aWVuIGJpaiBCRVAgU3RyaXB0LCBlZW4gcm91dGUgdmFuIGV0YWxhZ2VzIGRvb3IgT3VkLVdlc3QuIAogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CgogICAgPGRpdiBjbGFzcz0icGFwZXIgIiA+CjxwPkdlZWYgPGEgaHJlZj0iI3VyIj5qZSByZWFjdGllPC9hPiBvcCBkaXQgaXRlbS48L3A+CiAgICAKICAgIAo8ZGl2IGNsYXNzPSJ1ZGl2IHJvdW5kIj4KCjxoMiBpZD0idXIiPjwvaDI+Cjxmb3JtIGlkPSJBZGRGb3JtIiBuYW1lPSJBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjdGlvbj0iL2NvbW1lbnQvYWRkLyIgb25zdWJtaXQ9InJldHVybiBjaGVja0NvbW1lbnRBZGRGb3JtKCk7Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtwYWdpbmFdIiB2YWx1ZT0iMjE0Ij4KCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2hldGdldGFsXSIgdmFsdWU9IjE2MjUzNDE1NTI2Nzg4OSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW2RhdHVtXSIgdmFsdWU9IjIwMTUtMDMtMjQgMTg6MzE6NDMiPgoKPHA+PGJyPkpvdXcgcmVhY3RpZTo8L3A+Cgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0YXJlYSI+PHRleHRhcmVhIG5hbWU9ImRhdGFbQ29tbWVudHNdW2JlcmljaHRdIiBjb2xzPSIzMCIgcm93cz0iNiIgaWQ9ImFkZGZvcm1CZXJpY2h0IiA+PC90ZXh0YXJlYT48L2Rpdj4KCjxwPjxicj5OYWFtOjwvcD48ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bbmFhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtTmFhbSI+PC9kaXY+Cgo8cD48YnI+QW50aS1zcGFtIHZyYWFnOiBIb2V2ZWVsIGlzIHR3ZWUgcGx1cyBkcmllPzwvcD4KPGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW3NwYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybVNwYW0iPiA8c3BhbiBzdHlsZT0iZGlzcGxheTpub25lO2NvbG9yOnJlZDtmb250LXdlaWdodDpib2xkO21hcmdpbi1sZWZ0OjFlbTsiICBpZD0iY29tbXNnIj48L3NwYW4+PC9kaXY+CjxwIGNsYXNzPSJjZW50ZXIiPjxicj48aW5wdXQgY2xhc3M9ImN0YSIgdHlwZT0ic3VibWl0IiBuYW1lPSJub25lIiB2YWx1ZT0iSW5zdHVyZW4iPjwvcD4KCjwvZm9ybT4KCjxwPjxzdHJvbmc+Ti5CLjwvc3Ryb25nPiBEZSByZWRhY3RpZSBrYW4gamUgYmlqZHJhZ2UgYWFucGFzc2VuIG9mIHZlcndpamRlcmVuLiBIaWVyb3ZlciB3b3JkdCBuaWV0IGdlY29ycmVzcG9uZGVlcmQuPC9wPgoKCjwvZGl2PiAgICA8L2Rpdj4KCgo8L2FydGljbGU+Cgo8YXNpZGU+CgoKPGRpdiBjbGFzcz0icGFwZXIiPjxhIGhyZWY9Ii9tZWRpYS90YWcvNzEvIiBjbGFzcz0ibGFiZWwiPiNzdHJpcDwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy83Mi8iIGNsYXNzPSJsYWJlbCI+I2V0YWxhZ2VzPC9hPiA8YSBocmVmPSIvbWVkaWEvdGFnLzU4LyIgY2xhc3M9ImxhYmVsIj4jemljaHRiYXJlbGlqbmVuPC9hPiA8YSBocmVmPSIvbWVkaWEvdGFnLzE3OC8iIGNsYXNzPSJsYWJlbCI+I3N0cmF0ZW48L2E+IAoKPGlucHV0IGlkPSJ0YWdhZGRMYWJlbCIgdHlwZT0idGV4dCIgdmFsdWU9Im5pZXV3IGxhYmVsIiBvbmtleXVwPSJ0YWdhZGQodGhpcyxldmVudCwyMTQpOyIgb25ibHVyPSJpbnB1dExlYXZlKHRoaXMpOyIgb25mb2N1cz0iaW5wdXRGb2N1cyh0aGlzKTsiIHNwZWxsY2hlY2s9ImZhbHNlIiBhdXRvY29tcGxldGU9Im9mZiIgbmFtZT0idGFnYWRkTGFiZWwiPjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8yMTQvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNjg2OTQ4MDAwLCA0Ljg2NzkxOTUwMDApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NTA5OiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9IlN0cmlwIGluIGRlIGV0YWxhZ2VzIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC9kNi5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMjE0LyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
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
<meta property="og:title" content="Strip in de etalages" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/d6.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/214/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/d6.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/d6.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/d6.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        <span class="person">Brunette</span>
                                                    - Elisabeth Wolffstraat 90
                            <br>februari 2014
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Strip in de etalages<br></h2>

         Etalages gevuld met strips. Zichtbare Lijnen is te zien bij BEP Stript, een route van etalages door Oud-West. 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="214">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-24 18:31:43">

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


<div class="paper"><a href="/media/tag/71/" class="label">#strip</a> <a href="/media/tag/72/" class="label">#etalages</a> <a href="/media/tag/58/" class="label">#zichtbarelijnen</a> <a href="/media/tag/178/" class="label">#straten</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,214);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/214/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3686948000, 4.8679195000);
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