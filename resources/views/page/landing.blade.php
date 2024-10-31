<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Premium Laundry Services</title>
    <meta name="description" content="Professional laundry services tailored to your needs">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ asset("assets/bg.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen font-['Roboto']">
    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <section id="landing"class="hero-section relative">
            <div class="container mx-auto px-4 text-center">
                <div class="max-w-3xl mx-auto">
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        The Best Way
                        <span class="block text-4xl md:text-5xl mt-2">To Do Laundry</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 mb-10">
                        We offer a variety of premium laundry services to meet your needs.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('service') }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-3 rounded-lg 
                                  transition duration-300">
                            Our Services
                        </a>
                        <a href="#booking" 
                           class="bg-white hover:bg-gray-100 text-blue-600 font-medium px-8 py-3 rounded-lg 
                                  transition duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional sections can be added here -->
    </main>

    {{-- <!-- Footer Component -->
    <x-footer /> --}}
</body>
</html>
