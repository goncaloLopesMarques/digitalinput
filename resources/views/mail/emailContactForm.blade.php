@component('mail::message')

#Formulário de Contacto

Nome: {{ $formdata["nome"] }}

Email: {{ $formdata["email"] }}

Telefone: {{ $formdata["telefone"] }}

Actividade: {{ $formdata["actividade"] }}

Mensagem: {{ $formdata["mensagem"] }}



@endcomponent