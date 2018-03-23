$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('#telefone').mask('(00) 00000-0000');
  $('#telefone2').mask('(00) 00000-0000');
  $('#nascimento').mask('00/00/0000');
  $('#celular').mask('(00) 00000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('#cpf').mask('000.000.000-00', {reverse: true});
  $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('#cnpj_cliente_edit').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('#rg').mask('99.999.999-9');
  $('#cep').mask('99999-9999');
  $('#comissao').mask('99.99');

  $('.percent').mask('00,00%', {reverse: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});

});