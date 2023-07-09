@component('mail::message')

# Welcome to the first Newsletter

Dear {{$email}},


We look forward to communicating more with you. For more information visit our blog.

@component('mail::button', ['url' => 'www.blog.com'])
Blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent