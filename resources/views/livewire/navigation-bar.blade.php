<div class="bg-gray-800 text-white p-6">
    <h1 class="text-xl font-bold mb-4">Dashboard</h1>
    @if(auth()->check())
        @switch(auth()->user()->role_id)
            @case(1)
                <!-- Admin -->
                <div>
                    <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard Admin</a>
                    <a href="{{ route('admin.users.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Usuarios</a>
                </div>
                @break

            @case(2)
                <!-- Docente -->
                <div>
                    <a href="{{ route('teacher.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard Docente</a>
                    <a href="{{ route('teacher.courses.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Cursos</a>
                </div>
                @break

            @default
                <!-- Estudiante -->
                <div>
                    <a href="{{ route('student.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard Estudiante</a>
                    <a href="{{ route('student.courses.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Cursos</a>
                </div>
                @endswitch
        @endif
    </div>

