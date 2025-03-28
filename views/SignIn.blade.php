
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#FF7E87] min-h-screen flex items-center justify-center p-4">
    <div
      class="bg-gradient-to-b from-[#DE5252] to-[#000000] rounded-2xl shadow-xl p-8 w-full max-w-md text-white"
    >
      <!-- Title -->
      <h1 class="text-2xl font-bold text-[#38DFCC] mb-6 text-center">
        Sign In
      </h1>

      <!-- Main Sign In Form -->
      <div id="signInForm">
        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Enter your email address</label
          >
          <input
            type="email"
            placeholder="GetKoen@gmail.com"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Username or Email</label
          >
          <input
            type="text"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Enter verification code</label
          >
          <input
            type="text"
            placeholder="Enter code"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Password</label
          >
          <input
            type="password"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
          />
        </div>

        <div class="mb-6 text-right">
          <button
            id="forgotPasswordBtn"
            class="text-sm text-white hover:text-[#38DFCC] hover:underline focus:outline-none rounded-full px-3 py-1"
          >
            Forgot password?
          </button>
        </div>

        <a href="{{ url('/') }}">        
            <button
          class="w-full bg-[#38DFCC] text-white py-3 px-4 rounded-xl hover:bg-[#2fc5b4] focus:outline-none focus:ring-2 focus:ring-[#38DFCC] focus:ring-offset-2 mb-5 font-medium transition-colors"
        >
          Sign In
        </button></a>

        <div class="text-center">
          <button class="text-white font-medium"></button>
        </div>
      </div>

      <!-- Forgot Password Form (hidden by default) -->
      <div id="forgotPasswordForm" class="hidden">
        <h2 class="text-xl font-semibold text-[#38DFCC] mb-5 text-center">
          Reset Password
        </h2>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Enter your email address</label
          >
          <input
            type="email"
            placeholder="GetKoen@gmail.com"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
          />
        </div>

        <button
          type="submit"
          class="w-full bg-[#38DFCC] text-white py-3 px-4 rounded-xl hover:bg-[#2fc5b4] focus:outline-none focus:ring-2 focus:ring-[#38DFCC] focus:ring-offset-2 mb-5 font-medium transition-colors"
        >
          Send Reset Link
        </button>

        <div class="text-center">
          <button id="backToSignInBtn" class="text-white font-medium hover:text-[#38DFCC] rounded-full px-3 py-1">
            Back to Sign In
          </button>
        </div>
      </div>
      <div id="createacc" class="text-center">
        <p>Don't have an account? <a href="{{ url('/SignUp') }}" class="text-[#11ffff]">Sign up</a>.</p>
      </div>
    </div>

    <script>
      // Forgot password functionality
      const forgotPasswordBtn = document.getElementById("forgotPasswordBtn");
      const backToSignInBtn = document.getElementById("backToSignInBtn");
      const signInForm = document.getElementById("signInForm");
      const forgotPasswordForm = document.getElementById("forgotPasswordForm");

      forgotPasswordBtn.addEventListener("click", () => {
        signInForm.classList.add("hidden");
        forgotPasswordForm.classList.remove("hidden");
      });

      backToSignInBtn.addEventListener("click", () => {
        forgotPasswordForm.classList.add("hidden");
        signInForm.classList.remove("hidden");
      });

      // Form submission
      //create new account / sign up with email
      document
        .querySelector('#signInForm button[type="submit"]')
        .addEventListener("click", function (e) {
          e.preventDefault();
          console.log("Sign In form submitted");
          alert("Sign In form submitted");
        });

      document
        .querySelector('#forgotPasswordForm button[type="submit"]')
        .addEventListener("click", function (e) {
          e.preventDefault();
          console.log("Password reset requested");
          alert("Password reset link would be sent to your email");
        });
    </script>
  </body>
</html>

