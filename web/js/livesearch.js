function LiveSearch(idInput, idTable) {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(idInput);
    filter = input.value.toUpperCase();
    table = document.getElementById(idTable);
    tr = table.getElementsByTagName("tr");
    var counter =0;
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td1 = tr[i].getElementsByTagName("td")[1];
      td2 = tr[i].getElementsByTagName("td")[2];
      td3 = tr[i].getElementsByTagName("td")[3];
      if (td1) {
        if ((td1.innerHTML.toUpperCase().indexOf(filter) > -1) || (td2.innerHTML.toUpperCase().indexOf(filter) > -1) || (td3.innerHTML.toUpperCase().indexOf(filter) > -1) ) {
          tr[i].style.display = "";
      ++counter;
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  
    table = document.getElementById(idTable);
    tr = table.getElementsByTagName("tr");
  
    $("#rowCount").html("Row Count : "+counter);
  }
  