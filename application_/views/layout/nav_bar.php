  <!-- header begin -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <!-- logo begin -->
          <h1 id="logo"> <a href="<?= base_url() ?>"> <img class="logo" src="<?= base_url('resources/images/6logo.png') ?>" alt=""> </a> </h1>
          <!-- logo close --> 
          <nav class="main-menu">
            <ul id="mainmenu">
              <li>
                <form class="navbar-form" role="search" action="<?= base_url('/product/search') ?>" method="GET">
                <input type="text" class="form-control" name="text" placeholder="Search" required="">
                <button style="background-color: white;" type="submit" class="btn btn-primary">
                  <i style="margin-right: 5px;color: blue;" class="fa fa-search"></i>
                </button>
                </form>
              </li>
              <li><a href="<?= base_url() ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : ''  ?>">Home</a></li>
              <li><a href="<?= base_url('/product') ?>" class="<?= ($this->uri->segment(1) == 'product') ? 'active' : ''  ?>">Products</a></li>
              <li><a href="<?= base_url('/home/contact_us') ?>" class="<?= ($this->uri->segment(2) == 'contact_us') ? 'active' : ''  ?>"">Contact</a></li>
              <li><a href="<?= base_url('/home/about_us') ?>" class="<?= ($this->uri->segment(2) == 'about_us') ? 'active' : ''  ?>">About</a></li>
              <li><a href="<?= base_url('/home/faq') ?>" class="<?= ($this->uri->segment(2) == 'faq') ? 'active' : ''  ?>">FAQ</a></li>
            </ul>
          </nav>
        </div>
        <!-- mainmenu close --> 
        
      </div>
    </div>
  </header>
  <!-- header close --> 
 <!-- content begin -->
  <div id="content" class="no-bottom no-top"> 