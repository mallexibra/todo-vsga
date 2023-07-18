<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | To-do List</title>
  <script src="https://kit.fontawesome.com/6374c7fad5.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="src/style/style.css" />
</head>

<body class="font-poppins">
  <header class="fixed top-2 left-2 right-2 p-2 sm:p-0 sm:px-3 text-center bg-primary-color">
    <div class="wrapper flex justify-between items-center">
      <div class="brand w-full">
        <h1 class="text-white font-bold text-2xl sm:text-start text-center">
          TODO APP
        </h1>
      </div>
      <i id="menu" class="fa-solid fa-bars cursor-pointer text-2xl sm:hidden" style="color: #ffffff"></i>
      <nav id="navbar" class="sm:flex hidden justify-end items-center absolute top-20 right-0 sm:static text-white bg-primary-color/90 w-full py-5 sm:py-2 h-max">
        <ul class="font-bold sm:flex gap-3">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#developer">Developer</a></li>
          <li><a href="#review">Review</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="btn flex justify-center gap-3 mt-3 sm:mt-0 px-3">
          <?php if (isset($_SESSION['name'])) : ?>
            <p><?= $_SESSION['name'] ?></p>
          <?php else : ?>
            <a class="block w-full text-center bg-warning-color p-2 font-semibold" href="login.html">Login</a>
            <a class="block w-full text-center border border-warning-color p-2 font-semibold" href="#">Register</a>
          <?php endif; ?>
        </div>
      </nav>
    </div>
  </header>
  <main class="pt-10 bg-primary-color">
    <div id="home" class="hero scroll-smooth sm:px-16 min-h-screen flex flex-col sm:flex-row justify-center gap-5 items-center wrapper">
      <section class="left">
        <img class="w-28 sm:w-56 mx-auto" src="src/img/mobile.png" alt="mobile-png" />
      </section>
      <section class="right sm:text-left px-10 sm:mt-0 sm:max-w-md mt-5 text-white text-center">
        <h1 class="font-light sm:text-5xl text-2xl">
          Start your day by
          <span class="font-bold text-warning-color">
            writing down the things you will do.</span>
        </h1>
        <p class="text-xs sm:text-lg my-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
          dignissimos aspernatur illum culpa ea quia sit quasi quaerat rem
          doloremque?
        </p>
        <a class="p-2 text-center text-xs font-bold bg-warning-color block rounded-lg" href="<?php if (isset($_SESSION['name'])) {
                                                                                                echo "todo.php";
                                                                                              } else {
                                                                                                echo "login.php";
                                                                                              } ?>">Get Started
          <i class="fa-regular fa-arrow-up-right" style="color: #ffffff"></i></a>
      </section>
    </div>
    <section id="about" class="about scroll-smooth pt-40 h-screen bg-white">
      <div class="wrapper">
        <h1 class="tittle">About</h1>
        <div class="my-5 sm:flex sm:justify-center sm:items-center sm:mt-10 sm:gap-5">
          <img class="rounded-lg mb-5 border-2 h-52 sm:max-w-md w-full object-cover border-primary-color shadow-xl" src="src/img/about.jpg" alt="img-about" />
          <p class="text-justify sm:max-w-lg">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Obcaecati aliquid sapiente officiis mollitia asperiores ea
            voluptatibus eos nostrum doloremque, quisquam, praesentium, quod
            quidem. Fuga in blanditiis beatae velit quas nisi placeat esse
            similique modi veritatis fugit aperiam quidem quisquam, nemo
            facilis cum repudiandae, totam necessitatibus minus tenetur sequi.
            Sequi, consequatur?
          </p>
        </div>
      </div>
    </section>
    <section id="developer" class="developer scroll-smooth pt-40 h-screen bg-white">
      <div class="wrapper">
        <h1 class="tittle">Developer</h1>
        <div class="flex sm:flex-row-reverse flex-col sm:mt-10 gap-5 justify-center items-center my-5">
          <img class="w-52 h-52 right-2 object-cover" src="src/img/logo.png" alt="logo-developer" />
          <h1 class="font-extrabold text-3xl">~</h1>
          <img class="w-52 h-52 object-cover" src="src/img/mallexibra.png" alt="mallexibra-profile" />
        </div>
      </div>
    </section>
    <section id="review" class="review scroll-smooth pt-40 h-screen bg-white">
      <div class="wrapper">
        <h1 class="tittle">Review</h1>
        <div class="m-5 overflow-x-scroll flex gap-5 flex-nowrap bg-text-warning/20 p-5">
          <div class="bg-white p-3 min-w-[300px] rounded-md shadow-lg">
            <div class="flex gap-3 justify-start items-center">
              <img class="w-12 h-12 rounded-full" src="src/img/mallexibra.png" alt="Img-profile" />
              <h1 class="font-bold text-primary-color">
                Maulana Malik Ibrahim
              </h1>
            </div>
            <p class="text-xs mt-3">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore
              veniam magni aliquid ut nobis voluptatem delectus eum aliquam
              omnis dolores.
            </p>
          </div>
          <div class="bg-white p-3 min-w-[300px] rounded-md shadow-lg">
            <div class="flex gap-3 justify-start items-center">
              <img class="w-12 h-12 rounded-full" src="src/img/mallexibra.png" alt="Img-profile" />
              <h1 class="font-bold text-primary-color">
                Maulana Malik Ibrahim
              </h1>
            </div>
            <p class="text-xs mt-3">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore
              veniam magni aliquid ut nobis voluptatem delectus eum aliquam
              omnis dolores.
            </p>
          </div>
          <div class="bg-white p-3 min-w-[300px] rounded-md shadow-lg">
            <div class="flex gap-3 justify-start items-center">
              <img class="w-12 h-12 rounded-full" src="src/img/mallexibra.png" alt="Img-profile" />
              <h1 class="font-bold text-primary-color">
                Maulana Malik Ibrahim
              </h1>
            </div>
            <p class="text-xs mt-3">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore
              veniam magni aliquid ut nobis voluptatem delectus eum aliquam
              omnis dolores.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact-us scroll-smooth pt-40 h-screen bg-white">
      <div class="wrapper">
        <h1 class="tittle">Contact me</h1>
        <form class="bg-primary-color/20 text-primary-color sm:max-w-xl sm:mx-auto my-5 p-5 rounded-lg flex gap-3 flex-col" action="">
          <label class="flex flex-col" for="name">
            <span class="font-bold">Name</span>
            <input placeholder="Input your name ..." class="outline-none border border-primary-color rounded-md text-xs p-2" type="text" name="name" id="name" />
          </label>
          <label class="flex flex-col" for="email">
            <span class="font-bold">Email</span>
            <input placeholder="Input your email ..." class="outline-none border border-primary-color rounded-md text-xs p-2" type="email" name="email" id="email" />
          </label>
          <label class="flex flex-col" for="deskripsi">
            <span class="font-bold">Deskripsi</span>
            <textarea placeholder="Input your description ..." class="outline-none border border-primary-color rounded-md text-xs p-2" name="deskripsi" id="deskripsi" cols="30" rows="7"></textarea>
          </label>
          <button class="bg-primary-color text-white font-bold text-xs my-2 p-2 rounded-lg" type="submit">
            Send message
          </button>
        </form>
      </div>
    </section>
  </main>
  <footer class="bg-primary-color text-center text-xs font-bold text-white p-2">
    <p>Copyright @2023 by Maulana Malik Ibrahim.</p>
  </footer>

  <script>
    const menu = document.getElementById("menu");
    const navbar = document.getElementById("navbar");

    menu.addEventListener("click", () => {
      navbar.classList.toggle("hidden");
    });

    document.addEventListener("click", (e) => {
      const target = navbar.contains(e.target);
      const targetMenu = menu.contains(e.target);
      if (!target && !targetMenu) {
        navbar.classList.add("hidden");
      }
    });
  </script>
</body>

</html>