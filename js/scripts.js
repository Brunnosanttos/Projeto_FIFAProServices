// Seleciona os elementos do carrossel
const carousel = document.querySelector('.carousel');
const carouselImages = document.querySelector('.carousel-images');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// Contador para controlar o índice da imagem atual
let currentIndex = 0;
const intervalTime = 3000; 

// Função para avançar para a próxima imagem
function nextImage() {
    currentIndex++;
    if (currentIndex > carouselImages.children.length - 1) {
        currentIndex = 0; // Volta para a primeira imagem se estiver na última
    }
    updateCarousel();
}

// Adiciona um ouvinte de evento para o botão de próxima imagem
nextBtn.addEventListener('click', nextImage);

// Função para atualizar a exibição do carrossel
function updateCarousel() {
    const imageWidth = carousel.offsetWidth;
    const newPosition = -currentIndex * imageWidth;
    carouselImages.style.transform = `translateX(${newPosition}px)`;
}

// Atualização automática do carrossel
setInterval(nextImage, intervalTime);

document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector("body");
    const loginStatus = body.getAttribute("data-login");

    if (loginStatus === "success") {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        Toast.fire({
            icon: "success",
            title: "Login efetuado com sucesso!"
        });
    }
});
