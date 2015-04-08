<!--cachetime:1426421841--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjY6ImRldGFpbCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjI6IjM0Ijt9czo2OiJpc0FqYXgiO2I6MDtzOjY6Im1vZGVscyI7YToxNTp7czo1OiJNZWRpYSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo1OiJNZWRpYSI7fXM6MTc6Ik9iamVjdHNhdGxvY2F0aW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7fXM6NzoiT2JqZWN0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo3OiJPYmplY3RzIjt9czoxNzoiTWVkaWFhYm91dG9iamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjt9czo4OiJBZHJwYXJ0cyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBZHJwYXJ0cyI7fXM6ODoiQWRydGFibGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRydGFibGUiO31zOjg6IkxvY2F0aW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkxvY2F0aW9uIjt9czozOiJBZHIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWRyIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjQ6IlRhZ3MiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVGFncyI7fXM6ODoiVGFnbmFtZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiVGFnbmFtZXMiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTU6Ik5hbWVzd2l0aG1lZGl1bSI7fXM6ODoiUHJvamVjdHMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiUHJvamVjdHMiO31zOjg6Ik1lc3NhZ2VzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6Ik1lc3NhZ2VzIjt9czo5OiJBZHJwYXJ0c2IiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQWRycGFydHMiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MTY6Im1lZGlhL2RldGFpbC8zNC8iO3M6NDoiYmFzZSI7czowOiIiO3M6Nzoid2Vicm9vdCI7czoxOiIvIjtzOjQ6ImhlcmUiO3M6MTc6Ii9tZWRpYS9kZXRhaWwvMzQvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxOntpOjA7czo1OiJDYWNoZSI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjQ6InRhZ3MiO2E6MTp7aTowO2E6Mzp7czo0OiJUYWdzIjthOjQ6e3M6MjoiaWQiO3M6MzoiNzI1IjtzOjExOiJ0YWduYW1lc19pZCI7czozOiIxNzgiO3M6MzoicmVsIjtzOjU6Im1lZGlhIjtzOjg6Im1lZGlhX2lkIjtzOjI6IjM0Ijt9czo4OiJUYWduYW1lcyI7YToyOntzOjI6ImlkIjtzOjM6IjE3OCI7czo3OiJ0YWduYW1lIjtzOjc6InN0cmF0ZW4iO31zOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjI6IjM0IjtzOjg6ImV4dGVuc2llIjtzOjA6IiI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxMy0xMS0xOCAxMTowNjo0OSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czowOiIiO3M6NzoidXNlcl9pZCI7czoxOiIzIjtzOjY6ImV4dHVybCI7czoyNzoiaHR0cDovL3lvdXR1LmJlL25NYVg1WkF2aFgwIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjYwOiJHZXdhcGVuZGUgb3ZlcnZhbCBvcCBjYWbDqSBLb3N0dmVybG9yZW4gKEFtc3RlcmRhbSBPdWQtV2VzdCkiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MjQ6IjIwMTMtMTEtMDhUMTA6MzM6NTMuMDAwWiI7czoxMToib3BtZXJraW5nZW4iO3M6NzI2OiJUd2VlIGpvbmdlbWFubmVuIGhlYmJlbiBpbiBkZSBuYWNodCB2YW4gem9uZGFnIDIzIG9wIG1hYW5kYWcgMjQgc2VwdGVtYmVyIGNhZsOpIEtvc3R2ZXJsb3JlbiBhYW4gZGUgVHdlZWRlIEtvc3R2ZXJsb3JlbmthZGUgb3ZlcnZhbGxlbi4gWmUgZ2FhbiBlcnZhbmRvb3IgbWV0IGVlbiBnZWxkYmVkcmFnLg0KDQpEZSBvdmVydmFsIHZvbmQgbmEgc2x1aXRpbmdzdGlqZCBwbGFhdHMsIG9tIDAzLjE1IHV1ci4gRXIgd2FyZW4gdG9lbiBub2cgdHdlZSBtZWRld2Vya2VycyBhYW53ZXppZy4gQWxzIHppaiBkZSB6YWFrIGFmc2x1aXRlbiBlbiBuYWFyIGJ1aXRlbiBnYWFuIGtvbWVuIGVyIHR3ZWUgam9uZ2VucyBhYW5sb3Blbiwgd2FhcnZhbiBlciDDqcOpbiBlZW4gdnV1cndhcGVuIHZhc3QgaGVlZnQuIERlIG1lZGV3ZXJrZXJzICgxOSBlbiAzMSBqYWFyKSB3b3JkZW4gZ2Vkd29uZ2VuIHdlZXIgbmFhciBiaW5uZW4gdGUgZ2Fhbi4gRWVuIHZhbiBoZW4gbW9ldCBoZXQgYWxhcm0gdWl0c2NoYWtlbGVuIGVuIGluIGhldCBrYW50b29yIGRlIGtsdWlzIG9wZW5lbi4gTWV0IGRlIGJ1aXQgaW4gZWVuIHNjaG91ZGVydGFzIGdhYW4gemUgZXIgdmFuZG9vci4gDQoNCkhlcmtlbnQgdSBkZSBtYW4gb2YgaGVlZnQgdSB0aXBzPyBCZWwgMDgwMC02MDcwIChncmF0aXMpIG9mIHZ1bCBoZXQgdGlwZm9ybXVsaWVyIGluOiB3d3cucG9saXRpZS5ubC9tZWxkZW4vdGlwZm9ybXVsaWVyLmh0bWwiO3M6NToiZXh0aWQiO3M6MTE6Im5NYVg1WkF2aFgwIjtzOjg6ImV4dHRodW1iIjtzOjQ5OiJodHRwczovL2kxLnl0aW1nLmNvbS92aS9uTWFYNVpBdmhYMC9ocWRlZmF1bHQuanBnIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjcwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO319fXM6NDoiZGF0YSI7YTo1OntzOjU6Ik1lZGlhIjthOjE5OntzOjI6ImlkIjtzOjI6IjM0IjtzOjg6ImV4dGVuc2llIjtzOjA6IiI7czo4OiJzb29ydF9pZCI7czoxOiIxIjtzOjEzOiJzdG9yYWdlbG9jX2lkIjtzOjE6IjEiO3M6NDoiZGF0ZSI7czoxOToiMjAxMy0xMS0xOCAxMTowNjo0OSI7czoxNjoib3JpZ2luYWxmaWxlbmFtZSI7czowOiIiO3M6NzoidXNlcl9pZCI7czoxOiIzIjtzOjY6ImV4dHVybCI7czoyNzoiaHR0cDovL3lvdXR1LmJlL25NYVg1WkF2aFgwIjtzOjc6ImV4dGxpbmsiO3M6MDoiIjtzOjU6InRpdGVsIjtzOjYwOiJHZXdhcGVuZGUgb3ZlcnZhbCBvcCBjYWbDqSBLb3N0dmVybG9yZW4gKEFtc3RlcmRhbSBPdWQtV2VzdCkiO3M6NDoiYnJvbiI7czowOiIiO3M6ODoiZGF0ZXJpbmciO3M6MjQ6IjIwMTMtMTEtMDhUMTA6MzM6NTMuMDAwWiI7czoxMToib3BtZXJraW5nZW4iO3M6NzI2OiJUd2VlIGpvbmdlbWFubmVuIGhlYmJlbiBpbiBkZSBuYWNodCB2YW4gem9uZGFnIDIzIG9wIG1hYW5kYWcgMjQgc2VwdGVtYmVyIGNhZsOpIEtvc3R2ZXJsb3JlbiBhYW4gZGUgVHdlZWRlIEtvc3R2ZXJsb3JlbmthZGUgb3ZlcnZhbGxlbi4gWmUgZ2FhbiBlcnZhbmRvb3IgbWV0IGVlbiBnZWxkYmVkcmFnLg0KDQpEZSBvdmVydmFsIHZvbmQgbmEgc2x1aXRpbmdzdGlqZCBwbGFhdHMsIG9tIDAzLjE1IHV1ci4gRXIgd2FyZW4gdG9lbiBub2cgdHdlZSBtZWRld2Vya2VycyBhYW53ZXppZy4gQWxzIHppaiBkZSB6YWFrIGFmc2x1aXRlbiBlbiBuYWFyIGJ1aXRlbiBnYWFuIGtvbWVuIGVyIHR3ZWUgam9uZ2VucyBhYW5sb3Blbiwgd2FhcnZhbiBlciDDqcOpbiBlZW4gdnV1cndhcGVuIHZhc3QgaGVlZnQuIERlIG1lZGV3ZXJrZXJzICgxOSBlbiAzMSBqYWFyKSB3b3JkZW4gZ2Vkd29uZ2VuIHdlZXIgbmFhciBiaW5uZW4gdGUgZ2Fhbi4gRWVuIHZhbiBoZW4gbW9ldCBoZXQgYWxhcm0gdWl0c2NoYWtlbGVuIGVuIGluIGhldCBrYW50b29yIGRlIGtsdWlzIG9wZW5lbi4gTWV0IGRlIGJ1aXQgaW4gZWVuIHNjaG91ZGVydGFzIGdhYW4gemUgZXIgdmFuZG9vci4gDQoNCkhlcmtlbnQgdSBkZSBtYW4gb2YgaGVlZnQgdSB0aXBzPyBCZWwgMDgwMC02MDcwIChncmF0aXMpIG9mIHZ1bCBoZXQgdGlwZm9ybXVsaWVyIGluOiB3d3cucG9saXRpZS5ubC9tZWxkZW4vdGlwZm9ybXVsaWVyLmh0bWwiO3M6NToiZXh0aWQiO3M6MTE6Im5NYVg1WkF2aFgwIjtzOjg6ImV4dHRodW1iIjtzOjQ5OiJodHRwczovL2kxLnl0aW1nLmNvbS92aS9uTWFYNVpBdmhYMC9ocWRlZmF1bHQuanBnIjtzOjEwOiJodWlzbnVtbWVyIjtzOjI6IjcwIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjY6Im5vc2hvdyI7czoxOiIwIjtzOjU6InNjYWxlIjtzOjE6IjAiO31zOjQ6IlVzZXIiO2E6ODp7czoyOiJpZCI7czoxOiIzIjtzOjg6InVzZXJuYW1lIjtzOjE3OiJyb25tZXVsQHhzNGFsbC5ubCI7czo4OiJwYXNzd29yZCI7czo0MDoiNTEyNTVkYTRlZDM1OTZlZWRjMDhjNDczMjZkNDFmMDkxMGI5ZGQyZiI7czo0OiJyb2xlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0xMC0wOSAxNDozMjo1NCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0xMC0wOSAxNDozMjo1NCI7czo0OiJuYWFtIjtzOjE1OiJSb24gTWV1bGVuc3RlZW4iO3M6OToibmFhbV96aWVuIjtzOjE6IjAiO31zOjE1OiJOYW1lc3dpdGhtZWRpdW0iO2E6MDp7fXM6MTc6Ik1lZGlhYWJvdXRvYmplY3RzIjthOjE6e2k6MDthOjM6e3M6ODoibWVkaWFfaWQiO3M6MjoiMzQiO3M6OToib2JqZWN0X2lkIjtzOjI6IjIzIjtzOjI6ImlkIjtzOjI6IjMyIjt9fXM6NDoiVGFncyI7YToxOntpOjA7YTo0OntzOjI6ImlkIjtzOjM6IjcyNSI7czoxMToidGFnbmFtZXNfaWQiO3M6MzoiMTc4IjtzOjM6InJlbCI7czo1OiJtZWRpYSI7czo4OiJtZWRpYV9pZCI7czoyOiIzNCI7fX19czo3OiJsb2NkYXRhIjthOjM6e3M6ODoiTG9jYXRpb24iO2E6Mzp7czoyOiJpZCI7czoyOiI0OSI7czozOiJsYXQiO3M6MTM6IjUyLjM2NjA5NzcwMDAiO3M6MzoibG9uIjtzOjEyOiI0Ljg2MTcwNzQwMDAiO31zOjE3OiJPYmplY3RzYXRsb2NhdGlvbiI7YToxOntpOjA7YTozOntzOjExOiJsb2NhdGlvbl9pZCI7czoyOiI0OSI7czo5OiJvYmplY3RfaWQiO3M6MjoiMjMiO3M6MjoiaWQiO3M6MjoiMjMiO319czozOiJBZHIiO2E6Mjp7aTowO2E6Mjp7czoyOiJpZCI7czoyOiIzMSI7czoxMToibG9jYXRpb25faWQiO3M6MjoiNDkiO31pOjE7YToyOntzOjI6ImlkIjtzOjI6IjUzIjtzOjExOiJsb2NhdGlvbl9pZCI7czoyOiI0OSI7fX19czo1OiJhZHJlcyI7YToxOntpOjA7YToyOntzOjg6IkFkcnBhcnRzIjthOjU6e3M6MjoiaWQiO3M6MjoiMzEiO3M6MTE6ImFkcnBhcnRzX2lkIjtzOjI6IjIxIjtzOjQ6Im5hYW0iO3M6MjoiNzAiO3M6NToibGV2ZWwiO3M6MToiMiI7czo2OiJhZHJfaWQiO3M6MjoiMzEiO31zOjk6IkFkcnBhcnRzYiI7YTo1OntzOjI6ImlkIjtzOjI6IjIxIjtzOjExOiJhZHJwYXJ0c19pZCI7czoxOiIyIjtzOjQ6Im5hYW0iO3M6MjM6IlR3ZWVkZSBLb3N0dmVybG9yZW5rYWRlIjtzOjU6ImxldmVsIjtzOjE6IjMiO3M6NjoiYWRyX2lkIjtzOjI6IjIxIjt9fX1zOjE2OiJtZXRhX2Rlc2NyaXB0aW9uIjtzOjQzOiJTdHJhYXRiZWVsZCB2YW4gZGUgYnV1cnQgaW4ga29ydGUgZmlsbXBqZXMuIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjExOiI0MCBzZWNvbmRlbiI7czoxNToicHJvamVjdGxvbmduYW1lIjtzOjExOiI0MCBzZWNvbmRlbiI7czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjQwMjQ6IjxhcnRpY2xlPgogICAgPGRpdiBjbGFzcz0icGFwZXIgIj4KICAgICAgICA8cCBjbGFzcz0ic3VibWVudSI+PGEgaHJlZj0iL2thYXJ0LyI+S2FhcnQ8L2E+IC0gPGEgaHJlZj0iL21lZGlhLyI+TGlqc3Q8L2E+IHwgPGEgaHJlZj0iL292ZXIvIj5PdmVyIDQwIHNlY29uZGVuPC9hPiA8L3A+ICAgIDwvaDI+IAogICAgICAgIDxkaXYgY2xhc3M9ImRldGFpbCI+CgogICAgICAgICAgICA8ZmlndXJlIGlkPSJmaWciIGNsYXNzPSJmbG9hdHIiPgoKCiAgICAgICAgICAgICAgICAgICAgPGlmcmFtZSBzcmM9Ii8vd3d3LnlvdXR1YmUuY29tL2VtYmVkL25NYVg1WkF2aFgwP3JlbD0wIiBmcmFtZWJvcmRlcj0iMCIgYWxsb3dmdWxsc2NyZWVuPjwvaWZyYW1lPgogICAgICAgICAgICAgICAgCgogICAgICAgICAgICAgICAgPGZpZ2NhcHRpb24+CiAgICAgICAgICAgICAgICAgICAgPHNtYWxsPgogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gVHdlZWRlIEtvc3R2ZXJsb3JlbmthZGUgNzAKICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj5ub3ZlbWJlciAyMDEzCiAgICAgICAgICAgICAgICAgICAgPC9zbWFsbD4KICAgICAgICAgICAgICAgIDwvZmlnY2FwdGlvbj4KICAgICAgICAgICAgPC9maWd1cmU+CgogICAgICAgICAgICA8aDIgc3R5bGU9ImRpc3BsYXk6aW5saW5lOyI+R2V3YXBlbmRlIG92ZXJ2YWwgb3AgY2Fmw6kgS29zdHZlcmxvcmVuIChBbXN0ZXJkYW0gT3VkLVdlc3QpPGJyPjwvaDI+CgogICAgICAgICBUd2VlIGpvbmdlbWFubmVuIGhlYmJlbiBpbiBkZSBuYWNodCB2YW4gem9uZGFnIDIzIG9wIG1hYW5kYWcgMjQgc2VwdGVtYmVyIGNhZsOpIEtvc3R2ZXJsb3JlbiBhYW4gZGUgVHdlZWRlIEtvc3R2ZXJsb3JlbmthZGUgb3ZlcnZhbGxlbi4gWmUgZ2FhbiBlcnZhbmRvb3IgbWV0IGVlbiBnZWxkYmVkcmFnLjxicj48YnI+PGJyPjxicj5EZSBvdmVydmFsIHZvbmQgbmEgc2x1aXRpbmdzdGlqZCBwbGFhdHMsIG9tIDAzLjE1IHV1ci4gRXIgd2FyZW4gdG9lbiBub2cgdHdlZSBtZWRld2Vya2VycyBhYW53ZXppZy4gQWxzIHppaiBkZSB6YWFrIGFmc2x1aXRlbiBlbiBuYWFyIGJ1aXRlbiBnYWFuIGtvbWVuIGVyIHR3ZWUgam9uZ2VucyBhYW5sb3Blbiwgd2FhcnZhbiBlciDDqcOpbiBlZW4gdnV1cndhcGVuIHZhc3QgaGVlZnQuIERlIG1lZGV3ZXJrZXJzICgxOSBlbiAzMSBqYWFyKSB3b3JkZW4gZ2Vkd29uZ2VuIHdlZXIgbmFhciBiaW5uZW4gdGUgZ2Fhbi4gRWVuIHZhbiBoZW4gbW9ldCBoZXQgYWxhcm0gdWl0c2NoYWtlbGVuIGVuIGluIGhldCBrYW50b29yIGRlIGtsdWlzIG9wZW5lbi4gTWV0IGRlIGJ1aXQgaW4gZWVuIHNjaG91ZGVydGFzIGdhYW4gemUgZXIgdmFuZG9vci4gPGJyPjxicj48YnI+PGJyPkhlcmtlbnQgdSBkZSBtYW4gb2YgaGVlZnQgdSB0aXBzPyBCZWwgMDgwMC02MDcwIChncmF0aXMpIG9mIHZ1bCBoZXQgdGlwZm9ybXVsaWVyIGluOiB3d3cucG9saXRpZS5ubC9tZWxkZW4vdGlwZm9ybXVsaWVyLmh0bWwgCiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KCiAgICA8ZGl2IGNsYXNzPSJwYXBlciAiID4KPHA+R2VlZiA8YSBocmVmPSIjdXIiPmplIHJlYWN0aWU8L2E+IG9wIGRpdCBpdGVtLjwvcD4KICAgIAogICAgCjxkaXYgY2xhc3M9InVkaXYgcm91bmQiPgoKPGgyIGlkPSJ1ciI+PC9oMj4KPGZvcm0gaWQ9IkFkZEZvcm0iIG5hbWU9IkFkZEZvcm0iIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIvY29tbWVudC9hZGQvIiBvbnN1Ym1pdD0icmV0dXJuIGNoZWNrQ29tbWVudEFkZEZvcm0oKTsiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRhdGFbQ29tbWVudHNdW3BhZ2luYV0iIHZhbHVlPSIzNCI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtoZXRnZXRhbF0iIHZhbHVlPSIxNjI1MzQxNTUyNjc4ODkiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0NvbW1lbnRzXVtkYXR1bV0iIHZhbHVlPSIyMDE1LTAzLTE1IDEyOjE3OjIxIj4KCjxwPjxicj5Kb3V3IHJlYWN0aWU6PC9wPgoKPGRpdiBjbGFzcz0iaW5wdXQgdGV4dGFyZWEiPjx0ZXh0YXJlYSBuYW1lPSJkYXRhW0NvbW1lbnRzXVtiZXJpY2h0XSIgY29scz0iMzAiIHJvd3M9IjYiIGlkPSJhZGRmb3JtQmVyaWNodCIgPjwvdGV4dGFyZWE+PC9kaXY+Cgo8cD48YnI+TmFhbTo8L3A+PGRpdiBjbGFzcz0iaW5wdXQgdGV4dCI+PGlucHV0IG5hbWU9ImRhdGFbQ29tbWVudHNdW25hYW1dIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIiBpZD0iYWRkZm9ybU5hYW0iPjwvZGl2PgoKPHA+PGJyPkFudGktc3BhbSB2cmFhZzogSG9ldmVlbCBpcyB0d2VlIHBsdXMgZHJpZT88L3A+CjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW0NvbW1lbnRzXVtzcGFtXSIgdHlwZT0idGV4dCIgdmFsdWU9IiIgaWQ9ImFkZGZvcm1TcGFtIj4gPHNwYW4gc3R5bGU9ImRpc3BsYXk6bm9uZTtjb2xvcjpyZWQ7Zm9udC13ZWlnaHQ6Ym9sZDttYXJnaW4tbGVmdDoxZW07IiAgaWQ9ImNvbW1zZyI+PC9zcGFuPjwvZGl2Pgo8cCBjbGFzcz0iY2VudGVyIj48YnI+PGlucHV0IGNsYXNzPSJjdGEiIHR5cGU9InN1Ym1pdCIgbmFtZT0ibm9uZSIgdmFsdWU9Ikluc3R1cmVuIj48L3A+Cgo8L2Zvcm0+Cgo8cD48c3Ryb25nPk4uQi48L3N0cm9uZz4gRGUgcmVkYWN0aWUga2FuIGplIGJpamRyYWdlIGFhbnBhc3NlbiBvZiB2ZXJ3aWpkZXJlbi4gSGllcm92ZXIgd29yZHQgbmlldCBnZWNvcnJlc3BvbmRlZXJkLjwvcD4KCgo8L2Rpdj4gICAgPC9kaXY+CgoKPC9hcnRpY2xlPgoKPGFzaWRlPgoKCgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj48ZGl2IGlkPSJtYXAiIGNsYXNzPSJtYXAiPjwvZGl2PjwvZGl2PgoKICAgIDxkaXYgY2xhc3M9InBhcGVyIj4KICAgICAgICA8ZGl2IHN0eWxlPSJvdmVyZmxvdzogaGlkZGVuIj48aDI+Vmxha2JpajwvaDI+CiAgICAgICAgICAgIDxkaXYgaWQ9Im1lZGxpc3QiPjwvZGl2PgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJwYXBlciI+PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxkaXYgY2xhc3M9ImZiLXNoYXJlLWJ1dHRvbiIgZGF0YS1ocmVmPSJodHRwOi8vNDBzZWMuYnZzdGVtbWVuLm5sL21lZGlhL2RldGFpbC8zNC8iIGRhdGEtbGF5b3V0PSJpY29uX2xpbmsiPjwvZGl2PjwvZGl2PgoKPC9hc2lkZT4KCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgIGZ1bmN0aW9uIHNldHBpbigpCiAgICB7CiAgICAgICAgdmFyIGxsbCA9IEwubGF0TG5nKDUyLjM2NjA5NzcwMDAsIDQuODYxNzA3NDAwMCk7CiAgICAgICAgbWFwLnNldFZpZXcobGxsLCAxNyk7CgogICAgICAgIFBvc0ljb24gPSBuZXcgTC5JY29uKHtpY29uVXJsOiAiLy9idnN0ZW1tZW4ubmwvaW1nL2ljcy9tYXJrZXIucG5nIiwgaWNvblNpemU6IFsyMiwgNDJdLCBpY29uQW5jaG9yOiBbMTEsIDQyXX0pOwogICAgICAgIFBvc01hcmsgPSBuZXcgTC5tYXJrZXIobGxsLCB7aWNvbjogUG9zSWNvbiwgZHJhZ2dhYmxlOiBmYWxzZX0pLmFkZFRvKG1hcCk7CgogICAgICAgIG1hcC50b3VjaFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5kb3VibGVDbGlja1pvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5zY3JvbGxXaGVlbFpvb20uZGlzYWJsZSgpOwogICAgICAgIG1hcC5ib3hab29tLmRpc2FibGUoKTsKICAgICAgICBtYXAua2V5Ym9hcmQuZGlzYWJsZSgpOwogICAgfQoKPC9zY3JpcHQ+CjxzdHlsZT4ubGVhZmxldC1jb250cm9sLXpvb217ZGlzcGxheTpub25lO308L3N0eWxlPgo8ZGl2IHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBpZD0iaW1nZW5sIiBjbGFzcz0iaW1nZW5sIiBvbmNsaWNrPSIkKCdpbWdlbmwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOyI+CiAgICA8aW1nIGlkPSJpbWVuaSIgY2xhc3M9ImltZW5pIiBzcmM9IiIgYWx0PSIiPgo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czo1NDU6IjxtZXRhIHByb3BlcnR5PSJvZzp0aXRsZSIgY29udGVudD0iR2V3YXBlbmRlIG92ZXJ2YWwgb3AgY2Fmw6kgS29zdHZlcmxvcmVuIChBbXN0ZXJkYW0gT3VkLVdlc3QpIiAvPjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iLy9jYWNoZS5idnN0ZW1tZW4ubmwvaW1nL3c2MDAvMC8yMi4iIC8+PG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cDovLzQwc2VjLmJ2c3RlbW1lbi5ubC9tZWRpYS9kZXRhaWwvMzQvIiAvPjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0iYnZzdGVtbWVuIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii8vYnZzdGVtbWVuLm5sL2Nzcy9tYXAuY3NzIiAvPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQuanMiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii8vYnZzdGVtbWVuLm5sL2pzL2xlYWZsZXQubWFya2VyY2x1c3Rlci5qcyI+PC9zY3JpcHQ+Ijt9'));
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
<meta property="og:title" content="Gewapende overval op café Kostverloren (Amsterdam Oud-West)" /><meta property="og:image" content="//cache.bvstemmen.nl/img/w600/0/22." /><meta property="og:url" content="http://40sec.bvstemmen.nl/media/detail/34/" /><meta property="og:description" content="bvstemmen" /></head><body><header id="bodyid"><h1 class="round shade"><a href="//bvstemmen.nl/">Buurt Vol Stemmen</a> <span class="subhead">40 seconden</span></h1>
<a href="#smh" id="smen"><img src="//bvstemmen.nl/img/ics/menu.png" width="26" height="26" alt="menubutton"></a></header>
<article>
    <div class="paper ">
        <p class="submenu"><a href="/kaart/">Kaart</a> - <a href="/media/">Lijst</a> | <a href="/over/">Over 40 seconden</a> </p>    </h2> 
        <div class="detail">

            <figure id="fig" class="floatr">


                    <iframe src="//www.youtube.com/embed/nMaX5ZAvhX0?rel=0" frameborder="0" allowfullscreen></iframe>
                

                <figcaption>
                    <small>
                        
                                                    - Tweede Kostverlorenkade 70
                            <br>november 2013
                    </small>
                </figcaption>
            </figure>

            <h2 style="display:inline;">Gewapende overval op café Kostverloren (Amsterdam Oud-West)<br></h2>

         Twee jongemannen hebben in de nacht van zondag 23 op maandag 24 september café Kostverloren aan de Tweede Kostverlorenkade overvallen. Ze gaan ervandoor met een geldbedrag.<br><br><br><br>De overval vond na sluitingstijd plaats, om 03.15 uur. Er waren toen nog twee medewerkers aanwezig. Als zij de zaak afsluiten en naar buiten gaan komen er twee jongens aanlopen, waarvan er één een vuurwapen vast heeft. De medewerkers (19 en 31 jaar) worden gedwongen weer naar binnen te gaan. Een van hen moet het alarm uitschakelen en in het kantoor de kluis openen. Met de buit in een schoudertas gaan ze er vandoor. <br><br><br><br>Herkent u de man of heeft u tips? Bel 0800-6070 (gratis) of vul het tipformulier in: www.politie.nl/melden/tipformulier.html 
        </div>
    </div>

    <div class="paper " >
<p>Geef <a href="#ur">je reactie</a> op dit item.</p>
    
    
<div class="udiv round">

<h2 id="ur"></h2>
<form id="AddForm" name="AddForm" method="post" action="/comment/add/" onsubmit="return checkCommentAddForm();">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="data[Comments][pagina]" value="34">

<input type="hidden" name="data[Comments][hetgetal]" value="162534155267889">
<input type="hidden" name="data[Comments][datum]" value="2015-03-15 12:17:21">

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
<div class="fb-share-button" data-href="http://40sec.bvstemmen.nl/media/detail/34/" data-layout="icon_link"></div></div>

</aside>

<script type="text/javascript">
    function setpin()
    {
        var lll = L.latLng(52.3660977000, 4.8617074000);
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