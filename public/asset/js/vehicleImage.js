// JavaScript
document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');

    const images = document.querySelectorAll('.image-clickable');
    images.forEach((image) => {
        image.addEventListener('click', function () {
            const imageUrl = this.src;
            lightboxImage.src = imageUrl;
            lightbox.style.display = 'block';
        });
    });

    lightbox.addEventListener('click', function () {
        lightbox.style.display = 'none';
    });
});
