<!--cachetime:1426557150--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjM6IjE3MSI7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJtb2RlbHMiO2E6MTU6e3M6NToiTWVkaWEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiTWVkaWEiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxNzoiT2JqZWN0c2F0bG9jYXRpb24iO31zOjc6Ik9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiT2JqZWN0cyI7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7fXM6ODoiQWRycGFydHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO31zOjg6IkFkcnRhYmxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnRhYmxlIjt9czo4OiJMb2NhdGlvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJMb2NhdGlvbiI7fXM6MzoiQWRyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFkciI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo0OiJUYWdzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlRhZ3MiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlRhZ25hbWVzIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE1OiJOYW1lc3dpdGhtZWRpdW0iO31zOjg6IlByb2plY3RzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlByb2plY3RzIjt9czo4OiJNZXNzYWdlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJNZXNzYWdlcyI7fXM6OToiQWRycGFydHNiIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFkcnBhcnRzIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE3OiJtZWRpYS9kZXRhaWwvMTcxLyI7czo0OiJiYXNlIjtzOjA6IiI7czo3OiJ3ZWJyb290IjtzOjE6Ii8iO3M6NDoiaGVyZSI7czoxODoiL21lZGlhL2RldGFpbC8xNzEvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6Mjp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiMTYzIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI2MiI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTcxIjt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjI6IjYyIjtzOjc6InRhZ25hbWUiO3M6OToic291dmVuaXJzIjt9czo1OiJNZWRpYSI7YToxOTp7czoyOiJpZCI7czozOiIxNzEiO3M6ODoiZXh0ZW5zaWUiO3M6MzoianBnIjtzOjg6InNvb3J0X2lkIjtzOjE6IjEiO3M6MTM6InN0b3JhZ2Vsb2NfaWQiO3M6MToiMSI7czo0OiJkYXRlIjtzOjE5OiIyMDE0LTAyLTEwIDE0OjEyOjUxIjtzOjE2OiJvcmlnaW5hbGZpbGVuYW1lIjtzOjM5OiI1NzczNTZfNTMyMDYyMDM2ODA4NTE0XzEyOTAyMjIyOTVfbi5qcGciO3M6NzoidXNlcl9pZCI7czoxOiIzIjtzOjY6ImV4dHVybCI7czowOiIiO3M6NzoiZXh0bGluayI7czowOiIiO3M6NToidGl0ZWwiO3M6MTc6Ikdldm9uZGVuIHZvb3J3ZXJwIjtzOjQ6ImJyb24iO3M6MDoiIjtzOjg6ImRhdGVyaW5nIjtzOjQ6IjE5MzAiO3M6MTE6Im9wbWVya2luZ2VuIjtzOjc3NjoiRGV6ZSBnaXRhYXIgdm9uZCBpayB6byduIDI1IGphYXIgZ2VsZWRlbiBiaWogaGV0IGdyb2Z2dWlsLiBUb3Qgdm9yaWcgamFhciBzdG9uZCBkZSBnaXRhYXIgb3Agem9sZGVyIG1hYXIgbnUgaGViIGlrICdtIG5hIGFsIGRpZSBqYXJlbiBvcGdla25hcHQuIFZpYSBlZW4gZm9ydW0gLWluIGRlIHRpamQgZGF0IGlrIGRlIGdpdGFhciB2b25kIGJlc3RvbmQgaW50ZXJuZXQgbm9nIG5pZXQtIGhlYiBpayB1aXRnZXZvbmRlbiBkYXQgZGUgZ2l0YWFyIGluIGRlIGphcmVuIGRlcnRpZyBpbiBTY2hvZW5iYWNoIChCb2hlbWVuLCBudSBEdWl0c2xhbmQpIGdlYm91d2QgaXMuIEhpZXJiaWogZWVuIGdlbHVpZHNmcmFnbWVudCwgJ3VucGx1Z2dlZCcgZHVzIGdlZW4gdmVyc3RlcmtpbmcsIGRhbiBrdW4gamUgemVsZiBob3JlbiBob2UgaGV0IGtsaW5rdC4gCjxpZnJhbWUgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTY2IiBzY3JvbGxpbmc9Im5vIiBmcmFtZWJvcmRlcj0ibm8iIHNyYz0iaHR0cHM6Ly93LnNvdW5kY2xvdWQuY29tL3BsYXllci8/dXJsPWh0dHBzJTNBLy9hcGkuc291bmRjbG91ZC5jb20vdHJhY2tzLzY2Mjg3MjQxJmFtcDtjb2xvcj1mZjU1MDAmYW1wO2F1dG9fcGxheT10cnVlJmFtcDtoaWRlX3JlbGF0ZWQ9ZmFsc2UmYW1wO3Nob3dfYXJ0d29yaz10cnVlIj48L2lmcmFtZT4KKENvdHRvbiBDbHViIEJpZyBCYW5kLCBwaWFubzogUGF1bCBHb21wZXMsIGRydW1zOiBQYXVsIFdvdXRlcnMsIEJhczogQ2FzcGVyIFZvZ2VsLCBHaXRhYXI6IFJvbiBNZXVsZW5zdGVlbikiO3M6NToiZXh0aWQiO3M6MDoiIjtzOjg6ImV4dHRodW1iIjtzOjA6IiI7czoxMDoiaHVpc251bW1lciI7czowOiIiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6Njoibm9zaG93IjtzOjE6IjAiO3M6NToic2NhbGUiO3M6MToiMCI7fX1pOjE7YTozOntzOjQ6IlRhZ3MiO2E6NDp7czoyOiJpZCI7czozOiIyNDIiO3M6MTE6InRhZ25hbWVzX2lkIjtzOjI6IjgzIjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czozOiIxNzEiO31zOjg6IlRhZ25hbWVzIjthOjI6e3M6MjoiaWQiO3M6MjoiODMiO3M6NzoidGFnbmFtZSI7czoxOToiZ2V2b25kZW4gdm9vcndlcnBlbiI7fXM6NToiTWVkaWEiO2E6MTk6e3M6MjoiaWQiO3M6MzoiMTcxIjtzOjg6ImV4dGVuc2llIjtzOjM6ImpwZyI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxNC0wMi0xMCAxNDoxMjo1MSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czozOToiNTc3MzU2XzUzMjA2MjAzNjgwODUxNF8xMjkwMjIyMjk1X24uanBnIjtzOjc6InVzZXJfaWQiO3M6MToiMyI7czo2OiJleHR1cmwiO3M6MDoiIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjE3OiJHZXZvbmRlbiB2b29yd2VycCI7czo0OiJicm9uIjtzOjA6IiI7czo4OiJkYXRlcmluZyI7czo0OiIxOTMwIjtzOjExOiJvcG1lcmtpbmdlbiI7czo3NzY6IkRlemUgZ2l0YWFyIHZvbmQgaWsgem8nbiAyNSBqYWFyIGdlbGVkZW4gYmlqIGhldCBncm9mdnVpbC4gVG90IHZvcmlnIGphYXIgc3RvbmQgZGUgZ2l0YWFyIG9wIHpvbGRlciBtYWFyIG51IGhlYiBpayAnbSBuYSBhbCBkaWUgamFyZW4gb3BnZWtuYXB0LiBWaWEgZWVuIGZvcnVtIC1pbiBkZSB0aWpkIGRhdCBpayBkZSBnaXRhYXIgdm9uZCBiZXN0b25kIGludGVybmV0IG5vZyBuaWV0LSBoZWIgaWsgdWl0Z2V2b25kZW4gZGF0IGRlIGdpdGFhciBpbiBkZSBqYXJlbiBkZXJ0aWcgaW4gU2Nob2VuYmFjaCAoQm9oZW1lbiwgbnUgRHVpdHNsYW5kKSBnZWJvdXdkIGlzLiBIaWVyYmlqIGVlbiBnZWx1aWRzZnJhZ21lbnQsICd1bnBsdWdnZWQnIGR1cyBnZWVuIHZlcnN0ZXJraW5nLCBkYW4ga3VuIGplIHplbGYgaG9yZW4gaG9lIGhldCBrbGlua3QuIAo8aWZyYW1lIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE2NiIgc2Nyb2xsaW5nPSJubyIgZnJhbWVib3JkZXI9Im5vIiBzcmM9Imh0dHBzOi8vdy5zb3VuZGNsb3VkLmNvbS9wbGF5ZXIvP3VybD1odHRwcyUzQS8vYXBpLnNvdW5kY2xvdWQuY29tL3RyYWNrcy82NjI4NzI0MSZhbXA7Y29sb3I9ZmY1NTAwJmFtcDthdXRvX3BsYXk9dHJ1ZSZhbXA7aGlkZV9yZWxhdGVkPWZhbHNlJmFtcDtzaG93X2FydHdvcms9dHJ1ZSI+PC9pZnJhbWU+CihDb3R0b24gQ2x1YiBCaWcgQmFuZCwgcGlhbm86IFBhdWwgR29tcGVzLCBkcnVtczogUGF1bCBXb3V0ZXJzLCBCYXM6IENhc3BlciBWb2dlbCwgR2l0YWFyOiBSb24gTWV1bGVuc3RlZW4pIjtzOjU6ImV4dGlkIjtzOjA6IiI7czo4OiJleHR0aHVtYiI7czowOiIiO3M6MTA6Imh1aXNudW1tZXIiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjM6IjE3MSI7czo4OiJleHRlbnNpZSI7czozOiJqcGciO3M6ODoic29vcnRfaWQiO3M6MToiMSI7czoxMzoic3RvcmFnZWxvY19pZCI7czoxOiIxIjtzOjQ6ImRhdGUiO3M6MTk6IjIwMTQtMDItMTAgMTQ6MTI6NTEiO3M6MTY6Im9yaWdpbmFsZmlsZW5hbWUiO3M6Mzk6IjU3NzM1Nl81MzIwNjIwMzY4MDg1MTRfMTI5MDIyMjI5NV9uLmpwZyI7czo3OiJ1c2VyX2lkIjtzOjE6IjMiO3M6NjoiZXh0dXJsIjtzOjA6IiI7czo3OiJleHRsaW5rIjtzOjA6IiI7czo1OiJ0aXRlbCI7czoxNzoiR2V2b25kZW4gdm9vcndlcnAiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6NDoiMTkzMCI7czoxMToib3BtZXJraW5nZW4iO3M6Nzc2OiJEZXplIGdpdGFhciB2b25kIGlrIHpvJ24gMjUgamFhciBnZWxlZGVuIGJpaiBoZXQgZ3JvZnZ1aWwuIFRvdCB2b3JpZyBqYWFyIHN0b25kIGRlIGdpdGFhciBvcCB6b2xkZXIgbWFhciBudSBoZWIgaWsgJ20gbmEgYWwgZGllIGphcmVuIG9wZ2VrbmFwdC4gVmlhIGVlbiBmb3J1bSAtaW4gZGUgdGlqZCBkYXQgaWsgZGUgZ2l0YWFyIHZvbmQgYmVzdG9uZCBpbnRlcm5ldCBub2cgbmlldC0gaGViIGlrIHVpdGdldm9uZGVuIGRhdCBkZSBnaXRhYXIgaW4gZGUgamFyZW4gZGVydGlnIGluIFNjaG9lbmJhY2ggKEJvaGVtZW4sIG51IER1aXRzbGFuZCkgZ2Vib3V3ZCBpcy4gSGllcmJpaiBlZW4gZ2VsdWlkc2ZyYWdtZW50LCAndW5wbHVnZ2VkJyBkdXMgZ2VlbiB2ZXJzdGVya2luZywgZGFuIGt1biBqZSB6ZWxmIGhvcmVuIGhvZSBoZXQga2xpbmt0LiAKPGlmcmFtZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNjYiIHNjcm9sbGluZz0ibm8iIGZyYW1lYm9yZGVyPSJubyIgc3JjPSJodHRwczovL3cuc291bmRjbG91ZC5jb20vcGxheWVyLz91cmw9aHR0cHMlM0EvL2FwaS5zb3VuZGNsb3VkLmNvbS90cmFja3MvNjYyODcyNDEmYW1wO2NvbG9yPWZmNTUwMCZhbXA7YXV0b19wbGF5PXRydWUmYW1wO2hpZGVfcmVsYXRlZD1mYWxzZSZhbXA7c2hvd19hcnR3b3JrPXRydWUiPjwvaWZyYW1lPgooQ290dG9uIENsdWIgQmlnIEJhbmQsIHBpYW5vOiBQYXVsIEdvbXBlcywgZHJ1bXM6IFBhdWwgV291dGVycywgQmFzOiBDYXNwZXIgVm9nZWwsIEdpdGFhcjogUm9uIE1ldWxlbnN0ZWVuKSI7czo1OiJleHRpZCI7czowOiIiO3M6ODoiZXh0dGh1bWIiO3M6MDoiIjtzOjEwOiJodWlzbnVtbWVyIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo2OiJub3Nob3ciO3M6MToiMCI7czo1OiJzY2FsZSI7czoxOiIwIjt9czo0OiJVc2VyIjthOjg6e3M6MjoiaWQiO3M6MToiMyI7czo4OiJ1c2VybmFtZSI7czoxNzoicm9ubWV1bEB4czRhbGwubmwiO3M6ODoicGFzc3dvcmQiO3M6NDA6IjUxMjU1ZGE0ZWQzNTk2ZWVkYzA4YzQ3MzI2ZDQxZjA5MTBiOWRkMmYiO3M6NDoicm9sZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTAtMDkgMTQ6MzI6NTQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTAtMDkgMTQ6MzI6NTQiO3M6NDoibmFhbSI7czoxNToiUm9uIE1ldWxlbnN0ZWVuIjtzOjk6Im5hYW1femllbiI7czoxOiIwIjt9czoxNToiTmFtZXN3aXRobWVkaXVtIjthOjA6e31zOjE3OiJNZWRpYWFib3V0b2JqZWN0cyI7YToxOntpOjA7YTozOntzOjg6Im1lZGlhX2lkIjtzOjM6IjE3MSI7czo5OiJvYmplY3RfaWQiO3M6MjoiMTUiO3M6MjoiaWQiO3M6MzoiMTY5Ijt9fXM6NDoiVGFncyI7YToyOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjE2MyI7czoxMToidGFnbmFtZXNfaWQiO3M6MjoiNjIiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjM6IjE3MSI7fWk6MTthOjQ6e3M6MjoiaWQiO3M6MzoiMjQyIjtzOjExOiJ0YWduYW1lc19pZCI7czoyOiI4MyI7czozOiJyZWwiO3M6NToibWVkaWEiO3M6ODoibWVkaWFfaWQiO3M6MzoiMTcxIjt9fX1zOjc6ImxvY2RhdGEiO2E6Mzp7czo4OiJMb2NhdGlvbiI7YTozOntzOjI6ImlkIjtzOjI6IjIwIjtzOjM6ImxhdCI7czoxMzoiNTIuMzcwMjE1NzAwMCI7czozOiJsb24iO3M6MTI6IjQuODk1MTY3OTAwMCI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjE6e2k6MDthOjM6e3M6MTE6ImxvY2F0aW9uX2lkIjtzOjI6IjIwIjtzOjk6Im9iamVjdF9pZCI7czoyOiIxNSI7czoyOiJpZCI7czoyOiIxNSI7fX1zOjM6IkFkciI7YToxOntpOjA7YToyOntzOjI6ImlkIjtzOjE6IjIiO3M6MTE6ImxvY2F0aW9uX2lkIjtzOjI6IjIwIjt9fX1zOjU6ImFkcmVzIjthOjE6e2k6MDthOjI6e3M6ODoiQWRycGFydHMiO2E6NTp7czoyOiJpZCI7czoxOiIyIjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIxIjtzOjQ6Im5hYW0iO3M6OToiQW1zdGVyZGFtIjtzOjU6ImxldmVsIjtzOjE6IjUiO3M6NjoiYWRyX2lkIjtzOjE6IjIiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjE6IjEiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjE6IjAiO3M6NDoibmFhbSI7czo5OiJOZWRlcmxhbmQiO3M6NToibGV2ZWwiO3M6MToiNiI7czo2OiJhZHJfaWQiO3M6MToiMSI7fX19czoxNjoibWV0YV9kZXNjcmlwdGlvbiI7czo0MzoiU3RyYWF0YmVlbGQgdmFuIGRlIGJ1dXJ0IGluIGtvcnRlIGZpbG1wamVzLiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTU6InByb2plY3Rsb25nbmFtZSI7czoxMToiNDAgc2Vjb25kZW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo1NTkzOiI8YXJ0aWNsZT4KICAgIDxkaXYgY2xhc3M9InBhcGVyICI+CiAgICAgICAgPHAgY2xhc3M9InN1Ym1lbnUiPjxhIGhyZWY9Ii9rYWFydC8iPkthYXJ0PC9hPiAtIDxhIGhyZWY9Ii9tZWRpYS8iPkxpanN0PC9hPiB8IDxhIGhyZWY9Ii9vdmVyLyI+T3ZlciA0MCBzZWNvbmRlbjwvYT4gPC9wPiAgICA8L2gyPiAKICAgICAgICA8ZGl2IGNsYXNzPSJkZXRhaWwiPgoKICAgICAgICAgICAgPGZpZ3VyZSBpZD0iZmlnIiBjbGFzcz0iZmxvYXRyIj4KCgogICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGNsYXNzPSJpdGVtaW1nIGNsaWNrYWJsZSIgaWQ9InRoZWltZyIgc3JjPSIvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcvdzIxMy8wL2FiLmpwZyIgIG9uY2xpY2s9InBvcHVwaW1nKCcvL2NhY2hlLmJ2c3RlbW1lbi5ubC9pbWcnLCAnMC9hYi5qcGcnKTsiPgogICAgICAgICAgICAgICAgICAgICAgICA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gb25sb2FkZml4aW1nKCkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbXllbCA9ICQoImIzIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGltZ2VsID0gJCgidGhlaW1nIik7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG1oID0gbXllbC5jbGllbnRIZWlnaHQ7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRoID0gbWggLSAyODA7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuaGVpZ2h0ID0gdGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1nZWwuc3JjID0gIi8vY2FjaGUuYnZzdGVtbWVuLm5sL2ltZy9oIiArIHRoICsgIi8wL2FiLmpwZyI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRMb2FkRXZlbnQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25sb2FkZml4aW1nKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgPC9zY3JpcHQ+CgogICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gTmVkZXJsYW5kIEFtc3RlcmRhbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPnNlcHRlbWJlciAxCiAgICAgICAgICAgICAgICAgICAgPC9zbWFsbD4KICAgICAgICAgICAgICAgIDwvZmlnY2FwdGlvbj4KICAgICAgICAgICAgPC9maWd1cmU+CgogICAgICAgICAgICA8aDIgc3R5bGU9ImRpc3BsYXk6aW5saW5lOyI+R2V2b25kZW4gdm9vcndlcnA8YnI+PC9oMj4KCiAgICAgICAgIERlemUgZ2l0YWFyIHZvbmQgaWsgem8nbiAyNSBqYWFyIGdlbGVkZW4gYmlqIGhldCBncm9mdnVpbC4gVG90IHZvcmlnIGphYXIgc3RvbmQgZGUgZ2l0YWFyIG9wIHpvbGRlciBtYWFyIG51IGhlYiBpayAnbSBuYSBhbCBkaWUgamFyZW4gb3BnZWtuYXB0LiBWaWEgZWVuIGZvcnVtIC1pbiBkZSB0aWpkIGRhdCBpayBkZSBnaXRhYXIgdm9uZCBiZXN0b25kIGludGVybmV0IG5vZyBuaWV0LSBoZWIgaWsgdWl0Z2V2b25kZW4gZGF0IGRlIGdpdGFhciBpbiBkZSBqYXJlbiBkZXJ0aWcgaW4gU2Nob2VuYmFjaCAoQm9oZW1lbiwgbnUgRHVpdHNsYW5kKSBnZWJvdXdkIGlzLiBIaWVyYmlqIGVlbiBnZWx1aWRzZnJhZ21lbnQsICd1bnBsdWdnZWQnIGR1cyBnZWVuIHZlcnN0ZXJraW5nLCBkYW4ga3VuIGplIHplbGYgaG9yZW4gaG9lIGhldCBrbGlua3QuIDxicj48YnI+PGlmcmFtZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNjYiIHNjcm9sbGluZz0ibm8iIGZyYW1lYm9yZGVyPSJubyIgc3JjPSJodHRwczovL3cuc291bmRjbG91ZC5jb20vcGxheWVyLz91cmw9aHR0cHMlM0EvL2FwaS5zb3VuZGNsb3VkLmNvbS90cmFja3MvNjYyODcyNDEmYW1wO2NvbG9yPWZmNTUwMCZhbXA7YXV0b19wbGF5PXRydWUmYW1wO2hpZGVfcmVsYXRlZD1mYWxzZSZhbXA7c2hvd19hcnR3b3JrPXRydWUiPjwvaWZyYW1lPjxicj48YnI+KENvdHRvbiBDbHViIEJpZyBCYW5kLCBwaWFubzogUGF1bCBHb21wZXMsIGRydW1zOiBQYXVsIFdvdXRlcnMsIEJhczogQ2FzcGVyIFZvZ2VsLCBHaXRhYXI6IFJvbiBNZXVsZW5zdGVlbikgCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAo8ZGl2IGNsYXNzPSJyZWFjdGllIj48ZGl2IGNsYXNzPSJ0ZXh0d3JhcHBlciI+CjxpbWcgc3JjPSIvL2J2c3RlbW1lbi5ubC9pbWcvaWNzL2ljb25fdXNlci0yOHgyNC5wbmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIyMiIgY2xhc3M9InJlYWN0aW1nIiBhbHQ9IiI+CjxzcGFuIGNsYXNzPSJwZXJzb24iPlJvbiBNZXVsZW5zdGVlbjwvc3Bhbj4sJm5ic3A7MjQgZmVicnVhcmkgMjAxNDombmJzcDtEYW5rIGplITwvZGl2PjwvZGl2PjxkaXYgY2xhc3M9InJlYWN0aWUiPjxkaXYgY2xhc3M9InRleHR3cmFwcGVyIj4KPGltZyBzcmM9Ii8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvaWNvbl91c2VyLTI4eDI0LnBuZyIgd2lkdGg9IjIyIiBoZWlnaHQ9IjIyIiBjbGFzcz0icmVhY3RpbWciIGFsdD0iIj4KPHNwYW4gY2xhc3M9InBlcnNvbiI+S2VlcyBIYWFrPC9zcGFuPiwmbmJzcDsyNCBmZWJydWFyaSAyMDE0OiZuYnNwO0xla2tlciBnZWx1aWRqZSE8L2Rpdj48L2Rpdj4gICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIxNzEiPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11baGV0Z2V0YWxdIiB2YWx1ZT0iMTYyNTM0MTU1MjY3ODg5Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGF0YVtDb21tZW50c11bZGF0dW1dIiB2YWx1ZT0iMjAxNS0wMy0xNyAwMTo1MjozMCI+Cgo8cD48YnI+Sm91dyByZWFjdGllOjwvcD4KCjxkaXYgY2xhc3M9ImlucHV0IHRleHRhcmVhIj48dGV4dGFyZWEgbmFtZT0iZGF0YVtDb21tZW50c11bYmVyaWNodF0iIGNvbHM9IjMwIiByb3dzPSI2IiBpZD0iYWRkZm9ybUJlcmljaHQiID48L3RleHRhcmVhPjwvZGl2PgoKPHA+PGJyPk5hYW06PC9wPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtuYWFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1OYWFtIj48L2Rpdj4KCjxwPjxicj5BbnRpLXNwYW0gdnJhYWc6IEhvZXZlZWwgaXMgdHdlZSBwbHVzIGRyaWU/PC9wPgo8ZGl2IGNsYXNzPSJpbnB1dCB0ZXh0Ij48aW5wdXQgbmFtZT0iZGF0YVtDb21tZW50c11bc3BhbV0iIHR5cGU9InRleHQiIHZhbHVlPSIiIGlkPSJhZGRmb3JtU3BhbSI+IDxzcGFuIHN0eWxlPSJkaXNwbGF5Om5vbmU7Y29sb3I6cmVkO2ZvbnQtd2VpZ2h0OmJvbGQ7bWFyZ2luLWxlZnQ6MWVtOyIgIGlkPSJjb21tc2ciPjwvc3Bhbj48L2Rpdj4KPHAgY2xhc3M9ImNlbnRlciI+PGJyPjxpbnB1dCBjbGFzcz0iY3RhIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vbmUiIHZhbHVlPSJJbnN0dXJlbiI+PC9wPgoKPC9mb3JtPgoKPHA+PHN0cm9uZz5OLkIuPC9zdHJvbmc+IERlIHJlZGFjdGllIGthbiBqZSBiaWpkcmFnZSBhYW5wYXNzZW4gb2YgdmVyd2lqZGVyZW4uIEhpZXJvdmVyIHdvcmR0IG5pZXQgZ2Vjb3JyZXNwb25kZWVyZC48L3A+CgoKPC9kaXY+ICAgIDwvZGl2PgoKCjwvYXJ0aWNsZT4KCjxhc2lkZT4KCgo8ZGl2IGNsYXNzPSJwYXBlciI+PGEgaHJlZj0iL21lZGlhL3RhZy82Mi8iIGNsYXNzPSJsYWJlbCI+I3NvdXZlbmlyczwvYT4gPGEgaHJlZj0iL21lZGlhL3RhZy84My8iIGNsYXNzPSJsYWJlbCI+I2dldm9uZGVuIHZvb3J3ZXJwZW48L2E+IAoKPGlucHV0IGlkPSJ0YWdhZGRMYWJlbCIgdHlwZT0idGV4dCIgdmFsdWU9Im5pZXV3IGxhYmVsIiBvbmtleXVwPSJ0YWdhZGQodGhpcyxldmVudCwxNzEpOyIgb25ibHVyPSJpbnB1dExlYXZlKHRoaXMpOyIgb25mb2N1cz0iaW5wdXRGb2N1cyh0aGlzKTsiIHNwZWxsY2hlY2s9ImZhbHNlIiBhdXRvY29tcGxldGU9Im9mZiIgbmFtZT0idGFnYWRkTGFiZWwiPjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8xNzEvIiBkYXRhLWxheW91dD0iaWNvbl9saW5rIj48L2Rpdj48L2Rpdj4KCjwvYXNpZGU+Cgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICBmdW5jdGlvbiBzZXRwaW4oKQogICAgewogICAgICAgIHZhciBsbGwgPSBMLmxhdExuZyg1Mi4zNzAyMTU3MDAwLCA0Ljg5NTE2NzkwMDApOwogICAgICAgIG1hcC5zZXRWaWV3KGxsbCwgMTcpOwoKICAgICAgICBQb3NJY29uID0gbmV3IEwuSWNvbih7aWNvblVybDogIi8vYnZzdGVtbWVuLm5sL2ltZy9pY3MvbWFya2VyLnBuZyIsIGljb25TaXplOiBbMjIsIDQyXSwgaWNvbkFuY2hvcjogWzExLCA0Ml19KTsKICAgICAgICBQb3NNYXJrID0gbmV3IEwubWFya2VyKGxsbCwge2ljb246IFBvc0ljb24sIGRyYWdnYWJsZTogZmFsc2V9KS5hZGRUbyhtYXApOwoKICAgICAgICBtYXAudG91Y2hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuZG91YmxlQ2xpY2tab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuc2Nyb2xsV2hlZWxab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAuYm94Wm9vbS5kaXNhYmxlKCk7CiAgICAgICAgbWFwLmtleWJvYXJkLmRpc2FibGUoKTsKICAgIH0KCjwvc2NyaXB0Pgo8c3R5bGU+LmxlYWZsZXQtY29udHJvbC16b29te2Rpc3BsYXk6bm9uZTt9PC9zdHlsZT4KPGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyIgaWQ9ImltZ2VubCIgY2xhc3M9ImltZ2VubCIgb25jbGljaz0iJCgnaW1nZW5sJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsiPgogICAgPGltZyBpZD0iaW1lbmkiIGNsYXNzPSJpbWVuaSIgc3JjPSIiIGFsdD0iIj4KPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6NTA2OiI8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9Ikdldm9uZGVuIHZvb3J3ZXJwIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC9hYi5qcGciIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMTcxLyIgLz48bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9ImJ2c3RlbW1lbiIgLz48bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvL2J2c3RlbW1lbi5ubC9jc3MvbWFwLmNzcyIgLz48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0LmpzIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIvL2J2c3RlbW1lbi5ubC9qcy9sZWFmbGV0Lm1hcmtlcmNsdXN0ZXIuanMiPjwvc2NyaXB0PiI7fQ=='));
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
<meta property="og:title" content="Gevonden voorwerp" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/ab.jpg" /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/171/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                        <img class="itemimg clickable" id="theimg" src="//cache.bvstemmen.nl/img/w213/0/ab.jpg"  onclick="popupimg('//cache.bvstemmen.nl/img', '0/ab.jpg');">
                        <script type="text/javascript">

                            function onloadfiximg()
                            {
                                var myel = $("b3");
                                var imgel = $("theimg");
                                var mh = myel.clientHeight;
                                var th = mh - 280;
                                imgel.height = th;
                                imgel.src = "//cache.bvstemmen.nl/img/h" + th + "/0/ab.jpg";
                            }
                            addLoadEvent(function() {
                                onloadfiximg();
                            });
                        </script>

    

                <figcaption>
                    <small>
                        
                                                    - Nederland Amsterdam
                            <br>september 1
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Gevonden voorwerp<br></h2>

         Deze gitaar vond ik zo'n 25 jaar geleden bij het grofvuil. Tot vorig jaar stond de gitaar op zolder maar nu heb ik 'm na al die jaren opgeknapt. Via een forum -in de tijd dat ik de gitaar vond bestond internet nog niet- heb ik uitgevonden dat de gitaar in de jaren dertig in Schoenbach (Bohemen, nu Duitsland) gebouwd is. Hierbij een geluidsfragment, 'unplugged' dus geen versterking, dan kun je zelf horen hoe het klinkt. <br><br><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/66287241&amp;color=ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_artwork=true"></iframe><br><br>(Cotton Club Big Band, piano: Paul Gompes, drums: Paul Wouters, Bas: Casper Vogel, Gitaar: Ron Meulensteen) 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
