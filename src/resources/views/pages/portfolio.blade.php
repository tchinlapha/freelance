@extends('layouts.master') 
@section('content')

<div id="page-title-background">
        <div id="page-title">
            <div class="width-container">
                <h1>Portfolio</h1>
                <div id="page-title-description">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                        blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                </div>
                <div class="clearfix"></div>
                <ul id="portfolio-sub-nav">
                    <li class="cat-item current-cat">
                        <a href="portfolio.html">All</a>
                    </li>
                    <li class="cat-item">
                        <a href="portfolio-commercial.html" title="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.">Commercial</a>
                    </li>
                    <li class="cat-item">
                        <a href="portfolio-kitchen-remodeling.html" title="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.">Kitchen Remodeling</a>
                    </li>
                    <li class="cat-item">
                        <a href="portfolio-residential.html" title="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.">Residential</a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function ($) { $("#page-title-background").backstretch(["images/demo/page-title.jpg"], { fade: 750, }); });
        </script>
    </div>

    <div id="main">
        <div class="width-container">
            <div id="portfolio-index">
                <div class="grid3column-progression ">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/shutterstock_110160008-600x338.jpg" alt="shutterstock_110160008">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Commercial Building </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-commercial.html">Commercial</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="grid3column-progression">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/shutterstock_82080655-600x338.jpg" alt="shutterstock_110160008">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Commercial Portfolio Example </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-commercial.html">Commercial</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="grid3column-progression lastcolumn-progression">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <div class="flexslider gallery-progression">
                                    <ul class="slides">
                                        <li class="flex-active-slide">
                                            <a href="single-portfolio-post.html">
												<img src="images/demo/photodune-2079559-interior-of-modern-house-kitchen-m-600x338.jpg" alt="Interior of modern house kitchen" draggable="false">
											</a>
                                        </li>
                                        <li>
                                            <a href="single-portfolio-post.html">
												<img src="images/demo/photodune-2079614-interior-of-modern-house-kitchen-m-600x338.jpg" alt="photodune-2079614-interior-of-modern-house-kitchen-m" draggable="false">
											</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Kitchen Gallery Example </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-kitchen-remodeling.html">Kitchen Remodeling</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
                <div class="clearfix"></div>

                <div class="grid3column-progression ">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/kitchen-1-600x338.jpg" alt="shutterstock_110160008">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Modern Kitchen </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-kitchen-remodeling.html">Kitchen Remodeling</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="grid3column-progression">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/photodune-283468-modern-home-in-rural-setting-m-600x338.jpg" alt="photodune-283468-modern-home-in-rural-setting-m-600x338.jpg">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Swardson Residence </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-residential.html">Residential</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="grid3column-progression lastcolumn-progression">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/photodune-768255-suburban-executive-home-m-600x338.jpg" alt="photodune-768255-suburban-executive-home-m-600x338.jpg">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Garcia Residence </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-residential.html">Residential</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="clearfix"></div>

                <div class="grid3column-progression ">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/photodune-2847249-suburban-homes-m-600x338.jpg" alt="photodune-2847249-suburban-homes-m-600x338.jpg">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Campbell’s Residence </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-residential.html">Residential</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="grid3column-progression">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/photodune-1359286-country-house-m-600x338.jpg" alt="photodune-1359286-country-house-m-600x338.jpg">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Brown’s Residence </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-residential.html">Residential</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>

                <div class="grid3column-progression lastcolumn-progression">
                    <article>
                        <div class="portfolio-index-pro">
                            <div class="featured-image-portfolio">
                                <a href="single-portfolio-post.html">
									<img width="600" height="338" src="images/demo/photodune-1207257-american-home-m-600x338.jpg" alt="photodune-1207257-american-home-m-600x338.jpg">
								</a>
                            </div>
                            <div class="portfolio-index-text">
                                <div class="portfolio-index-padding">
                                    <h4 class="portfolio-index-title">
                                        <a href="single-portfolio-post.html"> Jones Residence </a>
                                    </h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>
                                                <a href="portfolio-residential.html">Residential</a>
                                                <i class="fa fa-asterisk"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- close .width-container -->
        <div class="clearfix"></div>
    </div>

@endsection