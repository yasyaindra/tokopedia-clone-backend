
    
    @extends('layouts.layout')
    <!-- Main Carousel -->
    @section('content')
    <div class="container mt-5">
        <div id="carouselExample" class="carousel slide">
          <div
            class="carousel-inner rounded"
            style="height: 299px; object-fit: fill"
          >
            <div class="carousel-item active">
              <img src="/img/carousel_1.avif" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="/img/carousel_1.avif" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="/img/carousel_1.avif" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- End Main Carousel -->
      <!-- Category & Pembayaran -->
      <div class="container mt-5 shadow-xl">
        <div class="card w-full">
          <div class="row p-3">
            <!-- Kategori & Pembayaran -->
            <div class="col-lg">
              <h5 class="mb-3">Kategori Pilihan</h5>
              <div class="row category-selection">
                <div
                  class="col-lg-3 col-sm-6 d-flex flex-row justify-content-between"
                >
                  <figure class="figure d-flex flex-column">
                    <img
                      src="/img/category_1.webp"
                      class="figure-img img-fluid rounded mb-auto"
                      alt="..."
                      style="object-fit: contain"
                    />
                    <figcaption class="figure-caption mt-3 text-center">
                      <h5>Food</h5>
                    </figcaption>
                  </figure>
                </div>
  
                <div
                  class="col-lg-3 col-sm-6 d-flex flex-row justify-content-between"
                >
                  <figure class="figure d-flex flex-column">
                    <img
                      src="/img/category_2.jpg"
                      class="figure-img img-fluid rounded mb-auto"
                      alt="..."
                      style="object-fit: contain"
                    />
                    <figcaption class="figure-caption mt-3 text-center">
                      <h5>Tas</h5>
                    </figcaption>
                  </figure>
                </div>
  
                <div
                  class="col-lg-3 col-sm-6 d-flex flex-row justify-content-between"
                >
                  <figure class="figure d-flex flex-column">
                    <img
                      src="/img/category_3.webp"
                      class="figure-img img-fluid rounded mb-auto"
                      alt="..."
                      style="object-fit: contain"
                    />
                    <figcaption class="figure-caption mt-3 text-center">
                      <h5>Sepatu</h5>
                    </figcaption>
                  </figure>
                </div>
  
                <div
                  class="col-lg-3 col-sm-6 d-flex flex-row justify-content-between"
                >
                  <figure class="figure d-flex flex-column">
                    <img
                      src="/img/category_4.webp"
                      class="figure-img img-fluid rounded mb-auto"
                      alt="..."
                      style="object-fit: contain"
                    />
                    <figcaption class="figure-caption mt-3 text-center">
                      <h5>Sepatu</h5>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="col-lg">
              <div class="d-flex">
                <h5>Top Up & Tagihan</h5>
                <span class="mx-3" style="color: #12883d; font-weight: bold"
                  >Lihat Semua</span
                >
              </div>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="pulsa-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#pulsa-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="pulsa-tab-pane"
                    aria-selected="true"
                  >
                    Pulsa
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="paket-data-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#paket-data-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="paket-data-tab-pane"
                    aria-selected="false"
                  >
                    Paket Data
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="listrik-pln-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#listrik-pln-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="listrik-pln-tab-pane"
                    aria-selected="false"
                  >
                    Listrik PLN
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="tiket-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tiket-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="tiket-tab-pane"
                    aria-selected="false"
                  >
                    Tiket
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="pulsa-tab-pane"
                  role="tabpanel"
                  aria-labelledby="pulsa-tab"
                  tabindex="0"
                >
                  <form class="row d-flex align-items-center mt-3">
                    <div class="col-lg mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="phone-number"
                        placeholder="Phone Number"
                      />
                    </div>
                    <div class="col-lg mb-3">
                      <select
                        class="form-control"
                        aria-label="Default select example"
                      >
                        <option selected>Nominal</option>
                        <option value="1">10.000</option>
                        <option value="2">50.000</option>
                        <option value="3">100.000</option>
                      </select>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-success">Beli</button>
                    </div>
                  </form>
                </div>
                <div
                  class="tab-pane fade"
                  id="paket-data-tab-pane"
                  role="tabpanel"
                  aria-labelledby="paket-data-tab"
                  tabindex="0"
                >
                  <form class="row d-flex align-items-center mt-3">
                    <div class="col-lg mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="phone-number"
                        placeholder="Phone Number"
                      />
                    </div>
                    <div class="col-lg mb-3">
                      <select
                        class="form-control"
                        aria-label="Default select example"
                      >
                        <option selected>Nominal</option>
                        <option value="1">10.000</option>
                        <option value="2">50.000</option>
                        <option value="3">100.000</option>
                      </select>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-success">Beli</button>
                    </div>
                  </form>
                </div>
                <div
                  class="tab-pane fade"
                  id="tiket-tab-pane"
                  role="tabpanel"
                  aria-labelledby="tiket-tab"
                  tabindex="0"
                >
                  <form class="row d-flex align-items-center mt-3">
                    <div class="col-lg mb-3">
                      <select
                        class="form-control"
                        aria-label="Default select example"
                      >
                        <option selected>Asal</option>
                        <option value="1">Tangerang</option>
                        <option value="2">Jakarta</option>
                        <option value="3">Bandung</option>
                      </select>
                    </div>
                    <div class="col-lg mb-3">
                      <select
                        class="form-control"
                        aria-label="Default select example"
                      >
                        <option selected>Tujuan</option>
                        <option value="1">Bali</option>
                        <option value="2">Surabaya</option>
                        <option value="3">Makasar</option>
                      </select>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-success">
                        Beli Tiket
                      </button>
                    </div>
                  </form>
                </div>
                <div
                  class="tab-pane fade"
                  id="listrik-pln-tab-pane"
                  role="tabpanel"
                  aria-labelledby="listrik-pln-tab"
                  tabindex="0"
                >
                  <form class="row d-flex align-items-center mt-3">
                    <div class="col-lg mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="id-pelanggan"
                        placeholder="ID Pelanggan"
                      />
                    </div>
                    <div class="col-lg mb-3">
                      <select
                        class="form-control"
                        aria-label="Default select example"
                      >
                        <option selected>Tujuan</option>
                        <option value="1">Bali</option>
                        <option value="2">Surabaya</option>
                        <option value="3">Makasar</option>
                      </select>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-success">Bayar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- End K & P -->
            <div
              class="row d-lg-flex justify-content-between flex-row d-none mb-3 mt-3"
            >
              <div col="col-lg-2">
                <a href="" class="category-link">Kategori</a>
                <a href="" class="category-link">Handphone & Template</a>
                <a href="" class="category-link">Top Up & Tagihan</a>
                <a href="" class="category-link">Travel & Entertainment</a>
                <a href="" class="category-link">Perawatan Hemat</a>
                <a href="" class="category-link">Keuangan</a>
                <a href="" class="category-link">Komputer & Laptop</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Category -->
      <!-- Start Diskonan -->
      <div class="container mt-5">
        <h5 class="mb-3 fw-bold">Kejar Diskonan Special</h5>
        <div class="row justify-content-between">
          <div class="col-lg-3 col-sm-5 mb-3">
            <a href="/" class="text-decoration-none">
              <div class="card product-item">
                <img src="/img/product.avif" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Rp. 99.000, 00</h5>
                  <div class="row justify-content-start align-items-baseline">
                    <div class="col-lg-3">
                      <span class="badge rounded-pill text-bg-danger">92%</span>
                    </div>
                    <div class="col-lg">
                      <p class="text-decoration-line-through text-secondary">
                        Rp. 150.000, 00
                      </p>
                    </div>
                  </div>
                  <p class="card-text fw-bold">Segera Habis</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-5 mb-3">
            <div class="card">
              <img src="/img/product.avif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Rp. 99.000, 00</h5>
                <div class="row justify-content-start align-items-baseline">
                  <div class="col-lg-3">
                    <span class="badge rounded-pill text-bg-danger">92%</span>
                  </div>
                  <div class="col-lg">
                    <p class="text-decoration-line-through text-secondary">
                      Rp. 150.000, 00
                    </p>
                  </div>
                </div>
                <p class="card-text fw-bold">Segera Habis</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 mb-3">
            <div class="card">
              <img src="/img/product.avif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Rp. 99.000, 00</h5>
                <div class="row justify-content-start align-items-baseline">
                  <div class="col-lg-3">
                    <span class="badge rounded-pill text-bg-danger">92%</span>
                  </div>
                  <div class="col-lg">
                    <p class="text-decoration-line-through text-secondary">
                      Rp. 150.000, 00
                    </p>
                  </div>
                </div>
                <p class="card-text fw-bold">Segera Habis</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 mb-3">
            <div class="card">
              <img src="/img/product.avif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Rp. 99.000, 00</h5>
                <div class="row justify-content-start align-items-baseline">
                  <div class="col-lg-3">
                    <span class="badge rounded-pill text-bg-danger">92%</span>
                  </div>
                  <div class="col-lg">
                    <p class="text-decoration-line-through text-secondary">
                      Rp. 150.000, 00
                    </p>
                  </div>
                </div>
                <p class="card-text fw-bold">Segera Habis</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Diskonan -->
  
      <!-- Start All Products -->
      <div class="shadow">
        <div class="container mt-5">
          <h5 class="mb-3 fw-bold">Cari Produk Lainnya!</h5>
          <div class="row">
            <div class="col-lg-2 mb-2">
              <a href="{{route('product')}}" class="text-decoration-none">
                <div class="card product-item">
                  <img src="/img/product.avif" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <span style="color: orange; font-size: 12px" class="fw-bold"
                      >Product Terbaru!</span
                    >
                    <p class="fw-light" style="margin-bottom:0">T Shirt Band</p>
                    <p class="fw-bold" style="margin-bottom:0">Rp. 150.000</p>
                    <span class="fw-light" style="font-size: 13px"
                      >Clothing Store</span
                    >
                    <p class="fw-light" style="font-size: 12px">
                      ⭐ 4.3 | Terjual 14rb
                    </p>
                  </div>
                </div>
              </a>
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
      <!-- EndAll Products -->
  
  @endsection