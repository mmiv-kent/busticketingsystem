<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Terms | Bus Ticketing</title>
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
            <h2 class="text-gray-800 text-xl font-semibold">Terms & Policies</h2>
        </div>

        <div class="flex-1 bg-white p-4 rounded-lg overflow-y-auto">
            <div class="prose prose-sm max-w-none">
                <h3>Terms of Service</h3>
                <p><small>Last updated: January 1, 2023</small></p>
                <p>Welcome to BusTicketz! These terms and conditions outline the rules and regulations for the use of BusTicketz's Website.</p>
                
                <h4>1. Acceptance of Terms</h4>
                <p>By accessing this website, you are agreeing to be bound by these website Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws.</p>
                
                <h4>2. Use License</h4>
                <p>Permission is granted to temporarily download one copy of the materials (information or software) on BusTicketz's website for personal, non-commercial transitory viewing only.</p>
                
                <h4>3. User Account</h4>
                <p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our service.</p>
                
                <h3>Privacy Policy</h3>
                <p>Your privacy is important to us. It is BusTicketz's policy to respect your privacy regarding any information we may collect from you across our website.</p>
                
                <h4>Information We Collect</h4>
                <p>We collect personal information such as name, contact information, and payment details when you make a booking. We also collect usage data to improve our services.</p>
                
                <h4>How We Use Information</h4>
                <p>We use the information we collect to provide and improve our services, process transactions, and communicate with you.</p>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2">
                    I have read and agree to the Terms of Service and Privacy Policy
                </label>
            </div>
        </div>
    </div>
</body>
</html>