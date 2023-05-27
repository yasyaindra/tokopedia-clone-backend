
    
@extends('layouts.layout')
    <!-- Main Carousel -->
@section('content')
    <!-- Start Single Product -->
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#" class="text-decoration-none" style="color: green"
                >Home</a
              >
            </li>
            <li class="breadcrumb-item">
              <a href="#" class="text-decoration-none" style="color: green"
                >Library</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        <div class="row mt-3 justify-content-between">
          <div class="col-lg-3">
            <figure class="figure">
              <img
                src="/img/product.avif"
                class="figure-img img-fluid rounded"
                alt="..."
              />
            </figure>
          </div>
          <div class="col-lg-5 mb-3">
            <h5 class="text-uppercase">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Perspiciatis, in!
            </h5>
            <h2 class="fw-bold">Rp. 23.000.000</h2>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button
                  class="nav-link fw-bold active"
                  id="nav-home-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-home"
                  type="button"
                  role="tab"
                  aria-controls="nav-home"
                  aria-selected="true"
                >
                  Detail
                </button>
                <button
                  class="nav-link fw-bold"
                  id="nav-profile-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-profile"
                  type="button"
                  role="tab"
                  aria-controls="nav-profile"
                  aria-selected="false"
                >
                  Info Penting
                </button>
              </div>
            </nav>
            <div class="tab-content mb-3" id="nav-tabContent">
              <div
                class="tab-pane fade show active mt-3"
                id="nav-home"
                role="tabpanel"
                aria-labelledby="nav-home-tab"
                tabindex="0"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                modi quis in autem qui tempore commodi odio blanditiis quaerat
                totam! Eligendi provident quisquam sit exercitationem, illo
                voluptate ullam id eum vero aut dolores ipsa vel dicta
                repudiandae. Adipisci quos officia qui praesentium distinctio
                provident perspiciatis quibusdam nesciunt earum. Nulla, error.
              </div>
              <div
                class="tab-pane fade mt-3"
                id="nav-profile"
                role="tabpanel"
                aria-labelledby="nav-profile-tab"
                tabindex="0"
              >
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                quaerat vitae cumque quis doloremque provident! Laborum, aliquid
                atque animi dolores nam saepe quasi officiis amet dicta tenetur
                rerum eveniet eum.
              </div>
            </div>
            <!-- Nama Toko -->
            <div class="row d-flex align-items-center justify-content-between">
              <div class="col-lg-2">
                <img
                  src="/img/nama_toko.jpg"
                  alt=""
                  style="width: 80px; height: 85px"
                />
              </div>
              <div class="col-lg">
                <h5 class="fw-bold mb-0">
                  <a href="{{route('store')}}" class="text-decoration-none" style="color:green">Toko Bagus</a>
                  </h5>
                <p class="text-secondary mt-0">
                  Online
                  <span class="fw-bold">26 Menit Lalu</span>
                </p>
              </div>
              <div class="col-lg-2">
                <a class="btn btn-success fw-bold" href="">Follow</a>
              </div>
            </div>
            <hr />
            <!-- End Nama Toko -->
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="container">
                  <span class="fw-bold">Atur jumlah dan catatan</span>
                  <h6 class="mb-2 fw-light mt-3">Non bundle</h6>
                  <hr />
                  <div
                    class="row d-flex flex-row justify-content-start align-items-baseline text-center"
                  >
                    <div
                      class="col-lg-5 col-5 d-flex align-items-center button-border"
                    >
                      <button class="button-quantity">-</button>
                      <input
                        type="text"
                        class="input-quantity w-full"
                        style="width: 50%"
                      />
                      <button class="button-quantity">+</button>
                    </div>
                    <div class="col-lg col-5 d-flex mb-3 mt-2">
                      <p>Stock: <span class="fw-bold">60</span></p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="text-secondary">Subtotal</p>
                    <h5 class="fw-bold">Rp23.099.000</h5>
                  </div>
                  <div class="row flex-column">
                    <a
                      class="col-lg btn btn-success w-full text-white fw-bold mb-2"
                      style="color: #098a4e"
                      >+ Keranjang</a
                    >
                    <a
                      class="col-lg btn btn-success w-full fw-bold mb-2"
                      style="color: #098a4e; background-color: #fff"
                      >Beli Langsung</a
                    >
                  </div>
                  <div class="row justify-content-evenly">
                    <div class="col-lg-4 col-4">
                      <span class="fw-bold" style="font-size: 12px">
                        <i class="fa-solid fa-inbox"></i>
                        Chat</span
                      >
                    </div>
                    <div class="col-lg-4 col-4">
                      <span class="fw-bold" style="font-size: 12px">
                        <i class="fa-solid fa-heart"></i>
                        Wishlist</span
                      >
                    </div>
                    <div class="col-lg-4 col-4">
                      <span class="fw-bold" style="font-size: 12px">
                        <i class="fa-solid fa-share"></i>
                        Share</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Produk Lainnya -->
      <div class="shadow">
        <div class="container mt-5">
          <h4 class="fw-bold mb-3">Cari Produk Lainnya</h4>
          <div class="row">
            <div class="col-lg-2 mb-2">
              <div class="card">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <span style="color: orange; font-size: 12px" class="fw-bold"
                    >Product Terbaru!</span
                  >
                  <p class="fw-light">T Shirt Band</p>
                  <p class="fw-bold">Rp. 150.000</p>
                  <span class="fw-light" style="font-size: 13px"
                    >Clothing Store</span
                  >
                  <p class="fw-light" style="font-size: 12px">
                    ⭐ 4.3 | Terjual 14rb
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 mb-2">
              <div class="card">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <span style="color: orange; font-size: 12px" class="fw-bold"
                    >Product Terbaru!</span
                  >
                  <p class="fw-light">T Shirt Band</p>
                  <p class="fw-bold">Rp. 150.000</p>
                  <span class="fw-light" style="font-size: 13px"
                    >Clothing Store</span
                  >
                  <p class="fw-light" style="font-size: 12px">
                    ⭐ 4.3 | Terjual 14rb
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 mb-2">
              <div class="card">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <span style="color: orange; font-size: 12px" class="fw-bold"
                    >Product Terbaru!</span
                  >
                  <p class="fw-light">T Shirt Band</p>
                  <p class="fw-bold">Rp. 150.000</p>
                  <span class="fw-light" style="font-size: 13px"
                    >Clothing Store</span
                  >
                  <p class="fw-light" style="font-size: 12px">
                    ⭐ 4.3 | Terjual 14rb
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 mb-2">
              <div class="card">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <span style="color: orange; font-size: 12px" class="fw-bold"
                    >Product Terbaru!</span
                  >
                  <p class="fw-light">T Shirt Band</p>
                  <p class="fw-bold">Rp. 150.000</p>
                  <span class="fw-light" style="font-size: 13px"
                    >Clothing Store</span
                  >
                  <p class="fw-light" style="font-size: 12px">
                    ⭐ 4.3 | Terjual 14rb
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 mb-2">
              <div class="card">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <span style="color: orange; font-size: 12px" class="fw-bold"
                    >Product Terbaru!</span
                  >
                  <p class="fw-light">T Shirt Band</p>
                  <p class="fw-bold">Rp. 150.000</p>
                  <span class="fw-light" style="font-size: 13px"
                    >Clothing Store</span
                  >
                  <p class="fw-light" style="font-size: 12px">
                    ⭐ 4.3 | Terjual 14rb
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 mb-2">
              <div class="card">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <span style="color: orange; font-size: 12px" class="fw-bold"
                    >Product Terbaru!</span
                  >
                  <p class="fw-light">T Shirt Band</p>
                  <p class="fw-bold">Rp. 150.000</p>
                  <span class="fw-light" style="font-size: 13px"
                    >Clothing Store</span
                  >
                  <p class="fw-light" style="font-size: 12px">
                    ⭐ 4.3 | Terjual 14rb
                  </p>
                </div>
              </div>
            </div>
            <!-- More Products Link! -->
            <div class="text-center mb-3 mt-3">
              <a href="" class="btn button-more-products fw-bold"
                >Lebih Banyak Product</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- End Produck Lainnya -->
@endsection