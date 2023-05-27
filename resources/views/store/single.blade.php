@extends('layouts.layout')
@section('content')
    <!-- Shop Detail -->
    <div class="container mt-5">
        <div class="card w-full">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-lg-5 d-flex align-items-center">
                <img
                  src="/img/shop_pic.jpg"
                  class="img-fluid rounded"
                  style="width: 80px; height: 80px"
                  alt=""
                />
                <div class="row mx-2">
                  <div class="mb-3">
                    <h5 class="fw-bold" style="margin-bottom: 0">
                      Yasya Indra Shop
                    </h5>
                    <p style="margin-top: 0; margin-bottom: 0">
                      Online
                      <span class="fw-bold text-secondary"
                        >8 menit yang lalu</span
                      >
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-lg">
                      <a href="" class="text-decoration-none btn btn-success"
                        >Follow</a
                      >
                      <a
                        href=""
                        class="text-decoration-none btn btn-light fw-bold mx-2 d-none d-lg-inline"
                        style="border: 1px solid green"
                        >Chat Penjual</a
                      >
                      <a
                        href=""
                        class="text-decoration-none fw-bold btn btn-light"
                        style="border: 1px solid green"
                        alt="Info Toko"
                        data-bs-toggle="modal"
                        data-bs-target="#shop-description"
                      >
                        <i class="fa-solid fa-shop"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg d-flex justify-content-end">
                <div
                  class="row justify-content-evenly align-items-center d-none d-lg-flex"
                >
                  <div class="col-lg-3 text-center">
                    <p class="fw-bold" style="margin-bottom: 0; font-size: 15px">
                      ⭐ 4.9
                    </p>
                    <span style="font-size: 10px">Rating & Ulasan</span>
                  </div>
                  <div class="col-lg-3 text-center">
                    <p class="fw-bold" style="margin-bottom: 0; font-size: 15px">
                      4 Jam
                    </p>
                    <span style="font-size: 10px">Pesanan Diproses</span>
                  </div>
                  <div class="col-lg-5 text-center">
                    <p class="fw-bold" style="margin-bottom: 0; font-size: 15px">
                      09-00 - 18:00
                    </p>
                    <span style="font-size: 10px">Jam Operasi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Shop Detail -->
      <!-- Shop product -->
      <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active fw-bold"
              id="home-tab"
              data-bs-toggle="tab"
              data-bs-target="#home-tab-pane"
              type="button"
              role="tab"
              aria-controls="home-tab-pane"
              aria-selected="true"
            >
              Beranda
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link fw-bold"
              id="product-tab"
              data-bs-toggle="tab"
              data-bs-target="#product-tab-pane"
              type="button"
              role="tab"
              aria-controls="product-tab-pane"
              aria-selected="false"
            >
              Produk
            </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- Carousel Home -->
          <div
            class="tab-pane fade show active"
            id="home-tab-pane"
            role="tabpanel"
            aria-labelledby="home-tab"
            tabindex="0"
          >
            <div
              id="carouselExampleSlidesOnly"
              class="carousel slide mb-5"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/img/carousel_1.avif"
                    class="d-block w-100 rounded mt-5"
                    alt="..."
                  />
                </div>
              </div>
            </div>
            <h4 class="fw-bold">Product Terlaris</h4>
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
          <!-- End Carousel Home -->
          <!-- All Product -->
          <!-- End All Product -->
          <div
            class="tab-pane fade"
            id="product-tab-pane"
            role="tabpanel"
            aria-labelledby="product-tab"
            tabindex="0"
          >
            <div class="container mt-5">
              <div class="row">
                <div class="col-lg-3 mb-3">
                  <div class="card" style="width: 18rem">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Etalase Toko</h5>
                      <div id="list-example" class="list-group">
                        <a
                          class="list-group-item list-group-item-action"
                          href="#list-item-1"
                          >Semua Produk</a
                        >
                        <a
                          class="list-group-item list-group-item-action"
                          href="#list-item-2"
                          >Produk Terjual</a
                        >
                        <a
                          class="list-group-item list-group-item-action"
                          href="#list-item-3"
                          >Preorder</a
                        >
                        <a
                          class="list-group-item list-group-item-action"
                          href="#list-item-4"
                          >Kategori Lainnya</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg">
                  <h4 class="fw-bold">Semua Produk</h4>
                  <div class="row">
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
                    <div class="col-lg-3 mb-2">
                      <div class="card">
                        <img
                          src="/img/product.avif"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <span
                            style="color: orange; font-size: 12px"
                            class="fw-bold"
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
            </div>
          </div>
        </div>
      </div>
      <!-- End Shop Product -->
          <!-- Modal -->
    <div
    class="modal fade"
    id="shop-description"
    tabindex="-1"
    aria-labelledby="shop-description"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <h5 class="fw-bold pb-3">Yasya Indra Shop</h5>
                <h6 class="fw-bold">Deskripsi Toko</h6>
                <p style="margin-bottom: 6px; color: black">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quisquam sint veritatis similique, ex quidem cum velit! Odit
                  tenetur voluptatibus facilis.
                </p>
                <p style="margin-bottom: 0; color: #acb1bc">Kota Malang</p>
                <p style="margin-bottom: 0">⭐⭐⭐</p>
              </div>
              <div class="col-lg">
                <h6 class="fw-bold">Catatan Toko</h6>
                <p>
                  <a
                    class="btn btn-success"
                    data-bs-toggle="collapse"
                    href="#collapseTerms"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseTerms"
                  >
                    KEBIJAKAN PEMBELIAN
                  </a>
                </p>
                <div class="collapse" id="collapseTerms">
                  <div class="card card-body">
                    <ul>
                      <li>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Esse labore rerum quam inventore quos
                        architecto.
                      </li>
                      <li>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Esse labore rerum quam inventore quos
                        architecto.
                      </li>
                      <li>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Esse labore rerum quam inventore quos
                        architecto.
                      </li>
                      <li>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Esse labore rerum quam inventore quos
                        architecto.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <h6 class="fw-bold">Layanan Pengiriman</h6>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 d-flex align-items-center">
                        <img
                          src="/img/kurir-anteraja.png"
                          alt=""
                          class="img-fluid"
                          style="width: 40px; height: 20px"
                        />
                      </div>
                      <div class="col-lg">
                        <h6 style="margin-bottom: 0">Anter Aja</h6>
                        <span>Instant Courier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
@endsection