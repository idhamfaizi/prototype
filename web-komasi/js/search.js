function openModal(modalId) {
    modal = document.getElementById(modalId)
    modal.classList.remove('hidden')
}

function closeModal() {
    modal = document.getElementById('modal')
    modal.classList.add('hidden')
}