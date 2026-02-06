<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Mascotas - Evaluación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Listado de Pacientes (Mascotas)</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Apodo</th>
                            <th>Edad (Años)</th>
                            <th>Peso (Kg)</th>
                            <th>Última Cita</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->apodo }}</td>
                                <td>{{ $paciente->edad }}</td>
                                <td>{{ $paciente->peso }}</td>
                                <td>{{ $paciente->ultima_cita }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger fw-bold">
                                    No se encontraron registros en el sistema.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>