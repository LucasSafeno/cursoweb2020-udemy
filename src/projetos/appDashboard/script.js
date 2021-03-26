$(document).ready(() => {

    // Documentação 
	$('#documentacao').on('click', () =>{
        //$('#pagina').load('documentacao.html')
      /*  $.get('documentacao.html', data =>{ 
            $('#pagina').html(data)
        })
        */
        $.post('documentacao.html', data =>{ 
            $('#pagina').html(data)
        })

    })


      // Suporte 
	$('#suporte').on('click', () =>{
      //  $('#pagina').load('suporte.html')
     /* $.get('suporte.html', data =>{ 
        $('#pagina').html(data)
    })
    
    */

    $.post('suporte.html', data =>{ 
        $('#pagina').html(data)
    })
    })



    // AJAX
    $('#competencia').on('change', e =>{
        let competencia  = $(e.target).val()
        
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`, // x-www-form-urlencoded
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas)
                $('#totalVendas').html(dados.total_vendas)
                console.log(dados.total_vendas)
            },
            error: erro =>{ console.log(erro) }
        }) // ajax

    }) // competencia


}) // end ready