<div class="reactie"><div class="textwrapper">
<img src="//bvstemmen.nl/img/ics/icon_user-28x24.png" width="22" height="22" class="reactimg" alt="">
<span class="person">Ron Meulensteen</span>,&nbsp;24 februari 2014:&nbsp;Dank je!</div></div><div class="reactie"><div class="textwrapper">
<img src="//bvstemmen.nl/img/ics/icon_user-28x24.png" width="22" height="22" class="reactimg" alt="">
<span class="person">Kees Haak</span>,&nbsp;24 februari 2014:&nbsp;Lekker geluidje!</div></div>    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="171">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-17 01:52:30">

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


<div class="paper"><a href="/media/tag/62/" class="label">#souvenirs</a> <a href="/media/tag/83/" class="label">#gevonden voorwerpen</a> 

<input id="tagaddLabel" type="text" value="nieuw label" onkeyup="tagadd(this,event,171);" onblur="inputLeave(this);" onfocus="inputFocus(this);" spellcheck="false" autocomplete="off" name="tagaddLabel"></div>

    <div class="paper"><div id="map" class="map"></div></div>

    <div class="paper">
        <div style="overflow: hidden"><h2>Vlakbij</h2>
            <div id="medlist"></div>
        </div>
    </div>
    <div class="paper"><div id="fb-root"></div>
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/171/" data-layout="icon_link"></div></div>

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