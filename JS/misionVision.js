const openMision = document.getElementById('openMision');
const openVision = document.getElementById('openVision');
const modalMision = document.getElementById('modalMision');
const modalVision = document.getElementById('modalVision');
const closeMision = document.getElementById('closeMision');
const closeVision = document.getElementById('closeVision');

openMision.addEventListener('click', () => {
  modalMision.classList.add('show');  
});

closeMision.addEventListener('click', () => {
  modalMision.classList.remove('show');
});


openVision.addEventListener('click', () => {
  modalVision.classList.add('show');  
});

closeVision.addEventListener('click', () => {
  modalVision.classList.remove('show');
});
