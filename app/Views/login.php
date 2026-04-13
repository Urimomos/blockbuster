<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="login-wrapper">
        
        <div class="grid-overlay"></div>
        <canvas id="particleCanvas"></canvas>

        <div class="combined-container">
            
            <div class="mascot-wrapper">
                <div class="robot" id="blockbusterRobot">
                    <div class="robot-antenna">
                        <div class="robot-led"></div>
                    </div>
                    <div class="robot-head">
                        <div class="robot-eye"><div class="robot-pupil"></div></div>
                        <div class="robot-eye"><div class="robot-pupil"></div></div>
                    </div>
                    <div class="robot-hand hand-left"></div>
                    <div class="robot-hand hand-right"></div>
                </div>
            </div>

            <div class="tech-login-card">
                
                <h3>Acceso Seguro</h3>

                <form action="<?= base_url('login/autenticar') ?>" method="POST">
                    
                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="error-alert">
                            <i class="fa fa-exclamation-circle"></i>
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <div class="tech-input-group">
                        <i class="fa fa-user left-icon"></i>
                        <input type="text" name="email" id="emailField" placeholder="Usuario o Correo" required autocomplete="off">
                    </div>

                    <div class="tech-input-group">
                        <i class="fa fa-lock left-icon"></i>
                        <input type="password" name="password" id="passwordField" placeholder="Contraseña" required>
                        <button type="button" class="toggle-password" id="toggleBtn" aria-label="Mostrar contraseña">
                            <i class="fa fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>

                    <button type="submit" class="btn-tech-submit">AUTENTICAR <i class="fa fa-sign-in" style="margin-left: 8px;"></i></button>
                </form>

                <div class="tech-footer">
                    ¿Aún no tienes acceso? <br><a href="<?= base_url('registro') ?>">Solicitar Membresía</a>
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

            // --- LÓGICA DEL ROBOT INTERACTIVO ---
            const emailInput = document.getElementById('emailField');
            const passInput = document.getElementById('passwordField');
            const robot = document.getElementById('blockbusterRobot');
            const pupils = document.querySelectorAll('.robot-pupil');

            // Seguir texto con los ojos
            emailInput.addEventListener('input', function(e) {
                let length = e.target.value.length;
                let moveAmount = Math.min(length * 0.7, 7); // Movimiento sutil
                
                pupils.forEach(pupil => {
                    pupil.style.transform = `translate(calc(-50% + ${moveAmount}px), -50%)`;
                });
            });

            // Regresar ojos al centro
            emailInput.addEventListener('blur', function() {
                pupils.forEach(pupil => {
                    pupil.style.transform = 'translate(-50%, -50%)';
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
            
            // Ajustar el tamaño del canvas
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            // Redimensionar canvas
            window.addEventListener('resize', function(){
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                init(); // Reiniciar partículas para el nuevo tamaño
            });

            // Clase Partícula
            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 2 + 0.5; 
                    this.speedX = (Math.random() * 0.8) - 0.4; // Movimiento más lento
                    this.speedY = (Math.random() * 0.8) - 0.4;
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    
                    // Rebote en bordes
                    if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                    if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
                }
                draw() {
                    ctx.fillStyle = 'rgba(140, 155, 181, 0.7)'; // Azul grisáceo sutil
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            // Iniciar partículas
            function init() {
                particlesArray = [];
                let numberOfParticles = (canvas.height * canvas.width) / 15000; // Menor densidad
                if (numberOfParticles > 80) numberOfParticles = 80; // Límite para rendimiento

                for (let i = 0; i < numberOfParticles; i++) {
                    particlesArray.push(new Particle());
                }
            }

            // Animar y conectar
            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                for (let i = 0; i < particlesArray.length; i++) {
                    particlesArray[i].update();
                    particlesArray[i].draw();

                    // Conexiones
                    for (let j = i; j < particlesArray.length; j++) {
                        const dx = particlesArray[i].x - particlesArray[j].x;
                        const dy = particlesArray[i].y - particlesArray[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 110) { // Distancia de conexión menor
                            ctx.beginPath();
                            const opacity = 1 - (distance/110);
                            ctx.strokeStyle = `rgba(92, 114, 153, ${opacity * 0.35})`; // Línea más tenue
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