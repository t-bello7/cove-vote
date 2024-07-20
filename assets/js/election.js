$(document).ready(function() {
 $("#add-election-btn").on('click', function() {
    let name = $("#name").val();
    let description = $("#description").val();
    let candidates_arr = $("#candidates").val().split(',');
    let location = $("#location").val();
    let polling_unit = $("#polling_unit").val();
    let candidates_obj = []
    for (var i = 0; i < candidates_arr.length; ++i) {
        candidates_obj.push({
            name: candidates_arr[i],
            votes: 0
        })
    }
    var candidates  = JSON.stringify(candidates_obj)
    $.ajax({
        url: './server/election.php',
        method: 'POST',
        data: {
            add_election: 1,
            name: name,
            description: description,
            candidates: candidates,
            location: location,
            polling_unit: polling_unit
        },
        success: function(response) {
            if (response == 'success') {
                window.location.href = 'election-list.php';
            } else {
                alert(response)
            }
        },
        dataType: 'text'
    })

 })

})