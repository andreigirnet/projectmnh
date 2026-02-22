document.addEventListener('keydown', function(e) {
    // Ctrl + Shift + C
    if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'c') {
        e.preventDefault();
    }

    // F12
    if (e.key === 'F12') {
        e.preventDefault();
    }

    // Ctrl + Shift + I (DevTools)
    if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'i') {
        e.preventDefault();
    }

    // Ctrl + U (View source)
    if (e.ctrlKey && e.key.toLowerCase() === 'u') {
        e.preventDefault();
    }
});

document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
}, false);
