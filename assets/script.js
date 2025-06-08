// Seleciona todos os elementos necessários
const images = document.querySelectorAll('.grid-container img');
const modal = document.createElement('div');
const modalImg = document.createElement('img');
const closeBtn = document.createElement('span');
const zoomInBtn = document.createElement('button');
const zoomOutBtn = document.createElement('button');
const resetBtn = document.createElement('button');
const controls = document.createElement('div');

// Configura o modal
modal.id = 'imageModal';
modal.classList.add('modal');
modal.style.display = 'none';
modal.style.position = 'fixed';
modal.style.zIndex = '1000';
modal.style.left = '0';
modal.style.top = '0';
modal.style.width = '100%';
modal.style.height = '100%';
modal.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
modal.style.overflow = 'auto';

// Configura a imagem do modal
modalImg.classList.add('modal-content');
modalImg.style.display = 'block';
modalImg.style.maxWidth = '80%';
modalImg.style.maxHeight = '80%';
modalImg.style.margin = 'auto';
modalImg.style.marginTop = '5%';
modalImg.style.transformOrigin = 'center center';
modalImg.style.transition = 'transform 0.25s ease';

// Configura o botão de fechar
closeBtn.innerHTML = '&times;';
closeBtn.style.position = 'absolute';
closeBtn.style.top = '15px';
closeBtn.style.right = '35px';
closeBtn.style.color = '#f1f1f1';
closeBtn.style.fontSize = '40px';
closeBtn.style.fontWeight = 'bold';
closeBtn.style.cursor = 'pointer';

// Configura os botões de controle
zoomInBtn.textContent = '+';
zoomOutBtn.textContent = '-';
resetBtn.textContent = '↺';
controls.classList.add('zoom-controls');

// Estiliza os botões de controle
const styleButtons = (btn) => {
  btn.style.backgroundColor = '#4CAF50';
  btn.style.color = 'white';
  btn.style.padding = '10px 15px';
  btn.style.border = 'none';
  btn.style.borderRadius = '5px';
  btn.style.cursor = 'pointer';
  btn.style.fontSize = '20px';
  btn.style.margin = '5px';
};

[zoomInBtn, zoomOutBtn, resetBtn].forEach(styleButtons);

controls.style.position = 'fixed';
controls.style.bottom = '20px';
controls.style.left = '50%';
controls.style.transform = 'translateX(-50%)';
controls.style.zIndex = '1001';

// Adiciona elementos ao DOM
controls.appendChild(zoomInBtn);
controls.appendChild(zoomOutBtn);
controls.appendChild(resetBtn);
modal.appendChild(closeBtn);
modal.appendChild(modalImg);
modal.appendChild(controls);
document.body.appendChild(modal);

// Variável para controlar o zoom
let scale = 1;

// Função para abrir o modal
function openModal(imgSrc) {
  modalImg.src = imgSrc;
  modal.style.display = 'block';
  scale = 1;  // Reseta o zoom
  modalImg.style.transform = `scale(${scale})`;
  document.body.style.overflow = 'hidden'; // Impede scroll da página
}

// Função para fechar o modal
function closeModal() {
  modal.style.display = 'none';
  document.body.style.overflow = 'auto'; // Restaura scroll da página
}

// Event Listeners
images.forEach(img => {
  img.addEventListener('click', () => {
    openModal(img.src);
  });
});

closeBtn.addEventListener('click', closeModal);

modal.addEventListener('click', (e) => {
  if (e.target === modal) closeModal();
});

// Controles de zoom
zoomInBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  scale += 0.1;
  modalImg.style.transform = `scale(${scale})`;
});

zoomOutBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  if (scale > 0.2) scale -= 0.1;
  modalImg.style.transform = `scale(${scale})`;
});

resetBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  scale = 1;
  modalImg.style.transform = `scale(${scale})`;
});

// Teclado para controles
document.addEventListener('keydown', (e) => {
  if (modal.style.display === 'block') {
    switch(e.key) {
      case 'Escape':
        closeModal();
        break;
      case '+':
        scale += 0.1;
        modalImg.style.transform = `scale(${scale})`;
        break;
      case '-':
        if (scale > 0.2) scale -= 0.1;
        modalImg.style.transform = `scale(${scale})`;
        break;
      case '0':
        scale = 1;
        modalImg.style.transform = `scale(${scale})`;
        break;
    }
  }
});