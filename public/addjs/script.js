// Script for advanced interactivity
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('foodMenuForm');
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');

    // Live image preview
    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.innerHTML = `<img src="${e.target.result}" alt="Image Preview">`;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.innerHTML = '';
            imagePreview.style.display = 'none';
        }
    });

    // Form validation
    form.addEventListener('submit', (e) => {
        const title = document.getElementById('title').value.trim();
        const price = document.getElementById('price').value.trim();
        const description = document.getElementById('description').value.trim();

        if (!title || !price || !description) {
            alert('Please fill in all fields.');
            e.preventDefault();
        }

        if (isNaN(price) || Number(price) <= 0) {
            alert('Price must be a positive number.');
            e.preventDefault();
        }
    });
});
