<script src="assets/js/jquery-3.5.1.js"></script>
<?php
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>First Name</th>';
    echo '<th>Last Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '<th>Comments</th>';
    echo '</tr>';
    echo '</thead>';

    echo '<tbody id="results">';
    
    echo '</tbody>';
    echo '</table>';
?>
<script>
	function refreash_data(){
		$.ajax({
			type: 'POST',
			url: 'https://ec2-3-142-238-105.us-east-2.compute.amazonaws.com/hw19/query_contacts.php',
			success: function(data) {
            $('#results').html(data);
        },
        error: function() {
            alert('Error loading data');
        }
		});
	}
	setInterval(function(){refreash_data(); }, 500);
</script>	