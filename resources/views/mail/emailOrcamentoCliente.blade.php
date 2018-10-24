@component('mail::message')

#ORÇAMENTO
@component('mail::panel')

#Especificacoes:
{{ $orcamentoSite["especificacoes"] }}

@endcomponent

@component('mail::panel')

#Funcionalidades:
@foreach($orcamentoSite["funcionalidades"] as $funcionalidade)
-{{ $funcionalidade }};
<p>
@endforeach

@endcomponent

@component('mail::panel')

#Preço-final:
{{  $orcamentoSite["preco"] }} Euros;

@endcomponent

Obrigado,<br>

@component('mail::button', ['url' => 'https://www.digitalinput.pt'])
Digitalinput
@endcomponent

@endcomponent
