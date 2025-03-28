<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Display | Bus Ticketing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { -webkit-tap-highlight-color: transparent; }
        body { font-family: 'Open Sans', sans-serif; touch-action: manipulation; }
        .back-button { transition: transform 0.2s; }
        .back-button:active { transform: scale(0.95); }
        .text-size-btn { transition: all 0.2s; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-r from-[#ff6161] to-[#00c5c5] p-4">
    <div class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg bg-gradient-to-b from-[#38DFCC] to-[#77898F] min-h-[90vh] flex flex-col">
        <div class="flex items-center mb-6">
            <a href="{{ url('/settings') }}" class="back-button flex items-center text-white bg-gray-600 px-3 py-1 rounded-lg mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left mr-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Back
            </a>
            <h2 class="text-gray-800 text-xl font-semibold">Display & Accessibility</h2>
        </div>

        <div class="flex-1 bg-white p-4 rounded-lg">
            <div class="space-y-6">
                <div>
                    <h3 class="font-medium mb-3">Theme</h3>
                    <label class="flex items-center">
                        <input type="checkbox" id="dark-mode" class="mr-2">
                        Enable Dark Mode
                    </label>
                </div>

                <div>
                    <h3 class="font-medium mb-3">Text Size</h3>
                    <div class="flex items-center space-x-4">
                        <button class="text-size-btn w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center" data-size="small">
                            A
                        </button>
                        <button class="text-size-btn w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center" data-size="medium">
                            A
                        </button>
                        <button class="text-size-btn w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center" data-size="large">
                            A
                        </button>
                    </div>
                </div>

                <div>
                    <h3 class="font-medium mb-3">Notifications</h3>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" checked class="mr-2">
                            Booking confirmations
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" checked class="mr-2">
                            Promotions and offers
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            Schedule changes
                        </label>
                    </div>
                </div>

                <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition mt-4">
                    Save Preferences
                </button>
            </div>
        </div>
    </div>

    <script>
        // Text size controls
        document.querySelectorAll('.text-size-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.text-size-btn').forEach(item => {
                    item.classList.remove('bg-blue-600', 'text-white');
                    item.classList.add('bg-gray-200');
                });
                this.classList.add('bg-blue-600', 'text-white');
                this.classList.remove('bg-gray-200');
                
                const size = this.getAttribute('data-size');
                document.body.className = document.body.className.replace(/\btext-(small|medium|large)\b/g, '');
                document.body.classList.add(`text-${size}`);

            });
        });

        // Dark mode toggle
        const darkModeToggle = document.getElementById('dark-mode');
        darkModeToggle.addEventListener('change', function() {
            if (this.checked) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    </script>
</body>
</html>