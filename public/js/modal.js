document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal");
    const modalBody = document.getElementById("modal-body");
    const closeModal = document.getElementById("close-modal");

    document.querySelectorAll(".carte-produit").forEach((card) => {
        card.addEventListener("click", () => {
            const id = card.dataset.id;

            fetch(`/produit/${id}/ajax`)
                .then(res => res.text())
                .then(html => {
                    modalBody.innerHTML = html;
                    modal.style.display = "flex";
                });
        });
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});
