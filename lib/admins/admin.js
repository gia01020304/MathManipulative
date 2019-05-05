$('#logo').change(function(){
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#img-logo')
            .attr('src', e.target.result);
    };

    reader.readAsDataURL(this.files[0]);
});
$("#favicon").change(function(){
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#img-favicon')
            .attr('src', e.target.result);
    };

    reader.readAsDataURL(this.files[0]);
});
$("#logout").click(function() {
    $.ajax({
        url: pathRelative + 'AuthenticateCL/Logout',
        type: 'GET',
        dataType: 'json',
        success:function (response) {
            if (response.success) {
                window.location.href = pathRelative + "AuthenticateCL/adminIndex";
            }else{
                
            }
        },
        error:function (response) {
            
        }
    })
});