@include('admin.layout.header')
<body>
	{{-- @include('admin.layout.preloader') --}}
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
		@include('admin.layout.navbar')
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20">Status</h4>
									</div>
									{{-- <div class="card-body">
										<div data-available="{{$AllProductsAvailable}}" data-sold="{{$AllProductsSold}}" data-hidden="{{$AllProductsHidden}}" id="productsChart"></div>
										<div class="d-flex justify-content-between mt-4">
											<div class="pr-2">
												<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="8" rx="4" fill="#214BB8"/>
												</svg>
												<h4 class="fs-18 text-black mb-1 font-w600">{{$AllProductsAvailable}}</h4>
												<span class="fs-14">Available</span>
											</div>
											<div class="pr-2">
												<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="8" rx="4" fill="#FE634E"/>
												</svg>
												<h4 class="fs-18 text-black mb-1 font-w600">{{$AllProductsSold}}</h4>
												<span class="fs-14">Sold Out</span>
											</div>

											<div class="">
												<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="8" rx="4" fill="#45ADDA"/>
												</svg>
												<h4 class="fs-18 text-black mb-1 font-w600">{{$AllProductsHidden}}</h4>
												<span class="fs-14">Hidden</span>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>

				</div>
            </div>
        </div>
    </div>

	@include('admin.layout.scripts')

</body>
</html>
