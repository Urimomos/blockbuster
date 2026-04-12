<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <style>
        /* ================================================== */
        /* --- DISEÑO LOGIN: ROBOT + CONSTELACIONES     --- */
        /* ================================================== */
        
        .login-wrapper {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #020611; /* Azul espacial casi negro */
            overflow: hidden;
            padding: 40px 20px;
        }

        /* Cuadrícula sutil de fondo */
        .grid-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 1;
            pointer-events: none;
        }

        /* Canvas donde se dibuja la animación */
        #particleCanvas {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        /* Contenedor para alinear robot y tarjeta */
        .combined-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 420px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* --- EL ROBOT ANIMADO --- */
        .mascot-wrapper {
            text-align: center;
            margin-bottom: -15px; /* Para que quede encima de la tarjeta */
            position: relative;
            z-index: 15;
        }

        .robot {
            display: inline-block;
            position: relative;
            animation: floatRobot 3s ease-in-out infinite alternate; 
        }

        @keyframes floatRobot {
            0% { transform: translateY(0px); }
            100% { transform: translateY(-8px); }
        }

        /* Antena */
        .robot-antenna {
            width: 6px;
            height: 20px;
            background: #b3b3b3;
            margin: 0 auto;
            position: relative;
        }
        .robot-led {
            width: 10px;
            height: 10px;
            background: #ff3333;
            border-radius: 50%;
            position: absolute;
            top: -8px;
            left: -2px;
            box-shadow: 0 0 8px #ff3333;
            animation: blinkLed 1s infinite alternate;
        }

        @keyframes blinkLed {
            0% { opacity: 0.5; box-shadow: 0 0 4px #ff3333; }
            100% { opacity: 1; box-shadow: 0 0 12px #ff3333; }
        }

        /* Cabeza */
        .robot-head {
            width: 110px;
            height: 75px;
            background: #001A5E;
            border: 3px solid #FFCC00;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.5);
            position: relative;
            z-index: 2;
        }

        /* Ojos */
        .robot-eye {
            width: 24px;
            height: 24px;
            background: white;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
        }

        /* Pupilas */
        .robot-pupil {
            width: 10px;
            height: 10px;
            background: #000;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: 0.1s ease-out; 
        }

        /* Manos amarillas */
        .robot-hand {
            width: 30px;
            height: 30px;
            background: #FFCC00;
            border-radius: 50%;
            position: absolute;
            bottom: -12px;
            z-index: 3;
            box-shadow: inset -2px -2px 0 rgba(0,0,0,0.2);
            transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55); 
        }
        .hand-left { left: 8px; }
        .hand-right { right: 8px; }

        /* ESTADO: CONTRASEÑA */
        .robot.hide-eyes .hand-left {
            transform: translateY(-55px) translateX(18px);
        }
        .robot.hide-eyes .hand-right {
            transform: translateY(-55px) translateX(-18px);
        }
        .robot.hide-eyes .robot-eye {
            height: 6px; 
            margin-top: 8px;
        }
        /* -------------------------- */

        /* Tarjeta de Login (Estilo Cristal Oscuro) */
        .tech-login-card {
            position: relative;
            background: rgba(8, 14, 30, 0.85); /* Fondo oscuro transparente */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 40px 35px;
            width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-top: 3px solid #FFCC00;
            box-shadow: 0 20px 40px rgba(0,0,0,0.8), 0 0 25px rgba(0, 26, 94, 0.3);
        }

        .tech-login-card h3 {
            color: #ffffff;
            font-family: 'Oswald', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        /* Inputs Modernos */
        .tech-input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .tech-input-group i.left-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #5c7299;
            font-size: 1.1rem;
            transition: 0.3s;
            z-index: 2;
        }

        .tech-input-group input {
            width: 100%;
            background: rgba(0, 5, 15, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 16px 45px 16px 48px;
            border-radius: 6px;
            font-family: 'Mulish', sans-serif;
            font-size: 1rem;
            transition: 0.3s;
        }

        .tech-input-group input::placeholder {
            color: #4a5c7c;
        }

        .tech-input-group input:focus {
            outline: none;
            border-color: #FFCC00;
            background: rgba(0, 10, 25, 0.8);
            box-shadow: 0 0 15px rgba(255, 204, 0, 0.15);
        }

        .tech-input-group input:focus + i.left-icon {
            color: #FFCC00;
        }

        /* Botón del Ojo */
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #5c7299;
            cursor: pointer;
            font-size: 1.1rem;
            transition: 0.3s;
            z-index: 2;
        }

        .toggle-password:hover, .toggle-password:focus {
            color: #FFCC00;
            outline: none;
        }

        /* Botón de Submit */
        .btn-tech-submit {
            width: 100%;
            background: linear-gradient(90deg, #FFCC00 0%, #e6b800 100%);
            color: #001A5E;
            border: none;
            padding: 15px;
            font-family: 'Oswald', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-tech-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 204, 0, 0.3);
            background: #ffffff;
        }

        /* Enlaces inferiores */
        .tech-footer {
            margin-top: 30px;
            text-align: center;
            font-family: 'Mulish', sans-serif;
            font-size: 0.95rem;
            color: #8c9bb5;
        }

        .tech-footer a {
            color: #FFCC00;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
        }

        .tech-footer a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        /* Caja de Error */
        .error-alert {
            background: rgba(220, 53, 69, 0.1);
            border-left: 3px solid #dc3545;
            color: #ff6b6b;
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            font-family: 'Mulish', sans-serif;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        .error-alert i { margin-right: 10px; font-size: 1.1rem; }

    </style>

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