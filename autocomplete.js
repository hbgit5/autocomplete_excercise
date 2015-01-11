var search_input;
var search_results_list;
$(function() {
    search_input = $('#search123');
    search_results_list = $('#search-results-list');
    
    search_input.on('keyup', search_changed);
});

function search_changed() {
    var query = $(this).val();
    search_results_list.empty();
    
    $.get('search.php', {q: query},
        function(response) {
            if(response.length > 0) {
                for(var i = 0; i < response.length; i++) {
                    var li = $('<li>').html(response[i]);
                    search_results_list.append(li);
                }
            }
        }, 'json'
    );
}