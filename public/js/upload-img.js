function previewImg () {
    const sampul = document.querySelector('#sampul');
    const sampulLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');
    
    sampulLabel.textContent = sampul.files[0].name;
    
    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);
    
    fileSampul.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}