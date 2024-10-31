<!-- resources/views/page/services.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth; /* Optional for smooth scrolling */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbar />

    <main class="container mx-auto mt-8 p-4">
        <section id="service" class="text-center mb-10">
            <h2 class="text-4xl font-semibold text-gray-800">Our Services</h2>
            <p class="text-gray-700 mt-2">We provide a range of laundry services tailored to your needs.</p>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Wash & Fold" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Wash & Fold</h3>
                <p class="text-gray-600 mt-2">Effortless washing and folding service at an affordable rate.</p>
                <p class="text-blue-500 mt-4 font-semibold">Starting at $10</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Dry Cleaning" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Dry Cleaning</h3>
                <p class="text-gray-600 mt-2">Professional dry cleaning for all types of fabrics.</p>
                <p class="text-blue-500 mt-4 font-semibold">Starting at $15</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Ironing" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Ironing</h3>
                <p class="text-gray-600 mt-2">Wrinkle-free clothes with our expert ironing services.</p>
                <p class="text-blue-500 mt-4 font-semibold">Starting at $5</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Laundry Pickup & Delivery" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Laundry Pickup & Delivery</h3>
                <p class="text-gray-600 mt-2">Convenient pickup and delivery right at your door.</p>
                <p class="text-blue-500 mt-4 font-semibold">Starting at $8</p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Special Care" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Special Care</h3>
                <p class="text-gray-600 mt-2">Delicate fabric care for your most valued items.</p>
                <p class="text-blue-500 mt-4 font-semibold">Starting at $12</p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Stain Removal" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Stain Removal</h3>
                <p class="text-gray-600 mt-2">Professional stain removal service for tough stains.</p>
                <p class="text-blue-500 mt-4 font-semibold">Starting at $7</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>
