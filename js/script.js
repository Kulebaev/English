function toggleCodes(on) {
	var obj = document.getElementById('icons');

	if (on) {
		obj.classList.add('codesOn');
	} else {
		obj.classList.remove('codesOn');
	}
}

function setupScrollToTopButton() {
	const scrollToTopButton = document.getElementById('scrollToTopButton');

	// При прокрутке страницы проверяем, насколько пользователь прокрутил страницу
	window.addEventListener('scroll', () => {
		const scrollPosition =
			window.pageYOffset ||
			document.documentElement.scrollTop ||
			document.body.scrollTop ||
			0;

		// Показываем или скрываем кнопку в зависимости от положения прокрутки
		if (scrollPosition > 0.1 * window.innerHeight) {
			scrollToTopButton.style.display = 'block';
		} else {
			scrollToTopButton.style.display = 'none';
		}
	});

	// При клике на кнопку прокручиваем страницу вверх
	scrollToTopButton.addEventListener('click', () => {
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		});
	});
}

function setupSmoothScroll() {
	// Находите все ссылки с классом "smooth-scroll"
	const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');

	// Добавляйте обработчик события на каждую ссылку
	smoothScrollLinks.forEach((link) => {
		link.addEventListener('click', (event) => {
			// Отмените стандартное поведение ссылки
			event.preventDefault();

			// Получите целевой элемент, на который нужно прокрутить страницу
			const target = document.querySelector(link.getAttribute('href'));

			// Используйте метод scrollIntoView для плавного прокручивания к целевому элементу
			target.scrollIntoView({ behavior: 'smooth' });
		});
	});
}

function openPopup() {
	var popupContainer = document.getElementById('popup-container');
	popupContainer.style.display = 'flex';
  }
  
  function closePopup() {
	var popupContainer = document.getElementById('popup-container');
	popupContainer.style.display = 'none';
  }
  

// Вызов функций для настройки
setupSmoothScroll();
setupScrollToTopButton();



