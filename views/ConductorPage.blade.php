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
    <div class="w-full max-w-md relative">

        <div class="bg-white rounded-xl shadow-md p-4 mb-4 transition-all duration-300" style="background: linear-gradient( #38DFCC, #77898F);">
        <div class="flex justify-between items-center w-full">
            <div class="flex-1 text-center">
                <h2 class="text-gray-800 text-xl font-semibold mb-4">Bus Ticketing System</h2>
            </div>
            <a href="{{ url('/settings') }}"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg></a>
        </div>

            <form id="ticketForm">
                <label for="from" class="block font-bold text-gray-800 text-sm mb-1 mt-2">From:</label>
                <select id="from" name="from" required class="w-full p-2 mb-3 rounded-lg border border-gray-300 text-gray-700 appearance-none bg-white bg-[url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e')] bg-no-repeat bg-[right_0.5rem_center] bg-[length:1em]">
                    <option value="">-- Select Origin --</option>
                    <option value="AGORA">AGORA</option>
                    <option value="LAPASAN">LAPASAN</option>
                    <option value="GUSA">GUSA</option>
                    <option value="CUGMAN">CUGMAN</option>
                    <option value="TABLON">TABLON</option>
                    <option value="AGUSAN">AGUSAN</option>
                    <option value="BUGO">BUGO</option>
                    <option value="PUERTO">PUERTO</option>
                    <option value="TAGOLOAN">TAGOLOAN</option>
                    <option value="VILLANUEVA">VILLANUEVA</option>
                    <option value="JASAAN">JASAAN</option>
                    <option value="BALINGASAG">BALINGASAG</option>
                    <option value="LAGONGLONG">LAGONGLONG</option>
                    <option value="SALAY">SALAY</option>
                    <option value="BINUANGAN">BINUANGAN</option>
                    <option value="SUGBONGCOGON">SUGBONGCOGON</option>
                    <option value="KINOGUITAN">KINOGUITAN</option>
                    <option value="ESPERANZA">ESPERANZA</option>
                    <option value="BALINGOAN">BALINGOAN</option>
                    <option value="TALISAYAN">TALISAYAN</option>
                    <option value="MEDINA">MEDINA</option>
                    <option value="GINGOOG">GINGOOG</option>
                </select>

                <label for="to" class="block font-bold text-gray-800 text-sm mb-1">To:</label>
                <select id="to" name="to" required class="w-full p-2 mb-3 rounded-lg border border-gray-300 text-gray-700 appearance-none bg-white bg-[url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e')] bg-no-repeat bg-[right_0.5rem_center] bg-[length:1em]">
                    <option value="">-- Select Destination --</option>
                    <option value="AGORA">AGORA</option>
                    <option value="LAPASAN">LAPASAN</option>
                    <option value="GUSA">GUSA</option>
                    <option value="CUGMAN">CUGMAN</option>
                    <option value="TABLON">TABLON</option>
                    <option value="AGUSAN">AGUSAN</option>
                    <option value="BUGO">BUGO</option>
                    <option value="PUERTO">PUERTO</option>
                    <option value="TAGOLOAN">TAGOLOAN</option>
                    <option value="VILLANUEVA">VILLANUEVA</option>
                    <option value="JASAAN">JASAAN</option>
                    <option value="BALINGASAG">BALINGASAG</option>
                    <option value="LAGONGLONG">LAGONGLONG</option>
                    <option value="SALAY">SALAY</option>
                    <option value="BINUANGAN">BINUANGAN</option>
                    <option value="SUGBONGCOGON">SUGBONGCOGON</option>
                    <option value="KINOGUITAN">KINOGUITAN</option>
                    <option value="ESPERANZA">ESPERANZA</option>
                    <option value="BALINGOAN">BALINGOAN</option>
                    <option value="TALISAYAN">TALISAYAN</option>
                    <option value="MEDINA">MEDINA</option>
                    <option value="GINGOOG">GINGOOG</option>
                </select>

                <label for="discount" class="block font-bold text-gray-800 text-sm mb-1">Discount:</label>
                <select id="discount" name="discount" class="w-full p-2 mb-3 rounded-lg border border-gray-300 text-gray-700 appearance-none bg-white bg-[url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e')] bg-no-repeat bg-[right_0.5rem_center] bg-[length:1em]">
                    <option value="none">No Discount</option>
                    <option value="student">Student Privilege (20% off)</option>
                    <option value="senior">Senior Citizen (20% off)</option>
                </select>

                <label for="conductor" class="block font-bold text-gray-800 text-sm mb-1">Ticketed by:</label>
                <input type="text" id="conductor" placeholder="Enter your name" required class="w-full p-2 mb-3 rounded-lg border border-gray-300 text-gray-700">

                <button type="submit" class="w-full py-3 bg-[#8B0000] text-white rounded-lg font-semibold mt-2 hover:bg-[#700000] active:scale-95 transition-all duration-200">Pay & Show Ticket</button>
            </form>
        </div>

        <!-- Overlay -->
        <div id="overlay" class="overlay fixed inset-0 bg-black bg-opacity-70 z-50 opacity-0 pointer-events-none"></div>
        
        <!-- Ticket Display -->
        <div id="ticketDisplay" class="ticket-display fixed top-0 left-0 bg-white p-5 z-[100] overflow-y-auto shadow-lg">
            <div class="flex flex-col h-full">
                <div id="printable-ticket">
                    <h3 class="text-center text-[#8B0000] text-xl font-semibold mb-3 pb-2 border-b-2 border-[#8B0000]">BUS TICKET RECEIPT</h3>
                    <div class="flex-grow">
                        <p id="routeInfo" class="my-1 py-1 border-b border-dashed border-gray-300"></p>
                        <p id="busNumberInfo" class="my-1 py-1 border-b border-dashed border-gray-300">Bus No: 5678</p>
                        <p id="ticketPriceInfo" class="my-1 py-1 border-b border-dashed border-gray-300"></p>
                        <p id="discountInfo" class="my-1 py-1 border-b border-dashed border-gray-300"></p>
                        <p id="finalPriceInfo" class="my-1 py-1 border-b border-dashed border-gray-300 font-bold"></p>
                        <p id="ticketedByInfo" class="my-1 py-1 border-b border-dashed border-gray-300"></p>
                        <p id="dateInfo" class="my-1 py-1 border-b border-dashed border-gray-300"></p>
                    </div>
                </div>
                <div class="action-buttons flex gap-3 mt-4 justify-center flex-wrap pb-4 no-print">
                    <button id="newTicketButton" class="new-ticket-button flex-1 min-w-[120px] py-2 bg-gray-800 text-white rounded-lg font-bold hover:bg-gray-700 active:scale-95 transition-all duration-200 text-sm">New Ticket</button>
                    <button id="printTicketButton" class="print-ticket-button flex-1 min-w-[120px] py-2 bg-[#8B0000] text-white rounded-lg font-bold hover:bg-[#700000] active:scale-95 transition-all duration-200 text-sm">Print Ticket</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const fareMap = {
            "AGORA": {
                "LAPASAN": 15, "GUSA": 25, "CUGMAN": 35, "TABLON": 45, "AGUSAN": 55, "BUGO": 65, "PUERTO": 75, "TAGOLOAN": 85,
                "VILLANUEVA": 95, "JASAAN": 105, "BALINGASAG": 115, "LAGONGLONG": 125, "SALAY": 135, "BINUANGAN": 145, "SUGBONGCOGON": 155,
                "KINOGUITAN": 165, "ESPERANZA": 175, "BALINGOAN": 185, "TALISAYAN": 195, "MEDINA": 205, "GINGOOG": 215
            },
            "LAPASAN": {
                "AGORA": 15, "GUSA": 15, "CUGMAN": 25, "TABLON": 35, "AGUSAN": 45, "BUGO": 55, "PUERTO": 65, "TAGOLOAN": 75,
                "VILLANUEVA": 85, "JASAAN": 95, "BALINGASAG": 105, "LAGONGLONG": 115, "SALAY": 125, "BINUANGAN": 135, "SUGBONGCOGON": 145,
                "KINOGUITAN": 155, "ESPERANZA": 165, "BALINGOAN": 175, "TALISAYAN": 185, "MEDINA": 195, "GINGOOG": 205
            },
            "GUSA": {
                "AGORA": 25, "LAPASAN": 15, "CUGMAN": 15, "TABLON": 25, "AGUSAN": 35, "BUGO": 45, "PUERTO": 55, "TAGOLOAN": 65,
                "VILLANUEVA": 75, "JASAAN": 85, "BALINGASAG": 95, "LAGONGLONG": 105, "SALAY": 115, "BINUANGAN": 125, "SUGBONGCOGON": 135,
                "KINOGUITAN": 145, "ESPERANZA": 155, "BALINGOAN": 165, "TALISAYAN": 175, "MEDINA": 185, "GINGOOG": 195
            },
            "CUGMAN": {
                "AGORA": 35, "LAPASAN": 25, "GUSA": 15, "TABLON": 15, "AGUSAN": 25, "BUGO": 35, "PUERTO": 45, "TAGOLOAN": 55,
                "VILLANUEVA": 65, "JASAAN": 75, "BALINGASAG": 85, "LAGONGLONG": 95, "SALAY": 105, "BINUANGAN": 115, "SUGBONGCOGON": 125,
                "KINOGUITAN": 135, "ESPERANZA": 145, "BALINGOAN": 155, "TALISAYAN": 165, "MEDINA": 175, "GINGOOG": 185
            },
            "TABLON": {
                "AGORA": 45, "LAPASAN": 35, "GUSA": 25, "CUGMAN": 15, "AGUSAN": 15, "BUGO": 25, "PUERTO": 35, "TAGOLOAN": 45,
                "VILLANUEVA": 55, "JASAAN": 65, "BALINGASAG": 75, "LAGONGLONG": 85, "SALAY": 95, "BINUANGAN": 105, "SUGBONGCOGON": 115,
                "KINOGUITAN": 125, "ESPERANZA": 135, "BALINGOAN": 145, "TALISAYAN": 155, "MEDINA": 165, "GINGOOG": 175
            },
            "JASAAN": {
                "AGORA": 105, "LAPASAN": 95, "GUSA": 85, "CUGMAN": 75, "TABLON": 65, "AGUSAN": 55, "BUGO": 45, "PUERTO": 35,
                "TAGOLOAN": 25, "VILLANUEVA": 15, "BALINGASAG": 15, "LAGONGLONG": 25, "SALAY": 35, "BINUANGAN": 45, "SUGBONGCOGON": 55,
                "KINOGUITAN": 65, "ESPERANZA": 75, "BALINGOAN": 85, "TALISAYAN": 95, "MEDINA": 105, "GINGOOG": 115
            },
            "BALINGASAG": {
                "AGORA": 115, "LAPASAN": 105, "GUSA": 95, "CUGMAN": 85, "TABLON": 75, "AGUSAN": 65, "BUGO": 55, "PUERTO": 45,
                "TAGOLOAN": 35, "VILLANUEVA": 25, "JASAAN": 15, "LAGONGLONG": 15, "SALAY": 25, "BINUANGAN": 35, "SUGBONGCOGON": 45,
                "KINOGUITAN": 55, "ESPERANZA": 65, "BALINGOAN": 75, "TALISAYAN": 85, "MEDINA": 95, "GINGOOG": 105
            },
            "LAGONGLONG": {
                "AGORA": 125, "LAPASAN": 115, "GUSA": 105, "CUGMAN": 95, "TABLON": 85, "AGUSAN": 75, "BUGO": 65, "PUERTO": 55,
                "TAGOLOAN": 45, "VILLANUEVA": 35, "JASAAN": 25, "BALINGASAG": 15, "SALAY": 15, "BINUANGAN": 25, "SUGBONGCOGON": 35,
                "KINOGUITAN": 45, "ESPERANZA": 55, "BALINGOAN": 65, "TALISAYAN": 75, "MEDINA": 85, "GINGOOG": 95
            },
            "SALAY": {
                "AGORA": 135, "LAPASAN": 125, "GUSA": 115, "CUGMAN": 105, "TABLON": 95, "AGUSAN": 85, "BUGO": 75, "PUERTO": 65,
                "TAGOLOAN": 55, "VILLANUEVA": 45, "JASAAN": 35, "BALINGASAG": 25, "LAGONGLONG": 15, "BINUANGAN": 15, "SUGBONGCOGON": 25,
                "KINOGUITAN": 35, "ESPERANZA": 45, "BALINGOAN": 55, "TALISAYAN": 65, "MEDINA": 75, "GINGOOG": 85
            },
            "BINUANGAN": {
                "AGORA": 145, "LAPASAN": 135, "GUSA": 125, "CUGMAN": 115, "TABLON": 105, "AGUSAN": 95, "BUGO": 85, "PUERTO": 75,
                "TAGOLOAN": 65, "VILLANUEVA": 55, "JASAAN": 45, "BALINGASAG": 35, "LAGONGLONG": 25, "SALAY": 15, "SUGBONGCOGON": 15,
                "KINOGUITAN": 25, "ESPERANZA": 35, "BALINGOAN": 45, "TALISAYAN": 55, "MEDINA": 65, "GINGOOG": 75
            },
            "SUGBONGCOGON": {
                "AGORA": 155, "LAPASAN": 145, "GUSA": 135, "CUGMAN": 125, "TABLON": 115, "AGUSAN": 105, "BUGO": 95, "PUERTO": 85,
                "TAGOLOAN": 75, "VILLANUEVA": 65, "JASAAN": 55, "BALINGASAG": 45, "LAGONGLONG": 35, "SALAY": 25, "BINUANGAN": 15,
                "KINOGUITAN": 15, "ESPERANZA": 25, "BALINGOAN": 35, "TALISAYAN": 45, "MEDINA": 55, "GINGOOG": 65
            },
            "KINOGUITAN": {
                "AGORA": 165, "LAPASAN": 155, "GUSA": 145, "CUGMAN": 135, "TABLON": 125, "AGUSAN": 115, "BUGO": 105, "PUERTO": 95,
                "TAGOLOAN": 85, "VILLANUEVA": 75, "JASAAN": 65, "BALINGASAG": 55, "LAGONGLONG": 45, "SALAY": 35, "BINUANGAN": 25,
                "SUGBONGCOGON": 15, "ESPERANZA": 15, "BALINGOAN": 25, "TALISAYAN": 35, "MEDINA": 45, "GINGOOG": 55
            },
            "ESPERANZA": {
                "AGORA": 175, "LAPASAN": 165, "GUSA": 155, "CUGMAN": 145, "TABLON": 135, "AGUSAN": 125, "BUGO": 115, "PUERTO": 105,
                "TAGOLOAN": 95, "VILLANUEVA": 85, "JASAAN": 75, "BALINGASAG": 65, "LAGONGLONG": 55, "SALAY": 45, "BINUANGAN": 35,
                "SUGBONGCOGON": 25, "KINOGUITAN": 15, "BALINGOAN": 15, "TALISAYAN": 25, "MEDINA": 35, "GINGOOG": 45
            },
            "BALINGOAN": {
                "AGORA": 185, "LAPASAN": 175, "GUSA": 165, "CUGMAN": 155, "TABLON": 145, "AGUSAN": 135, "BUGO": 125, "PUERTO": 115,
                "TAGOLOAN": 105, "VILLANUEVA": 95, "JASAAN": 85, "BALINGASAG": 75, "LAGONGLONG": 65, "SALAY": 55, "BINUANGAN": 45,
                "SUGBONGCOGON": 35, "KINOGUITAN": 25, "ESPERANZA": 15, "TALISAYAN": 15, "MEDINA": 25, "GINGOOG": 35
            },
            "TALISAYAN": {
                "AGORA": 195, "LAPASAN": 185, "GUSA": 175, "CUGMAN": 165, "TABLON": 155, "AGUSAN": 145, "BUGO": 135, "PUERTO": 125,
                "TAGOLOAN": 115, "VILLANUEVA": 105, "JASAAN": 95, "BALINGASAG": 85, "LAGONGLONG": 75, "SALAY": 65, "BINUANGAN": 55,
                "SUGBONGCOGON": 45, "KINOGUITAN": 35, "ESPERANZA": 25, "BALINGOAN": 15, "MEDINA": 15, "GINGOOG": 25
            },
            "MEDINA": {
                "AGORA": 205, "LAPASAN": 195, "GUSA": 185, "CUGMAN": 175, "TABLON": 165, "AGUSAN": 155, "BUGO": 145, "PUERTO": 135,
                "TAGOLOAN": 125, "VILLANUEVA": 115, "JASAAN": 105, "BALINGASAG": 95, "LAGONGLONG": 85, "SALAY": 75, "BINUANGAN": 65,
                "SUGBONGCOGON": 55, "KINOGUITAN": 45, "ESPERANZA": 35, "BALINGOAN": 25, "TALISAYAN": 15, "GINGOOG": 15
            },
            "GINGOOG": {
                "AGORA": 215, "LAPASAN": 205, "GUSA": 195, "CUGMAN": 185, "TABLON": 175, "AGUSAN": 165, "BUGO": 155, "PUERTO": 145,
                "TAGOLOAN": 135, "VILLANUEVA": 125, "JASAAN": 115, "BALINGASAG": 105, "LAGONGLONG": 95, "SALAY": 85, "BINUANGAN": 75,
                "SUGBONGCOGON": 65, "KINOGUITAN": 55, "ESPERANZA": 45, "BALINGOAN": 35, "TALISAYAN": 25, "MEDINA": 15
            }
        };

        document.getElementById('ticketForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const from = document.getElementById('from').value;
            const to = document.getElementById('to').value;
            
            if (from === to) {
                alert("Origin and destination cannot be the same!");
                return;
            }

            const discountType = document.getElementById('discount').value;
            const conductor = document.getElementById('conductor').value;

            let price = fareMap[from]?.[to] || 0;
            let discountAmount = 0;
            let discountText = "No Discount Applied";
            
            if (discountType === 'student' || discountType === 'senior') {
                discountAmount = price * 0.2;
                discountText = discountType === 'student' 
                    ? "Student Discount (20%)" 
                    : "Senior Citizen Discount (20%)";
            }
            
            const finalPrice = price - discountAmount;

            // Format current date
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric', 
                hour: '2-digit', 
                minute: '2-digit' 
            };
            const dateString = now.toLocaleDateString('en-US', options);

            // Update ticket display
            document.getElementById('routeInfo').innerText = `Route: ${from} TO ${to}`;
            document.getElementById('ticketPriceInfo').innerText = `Base Fare: ₱${price.toFixed(2)}`;
            document.getElementById('discountInfo').innerText = `Discount: ${discountText} ${discountAmount > 0 ? `(-₱${discountAmount.toFixed(2)})` : ''}`;
            document.getElementById('finalPriceInfo').innerText = `TOTAL: ₱${finalPrice.toFixed(2)}`;
            document.getElementById('ticketedByInfo').innerText = `Conductor: ${conductor}`;
            document.getElementById('dateInfo').innerText = `Date: ${dateString}`;

            // Show ticket with animation
            showTicket();
        });

        document.getElementById('newTicketButton').addEventListener('click', function() {
            hideTicket();
        });

        document.getElementById('printTicketButton').addEventListener('click', function() {
            // First show the ticket if it's not already visible
            if (!document.getElementById('ticketDisplay').classList.contains('show')) {
                showTicket();
            }
            
            // Wait a moment before printing to ensure everything is ready
            setTimeout(() => {
                // Create a print-specific stylesheet
                const printStyle = document.createElement('style');
                printStyle.innerHTML = `
                    @page {
                        size: 3.5in 5in;
                        margin: 0;
                    }
                    body * {
                        visibility: hidden;
                    }
                    #printable-ticket, #printable-ticket * {
                        visibility: visible;
                    }
                    #printable-ticket {
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
                    .no-print {
                        display: none !important;
                    }
                `;
                document.head.appendChild(printStyle);
                
                // Trigger print
                window.print();
                
                // Remove the print styles after printing is done
                setTimeout(() => {
                    document.head.removeChild(printStyle);
                }, 1000);
            }, 100);
        });

        function showTicket() {
            const overlay = document.getElementById('overlay');
            const ticketDisplay = document.getElementById('ticketDisplay');
            
            // Show overlay and ticket
            overlay.classList.add('show');
            overlay.classList.add('pointer-events-auto');
            ticketDisplay.classList.add('show');
            
            // Prevent scrolling when ticket is shown
            document.body.classList.add('overflow-hidden');
        }

        function hideTicket() {
            const overlay = document.getElementById('overlay');
            const ticketDisplay = document.getElementById('ticketDisplay');
            
            // Hide overlay and ticket
            overlay.classList.remove('show');
            overlay.classList.remove('pointer-events-auto');
            ticketDisplay.classList.remove('show');
            
            // After animation completes, reset the form
            setTimeout(() => {
                document.getElementById('ticketForm').reset();
                // Restore scrolling
                document.body.classList.remove('overflow-hidden');
            }, 400);
        }
    </script>
</body>
</html>