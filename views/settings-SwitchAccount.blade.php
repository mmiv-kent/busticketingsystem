<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Switch Account | Bus Ticketing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { -webkit-tap-highlight-color: transparent; }
        body { font-family: 'Open Sans', sans-serif; touch-action: manipulation; }
        .back-button { transition: transform 0.2s; }
        .back-button:active { transform: scale(0.95); }
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
            <h2 class="text-gray-800 text-xl font-semibold">Switch Account</h2>
        </div>

        <div class="flex-1 bg-white p-4 rounded-lg">
            <p class="mb-4">Manage accounts you can switch to when another user is on leave or holiday.</p>
            
            <div class="space-y-3 mb-6">
                <div class="p-3 border border-gray-200 rounded-md flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mr-3">
                            JD
                        </div>
                        <div>
                            <div class="font-medium">John Doe</div>
                            <div class="text-sm text-gray-500">john.doe@example.com</div>
                        </div>
                    </div>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700 transition">
                        Switch
                    </button>
                </div>
                
                <div class="p-3 border border-gray-200 rounded-md flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mr-3">
                            AS
                        </div>
                        <div>
                            <div class="font-medium">Alice Smith</div>
                            <div class="text-sm text-gray-500">alice.smith@example.com</div>
                        </div>
                    </div>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700 transition">
                        Switch
                    </button>
                </div>
            </div>
            
            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                Add New Account
            </button>
        </div>
    </div>
</body>
</html>