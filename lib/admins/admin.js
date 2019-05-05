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