function cambio(pos){
$("#message").empty(); // To remove the previous error message
var nom = "#file"+pos;
var file = $("#file"+pos).get(0).files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing2').attr('src','upload/noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var id = pos;
var reader = new FileReader();
reader.onload = imageIsLoaded.bind(reader, id);
reader.readAsDataURL(file);
}

}
function imageIsLoaded(id, e) {
$("#file" + id).css("color","green");
$('#image_preview'+ id).css("display", "block");
$('#previewing'+ id).attr('src', e.target.result);
$('#previewing'+ id).attr('width', '250px');
$('#previewing'+ id).attr('height', '230px');
};




function upload(pos){
$("#message").empty();
$('#loading').show();
var pos2 = $("#pos").val();
var form = $('form')[pos];
var formData = new FormData(form);
$.ajax({
url: "ajax_php_file.php", 
type: "POST",             
data: formData, 
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}
});
}



function picUsrerDelete(pos){
$("#message").empty();
$('#loading').show();
var pos2 = $("#pos").val();
var form = $('form')[pos];
var formData = new FormData(form);
$.ajax({
url: "exedelpictureusr.php", 
type: "POST",             
data: formData, 
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}

});
}


