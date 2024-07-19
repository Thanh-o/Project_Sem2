document.querySelectorAll('.qty-left').forEach(button => {
    button.addEventListener('click', function() {
      const input = this.nextElementSibling;
      if (input.value > 0) {
        input.value = parseInt(input.value) - 1;
      }
    });
  });

  document.querySelectorAll('.qty-right').forEach(button => {
    button.addEventListener('click', function() {
      const input = this.previousElementSibling;
      input.value = parseInt(input.value) + 1;
    });
  });