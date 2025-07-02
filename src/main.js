// Lenis for Smooth Scrolling
const lenis = new Lenis()

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

function create_element(classes, content = "", tagname = "span") {
    const element = document.createElement(tagname);
    element.className = classes;
    element.textContent = content;
    return element;
}

function errors_response_create(name, errors, main_container_name) {
    const main_container = document.getElementById(main_container_name);
    if (name in errors) {
        const existingError = main_container.querySelector(`[data-error-for="${name}"]`);

        if (!existingError) {
            error_span = create_element("text-red-500 text-xs", errors[name]);
            error_span.setAttribute("data-error-for", name); // custom attribute to identify
            main_container.appendChild(error_span);
        }
    } else {
        const existingError = main_container.querySelector(`[data-error-for="${name}"]`);
        if (existingError) {
            existingError.remove();
        }
    }
}

document.getElementById("open-mobile-menu-btn").addEventListener("click",function () {
    document.getElementById("navbar-mobile").classList.toggle("hidden");
});


// Handle Form Request
grecaptcha.ready(function () {
    document.getElementById("contact-form").addEventListener("submit", function (e) {
        e.preventDefault(); // prevent normal form submit

        const form = e.target;
        const formData = new FormData(form);

        grecaptcha.execute('6Le0IWorAAAAADRWWVh9pbHcjlJHukGE_3wggQcQ', {
            action: 'submit'
        })
            .then(function (token) {
                formData.append('recaptcha_token', token); // Add token to FormData

                fetch('/submit-contact', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => {
                        if (response.ok) {
                            return response.text(); // or .json() if backend returns JSON
                        } else {
                            throw new Error('Server error');
                        }
                    })
                    .then(data => {
                        console.log(data);
                        data = JSON.parse(data);

                        if ('errors' in data) {
                            errors_response_create('email', data['errors'], "main-email");
                            errors_response_create('msg', data['errors'], "main-message");
                            errors_response_create('name', data['errors'], "main-name");
                            errors_response_create('robot', data['errors'], "main-robot");
                            errors_response_create('emailnotsend', data['errors'], "main-robot");
                            errors_response_create('rate', data['errors'], "main-robot");
                        } else {
                            form.reset();
                            main_robot = document.getElementById("main-robot");
                            success_msg = create_element("text-green-600 text-sm font-medium mt-4", "✅ Your message was sent successfully. I’ll get back to you soon!");
                            document.querySelectorAll('.text-red-500.text-xs').forEach(el => el.remove());
                            main_robot.appendChild(success_msg);
                            document.getElementById("form-submit").setAttribute("disabled", "");
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        alert('Something went wrong. 😓');
                    });
            });
    });
});

// Write and Rewrite Text in Hero Section
const texts = ["WP Expert!", "PHP Developer!", "Laravel Dev.!"];
const speed = 100;
const backSpeed = 50;
const delay = 1500;

i = 0; // index for texts array
j = 0; // character position
isDeleting = false;

const el = document.getElementById("typewriter");

function type() {
    const current = texts[i];
    if (isDeleting) {
        el.textContent = current.substring(0, j--);
    } else {
        el.textContent = current.substring(0, j++);
    }

    if (!isDeleting && j === current.length) {
        isDeleting = true;
        setTimeout(type, delay);
    } else if (isDeleting && j === 0) {
        isDeleting = false;
        i = (i + 1) % texts.length;
        setTimeout(type, 300);
    } else {
        setTimeout(type, isDeleting ? backSpeed : speed);
    }
}

type();


header = document.getElementById("header");

logo = document.getElementById("logo");
window.addEventListener("scroll", (event) => {

    let scroll = this.scrollY;
    scrollBtn = document.getElementById("scroll-btn");
    if (scroll > 10) {
        scrollBtn.style.bottom = "1.25rem";
    }
    if (scroll < 200) {
        scrollBtn.style.bottom = "-60px";
    }

});

scrollBtn = document.getElementById("scroll-btn");

if (window.scrollY > 200) {
    scrollBtn.style.bottom = "1.25rem";
}