document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel');
    const carouselImages = document.querySelector('.carousel-images');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;
    const intervalTime = 3000;

    function nextImage() {
        currentIndex++;
        if (currentIndex > carouselImages.children.length - 1) {
            currentIndex = 0;
        }
        updateCarousel();
    }

    function prevImage() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = carouselImages.children.length - 1;
        }
        updateCarousel();
    }

    function updateCarousel() {
        const imageWidth = carousel.offsetWidth;
        const newPosition = -currentIndex * imageWidth;
        carouselImages.style.transform = `translateX(${newPosition}px)`;
    }

    // Verifica se os botões existem antes de adicionar eventos
    if (prevBtn) prevBtn.addEventListener('click', prevImage);
    if (nextBtn) nextBtn.addEventListener('click', nextImage);

    // Inicia o carrossel automático
    setInterval(nextImage, intervalTime);
});


document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector("body");
    const loginStatus = body.getAttribute("data-login");
    const accountStatus = body.getAttribute("data-account");

    // Exibe o Toast para login bem-sucedido
    if (loginStatus === "success") {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });

        Toast.fire({
            icon: "success",
            title: "Login efetuado com sucesso!",
        });
    }

    // Exibe o Toast para erro no login
    if (loginStatus === "error") {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });

        Toast.fire({
            icon: "error",
            title: "Email ou senha inválidos!",
        });
    }

    // Exibe o Toast quando a conta for criada com sucesso
    if (accountStatus === "success") {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });

        Toast.fire({
            icon: "success",
            title: "Conta criada com sucesso!",
        });
    }

    // Exibe o Toast para erro ao criar a conta
    if (accountStatus === "error") {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });

        Toast.fire({
            icon: "error",
            title: "Erro ao criar a conta. Tente novamente!",
        });
    }

    // Exibe o Toast se o e-mail já existir
    if (accountStatus === "exists") {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });

        Toast.fire({
            icon: "error",
            title: "Este e-mail já está cadastrado!",
        });
    }
});
