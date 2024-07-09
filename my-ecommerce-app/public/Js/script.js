const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
    history.pushState({}, '', signupRoute);
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
    history.pushState({}, '', loginRoute);
});



sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
    // show password
    $(document).ready(function() {
        $('.click-eye').click(function() {
            $($(this).attr('toggle')).attr('type', function(index, attr) {
                return attr == 'password' ? 'text' : 'password';
            });
            $(this).toggleClass('bx-hide bx-show');
        });
    });
        