<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login — Ali Samtia</title>
    <link rel="stylesheet" href="/build/style.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Le0IWorAAAAADRWWVh9pbHcjlJHukGE_3wggQcQ"></script>
</head>
<body class="bg-white text-gray-900 font-sans">

<section class="min-h-screen flex items-center justify-center px-4 sm:px-0">
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <h1 class="text-4xl font-heading font-bold tracking-wide">Welcome Back</h1>
            <p class="mt-2 text-sm text-gray-500 font-paragraph">Login to your dashboard</p>
        </div>

        <form action="/login" method="POST" id="login-form" class="bg-white shadow-md rounded-lg p-8 space-y-6 border border-gray-100">

            <!-- Email -->
            <div class="relative z-0 w-full mb-8 group" id="main-email">
                <input type="email" name="email" id="email" class="text-xs block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer" required placeholder=" " /> <!-- required -->
                <label for="email" class="font-paragraph peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 z-[10]">Email address</label>
            </div>

            <!-- Password -->
            <div class="relative z-0 w-full mb-5 group" id="main-password">
                <input type="password" name="password" id="password" class="text-xs block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer" required placeholder=" " /> <!-- required -->
                <label for="password" class="font-paragraph peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 z-[10]">Password</label>
            </div>


            <!--Main Robot-->
            <div id="main-robot">
                <input type="hidden" name="g-recaptcha-response" id="recaptcha-token" />
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button id="form-submit" type="submit"
                        class="text-black uppercase font-paragraph border border-black text-sm w-full sm:w-auto px-6 py-3 text-center hover:bg-black hover:text-white transition-all">
                    Log In
                </button>
            </div>

            <!-- Forgot -->
            <div class="text-sm text-gray-500 text-center font-paragraph">
                <a class="hover:underline hover:text-black transition">Forgot Password? Edit <code>config.php</code>.</a>
            </div>

        </form>
    </div>
</section>

</body>
<script>
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


    // Handle Form Request
    grecaptcha.ready(function() {
        document.getElementById("login-form").addEventListener("submit", function(e) {
            e.preventDefault(); // prevent normal form submit

            const form = e.target;
            const formData = new FormData(form);

            grecaptcha.execute('6Le0IWorAAAAADRWWVh9pbHcjlJHukGE_3wggQcQ', {
                action: 'submit'
            })
                .then(function(token) {
                    formData.append('recaptcha_token', token); // Add token to FormData

                    fetch('/login', {
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
                            // alert('Form submitted successfully! 🎉');
                            console.log(data);
                            console.log(JSON.parse(data));
                            data = JSON.parse(data);

                            if ('errors' in data) {
                                errors_response_create('email', data['errors'], "main-email");
                                errors_response_create('password', data['errors'], "main-password");
                                errors_response_create('robot', data['errors'], "main-robot");
                                errors_response_create('rate', data['errors'], "main-robot");
                            } else {
                                form.reset();
                                main_robot=document.getElementById("main-robot");
                                success_msg = create_element("text-green-600 text-sm font-medium mt-4", "Logged in Redirecting to the admin page!");
                                document.querySelectorAll('.text-red-500.text-xs').forEach(el => el.remove());
                                document.querySelectorAll('.text-green-600.text-sm.font-medium.mt-4').forEach(el => el.remove());
                                main_robot.appendChild(success_msg);
                                document.getElementById("form-submit").setAttribute("disabled","");
                                document.getElementById("form-submit").classList.add("hover:cursor-not-allowed");
                                window.location.href = '/admin';
                            }
                        })
                        .catch(error => {
                            console.error(error);
                            alert('Something went wrong. 😓');
                        });
                });
        });
    });
</script>
</html>
