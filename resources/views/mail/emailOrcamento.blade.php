@component('mail::message')


Nome:
{{ $orcamentoSite["nome"] }}

Empresa:
{{ $orcamentoSite["empresa"] }}

email:
{{ $orcamentoSite["email"] }}

Funcionalidades:
@foreach($orcamentoSite["funcionalidades"] as $funcionalidade)
{{ $funcionalidade }}
<p>
@endforeach


Preço final: 
{{  $orcamentoSite["preco"] }} euros

<p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent