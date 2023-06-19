$(document).ready(function () {
    var div=document.createElement('div');
    $('#division').change(function () {
        var divisionID = $(this).val();
        $.ajax({
            url: "action.php",
            method: "POST",
            data: { divid: divisionID },
            success: function (data) {
                div.innerHTML=data;
                document.getElementById('address').appendChild(div);
            }
        })

    });

    $('#district').change(function () {
        var districtID = $(this).val();

        $.ajax({
            url: "action1.php",
            method: "POST",
            data: { disid: districtID },
            success: function (adata) {
                div.innerHTML=adata;
                document.getElementById('address').appendChild(div);
            }
        })

    });
});