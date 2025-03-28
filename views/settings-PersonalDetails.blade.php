<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Personal Details | Bus Ticketing</title>
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
            <h2 class="text-gray-800 text-xl font-semibold">Personal Details</h2>
        </div>

        <div class="flex-1 bg-white p-4 rounded-lg">
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" value="John Doe" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" value="john.doe@example.com" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                    <input type="tel" value="+1 234 567 890" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1">Address</label>
                    <input type="text" value="123 Main St, Anytown, USA" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1">Gender</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="prefer-not">Prefer not to say</option>
                    </select>
                </div>
                
                <button type="button" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition mt-6">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
</body>
</html>