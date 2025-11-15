<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>My Portfolio</title>

    

    <script>
    
    
        function openModal(src) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = src;
    }
    
    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (name == "" || email == "" || subject == "" || message == "") {
            alert("All fields must be filled out!");
            return false;
        }

        if (!email.match(emailPattern)) {
            alert("Please enter a valid email address!");
            return false;
        }

        return true;
    }
    </script>
</head>
<body style="background-color:#220722 ;">
    <nav role="navigation" class="nav container rounded p-3 fw-bold mx d-flex align-items-center fixed-top">
        <a href="#MyPortfolio" class="portfolio">My Portfolio</a>

        <nav class="navbar ms-auto d-flex gap-4">
            <a href="#Home">Home</a>
            <a href="#About">About</a>
            <a href="#Skills">Skills</a>
            <a href="#Project">Project</a>
            <a href="#Contact">Contact</a>
        </nav>
    </nav>

      <section id="Home" class="home container rounded py-5 d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="home-content mb-4 mb-md-0">
            <h6>Hi there, Welcome to my portfolio, I am</h6>
            <h4>Dawal, Daniel S.</h4>
            <h6>And I'm a future Frontend Developer</h6>
            <p>I am currently studying Programming, Graphic Design,<br> Software Engineering, and Branding</p>
        </div>
        <img src="{{ asset('image/portfolio-face.png') }}" alt="Hero-image" class="img-fluid image mb-3" />
    </section>

    <section id="About" class="Achievements container rounded py-5 d-flex flex-column flex-md-row align-items-center justify-content-between">

        <div class="achievement-content">
            <address class="info-address">
                <h6>About</h6>
                <div>Name: Dawal, Daniel S.</div>
                <div>Education Level: 3rd Year College</div>
                <div>Field of Study: Computer Science</div>
                <div>Institution: City College of Angeles</div>
                <div>Interests: Programming, Graphic Design, Game Development</div>
            </address>
            <img src="CCA.png" alt="achievement-image" class="img-fluid image2 mb-3" />
        </div>
    </section>

    <section id="Skills" class="Skills container rounded px-0">
        <div class="Skill-content">
            <div class="row">
                <h6>Skills</h6>
                <h5>Programming Languages</h5>
                <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">Python (50%)</div>
                </div>
                <div class="progress mt-2">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">JavaScript (50%)</div>
                </div>
                <div class="progress mt-2">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">C (50%)</div>
                </div>
                </div>
        </div>
    </section>

    <section id="Project" class="Project container rounded">
        <div class="Project-Content">
            <h6>Project</h6>
        </div>
            <h6>Basic To-Do List Application</h6>

            <p>Project Description:
            Project Goal: Create an application where users can add tasks, mark them as complete, and delete them.</p>
            
            <div class="grid-container">
                <div class="item">
                <img src="{{ asset('image/proj-1.png') }}" alt="image" onclick="openModal(this.src)"  >
            </div>
            <div class="item2">
                <img src="{{ asset('image/proj-2.png') }}" alt="image"onclick="openModal(this.src)" >
            </div>
            <div class="item3">
                <img src="{{ asset('image/proj-3.png') }}" alt="image" onclick="openModal(this.src)" >
            </div>  
            <div class="item4">
                <img src="{{ asset('image/proj-4.png') }}" alt="image" onclick="openModal(this.src)" >
            </div>
            <div class="item5">
                <img src="{{ asset('image/proj-5.png') }}" alt="image" onclick="openModal(this.src)" >
            </div>
            <div class="item6">
                <img src="{{ asset('image/proj-6.png') }}" alt="image" onclick="openModal(this.src)" >
            </div>
            </div>
        </div>

    </section>

    <section id="Contact" class="Contact container rounded">
        <div class="Contact-Content">
            <section id="contact" class="container my-5">
                <h2 class="text-center">Contact Me</h2>
                
                <form action="#" method="POST" onsubmit="return validateForm()">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
        
                <div class="social-media mt-4 text-center">
                    <h4>Find me on:</h4>
                    <a href="mailto:dijaybernal1221@gmail.com" class="me-3"><i class="fas fa-envelope fa-2x"></i></a> 
                    <a href="https://www.facebook.com/dijaybernal0103" target="https://www.facebook.com/dijaybernal0103" class="me-3"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
        
                <footer class="text-center mt-5">
                    <p>&copy; <span id="current-year"></span> Torres Dijay B. | All Rights Reserved</p>
                </footer>
            </section>
        </section>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <script>
        document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>
</body> 

</html>