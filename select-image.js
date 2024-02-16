const realfilebtn = document.getElementById('real-file');
const selectbtn = document.getElementById('custom-button');
const customtext = document.getElementById('custom-text');


selectbtn.addEventListener("click",function(){
    realfilebtn.click();
})

realfilebtn.addEventListener("change", function(){
    if(realfilebtn.value){
        customtext.innerHTML = realfilebtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    }
})

function imagePreview(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview');
    var newimg = document.createElement('img');
    imagediv.innerHTML=''
    newimg.src=image;
    newimg.width='400';
    newimg.height='250';
    imagediv.appendChild(newimg);
}