@component('mail::message')
# Introduction

The body of your message.
<h1>Markdown Mail Template</h1>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
