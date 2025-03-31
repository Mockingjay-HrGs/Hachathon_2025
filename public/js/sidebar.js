document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.menu-toggle').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.submenu').forEach(sub => {
                if (sub !== button.nextElementSibling) {
                    sub.style.display = 'none';
                }
            });
            const submenu = button.nextElementSibling;
            if (submenu && submenu.classList.contains('submenu')) {
                submenu.style.display = (submenu.style.display === 'flex') ? 'none' : 'flex';
            }
        });
    });
});

