@component('mail::message')

#ORÇAMENTO
@component('mail::panel')

Especificacoes:
{{ $orcamentoSite["especificacoes"] }}

Funcionalidades:
@foreach($orcamentoSite["funcionalidades"] as $funcionalidade)
{{ $funcionalidade }}
<p>
@endforeach


Preço final: 
{{  $orcamentoSite["preco"] }} euros


@endcomponent








@component('mail::button', ['url' => 'https://www.digitalinput.pt'])
Digitalinput
@endcomponent

Obrigado,<br>

@endcomponent
