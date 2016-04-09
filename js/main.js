$( document ).ready(function() {
    // delete advert
    $( "a.delete" ).on( "click", function( event) {
  		event.preventDefault(); 
  		var tr = $(this).closest('tr');
  		var id = tr.children('td:first').html();
      var data = {'del':id};
  		$.getJSON('ajax-request.php?',
        data,
        function(res){
          tr.fadeOut('slow', function() {
            if (res.status == 'success') {
              $('#info').show();
              $('#infoText').html(res.message, res.dbSizeInfo);
              $('#emptyDb').html(res.emptyDb);
            };
            $(this).remove();
          });
        });
    });

    // add advert
    $("#advertForm").submit(function() {

      $.ajax({
             type: "POST",
             url: 'ajax-request.php?formSubmit=1',
             data: $("#advertForm").serialize(), // serializes the form's elements.
             success: function(data, string)
             {
                // clearing form
                $('#advertForm input').val('');
                $('#advertForm textarea').val('');
                $('#advertForm input#send').attr('value', 'Send');
                // update adverts table
                var data = JSON.parse(data);
                console.log(data);
                var dataId = data['id'];
                var dataRow = data['row'];
                console.log(dataId);
                console.log(dataRow);

                if ($('.adverts-table table tbody').find('td[data-id="'+dataId+'"]').html() == 'undefined') {
                  $(dataRow).insertAfter($('.adverts-table table tbody tr:last-child'));
                } else {
                  var table_row = $('.adverts-table table tbody').find('td[data-id="'+dataId+'"]').parent();
                  table_row.hide('slow', function(){
                    $(dataRow).insertAfter(table_row);
                    table_row.remove();
                  });
                }
             }
      });

      return false; // avoid to execute the actual submit of the form.
    });

    $('a.showAdvert').on('click', function (event) {
      event.preventDefault();
      var id = $(this).attr("data-id");
      // console.log(id);
      $.ajax({
             type: "POST",
             url: 'ajax-request.php?id='+id,
             success: function(data, string)
             {    
                // var data = JSON.parse(data);
                alert(data); // show response from the php script.
                console.log(data);
             }
      });
    });
});