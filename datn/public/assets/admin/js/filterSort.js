$("select.sort1, select.sort2, select.sort3").change(updateStudents);
        $("#myInput").on("keyup", updateStudents);
    
        function updateStudents() {
        var data1 = $('select.sort1').val();
        var data2 = $('select.sort2').val();
        var data3 = $('select.sort3').val();
        var search = $("#myInput").val();
    
    $('#FilterContainer')
      .find('.column')
      .hide()
      .filter(function() {
        var okData1 = true;
        var okData2 = true;
        var okData3 = true;
        var okSearch = true;
    
        if (data1 !== "all") {
            okData1 = $(this).attr('data-data1') === data1;
        }
        if (data2 !== "all") {
          okData2 = $(this).attr('data-data2') === data2;
        }
        if (data3 !== "all") {
          okData3 = $(this).attr('data-data3') === data3;
        }
        if (search !== '') {
          okSearch = $(this).text().toLowerCase().indexOf(search) > -1;
        }
        return okData1 && okData2 && okData3 & okSearch;
      }).fadeIn('fast');
    }