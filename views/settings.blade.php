<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bus Ticketing System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            -webkit-tap-highlight-color: transparent;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            touch-action: manipulation;
        }
        .ticket-display {
            transform: translateY(-100%);
            transition: transform 0.4s ease-out;
            height: 100vh;
            width: 100vw;
        }
        .ticket-display.show {
            transform: translateY(0);
        }
        .overlay {
            transition: opacity 0.3s ease;
        }
        
        @media print {
            @page {
                size: 3.5in 5in;
                margin: 0;
            }
            body {
                visibility: hidden;
                margin: 0;
                padding: 0;
            }
            #printable-ticket {
                visibility: visible;
                position: absolute;
                top: 0;
                left: 0;
                width: 3.5in;
                height: 5in;
                padding: 0.1in;
                font-family: Arial, sans-serif;
                font-size: 10pt;
                background: white !important;
                color: black !important;
            }
            #printable-ticket h3 {
                font-size: 12pt;
                font-weight: bold;
                text-align: center;
                margin-bottom: 8pt;
            }
            #printable-ticket p {
                margin: 4pt 0;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-r from-[#ff6161] to-[#00c5c5] flex justify-center items-center p-4 overflow-hidden">
<div class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg bg-gradient-to-b from-[#38DFCC] to-[#77898F]">
    <div class="flex flex-col justify-between h-full">
        <div class="flex-1 text-center mb-6" id="header">
            <h2 class="text-gray-800 text-2xl font-semibold">Settings</h2>
        </div>

        <div class="flex-1" id="body">

            <div id="personaldetails" class="bg-[#d9d9d9] p-2 m-5 flex justify-between items-center">
                <h1>Personal Details</h1>
                <div>
                    <a href="{{ url('/settings-PersonalDetails') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div id="securityandpermission" class="bg-[#d9d9d9] text-center p-2 m-5 flex justify-between items-center">
                <h1>Security and Permission</h1>
                <div>
                    <a href="{{ url('/settings-SecurityAndPermission') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div id="displayandaccessibility" class="bg-[#d9d9d9] text-center p-2 m-5 flex justify-between items-center">
                <h1>Display and Accessibility</h1>
                <div>
                    <a href="{{ url('/settings-DisplayAndAccessibility') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>

            </div>

            <div id="switchaccount" class="bg-[#d9d9d9] text-center p-2 m-5 flex justify-between items-center">
                <h1>Switch Account</h1>
                <div>
                    <a href="{{ url('/settings-SwitchAccount') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div id="logout" class="bg-[#d9d9d9] text-center p-2 m-5 flex justify-between items-center">
                <h1>Log Out</h1>
                <div>
                    <a href="{{ url('/SignIn') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div id="termsandpolicies" class="bg-[#d9d9d9] text-center p-2 m-5 flex justify-between items-center">
                <h1>Terms and Policies</h1>
                <div>
                    <a href="{{ url('/settings-TermsAndPolicies') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div id="footer" class="text-center mt-6">
            <a href="{{ url('/') }}" class="bg-[#8B0000] text-white py-2 px-4 rounded hover:bg-[#700000] transition duration-300">Back</a>
        </div>
    </div>
</div>

</body>
</html>