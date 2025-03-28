<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard/Home</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .overlay {
                display: none;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }
            .overlay.open {
                display: block;
                opacity: 0.5;
            }
            @media (min-width: 1024px) {
                .sidebar {
                    transform: translateX(0);
                }
                #menuToggle {
                    display: none;
                }
                main {
                    margin-left: 16rem; /* Same as sidebar width */
                }
                Button {
                    flex-direction: column;
                }
            }
        </style>
    </head>
    <body class="bg-gray-100 min-h-screen">
        <!-- Header -->
        <header
            class="bg-white shadow-sm fixed top-0 left-0 right-0 z-20 lg:left-64 p-4"
        >
            <div class="flex items-cent.2er justify-between px-4 py-3">
                <!-- Left side - Hamburger and Title -->
                <div class="flex items-center p-30">
                    <button
                        id="menuToggle"
                        class="p-2 rounded-md text-gray-700 hover:bg-gray-200 focus:outline-none mr-2 lg:hidden"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                    <div class="flex items-center">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-gray-600"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                            />
                        </svg>
                        <span class="ml-2 text-gray-800 text-xl font-large"
                            >Dashboard/Home</span
                        >
                    </div>
                </div>

                <!-- Right side - Icons -->
                <div class="flex items-center space-x-4">
                    <button
                        class="p-2 rounded-full text-gray-600 hover:bg-gray-200 focus:outline-none"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                            />
                        </svg>
                    </button>
                    <button
                        class="p-2 rounded-full text-gray-600 hover:bg-gray-200 focus:outline-none"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Overlay (only for mobile) -->
        <div
            id="overlay"
            class="overlay fixed inset-0 bg-black z-20 lg:hidden"
        ></div>

        <!-- Sidebar -->
        <div
            id="sidebar"
            class="sidebar fixed top-0 left-0 w-64 h-full bg-white shadow-lg z-30 lg:translate-x-0"
        >
            <div class="p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Admin User</h2>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a
                            href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded font-medium"
                            >Dashboard</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded"
                            >Account</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded"
                            >Agent</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded"
                            >Enquiry</a
                        >
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <main class="pt-16 min-h-screen lg:ml-64">
            <div class="px-6 py-8">
                <!-- Changed grid to single column -->
                <div class="grid grid-cols-1 gap-6 w-full max-w-md mx-auto m-10">
                    <!-- Added max-w-md and mx-auto to center the column -->
                    <!-- Buses Button -->
                    <button
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow flex flex- items-center justify-center h-40 w-full"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-16 w-16 text-blue-600 mb-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                            />
                        </svg>
                        <span class="text-gray-800 font-medium text-xl"
                            >Buses</span
                        >
                    </button>

                    <!-- Terminals Button -->
                    <button
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow flex flex-col items-center justify-center h-40 w-full"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-16 w-16 text-green-600 mb-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>
                        <span class="text-gray-800 font-medium text-xl"
                            >Terminals</span
                        >
                    </button>

                    <!-- Revenues Button -->
                    <button
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow flex flex-col items-center justify-center h-40 w-full"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-16 w-16 text-purple-600 mb-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        <span class="text-gray-800 font-medium text-xl"
                            >Revenues</span
                        >
                    </button>

                    <!-- Employees Button -->
                    <button
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow flex flex-col items-center justify-center h-40 w-full"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-16 w-16 text-orange-600 mb-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                            />
                        </svg>
                        <span class="text-gray-800 font-medium text-xl"
                            >Employees</span
                        >
                    </button>
                </div>
            </div>
        </main>

        <script>
            const menuToggle = document.getElementById("menuToggle");
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("overlay");

            menuToggle.addEventListener("click", () => {
                sidebar.classList.toggle("open");
                overlay.classList.toggle("open");
            });

            overlay.addEventListener("click", () => {
                sidebar.classList.remove("open");
                overlay.classList.remove("open");
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener("click", (event) => {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnMenuToggle = menuToggle.contains(event.target);

                if (
                    !isClickInsideSidebar &&
                    !isClickOnMenuToggle &&
                    window.innerWidth < 1024
                ) {
                    sidebar.classList.remove("open");
                    overlay.classList.remove("open");
                }
            });
        </script>
    </body>
</html>