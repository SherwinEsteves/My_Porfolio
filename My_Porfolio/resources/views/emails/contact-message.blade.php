@component('mail::message')

New message from the portfolio contact form.

**Name:** {{ $data['name'] }}<br>
**Email:** {{ $data['email'] }}<br>
@if (!empty($data['subject']))
**Subject:** {{ $data['subject'] }}
@endif

---

{{ $data['message'] }}

---

Reply to {{ $data['name'] }} at {{ $data['email'] }}.

@endcomponent
