$(document).ready(function(){
    addDeciaml('.decimal', '.lb-decimal');
    addDeciaml('#price', '.text-price');
    loadImageFromInput('#multiImage','.group-image-albums');
    loadImageFromInput('#singleImage','.single-image');
    loadImageFromInput('#image-wedding-file','.image-wedding');
    loadImageFromInput('#image-show','.img-show');
    changeColor();
})

function addDeciaml(name,label){
    $(name).on('keyup',function() {
        let current = $(this)
        let value = numberToDecimal(current.val());
       $(this).next(label).text(value);
    })
}

function numberToDecimal(number) {
    let decimal = "";
    let location = number.length;
    for (let index = 0; index < number.length; index++) {
        location--;
        const element = number[index];
        decimal += element; 
        if( (location) % 3 == 0  && location >= 2 ){
            decimal += ",";
        }
    }
    return decimal;
}


function loadImageFromInput(name, box) {
    $(name).change(function(event) {
        var tagert = event.target || window.event.srcElement;
        var files = tagert.files
        $(box).html('')
       
        if(FileReader && files && files.length ){
            $.each(files, function(i, item) {
                readImage(item).then(function(result){
                const src = `<div class="box-img-custom" ><img src="${result}" class="w-100 h-100" alt="" /></div>`
                 $(box).append(src)
                })
            })
        }
    })
}

async function readImage(item) {
    return new Promise(function (resolve, reject){
        let fr = new FileReader();
        fr.readAsDataURL(item);
        fr.onload= function(){
            resolve(fr.result)
        }
    })
}


function changeColor(){
    $('#color').keyup(function() {
        var text = $(this).val();
        $('.color-select').attr('style', '--color: ' + text)
    })
}