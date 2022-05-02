function load_ranking(){
    $.ajax({
        url: "api/get_ranking.php",
        method: "GET",
        success: function(data){
            //data = JSON.parse(data);
            $("#rankingTable").html(' ');
            data.forEach(function(ranking){
                var row = $("<tr scope='row'></tr>");
                var col1 = $("<td>"+ ranking['id'] + "</td>");
                
                var col2 = $("<td>" + ranking['nama'] + "</td>");
                var col3 = $("<td>" + ranking['golongan darah'] + "</td>");
                var col4 = $("<td>" + ranking['resus'] + "</td>");
                var col5 = $("<td>" + ranking['email'] + "</td>");
                var col6 = $("<td>" + ranking['aktif'] + "</td>");           
                col1.appendTo(row);
                col2.appendTo(row);
                col3.appendTo(row);
                col4.appendTo(row);
                col5.appendTo(row);
                col6.appendTo(row);
                             
                
                $("#rankingTable").append(row);
            });
            
        }
    })
}

function updateFilter(){
    var resus = $("#resus").val();
    var golDarah = $("#gol_darah").val();
    
     $.ajax({
        url: "api/get_ranking.php",
        method: "GET",
        success: function(data){
            //data = JSON.parse(data);
            $("#rankingTable").html(' ');
            data.forEach(function(ranking){
                if(resus == ranking['resus'] && golDarah == ranking['golongan darah'])
                {
                    var row = $("<tr scope='row'></tr>");
                    var col1 = $("<td>"+ ranking['id'] + "</td>");
                    var col2 = $("<td>" + ranking['nama'] + "</td>");
                    var col3 = $("<td>" + ranking['golongan darah'] + "</td>");
                    var col4 = $("<td>" + ranking['resus'] + "</td>");
                    var col5 = $("<td>" + ranking['email'] + "</td>");
                    var col6 = $("<td>" + ranking['aktif'] + "</td>"); 
                    col1.appendTo(row);
                    col2.appendTo(row);
                    col3.appendTo(row);
                    col4.appendTo(row);
                    col5.appendTo(row);
                    col6.appendTo(row);
                    
                    $("#rankingTable").append(row);

                }else if(resus == ranking['resus'] && golDarah == 0)
                {
                    var row = $("<tr scope='row'></tr>");
                    var col1 = $("<td>"+ ranking['id'] + "</td>");
                    var col2 = $("<td>" + ranking['nama'] + "</td>");
                    var col3 = $("<td>" + ranking['golongan darah'] + "</td>");
                    var col4 = $("<td>" + ranking['resus'] + "</td>");
                    var col5 = $("<td>" + ranking['email'] + "</td>");
                    var col6 = $("<td>" + ranking['aktif'] + "</td>"); 
                    col1.appendTo(row);
                    col2.appendTo(row);
                    col3.appendTo(row);
                    col4.appendTo(row);
                    col5.appendTo(row);
                    col6.appendTo(row);

                    $("#rankingTable").append(row);

                }else if(resus == 0 && golDarah == ranking['golongan darah'])
                {
                    var row = $("<tr scope='row'></tr>");
                    var col1 = $("<td>"+ ranking['id'] + "</td>");
                    var col2 = $("<td>" + ranking['nama'] + "</td>");
                    var col3 = $("<td>" + ranking['golongan darah'] + "</td>");
                    var col4 = $("<td>" + ranking['resus'] + "</td>");
                    var col5 = $("<td>" + ranking['email'] + "</td>");
                    var col6 = $("<td>" + ranking['aktif'] + "</td>"); 
                    col1.appendTo(row);
                    col2.appendTo(row);
                    col3.appendTo(row);
                    col4.appendTo(row);
                    col5.appendTo(row);
                    col6.appendTo(row);
                    
                    $("#rankingTable").append(row);

                }else if(resus == 0 && golDarah == 0){
                    var row = $("<tr scope='row'></tr>");
                    var col1 = $("<td>"+ ranking['id'] + "</td>");
                    var col2 = $("<td>" + ranking['nama'] + "</td>");
                    var col3 = $("<td>" + ranking['golongan darah'] + "</td>");
                    var col4 = $("<td>" + ranking['resus'] + "</td>");
                    var col5 = $("<td>" + ranking['email'] + "</td>");
                    var col6 = $("<td>" + ranking['aktif'] + "</td>"); 
                    col1.appendTo(row);
                    col2.appendTo(row);
                    col3.appendTo(row);
                    col4.appendTo(row);
                    col5.appendTo(row);
                    col6.appendTo(row);
                    
                    $("#rankingTable").append(row);
                }
                          
                
            });
            
        }
    })
}