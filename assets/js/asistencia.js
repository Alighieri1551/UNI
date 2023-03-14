// ESTA FUNCIÓN ME PERMITE MOSTRAR MI NOMBRE EN EL MODAL
document.querySelector('form').addEventListener('submit', (event) => {
    const name = event.target.elements['name'].value;
    const message = `Gracias por marcar tu asistencia, ${name}!`;
    alert(message);
});