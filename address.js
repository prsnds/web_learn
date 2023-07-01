$(document).ready(function () {
    $('#division').change(function () {
        var divisionID = $(this).val();
        $.ajax({
            url: "select_district.php",
            method: "POST",
            data: { divId: divisionID },
            success: function (data) {
              $('#district').html(data);
            }
        })

    });

    $('#district').change(function () {
        var districtID = $(this).val();
        $.ajax({
            
            url: "select_upazila.php",
            method: "POST",
            data: { disId: districtID },
            success: function (data) {
                $('#upazila').html(data);
            }
        })

    });

    $('#upazila').change(function () {
        var upazilaID = $(this).val();
        $.ajax({
            url: "select_union.php",
            method: "POST",
            data: { upaId: upazilaID },
            success: function (data) {
                $('union').html(data);
            }
        })

    });

});