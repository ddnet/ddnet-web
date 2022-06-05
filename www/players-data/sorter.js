$(function(){
    // add parser for `time` column
    $.tablesorter.addParser({
        id: 'time_min_sec',
        is: function(s) {
            // return false so this parser is not auto detected
            return false;
        },
        format: function(s) {
            // remove colon
            return s.replace(/:/,'');
        },
        type: 'digit'
    });

    // tablesorter for `finished maps` tables
    $(".spacey").tablesorter({
            emptyTo: 'bottom',
            sortReset: 'true',
            headers: {
                4 : { sorter: 'time_min_sec' },
                5 : { sortInitialOrder: 'desc' },
            }
    });

    // tablesorter for `unfinished maps` tables
    $(".unfinTable1").tablesorter({
          sortReset: 'true',
          headers: {
            2 : { sortInitialOrder: 'desc' }
          }
        }).bind('sortEnd', function(e, table) {
            columnize("#" + this.id);
        });

    // initial columnization of all `unfinished maps` tables
    $( ".unfinTable1" ).each(function( i ) {
        columnize("#" + this.id);
    });


    function columnize(table1) {
        // accepts jquery id selector string
        // of the first table in a row
        table2 = $(table1).next();
        table3 = $(table2).next();

        // return if it's already columnized
        if ($(table2).find('tbody >tr').length ||
            $(table3).find('tbody >tr').length)
            return;

        // set minimum table row height
        min_table_height = 20;

        rowCount = $(table1 + ' >tbody >tr').length;
        if (rowCount < min_table_height * 3 + 1)
            splitBy = min_table_height + 1;
        else {
            modulo = rowCount % 3 > 0 ? 1 : 0;
            splitBy = (rowCount / 3) + modulo + 1;
        }


        // split table1->table2
        rows = $(table1).find("tr").slice(splitBy);
        $(table2).find("tbody").append(rows);
        if ((rowCount-splitBy+1) > 0)
            $(table2).find("thead").show();

        // split table2->table3
        rows = $(table2).find("tr").slice(splitBy);
        $(table3).find("tbody").append(rows);
        if ((rowCount-splitBy*2+2) > 0)
            $(table3).find("thead").show();
    }



});
