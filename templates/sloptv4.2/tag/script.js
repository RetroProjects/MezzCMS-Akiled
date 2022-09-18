const colorInput = document.querySelector('#color'),
      textArea = document.querySelector('#textArea'),
      hex = document.querySelector('#hex'),
      contDiv = document.querySelector('.cont-int');

colorInput.addEventListener('input',()=>{
    let color = colorInput.value;
    hex.style.color = color;
    hex.innerHTML = color;
    textArea.style.color = color;
    contDiv.style.borderColor = color;
})