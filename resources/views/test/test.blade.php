<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Plantilla Sencilla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-8">
    <div class="w-full max-w-3xl px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Usuarios</h1>
        <ul class="space-y-3">
            @foreach ($users as $user)
                <li class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 flex items-center justify-between">
                    <div>
                        <strong class="text-lg font-semibold text-gray-900">{{ $user->name }}</strong>
                        <span class="text-gray-600 block text-sm">{{ $user->email }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="mt-6 flex justify-center">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Custom Pagination Styles -->
    <style>
        .pagination {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .pagination a,
        .pagination span {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .pagination a {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            color: #374151;
        }

        .pagination a:hover {
            background-color: #f3f4f6;
            border-color: #d1d5db;
        }

        .pagination .current {
            background-color: #3b82f6;
            color: #ffffff;
            border: 1px solid #3b82f6;
        }

        .pagination .disabled {
            color: #9ca3af;
            border: 1px solid #e5e7eb;
            cursor: not-allowed;
        }
    </style>
</body>
</html>