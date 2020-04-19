<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">


          <img class="img-xs rounded-circle" src="{{asset('images/faces/mohsin.png')}}" alt="profile image" >
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">MOHSIN SIKDER</p>
          <p class="designation">ADMIN</p>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="menu-icon typcn typcn-document-text" ></i>
        <span class="menu-title" >Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#product-page" aria-expanded="false" aria-controls="product-page">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Manage Products</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="product-page">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.products')}}">Manage Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.product.create')}}">Add Product</a>
          </li>

        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#category-page" aria-expanded="false" aria-controls="category-page">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Manage Categories</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="category-page">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories')}}">Manage Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category.create')}}">Add Category</a>
          </li>

        </ul>
      </div>
    </li>



    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-page" aria-expanded="false" aria-controls="brand-page">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Manage Brands</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="brand-page">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.brands')}}">Manage Brand</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.brand.create')}}">Add Brand</a>
          </li>

        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#division-page" aria-expanded="false" aria-controls="division-page">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Manage Divisions</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="division-page">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.divisions')}}">Manage Division</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.division.create')}}">Add Division</a>
          </li>

        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#district-page" aria-expanded="false" aria-controls="district-page">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Manage Districts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="district-page">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.districts')}}">Manage district</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.district.create')}}">Add district</a>
          </li>

        </ul>
      </div>
    </li>

  </ul>
</nav>
