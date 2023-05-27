@include('partials.styles')
<div class="container">
    <div class="row justify-content-center mt-5 mx-auto">
      <div class="col-lg-8 mb-4">
        <h4 class="fw-bold">Keranjang</h4>
        <div class="row d-flex flex-row justify-content-between">
          <div class="col-lg-2">
            <input type="checkbox" />
            <label for="">Pilih Semua</label>
          </div>
          <div class="col-lg-2 mb-3">
            <a
              href=""
              class="fw-bold"
              style="color: green; text-decoration: none"
              >Hapus</a
            >
          </div>
          <hr />
        </div>
        <!-- Items -->
        <div class="row">
          <div class="col-lg">
            <div class="d-flex">
              <input type="checkbox" />
              <div class="d-flex flex-column mx-3 mb-2">
                <label for="" class="fw-bold">Toko Bagus</label>
                <span style="font-size: 13px">Jakarta Utara</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg d-flex align-items-center">
            <input type="checkbox" />
            <img
              src="/img/product.avif"
              alt=""
              width="70px"
              height="70px"
              class="mx-3 mt-3"
            />
            <div>
              <label for="">Lorem ipsum dolor sit amet consectetur.</label
              ><br />
              <span style="font-size: 13px">Non Bundle</span><br />
              <span class="fw-bold">Rp. 23.000.000</span>
            </div>
          </div>
        </div>

        <div class="row mt-3 justify-content-end">
          <div class="col-lg-3">
            <p>Hapus</p>
          </div>
          <div class="col-lg-6 col-md-12 text-lg-end">
            <i class="fa fa-plus"></i>
            <span class="mx-2 mx-lg-5">1</span>
            <i class="fa fa-minus"></i>
          </div>
        </div>
        <!-- End Items -->
      </div>
      <div class="col lg-3">
        <div class="card">
          <div class="card-body">
            <div class="container">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Makin hemat dengan promo"
                />
              </div>
              <h6 class="card-subtitle mb-3 mt-3 fw-bold">
                Ringkasan Belanja
              </h6>
              <div class="row d-flex flex-column">
                <div class="col-lg d-flex justify-content-between">
                  <p>Total Harga</p>
                  <p>28.000.000</p>
                </div>
                <div class="col-lg d-flex justify-content-between">
                  <p>Total Diskon Barang</p>
                  <p>28.000</p>
                </div>
                <hr />
              </div>
              <div class="row">
                <div class="col-lg d-flex justify-content-between">
                  <h6 class="card-subtitle mb-2 fw-bold">Total Harga</h6>
                  <p>28.000.000</p>
                </div>
              </div>
              <div class="row flex-column">
                <a
                  class="col-lg btn btn-success w-full text-white fw-bold mb-2"
                  style="color: #098a4e"
                  >Beli (2)</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('partials.scripts')