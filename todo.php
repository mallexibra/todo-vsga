<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To-do List | Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="src/style/index.css" />
  </head>
  <body>
    <nav>
      <div class="container brand">
        <img src="src/img/profile.jpg" alt="Profile User" />
        <h1>Fulan bin Fulan</h1>
        <div>
          <img src="src/img/arrowbottom.png" id="arrow" alt="icon-arrow" />
          <ul class="hidden" id="nav-list">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container main">
      <header>
        <h1>TO-DO LIST</h1>
        <p>03/06/2023</p>
      </header>
      <div class="content">
        <div class="category">
          <a href="#" class="active">All</a>
          <a href="#">Finished</a>
          <a href="#">Unfinished</a>
        </div>
        <form action="">
          <input
            type="text"
            placeholder="Add your to-do for today..."
            name="addTodo"
            id="addTodo"
          />
          <button type="submit">Create</button>
        </form>
        <div class="listTodo">
          <section>
            <div class="info">
              <div class="todo">
                <h3>MAKAN MALAM</h3>
                <p>Create at 03/06/2023</p>
              </div>
              <label for="toggle" class="toggle">
                <input type="checkbox" name="toggle" id="toggle" />
                <span></span>
              </label>
            </div>
            <div class="action">
              <a href="#" id="editTodo" class="edit">Edit</a>
              <a href="#" class="remove">Remove</a>
              <div class="overlay hidden" id="overlay">
                <form action="">
                  <img src="src/img/close.png" id="btnClose" alt="close" />
                  <label for="todo">
                    <span>Your to-do</span>
                    <input
                      type="text"
                      value="MAKAN MALAM"
                      name="todo"
                      id="todo"
                    />
                  </label>
                  <button type="submit">Edit To-do</button>
                </form>
              </div>
            </div>
          </section>
          <section>
            <div class="info">
              <div class="todo">
                <h3>MAKAN MALAM</h3>
                <p>Create at 03/06/2023</p>
              </div>
              <label for="toggle" class="toggle">
                <input type="checkbox" name="toggle" id="toggle" />
                <span></span>
              </label>
            </div>
            <div class="action">
              <a href="#" id="editTodo" class="edit">Edit</a>
              <a href="#" class="remove">Remove</a>
              <div class="overlay hidden" id="overlay">
                <form action="">
                  <img src="src/img/close.png" id="btnClose" alt="close" />
                  <label for="todo">
                    <span>Your to-do</span>
                    <input
                      type="text"
                      value="MAKAN MALAM"
                      name="todo"
                      id="todo"
                    />
                  </label>
                  <button type="submit">Edit To-do</button>
                </form>
              </div>
            </div>
          </section>
          <section>
            <div class="info">
              <div class="todo">
                <h3>MAKAN MALAM</h3>
                <p>Create at 03/06/2023</p>
              </div>
              <label for="toggle" class="toggle">
                <input type="checkbox" name="toggle" id="toggle" />
                <span></span>
              </label>
            </div>
            <div class="action">
              <a href="#" id="editTodo" class="edit">Edit</a>
              <a href="#" class="remove">Remove</a>
              <div class="overlay hidden" id="overlay">
                <form action="">
                  <img src="src/img/close.png" id="btnClose" alt="close" />
                  <label for="todo">
                    <span>Your to-do</span>
                    <input
                      type="text"
                      value="MAKAN MALAM"
                      name="todo"
                      id="todo"
                    />
                  </label>
                  <button type="submit">Edit To-do</button>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>
    <script src="src/style/script.js"></script>
    <script>
      const arrow = document.getElementById("arrow");
      const navList = document.getElementById("nav-list");
      const editTodo = document.getElementById("editTodo");
      const overlay = document.getElementById("overlay");
      const btnClose = document.getElementById("btnClose");

      arrow.addEventListener("click", () => {
        navList.classList.toggle("hidden");
      });

      document.addEventListener("click", (e) => {
        const target1 = arrow.contains(e.target);
        const target2 = navList.contains(e.target);

        if (!target1 && !target2) {
          navList.classList.add("hidden");
        }
      });

      editTodo.addEventListener("click", () => {
        overlay.classList.toggle("hidden");
      });

      btnClose.addEventListener("click", () => {
        overlay.classList.toggle("hidden");
      });
    </script>
  </body>
</html>
