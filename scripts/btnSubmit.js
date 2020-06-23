let btn = document.querySelector(`button[type="submit"]`);
let btnSpan = document.querySelector('button>span');

// btnSpan.addEventListener('click',function (){
//     this.classList.add('spinner-border');
//     this.classList.add('spinner-border-sm');
// });

btn.addEventListener('click',function (){
    this.innerHtml = `<div class="spinner-border fast" role="status"><span class="sr-only">Loading...</span></div>`;
    this.textContent = 'Ładowanie';
});
