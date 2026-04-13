<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="login-wrapper">
        
        <div class="grid-overlay"></div>
        <canvas id="particleCanvas"></canvas>

        <div class="combined-container">
            
            <div class="mascot-wrapper">
                <div class="robot" id="blockbusterRobot">
                    <div class="robot-antenna"><div class="robot-led"></div></div>
                    <div class="robot-head">
                        <div class="robot-eye"><div class="robot-pupil"></div></div>
                        <div class="robot-eye"><div class="robot-pupil"></div></div>
                    </div>
                    <div class="robot-hand hand-left"></div>
                    <div class="robot-hand hand-right"></div>
                </div>
            </div>

            <div class="tech-login-card">
                
                <h3>Crea tu cuenta</h3>

                <form action="<?= base_url('registro/guardar') ?>" method="POST">
                    
                    <div class="tech-input-group">
                        <i class="fa fa-user left-icon"></i>
                        <input type="text" name="nombre_usuario" class="track-input" placeholder="Nombre(s)" required autocomplete="off">
                    </div>

                    <div class="row-inputs">
                        <div class="tech-input-group">
                            <i class="fa fa-id-card left-icon"></i>
                            <input type="text" name="ap_usuario" class="track-input" placeholder="Apellido Paterno" required autocomplete="off">
                        </div>
                        <div class="tech-input-group">
                            <i class="fa fa-id-card left-icon"></i>
                            <input type="text" name="am_usuario" class="track-input" placeholder="Apellido Materno" required autocomplete="off">
                        </div>
                    </div>

                    <div class="tech-input-group">
                        <i class="fa fa-envelope left-icon"></i>
                        <input type="email" name="email_usuario" class="track-input" placeholder="Correo electrónico" required autocomplete="off">
                    </div>

                    <div class="tech-input-group">
                        <i class="fa fa-lock left-icon"></i>
                        <input type="password" name="password_usuario" id="passwordField" placeholder="Contraseña" required>
                        <button type="button" class="toggle-password" id="toggleBtn" aria-label="Mostrar contraseña">
                            <i class="fa fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>

                    <button type="submit" class="btn-tech-submit">REGISTRARSE <i class="fa fa-user-plus" style="margin-left: 8px;"></i></button>
                </form>

                <div class="tech-footer">
                    ¿Ya tienes una cuenta? <br><a href="<?= base_url('login') ?>">¡Inicia sesión aquí!</a>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // --- LÓGICA DEL OJO DE CONTRASEÑA ---
            const passwordInput = document.getElementById('passwordField');
            const toggleBtn = document.getElementById('toggleBtn');
            const eyeIcon = document.getElementById('eyeIcon');

            toggleBtn.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                    toggleBtn.setAttribute('aria-label', 'Ocultar contraseña');
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                    toggleBtn.setAttribute('aria-label', 'Mostrar contraseña');
                }
            });

            // --- LÓGICA DEL ROBOT INTERACTIVO (AHORA SIGUE MULTIPLES CAMPOS) ---
            const textInputs = document.querySelectorAll('.track-input'); // Selecciona todos los campos de texto
            const passInput = document.getElementById('passwordField');
            const robot = document.getElementById('blockbusterRobot');
            const pupils = document.querySelectorAll('.robot-pupil');

            // Seguir texto con los ojos en cualquier campo de texto
            textInputs.forEach(input => {
                input.addEventListener('input', function(e) {
                    let length = e.target.value.length;
                    let moveAmount = Math.min(length * 0.7, 7); 
                    pupils.forEach(pupil => {
                        pupil.style.transform = `translate(calc(-50% + ${moveAmount}px), -50%)`;
                    });
                });

                // Regresar ojos al centro al salir del campo
                input.addEventListener('blur', function() {
                    pupils.forEach(pupil => {
                        pupil.style.transform = 'translate(-50%, -50%)';
                    });
                });
            });

            // Taparse los ojos en contraseña
            passInput.addEventListener('focus', function() {
                robot.classList.add('hide-eyes');
            });

            // Destaparse los ojos
            passInput.addEventListener('blur', function() {
                robot.classList.remove('hide-eyes');
            });


            // --- LÓGICA DE LAS CONSTELACIONES DIGITALES (CANVAS) ---
            const canvas = document.getElementById('particleCanvas');
            const ctx = canvas.getContext('2d');
            let particlesArray = [];
            
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            window.addEventListener('resize', function(){
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                init(); 
            });

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 2 + 0.5; 
                    this.speedX = (Math.random() * 0.8) - 0.4; 
                    this.speedY = (Math.random() * 0.8) - 0.4;
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                    if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
                }
                draw() {
                    ctx.fillStyle = 'rgba(140, 155, 181, 0.7)'; 
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            function init() {
                particlesArray = [];
                let numberOfParticles = (canvas.height * canvas.width) / 15000; 
                if (numberOfParticles > 80) numberOfParticles = 80; 

                for (let i = 0; i < numberOfParticles; i++) {
                    particlesArray.push(new Particle());
                }
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                for (let i = 0; i < particlesArray.length; i++) {
                    particlesArray[i].update();
                    particlesArray[i].draw();

                    for (let j = i; j < particlesArray.length; j++) {
                        const dx = particlesArray[i].x - particlesArray[j].x;
                        const dy = particlesArray[i].y - particlesArray[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 110) { 
                            ctx.beginPath();
                            const opacity = 1 - (distance/110);
                            ctx.strokeStyle = `rgba(92, 114, 153, ${opacity * 0.35})`; 
                            ctx.lineWidth = 0.8;
                            ctx.moveTo(particlesArray[i].x, particlesArray[i].y);
                            ctx.lineTo(particlesArray[j].x, particlesArray[j].y);
                            ctx.stroke();
                        }
                    }
                }
                requestAnimationFrame(animate);
            }

            init();
            animate();
        });
    </script>

<?= $this->endSection() ?>