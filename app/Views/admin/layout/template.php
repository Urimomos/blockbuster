<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrable | Blockbuster</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>">
    <style>
        body { font-family: 'Mulish', sans-serif; background-color: #f4f6f9; overflow-x: hidden;}
        
        /* Tema Blockbuster para el Sidebar */
        .sidebar { 
            min-height: 100vh; 
            background-color: #001a57; /* Azul Blockbuster */
            color: white;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        } 
        
        .sidebar .brand-header {
            background-color: #00123d; /* Azul más oscuro para el encabezado */
            border-bottom: 2px solid #ffcc00; /* Línea amarilla Blockbuster */
        }

        .sidebar .brand-header h4 {
            color: #ffcc00; /* Texto amarillo */
            font-weight: 800;
            letter-spacing: 1px;
        }

        .sidebar a { 
            color: #e0e0e0; 
            text-decoration: none; 
            display: block; 
            padding: 12px 20px; 
            font-weight: 600; 
            transition: 0.3s;
        }
        
        .sidebar a:hover { 
            background-color: rgba(255, 204, 0, 0.1); /* Fondo sutil al pasar el mouse */
            color: #ffcc00; /* Texto amarillo al pasar el mouse */
        }
        
        .sidebar .active { 
            background-color: rgba(255, 204, 0, 0.2); 
            border-left: 4px solid #ffcc00; /* Borde amarillo activo */
            color: #ffcc00;
        }

        .sidebar .menu-section-title {
            color: #ffcc00;
            font-size: 0.75rem;
            letter-spacing: 1px;
            opacity: 0.8;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .content-area { width: 100%; }
        
        /* Tema Blockbuster para la Navbar superior */
        .top-navbar { 
            background-color: white; 
            box-shadow: 0 2px 4px rgba(0,0,0,.08); 
            padding: 15px 20px;
            border-bottom: 3px solid #ffcc00; /* Detalle amarillo */
        }

        .top-navbar h5 {
            color: #001a57;
            font-weight: 700;
        }

        .badge-role {
            background-color: #ffcc00;
            color: #001a57;
            font-weight: bold;
        }

        /* Botón de cierre de sesión especial */
        .logout-btn {
            background-color: rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        .logout-btn:hover {
            background-color: #dc3545 !important; /* Rojo peligro al pasar el mouse */
            color: white !important;
        }
        /* Efecto Hover para las Tarjetas del Dashboard */
        .card-hover {
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }
        .card-hover:hover {
            transform: translateY(-8px); /* Levanta la tarjeta */
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15) !important; /* Sombra más grande */
        }

    </style>
</head>
<body>
    <div class="d-flex">
        
        <div class="sidebar" style="width: 250px; flex-shrink: 0;">
            <div class="p-4 text-center brand-header">
                <h4 class="mb-0">BLOCKBUSTER</h4>
                <small class="text-white">Panel Administrable</small>
            </div>
            
            <ul class="list-unstyled mt-3">
                <li><a href="<?= base_url('admin/dashboard') ?>" class="<?= url_is('admin/dashboard*') ? 'active' : '' ?>"><i class="fa fa-dashboard mr-2"></i> Dashboard</a></li>
                
                <?php if(session()->get('id_rol') == 745): ?>
                    <li class="px-3 mt-4 text-uppercase menu-section-title">Módulos Admon</li>
                    <li><a href="<?= base_url('admin/usuarios') ?>" class="<?= url_is('admin/usuarios*') ? 'active' : '' ?>"><i class="fa fa-users mr-2"></i> Usuarios</a></li>
                    <li><a href="<?= base_url('admin/generos') ?>" class="<?= url_is('admin/generos*') ? 'active' : '' ?>"><i class="fa fa-tags mr-2"></i> Tipos de Géneros</a></li>
                    <li><a href="<?= base_url('admin/planes') ?>" class="<?= url_is('admin/planes*') ? 'active' : '' ?>"><i class="fa fa-credit-card mr-2"></i> Planes</a></li>
                    <li><a href="<?= base_url('admin/streaming') ?>" class="<?= url_is('admin/streaming*') ? 'active' : '' ?>"><i class="fa fa-film mr-2"></i> Streaming</a></li>
                    <li><a href="<?= base_url('admin/videos') ?>" class="<?= url_is('admin/videos*') ? 'active' : '' ?>"><i class="fa fa-play-circle mr-2"></i> Videos</a></li>
                <?php endif; ?>

                <?php if(session()->get('id_rol') == 125): ?>
                    <li class="px-3 mt-4 text-uppercase menu-section-title">Módulos Operador</li>
                    <li><a href="<?= base_url('admin/clientes') ?>" class="<?= url_is('admin/clientes*') ? 'active' : '' ?>"><i class="fa fa-user mr-2"></i> Clientes</a></li>
                    <li><a href="<?= base_url('admin/pagos') ?>" class="<?= url_is('admin/pagos*') ? 'active' : '' ?>"><i class="fa fa-money mr-2"></i> Validar Pagos</a></li>
                <?php endif; ?>

                <li class="mt-5"><a href="<?= base_url('logout') ?>" class="logout-btn"><i class="fa fa-sign-out mr-2"></i> Cerrar Sesión</a></li>
            </ul>
        </div>

        <div class="content-area">
            <div class="top-navbar d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Bienvenido, <?= session()->get('nombre') ?></h5>
                <span class="badge badge-role p-2" style="font-size: 14px;"><?= session()->get('rol_nombre') ?></span>
            </div>

            <div class="p-4">
                <?= $this->renderSection('content') ?>
            </div>
        </div>

        </div>
        </div>

    </div>

</body>
</html>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
</body>
</html>