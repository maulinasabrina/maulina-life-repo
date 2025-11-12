<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>milk & terminal — home</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cream: '#F6F1EA',
            espresso: '#3A2F28',
            rose: '#C79C9C',
            wine: '#6B3A4C',
            graphite: '#C9C4BE'
          },
          fontFamily: {
            serif: ['Cormorant Garamond', 'serif'],
            ui: ['Inter', 'system-ui', 'sans-serif']
          }
        }
      }
    }
  </script>

  <style>
    body {
      background-color: #F6F1EA;
      color: #3A2F28;
      font-family: 'Inter', system-ui, sans-serif;
    }

    /* fade-in effect */
    .fade-in {
      opacity: 0;
      transform: translateY(12px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }

    /* gentle underline hover for button */
    .underline-hover {
      position: relative;
    }
    .underline-hover::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0%;
      height: 1px;
      background-color: #6B3A4C;
      transition: width 0.4s ease;
    }
    .underline-hover:hover::after {
      width: 100%;
    }
  </style>
</head>

<body class="min-h-screen flex flex-col justify-center items-center overflow-hidden">
  <!-- HERO -->
  <section id="home" class="hero flex flex-col md:flex-row items-center justify-center px-8 md:px-24 w-full max-w-7xl mx-auto">
    <!-- TEXT -->
    <div class="hero-text md:w-1/2 space-y-6 fade-in">
      <h1 class="font-serif text-5xl md:text-6xl leading-tight">
        I couldn’t help but wonder...
      </h1>
      <p class="italic text-rose text-lg">– Carrie Bradshaw</p>

      <button
        onclick="enterWorld()"
        class="mt-10 px-8 py-3 text-lg font-ui tracking-wide border border-graphite/50 rounded-full text-espresso hover:text-cream hover:bg-wine transition-all duration-500 shadow-sm"
      >
        Explore my life repository
      </button>
    </div>

    <!-- IMAGE -->
    <div class="hero-img md:w-1/2 mt-12 md:mt-0 flex justify-center fade-in">
      <img
        src="assets/images/hero.png"
        alt="Hero Image"
        class=" object-cover w-[85%] max-w-md shadow-md brightness-95 contrast-95"
      />
    </div>
  </section>

  <!-- FOOTER SMALL TEXT -->
  <footer class="absolute bottom-6 text-xs text-espresso/70 fade-in">
    <p>milk & terminal — romanticizing logic softly ✦</p>
  </footer>

  <script>
    // fade-in animation
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.fade-in').forEach((el, i) => {
        setTimeout(() => el.classList.add('show'), 200 + i * 150);
      });
    });

    // redirect function
    function enterWorld() {
      // fade out effect before redirect
      document.body.style.transition = 'opacity 0.6s ease';
      document.body.style.opacity = 0;
      setTimeout(() => {
        window.location.href = '/home';
      }, 600);
    }
  </script>
</body>
</html>
