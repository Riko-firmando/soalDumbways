let shape = $('.content');

function triangle(params){
    for(let i = params ; i > 0 ; i--){
        for (let j = i; j<=i; j++){
            if(j % 2 == 0){
                shape.html('#')
            }else{
                shape.html('+')
            }
        }
        shape.html('<br>')
    }
}

triangle(5)

$('form').submit(function(){
    event.preventDefault()
    let sisi =parseInt($('.sisi').val());
    $('.content').append('sisi : '+ sisi + '<br>')
    if(sisi % 2 != 0){
        for(let i = sisi ; i > 0 ; i--){
            if(i % 2 != 0){
                for (let j = 0; j < i; j++){
                    if(j % 2 == 0){
                        $('.content').append('<span>#</span>')
                    }else{
                        $('.content').append('<span>+</span>')
                    }
                }
            }else{
                for (let j = 0; j < i; j++){
                        $('.content').append('<span>+</span>')                
                }
    
            }
                $('.content').append('<br>')
        }
    }else{
        alert('sisi harus ganjil !!!')
    }
})
