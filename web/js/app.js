function load_ranking(){
    $.ajax({
        url: "api/get_ranking.php",
        method: "GET",
        success: function(data){
            //data = JSON.parse(data);
            $("#rankingTable").html(' ');
            data.forEach(function(ranking){
                var row = $("<tr></tr>");
                var col1 = $("<td>" +
                    "<a href=search.php?id_donor="  + ranking['id'] +">" +
                    "<button class='btn' type='button' style='background-color: red;  color: white;'>Check</button> " +
                    "</a>" +
                    + "</td>");

                
                var col2 = $("<td>" + ranking['nama'] + "</td>");
                var col3 = $("<td>" + ranking['golongan darah'] + "</td>");
                var col4 = $("<td>" + ranking['resus'] + "</td>");
                var col5 = $("<td>" + ranking['email'] + "</td>");
                var col6 = $("<td>" + ranking['aktif'] + "</td>");           
                var col7 = $("<td>" + ranking['score'] + "</td>");           

                var col8 = $("<td>" +
                    "<a href=ranking.php?id_donor="  + ranking['id'] +">" +
                    "<button class='btn' type='button' style='background-color: red;  color: white;'>Delete</button> " +
                    "</a>" +
                    "</td>");
                col1.appendTo(row);
                col2.appendTo(row);
                col3.appendTo(row);
                col4.appendTo(row);
                col5.appendTo(row);
                col6.appendTo(row);
                col7.appendTo(row);
                col8.appendTo(row);
                
                $("#rankingTable").append(row);
                
            });
            load_table();
        }
    })
}



function aload_table(){
    $('#example tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });
    var table = $('#tableRanking').DataTable({
        initComplete: function () {
            // Apply the search
            this.api()
                .columns()
                .every(function () {
                    var that = this;
 
                    $('input', this.footer()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
    });
	
}

function load_table(){
    $('#tableRanking tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });
	$('#tableRanking').DataTable({
        initComplete: function () {
            // Apply the search
            this.api()
                .columns()
                .every(function () {
                    var that = this;
 
                    $('input', this.footer()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
    dom: 'Blfrtip',
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    scrollX: true
    
  });
}
