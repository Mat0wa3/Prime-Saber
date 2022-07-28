const inputs = document.querySelectorAll('input');
inputs.forEach( input =>{
    input.onfocus = ( )=>{
        input.previousElementSibling.classList.add('top');
        input.previousElementSibling.classList.add('focus');
        input.parentNode.classList.add('focus');
    }
    input.onblur = ( )=>{
        input.value = input.value.trim( );
        if( input.value.trim( ).length == 0 ){
        input.previousElementSibling.classList.remove('top');
        }
        input.previousElementSibling.classList.remove('focus');
        input.parentNode.classList.remove('focus');
    }
});
const textareas = document.querySelectorAll('textarea');
textareas.forEach( textarea =>{
    textarea.onfocus = ( )=>{
        textarea.previousElementSibling.classList.add('top');
        textarea.previousElementSibling.classList.add('focus');
        textarea.parentNode.classList.add('focus');
    }
    textarea.onblur = ( )=>{
        textarea.value = textarea.value.trim( );
        if( textarea.value.trim( ).length == 0 ){
        textarea.previousElementSibling.classList.remove('top');
        }
        textarea.previousElementSibling.classList.remove('focus');
        textarea.parentNode.classList.remove('focus');
    }
});