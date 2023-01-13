const container = document.querySelector('.image-container-outer')
document.querySelector('.slider').addEventListener('input',
(e)=>{
    container.style.setProperty('--position',`${e.target.value}%`)
}) 