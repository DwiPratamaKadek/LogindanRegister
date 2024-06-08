<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/regis.css') ?>">
    <title>Register</title>
</head>
<body>
    <div class="image">
        <img src="<?php echo base_url('assets/img/pantaiBali.jpg') ?>" alt="Background Image">
    </div>
    <div class="backgroundBlur">
        <div class="logo">
            <h1>JENDELA<br>WISATA</h1>
            <h3>contribution</h3>
        </div>
        
        <div class="progres">
            <div class="lingkaran"></div>
            <div class="line"></div>
            <div class="lingkaran"></div>
            <div class="line"></div>
            <div class="lingkaran"></div>
        </div>
        
        <form id="multiStepForm" action="<?php echo base_url('c_auth/register') ?>" method="post">
            <!-- Step 1 -->
            <div class="frame">
                <div class="page">
                    <div class="form">
                        <input type="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="button">
                        <input type="button" value="Next" onclick="nextStep()">
                        
                    </div>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="frame" style="display:none">
                <div class="page">
                    <div class="form">
                        <input type="text" id="nameAko" placeholder="Akomodasi" required>
                    </div>
                    <div class="form">
                        <select name="akomodasi" required>
                            <option value="Hotel">Hotel</option>
                            <option value="Vila">Vila</option>
                        </select>
                    </div>
                    <br>
                    <div class="button">
                        <input type="button" value="Previous" onclick="prevStep()">
                        <input type="button" value="Next" onclick="nextStep()">
                    </div>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="frame" style="display:none">
                <div class="page">
                    <div class="form">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="form">
                        <input type="password" name="repeatPassword" id="repeatPassword" placeholder="Repeat Password" required>
                    </div>
                    <div class="button">
                    <input type="submit" value="Previous" onclick="prevStep() "> 
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script>
        let currentStep = 0;
        const pages = document.querySelectorAll(".frame");
        const progressCircles = document.querySelectorAll(".progres .lingkaran");
        const progressLines = document.querySelectorAll(".progres .line");

        function showStep(page) {
            pages.forEach((pageDiv, index) => {
                pageDiv.style.display = index === page ? "block" : "none";
            });
            updateProgress(page);
        }

        function nextStep() {
            if (currentStep < pages.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function updateProgress(step) {
            progressCircles.forEach((circle, index) => {
                circle.style.backgroundColor = index <= step ? "orangered" : "#D9D9D9";
            });
            progressLines.forEach((line, index) => {
                line.style.backgroundColor = index < step ? "orangered" : "#D9D9D9";
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("multiStepForm");
            if (form) {
                form.addEventListener("submit", function(event) {
                    alert("Form submitted!");
                    event.preventDefault();
                });
            } else {
                console.error("Element with ID 'multiStepForm' not found.");
            }

            showStep(currentStep);
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
