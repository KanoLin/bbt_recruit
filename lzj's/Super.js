$("#submit").click(function () {
    $.ajax({
        type: 'POST',
        url: 'bbtEntryBlank.php',
        data: {
            action: 'superquery',
            branch: $('select[name=branch]').val()
        },
        success: function (data) {
            var branch = $('select[name=branch]').val();
            var value = JSON.parse(data);
            var n = value[0] - 1;
            var str = "<h4>" + branch + ":" + n + "人" + "</h4>";
            if (n) {
                str += "<table border=1><tr>";
                for (var i = 1; i <= n + 1; i++) {
                    for (var j = 0; j < 12; j++) {
                        str += "<td>" + value[i][j] + "</td>";
                    }
                    str += "</tr>";
                }
                str += "</table>";
            }
            $("#show").append(str);
        }
    })
})