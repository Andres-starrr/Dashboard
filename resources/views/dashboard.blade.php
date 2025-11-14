<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    <!-- ===== HEADER ===== -->
    <header class="dashboard-header">
        <div class="header-left">
            <h1>Bienvenido, Osvaldo 👋!</h1>
            <p class="header-date">Hoy es: {{ now()->format('d \d\e F \d\e Y') }}</p>
        </div>

        <div class="header-right">
            <div class="avatar">A</div>
            <button id="themeToggle" class="darkmode-btn">🌙</button>
        </div>
    </header>

    <div class="dashboard-body">

        <!-- ===== ESTADÍSTICAS ===== -->
        <div class="stats-container">
            <div class="stat-card">
                <h3>{{ \App\Models\Product::count() }}</h3>
                <p>Productos</p>
            </div>

            <div class="stat-card">
                <h3>{{ \App\Models\Student::count() }}</h3>
                <p>Estudiantes</p>
            </div>

            <div class="stat-card">
                <h3>{{ \App\Models\Employee::count() }}</h3>
                <p>Empleados</p>
            </div>
        </div>

        <div class="main-layout">

            <!-- ===== TARJETAS PRINCIPALES ===== -->
            <div class="dashboard-grid">

                <div class="dashboard-card">
                    <div class="dashboard-icon">📦</div>
                    <h3>Products</h3>
                    <p>Gestiona la información de los productos.</p>
                    <a href="{{ route('products.index') }}" class="dashboard-btn">Entrar</a>
                </div>

                <div class="dashboard-card">
                    <div class="dashboard-icon">🎓</div>
                    <h3>Students</h3>
                    <p>Controla los registros de estudiantes.</p>
                    <a href="{{ route('students.index') }}" class="dashboard-btn">Entrar</a>
                </div>

                <div class="dashboard-card">
                    <div class="dashboard-icon">👨‍💼</div>
                    <h3>Employees</h3>
                    <p>Administra los empleados del sistema.</p>
                    <a href="{{ route('employees.index') }}" class="dashboard-btn">Entrar</a>
                </div>

            </div>

            <!-- ===== NOTAS / PANEL LATERAL ===== -->
            <aside class="dashboard-sidebar">
                <h4>📌 Notas importantes</h4>
                <ul>
                    <li>La información se actualiza en tiempo real.</li>
                    <li>Revisa los módulos cada semana.</li>
                    <li>PUEDO CAMBIAR INFORMACION CUANDO QUIERA.</li>
                    <li>Los cambios se guardan automáticamente.</li>
                </ul>
            </aside>

        </div>

    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="dashboard-footer">
        © {{ date('Y') }} Sistema CRUD — Todos los derechos reservados.
    </footer>

    <!-- Dark Mode Script -->
    <script>
        const toggle = document.getElementById('themeToggle');
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('dark');
            toggle.textContent = document.body.classList.contains('dark') ? "☀️" : "🌙";
        });
    </script>

</body>
</html>
