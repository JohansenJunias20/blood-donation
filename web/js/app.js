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
                    "<button class='btn' type='button' style='background-color: red;  color: white;'>View</button> " +
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




function load_table(){
    var table = $('#tableRanking').DataTable({
        searchPanes: true,
        dom: 'Blfrtip',
        buttons: [
       {
           extend: 'pdf',
           footer: true,
           exportOptions: {
                columns: [1,2,3,4,5,6]
            }
       },
       {
           extend: 'csv',
           footer: false,
           exportOptions: {
                columns: [1,2,3,4,5,6]
            }
          
       },
       {
           extend: 'excel',
           footer: false,
           exportOptions: {
                columns: [1,2,3,4,5,6]
            }
       },
       {
           extend: 'print',
           footer: false,
           exportOptions: {
                columns: [1,2,3,4,5,6]
            }
       },
       {
           extend: 'copy',
           footer: false,
           exportOptions: {
                columns: [1,2,3,4,5,6]
            }
       }               
    ],  
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    table.searchPanes.container().prependTo(table.table().container());
    table.searchPanes.resizePanes();

	
}
