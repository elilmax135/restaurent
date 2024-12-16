<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <style>
      /* Reset and Global Styles */
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f5f7;
      }

      /* Layout Styles */
      .layout-wrapper {
        display: flex;
        min-height: 100vh;
      }



      .main-panel {
        flex-grow: 1;
        background-color: #ffffff;
        padding: 20px;
        box-sizing: border-box;
      }

      header {
        height: 70px;
        background: #007bff;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        box-sizing: border-box;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      header h1 {
        margin: 0;
        font-size: 1.5rem;
      }

      header .user-profile {
        font-size: 1rem;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <h1>Admin Panel</h1>
      <div class="user-profile">
        <span>Welcome, Admin</span>
      </div>
    </header>

    <!-- Main Layout Wrapper -->
    <div class="layout-wrapper">
      <!-- Sidebar -->
      <div class="sidebar">

        @include("admin.navbar")
      </div>

      <!-- Main Panel -->
      <div class="main-panel">
        @yield('content') <!-- Dynamic content will be injected here -->
      </div>
    </div>

    @include("admin.adminjs")
  </body>
</html>
