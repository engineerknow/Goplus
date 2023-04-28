<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        background-color: #fff;
    }

    .side-navbar {
        width: 250px;
        height: 100%;
        position: fixed;
        margin-left: -300px;
        background-color: #100901;
        transition: 0.5s;
    }

    .nav-link:active,
    .nav-link:focus,
    .nav-link:hover {
        background-color: #ffffff26;
    }

    .my-container {
        transition: 0.4s;
    }

    .active-nav {
        margin-left: 0;
    }

    /* for main section */
    .active-cont {
        margin-left: 250px;
    }

    #menu-btn {
        background-color: #100901;
        color: #fff;
        margin-left: -62px;
    }

    .my-container input {
        border-radius: 2rem;
        padding: 2px 20px;
    }
    main{
        display: flex;
        flex-wrap: nowrap;
        height: 100%;
        height: -webkit-fill-available;
        max-height: 100vh;
        overflow-x: auto;
        overflow-y: hidden;
    }
    .b-example-divider{
        margin-left: 20px;
        width: 100%;
    }
    footer {
 color:white;
 padding:1rem;
}

</style>

<main>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Goplushealthy Backend</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          
          <li>
            <a href="{{route('admin.article')}}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Article
            </a>
          </li>
          <li>
            <a href="{{route('admin.news')}}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              News
            </a>
          </li>
          <li>
            <a href="{{route('admin.process')}}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Process
            </a>
          </li>
          
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>goplushealthy</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
      
    <!-- Side-Nav -->
    

    <!-- Main Wrapper -->
    <div class="b-example-divider mt-5" style="overflow: scroll;">
        <!-- Top Nav -->
        <!--End Top Nav -->
            @yield('content')
    </div>
</main>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });
    </script>
</body>

<footer>
<div class="container" >
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2023 Goplus healthy </span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </footer>
  </div>
</footer>