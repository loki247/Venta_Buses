function encodeImage1(){

    var imagen1 = document.getElementById("foto1").files;
    var newImage1;

    if (imagen1.length > 0){
        var fileToLoad = imagen1[0];
        var fileReader = new FileReader();// para leer el contenido de fileToLoad

        //onloadstart, onloadprogress, onload, onloadend
        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data:image base64

            newImage1 = document.createElement('img'); //elemento img
            newImage1.src = srcData;

            document.getElementById("imgContainer1").innerHTML = newImage1.outerHTML;
            //document.getElementById("imgTest").innerHTML);
            document.getElementById("textImg1").innerHTML = newImage1.src;
        }
        fileReader.readAsDataURL(fileToLoad);
        return newImage1.src;
    }
}

function encodeImage2(){

    var imagen2 = document.getElementById("foto2").files;
    var newImage2;

    if (imagen2.length > 0){
        var fileToLoad = imagen2[0];
        var fileReader = new FileReader();// para leer el contenido de fileToLoad

        //onloadstart, onloadprogress, onload, onloadend
        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data:image base64

            newImage2 = document.createElement('img'); //elemento img
            newImage2.src = srcData;

            document.getElementById("imgContainer2").innerHTML = newImage2.outerHTML;
            //document.getElementById("imgTest").innerHTML);
            document.getElementById("textImg2").innerHTML = newImage2.src;
        }
        fileReader.readAsDataURL(fileToLoad);
        return newImage2.src;
    }
}

function encodeImage3(){

    var imagen3 = document.getElementById("foto3").files;
    var newImage3;

    if (imagen3.length > 0){
        var fileToLoad = imagen3[0];
        var fileReader = new FileReader();// para leer el contenido de fileToLoad

        //onloadstart, onloadprogress, onload, onloadend
        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data:image base64

            newImage3 = document.createElement('img'); //elemento img
            newImage3.src = srcData;

            document.getElementById("imgContainer3").innerHTML = newImage3.outerHTML;
            //document.getElementById("imgTest").innerHTML);
            document.getElementById("textImg3").innerHTML = newImage3.src;
        }
        fileReader.readAsDataURL(fileToLoad);
        return newImage3.src;
    }
}

function encodeImage4(){

    var imagen4 = document.getElementById("foto4").files;
    var newImage4;

    if (imagen4.length > 0){
        var fileToLoad = imagen4[0];
        var fileReader = new FileReader();// para leer el contenido de fileToLoad

        //onloadstart, onloadprogress, onload, onloadend
        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data:image base64

            newImage4 = document.createElement('img'); //elemento img
            newImage4.src = srcData;

            document.getElementById("imgContainer4").innerHTML = newImage4.outerHTML;
            //document.getElementById("imgTest").innerHTML);
            document.getElementById("textImg4").innerHTML = newImage4.src;
        }
        fileReader.readAsDataURL(fileToLoad);
        return newImage4.src;
    }
}

function encodeImage5(){

    var imagen5 = document.getElementById("foto5").files;
    var newImage5;

    if (imagen5.length > 0){
        var fileToLoad = imagen5[0];
        var fileReader = new FileReader();// para leer el contenido de fileToLoad

        //onloadstart, onloadprogress, onload, onloadend
        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data:image base64

            newImage5 = document.createElement('img'); //elemento img
            newImage5.src = srcData;

            document.getElementById("imgContainer5").innerHTML = newImage5.outerHTML;
            //document.getElementById("imgTest").innerHTML);
            document.getElementById("textImg5").innerHTML = newImage5.src;
        }
        fileReader.readAsDataURL(fileToLoad);
        return newImage5.src;
    }
}

function encodeImage6(){

    var imagen6 = document.getElementById("foto6").files;
    var newImage6;

    if (imagen6.length > 0){
        var fileToLoad = imagen6[0];
        var fileReader = new FileReader();// para leer el contenido de fileToLoad

        //onloadstart, onloadprogress, onload, onloadend
        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data:image base64

            newImage6 = document.createElement('img'); //elemento img
            newImage6.src = srcData;

            document.getElementById("imgContainer6").innerHTML = newImage6.outerHTML;
            //document.getElementById("imgTest").innerHTML);
            document.getElementById("textImg6").innerHTML = newImage6.src;
        }
        fileReader.readAsDataURL(fileToLoad);
        return newImage6.src;
    }
}

function decodeImage(){
    document.getElementById("decode").innerHTML = window.atob(encodeImage());
}