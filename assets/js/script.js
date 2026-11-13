// index.php
document.addEventListener("DOMContentLoaded", () => {
  // Notificações do formulário de contacto
  const notification = document.getElementById("formNotification");

  if (!notification) {
    return;
  }

  const closeButton = notification.querySelector(".notification-close");

  function closeNotification() {
    notification.classList.add("hide");

    setTimeout(() => {
      notification.remove();

      // Limpar o parâmetro status da URL sem recarregar
      const url = new URL(window.location.href);
      url.searchParams.delete("status");

      window.history.replaceState(
        {},
        document.title,
        url.pathname + url.search + url.hash,
      );
    }, 400);
  }

  // Fechar ao clicar no X
  if (closeButton) {
    closeButton.addEventListener("click", closeNotification);
  }

  // Fechar automaticamente após 5 segundos
  setTimeout(closeNotification, 5000);
});

// Garante o bom funcionamento e interações da página
document.addEventListener("DOMContentLoaded", () => {
  console.log("Portfólio carregado com sucesso!");

  // BOTÃO VOLTAR AO TOPO
  const backToTop = document.getElementById("backToTop");

  if (backToTop) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTop.classList.add("visible");
      } else {
        backToTop.classList.remove("visible");
      }
    });
  }

  // FECHAR NOTIFICAÇÃO DO FORMULÁRIO
  const notification = document.getElementById("formNotification");
  const closeNotification = document.querySelector(".notification-close");

  if (notification && closeNotification) {
    closeNotification.addEventListener("click", () => {
      notification.remove();
    });

    setTimeout(() => {
      notification.remove();
    }, 5000);
  }
});



// projeto.php
document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.querySelector(".project-carousel");

  if (!carousel) {
    return;
  }

  const slides = carousel.querySelectorAll(".project-carousel-slide");
  const dots = carousel.querySelectorAll(".carousel-dot");
  const previous = carousel.querySelector(".carousel-prev");
  const next = carousel.querySelector(".carousel-next");
  const counter = carousel.querySelector(".carousel-counter");

  let currentSlide = 0;

  function showSlide(index) {
    currentSlide = (index + slides.length) % slides.length;

    slides.forEach((slide, i) => {
      slide.hidden = i !== currentSlide;
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === currentSlide);
      dot.setAttribute("aria-current", i === currentSlide ? "true" : "false");
    });

    if (counter) {
      counter.textContent = `${currentSlide + 1} / ${slides.length}`;
    }
  }

  if (previous && next) {
    previous.addEventListener("click", () => {
      showSlide(currentSlide - 1);
    });

    next.addEventListener("click", () => {
      showSlide(currentSlide + 1);
    });
  }

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      showSlide(index);
    });
  });
});
