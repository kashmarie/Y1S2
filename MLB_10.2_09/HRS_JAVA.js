// Get all FAQ question elements
const faqQuestions = document.querySelectorAll('.faq-container h1');

// Add click event listener to each question
faqQuestions.forEach((question) => {
  question.addEventListener('click', () => {
    // Toggle active class on clicked question
    question.parentNode.classList.toggle('faq-active');

    // Toggle visibility of answer
    const answer = question.nextElementSibling;
    answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
  });
});



