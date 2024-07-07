// Plugin maskMoney
$('#preco').maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});

// Ordenar empreendimentos com biblioteca jQuery UI
$( function() {
  $( "#sortable" ).sortable({
    start: function() {
      let el = $(this);
      el.find('.single-empreendimento').css('border', '2px dashed #ccc');
    },
    update: function(event, ui) {
      let data = $(this).sortable('serialize');
      data+='&tipo_acao=ordenar_empreendimentos'

      let el = $(this);
      el.find('.single-empreendimento').css('border', '1px solid #ccc ');
      
      $.ajax({
        url: 'http://localhost/gestao_imoveis/painel/ajax/order.php',
        method: 'post',
        data: data
      }).done(function(data) {
        console.log(data);
      })
    },
    stop: function() {
      let el = $(this);
      el.find('.single-empreendimento').css('border', '1px solid #ccc');
    }
  });

} );