<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Security | Bus Ticketing</title>
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
            <h2 class="text-gray-800 text-xl font-semibold">Security & Permission</h2>
        </div>

        <div class="flex-1 bg-white p-4 rounded-lg">
            <div class="space-y-6">
                <div>
                    <h3 class="font-medium mb-3">Change Password</h3>
                    <div class="space-y-3">
                        <input type="password" placeholder="Current Password" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <input type="password" placeholder="New Password" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <input type="password" placeholder="Confirm New Password" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                            Update Password
                        </button>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-200">
                    <h3 class="font-medium mb-3">Login Alerts</h3>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" checked class="mr-2">
                            Email me when someone logs into my account
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            Send SMS alerts for logins from new devices
                        </label>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-200">
                    <h3 class="font-medium mb-3">Account Actions</h3>
                    <button id="delete-account-btn" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition">
                        Delete My Account
                    </button>
                    <div id="delete-confirm" class="hidden mt-3 p-3 bg-red-50 rounded-md">
                        <p class="text-sm mb-2">Are you sure you want to delete your account? This action cannot be undone.</p>
                        <div class="flex space-x-2">
                            <button id="cancel-delete" class="flex-1 bg-gray-200 text-gray-800 py-1 px-3 rounded-md">
                                Cancel
                            </button>
                            <button id="confirm-delete" class="flex-1 bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-700">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Delete account confirmation
        const deleteAccountBtn = document.getElementById('delete-account-btn');
        const deleteConfirm = document.getElementById('delete-confirm');
        const cancelDelete = document.getElementById('cancel-delete');
        const confirmDelete = document.getElementById('confirm-delete');
        
        deleteAccountBtn.addEventListener('click', function() {
            deleteConfirm.classList.remove('hidden');
        });
        
        cancelDelete.addEventListener('click', function() {
            deleteConfirm.classList.add('hidden');
        });
        
        confirmDelete.addEventListener('click', function() {
            alert('Account deletion requested. A confirmation email has been sent to your address.');
            deleteConfirm.classList.add('hidden');
        });
    </script>
</body>
</html>