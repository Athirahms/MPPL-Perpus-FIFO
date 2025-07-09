@extends('layouts.app')

@section('title', 'Perpustakaan Unggul - Home')

@section('content')
    <section id="billboard">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<button class="prev slick-arrow">
						<i class="icon icon-arrow-left"></i>
					</button>

					<div class="main-slider pattern-overlay row align-items-center">
						<div class="slider-item col-12">
							<div class="banner-content col-lg-6 col-md-6 order-md-1 order-2">
									<h2 class="banner-title">10-Day Green Smoothie Cleanse</h2>
									<p class="pe-lg-4"> <!-- Added right padding -->
										The New York Times bestselling 10-Day Green Smoothie Cleanse will jump-start your weight loss, increase your energy level, clear your mind, and improve your overall health as you lose ten to fifteen pounds in just ten days.
										Made up of supernutrients from leafy greens and fruits, green smoothies are filling and healthy and you will enjoy drinking them. Your body will also thank you for drinking them as your health and energy improve to levels you never thought possible. It is an experience that could change your life if you stick with it!
										This book provides a shopping list, recipes, and detailed instructions for the 10-day cleanse, along with suggestions for getting the best results. It also offers advice on how to continue to lose weight and maintain good health afterwards.
										Are you ready to look slimmer, healthier, and sexier than you have in years? Then get ready to begin the 10-Day Green Smoothie Cleanse!
									</p>
								<div class="btn-wrap mt-3">
									<a href="#" class="btn btn-outline-accent btn-accent-arrow">
										Read More <i class="icon icon-ns-arrow-right"></i>
									</a>
								</div>
							</div>
							<!-- Image (Right Side) -->
							<div class="col-lg-6 col-md-6 order-md-2 order-1">
								<img src="https://m.media-amazon.com/images/I/71Z9+ykSVCL._SY466_.jpg" 
									alt="banner" 
									class="img-fluid rounded shadow"> <!-- Added img-fluid -->
							</div>
						</div>

						<div class="slider-item col-12">
							<div class="banner-content col-lg-6 col-md-6 order-md-1 order-2">
									<h2 class="banner-title">11-22-63: A Novel</h2>
									<p class="pe-lg-4"> <!-- Added right padding -->
										On November 22, 1963, three shots rang out in Dallas, President Kennedy died, and the world changed. What if you could change it back?
                                    	In this brilliantly conceived tour de force, Stephen King - who has absorbed the social, political, and popular culture of his generation more imaginatively and thoroughly than any other writer - takes listeners on an incredible journey into the past and the possibility of altering it.
                                    	It begins with Jake Epping, a 35-year-old English teacher in Lisbon Falls, Maine, who makes extra money teaching GED classes. He asks his students to write about an event that changed their lives, and one essay blows him away: a gruesome, harrowing story about the night more than 50 years ago when Harry Dunning’s father came home and killed his mother, his sister, and his brother with a sledgehammer. Reading the essay is a watershed moment for Jake, his life - like Harry’s, like America’s in 1963 - turning on a dime.
									</p>
								<div class="btn-wrap mt-3">
									<a href="#" class="btn btn-outline-accent btn-accent-arrow">
										Read More <i class="icon icon-ns-arrow-right"></i>
									</a>
								</div>
							</div>
							<!-- Image (Right Side) -->
							<div class="col-lg-6 col-md-6 order-md-2 order-1">
								<img src="https://m.media-amazon.com/images/I/91uieuJVKsL._SX342_.jpg" 
									alt="banner" 
									class="img-fluid rounded shadow"> <!-- Added img-fluid -->
							</div>
						</div>
					</div><!--slider-->

					<button class="next slick-arrow">
						<i class="icon icon-arrow-right"></i>
					</button>

				</div>
			</div>
		</div>

	</section>

    <section id="client-holder" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="inner-content">
					<div class="logo-wrap">
						<div class="grid">
							<a href="#"><img src="{{ asset('front/images/client-image1.png') }}" alt="client'></a>
							<a href="#"><img src="{{ asset('front/images/client-image2.png') }}" alt="client'></a>
							<a href="#"><img src="{{ asset('front/images/client-image3.png') }}" alt="client'></a>
							<a href="#"><img src="{{ asset('front/images/client-image4.png') }}" alt="client'></a>
							<a href="#"><img src="{{ asset('front/images/client-image5.png') }}" alt="client'></a>
						</div>
					</div><!--image-holder-->
				</div>
			</div>
		</div>
	</section>

    <section id="featured" name="featured" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Our Recomendations</span>
						</div>
						<h2 class="section-title">Featured Books</h2>
					</div>

					<div class="product-list" data-aos="fade-up">
						<div class="row g-4">

							<div class="col-md-3">
								<div class="product-item h-100 p-3">
									<figure class="product-style">
										<img src="https://m.media-amazon.com/images/I/71BfeUyOOfL._SX342_.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
									</figure>
									<figcaption>
										<h3>12 Rules for Life: An Antidote to Chaos</h3>
										<span>Jordan B. Peterson</span>
										<div class="item-price">4.7</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item h-100 p-3">
									<figure class="product-style">
										<img src="https://m.media-amazon.com/images/I/71XCGVETRZL._SX342_.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
									</figure>
									<figcaption>
										<h3>1984 (Signet Classics)</h3>
										<span>George Orwell</span>
										<div class="item-price">4.7</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item h-100 p-3">
									<figure class="product-style">
										<img src="https://m.media-amazon.com/images/I/81SGz4JTVOL._SY385_.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
									</figure>
									<figcaption>
										<h3>5,000 Awesome Facts (About Everything!) (National Geographic Kids)</h3>
										<span>National Geographic Kids</span>
										<div class="item-price">4.8</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item h-100 p-3">
									<figure class="product-style">
										<img src="https://m.media-amazon.com/images/I/916rT5dnn+L._SX342_.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
									</figure>
									<figcaption>
										<h3>A Dance with Dragons (A Song of Ice and Fire)</h3>
										<span>George R. R. Martin</span>
										<div class="item-price">4.4</div>
									</figcaption>
								</div>
							</div>

						</div><!--ft-books-slider-->
					</div><!--grid-->


				</div><!--inner-content-->
			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="btn-wrap align-right">
						<a href="#" class="btn-accent-arrow">View All Books<i
								class="icon icon-ns-arrow-right"></i></a>
					</div>

				</div>
			</div>
		</div>
	</section>

    <section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-8">

					<div class="row align-items-center g-5">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="https://m.media-amazon.com/images/I/71qEFrebomL._SY385_.jpg" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Best Rating Book</h2>

								<div class="products-content">
									<div class="author-name">By Bill Martin Jr.</div>
									<h3 class="item-title">Brown Bear, Brown Bear, What Do You See?</h3>
									<p>A big happy frog, a plump purple cat, a handsome blue horse, and a soft yellow duck-- all parade across the pages of this delightful picture book classic, Brown Bear, Brown Bear, What Do You See?</p>
									<div class="item-price">4.9</div>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">read it now <i
												class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

    <section id="popular-books" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Readers Favourite Books</span>
						</div>
						<h2 class="section-title">Popular Books</h2>
					</div>

					<ul class="nav nav-tabs justify-content-center border-0 mb-4" id="booksTab" role="tablist">
    					<li class="nav-item" role="presentation">
        					<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-genre" type="button" role="tab">All Genre</button>
    					</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="nonfiction-tab" data-bs-toggle="tab" data-bs-target="#non-fictional" type="button" role="tab">Non-Fictional</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="fiction-tab" data-bs-toggle="tab" data-bs-target="#fictional" type="button" role="tab">Fictional</button>
						</li>
					</ul>

					<div class="tab-content" id="booksTabContent">
						<div class="tab-pane fade show active" id="all-genre" role="tabpanel">
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/81G49KKcfTL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Gentleman in Moscow: A Novel</h3>
											<span>Amor Towles</span>
											<div class="item-price">4.7</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/616cd8+tWLL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Higher Loyalty: Truth, Lies, and Leadership</h3>
											<span>James Comey</span>
											<div class="item-price">4.7</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/91E7UQcj2cL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Man Called Ove: A Novel</h3>
											<span>Fredrik Backman</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/71S6X87aR1L._SY466_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Patriot's History of the United States: From Columbus's Great Discovery to the War on Terror</h3>
											<span>Larry Schweikart</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

							</div>
							<div class="row">

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/918PGSadt1L._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Game of Thrones: A Song of Ice and Fire, Book 1</h3>
											<span>George R.R. Martin</span>
											<div class="item-price">4.7</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/91yvJ0DD7lL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Clash of Kings: A Song of Ice and Fire, Book 2</h3>
											<span>George R.R. Martin</span>
											<div class="item-price">4.7</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/91YM9LNnpxL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Storm of Swords: A Song of Ice and Fire, Book 3 </h3>
											<span>George R.R. Martin</span>
											<div class="item-price">4.8</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/81mzJdSTvZL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Feast for Crows: A Song of Ice and Fire, Book 4</h3>
											<span>George R.R. Martin</span>
											<div class="item-price">4.5</div>
										</figcaption>
									</div>
								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="non-fictional" role="tabpanel">
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/71oJTG0-e3L._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Stolen Life: A Memoir</h3>
											<span>Jaycee Dugard</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/71Wt5fBfO0L._SY466_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>Act Like a Lady, Think Like a Man, Expanded Edition: What Men Really Think About Love, Relationships, Intimacy, and Commitment―Relationship Advice from a Man's Perspective</h3>
											<span>Steve Harvey</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/61jtpcRHahL._SY342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>Adult Coloring Book Designs: Stress Relief Coloring Book: Garden Designs, Mandalas, Animals, and Paisley Patterns </h3>
											<span>Adult Coloring Book Designs</span>
											<div class="item-price">4.5</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/91qGvnLdVeS._SY385_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>Adult Coloring Book: Stress Relieving Animal Designs</h3>
											<span>Blue Star Coloring</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="fictional" role="tabpanel">
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/916rT5dnn+L._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Dance with Dragons: A Song of Ice and Fire, Book 5 </h3>
											<span>George R.R. Martin</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/91d3OezuGIL._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>A Wrinkle in Time (Time Quintet)</h3>
											<span>Madeleine L'Engle</span>
											<div class="item-price">4.5</div>
										</figcaption>
									</div>
								</div>

                                <div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/81nWPkdM+GL._SY466_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>All the Light We Cannot See</h3>
											<span>Anthony Doerr</span>
											<div class="item-price">4.6</div>
										</figcaption>
									</div>
								</div>

                                <div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="https://m.media-amazon.com/images/I/A1qVPW7ci2L._SX342_.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Read More</button>
										</figure>
										<figcaption>
											<h3>Allegiant</h3>
											<span>Veronica Roth</span>
											<div class="item-price">3.9</div>
										</figcaption>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--inner-tabs-->
			</div>
		</div>
	</section>
@endsection