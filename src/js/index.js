//ramdom color
const color_hue = [128,188,238,321,334];
const i_color_hue = Math.floor(Math.random() * 5);

let root = document.documentElement;

root.style.setProperty('--main-color-hue', color_hue[i_color_hue]);
//

$(document).ready(function () {
    
});

$("#producto_image").change(function() {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            $('#imgAddProducto').attr('style', "background-image: url('" + e.target.result + "')");
        };
        
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}
