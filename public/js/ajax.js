$("#ajax").on("click", function(){
    var category = $('#select').val();
    $.getJSON('/api/samples/'+category,function(data){
    var ar=data[0];
    console.log(ar.samplearticle)

    $("#result").html(ar.samplearticle);

    })
})
