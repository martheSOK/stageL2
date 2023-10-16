document.addEventListener('keydown', function(event) {
    if (event.target.classList.contains('numeric-input')) {
        if (!/^\d$/.test(event.key) && event.key !== 'Backspace' && event.key !== 'Delete' && event.key !== 'ArrowLeft' && event.key !== 'ArrowRight') {
            event.preventDefault();
        }
    }
});
