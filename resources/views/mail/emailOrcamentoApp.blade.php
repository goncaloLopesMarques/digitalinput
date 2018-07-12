@component('mail::message')


Nome:
{{ $orcamentoApp["nome"] }}

Empresa:
{{ $orcamentoApp["empresa"] }}

Tipo de negócio:
{{ $orcamentoApp["business"] }}

email:
{{ $orcamentoApp["email"] }}

Funcionalidades:
{{ $orcamentoApp["funcionalidades"] }}

The body of your message.


Thanks,<br>
{{ config('app.name') }}
@endcomponent