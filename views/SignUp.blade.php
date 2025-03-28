<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#FF7E87] min-h-screen flex items-center justify-center p-4">
    <div
      class="bg-gradient-to-b from-[#DE5252] to-[#000000] rounded-2xl shadow-xl p-8 w-full max-w-md text-white"
    >
      <h1 class="text-2xl font-bold text-[#38DFCC] mb-6 text-center">
        Create Account
      </h1>

      <form id="signUpForm">
        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Full Name</label
          >
          <input
            type="text"
            placeholder="John Doe"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
            required
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Email Address</label
          >
          <input
            type="email"
            placeholder="example@email.com"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
            required
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Username</label
          >
          <input
            type="text"
            placeholder="john_doe123"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
            required
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Password</label
          >
          <input
            type="password"
            placeholder="At least 8 characters"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
            required
            minlength="8"
          />
        </div>

        <div class="mb-5">
          <label class="block text-sm font-medium text-white mb-2"
            >Confirm Password</label
          >
          <input
            type="password"
            placeholder="Confirm your password"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#38DFCC] text-gray-800 bg-white/90"
            required
          />
        </div>

        <div class="mb-6 flex items-center">
          <input
            type="checkbox"
            id="terms"
            class="mr-2 rounded focus:ring-[#38DFCC]"
            required
          />
          <label for="terms" class="text-sm text-white">
            I agree to the <a href="#" class="text-[#38DFCC] hover:underline">Terms</a> and <a href="#" class="text-[#38DFCC] hover:underline">Privacy Policy</a>
          </label>
        </div>

        <button
        href="{{ url('/SignIn') }}"
          type="submit"
          class="w-full bg-[#38DFCC] text-white py-3 px-4 rounded-xl hover:bg-[#2fc5b4] focus:outline-none focus:ring-2 focus:ring-[#38DFCC] focus:ring-offset-2 mb-5 font-medium transition-colors"
        >
          Create Account
        </button>

        <div class="text-center">
          <p class="text-white">
            Already have an account? 
            <a href="{{ url('/SignIn') }}" class="text-[#38DFCC] hover:underline font-medium">
              Sign In
            </a>
          </p>
        </div>
      </form>
    </div>

    <script>
      // Form submission
      document
        .getElementById("signUpForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          
          // Get form values
          const password = this.querySelector('input[type="password"]').value;
          const confirmPassword = this.querySelectorAll('input[type="password"]')[1].value;
          
          // Validate password match
          if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return;
          }
          
          console.log("Sign Up form submitted");
          alert("Account created successfully!");
          
          // In a real app, you would submit the form to a server here
          // this.submit();
        });
    </script>
  </body>
</html>