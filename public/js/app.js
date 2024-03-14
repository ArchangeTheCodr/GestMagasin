$(document).ready(function() {
    var article_name;
    var article_id;
    var quantity;

  

    $('#btn-valider').click(function(ev){
        ev.preventDefault();
        article_id = $('#articleSelect').val();
        article_name = $('#articleSelect').find('option:selected').text();
        quantity = $('#quantityInput').val();
        let tr = `<tr data-id="${article_id}" data-quantity="${quantity}"><td>${article_name}</td><td>${quantity}</td><td>0</td><td>0</td></tr>`;
        $('table').find('tbody').append(tr);
        $('#quantityInput').val(1);

    });
    $('#btn-enregistrer').click(function(e){
            e.preventDefault();
            var items = [];
            $('#tb').find('tr').each(function(){
                var elt = {id:$(this).data('id'),qty:$(this).data('quantity')}
                items.push(elt);
            }); 
            $.ajax({
                url:'/panier/create',
                type:'post',
                dataType:'json',
                data:{_items:items,_token:$('input[name=_token]').val()},
                success:function(data){
                    window.location.replace('/panier');
                },
                error:function(err){
                    console.log(err);
                }
            });
    });

    

    // Autres opérations jQuery
});