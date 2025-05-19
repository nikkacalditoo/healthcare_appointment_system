

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #2e7d32;
            --secondary-green: #43a047;
            --hover-green: #388e3c;
        }

        body {
            background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 100%);
            min-height: 100vh;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 2px solid #90caf9;
            padding: 0.5rem 1rem;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--primary-green) !important;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        .nav-link {
            color: var(--primary-green);
            font-weight: 500;
            position: relative;
        }

        .nav-link:hover {
            color: var(--hover-green);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--primary-green);
            transition: all 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }

        .navbar-nav {
            gap: 0.5rem;
        }

        .btn-outline-success {
            color: var(--primary-green);
            border-color: var(--primary-green);
            transition: all 0.3s ease;
        }

        .btn-outline-success:hover {
            background-color: var(--hover-green);
            border-color: var(--hover-green);
            color: white;
            transform: translateY(-2px);
        }

        .btn-green {
            background-color: var(--secondary-green);
            color: white;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-green:hover {
            background-color: var(--hover-green);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .register-card {
            border: none;
            border-radius: 20px;
            padding: 40px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .section-title {
            color: var(--primary-green);
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--secondary-green);
        }

        .error {
            color: #dc3545;
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff5f5;
        }

        .form-label {
            color: #2e7d32;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control, .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--secondary-green);
            box-shadow: 0 0 0 0.2rem rgba(67, 160, 71, 0.25);
        }

        .input-group-text {
            cursor: pointer;
            background-color: #f8f9fa;
            border: 2px solid #e0e0e0;
            border-left: none;
            transition: all 0.3s ease;
        }

        .input-group-text:hover {
            background-color: #e9ecef;
        }

        .invalid-feedback {
            font-size: 0.875rem;
            color: #dc3545;
            margin-top: 0.5rem;
        }

        .form-text {
            color: #6c757d;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        a {
            color: var(--primary-green);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a:hover {
            color: var(--hover-green);
            text-decoration: underline;
        }

        .text-center.mt-3 {
            margin-top: 1.5rem !important;
            font-size: 1rem;
        }

        .text-danger {
            color: #dc3545 !important;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .register-card {
                padding: 20px;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                margin-top: 1rem;
            }
            
            .navbar-nav {
                gap: 1rem;
                padding: 1rem 0;
            }

            .nav-item {
                width: 100%;
                text-align: center;
            }

            .btn {
                width: 100%;
                margin: 0.5rem 0;
            }
        }

        /* Additional footer styles */
        footer {
            margin-top: auto;
            background: linear-gradient(to right, #1a1a1a, #2e7d32) !important;
        }

        footer h5 {
            color: #43a047;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        footer p {
            opacity: 0.9;
            margin-bottom: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container.mt-5 {
            flex: 1;
        }

        /* Additional button styles */
        .btn-lg {
            padding: 12px 24px;
            font-size: 1.1rem;
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 0.9rem;
        }

        .btn-green.btn-lg:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-outline-success.btn-sm:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        /* Additional link styles */
        .text-success.text-decoration-underline:hover {
            color: var(--hover-green) !important;
        }
        
        .text-danger.fw-bold:hover {
            color: #dc3545 !important;
            text-decoration: underline;
        }
    </style>
  
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js"></script>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/healthcare_appointment_system/index.php">
            <img src="/healthcare_appointment_system/assets/img/logo.png" alt="PrimeCare Medical Logo">
            PrimeCare Medical
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-3" href="/healthcare_appointment_system/index.php#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="/healthcare_appointment_system/index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="/healthcare_appointment_system/index.php#specialties">Specialties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="/healthcare_appointment_system/index.php#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="/healthcare_appointment_system/index.php#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="/healthcare_appointment_system/register.php" class="btn btn-green btn-lg">Register</a>
                </li>
                <li class="nav-item ms-2">
                    <a href="/healthcare_appointment_system/login.php" class="btn btn-outline-success btn-sm">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Registration Form -->
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="register-card">
                <h2 class="text-center section-title">Patient Registration</h2>
              
                   
                
                 <form method="POST">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" required>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Complete Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Street No., Barangay, City/Municipality, Province" rows="3" required></textarea>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Contact Number</label>
                        <input type="tel" id="phone" name="contact" class="form-control" placeholder="Enter contact number" required>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" name="birthday" id="birthday" class="form-control" required>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            <span class="input-group-text" onclick="togglePassword('password', this)">
                                <i class="bi bi-eye-slash"></i>
                            </span>
                        </div>
                        <div class="form-text text-muted">
                            Password must be at least 6 characters long.
                        </div>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                            <span class="input-group-text" onclick="togglePassword('confirm_password', this)">
                                <i class="bi bi-eye-slash"></i>
                            </span>
                        </div>
                        <div class="form-text text-muted">
                            Your password must be at least 6 characters long.
                        </div>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>

                    <input type="hidden" name="role" value="patient">
                    <button type="submit" class="btn btn-green w-100">Register</button>
                </form>


                <div class="text-center mt-3">
                    <a href="/healthcare_appointment_system/forgot_password.php" class="text-danger fw-bold">Forgot Password?</a>
                </div>
                <div class="text-center mt-4">
                    Already have an account? <a href="/healthcare_appointment_system/login.php" class="text-success text-decoration-underline fw-bold">Login Here</a>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>PrimeCare Medical</h5>
                <p>Providing Quality Healthcare Services</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p>&copy; 2024 PrimeCare Medical. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS + Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<script>
const phoneInputField = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInputField, {
  preferredCountries: ["ph", "us", "gb"],
  separateDialCode: true,
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
});

const form = document.querySelector("form");
form.setAttribute("novalidate", true); // disable native browser validation

form.addEventListener("submit", function (e) {
  let isValid = true;
  const inputs = form.querySelectorAll("input, select, textarea");

  inputs.forEach(input => {
    const name = input.getAttribute("name");
    const error = input.parentElement.querySelector(".invalid-feedback");
    const value = input.value.trim();

    // Reset error message
    let message = "This field is required.";

    // Empty check
    if (input.hasAttribute("required") && value === "") {
      input.classList.add("is-invalid");
      if (error) {
        error.innerText = message;
        error.style.display = "block";
      }
      isValid = false;
    }

    // Format-specific validations
    else if (name === "email" && !/^\S+@\S+\.\S+$/.test(value)) {
      input.classList.add("is-invalid");
      if (error) {
        error.innerText = "Please enter a valid email address.";
        error.style.display = "block";
      }
      isValid = false;
    }
    else if (name === "password" && value.length < 6) {
      input.classList.add("is-invalid");
      if (error) {
        error.innerText = "Password must be at least 6 characters.";
        error.style.display = "block";
      }
      isValid = false;
    }
    else if (name === "confirm_password" && value !== form.querySelector("input[name='password']").value) {
      input.classList.add("is-invalid");
      if (error) {
        error.innerText = "Passwords do not match.";
        error.style.display = "block";
      }
      isValid = false;
    }
    else if (name === "contact") {
      const full_number = iti.getNumber();
      phoneInputField.value = full_number;
      if (!iti.isValidNumber()) {
        input.classList.add("is-invalid");
        if (error) {
          error.innerText = "Please enter a valid contact number.";
          error.style.display = "block";
        }
        isValid = false;
      } else {
        input.classList.remove("is-invalid");
        if (error) error.style.display = "none";
      }
    }
    else {
      input.classList.remove("is-invalid");
      if (error) error.style.display = "none";
    }
  });

  if (!isValid) {
    e.preventDefault(); // block form if any error
  }
});

document.querySelectorAll("input, select, textarea").forEach(input => {
  input.addEventListener("input", () => {
    if (input.classList.contains("is-invalid")) {
      input.classList.remove("is-invalid");
      const error = input.parentElement.querySelector(".invalid-feedback");
      if (error) error.style.display = "none";
    }
  });
});

function togglePassword(id, icon) {
    const input = document.getElementById(id);
    const isPassword = input.type === "password";
    input.type = isPassword ? "text" : "password";
    icon.innerHTML = isPassword ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
}
</script>

</body>
</html>
