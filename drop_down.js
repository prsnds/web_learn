$(document).ready(function () {
    $('#division').change(function () {
        var divisionID = $(this).val();
        $.ajax({
            url: "action.php",
            method: "POST",
            data: { divid: divisionID },
            success: function (data) {
              $('#district').html(data);
            }
        })

    });

    $('#district').change(function () {
        var districtID = $(this).val();
        $.ajax({
            url: "action1.php",
            method: "POST",
            data: { disid: districtID },
            success: function (data) {
                $('#ps').html(data);
            }
        })

    });
});